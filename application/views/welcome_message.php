<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style type="text/css">

    img{
        height: 91vh;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    </style>
</head>
<body>
<header>
    <!-- <div class="container-fluid"> -->
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="navbar-header">
                <a id="a1" href="#" class="navbar-brand">CED-IGNITER</a>
            </div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaritem"> 
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbaritem">
                <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger rounded-pill ml-2 mr-2" href="<?php echo site_url('Register/');?>">VIEW USERS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger rounded-pill" href="<?php echo site_url('Register/registerForm');?>">ADD USERS</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="btn btn-custom-lg" id="btns" href="#">SIGN UP</a>
                      </li> -->
                </ul>
            </div>      
        </nav>
    <!-- </div> -->
</header>
<div id="core">
    <img src="<?php echo base_url();?>vendor/stock/images/img.jpg" alt="">
</div>
</body>
</html>