<?php echo $__env->make('common.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.header_two', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('main'); ?>

<?php echo $__env->make('common.footer_two', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('common.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>