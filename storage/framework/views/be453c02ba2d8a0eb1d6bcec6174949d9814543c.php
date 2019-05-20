<?php $__env->startSection('content'); ?>
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="admin/club/list" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="#">Câu lạc bộ</a>
                                    <span class="breadcrumb-item active">Sửa</span>
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
                                            <form action="admin/club/edit/<?php echo e($club->id); ?>" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                            <label class="control-label">Sửa câu lạc bộ</label>
                                            <div class="fix">
                                                <label>Tên CLB</label>
                                                <input placeholder="Nhập tên câu lạc bộ" value="<?php echo e($club->name); ?>" name="name" type="text" class="form-control" >
                                                <label>Địa điểm</label>
                                                <input placeholder="Nhập địa điểm" value="<?php echo e($club->location); ?>" name="location" type="text" class="form-control" >
                                                <label>Thành lập</label>
                                                <input placeholder="Nhập ngày thành lập" value="<?php echo e($club->establish); ?>" name="establish" type="text" class="form-control" >
                                                <div class="form-group">
                                                    <label>Chọn ảnh</label>
                                                    <input type="file"  name="file" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-success">CẬP NHẬT</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>