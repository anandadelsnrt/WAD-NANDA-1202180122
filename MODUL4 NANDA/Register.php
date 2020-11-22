<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $nohp = $_POST['NoHp'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    if($password == $password2){
        $sql = "INSERT INTO `user` (`nama`, `email`, `no_hp`, `password`) VALUES('$nama', '$email', '$nohp', '$password')";
        $result = mysqli_query($koneksi, $sql);
        
        if(mysqli_affected_rows($koneksi) > 0){
            echo "<script>alert('registrasi berhasil');</script>"; 
        }else{
            echo "<script>alert('registrasi gagal');</script>";
        }
    }else{
        echo "<script>alert('password tidak sama');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Navbar</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
    <!-- form register -->
    <div class="col-6 offset-3 mt-4">
        <!-- Default form register -->
        <form class="text-center border border-light p-5" action="" method="post">

            <p class="h4 mb-4">Sign up</p>

            <div class="form-row mb-4">
                <!-- full name -->
                <input type="text" id="name" class="form-control" placeholder="Nama Lengkap" name="name">
            </div>

            <!-- E-mail -->
            <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">

            <!-- Phone number -->
            <input type="text" id="NoHp" class="form-control mb-4" placeholder="No Hp" name="NoHp"
                aria-describedby="defaultRegisterFormPhoneHelpBlock">

            <!-- Password -->
            <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password"
                aria-describedby="defaultRegisterFormPasswordHelpBlock">

            <!-- Password -->
            <input type="password" id="password2" class="form-control mb-4" placeholder="Konfirmasi Password"
                name="password2" aria-describedby="defaultRegisterFormPasswordHelpBlock">

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign in</button>
            <span>sudah punya akun?</span>
            <a href="login.php">Login</a>
        </form>
        <!-- Default form register -->
    </div>
    <!-- /form register -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>