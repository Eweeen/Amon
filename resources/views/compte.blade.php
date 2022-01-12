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

                    <form method="post" enctype="multipart/form-data">

                        <label for="user_img_profil" class="user_img">
                            <div class="user_img_hover"><i class='bx bx-camera'></i></div>
                            <div class="img_container">
                                <img src="../app/data/users/" alt="">
                            </div>
                        </label>
                        <input type="file" name="user_img_profil" id="user_img_profil">
                        
                        <div class="social">
                            <p>Réseaux sociaux</p>
                            <ul class="social_list">
                                <li class="social_item">
                                    <i class='bx bxl-twitch' ></i>
                                    <input type="text" name="user_twitch" id="user_twitch" value="">
                                </li>
                                <li class="social_item">
                                    <i class='bx bxl-twitter'></i>
                                    <input type="text" name="user_twitter" id="user_twitter" value="">
                                </li>
                                <li class="social_item">
                                    <i class='bx bxl-instagram' ></i>
                                    <input type="text" name="user_instagram" id="user_instagram" value="">
                                </li>
                            </ul>
                        </div>
                        
                        <div class="fields">
                            <label for="user_description">Description du profil</label>
                            <textarea name="user_description" id="user_description" cols="30" rows="5"></textarea>
                        </div>
                        <h3>Informations du compte</h3>
                        <div class="fields">
                            <label for="user_lastname">Nom</label>
                            <input type="text" name="user_lastname" id="user_lastname" value="">
                        </div>
                        <div class="fields">
                            <label for="user_firstname">Prénom</label>
                            <input type="text" name="user_firstname" id="user_firstname" value="">
                        </div>
                        <div class="fields">
                            <label for="user_pseudo">Pseudo</label>
                            <input type="text" name="user_pseudo" id="user_pseudo" value="">
                        </div>

                        <div class="fields">
                            <label for="user_email">E-mail</label>
                            <input type="email" name="user_email" id="user_email" value="" disabled>
                        </div>

                        <button type="submit" name="formToUpdateInfos">Enregistrer les modifications</button>
                    </form>
                    
                    

                    <h3>Changer de mot de passe</h3>
                    
                    <form method="post">
                        <div class="fields input_password">
                            <input type="password" name="user_old_pass" id="user_old_pass" placeholder="Entrez votre mot de passe actuel">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="fields input_password" id="">
                            <input type="password" name="user_new_pass" id="register_pass" placeholder="Entrez le nouveau mot de passe">
                            <i class="bx bx-lock-alt"></i>
                        </div>
                        <div class="fields input_password">
                            <input type="password" name="user_confirm_pass" id="user_confirm_pass" placeholder="Confirmez le nouveau mot de passe">
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