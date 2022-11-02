<!DOCTYPE html>
<html lang="en">
    
<body style="background-color: antiquewhite">
    <div>
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    
    <div>
        <?php echo $__env->yieldContent('body'); ?>
    </div>
</body>
</html><?php /**PATH C:\Users\Rishard Rachmadi\LEC-GSLC\resources\views/template.blade.php ENDPATH**/ ?>