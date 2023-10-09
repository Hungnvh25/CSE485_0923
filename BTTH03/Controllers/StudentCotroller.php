<?php 
include APP_ROOT . "/Services/StudentService.php";
class StudentCotroller{

    
    public function index(){
        

        $List = new StudentService();
        $Listt=  $List->getAllStudent();

        include APP_ROOT . "/Views/indexStudent.php";
    }

    public function delete(){
        $Id = $_GET['Id'];
        $List = new StudentService();
        $List->delete_Student($Id);
        header('location:/index.php?err= deleted successfully');
    }

    public function add(){
        if(isset($_POST['name'])&isset($_POST['email'])&isset($_POST['date'])&isset($_POST['idclass'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $idclass = $_POST['idclass'];
            
            $List = new StudentService();
            $List->add_Student($name,$email,$date,$idclass);
            header('location:/index.php?err= amore success');
        }
    }

    public function idStudent(){
        if(isset($_GET['Id'])){
            $Id = $_GET['Id'];

            $List = new StudentService();
            $row =  $List->getIDStudent($Id);

            include APP_ROOT . "/Views/Edit_Student.php";

        }
    }


    public function edit(){
        if(isset($_POST['id'])&isset($_POST['name'])&isset($_POST['email'])&isset($_POST['ngaySinh'])&isset($_POST['idclass'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idclass'];

            
            $Listr = new StudentService();
            $Listr->edit_Student($name,$email,$ngaySinh,$idLop,$id);
            header('location:/index.php??err= successfully repaired');
        }
    }
}