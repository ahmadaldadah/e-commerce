

<?php $__env->startSection('content'); ?>
        <hr />
        <h1 style="display: inline-block;">Products</h1>
        <a href="/admin/products/create" class="btn btn-success float-right">
            Add Product
        </a>
        <a href="/pdf" class="btn btn-success float-right">
            Export PDF
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">SubTitle</th>
                    <th scope="col">Price</th>
                    <th scope="col" style="width: 350px;">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->title); ?></td>
                        <td><?php echo e($product->subTitle); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td>
                            <a href="/admin/products/<?php echo e($product->id); ?>/edit" class="btn btn-outline-primary">Edit</a> |
                            <a href="/admin/products/delete/<?php echo e($product->id); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Gaza PS 2\maba\resources\views/admin/products.blade.php ENDPATH**/ ?>