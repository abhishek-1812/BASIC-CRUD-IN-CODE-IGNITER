<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center bg-info">ALL USERS</h2>
    </div>
    <div class="container mt-5">
        <a href="<?php echo base_url().'Register/registerForm'?>" class="btn btn-warning mb-2"><i class='fas fa-plus'></i> USERS</a>
        <table class="table table-striped table-bordered">
            <thead class="text-center bg-dark text-white">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>MOBILE</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php if (!empty($records)) {                  
                    foreach ($records as $row) {                   
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><a href="<?php echo  base_url().'Register/edit/'.$row['id']?>" class="btn btn-outline-primary ml-2 mr-2"><i class='fas fa-edit'></i></a><a href="<?php echo  base_url().'Register/delete/'.$row['id']?>" onclick="javascript:return confirm('Are You Sure You Want To Delete?');" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php
                    }
                } else {           
                ?>
                <tr>
                    <td colspan="6">No Data Found!</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>


