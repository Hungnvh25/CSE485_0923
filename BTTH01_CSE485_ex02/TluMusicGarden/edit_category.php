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
            <div class="haha d-inline col-md-7">
                <ul class="nav">
                    <li>
                        <h3>Administration</h3>
                    </li>
                
                    <li>
                        <a class="nav-link active" aria-current="page" href="Admin.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Trang Ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Thể loại</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Tác giả</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
            if(isset($_GET['Id'])){
                $Id = $_GET['Id'];
                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                $sql = "select * from theloai where ma_tloai = '$Id';";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();
                
                $row = $list_sql->fetch(PDO::FETCH_ASSOC);


            }




        ?>

        <div class="container">
            <div class="row ">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='GET'>
                <h3 class = "text-center">Sửa thông tin thể loại</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ID</span>
                    <input type="text" class="form-control" name = 'ID' value='<?=$row['ma_tloai']?>' readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">tên thể loại</span>
                    <input type="text" class="form-control" name = 'Theloai' value = '<?=$row['ten_tloai']?>'>
                </div>
                <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Lưu</button></a>
                <a class="btn btn-warning mt-2" href="category.php">Quay lại</a>
                
                
            </form>
            </div>
        </div>

        <?php
            if(isset($_GET['Theloai'])&isset($_GET['ID'])){
                $theloaii = $_GET['Theloai'];
                $ID = $_GET['ID'];
                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                $sql = "UPDATE theloai SET  ten_tloai = '$theloaii' WHERE ma_tloai = '$ID';";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                echo 'Thanh cong';
            }




        ?>



        <div class="container-fluid">
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