<?php $__env->startSection("styles"); ?>
    <link href="<?php echo e(asset('css/articles.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>

    <main>

        <section>
            <div class="container">
                <ul class="articles_list">
                    <li class="article_item">
                        <a href="" class="article_link">
                            <div class="img_container">
                                <img src="" alt="">
                            </div>
                            <div class="article_infos">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestias alias quaerat illum, inventore ratione iure nihil, aut quae, similique tempore vero voluptatibus vitae dolores ipsam saepe nam in rem?</p>
                                <p class="date_article_published">23-01-2022</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("script"); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/chat.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/benjamin/Desktop/Laravel/Amon/resources/views/articles.blade.php ENDPATH**/ ?>