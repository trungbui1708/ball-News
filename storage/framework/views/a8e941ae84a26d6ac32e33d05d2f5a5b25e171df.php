<?php $__env->startSection('content'); ?>
-->
 <div class="rs-point-table sec-spacer">
            <div class="container">
              <h1>Laliga</h1>
                <div class="tab-content">
                    <div id="sfl" class="tab-pane fade in active">
                        <table> 
                            <tr>
                                <td class="team-name">Club</td>
                                <td>Match</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="team-name" style="font-weight: bold"><?php echo e($key->clubs->name); ?></td>
                                <td><?php echo e($key->number_match); ?></td>
                                <td><?php echo e($key->won); ?></td>
                                <td><?php echo e($key->draw); ?></td>
                                <td><?php echo e($key->lost); ?></td>
                                <td><?php echo e($key->goals_for); ?></td>
                                <td><?php echo e($key->goals_against); ?></td>
                                <td><?php echo e($key->goals_difference); ?></td>
                                <td><?php echo e($key->point); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>