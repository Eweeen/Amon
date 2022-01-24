@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content") 

   <main>
        <section id="profil">
            <div class="profil_picture">
                <div class="img_container">
                    <img src="{{ asset('img/'.$user->img_profil) }}" alt="{{ $user->pseudo }}">
                </div>
                <div class="profil_pseudo">
                    <h2>{{ $user->pseudo }}</h2>
                </div>
            </div>
            <div class="profil_about_user container">
                <div class="profil_description">
                    <ul class="social_list">
                        @if ($user->twitch)
                        <li class="social_item">
                            <a href="https://www.twitch.tv/{{ $user->twitch }}" target="_blank">
                                <i class='bx bxl-twitch'></i>
                                <span>{{ $user->twitch }}</span>
                            </a>
                        </li>
                        @endif
                        @if ($user->twitter)
                        <li class="social_item">
                            <a href="https://twitter.com/{{ $user->twitter }}" target="_blank">
                                <i class='bx bxl-twitter'></i>
                                <span>{{ $user->twitter }}</span>
                            </a>
                        </li>
                        @endif
                        @if ($user->instagram)
                        <li class="social_item">
                            <a href="https://www.instagram.com/{{ $user->instagram }}" target="_blank">
                                <i class='bx bxl-instagram' ></i>
                                <span>{{ $user->instagram }}</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                    @if ($user->description)
                        <div class="description_profil">
                            <p>{{ $user->description }}</p>
                        </div>
                    @endif
                </div>
                @auth
                @if ($user->admin === 0)
                <div class="btn_send_msg">
                    <a href="">Envoyer un message</a>
                </div>
                @endif
                @endauth
            </div>
        </section>
   </main>

@endsection

@section("script")


@endsection