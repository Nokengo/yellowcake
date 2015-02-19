<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <?php echo $this->Html->link('BoostCake', array(
        'plugin' => 'boost_cake',
        'controller' => 'boost_cake',
        'action' => 'index'
      ), array('class' => 'brand')); ?>
      <ul class="nav">
        <li><?php echo $this->Html->link('Bootstrap3', array(
          'action' => 'bootstrap3'
        )); ?></li>
        <li><?php echo $this->Html->link('Bootstrap2', array(
          'action' => 'bootstrap2'
        )); ?></li>
      </ul>
    </div>
  </div>
</div>
