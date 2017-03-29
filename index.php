<?php
    if (isset($_GET['source'])) {
        echo '<h1>Product.php</h1>';
        highlight_file('Product.php');

        echo '<h1>Order.php</h1>';
        highlight_file('Order.php');

        echo '<h1>PurchaseOrder.php</h1>';
        highlight_file('PurchaseOrder.php');

        echo '<h1>Driver.php</h1>';
        highlight_file('Driver.php');

        echo '<h1>header.php</h1>';
        highlight_file('header.php');

        echo '<h1>index.php</h1>';
        highlight_file($_SERVER['SCRIPT_FILENAME']);

        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('header.php'); ?>
    <?php include('Product.php'); ?>
    <?php include('Order.php'); ?>
    <?php include('PurchaseOrder.php'); ?>

    <title>Draft</title>

<style>
.current{font-weight:bold;font-size:1.5rem;padding-top:0.5rem;}
</style>

</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CS130A</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Intro</a></li>
            <li><a href="#demo">Demo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">

<div class="starter-template" id="intro">
    <h1>Group Assignment 3 - Object-Oriented Programming</h1>
    <p>
    Work together to create a set of classes to store some useful data.
    </p>

    <p>
    I don't care what you choose as long as it implements the following concepts:
    </p>

    <ul>
        <li>Interhitence</li>
        <li>public properties</li>
        <li>public methods</li>
        <li>private properties</li>
        <li>private methods</li>
        <li>one class should store an object of a different class as a property</li>
        <li>setters should verify the type of data being stored in local properties</li>
    </ul>
</div>


<?php include('Driver.php'); ?>


</div><!-- /.container -->
</body>
</html>
