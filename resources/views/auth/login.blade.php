@vite('resources/css/login.css')
@vite('resources/css/app.css')

@include('_nav')
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('login') }}" class="login">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <label>Adresse Mail</label>
                    <input type="text" name="email" class="login__input" placeholder="Email" required autofocus>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <label>Mot de passe</label>
                    <input type="password" name="password" class="login__input" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="button login__submit">
                    <span class="button__text">S'inscrire</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
            <div class="social-login">
                <h3>Se connecter via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>        
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>        
    </div>
</div>
@include('_footer')
@include('_sponsor')