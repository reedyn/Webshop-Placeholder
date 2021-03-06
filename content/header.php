<?php if (isset($_POST['add-to-cart'])){
        addToCart($_POST['add-to-cart']);
        redirect(); 
    }
    if(isset($_GET['setcurrency'])){ // Set new currency when a new currency is selected.
        $id = intval($_GET['setcurrency']);
        setCurrency($_GET['setcurrency']);
        redirect(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/content/themes/default/img/favicon.ico">

  <title>Hockey Gear</title>

  <!-- Bootstrap core CSS -->
  <link href="/content/themes/default/css/bootstrap.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
    <link href="/content/themes/default/css/carousel.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/content/themes/default/js/validatr.min.js"></script>
    <script type="text/javascript" src="/content/themes/default/js/list.js"></script>
    <script type="text/javascript">
        $(function ($) {
            $('form').validatr(); 
        });
    </script>
    </head>
    <?php includeNavigation(); ?>
    <div class="container marketing">
    
    <?php
    if(isset($_SESSION['error'])) {
        showError($_SESSION['error']['message'], $_SESSION['error']['type']);
        unset($_SESSION['error']);
    }
    ?>