@extends('layouts.app')

@section('nav')
    @include('partials.nav')
@endsection

@section("styles")
    <link href="{{ asset('libs/aos/aos.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/team.css') }}" rel="stylesheet">
@endsection

@section("content") 
    <main>
        <section id="team">
            <div class="container" data-aos="fade-up">
                <img src="" alt="" data-aos="zoom-in">
                <h1 data-aos="fade-up" data-aos-delay="100">Amon, c'est quoi ?</h1>
                <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et quam, sint fugiat saepe enim, maxime nemo magnam dolore dolor molestias repellat suscipit natus aperiam asperiores animi laborum voluptate pariatur? Nesciunt.
                Optio, pariatur quod. Mollitia est impedit, quod, tempora beatae saepe accusantium nihil laudantium, doloremque ex incidunt repudiandae. Nostrum magnam ipsa dignissimos earum deserunt et tenetur beatae, temporibus dolorum aspernatur minima!</p>
                <div class="social" data-aos="fade-up" data-aos-delay="200">
                    <h3>Retrouvez nous sur les réseaux sociaux !</h3>
                    <ul class="social_list">
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-twitter' ></i></a>
                        </li>
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-discord' ></i></a>
                        </li>
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-twitch' ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="players">
            <div class="container" data-aos="fade-up">
                <div class="container_title" data-aos="fade-up">
                    <h2>Nos joueurs</h2>
                </div>
                <div class="profils_card_list">

                    <div class="profil_card" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="img_container">
                            <img src="{{ asset('img/default_user.png') }}" alt="">
                        </div>
                        <div class="profil_card_infos">
                            <h3>Pseudo</h3>
                            <p>Place occupée</p>
                        </div>
                        <ul class="profil_card_social">
                            <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                            <li><a href=""><i class='bx bxl-discord'></i></a></li>
                            <li><a href=""><i class='bx bxl-twitch'></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="staff">
            <div class="container" data-aos="fade-up">
                <div class="container_title" data-aos="fade-up">
                    <h2>Notre staff</h2>
                </div>
                <div class="profils_card_list">

                    <div class="profil_card" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="img_container">
                            <img src="{{ asset('img/default_user.png') }}" alt="">
                        </div>
                        <div class="profil_card_infos">
                            <h3>Pseudo</h3>
                            <p>Place occupée</p>
                        </div>
                        <ul class="profil_card_social">
                            <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                            <li><a href=""><i class='bx bxl-discord'></i></a></li>
                            <li><a href=""><i class='bx bxl-twitch'></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
@endsection

@section("script")
    <script src="libs/aos/aos.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/team.js') }}"></script>
@endsection