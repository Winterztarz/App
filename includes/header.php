<?php
include "db.php";
include "functions.php";
fixUsernameTitle();

// $title = "Welcome";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/app.css">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#50146a">
    <meta name="theme-color" content="#00C9FF">

    <!-- content="#50256d" -->

    <title><?php echo $title . "&raquo; " . $appName; ?></title>
  </head>

    <?php if(isset($bodyClass)) : ?>
    <body class="<?php echo $bodyClass;?>">
  <?php else: ?>
<body>
<?php endif; ?>
