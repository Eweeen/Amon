<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/chat.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 

    <main>
        <!-- ========== SECTION AFFICHAGE DE TOUTE LES CONVERSATIONS ========== -->
        <section id="list-chat">
    
            <?php if(auth()->guard()->check()): ?>
                <div class="bar">
                    <div class="bar_search_container">
                        <label for="search_conv"><i class='bx bx-search'></i></label>
                        <input type="text" name="search_conv" id="search_conv" placeholder="Rechercher" autocomplete="off">
                    </div>
                    <div class="bar_add_conversation btn">
                        <i class='bx bx-conversation'></i>
                    </div>
                </div>
            <?php endif; ?>
    

            <ul class="list_conv">
                <!-- Le chat général n'a pas les 3 points pour supprimer la conversation car la conversation ne peux pas être supprimer -->
                <li class="item_conv" data-conv="1000000000">
                    <div class="item_conv_container">
                        <div class="conv_img img_container">
                            <img src="img/logo.png" alt="">
                        </div>
                        <div class="conv_infos">
                            <h2 class="conv_name">Chat Général</h2>
                            <p class="conv_last_msg">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </li>
                <?php if(auth()->guard()->check()): ?>
                    <?php for($i = 0; $i < count($messages); $i++): ?>
                    <li class="item_conv" data-conv="<?php echo e($messages[$i]->id_message); ?>">
                        <div class="item_conv_container">
                            <div class="conv_img img_container">
                                <img src="<?php echo e(asset('img/'.$user[$i]->img_profil)); ?>" alt="<?php echo e($user[$i]->pseudo); ?>">
                            </div>
                            <div class="conv_infos">
                                <h2 class="conv_name"><?php echo e($user[$i]->pseudo); ?></h2>
                                <p class="conv_last_msg"><?php echo e($messages[$i]->message); ?></p>
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
                    <?php endfor; ?>
                <?php endif; ?>
            </ul>
            <ul class="list_new_conv">
                <li class="item_conv" data-conv="1000000002">
                    <div class="item_conv_container">
                        <div class="conv_img img_container">
                            <img src="img/logo.png" alt="">
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
                <li class="item_conv" data-conv="1000000002">
                    <div class="item_conv_container">
                        <div class="conv_img img_container">
                            <img src="img/logo.png" alt="">
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
                <div class="msg msg_left">
                    <div class="msg_img_profil img_container">
                        <img src="<?php echo e(asset('img/default_user.png')); ?>">
                    </div>
                    <div class="msg_container">
                        <div class="msg_pseudo">Ewen</div>
                        <div class="msg_content">
                            <p data-id-msg="0001">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe fugit facere dolores facilis ab eligendi obcaecati illum, dolor illo odio quo vel, nobis aperiam nemo molestiae, dolorem aliquid aspernatur!</p>
                            <div class="modal_container">
                                <div class="btn btn_dot">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </div>
                                <div class="modal_bg">
                                    <div class="modal_settings_chat">
                                        <span class="close_modal"><i class='bx bx-x' ></i>Fermer</span>
                                        <span class="signal_message"><i class='bx bx-message-square-error'></i>Signaler le message</span>
                                        <span><a href=""><i class='bx bx-user'></i>Voir le profil</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="msg msg_right"> 
                    <div class="msg_img_profil img_container">
                        <img src="<?php echo e(asset('img/default_user.png')); ?>">
                    </div>
                    <div class="msg_container">
                        <div class="msg_pseudo">BenjaminDrn</div>
                        <div class="msg_content">
                            <p data-id-msg="000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, libero? Pariatur consequuntur beatae quas perspiciatis saepe! Incidunt dolorem fuga rem tempora! Excepturi sapiente deserunt corrupti quae eius itaque, nostrum sunt.</p>
                            <div class="modal_container">
                                <div class="btn btn_dot">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </div>
                                <div class="modal_bg">
                                    <div class="modal_settings_chat">
                                        <span class="close_modal"><i class='bx bx-x' ></i>Fermer</span>
                                        <span class="delete_message"><i class='bx bx-trash-alt'></i>Supprimer le message</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chat_bar">
    
            <?php if(auth()->guard()->check()): ?>
                <div class="chat_bar_container">
                    <input type="text" name="chat_bar" id="chat_bar" placeholder="Message" autocomplete="off">
                    <button id="send_msg_btn"><i class="bx bx-send"></i></button>
                </div>
    
            <?php else: ?>
                <div class="chat_bar_login">
                    <div class="login_msg">
                        <i class="bx bx-lock-alt"></i>
                        <p>Envoyer un message </p>
                    </div>
                    <a href="<?php echo e(route('login')); ?>"><button>Connexion</button></a>
                </div>
            <?php endif; ?>
    
            </div>
        </section>  
    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/chat.blade.php ENDPATH**/ ?>