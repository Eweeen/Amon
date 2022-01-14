<x-form-layout>
    <x-slot name="style">
        <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    </x-slot>
    <x-auth-card>
        <section id="register-form">
            <div class="container">
                <h1>S'inscrire</h1>
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="content">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <div class="name_content">
                            <x-input id="lastname" type="text" name="lastname" placeholder="Nom" :value="old('lastname')" required autofocus />
                            <x-input id="firstname" type="text" name="firstname" placeholder="Prénom" :value="old('firstname')" required />
                        </div>
                        <x-input id="pseudo" type="text" name="pseudo" placeholder="Pseudo" :value="old('pseudo')" required />
                        <x-input id="email" type="email" name="email" placeholder="E-mail" :value="old('email')" required />
                        <div class="pass_content">
                            <div class="input_password">
                                <x-input id="password"
                                type="password"
                                name="password"
                                placeholder="Mot de passe"
                                required autocomplete="new-password" />
                                <i class="bx bx-lock-alt"></i>
                            </div>
                            <div class="input_password">
                                <x-input id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirmer le mot de passe" 
                                required />
                                <i class="bx bx-lock-alt"></i>
                            </div>
                        </div>
                        <div class="verif_email">
                            <div class="critere_bar">
                                <span></span><span></span><span></span>
                            </div>
                            
                            <ul class="criteres_mdp">
                                <li>8 caractères minimum</li>
                                <li>Lettres majuscules et minuscules (aA - zZ)</li>
                                <li>Chiffre (0 - 9)</li>
                                <li>Caractères spéciaux (@#&)</li>
                            </ul>
                        </div>
                    </div>
                    <x-button name="register_btn" id="register_btn">
                        {{ __('Inscription') }}
                    </x-button>
                </form>
                    
                <div class="form_footer">
                    <a href="{{ route('login') }}">
                        {{ __('Connexion') }}
                    </a>
                </div>
            </div>
        </section>
    </x-auth-card>
</x-form-layout>
