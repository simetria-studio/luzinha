

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="livros">
            <div class="bom-dia">
                <a href="<?php echo e(url('livro-bom-dia')); ?>">
                    <img src="<?php echo e(url('assets/img/bom-dia.png')); ?>" alt="">
                </a>
            </div>

            <div class="hora-da-papa">
                <a href="<?php echo e(url('livro-hora-da-papa')); ?>">
                    <img src="<?php echo e(url('assets/img/hora-papa.png')); ?>" alt="">
                </a>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luzinha\resources\views/home/index.blade.php ENDPATH**/ ?>