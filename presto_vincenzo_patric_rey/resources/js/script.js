document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const activeBackground = document.getElementById('activeBackground');

    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    if (loginBtn && registerBtn && activeBackground) {
        loginBtn.addEventListener('click', function() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
            document.getElementById('loginForm').classList.add('fade-in');
            document.getElementById('titolo').innerHTML = "BENTORNAT*";
            
            activeBackground.style.transform = 'translateX(0)';  // Ritorna al bottone Login
        });

        registerBtn.addEventListener('click', function() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('registerForm').style.display = 'block';
            document.getElementById('registerForm').classList.add('fade-in');
            document.getElementById('titolo').innerHTML = "CREA IL TUO ACCOUNT";
            activeBackground.style.transform = `translateX(${registerBtn.offsetLeft - loginBtn.offsetLeft}px)`;  // Sposta al bottone Registrati
        });

        // Mostra il form di login di default
        const formType = getQueryParam('form');
        if (formType === 'register') {
            registerBtn.click();
        } else {
            loginBtn.click();
        }
    }
});