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
                <div class="row align-items-center">
                    <div class="form-group col-md-3">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <input type="number" class="form-control" id="number" placeholder="Number">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <select class="form-control" id="select">
                            <?php
                                for($i=1;$i<10;$i++)
                                {
                                
                                    echo "<option value='option1'>Select " .$i. "</option>";
                                }
                            ?>

                        </select>
                    </div>

                    <a href="/Views/add_Class.php" class="form-group col-md-1 btn btn-dark">add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Class</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $len = count($Listt);
                            
                            for($i=0;$i<$len;$i++){
                                ?>
                                <tr>
                                <th scope="row"><?=$Listt[$i]->getId();?></th>
                                <td><?=$Listt[$i]->getTenLop();?></td>
                                <td><a href="/Views/Edit_Class.php?Id=<?=$Listt[$i]->getId()?>"><i class='bi bi-pen'></i></a></td>
                                <td><a  href="/index.php?c=Class&f=delete&Id=<?=$Listt[$i]->getId()?>" ><i class='bi bi-trash3' ></i></a></td>
                            </tr>
                                <?php
                            }
                        ?>

                    </tbody>
                </table>


            </div>

            

        </div>    
    </div>



    <script src='/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>





