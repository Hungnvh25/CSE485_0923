<?php 
include APP_ROOT . "/Services/ClassService.php";

class ClassCotroller{

    public function index(){


        $list = new ClassService();
        $Listt = $list->getAllClass();

        include APP_ROOT . "/Views/indexClass.php";
    }

    public function delete(){
        $Id = $_GET['Id'];
        $List = new ClassService();
        $List->delete_Class($Id);
        header('location:/index.php?c=Class&err= deleted successfully');
    }

    public function add(){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
 
            $List = new ClassService();
            $List->add_Class($name);
            header('location:/index.php?c=Class&err= amore success');
        }
    }

    public function idClass(){
        if(isset($_GET['Id'])){
            $Id = $_GET['Id'];
            $List = new ClassService();
            $row =  $List->idClass($Id);

           include APP_ROOT . "/Views/Edit_Class.php";

        }
    }

    public function edit(){
        if(isset($_POST['id'])&isset($_POST['tenLop'])){
            $id = $_POST['id'];
            $tenLop = $_POST['tenLop'];


            $List = new ClassService();
            $List->edit_Class($tenLop,$id);
            header('location:/index.php?c=Class&err= successfully repaired');
        }
    }



}