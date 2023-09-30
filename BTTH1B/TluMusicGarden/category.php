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
        <div class="add_theloai">
            <a class="btn btn-warning mt-5" href="Add_Theloai.php">Thêm mới</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Kết nối đến cơ sở dữ liệu

                $conn = new PDO("mysql:host = localhost;dbname=BTTH01_CSE485", "root", "Qqfkg2003@");
                $sql = "select * from theloai";

                $list_sql = $conn->prepare($sql);
                $list_sql->execute();

             
                // Truy vấn dữ liệu từ bảng users
                
                // Lặp qua dữ liệu và hiển thị trong bảng
                while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
                    ?>
                        <tr>
                        <td>  <?=$row['ma_tloai'] ?> </td>
                        <td>  <?=$row['ten_tloai'] ?></td>
                        <td><a href="edit_category.php?Id=<?=$row['ma_tloai']?>"><i class='bi bi-pen'></i></a></td>
                        <td><a data-bs-toggle='modal' data-bs-target="#<?=$row['ma_tloai']?>"><i class='bi bi-trash3' ></i></a></td>
                        </tr>
                    
                    
                        <div class="modal fade" id="<?=$row['ma_tloai']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn chắc chắn muôn xóa
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="delete_category.php?Id=<?=$row['ma_tloai']?>">Delete</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    <?php



                }
                
                // Xóa dữ liệu
                


                // Chỉnh sửa dữ liệu

                ?>

                <!-- Button trigger modal -->


            <!-- Modal -->

            </tbody>
        </table>





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