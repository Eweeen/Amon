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
                    <a href="<?php echo e(Route("admin")); ?>" class="sidebar_link active_link"><i class='bx bx-home'></i><span>Accueil</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="<?php echo e(Route("admin")); ?>" class="sidebar_link"><i class='bx bx-news'></i><span>Actualités</span></a>
                </li>
                <li class="sidebar_item" data-link="">
                    <a href="<?php echo e(Route("admin")); ?>" class="sidebar_link"><i class='bx bx-group' ></i><span>Team</span></a>
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
                    <a href="<?php echo e(route('admin')); ?>" class="container_block half_block">
                        <i class='bx bx-news'></i>
                        <span>Nouveau membre</span>
                    </a>
                    <a href="<?php echo e(route('admin')); ?>" class="container_block half_block">
                        <i class='bx bx-user-plus' ></i>
                        <span>Nouvelle actualité</span>
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
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 2</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 3</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
                                        <i class='bx btn bx-trash'></i>
                                    </div>
                                </li>
                                <li class="slide_item">
                                    <div class="img_container">
                                        <img src="" alt="">
                                    </div>
                                    <p>Slide 4</p>
                                    <div class="slide_tools">
                                        <i class='bx btn bx-move-vertical'></i>
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

                <div class="title_container">
                    <h1>Actualités</h1>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Nouvelle actualité</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">
                            <div class="create_new_actus">
                                <input type="file" name="" id="new_img_actus">
                                <label for="new_img_actus" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>
                            <input type="text" name="" id="" placeholder="Titre de l'article">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>
                        </form>
                    </div>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Titre article</th>
                                <th>Date de publication</th>
                                <th class="action_tab">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td class="tab_tools">
                                    <i class='bx btn bx-edit'></i>
                                    <i class='bx btn bx-trash'></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="title_container">
                    <h1>Team</h1>
                </div>

                <div class="container_block">
                    <div class="container_block_title">
                        <p>Nouveau membre</p>
                    </div>
                    <div class="container_block_content">
                        <form action="" method="post">
                            <div class="create_new_team">
                                <input type="file" name="" id="new_img_actus">
                                <label for="new_img_actus" class="create_new_actus_container btn">
                                    <i class='bx bx-image-add'></i>
                                    <p>Import une image</p>
                                </label>
                            </div>

                            <div class="checkbox">
                                <input type="radio" name="role" id="is-staff" value="Staff">
                                <label for="is-staff">Staff</label>
                                
                                <input type="radio" name="role" id="is-player" value="Joueur" checked>
                                <label for="is-player">Joueur</label>
                            </div>

                            <input type="text" name="" id="" placeholder="Nom">
                            <input type="text" name="" id="" placeholder="Prénom">
                            <input type="text" name="" id="" placeholder="Pseudo">
                            <input type="text" name="" id="" placeholder="Place occupée">

                            <h3>Réseaux sociaux</h3>
                            <div class="social_fields">
                                <i class='bx bxl-instagram'></i>
                                <input type="text" name="" id="" placeholder="id instagram">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-twitter' ></i>
                                <input type="text" name="" id="" placeholder="id twitter">
                            </div>

                            <div class="social_fields">
                                <i class='bx bxl-twitch' ></i>
                                <input type="text" name="" id="" placeholder="id twitch">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="container_block">
                    <table>
                        <thead>
                            <tr>
                                <th>Pseudo</th>
                                <th class="action_tab">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td class="tab_tools">
                                    <i class='bx btn bx-edit'></i>
                                    <i class='bx btn bx-trash'></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/index.js')); ?>"></script>
    <script src="https://platform.twitter.com/widgets.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/adminview.blade.php ENDPATH**/ ?>