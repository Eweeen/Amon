<x-form-layout>
    <x-slot name="style">
        <link href="{{ asset('css/forgetPass.css') }}" rel="stylesheet">
    </x-slot>
    <x-auth-card>
        <section id="forget-form">

            <h1>Mot de passe oublié</h1>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Session Status -->
                <x-auth-session-status :status="session('status')" />
            
                <!-- Validation Errors -->
                <x-auth-validation-errors :errors="$errors" />

                <!-- Email Address -->
                <x-input id="email" type="email" name="email" placeholder="Entrez l'email du compte" :value="old('email')" required autofocus />
                
                <x-button>{{ __('Valider') }}</x-button>
            </form>
        </section>
    </x-auth-card>
</x-form-layout>
