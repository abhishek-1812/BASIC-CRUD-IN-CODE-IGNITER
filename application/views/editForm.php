<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center bg-dark text-white mt-4">CRUD OPERATION WITH CODE-IGNITER</h2>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="mb-4">Edit Your Details</h3>
                <form class="form-group" method="POST" name="insertion" action="<?php //echo $_SERVER['REQUEST_URI'];?>">
                    <input type="text" class="form-control mb-3" value="<?php echo set_value('name', $result['name']);?>" name="name"><?php //echo form_error('name');?>
                    <input type="text" class="form-control mb-3" value="<?php echo set_value('age', $result['age']);?>" name="age"><?php //echo form_error('age');?>
                    <input type="text" class="form-control mb-3" value="<?php echo set_value('mobile', $result['mobile']);?>" name="mobile"><?php //echo form_error('mobile');?>
                    <input type="email" class="form-control mb-4" value="<?php echo set_value('email', $result['email']);?>" name="email"><?php //echo form_error('email');?>
                    <p><input type="submit" class="btn btn-success btn-block" name="submit" value="UPDATE"></p>
                    <p><a href="<?php echo base_url().'Register/';?>" class="btn btn-danger btn-block">CANCEL</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>