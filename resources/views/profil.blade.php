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
                        <img src="" alt="">
                    </div>
                    <div class="profil_pseudo">
                        <h2>Lorem ipsum</h2>
                    </div>
                </div>
                <div class="profil_about_user container ">
                    <div class="profil_description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptates praesentium maxime in ipsam inventore temporibus, quos repudiandae tenetur itaque corrupti, rem expedita error iusto quae. Incidunt voluptatem voluptatibus pariatur.</p>
                    </div>
                    <ul class="social_list">
                        <li class="social_item">
                            <a href="">
                                <i class='bx bxl-twitch' ></i>
                                <span></span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="">
                                <i class='bx bxl-twitter'></i>
                                <span></span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="">
                                <i class='bx bxl-instagram' ></i>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="profil_btn">
                        <a href="">Envoyer un message</a>
                    </div>
                </div>
        </section>
   </main>

@endsection

@section("script")


@endsection