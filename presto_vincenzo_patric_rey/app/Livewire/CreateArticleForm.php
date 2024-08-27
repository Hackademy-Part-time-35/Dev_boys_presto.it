<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;
    public $images = [];
    public $temporary_images;
    public function updatedTemporaryImages() 
    {
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
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

    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
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
                $this->article->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        $this->cleanForm();
        session()->flash('success', 'Articolo creato correttamente');
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
