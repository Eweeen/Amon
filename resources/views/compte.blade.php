@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/compte.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content") 
    <main>
        <section id="user-profil">
            
            <div class="container">
                <h2>Mon compte</h2>

                <div class="user_container">

                    @if ($errors->any())
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <br>
                    @endif

                    <form method="post" action="/update/links/{{ Auth::user()->id }}" enctype="multipart/form-data">
                        @csrf
                        <label for="user_img_profil" class="user_img">
                            <div class="user_img_hover"><i class='bx bx-camera'></i></div>
                            <div class="img_container">
                                <img src="{{ asset('img/'.Auth::user()->img_profil) }}" alt="Image Profil {{ Auth::user()->pseudo }}">
                            </div>
                        </label>
                        <input type="file" name="user_img_profil" id="user_img_profil">
                        
                        <div class="social">
                            <p>Réseaux sociaux</p>
                            <ul class="social_list">
                                <li class="social_item">
                                    <i class='bx bxl-twitch' ></i>
                                    <input type="text" name="user_twitch" id="user_twitch" value="{{ $links->twitch }}">
                                </li>
                                <li class="social_item">
                                    <i class='bx bxl-twitter'></i>
                                    <input type="text" name="user_twitter" id="user_twitter" value="{{ $links->twitter }}">
                                </li>
                                <li class="social_item">
                                    <i class='bx bxl-instagram' ></i>
                                    <input type="text" name="user_instagram" id="user_instagram" value="{{ $links->instagram }}">
                                </li>
                            </ul>
                        </div>
                        
                        <div class="fields">
                            <label for="user_description">Description du profil</label>
                            <textarea name="user_description" id="user_description" cols="30" rows="5">{{ $links->description }}</textarea>
                        </div>
                        <h3>Informations du compte</h3>
                        <div class="fields">
                            <label for="user_lastname">Nom</label>
                            <input type="text" name="user_lastname" id="user_lastname" value="{{ Auth::user()->lastname }}">
                        </div>
                        <div class="fields">
                            <label for="user_firstname">Prénom</label>
                            <input type="text" name="user_firstname" id="user_firstname" value="{{ Auth::user()->firstname }}">
                        </div>
                        <div class="fields">
                            <label for="user_pseudo">Pseudo</label>
                            <input type="text" name="user_pseudo" id="user_pseudo" value="{{ Auth::user()->pseudo }}">
                        </div>

                        <div class="fields">
                            <label for="user_email">E-mail</label>
                            <input type="email" name="user_email" id="user_email" value="{{ Auth::user()->email }}" disabled>
                        </div>

                        <button type="submit" name="formToUpdateInfos">Enregistrer les modifications</button>
                    </form>
                    
                    <h3>Changer de mot de passe</h3>
                    
                    <form method="post" action="/update/password/{{ Auth::user()->id }}">
                        @csrf
                        <div class="fields input_password">
                            <input type="password" name="user_old_pass" id="user_old_pass" placeholder="Entrez votre mot de passe actuel">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="fields input_password" id="">
                            <input type="password" name="password" id="password" placeholder="Entrez le nouveau mot de passe">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="fields input_password">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez le nouveau mot de passe">
                            <i class="bx bx-lock-alt"></i>
                        </div>

                        <div class="verif_password">
                            <div class="critere_bar">
                                <span></span><span></span><span></span>
                            </div>
                            
                            <ul class="criteres_mdp">
                                <li>8 caractères minimum</li>
                                <li>Lettres majuscules et minuscules (az - AZ)</li>
                                <li>Chiffre (0 - 9)</li>
                                <li>Caractères spéciaux (@#&)</li>
                            </ul>
                        </div>

                        <button type="submit" name="formToUpdatePassword">Modifier le mot de passe</button>
                    </form>

                </div>
            </div>
            
        </section>
    </main>
@endsection

@section("script")

    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>

@endsection