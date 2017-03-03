<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$this->e($title)?></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
<!-- navigasi -->
     <?php require_once __DIR__ . "/path/nav.php"; ?>

     <div class="container">
      <?= $this->section('content') ?>
     </div>

    </body>

</html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
