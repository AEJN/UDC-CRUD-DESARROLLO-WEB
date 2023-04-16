<?php
namespace co\edu\udec\act1\AdrianJadid\modelo\entidades;

class Usuario {
    private $cc;
    private $contrasena;
    private $nombre;
    private $apellido;
    private $genero;
    private $email;
    
    public function __construct($cc, $contrasena, $nombre, $apellido, $genero, $email) {
        $this->cc = $cc;
        $this->contrasena = $contrasena;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->genero = $genero;
        $this->email = $email;
    }
    
    // Getters y setters
    
    public function getCc() {
        return $this->cc;
    }
    
    public function setCc($cc) {
        $this->cc = $cc;
    }
    
    public function getContrasena() {
        return $this->contrasena;
    }
    
    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }
    
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    
    public function getGenero() {
        return $this->genero;
    }
    
    public function setGenero($genero) {
        $this->genero = $genero;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
}
