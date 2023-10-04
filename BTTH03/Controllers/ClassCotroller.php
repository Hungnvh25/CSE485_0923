<?php 

class ClassCotroller{

    public function index(){
        include "./Services/ClassService.php";

        $list = new ClassService();
        $Listt = $list->getAllClass();

        include "./Views/indexClass.php";
    }

}