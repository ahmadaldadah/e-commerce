<?php $__env->startSection('content'); ?>
<form action="/login" method="POST">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1><?php echo e($error); ?></h1>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       class="form-control"
                       id="exampleInputEmail1"
                       placeholder="Enter email"
                       name="email"/>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       id="exampleInputPassword1"
                       placeholder="Password"
                       name="password"/>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </fieldset>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sadi-\Desktop\maba 2019-9-12\resources\views/auth/login.blade.php ENDPATH**/ ?>