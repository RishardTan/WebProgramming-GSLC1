

<?php $__env->startSection('body'); ?>

<div style="margin-left: 150px; margin-right: 150px">
  <div style="padding: 50px; background-color:aliceblue; display: flex; align-items:center ; justify-content: space-between; text-align:center">
    <div>
      <h1>2</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "2 x ".$i." = ".$i*2 ?>
        </div>
      <?php endfor; ?>
    </div>
  
    <div>
      <h1>3</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "3 x ".$i." = ".$i*3 ?>
        </div>
      <?php endfor; ?>
    </div>
  
    <div>
      <h1>4</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "4 x ".$i." = ".$i*4 ?>
        </div>
      <?php endfor; ?>
    </div>
  
    <div>
      <h1>5</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "5 x ".$i." = ".$i*5 ?>
        </div>
      <?php endfor; ?>
    </div>

    <div>
      <h1>6</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "6 x ".$i." = ".$i*6 ?>
        </div>
      <?php endfor; ?>
    </div>

    <div>
      <h1>7</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "7 x ".$i." = ".$i*7 ?>
        </div>
      <?php endfor; ?>
    </div>

    <div>
      <h1>8</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "8 x ".$i." = ".$i*8 ?>
        </div>
      <?php endfor; ?>
    </div>

    <div>
      <h1>9</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "9 x ".$i." = ".$i*9 ?>
        </div>
      <?php endfor; ?>
    </div>

    <div>
      <h1>10</h1>
      <?php for($i=1; $i<=10; $i++): ?>
        <div>
          <?php echo "10 x ".$i." = ".$i*10 ?>
        </div>
      <?php endfor; ?>
    </div>

  </div>
  
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rishard Rachmadi\LEC-GSLC\resources\views/home.blade.php ENDPATH**/ ?>