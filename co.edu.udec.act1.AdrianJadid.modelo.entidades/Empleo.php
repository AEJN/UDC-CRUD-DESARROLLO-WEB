<?php
namespace co\edu\udec\act1\AdrianJadid\modelo\entidades;

class Empleo {
    private $id;
    private $nombre;
    private $categoria;
    private $areaTrabajo;
    private $empresa;
    private $nivel;
    private $sueldo;
    private $funciones;
    private $cargoJefe;

    public function __construct($id, $nombre, $categoria, $areaTrabajo, $empresa, $nivel, $sueldo, $funciones, $cargoJefe) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->areaTrabajo = $areaTrabajo;
        $this->empresa = $empresa;
        $this->nivel = $nivel;
        $this->sueldo = $sueldo;
        $this->funciones = $funciones;
        $this->cargoJefe = $cargoJefe;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getAreaTrabajo() {
        return $this->areaTrabajo;
    }

    public function setAreaTrabajo($areaTrabajo) {
        $this->areaTrabajo = $areaTrabajo;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getFunciones() {
        return $this->funciones;
    }

    public function setFunciones($funciones) {
        $this->funciones = $funciones;
    }

    public function getCargoJefe() {
        return $this->cargoJefe;
    }

    public function setCargoJefe($cargoJefe) {
        $this->cargoJefe = $cargoJefe;
    }
}
