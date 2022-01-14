@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content") 
    <main>
        <section id="slider">
            <div class="slider">
                <div class="slide_viewer">
                    <div class="slide_group">
                        <div class="slide">
                            <a href=""></a>
                        </div>
                        <div class="slide">
                            <a href=""></a>
                        </div>
                        <div class="slide">
                        </div>
                        <div class="slide">
                            <a href=""></a>
                        </div>
                    </div>
                </div>
                <div class="slide_buttons"></div>
            </div>

            <div class="directional_nav">
                <div class="previous_btn" title="Previous">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                        <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
                    </svg>
                </div>
                <div class="next_btn" title="Next">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                        <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
                    </svg>
                </div>
            </div>

        </section>

        <section id="presentation">
            <div class="container">
                <h1>Bienvenu sur le site de la team Amon</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores maxime nemo corporis nisi libero eius, mollitia, soluta exercitationem reprehenderit similique laboriosam distinctio corrupti quasi eligendi eaque, sequi delectus! Laboriosam, dolor!</p>
                <a href="{{ Route("team") }}" class="btn">En savoir plus</a>
            </div>
        </section>

        <section id="actus">
            <div class="container">
                <h2>Actualités</h2>

                <div class="actu_grid">

                    <div class="actu_content">
                        <img src="" alt="" class="img_container">
                        <p>21/12/2021</p>
                        <h3>Amon lauch this e-sport team</h3>
                    </div>
                    <div class="actu_content">
                        <img src="" alt="" class="img_container">
                        <p>21/12/2021</p>
                        <h3>Amon lauch this e-sport team</h3>
                    </div>

                    <div class="actu_content">
                        <img src="" alt="" class="img_container">
                        <p>21/12/2021</p>
                        <h3>Amon lauch this e-sport team</h3>
                    </div>
                    <div class="actu_content">
                        <img src="" alt="" class="img_container">
                        <p>21/12/2021</p>
                        <h3>Amon lauch this e-sport team</h3>
                    </div>
                    <div class="actu_twitter"> <!-- Mettre un overflow auto et une taille fixe à la div -->
                        <a class="twitter-timeline" 
                            data-lang="fr"
                            data-theme="dark"
                            href="https://twitter.com/AmonEsport?ref_src=twsrc%5Etfw"
                            data-chrome="nofooter transparent"
                            data-tweet-limit="10">
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection
@section("script")

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
    <script src="https://platform.twitter.com/widgets.js"></script>

@endsection
