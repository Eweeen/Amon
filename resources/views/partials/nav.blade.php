<header id="header">
    <nav class="navbar">

        <div class="btn_hamburger">
            <div class="btn_hamburger_bar"></div>
        </div>

        <div class="logo">
            <a href="{{ route('home') }}" class="nav_link img_container">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Amon">
            </a>
        </div>

        <ul class="nav_list">
            <li class="nav_item">
                <a href="{{ route('home') }}" class="nav_link {{Route::getCurrentRoute()->uri() == '/' ? 'active_link' : '' }}">Amon<i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown_list">
                    <li class="dropdown_item">
                        <a href="{{ route('team') }}" class="dropdown_link"><p>Qui sommes nous ?</p></a>
                    </li>
                </ul>
            </li>
            <li class="nav_item">
                <a href="{{ route('competition') }}" class="nav_link {{Route::getCurrentRoute()->uri() == 'competition' ? 'active_link' : '' }}">Compétition</a>
            </li>
            <li class="nav_item">
                <a href="{{ route('chat') }}" class="nav_link {{Route::getCurrentRoute()->uri() == 'chat' ? 'active_link' : '' }}">Chat</a>
            </li>
            <li class="nav_item nav_shop">
                <a href="https://evolving.gg/?s=amon+esport&post_type=product&product_cat=0" target="_blank" class="nav_link"><i class='bx bx-shopping-bag'></i><p>Shop</p></a>
            </li>
        {{-- SI L'UTILISATEUR EST CONNECTER --}}
            @if (Route::has('login'))
                @auth
                <li class="nav_item nav_account">
                    <div class="nav_account_phone">
                        <p>Mon compte</p>
                        <i class='bx bx-chevron-down'></i> 
                    </div>   
                    <div class="nav_account_laptop">
                        <div class="btn btn_dropdown"></div>
                        <div class="img_container">
                            <img src="{{ asset('img/'.Auth::user()->img_profil) }}" alt="{{ Auth::user()->pseudo }}">
                        </div>
                    </div>
                    <ul class="dropdown_list">
                        <li class="dropdown_item">
                            <a href="{{ route('compte') }}" class="dropdown_link">
                                <i class='bx bx-user'></i>
                                <span>Mon compte</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown_link" onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                    <i class='bx bx-power-off'></i>
                                    <span>Déconnexion</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
        {{-- SI L'UTILISATEUR N'EST PAS CONNECTER --}}
                @else
                <li class="nav_item nav_account">
                    <a href="{{ route('login') }}" class="nav_link"><p>Connexion</p><i class='bx bxs-user'></i></a>
                </li>
                @endauth
            @endif
        {{-- FIN DE LA CONDITION --}}
        </ul>

        <div class="shop">
            <a href="https://evolving.gg/?s=amon+esport&post_type=product&product_cat=0" target="_blank"><i class='bx bx-shopping-bag'></i></a>
        </div>
    </nav>
</header>