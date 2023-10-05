<?php 
include "./Services/StudentService.php";
class StudentCotroller{

    
    public function index(){
        

        $List = new StudentService();
        $Listt=  $List->getAllStudent();

        include "./Views/indexStudent.php";
    }

    public function delete($Id){
    
        $List = new StudentService();
        $List->delete_Student($Id);

    }
}