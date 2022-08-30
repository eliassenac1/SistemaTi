<?php
//Sistema de autenticação
include('acesso_com.php');
//Variaveis de ambiente
include('../config.php');
//Conexão com banco
include('../conexoes/conexao.php');

if($_POST){    
        
    $sigla_tipo = $_POST['sigla_tipo'];
    $rotulo_tipo = $_POST['rotulo_tipo'];
    $disponivel_tipo = $_POST['disponivel_reserva'];

        $campos_insert = "sigla_tipo,rotulo_tipo,disponivel_tipo";
        $values = "'$sigla_tipo','$rotulo_tipo','$disponivel_tipo'";
        
        $query = "insert into tbtipos ($campos_insert) values ($values);";
        $resultado = $conexao->query($query);

     // var_dump($$query);

    //Após o insert direciona a pagina
   if(mysqli_insert_id($conexao)){
        header("location: cliente_reserva.php");
    }else{
        header("location: cliente_reserva.php");
    } 
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <<?php echo SYS_NAME; ?> - Buscando Reserva </title>
            <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>

<body class="fundofixo">
    <?php include('menu_adm.php'); ?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-2 col-md-8">
                <h2 class="breadcrumb tex-danger">
                    <a href="cliente_reserva.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Reservar
                </h2>
                <div class="thumbnail">
                    <!-- Abre thumbnail -->
                    <div class="alert alert-danger" role="alert">
                        <form action="cliente_reserva.php" method="post" id="form_reserva" name="form_reserva">
                            <!--Inserir o campo id_tipo oculto para uso no filtro -->
                            <input type="hidden" name="id_tipo" id="id_tipo">
                                                    
                            <div class="input-group">
                                
                                   
                                </span>
                                
                            </div>
                            <br>
                            <div class="input-group">
                                </span>
                            <div>
                            <br>
                                <h4>Mínimo 36 horas de antecedência e no máximo 60 dias, será aceito apenas um pedido de reserva por dia para um mesmo CPF e com os campos de cadastro de reserva.  </h4>
                            </div>
                            <br>    
                            <!-- Botão Enviar -->
                            <input type="submit" value="Prossiga" name="enviar" id="enviar" class="btn btn-success btn-block">
                        </form>
                
    </main>

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>


