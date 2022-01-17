<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/profil.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 

   <main>
        <section id="profil">
            <div class="profil_picture">
                <div class="img_container">
                    <img src="<?php echo e(asset('img/'.$user->img_profil)); ?>" alt="<?php echo e($user->pseudo); ?>">
                </div>
                <div class="profil_about_user container">
                    <div class="profil_description">
                        <ul class="social_list">
                            <?php if($user->twitch): ?>
                            <li class="social_item">
                                <a href="https://www.twitch.tv/<?php echo e($user->twitch); ?>" target="_blank">
                                    <i class='bx bxl-twitch'></i>
                                    <span></span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($user->twitter): ?>
                            <li class="social_item">
                                <a href="https://twitter.com/<?php echo e($user->twitter); ?>" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                    <span></span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($user->instagram): ?>
                            <li class="social_item">
                                <a href="https://www.instagram.com/<?php echo e($user->instagram); ?>" target="_blank">
                                    <i class='bx bxl-instagram' ></i>
                                    <span></span>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <div class="description_profil">
                            <p><?php echo e($user->description); ?></p>
                        </div>
                    </div>
                    <?php if(auth()->guard()->check()): ?>
                    <?php if($user->admin === 0): ?>
                    <div class="profil_btn">
                        <a href="">Envoyer un message</a>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
   </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/profil.blade.php ENDPATH**/ ?>