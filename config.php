<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once ("config/db.php");
require_once ("config/Conectar.php");

class Config extends Conectar
{
    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    protected $dbCnx;

    public function __construct($id = 0, $nombres = "", $direccion = "", $logros = "", $dbCnx = "")
    {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        parent::__construct($dbCnx);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setLogros($logros)
    {
        $this->logros = $logros;
    }

    public function getLogros()
    {
        return $this->logros;
    }

    public function insertData()
    {
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO Campers (nombres, direccion, logros) values (?,?,?)");
            $stm->execute([$this->nombres, $this->direccion, $this->logros]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function obtainAll()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM Campers");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function delete()
    {
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM Campers WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            echo "<script>alert('Registro eliminado');document.location='estudiantes.php'</script>";
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function selectOne()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM Campers WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbCnx->prepare("UPDATE Campers SET nombres = ?, direccion = ?, logros =? WHERE id = ?");
            $stm->execute([$this->nombres, $this->direccion, $this->logros, $this->id]);

        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

}

?>