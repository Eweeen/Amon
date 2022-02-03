<header id="header">
    <nav class="navbar">

        <div class="btn_hamburger">
            <div class="btn_hamburger_bar"></div>
        </div>

        <div class="logo">
            <a href="<?php echo e(route('home')); ?>" class="nav_link img_container">
                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo Amon">
            </a>
        </div>

        <ul class="nav_list">
            <li class="nav_item">
                <a href="#" class="nav_link dropdown_nav_link <?php echo e(Route::getCurrentRoute()->uri() == '/' ? 'active_link' : ''); ?>">Amon<i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown_list">
                    <li class="dropdown_item">
                        <a href="<?php echo e(route('home')); ?>" class="dropdown_link"><p>Accueil</p></a>
                    </li>
                    <li class="dropdown_item">
                        <a href="<?php echo e(route('team')); ?>" class="dropdown_link"><p>Qui sommes nous ?</p></a>
                    </li>
                </ul>
            </li>
            <li class="nav_item">
                <a href="<?php echo e(route('competition')); ?>" class="nav_link <?php echo e(Route::getCurrentRoute()->uri() == 'competition' ? 'active_link' : ''); ?>">Compétition</a>
            </li>
            <li class="nav_item">
                <a href="<?php echo e(route('chat')); ?>" class="nav_link <?php echo e(Route::getCurrentRoute()->uri() == 'chat' ? 'active_link' : ''); ?>">Chat</a>
            </li>
            <li class="nav_item nav_shop">
                <a href="https://evolving.gg/?s=amon+esport&post_type=product&product_cat=0" target="_blank" class="nav_link"><i class='bx bx-shopping-bag'></i><p>Shop</p></a>
            </li>
        
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav_item nav_connected">
                    
                    <a href="#" class="nav_account_phone nav_link dropdown_nav_link">
                        Mon Compte<i class='bx bx-chevron-down'></i>
                    </a>
                    
                    <ul class="dropdown_list">
                        <li class="dropdown_item">
                            <a href="<?php echo e(route('compte')); ?>" class="dropdown_link">
                                <i class='bx bx-user'></i>
                                <p>Mon compte</p>
                            </a>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <a href="<?php echo e(route('logout')); ?>" class="dropdown_link" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class='bx bx-power-off'></i>
                                    <p>Déconnexion</p>
                                </a>
                            </form>
                        </li>
                    </ul>
                    
                    <div class="nav_account_laptop dropdown_nav_link">
                        <div class="btn btn_dropdown"></div>
                        <div class="img_container">
                            <img src="<?php echo e(asset('img/'.Auth::user()->img_profil)); ?>" alt="<?php echo e(Auth::user()->pseudo); ?>">
                        </div>
                    </div>
                </li>
        
                <?php else: ?>
                <li class="nav_item nav_disconnected">
                    <a href="<?php echo e(route('login')); ?>" class="nav_link"><p>Connexion</p><i class='bx bxs-user'></i></a>
                </li>
                <?php endif; ?>
            <?php endif; ?>
        
        </ul>

        <div class="shop">
            <a href="https://evolving.gg/?s=amon+esport&post_type=product&product_cat=0" target="_blank"><i class='bx bx-shopping-bag'></i></a>
        </div>
    </nav>
</header><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/partials/nav.blade.php ENDPATH**/ ?>