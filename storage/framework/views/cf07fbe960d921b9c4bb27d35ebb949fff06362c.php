﻿

<?php $__env->startSection('content'); ?>
        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Edit Product</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/admin/products/<?php echo e($product->id); ?>" method="POST">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input id="name"
                                           name="name"
                                           placeholder="name"
                                           class="form-control here"
                                           type="text"
                                           value="<?php echo e($product->name); ?>"
                                           />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-4 col-form-label">Title</label>
                                <div class="col-8">
                                    <input id="title"
                                           name="title"
                                           placeholder="title"
                                           class="form-control here"
                                           type="text"
                                           value="<?php echo e($product->title); ?>"
                                           />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">
                                        Please title is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">SubTitle</label>
                                <div class="col-8">
                                    <input id="subTitle"
                                           name="subTitle"
                                           placeholder="subTitle"
                                           class="form-control here"
                                           type="text"
                                           value="<?php echo e($product->subTitle); ?>"/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please SubTitle is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Price</label>
                                <div class="col-8">
                                    <input id="price"
                                           name="price"
                                           placeholder="price"
                                           class="form-control here"
                                           type="number"
                                           value="<?php echo e($product->price); ?>"/>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-4 col-form-label">Description</label>
                                <div class="col-8">
                                    <textarea id="description"
                                              name="description"
                                              placeholder="description"
                                              class="form-control here"><?php echo e($product->description); ?></textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Price is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="time" class="col-4 col-form-label">Image Online URL</label>
                                <div class="col-8">
                                    <input id="image"
                                           name="image"
                                           placeholder="Image Online URL"
                                           class="form-control here"
                                           type="text"
                                           value="<?php echo e($product->image); ?>" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Image is required.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sadi-\Desktop\maba 2019-9-12\resources\views/admin/editProduct.blade.php ENDPATH**/ ?>