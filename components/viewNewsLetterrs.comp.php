
<?php

include '../includes/autoLoader_folders.inc.php';

$newsLetter = new SubscribersView();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
    <th>Title</th>
    <th>Subject</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php $newsLetter->showAllNewsLetters(); ?>

  </tbody>
</table>
</body>
</html>
