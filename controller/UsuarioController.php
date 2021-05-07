<?php
require_once 'model/Usuario.php';

class UsuarioController
{

    public function all(){

        $obj = new Usuario();
        $usuarios = $obj->all();

    }

    public function inicio(){
        include 'view/cadastro_usuario.php';
    }
    public function PaginaAlterarDados(){
       include 'view/alterarDados.php';
    }
    
     public function Cadastro(){
        $obj = new Usuario();

        if (isset($_POST["nome"]) && isset($_POST["senha"])) {

            $obj->setNome_cliente($_POST["nome"]);
            $obj->setSenha_cliente($_POST["senha"]);
            $obj->SetEmail_cliente($_POST["email"]);
            $obj->setTelefone_cliente($_POST["telefone"]);
            $obj->setData_nasc_cliente($_POST["data_nascimento"]);
            $obj->Cadastro();

        }else{
            echo "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }
    
    public function AlterarUsuario()
    {
        $obj = new Usuario();

        if (isset($_POST["email"]) && isset($_POST["nome"]) ) {
            $obj->setNome_cliente($_POST["nome"]);
            $obj->setSenha_cliente($_POST["senha"]);
            $obj->SetEmail_cliente($_POST["email"]);
            $obj->setTelefone_cliente($_POST["telefone"]);
            $obj->setData_nasc_cliente($_POST["data_nascimento"]);
            $obj->AlterarUsuario();
        }
    }

    public function login(){
        $obj = new Usuario();
        if (isset($_POST["nome"]) && isset($_POST["senha"])) {

            $obj->setNome($_POST["nome"]);
            $obj->setSenha($_POST["senha"]);

            $obj->login();

        }
    }

    
    public function delete()
    {

        $obj = new Usuario();
        $obj->setId($_GET['id']);
        $usuario = $obj->delete();

    }    

}


