<?php 
include "./Services/ClassService.php";
class ClassCotroller{

    public function index(){


        $list = new ClassService();
        $Listt = $list->getAllClass();

        include "./Views/indexClass.php";
    }
    public function delete($Id){
    
        $List = new ClassService();
        $List->delete_Class($Id);

    }

}