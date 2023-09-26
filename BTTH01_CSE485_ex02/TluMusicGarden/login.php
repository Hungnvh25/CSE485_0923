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
        <?php
            include "head.php"
        ?>

            
        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                        <div class="form-group">
                                        <label for="name">Tên:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nhập tên">
                                        </div>
                                        <div class="form-group">
                                        <label for="password">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2">Login</button>
                                        <a class="btn btn-warning mt-2" href="Add_user.php">Tạo mới</a>
                                    </form>
                                </div>
                            </div>
                        </div>
            <?php
                
                if(isset($_POST['name'])&isset($_POST['password'])){ 
                    $name = $_POST['name'];
                    $pass = $_POST['password'];

                    echo 'day';
                    // Kết nối đến cơ sở dữ liệu
                    $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");


                    $sql = "select * from users where email = '$name' or username = '$name';";                
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                    $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                    
                    if($list_sql->rowCount()>0){
                       
                        $pass_hasd = $row['pass'];
                        if(password_verify($pass,$pass_hasd)){
                            
                            session_start();
                            $_SESSION['Login'] = $name;
                            header('location:Admin.php');

                        }
                        else{
                            header('location:login.php?error=TK&Mk');
                        }

                    }

                
                    
                }
                if(isset($_GET['error'])){
                    echo "<p class='text-center'>Tài khoản hoặc mật khẩu không chính xác</p>";
                }
                else if(isset($_GET['tt'])){
                    echo "<p class='text-center'>Tạo tài khoản thành công</p>";
                }

                
            ?>
           


        <?php
            include "floor.php"
        ?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>