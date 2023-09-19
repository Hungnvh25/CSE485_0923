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
            
        </div>
        <div class="">
            <img class="img-fluid mx-auto d-block" src="../img/logoto.jpg" alt="">
        </div>
        <h2 class="text-center text-primary" >Top bài hát yêu thích</h2>
        <?php
            // Kết nối đến cơ sở dữ liệu
            $servername = "localhost";
            $database = "BTTH01_CSE485";
            $username = "root";
            $password = "Qqfkg2003@";
            $conn = mysqli_connect($servername, $username, $password, $database);
                                                    
            // Kiểm tra kết nối
            if (!$conn) {
                die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
            }

            $sql = "select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;";

            $list = mysqli_query($conn,$sql);
        ?>
            <div class="container">
                <div class="row">

                    <?php
                    while($row = mysqli_fetch_assoc($list))
                    {
                        ?>
                                <div class="baihat col-md-3 d-inline">
                                    <img src="../img/<?= $row['hinh_tgia'] ?>" alt="">
                                    <a href="detail.php?mabv=<?=$row['ma_bviet']?>"><p class="text-center" ><?= $row['ten_bhat']?></p></a>
                                </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        <?php
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