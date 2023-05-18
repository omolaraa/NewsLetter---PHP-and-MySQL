<!-- <?php

// include 'includes/autoLoader.inc.php';

// $newsLetter = new SubscribersView();

// if (isset($_POST['select_subject'])){
//     $NL_subject = $_POST['NL_subject'];
//     // echo $NL_subject;
//     $newsLetter->getNLSubject($NL_subject);
// }

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
<form action="" method="post" enctype="multipart/form-data" class="mb-3">

<div class="form-group mb-3">
<label for="NL_subject" class="form-label"><b>Select NewsLetter Subject</b></label>
   <select name="NL_subject" id="NL_subject" class="form-control">
    <?php $newsLetter->showNLSubjects(); ?>
   </select>
   
</div>


<div class="form-group">
    <input type="submit" name="select_subject" class="btn btn-primary" value="Select">
</div>

</form>
</body>
</html> -->