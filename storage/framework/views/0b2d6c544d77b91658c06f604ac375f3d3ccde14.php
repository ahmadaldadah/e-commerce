<table class="table table-bordered" id="users">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($user->firstName); ?></td>
                <td><?php echo e($user->lastName); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <a  class="btn btn-outline-primary edit" data-id="<?php echo e($user->id); ?>">Edit</a> |
                    <a  class="btn btn-danger delete" data-id="<?php echo e($user->id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH E:\Laravel Gaza PS 2\maba\resources\views/admin/_users.blade.php ENDPATH**/ ?>