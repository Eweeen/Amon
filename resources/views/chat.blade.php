@extends('layouts.app')

@section("styles")
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
@endsection

@section('nav')
    @include('partials.nav')
@endsection

@section("content") 

    <main>
        <!-- ========== SECTION AFFICHAGE DE TOUTE LES CONVERSATIONS ========== -->
        <section id="list-chat">
    {{-- SI L'UTILISATEUR EST CONNECTER --}}
            @auth
                <div class="bar">
                    <div class="bar_search_container">
                        <label for="search_conv"><i class='bx bx-search'></i></label>
                        <input type="text" name="search_conv" id="search_conv" placeholder="Rechercher" autocomplete="off">
                    </div>
                    <div class="bar_add_conversation btn">
                        <i class='bx bx-conversation'></i>
                    </div>
                </div>
            @endauth
    {{-- FIN DE LA CONDITION --}}

            <ul class="list_conv">
                <!-- Le chat général n'a pas les 3 points pour supprimer la conversation car la conversation ne peux pas être supprimer -->
                <li class="item_conv" data-conv="1000000000">
                    <div class="conv_img img_container">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo Amon">
                    </div>
                    <div class="conv_infos">
                        <h2 class="conv_name">Chat Général</h2>
                        <p class="conv_last_msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                </li>

                @auth
                    @for($i = 0; $i < count($messages); $i++)
                    <li class="item_conv" data-conv="{{ $messages[$i]->id_message }}">
                        <div class="conv_img img_container">
                            <img src="{{ asset('img/'.$user[$i]->img_profil) }}" alt="{{ $user[$i]->pseudo }}">
                        </div>
                        <div class="conv_infos">
                            <h2 class="conv_name">{{ $user[$i]->pseudo }}</h2>
                            <p class="conv_last_msg">{{ $messages[$i]->message }}</p>
                        </div>

                        <div class="modal_container">
                            <div class="btn btn_dot">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </div>
                            <div class="modal_settings_chat">
                                <span id="delete-chat">Supprimer</span>
                            </div>
                        </div>
                    </li>
                    @endfor
                @endauth
            </ul>
        </section>
        <!-- ========== SECTION AFFICHAGE DU CHAT ========== -->
        <section id="chat">
            <div class="chat_infos"> 
                <div class="btn btn_back">
                    <i class="bx bx-chevron-left"></i>
                </div>
                <h1>Chat Général</h1>
                <div class="modal_container">
                    <div class="btn btn_dot">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </div>
                    <div class="modal_settings_chat">
                        <span id="delete-chat">Supprimer</span>
                    </div>
                </div>
            </div>

            <div class="chat_container">
                <div class="msg msg_left">
                    <div class="msg_img_profil img_container">
                        <img src="{{ asset('img/default_user.png') }}">
                    </div>
                    <div class="msg_container">
                        <div class="msg_pseudo">BenjaminDrn</div>
                        <div class="msg_content">
                            <p>Lorem int earum quae magni fuga!</p>
                            <div class="modal_container">
                                <div class="btn btn_dot">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </div>
                                <div class="modal_settings_chat">
                                    <span id="delete-chat">Supprimer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="msg msg_right"> 
                    <div class="msg_img_profil img_container">
                        <img src="{{ asset('img/default_user.png') }}">
                    </div>
                    <div class="msg_container">
                        <div class="msg_pseudo">BenjaminDrn</div>
                        <div class="msg_content">
                            <p>Lorem int earum quae magni fuga!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat_bar">
    {{-- SI L'UTILISATEUR EST CONNECTER --}}
            @auth
                <div class="chat_bar_container">
                    <input type="text" name="chat_bar" id="chat_bar" placeholder="Message" autocomplete="off">
                    <button id="send_msg_btn"><i class="bx bx-send"></i></button>
                </div>
    {{-- SI L'UTILISATEUR N'EST PAS CONNECTER --}}
            @else
                <div class="chat_bar_login">
                    <div class="login_msg">
                        <i class="bx bx-lock-alt"></i>
                        <p>Connectez-vous pour envoyer des messages</p>
                    </div>
                    <a href="{{ route('login') }}"><button>Connexion</button></a>
                </div>
            @endauth
    {{-- FIN DE LA CONDITION --}}
            </div>
        </section>  
    </main>

@endsection

@section("script")
    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
@endsection