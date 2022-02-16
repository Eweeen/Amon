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
                @if ($url !== null)
                <a href="/chat" style="color: inherit;">
                    <li class="item_conv">
                @else 
                    <li class="item_conv actif_conv">
                @endif
                        <div class="item_conv_container">
                            <div class="conv_img img_container">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo Amon">
                            </div>
                            <div class="conv_infos">
                                <h2 class="conv_name">Chat Général</h2>
                                <p class="conv_last_msg">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </li>
                @if ($url !== null)
                </a>
                @endif

                @auth
                @for($i = 0; $i < count($conversations); $i++)
                    @if ($url !== $users[$i]->id)
                    <a href="/chat/{{ $users[$i]->id }}" style="color: inherit;">
                        <li class="item_conv">
                    @else
                        <li class="item_conv actif_conv">
                    @endif
                            <div class="item_conv_container">
                                <div class="conv_img img_container">
                                    <img src="{{ asset('img/'.$users[$i]->img_profil) }}" alt="{{ $users[$i]->pseudo }}">
                                </div>
                                <div class="conv_infos">
                                    <h2 class="conv_name">{{ $users[$i]->pseudo }}</h2>
                                    @if ($conversations[$i]->pseudo === auth()->user()->pseudo)
                                        <p class="conv_last_msg">Vous: {{ $conversations[$i]->message }}</p>
                                    @else
                                        <p class="conv_last_msg">{{ $conversations[$i]->pseudo }}: {{ $conversations[$i]->message }}</p>
                                    @endif
                                </div>
        
                                <div class="modal_container">
                                    <div class="btn btn_dot">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </div>
                                    <div class="modal_bg">
                                        <div class="modal_settings_chat">
                                            <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                            <span class="delete_conversation"><i class='bx bx-trash-alt'></i>Supprimer la conversation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @if ($url !== $users[$i]->id)
                    </a>
                    @endif
                @endfor
                @endauth
            </ul>
            <ul class="list_new_conv">
                <li class="item_conv">
                    <div class="item_conv_container">
                        <div class="conv_img img_container">
                            <img src="" alt="">
                        </div>
                        <div class="conv_infos">
                            <h2 class="conv_name">Ewen</h2>
                            <div class="btn_container">
                                <div class="accept_btn btn"><i class='bx bx-check'></i></div>
                                <div class="refuse_btn btn"><i class='bx bx-x'></i></div>
                            </div>
                        </div>
                    </div>
                </li>
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
                    <div class="modal_bg">
                        <div class="modal_settings_chat">
                            <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                            <span class="delete_conversation"><i class='bx bx-trash-alt'></i>Supprimer la conversation</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat_container">
                @foreach ($messages as $message)
                    @if ($message->id_expediteur === auth()->id())
                        <div class="msg msg_right"> 
                            <div class="msg_img_profil img_container">
                                <img src="{{ asset('img/'.$message->img_profil) }}" alt="{{ $message->pseudo }}" draggable="false" crossorigin="anonymous">
                            </div>
                            <div class="msg_container">
                                <div class="msg_pseudo">{{ $message->pseudo }}</div>
                                <div class="msg_content">
                                    <p>{{ $message->message }}</p>
                                    <div class="modal_container">
                                        <div class="btn btn_dot">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </div>
                                        <div class="modal_bg">
                                            <div class="modal_settings_chat">
                                                <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                <span class="delete_message" data-id="{{ $message->id }}"><i class='bx bx-trash-alt'></i>Supprimer le message</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="msg msg_left">
                            <div class="msg_img_profil img_container">
                                <img src="{{ asset('img/'.$message->img_profil) }}" alt="{{ $message->pseudo }}">
                            </div>
                            <div class="msg_container">
                                <div class="msg_pseudo">{{ $message->pseudo }}</div>
                                <div class="msg_content">
                                    <p>{{ $message->message }}</p>
                                    <div class="modal_container">
                                        <div class="btn btn_dot">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </div>
                                        <div class="modal_bg">
                                            <div class="modal_settings_chat">
                                                <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                <span class="signal_message"><i class='bx bx-message-square-error'></i>Signaler le message</span>
                                                <span><a href="/profil/{{ $message->pseudo }}"><i class='bx bx-user'></i>Voir le profil</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="chat_bar">
    {{-- SI L'UTILISATEUR EST CONNECTER --}}
            @auth
                <div class="chat_bar_container">
                    @if ($id_conv !== null)
                        <input type="hidden" name="id_conv" id="id_conv" value="{{ $id_conv }}">
                    @endif
                    <input type="text" name="chat_bar" id="chat_bar" placeholder="Message" autocomplete="off">
                    <button id="send_msg_btn"><i class="bx bx-send"></i></button>
                </div>
    {{-- SI L'UTILISATEUR N'EST PAS CONNECTER --}}
            @else
                <div class="chat_bar_login">
                    <div class="login_msg">
                        <i class="bx bx-lock-alt"></i>
                        <p>Envoyer un message </p>
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
    <script>
        let chatBox = document.querySelector('.chat_container');

        function scrollToBottom(){
            chatBox.scrollTop = chatBox.clientHeight;
        }

        scrollToBottom();
    </script>
@auth
    <script>
        $(document).on('click', '.signal_message', function(){
            const user_id = "{{ $url }}";
            const message = $(this).parents('.msg_left');
            const chat = '';
            const message_date = '';
            const id_report = "{{ auth()->id() }}";
            
            console.log("Signalement");
            console.log(user_id);
            console.log(message);
            console.log(chat);
            console.log(message_date);
            console.log(id_report);
        });
    </script>

    @if (is_string($url))
    <script>
        const user_id = "{{ auth()->id() }}";

        $(document).on('click', '.delete_message', function(){
            $(this).parents('.msg_right').remove();
            axios.delete('/chat/'+$(this).attr('data-id'));
        });

        $('#send_msg_btn').on('click', function (){
            axios.post('/chat', {
                message: $('#chat_bar').val(),
                id_conv: $('#id_conv').val(),
                receiver: '{{ $url }}'
            })
            .then((response) => {
                $('.chat_container').append(`<div class="msg msg_right"> 
                                                <div class="msg_img_profil img_container">
                                                    <img src="{{ asset('img/'.auth()->user()->img_profil) }}" alt="{{ auth()->user()->pseudo }}">
                                                </div>
                                                <div class="msg_container">
                                                    <div class="msg_pseudo">{{ auth()->user()->pseudo }}</div>
                                                    <div class="msg_content">
                                                        <p>${response.data.message}</p>
                                                        <div class="modal_container">
                                                            <div class="btn btn_dot">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </div>
                                                            <div class="modal_bg">
                                                                <div class="modal_settings_chat">
                                                                    <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                                    <span class="delete_message" data-id="${response.data.id_message}"><i class='bx bx-trash-alt'></i>Supprimer le message</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`);

                $('.actif_conv').find('.conv_last_msg').text('Vous: ' + response.data.message);
                scrollToBottom();
            });

            $('#chat_bar').val('');
        });

        window.Echo.private('chat.' + user_id)
            .listen('.chat-message', (data) => {
                if (data.id === '{{ $url }}'){
                    $('.chat_container').append(`<div class="msg msg_left">
                                                    <div class="msg_img_profil img_container">
                                                        <img src="{{ asset('img/${data.img_profil}') }}" alt="${data.pseudo}">
                                                    </div>
                                                    <div class="msg_container">
                                                        <div class="msg_pseudo">${data.pseudo}</div>
                                                        <div class="msg_content">
                                                            <p data-id-msg="0001">${data.message}</p>
                                                            <div class="modal_container">
                                                                <div class="btn btn_dot">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </div>
                                                                <div class="modal_bg">
                                                                    <div class="modal_settings_chat">
                                                                        <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                                        <span class="signal_message"><i class='bx bx-message-square-error'></i>Signaler le message</span>
                                                                        <span><a href="/profil/${data.pseudo}"><i class='bx bx-user'></i>Voir le profil</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>`);
                    
                }

                if (chatBox.scrollHeight - Math.floor(chatBox.scrollTop) - 87 === chatBox.clientHeight) {
                    scrollToBottom();
                }

                for (let i = 0; i < $('.conv_name').length; i++){
                    if ($('.conv_name')[i].innerHTML === data.pseudo){
                        $('.conv_name').next()[i].innerHTML = data.pseudo+': '+data.message;
                    }
                }
            });
    </script>
    @else
    <script>
        $(document).on('click', '.delete_message', function(){
            $(this).parents('.msg_right').remove();
        });

        $('#send_msg_btn').on('click', function (){
            axios.post('/chat', {
                message: $('#chat_bar').val(),
                receiver: '{{ $url }}'
            })
            .then((response) => {
                $('.chat_container').append(`<div class="msg msg_right"> 
                                                <div class="msg_img_profil img_container">
                                                    <img src="{{ asset('img/'.auth()->user()->img_profil) }}" alt="{{ auth()->user()->pseudo }}">
                                                </div>
                                                <div class="msg_container">
                                                    <div class="msg_pseudo">{{ auth()->user()->pseudo }}</div>
                                                    <div class="msg_content">
                                                        <p data-id-msg="000">${response.data.message}</p>
                                                        <div class="modal_container">
                                                            <div class="btn btn_dot">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </div>
                                                            <div class="modal_bg">
                                                                <div class="modal_settings_chat">
                                                                    <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                                    <span class="delete_message"><i class='bx bx-trash-alt'></i>Supprimer le message</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`);
            });

            scrollToBottom();
            $('#chat_bar').val('');
        });

        window.Echo.channel('chat-general')
            .listen('.chat-general-message', (data) => {
                $('.chat_container').append(`<div class="msg msg_left">
                                                <div class="msg_img_profil img_container">
                                                    <img src="{{ asset('img/${data.user.img_profil}') }}" alt="${data.user.pseudo}">
                                                </div>
                                                <div class="msg_container">
                                                    <div class="msg_pseudo">${data.user.pseudo}</div>
                                                    <div class="msg_content">
                                                        <p data-id-msg="0001">${data.message}</p>
                                                        <div class="modal_container">
                                                            <div class="btn btn_dot">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </div>
                                                            <div class="modal_bg">
                                                                <div class="modal_settings_chat">
                                                                    <span class="close_modal"><i class='bx bx-x'></i>Fermer</span>
                                                                    <span class="signal_message"><i class='bx bx-message-square-error'></i>Signaler le message</span>
                                                                    <span><a href="/profil/${data.user.pseudo}"><i class='bx bx-user'></i>Voir le profil</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`);
                
                if (Math.floor(chatBox.scrollHeight) - Math.floor(chatBox.scrollTop) === Math.floor(chatBox.clientHeight)) {
                    scrollToBottom();
                }
            });
    </script>
    @endif
@endauth
@endsection