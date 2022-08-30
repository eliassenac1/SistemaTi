<?php
//Sistema de autenticação
include('acesso_com.php');
//Variaveis de ambiente
include('../config.php');
//Conexão com banco
include('../conexoes/conexao.php');





//Chave estrangeira tipo
$query_tipo = "select * from tbtipos order by rotulo_tipo asc";
$lista_fk = $conexao->query($query_tipo);
$linha_fk = $lista_fk->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <<?php echo SYS_NAME; ?> Reservar </title>
            <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>

<body class="fundofixo">
    <?php include('menu_adm.php'); ?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-2 col-md-8">
                <h2 class="breadcrumb tex-danger">
                    <a href="cadastro_reserva.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Reserva
                </h2>
                <div class="thumbnail">
                    <!-- Abre thumbnail -->
                    <div class="alert alert-danger" role="alert">
                        <form action="cadastro.reserva.php" method="post" id="form_reserva" name="form_reserva" enctype="multipart/form-data">
                            <!--Inserir o campo id_produto oculto para uso no filtro -->
                            <input type="hidden" name="id_reserva" id="id_reserva">
                            <!-- Select id_tipo_produto -->
                            
                            <div class="input-group">
                            

                               
                                    <?php do { ?>
                                        
                                    <?php } while ($linha_fk = $lista_fk->fetch_assoc());
                                    $linha_fk = mysqli_num_rows($lista_fk);
                                    if ($linha_fk > 0) {
                                        mysqli_data_seek($lista_fk, 0);
                                        $linha_fk = $lista_fk->fetch_assoc();
                                    }
                                    ?>
                               
                            </div>
                            <br>
                            <!-- radio destaque_produto -->
                            
                            <div class="input-group">
                               
                            </div>
                            <br>
                            <!-- Text descri_produto -->
                            <label for="descri_data">Nome Completo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" id="descri_produto" name="descri_produto" maxlength="100" required  placeholder="Digite o titulo do produto...">
                            </div>
                            <br>
                            <label for="descri_nome">CPF</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" id="descri_cpf" name="descri_cpf" maxlength="11" required  placeholder="Digite o CPF.....">
                            </div> 
                            <br>
                            <label for="descri_nome">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" id="descri_produto" name="descri_produto" maxlength="20" required  placeholder="Digite o E-mail...">
                            </div>   
                            <br>
                            <label for="descri_nome">Celular/Telefone</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" class="form-control" id="descri_produto" name="descri_produto" maxlength="20" required  placeholder="Digite o numero do celular com DDD...">
                            </div>                     
                            
                           
                            <!-- file imagem-->
                                                       
                            <br>
                            <!-- Botão Enviar -->
                            <input type="submit" value="Cadastrar" name="enviar" id="enviar" class="btn btn-danger btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>