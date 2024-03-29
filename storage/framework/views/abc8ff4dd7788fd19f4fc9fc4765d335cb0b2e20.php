<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/form.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?> 
    <main>
        <section id="login-form">
            <h1>Se connecter</h1>

            <form method="post">

                <div class="content">
                    <div class="errors">
                        <?php if (isset($_SESSION['flash'])): ?>
                            <?php foreach($_SESSION['flash'] as $type => $message): ?>
                                <div class="alert_form alert-<?= $type; ?>">
                                    <i class='bx bx-x'></i>
                                    <?= $message; ?>   
                                </div>
                            <?php endforeach; ?>
                            <?php unset($_SESSION['flash']); ?>
                        <?php endif; ?>
                    </div>
                    
                    <input type="text" name="login_user" id="login_user" placeholder="Pseudo">
                    <div class="input_password">
                        <input type="password" name="login_pass" id="login_pass" placeholder="Mot de passe">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="btn_remember_me">
                        <input type="checkbox" name="login_check" id="login_check">
                        <label for="login_check"><p>Se rappeler de moi</p></label>
                    </div>
                </div>
                <button type="submit" name="login_btn" id="login_btn">Connexion</button>
            </form>

            <div class="form_footer">
                <a href="">Réinitialiser le mot de passe</a>
                <a href="<?php echo e(Route('register')); ?>">Inscription</a>
            </div>

        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/form.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/login.blade.php ENDPATH**/ ?>