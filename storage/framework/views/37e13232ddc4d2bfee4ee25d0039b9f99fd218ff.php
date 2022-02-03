<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('libs/aos/aos.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/team.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 
    <main>
        <section id="team">
            <div class="container" data-aos="fade-up">
                <img src="" alt="" data-aos="zoom-in">
                <h1 data-aos="fade-up" data-aos-delay="100">Amon, c'est quoi ?</h1>
                <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et quam, sint fugiat saepe enim, maxime nemo magnam dolore dolor molestias repellat suscipit natus aperiam asperiores animi laborum voluptate pariatur? Nesciunt.
                Optio, pariatur quod. Mollitia est impedit, quod, tempora beatae saepe accusantium nihil laudantium, doloremque ex incidunt repudiandae. Nostrum magnam ipsa dignissimos earum deserunt et tenetur beatae, temporibus dolorum aspernatur minima!</p>
                <div class="social" data-aos="fade-up" data-aos-delay="200">
                    <h3>Retrouvez nous sur les réseaux sociaux !</h3>
                    <ul class="social_list">
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-twitter' ></i></a>
                        </li>
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-discord' ></i></a>
                        </li>
                        <li class="social_list">
                            <a href="" class="social_link"><i class='bx bxl-twitch' ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="players">
            <div class="container" data-aos="fade-up">
                <div class="container_title" data-aos="fade-up">
                    <h2>Nos joueurs</h2>
                </div>
                <div class="profils_card_list">

                    <div class="profil_card" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="img_container">
                            <img src="<?php echo e(asset('img/default_user.png')); ?>" alt="">
                        </div>
                        <div class="profil_card_infos">
                            <h3>Pseudo</h3>
                            <p>Place occupée</p>
                        </div>
                        <ul class="profil_card_social">
                            <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                            <li><a href=""><i class='bx bxl-discord'></i></a></li>
                            <li><a href=""><i class='bx bxl-twitch'></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="staff">
            <div class="container" data-aos="fade-up">
                <div class="container_title" data-aos="fade-up">
                    <h2>Notre staff</h2>
                </div>
                <div class="profils_card_list">

                    <div class="profil_card" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="img_container">
                            <img src="<?php echo e(asset('img/default_user.png')); ?>" alt="">
                        </div>
                        <div class="profil_card_infos">
                            <h3>Pseudo</h3>
                            <p>Place occupée</p>
                        </div>
                        <ul class="profil_card_social">
                            <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                            <li><a href=""><i class='bx bxl-discord'></i></a></li>
                            <li><a href=""><i class='bx bxl-twitch'></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
    <script src="libs/aos/aos.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/team.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/team.blade.php ENDPATH**/ ?>