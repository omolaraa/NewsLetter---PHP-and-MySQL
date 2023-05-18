<?php

include 'includes/autoLoader.inc.php';

$createNewsLetter = new SubscribersContr();

if (isset($_POST['add_NL'])){
    $NL_subject = filter_input(INPUT_POST, 'NL_subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $NL_introTitle = filter_input(INPUT_POST, 'NL_introTitle', FILTER_SANITIZE_SPECIAL_CHARS);
    $NL_introDescription = filter_input(INPUT_POST, 'NL_introDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    $NL_endTitle = filter_input(INPUT_POST, 'NL_endTitle', FILTER_SANITIZE_SPECIAL_CHARS);
    $NL_endDescription = filter_input(INPUT_POST, 'NL_endDescription', FILTER_SANITIZE_SPECIAL_CHARS);
    $NL_bannerImg = $_FILES['NL_bannerImg']['name'];
    $NL_bannerImg_temp = $_FILES['NL_bannerImg']['tmp_name'];

    move_uploaded_file($NL_bannerImg_temp, "images/$NL_bannerImg");

    $createNewsLetter->createNewsLetter($NL_bannerImg, $NL_introTitle, $NL_introDescription, $NL_endTitle, $NL_endDescription, $NL_subject);
}

?>
<!-- Improve your knowledge with information

Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
Lorem ipsum dolor sit amet, con sectetur adip iscing elit, setting do eiusmod tempor incididunt ut.
New Information -->
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
<form action="" method="post" enctype="multipart/form-data" class="mb-3">

    <div class="form-group mb-3">
        <label for="NL_subject" class="form-label"><b>NewsLetter Subject</b></label>
        <input type="text" name="NL_subject" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="NL_introTitle" class="form-label"><b>NewsLetter Intoduction Title</b></label>
        <input type="text" name="NL_introTitle" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="NL_introDescription" class="form-label"><b>NewsLetter Intoduction Description</b></label>
        <textarea class="form-control" name="NL_introDescription" id="body" cols="30" rows="3"></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="NL_endTitle" class="form-label"><b>NewsLetter End Title</b></label>
        <input type="text" name="NL_endTitle" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="NL_endDescription" class="form-label"><b>NewsLetter End Description</b></label>
        <textarea class="form-control" name="NL_endDescription"  cols="30" rows="3"></textarea>
    </div> 

    <div class="form-group mb-3">
        <label for="NL_bannerImg" class="form-label"><b>NewsLetter Banner Image</b></label>
        <input type="file" name="NL_bannerImg" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" name="add_NL" class="btn btn-primary" value="Add NewsLetter">
    </div>
</form>
</body>
</html>