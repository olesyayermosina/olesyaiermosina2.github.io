<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="../resources/css/inform.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-content'); ?>
    <section id="containCont" class="containCont">
        <div class="container">
            <div class="inside">
                <div class="texts">
                    <h1>
                        <a href="" class="headText">
                            foreach, if
                        </a>
                    </h1>
                    <div class = "formact" style="padding-top: 3%; display: flex; flex-direction: column">
                        <?php $__currentLoopData = [1, 2, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($v!=2): ?>
                                <?php echo e($v); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="goods">
                    <div class="good" style="display: flex; flex-direction: column">

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Bitnami\wampstack-8.0.3-1\apache2\htdocs\site1\resources\views/inform12.blade.php ENDPATH**/ ?>