<?php $__env->startSection('content'); ?>
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Tin tức</a>
                                    <span class="breadcrumb-item active">Thêm</span>
                                </nav>
                            </div>
                        </div>  
				<div class="col-md-4">
					<?php if(count($errors) >0): ?>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo e($k); ?><br>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>

					<?php if(session('notifi')): ?>
						<div class="alert alert-success">
							<?php echo e(session('notifi')); ?>

						</div>

					<?php endif; ?>
                                        <div class="form-group">
                                        	<form action="admin/news/add" method="POST" enctype="multipart/form-data">
                                        		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                            <div class="col-md-4">
                                         <div class="fix22">
                                        <div class="form-group">
                                            <label class="">Chọn thể loại</label>
                                                <select class="form-control fix-option" name="category">
                                                	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input type="file" name="file" class="form-control">
                                                </div>
                                            	<label>Tiêu đề</label>
                                                <input placeholder="Nhập tiêu đề" name="tittle" type="text" class="form-control" >
                                                <label>Tác giả</label>
                                                <input placeholder="Nhập tác gỉa" name="author" type="text" class="form-control" >
                                                <label>Mô tả</label>
                                                <input style="height: 150px;" placeholder="Nhập mô tả" name="description" type="text" class="form-control" >
                                                <label>Nội dung</label>
                                                <textarea rows="10" class="ckeditor fix-ckeditor" id="editor"  name="content"  ></textarea> 
                                                <button type="submit" class="btn btn-success">Thêm mới</button>
                                             </div>
                                          </form>
                                        </div>
            </div>
            <br>
            <br>
            <br>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>