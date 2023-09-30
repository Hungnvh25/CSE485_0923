<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-between mt-3">
            
                <!-- Thanh menu -->
            <?php
                include "head.php"
            ?>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-6">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        
                        <h3 class = "text-center">Thêm mới Tài khoản</h3>
                        <div class="input-group mb-3  ">
                            <span class="input-group-text" id="basic-addon1">Username</span>
                            <input type="text" class="form-control " name = 'user'>
                        </div>

                        <div class="input-group mb-3  ">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="email" class="form-control " name = 'email'>
                        </div>

                        <div class="input-group mb-3  ">
                            <span class="input-group-text" id="basic-addon1">Mật khẩu</span>
                            <input type="password" class="form-control " name = 'pass1'>
                        </div>

                        <div class="input-group mb-3  ">
                            <span class="input-group-text" id="basic-addon1">Nhập lại mật khẩu</span>
                            <input type="password" class="form-control " name = 'pass2'>
                        </div>
                        <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Thêm</button></a>
                    </form>
                </div>

            </div>


            <?php
                if(isset($_POST['user'])&isset($_POST['email'])&isset($_POST['pass1'])&isset($_POST['pass2'])){
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    
                    echo 'day';
                    echo $pass1;
                    echo $pass2;

                    if($pass1!=$pass2){
                        header('location:Add_user.php?err=LoiPass');
                    }
                    else{
                        $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");

                        $pass_hasd = password_hash($pass1,PASSWORD_DEFAULT);
                        $sql = "INSERT INTO users (username,email, pass) VALUES ('$user','$email', '$pass_hasd');";  
                                  
                        $list_sql = $conn->prepare($sql);
                        $list_sql->execute();
                        
    
                       
                     
                        if($list_sql->rowCount()>0){
                            header('location:login.php?tt=1');
                        }
                        else{
                            echo "<p class='text-center'>Lỗi gì đó</p>";
                        }
                    }


                }

                if(isset($_GET['err'])){
                    echo "<p class='text-center'>Mật khẩu không Trùng </p>";
                }

                
            ?> 


        </div>

        <?php
            include "floor.php"
        ?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>