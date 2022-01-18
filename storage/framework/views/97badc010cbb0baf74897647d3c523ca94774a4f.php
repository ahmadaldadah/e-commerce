<?php $__env->startSection('content'); ?>
<form action="/register" method="POST">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <h1><?php echo e($error); ?></h1>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo csrf_field(); ?>
        <fieldset>
            <legend>Sign up</legend>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="exampleInputEmail1"
                       placeholder="Enter email"
                       />
            </div>
            <div class="form-group">
                <label for="exampleInputFirstName1">First Name</label>
                <input type="text"
                       class="form-control"
                       name="firstName"
                       id="exampleInputFirstName1"
                       placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <label for="exampleInputLastName1">Last Name</label>
                <input type="text"
                       class="form-control"
                       name="lastName"
                       id="exampleInputLastName1"
                       placeholder="Enter Last Name" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="exampleInputPassword1"
                       placeholder="Password" />
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password"
                       class="form-control"
                       name="password_confirmation"
                       id="exampleInputConfirmassword1"
                       placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </fieldset>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sadi-\Desktop\maba 2019-9-12\resources\views/auth/register.blade.php ENDPATH**/ ?>