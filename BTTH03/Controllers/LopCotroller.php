<?php 

class LopCotroller{

    public function index(){
        include "./Services/LopService.php";
        $list = new LopService();

        

        $Listt = $List->getAllLop();

        include "./Views/indexlop.php";
    }

}