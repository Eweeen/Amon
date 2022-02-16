<x-form-layout>
    <x-slot name="style">
        <link href="{{ asset('css/forgetPass.css') }}" rel="stylesheet">
    </x-slot>
    <x-auth-card>

        <section id="forget-form">

            <div>
                {{ __('Il s\'agit d\'une zone sécurisée de l\'application. Veuillez confirmer votre mot de passe avant de continuer.') }}
            </div>
            
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                
                <!-- Validation Errors -->
                <x-auth-validation-errors :errors="$errors" />
                
                <!-- Password -->
                <x-input id="password" type="password" name="password" placeholder="Votre mot de passe" required autocomplete="current-password" />
                
                <x-button>{{ __('Confirm') }}</x-button>
            </form>
        </section>
    </x-auth-card>
</x-form-layout>
