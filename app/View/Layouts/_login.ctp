<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    Login -
    <?php echo $title_for_layout; ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->

  <?php echo $this->Html->css('bootstrap-combined.min'); ?>
  <style>
  body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
  }
  .affix {
    position: fixed;
    top: 60px;
    width: 220px;
  }
  </style>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php
  echo $this->fetch('meta');
  echo $this->fetch('css');
  ?>
</head>

<body>

  <div class="container">

    <?php echo $this->fetch('content'); ?>

  </div><!-- /container -->

  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php echo $this->Html->css('jquery.min'); ?>
  <?php echo $this->Html->css('bootstrap.min'); ?>
  <?php echo $this->Html->css('run_prettify'); ?>
  <?php echo $this->fetch('script'); ?>

</body>
</html>
