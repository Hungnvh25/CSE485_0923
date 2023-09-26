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

        <div class="">
            <img class="img-fluid mx-auto d-block" src="../img/logoto.jpg" alt="">
        </div>
        <h2 class="text-center text-primary" >Top bài hát yêu thích</h2>
        <?php
            // Kết nối đến cơ sở dữ liệu

            $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                                                    
            $sql = "select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;";
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();

            

            // sử lý kết quả
            //$users = $stmt->fetchAll();
                    while($row = $list_sql->fetch())
                    {
                        ?>
                                <div class="baihat col-md-3 d-inline">
                                    <img src="../img/<?= $row[2] ?>" alt="">
                                    <a href="detail.php?mabv=<?=$row[3]?>"><p class="text-center" ><?= $row[5]?></p></a>
                                </div>

                        <?php
                    }
                    ?>
        <?php
        ?>
        


        <?php
            include "floor.php"
        ?>


    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>