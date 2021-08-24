<?php $__env->startSection('content'); ?>
    <div class="faca-login">
        <p>FAÇA SEU LOGIN</p>
    </div>

    <div class="mt-5 text-center form-input">
        <form action="<?php echo e(url('login/post')); ?>" id="form-login" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-container mt-3">
                <input id="name" class="input" type="text" name="email" pattern=".+" required />
                <label class="label" for="name">EMAIL</label>
            </div>
            <div class="input-container mt-3">
                <input id="name_1" class="input" name="password" type="password" pattern=".+" required />
                <label class="label" for="name_1">SENHA</label>
            </div>
            <div class="mt-3">
                <button type="button" id="btn-login" class="btn btn-login">LOGIN</button>
            </div>
        </form>
        <div class="mt-3 first-acess">
            <a href="<?php echo e(route('register')); ?>">PRIMEIRO ACESSO?</a>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\luzinha\resources\views/auth/login.blade.php ENDPATH**/ ?>