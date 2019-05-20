<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/club/list">Người dùng</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                        </div>  
                        <?php if(session('notifi')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('notifi')); ?>

                        </div>

                    <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl fix-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                               <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key -> id); ?></td>
                                                <td><?php echo e($key -> user_name); ?></td>
                                                <td><?php echo e($key -> email); ?></td>
                                                <td>
                                                    <?php if($key->level==1): ?>
                                                    <?php echo e("Admin"); ?>

                                                    <?php else: ?> 
                                                    <?php echo e("Member"); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/user/edit/<?php echo e($key->id); ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/user/delete/<?php echo e($key->id); ?>" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>