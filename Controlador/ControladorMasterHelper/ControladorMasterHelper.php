<?php
//Inicio de la seccion
session_start();

class ControladorMasterHelper{
    
    //Funcion que redireciona, util para los metodos del controlador.
    public static function redir($Url){

        echo "<script language='javascript'>"."window.location.href='$Url';"."</script>";

    }
    public static function verDato($codigo){
        
        echo "<script language='javascript'>"."alert('$codigo');"."</script>";
        
    }
    //Funcion que redireciona, util para el action en el formulario.
    public static function setUrl($carpeta,$modulo,$controlador,$funcion,$ajax=false){
        
        if($ajax){
            $pagina="ajax";
        }else{
            $pagina="index";
        }
        
        $Url= "$pagina.html.php?carpeta={$carpeta}&modulo={$modulo}&controlador={$controlador}&funcion={$funcion}";
        
        return $Url;
        
    }
    //Funcion que optiene los datos de la url y redireciona al controlador.
    public static function getUrl(){
        $carpeta=$_REQUEST['carpeta'];
        $modulo= $_REQUEST['modulo'];
        $controlador= $_REQUEST['controlador'];
        $funcion= $_REQUEST['funcion'];
        
        if (!empty($_SESSION['usu_nombre'])) {
            
            if ((isset($modulo))&&(isset($controlador))&&(isset($funcion))) {

                if("../Controlador/".$carpeta."/Controlador".$modulo){

                    if("../Controlador/".$carpeta."/Controlador".$modulo."/Controlador".$controlador.".php"){
                        
                        if(include_once "../Controlador/".$carpeta."/Controlador".$modulo."/Controlador".$controlador.".php"){

                            $ClaseControler= "Controlador".$controlador;

                            $Objet= new $ClaseControler();

                            if(method_exists($ClaseControler, $funcion)){
                                   $Objet->$funcion();
                            }else{
                               $Url= "index.html.php?carpeta=ControladorPHP&modulo=PostInicio&controlador=PostInicio&funcion=Inicio";
                               //self::redir($Url);
                            }
                            
                        }else{
                            $Url= "index.html.php?carpeta=ControladorPHP&modulo=PostInicio&controlador=PostInicio&funcion=Inicio";
                            self::redir($Url);
                        }
                    }else{
                        $Url= "index.html.php?modulo=Inicio&controlador=Inicio&funcion=Inicio";
                        //self::redir($Url);
                    }

                }else{
                    $Url= "index.html.php?modulo=Inicio&controlador=Inicio&funcion=Inicio";
                    //self::redir($Url);
                }

            }else{
                $Url= "index.html.php?modulo=Inicio&controlador=Inicio&funcion=Inicio";
                self::redir($Url);
            }
        }else{
            echo"<script>"."window.location.href='../index.html.php?carpeta=ControladorPHP&modulo=InicioDeSesion&controlador=InicioDeSesion&funcion=InicioSesion'"."</script>";
        }

    }
    public static function getUrlII(){
        
        $carpeta=$_REQUEST['carpeta'];
        $modulo= $_REQUEST['modulo'];
        $controlador= $_REQUEST['controlador'];
        $funcion= $_REQUEST['funcion'];
        
        if((isset($carpeta))&&(isset($modulo))&&(isset($controlador))&&(isset($funcion))){

            if("Controlador/{$carpeta}/Controlador".$modulo){

                if("Controlador/{$carpeta}/Controlador".$modulo."/Controlador".$controlador.".php"){

                    if(include_once "Controlador/{$carpeta}/Controlador".$modulo."/Controlador".$controlador.".php"){

                    $ClaseControler= "Controlador".$controlador;

                    $Objet= new $ClaseControler();

                    if(method_exists($ClaseControler, $funcion)){
                        $Objet->$funcion();
                    }else{
                        echo "ERROR 777 funcion";
                    }
                    
                    }else{
                        $Url= "index.html.php?carpeta=ControladorPHP&modulo=PostInicio&controlador=PostInicio&funcion=Inicio";
                        self::redir($Url);
                    }

                }else{
                   echo "ERROR 777 Controlador";
                }

            }else{
                echo "ERROR 777 Modulo";
            }

        }else{
            
            if(!empty($_SESSION['id_usu'])){
                $Url= "Web/index.html.php?carpeta=ControladorPHP&modulo=Inicio&controlador=Inicio&funcion=Inicio";
                self::redir($Url);
            }else{
                $Url= "Web/index.html.php?carpeta=ControladorPHP&modulo=InicioDeSesion&controlador=InicioDeSesion&funcion=InicioSesion";
                self::redir($Url);
            }
            
        }
      
    }
    
}