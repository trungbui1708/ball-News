<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="#">Bảng xếp hạng</a>
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
                                            <form action="admin/rank/add" method="POST">
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                                            <label class="control-label">Thêm BXH</label>
                                            <div class="fix">
                                                <label class="">Chọn đội bóng</label>
                                                <select class="form-control fix-option" name="club">
                                                    <?php $__currentLoopData = $club; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <label class="">Chọn giải đấu</label>
                                                <select class="form-control fix-option" name="tournament">
                                                    <?php $__currentLoopData = $tournament; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <label>Số trận</label>
                                                <input placeholder="Số trận đấu" name="number_match" type="text" class="form-control" >
                                                <label>Thắng</label>
                                                <input placeholder="Trận thắng" name="won" type="text" class="form-control" >
                                                <label>Hòa</label>
                                                <input placeholder="Trận hòa" name="draw" type="text" class="form-control" >
                                                <label>Thua</label>
                                                <input placeholder="Trận thua" name="lost" type="text" class="form-control" >
                                                <label>Ghi bàn</label>
                                                <input placeholder="số bàn thắng" name="goals_for" type="text" class="form-control" >
                                                <label>Thủng lưới</label>
                                                <input placeholder="Số bàn thua" name="goals_against" type="text" class="form-control" >
                                                <label>Hiệu số</label>
                                                <input placeholder="Hiệu số" name="goals_difference" type="text" class="form-control" >
                                                <label>Điểm</label>
                                                <input placeholder="Điểm số" name="point" type="text" class="form-control" >
                                                <button class="btn btn-success ">Thêm</button>
                                                </div>
                                                </form>
                                        </div>

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>