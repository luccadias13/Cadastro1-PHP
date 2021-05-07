<?php


class Usuario
{

    private $id_cliente;
    private $nome_cliente;
    private $email_cliente;
    private $telefone_cliente;
    private $senha_cliente;
    private $data_nasc_cliente;

    private $con;


    public function __construct($id=null)
    {
        $this->id = $id;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);

    }

    
     public function Cadastro() {

        $sql = $this->con->prepare("SELECT * FROM clientes WHERE email_cliente=? AND senha=?");
        $sql->execute( array(
            $this->email_cliente,
            $this->senha_cliente,
        ) );
        // devolve o registro do usuário procurado
        $row = $sql->fetchObject();

        // se o usuário foi localizado
          if ($row){
         $_SESSION['msg'] = "Usuario já cadastrado, por favor tente outro.";
         include 'view/cadastro_usuario.php';
        // se o usuário não foi foi localizado
        }else{
       
                $sql = $this->con->prepare("INSERT INTO clientes (id_cliente, nome_cliente, email_cliente, telefone_cliente, senha, data_nasc_cliente) VALUES (null,?,?,?,?,?)");
                $sql->execute([
                $this->nome_cliente,
                $this->email_cliente,
                $this->telefone_cliente,
                $this->senha_cliente,
                $this->data_nasc_cliente,
                ]);
        
                if ( $sql->errorCode()=='00000'){
                    $sql = $this->con->prepare("SELECT * FROM clientes WHERE email_cliente=? AND senha=?");
                    $sql->execute( array(
                        $this->email_cliente,
                        $this->senha_cliente,
                    ) );

                    $row = $sql->fetchObject();
                    // se o usuário foi localizado
                      if ($row){
                     $_SESSION['usuario'] = $row;
                     include 'view/home.php';
                      }else{
                        $_SESSION['msg'] = "Usuario ou senha incorretas.";
                        header("Location: view/cadastro_usuario.php");
                }
                }else{
                    header("Location: view/cadastro_usuario.php");
                }


            }
        

    }

    
    public function AlterarUsuario(){
        
            $sql= $this->con->prepare("UPDATE clientes SET id_cliente =?, nome_cliente=?, senha=?,email_cliente=?, telefone_cliente=?, data_nasc_cliente=?  WHERE id_cliente=?");
            $sql->execute([
                $_SESSION['usuario']->id_cliente,
                $this->nome_cliente,
                $this->senha_cliente,
                $this->email_cliente,
                $this->telefone_cliente,
                $this->data_nasc_cliente,
               $_SESSION['usuario']->id_cliente

            ]);
    
            if ($sql->errorCode() == '00000') {
                $sql = $this->con->prepare("SELECT * FROM clientes WHERE email_cliente=? AND senha=?");
                $sql->execute( array(
                    $this->email_cliente,
                    $this->senha_cliente,
                ) );

                $row = $sql->fetchObject();
                // se o usuário foi localizado
                  if ($row){
                 $_SESSION['usuario'] = $row;
                 include 'view/home.php';
                  }else{
                    $_SESSION['msg'] = "Usuario ou senha incorretas.";
                    header("Location: view/cadastro_usuario.php");
            }


            } else {
                echo "<div class='alert alert-danger'>" . $sql->errorInfo()[2] . "</div>";
            }
        }
     


    /**
     * @return null
     */
    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param null $id
     */
    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }


   /**
     * @return null
     */
    public function getNome_cliente()
    {
        return $this->nome_cliente;
    }

    /**
     * @param null $id
     */
    public function setNome_cliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;
    }


   /**
     * @return null
     */
    public function getEmail_cliente()
    {
        return $this->email_cliente;
    }

    /**
     * @param null $id
     */
    public function setEmail_cliente($email_cliente)
    {
        $this->email_cliente = $email_cliente;
    }


   /**
     * @return null
     */
    public function getTelefone_cliente()
    {
        return $this->telefone_cliente;
    }

    /**
     * @param null $id
     */
    public function setTelefone_cliente($telefone_cliente)
    {
        $this->telefone_cliente = $telefone_cliente;
    }



   /**
     * @return null
     */
    public function getSenha_cliente()
    {
        return $this->senha_cliente;
    }

    /**
     * @param null $id
     */
    public function setSenha_cliente($senha_cliente)
    {
        $this->senha_cliente = $senha_cliente;
    }

/**
     * @return null
     */
    public function getData_nasc_cliente()
    {
        return $this->data_nasc_cliente;
    }

    /**
     * @param null $id
     */
    public function setData_nasc_cliente($data_nasc_cliente)
    {
        $this->data_nasc_cliente = $data_nasc_cliente;
    }







}
