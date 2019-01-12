<?php $title = 'NEWS';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/mmenu.css" />
    <!-- Global Styles from D4ALL CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <title>News | PHP Project 1</title>
  </head>
  <body>

  <?php include('../inc/header-black.inc'); ?>

    <?php include('../inc/news/00-news-latest-news.inc'); ?>
    <?php include('../inc/news/01-news-fresh-news.inc'); ?>
    <?php include('../inc/news/02-news-learn-the-secrets.inc'); ?>
    <?php include('../inc/news/03-news-new-training-packages.inc'); ?>
    <?php include('../inc/news/04-news-news-center.inc'); ?>

    <?php include('../inc/footer.inc'); ?>
  </body>
</html>
