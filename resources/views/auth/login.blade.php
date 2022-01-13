<x-form-layout>
    <x-slot name="style">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </x-slot>
    <x-auth-card>
        <section id="login-form">
            
            <h1>Se connecter</h1>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="content">

                    <!-- Session Status -->
                    <x-auth-session-status class="errors" :status="session('status')" />
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                    
                    <!-- Logs -->
                    <x-input id="login_user" type="text" name="login_user" placeholder="Pseudo / E-mail" :value="old('login_user')" required autofocus />
                    
                    <!-- Password -->
                    <div class="input_password">
                        <x-input id="login_pass"
                        type="password"
                        name="login_pass"
                        placeholder="Mot de passe"
                        required autocomplete="current-password" />
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="btn_remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">
                            <p>{{ __('Se souvenir de moi') }}</p>
                        </label>
                    </div>
                </div>
                <x-button name="login_btn" id="login_btn">
                    {{ __('Connexion') }}
                </x-button>
            </form>
                
            <div class="form_footer">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    {{ __('Inscription') }}
                </a>
                @endif
            </div>
        </section>
    </x-auth-card>
</x-form-layout>