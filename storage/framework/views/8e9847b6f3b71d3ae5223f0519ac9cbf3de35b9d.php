<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body app-home">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover social-accounts">
                    <thead>
                    <tr>
                        <th> Group Name</th>
                        <th> Group Type</th>
                        <th class="text-center">Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($list->groupInfo->name); ?></td>
                            <td><?php echo e($list->groupInfo->type); ?></td>
                            <td class="text-center">
                                <img width="50" class="media-object img-circle" src="<?php echo e($list->accountInfo->avatar); ?>" alt="">
                            </td>
                            <td><?php echo e($list->post_text); ?></td>
                            <td>
                                <?php echo e($list->sent_at); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>

            <div class="row text-center">
                <?php echo e($data->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>