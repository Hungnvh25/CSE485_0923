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
            // Kết nối đến cơ sở dữ liệu

            $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                                                    

            $sql1 = "select * from users";
            $sql2 = "select * from theloai";
            $sql3 = "select * from tagia";
            $sql4 = "select * from baiviet";

            $list_sql1 = $conn->prepare($sql1);
            $list_sql1->execute();
            $countusers = $list_sql1->rowCount();

            $list_sql2 = $conn->prepare($sql2);
            $list_sql2->execute();
            $counttheloai = $list_sql2->rowCount();


            $list_sql3 = $conn->prepare($sql3);
            $list_sql3->execute();
            $counttagia = $list_sql3->rowCount();


            $list_sql4 = $conn->prepare($sql4);
            $list_sql4->execute();
            $countbaiviet = $list_sql4->rowCount();


        
        ?>

        <div class="d-flex justify-content-around">
            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Người dùng</p>
                <p class="mb-0"><?=$countusers?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Thể loại</p>
                <p class="mb-0"><?=$counttheloai?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Tác giả</p>
                <p class="mb-0"><?=$counttagia?></p>
            </div>

            <div class=" text-center bg-light py-4 px-4">
                <p class="mb-0">Bài viết</p>
                <p class="mb-0"><?=$countbaiviet?></p>
            </div>

        </div>


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