<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Thể loại</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
				<div class="col-md-4">
					<?php if(count($errors) >0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo e($key); ?><br>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>

					<?php if(session('notifi')): ?>
						<div class="alert alert-success">
							<?php echo e(session('notifi')); ?>

						</div>

					<?php endif; ?>
                                        <div class="form-group">
                                        	<form action="admin/category/add" method="POST">
                                        		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                            <label class="control-label">Thêm thể loại</label>
                                            <div class="fix">
                                                <input placeholder="Nhập tên thể loại" name="name" type="text" class="form-control" >
                                                <button class="btn btn-success ">Thêm</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>