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
<<<<<<< benjamin-chat
                <div class="profil_about_user container ">
                    <div class="profil_description">
                        <ul class="social_list">
                            <li class="social_item">
                                <a href="">
                                    <i class='bx bxl-twitch' ></i>
                                    <span>fezfefz ezf</span>
                                </a>
                            </li>
                            <li class="social_item">
                                <a href="">
                                    <i class='bx bxl-twitter'></i>
                                    <span>efz fezfez fez</span>
                                </a>
                            </li>
                            <li class="social_item">
                                <a href="">
                                    <i class='bx bxl-instagram' ></i>
                                    <span>ez fzefe ezfezf ezzf</span>
                                </a>
                            </li>
                        </ul>
                        <div class="description_profil">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptates praesentium maxime in ipsam inventore temporibus, quos repudiandae tenetur itaque corrupti, rem expedita error iusto quae. Incidunt voluptatem voluptatibus pariatur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem quidem tempora tempore mollitia nesciunt consequatur, quos sequi? Sapiente cupiditate esse dolorum aperiam. Voluptate, veritatis recusandae dolores reprehenderit ea tempore repellendus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem incidunt molestiae amet, aliquam optio eveniet totam enim laudantium vel reiciendis asperiores dolore tempora officiis temporibus, minima beatae blanditiis eos id.</p>
                        </div>
                        
                    </div>
                    
                    
                    <div class="btn_send_msg">
                        <a href="">Envoyer un message</a>
                    </div>
=======
                <div class="profil_pseudo">
                    <h2>{{ $user->pseudo }}</h2>
>>>>>>> main
                </div>
            </div>
            <div class="profil_about_user container ">
                <div class="profil_description">
                    <p>{{ $user->description }}</p>
                </div>
                <ul class="social_list">
                    @if ($user->twitch)
                    <li class="social_item">
                        <a href="https://www.twitch.tv/{{ $user->twitch }}" target="_blank">
                            <i class='bx bxl-twitch'></i>
                            <span>{{-- $user->twitch --}}</span>
                        </a>
                    </li>
                    @endif
                    @if ($user->twitter)
                    <li class="social_item">
                        <a href="https://twitter.com/{{ $user->twitter }}" target="_blank">
                            <i class='bx bxl-twitter'></i>
                            <span>{{-- $user->twitter --}}</span>
                        </a>
                    </li>
                    @endif
                    @if ($user->instagram)
                    <li class="social_item">
                        <a href="https://www.instagram.com/{{ $user->instagram }}" target="_blank">
                            <i class='bx bxl-instagram' ></i>
                            <span>{{-- $user->instagram --}}</span>
                        </a>
                    </li>
                    @endif
                </ul>
                
                @auth
                @if ($user->admin === 0)
                <div class="profil_btn">
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