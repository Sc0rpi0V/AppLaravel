@vite('resources/css/register.css')
@vite('resources/css/app.css')
@include('_nav')
@include('_head-register')

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('register') }}" class="register">
                @csrf

                <!-- Sexe -->
                <div class="register__field">
                    <i class="register__icon fas fa-user"></i>
                    <label>Sexe</label>
                    <div class="flex">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Mr" class="form-radio" required>
                            <span class="ml-2">{{ __('Monsieur') }}</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" name="gender" value="Mme" class="form-radio" required>
                            <span class="ml-2">{{ __('Madame') }}</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" name="gender" value="Mlle" class="form-radio" required>
                            <span class="ml-2">{{ __('Mademoiselle') }}</span>
                        </label>
                    </div>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <!-- Name -->
                <div class="register__field">
                    <i class="register__icon fas fa-id-card"></i>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" class="register__input" placeholder="Nom" :value="old('name')" required autofocus>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- FirstName -->
                <div class="register__field">
                    <i class="register__icon fas fa-id-card"></i>
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" class="register__input" placeholder="Prénom" :value="old('firstname')" required>
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="register__field">
                    <i class="register__icon fas fa-envelope"></i>
                    <label for="email">Adresse Mail</label>
                    <input type="email" id="email" name="email" class="register__input" placeholder="Email" :value="old('email')" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="register__field">
                    <i class="register__icon fas fa-lock"></i>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" class="register__input" placeholder="Mot de passe" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="register__field">
                    <i class="register__icon fas fa-lock"></i>
                    <label for="password_confirmation">Confirmation Mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="register__input" placeholder="Confirmation Mot de passe" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="button register__submit">
                    <span class="button__text">S'inscrire</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>

                <div class="social-login">
                    <h3>Se connecter via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>

                <a href="{{ route('login') }}">
                    <span class="button__create">Se connecter</span>
                </a>
            </form>
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
