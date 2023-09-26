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
                include "head_admin.php"
            ?>
        </div>
        <div class="container">
            <div class="row ">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                <h3 class = "text-center">Thêm mới thể loại</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">tên thể loại</span>
                    <input type="text" class="form-control" name = 'Theloai'>
                </div>
                <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Thêm</button></a>
                <a class="btn btn-warning mt-2" href="category.php ">Quay lại</a>
                
                
            </form>
            </div>
        </div>

        <?php
            if(isset($_GET['Theloai'])){
                $theloaii = $_GET['Theloai'];
                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                $sql = "INSERT INTO theloai ( ten_tloai) VALUES ( '$theloaii');";
    
                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

                echo 'Thanh cong';
            }




        ?>



        <?php
            include "floor.php"
        ?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>