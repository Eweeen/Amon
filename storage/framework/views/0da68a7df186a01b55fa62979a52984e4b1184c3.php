<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 
    <main>
        <div class="sidebar">

            <div class="sidebar_brand">
                <div class="img_container">
                    <img src="" alt="">
                </div>
                <p>Amon</p>
            </div>
            
            <ul class="sidebar_list">
                <li class="sidebar_item" data-link="">
                    <a href="<?php echo e(Route("admin")); ?>" class="sidebar_link <?php echo e(Route::getCurrentRoute()->uri() == 'admin' ? 'active_link' : ''); ?>"><i class='bx bx-home'></i><span>Accueil</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="<?php echo e(Route("actus")); ?>" class="sidebar_link <?php echo e(Route::getCurrentRoute()->uri() == 'admin/actus' ? 'active_link' : ''); ?>"><i class='bx bx-news'></i><span>Actualités</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="<?php echo e(Route("team")); ?>" class="sidebar_link <?php echo e(Route::getCurrentRoute()->uri() == 'admin/team' ? 'active_link' : ''); ?>"><i class='bx bx-group' ></i><span>Team</span></a>
                </li>
            </ul>
            <div class="btn btn_deconnexion">
                <a href="#" id="btn-deconnexion">
                    <i class='bx bx-power-off' ></i>
                    <span>Déconnexion</span>
                </a>
            </div>
        </div>
        <section id="admin-container">
            <div class="container">

                <div class="title_container">
                    <h1>Accueil</h1>
                </div>

                <div class="container_half_block">
                    <a href="<?php echo e(route('actus')); ?>" class="container_block half_block">
                        <i class='bx bx-user-plus' ></i>
                        <span>Nouvelle actualité</span>
                    </a>
                    <a href="<?php echo e(route('team')); ?>" class="container_block half_block">
                        <i class='bx bx-news'></i>
                        <span>Nouveau membre</span>
                    </a>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Slider</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">

                            <ul class="slide_list">
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 1</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 2</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 3</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 4</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                            </ul>

                            <div class="create_new_slide">
                                <input type="file" name="img_new_slide" id="img_new_slide">
                                <label for="img_new_slide" class="create_new_slide_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>

                            <div class="footer_btn">
                                <button type="submit">
                                    Enregistrer
                                </button>

                                <div class="add_new_slide btn">
                                    <i class='bx bx-plus'></i>
                                    <p>Ajouter une slide</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/index.js')); ?>"></script>
    <script src="https://platform.twitter.com/widgets.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/admin/index.blade.php ENDPATH**/ ?>