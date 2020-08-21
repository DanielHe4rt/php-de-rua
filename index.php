<?php
    if(isset($_GET['error']) && $_GET['error'] == "injection") {
        echo "<marquee> Você é um bobão sai daqui </marquee>";
        die();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 mt-5">
            <form method="POST" action="./app/Controllers/userController.php">
                <fieldset>
                    <legend class="text-center">Login</legend>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <a href="/register.php">Registrar nova conta</a><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="userController" value="login">
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="resources/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>