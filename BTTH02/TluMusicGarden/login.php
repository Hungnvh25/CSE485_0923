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
            

            <div class="haha d-inline col-md-5">
                <ul class="nav">
                    <li>
                        <img style="height: 100px;" src="../img/logo.jpg" alt="">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng Nhập</a>
                    </li>

                </ul>
            </div>


            <div class="searchh d-inline col-md-3 mr-5">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nội dung cần tìm.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm</button>
            </div>
            <?php
                // Kết nối đến cơ sở dữ liệu
                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                $sql = "select * from users ;";                
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                $row = $list_sql->fetch(PDO::FETCH_ASSOC);
                
                if(isset($GET_['error'])){
                    echo "Tài khoản hoặc mật khẩu không chính xác";
                }
                                                  

            ?>
            
        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                                        <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control" name="name" placeholder="Nhập tên">
                                        </div>
                                        <div class="form-group">
                                        <label for="password">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                                        </div>
                                        <button type="submit" class="btn btn-warning mt-2">Lưu</button>
                                     

                                    </form>
                                </div>
                            </div>
                        </div>
            <?php
                if(isset($_POST['name'])&isset($_POST['password'])){
                    $name = $_POST['name'];
                   
                    $passwordd = $_POST['password'];
                    $sql = "select * from users where username = '$name' and pass = '$passwordd' ;";                
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();
                    

                   
                 
                    if($list_sql->rowCount()>0){
                        header('location:Admin.php');
                    }
                    else{
                        echo "<p class='text-center'>Tài khoản hoặc mật khẩu không chính xác</p>";
                    }
                    
                }



                
            ?>           


        <div class="container">
            <div class="row">
            <div class="col-md-12 floor">
                <h3 class="text-center bg-secondary p-3" > TLU'S MUSIC GARDEN</h3>
            </div>
            </div>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>