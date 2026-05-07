<?php

class UsuarioController {
    private $gestor;

    public function __construct($gestor) {
        $this->gestor=$gestor;
    }

    public function registrarse() {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
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

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $email = $_POST['email'];
        $passwordPlana = $_POST['password'];

        $usuario = $this->gestor->buscarUsuarioPorEmail($email);

        if($usuario && password_verify($passwordPlana, $usuario->getPassword())) {


            $_SESSION['usuarioId'] = $usuario->getId();
            $_SESSION['usuarioEmail'] = $usuario->getEmail();
        }else{
        $error = "Credenciales incorrectas.";    
        }
        header('Location: index.php');
        exit;
    }

    include "views/login.php";
    }

    public function logout() {
        $_SESSION = [];

        session_destroy();

        header('Location: index.php?accion=login');
    }
}