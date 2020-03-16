<?php
require_once 'Modelo/ConfigMasterModel.php';

class MasterModel{
    
    use ConfigMasterModel;
    //Metodo que retorna la conexion a la base de datos.
    public function getConect(){
        
        $dbname= $this->nameDateBase;
        $user= $this->userName;
        $password= $this->password;
        $host= $this->Host;
        $driver= $this->driver;
        $charset= $this->charset;
        
        try {
            $conexion= new PDO("{$driver}:host={$host};dbname={$dbname};{$charset}",$user,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }
    
    public function getData($sql,$codigo=false){
        
        if ($codigo==false){
            $filas= null;
            $conexion= $this->getConect();
            $elementos= $conexion->prepare($sql);
            $elementos->fetchAll(PDO::FETCH_ASSOC);
            $elementos->execute();
            $filas= $elementos;
            return $filas;
            $filas= null;
            
        }else{
            $filas= null;
            $conexion= $this->getConect();
            $elementos= $conexion->prepare($sql);
            $elementos->bindParam(':codigo', $codigo);
            $elementos->fetchAll(PDO::FETCH_ASSOC);
            $elementos->execute();
            $filas= $elementos;
            return $filas;
            $filas= null;
        }
            
    }
    
}
