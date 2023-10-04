<?php 

class  Student{
    private $id;

    private $name;
    private $email;
    private $date;
    private $idclass;


    public function __construct($id,$name,$email,$date,$idclass){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->date=$date;
        $this->idclass=$idclass;
    }


    

   

   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of idclass
     */ 
    public function getIdclass()
    {
        return $this->idclass;
    }

    /**
     * Set the value of idclass
     *
     * @return  self
     */ 
    public function setIdclass($idclass)
    {
        $this->idclass = $idclass;

        return $this;
    }
}


