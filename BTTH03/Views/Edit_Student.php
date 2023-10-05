<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script href='/bootstrap-5.3.2-dist/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="/icons-1.11.1/font/bootstrap-icons.min.css">

</head>
<body>
    
    
    <div class="container-fluid">
        <div class="row justify-content-between m-4 ">
                
                <!-- Thanh menu -->
            <div class="haha d-inline col-md-5">
                <ul class="nav">
                    <li>
                        <img src="../imge" alt="">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php?c=Class">Class</a>
                    </li>
                </ul>
            </div>
                <!-- -- -->
                <!-- Tim kiem -->
            <div class="searchh d-inline col-md-3 mr-5">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nội dung cần tìm.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm</button>
            </div>
            
        </div>   
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column">
                    <?php
                        for($i = 1;$i<10;$i++)
                        {
                            ?>
                            <li class="nav-item py-3 ">
                                <i class="fa fa-user  d-inline text-warning mx-2"></i>
                                <a class="nav-link text-dark p-0  d-inline mx-2" href="#">UserUser</a>
                                <i class="fas fa-caret-right d-inline text-warning mx-2"></i>
                            </li>
                            <?php
                        }
                    ?>
                        
                </ul>
            </div>

            <div class="col-md-10">
                <?php
                    if(isset($_GET['Id'])){
                        $Id = $_GET['Id'];
                        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
                        $sql = "select * from SinhVien where id = '$Id';";
            
                        $list_sql = $conn->prepare($sql);
                        $list_sql->execute();
                        
                        $row = $list_sql->fetch(PDO::FETCH_ASSOC);

                    }
                ?>

                <div class="container">
                    <div class="row ">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                            <h3 class = "text-center">Edit Student</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ID</span>
                                <input type="text" class="form-control" name = 'id' value = "<?=isset($row['id'])?$row['id']:''?>" readonly> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                                <input type="text" class="form-control" name = 'name' value = "<?=isset($row['tenSinhVien'])?$row['tenSinhVien']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                                <input type="email" class="form-control" name = 'email' value = "<?=isset($row['email'])?$row['email']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Date</span>
                                <input type="date" class="form-control" name = 'ngaySinh' value = "<?=isset($row['ngaySinh'])?$row['ngaySinh']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ID Class</span>
                                <input type="text" class="form-control" name = 'idclass' value = "<?=isset($row['idLop'])?$row['idLop']:''?>"> 
                            </div>
                            <a><button type="submit" class="btn btn-warning mt-2 ">Lưu</button></a>
                            <a class="btn btn-warning mt-2" href="/index.php">Quay lại</a>
                                    
                                    
                        </form>
                    </div>
                </div>

 
                <?php
                if(isset($_GET['id'])&isset($_GET['name'])&isset($_GET['email'])&isset($_GET['ngaySinh'])&isset($_GET['idclass'])){
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $email = $_GET['email'];
                    $ngaySinh = $_GET['ngaySinh'];
                    $idLop = $_GET['idclass'];
                
                    $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "Qqfkg2003@");
                    $sql = "UPDATE sinhvien SET tenSinhVien = '$name' ,email ='$email' ,ngaySinh = '$ngaySinh', idLop = $idLop  WHERE id = $id ;";
        
                    $list_sql = $conn->prepare($sql);
                    $list_sql->execute();

                    echo "<p class='text-center'>Thanh Cong</p>";
                }




            ?>
            </div>

        </div>    

       
    </div>



</body>
</html>






<div class="container">


    </div>