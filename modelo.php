<?php

class conection {

    public $enlace = "";
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'basedatos';

    public function __construct() {
        $this->enlace = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      }
    
    public function __destruct() {
        $this->enlace->close();
    }

    function conectar() {
        $enlace = mysqli_connect('localhost', 'root', '', 'php');
        $a="hola si conecte";
        if (!$enlace) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
            $a="me estalle";
        }
        return $a;
    }
    
    function insertarMensaje($mensaje) {
    $enlace = mysqli_connect('localhost', 'root', '', 'php');
    mysqli_query($enlace, "Insert");
    }
    
    }

?>