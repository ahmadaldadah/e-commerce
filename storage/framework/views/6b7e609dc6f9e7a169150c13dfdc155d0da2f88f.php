<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">SubTitle</th>
            <th scope="col">Price</th>
            <th scope="col" style="width: 350px;">Description</th>
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
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>
<?php /**PATH C:\Users\sadi-\Desktop\maba 2019-9-12\resources\views/pdf/products.blade.php ENDPATH**/ ?>