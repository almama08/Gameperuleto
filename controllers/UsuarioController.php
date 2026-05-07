<?php

class UsuarioController {
    private $gestor;

    public function __construct($gestor) {
        $this->gestor=$gestor;
    }

    public function registrarse() {
        if($_SERVER['RQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $passwordPlana = $_POST['password'];

            $passwordHash = password_hash($passwordPlana, PASSWORD_DEFAULT);

            $nuevoUsuario = new Usuario($email, $passwordHash);

            $this->gestor->registrarUsuario($nuevoUsuario);

            header("Location: index.php?accion=login");
            exit;
        }

        include "views/registrarse.php";
    }
}