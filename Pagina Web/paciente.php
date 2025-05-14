<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Paciente {
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $sexo;
    public function __construct($ide,$nom,$ape,$fNa,$sex) {
    $this->identificacion=$ide;
    $this->nombres=$nom;
    $this->apellidos=$ape;
    $this->fechaNacimiento=$fNa;
    $this->sexo=$sex;
    }
    public function obtenerIdentificacion(){
    return $this->identificacion;
    }
    public function obtenerNombres(){
    return $this->nombres;
    }
    public function obtenerApellidos(){
    return $this->apellidos;
    }
    public function obtenerFechaNacimiento(){
    return $this->fechaNacimiento;
    }
    public function obtenerSexo(){
    return $this->sexo;
    }
    }
    ?>
</body>
</html>