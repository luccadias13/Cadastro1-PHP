<html>
<head>
<title> Alteração de Usuário </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/css/forms.css">

</head>

<body class="text-center">




<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Altere seus dados</h1>
        
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
        <form action="./?classe=Usuario&acao=AlterarUsuario" method="POST"  name="dados">
                <div class="row">

                <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                ID:
                            </span>
                        </div>
                        <input id="firstName" type="text" name="nome" placeholder="Nome" value = '<?php echo $_SESSION['usuario']->id_cliente;?>' disabled class="form-control bg-white border-left-0 border-md">
                    </div>
                    <!-- Input NOME -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                        Nome:
                    </span>
                        </div>
                        <input id="firstName" type="text" name="nome" placeholder="Nome" value = '<?php echo $_SESSION['usuario']->nome_cliente;?>'class="form-control bg-white border-left-0 border-md">
                    </div>


                    <!-- Input EMAIL -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                Email:
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="E-mail"   value = '<?php echo $_SESSION['usuario']->email_cliente;?>' class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Input Telefone -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                               Celular:
                            </span>
                        </div>
         
                        <input id="telefone" type="tel" name="telefone" placeholder="Telefone"  value = '<?php echo $_SESSION['usuario']->telefone_cliente;?>' class="form-control bg-white border-md border-left-0 pl-3">
                    </div>

                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                               Data de nascimento:
                            </span>
                        </div>
         
                        <input id="data_nascimento" type="date" name="data_nascimento" class="form-control bg-white border-md border-left-0 pl-3"  value = '<?php echo $_SESSION['usuario']->data_nasc_cliente;?>'>
                    </div>


                    <!-- Input senha -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                Senha:
                            </span>
                        </div>
                        <input id="password" type="password" name="senha" placeholder="Senha" class="form-control bg-white border-left-0 border-md"  value = '<?php echo $_SESSION['usuario']->senha;?>'>
                    </div>


                    <!-- Cadastrar Botão -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                    <input type="submit" value = "Alterar" class= "btn btn-primary btn-block py-2">
                     
                    </div>



                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


</body>
</html>




