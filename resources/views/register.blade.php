@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section("content") 
    <main>
        <!-- FORMULAIRE D'INSCRITPION -->
        <section id="register-form">
            <div class="container">
                <h1>S'inscrire</h1>
                <form method="post" autocomplete="off">
                    <div class="content">

                        <div class="errors">
                            <?php if (isset($_SESSION['flash'])): ?>
                                <?php foreach($_SESSION['flash'] as $type => $message): ?>
                                    <div class="alert alert-<?= $type; ?>">
                                        <i class='bx bx-x'></i>
                                        <?= $message; ?>
                                    </div>
                                <?php endforeach; ?>
                                <?php unset($_SESSION['flash']); ?>
                            <?php endif; ?>
                        </div>

                        <div class="name_content">
                            <input type="text" name="register_lastname" id="register_lastname" placeholder="Nom">
                            <input type="text" name="register_firstname" id="register_firstname" placeholder="Prénom">
                        </div>
                        <input type="text" name="register_pseudo" id="register_pseudo" placeholder="Pseudo">
                        <input type="email" name="register_email" id="register_email" placeholder="E-mail">
                        <div class="pass_content">
                            <div class="input_password">
                                <input type="password" name="register_pass" id="register_pass" placeholder="Mot de passe">
                                <i class="bx bx-lock-alt"></i>
                            </div>
                            <div class="input_password">
                                <input type="password" name="register_confirm_pass" id="register_confirm_pass" placeholder="Confirmer le mot de passe">
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
                
                    <button type="submit" name="register_btn" id="register_btn">Inscription</button>
                </form>
                <div class="form_footer">
                    <a href="{{ Route('login') }}">Connexion</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section("script")

    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>

@endsection