<?php
class DatabaseConnection {
    public $server = 'localhost';
    public $user= 'root';
    public $password= '';
    public $database= 'cruddesarrollo';
    public $conexion;
    

   public function conectar(){
    return mysqli_connect(
        $this->server,
        $this->user,
        $this->password,
        $this->database,
     
    
    );
   }
}
