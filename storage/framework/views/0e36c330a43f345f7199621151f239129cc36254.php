<?php $__env->startSection('content'); ?>
    <div class="titulo">
        <p>CONTATOS</p>
    </div>
    <div class="icones">
        <div class="d-flex">
            <div class="icone whatsapp">
                <a href="https://api.whatsapp.com/send?phone=351910123364">
                    <img src="<?php echo e(url('assets/img/icones/whatsapp.png')); ?>" alt="">
                </a>
            </div>
            <div class="icone telefone">
                <a href="tel:++351910123364">
                    <img src="<?php echo e(url('assets/img/icones/phone.png')); ?>" alt="">
                </a>
            </div>
            <div class="icone e-mail">
                <a href="mailto:contato@omundodaluzinha.com">
                    <img src="<?php echo e(url('assets/img/icones/email.png')); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="titulo">
        <p>REDES SOCIAIS</p>
    </div>
    <div class="icones_1">
        <div class="d-flex position">
            <div class="icone">
                <a href="https://www.instagram.com/omundodaluzinha">
                    <img src="<?php echo e(url('assets/img/redes/instagram.png')); ?>" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="https://www.facebook.com/O-Mundo-da-Luzinha-107425637753380">
                    <img src="<?php echo e(url('assets/img/redes/facebook.png')); ?>" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="https://www.youtube.com/user/NoaViolinPlayer1">
                    <img src="<?php echo e(url('assets/img/redes/youtube.png')); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luzinha\resources\views/home/contatos.blade.php ENDPATH**/ ?>