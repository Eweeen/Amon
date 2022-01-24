<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/chat.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <main>
        <section id="actus">
            <div class="container">
                <div class="img_container">
                    <img src="" alt="">
                </div>
                <div class="actus_title">
                    <h1>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque libero, ex dignissimos eos quae debitis, nostrum esse odio fugit nobis veniam consectetur. At culpa assumenda maxime, ipsam totam reiciendis repellendus.
                    </h1>
                </div>
                <div class="actus_content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo velit quibusdam, nam, voluptatibus debitis mollitia iure aut dolorem dolor sunt excepturi voluptate suscipit, hic quaerat reiciendis blanditiis porro qui sit.
                        Deserunt enim error nisi illum dolorum alias possimus consequuntur quod quis. Ea porro officiis animi nesciunt temporibus voluptatum laborum illo necessitatibus corrupti eaque. Ducimus voluptatem maxime quidem aliquid enim nostrum?
                        Voluptates consectetur, ullam officiis excepturi omnis voluptas alias temporibus ipsam et quibusdam consequuntur veritatis unde quam vel ipsa nisi obcaecati mollitia reprehenderit non atque error! Quae deserunt ut sequi consequuntur.
                        Consequuntur veniam corrupti alias modi? Laborum ipsa temporibus cumque ut accusantium tempora unde, commodi dolores fuga quasi recusandae inventore tenetur ullam distinctio facilis deserunt beatae voluptas hic officiis quibusdam repellendus.
                        Laboriosam minima cumque incidunt? Autem, sint animi. Et, vitae consequatur magni sapiente eum modi voluptatum non nostrum. Voluptates quia doloribus, facilis sed optio explicabo ipsam assumenda iusto neque hic officiis.
                    </p>
                </div>
            </div>
        </section>
        <section id="actus-recommended">
            <div class="container">
                <h3>Les dernières actus</h3>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/article.blade.php ENDPATH**/ ?>