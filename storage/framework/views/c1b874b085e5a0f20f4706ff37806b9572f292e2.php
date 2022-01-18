

<?php $__env->startSection('content'); ?>
        <div class="card mb-3">
        <h3 class="card-header"><?php echo e($product->name); ?></h3>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($product->title); ?></h5>
                <h6 class="card-subtitle text-muted"><?php echo e($product->subTitle); ?></h6>
            </div>
            <img style="display: block;"
                 src="/images/<?php echo e($product->image); ?>"
                 width="200"
                 height="200px"
                 alt="Card image" />
            <div class="card-body"><p class="card-text"><?php echo e($product->description); ?></p></div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item"><?php echo e($product->price); ?></li>
            </ul>
            <div class="card-body">
                <form action="/cart" method="post" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    <button type="submit" class="btn btn-primary "> Add to cart</button>
                </form>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sadi-\Desktop\maba 2019-9-12\resources\views/product.blade.php ENDPATH**/ ?>