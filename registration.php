<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- style.css link -->
    <link  rel="stylesheet" href="style.css">

</head>
<body>
<!-- REGISTARTION FORM -->
<div class="container">
<form action="registration.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="Fullname" placeholder="Full Name:">
    </div>
    <div class="form-group">
        <input type="email"  class="form-control" name="email" placeholder="Email:">
    </div>
    <div class="form-group">
        <input type="password"  class="form-control" name="password" placeholder="password:">
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" name="repeat_password" placeholder="Repeat password:">
    </div>
    <div class="form-btn">
        <input type="submit"  class="btn btn-primary" value="Register" name="submit">
    </div>


</form>
</div>



</body>
</html>
