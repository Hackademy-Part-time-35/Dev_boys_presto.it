<?php

namespace App\Livewire;
use App\Jobs\ResizeImage;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\RemoveFaces;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $images = [];
    #[Validate('max:6')]
    public $temporary_images;

    #[Validate('required|min:5|max:25')]
    public $title;
    #[Validate('required|min:10|max:250')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;

    public function store()
    {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()

        ]);

        if(count($this->images) > 0){
            foreach ($this->images as $image){
                $newFileName ="articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                // dispatch(new ResizeImage($newImage->path, 500, 300));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 500, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success');
        $this->cleanForm();
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }

    public function updatedTemporaryImages() 
    {
        if($this->validate([
            'temporary_images.*' => 'image|max:4000',
            'temporary_images' => 'max:6'
        ])) {
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
        }

    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function resetSuccess()
    {
        session()->forget('success');
    }

    public function redirectToMySpace() {
        return redirect()->route('auth.account');
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }

   
}
