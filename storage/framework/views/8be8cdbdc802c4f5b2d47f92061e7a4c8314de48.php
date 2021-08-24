

<?php $__env->startSection('content'); ?>
    <div class="titulo">
        <p>BEBÉS</p>
    </div>
    <div class="container">
        <div class="bebe">
            <div class="row">
                <div class="col-6  aulas aulas1 text-center">
                    <a href="<?php echo e(url('alimentacao')); ?>">
                        <img src="<?php echo e(url('assets/img/alimentacao.png')); ?>" alt="">
                    </a>
                    <p>ALIMENTAÇÃO</p>
                </div>
                <div class="col-6  aulas aulas2 text-center">
                    <a href="<?php echo e(url('educar')); ?>">
                        <img src="<?php echo e(url('assets/img/educar.png')); ?>" alt="">
                        <p>EDUCAR</p>
                    </a>
                </div>
                <div class="col-6  aulas aulas3 text-center">
                    <a href="<?php echo e(url('incricao-musica')); ?>">
                        <img src="<?php echo e(url('assets/img/musica.png')); ?>" alt="">
                        <p>AULAS DE MUSICA</p>
                    </a>
                </div>
                <div class="col-6 aulas aulas4 text-center">
                    <a href="<?php echo e(url('inscricao-ballet')); ?>">
                        <img src="<?php echo e(url('assets/img/ballet.png')); ?>" alt="">
                        <p>AULAS DE BALLET</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luzinha\resources\views/home/bebe.blade.php ENDPATH**/ ?>