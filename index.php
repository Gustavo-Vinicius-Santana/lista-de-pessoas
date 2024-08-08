<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>PROJETO 1: CRUD</h1>
    </header>

    <main>
        <div class="nav1">
            <div class="divbtn">
                <input class="abra1 btn" type="submit" name="submit2" value="CADASTRAR">
            </div>
            <div class="divbtn">
                <input type="submit" value="EDITAR" name="editar" class="btn abra2">
            </div>
        </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="divbtn">
                    <input type="submit" name="submit2" value="MOSTRAR usuarios" class="mostra">
                </div>
            </form>
        <div>
        <table>
            <thead>
                <th>ID</th>
                <th>NOME</th>
                <th>ANO</th>
                <th>SALARIO</th>
            </thead>
            <tbody>
                <?php
                    function mostrar(){
                        $host = "localhost";
                        $usuario = "root";
                        $senha = "";
                        $bd = "bd_lista_usuarios";
                    $con = mysqli_connect($host, $usuario, $senha, $bd);
                    if(!$con){
                        die("Connection Failed" .mysqli_connect_errno());
                    }

                    $mostra = "select * from usuarios;";
                    $result = mysqli_query($con, $mostra);

                    while($registro = mysqli_fetch_array($result)){
                        $id = $registro['id'];
                        $nom = $registro['nome'];
                        $ida = $registro['ano'];
                        $sala = $registro['salario'];
                        echo "<tr><td>$id</td>";
                        echo "<td>$nom</td>";
                        echo "<td>$ida</td>";
                        echo "<td>$sala </td></tr>";
                    }
                    mysqli_close($con);
                    }
                    if(isset($_GET['submit2'])){
                        mostrar();
                    }
                ?>
            </tbody>
        </table>
        </div>
        <div>
            <div class="t1">
                <h2>PESQUISA</h2>
            </div>
            <div class="pesq">
                <form class="formu2" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                    <input class="entrada2" type="text" name="pesquisa" placeholder="DIGITE A BUSCA">
                    <div class="conteiner-select">
                        <select name="tp" class="selecionar">
                            <option value="a">POR ID</option>
                            <option value="b">POR NOME</option>
                            <option value="c">POR ANO</option>
                            <option value="d">POR SALARIO</option>
                        </select>
                    </div>

                    <div class="divbtn">
                        <input type="submit" value="BUSCAR" name="seek" class="btn">
                    </div>
                </form>
            </div>

            <div class="pesq">
            <table>
                <thead>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>ANO</th>
                    <th>SALARIO</th>
                </thead>
                <tbody>
                <?php
                    function buscar(){
                        $host = "localhost";
                        $usuario = "root";
                        $senha = "";
                        $bd = "bd_lista_usuarios";
                        $con = mysqli_connect($host, $usuario, $senha, $bd);
                        if(!$con){
                            die("Connection Failed" .mysqli_connect_errno());
                        }

                    $condi = $_GET['tp'];
                    if($condi == 'a'){
                        $busc = $_GET['pesquisa'];
                        $buscar = "select * from usuarios where id = '$busc'";
                        $pesquisa = mysqli_query($con,$buscar);

                        while($dados = $pesquisa->fetch_assoc()){
                            ?>
                            <tr>
                                <td> <?php echo $dados['id']; ?> </td>
                                <td> <?php echo $dados['nome']; ?> </td>
                                <td> <?php echo $dados['ano']; ?> </td>
                                <td> <?php echo $dados['salario']; ?> </td>
                            </tr>
                            <?php
                        }
                    }
                    if($condi == 'b'){
                        $busc = $_GET['pesquisa'];
                        $buscar = "select * from usuarios where nome like '%$busc%'";
                        $pesquisa = mysqli_query($con,$buscar);

                        while($dados = $pesquisa->fetch_assoc()){
                            ?>
                            <tr>
                                <td> <?php echo $dados['id']; ?> </td>
                                <td> <?php echo $dados['nome']; ?> </td>
                                <td> <?php echo $dados['ano']; ?> </td>
                                <td> <?php echo $dados['salario']; ?> </td>
                            </tr>
                            <?php
                        }
                    }
                    if($condi == 'c'){
                        $busc = $_GET['pesquisa'];
                        $buscar = "select * from usuarios where ano = '$busc'";
                        $pesquisa = mysqli_query($con,$buscar);

                        while($dados = $pesquisa->fetch_assoc()){
                            ?>
                            <tr>
                                <td> <?php echo $dados['id']; ?> </td>
                                <td> <?php echo $dados['nome']; ?> </td>
                                <td> <?php echo $dados['ano']; ?> </td>
                                <td> <?php echo $dados['salario']; ?> </td>
                            </tr>
                            <?php
                        }
                    }
                    if($condi == 'd'){
                        $busc = $_GET['pesquisa'];
                        $buscar = "select * from usuarios where salario = '$busc'";
                        $pesquisa = mysqli_query($con,$buscar);

                        while($dados = $pesquisa->fetch_assoc()){
                            ?>
                            <tr>
                                <td> <?php echo $dados['id']; ?> </td>
                                <td> <?php echo $dados['nome']; ?> </td>
                                <td> <?php echo $dados['ano']; ?> </td>
                                <td> <?php echo $dados['salario']; ?> </td>
                            </tr>
                            <?php
                        }
                    }
                    }
                    if(isset($_GET['seek'])){
                        buscar();
                    }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


    <dialog class="jan1">
        <div class="fechar">
            <span class="material-symbols-outlined fechamen">
                close
            </span>
        </div>
        <h1 class="t1">CADASTRAR USUARIO</h1>
        <form class="caixa1" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="divcol espa">
                <label for="nome">NOME:</label>
                <input class="entrada" type="text" name="nome" placeholder="DIGITE O NOME" required>
            </div>

            <div class="divlin espa">
                <div class="divcol">
                    <label for="ano">ANO:</label>
                    <input class="entrada" type="number" name="nascimento" placeholder="ano" required max="2023">
                </div>

                <div class="divcol">
                    <label for="salario">SALARIO</label>
                     <input class="entrada" type="number" name="salario" placeholder="SALARIO">
                </div>
            </div>

            <div class="divbtn espa">
                <input type="submit" value="CONFIRMAR" name="submit" class="btn">
            </div>
        </form>

        <div class="conteiner-res">
            <?php
                function registro(){
                    $host = "localhost";
                    $usuario = "root";
                    $senha = "";
                    $bd = "bd_lista_usuarios";
                    $con = mysqli_connect($host, $usuario, $senha, $bd);
                    if(!$con){
                        die("Connection Failed" .mysqli_connect_errno());
                    }

                    $nome= $_GET['nome'] ?? 'teste';
                    $ano= $_GET['nascimento'] ?? 0;
                    $sal = $_GET['salario'] ?? 0;
                    $insert = "insert into usuarios values (DEFAULT,'$nome', '$ano', '$sal');";

                    mysqli_query($con, $insert);
                    mysqli_close($con);

                    echo "cadastro realizado! de $nome, nascido em $ano e recebendo $sal";
                }
                if(isset($_GET['submit'])){
                    registro();
                }
            ?>
        </div>
    </dialog>
    <dialog class="jan2">
        <div class="fechar">
            <span class="material-symbols-outlined fechamen2">
                close
            </span>
        </div>
        <h1 class="t1">EDITAR USUARIO</h1>

        <div>
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                    <div class="conteiner-input">
                        <label for="iden">ID:</label>
                        <input class="entrada" type="number" name="iden" placeholder="DIGITE O ID" require>
                    </div>
                    <div class="conteiner-input">
                        <label for="alternome">NOME:</label>
                        <input class="entrada" type="text" name="alternome" placeholder="DIGITE NOVO NOME" require>
                    </div>

                    <div class="conteiner-input">
                        <label for="alterano">ANO:</label>
                        <input class="entrada" type="number" name="alterano" placeholder="DIGITE NOVO ANO" require>
                    </div>

                    <div class="conteiner-input">
                        <label for="altersal">SALARIO:</label>
                        <input class="entrada" type="number" name="altersal" placeholder="DIGITE NOVO SALARIO" require>
                    </div>

                     <div class="divbtn">
                        <input type="submit" value="EDITAR" name="editar" class="btn">
                     </div>

                     <div class="divbtn">
                        <input type="submit" value="DELETAR" name="deletar" class="btn">
                     </div>
                </form>

                <?php
                    $host = "localhost";
                    $usuario = "root";
                    $senha = "";
                    $bd = "bd_lista_usuarios";
                    $con = mysqli_connect($host, $usuario, $senha, $bd);
                    if(!$con){
                        die("Connection Failed" .mysqli_connect_errno());
                    }

                    $buscid = $_GET['iden'] ?? 00;
                    $buscar = "select * from usuarios where id = '$buscid'";
                    $pesquisa = mysqli_query($con,$buscar);

                    while($dados = $pesquisa->fetch_assoc()){
                        $origi_id = $dados['id'] ?? 00;
                        $origi_nome = $dados['nome'] ?? 'teste';
                        $origi_ano = $dados['ano'] ?? 00;
                        $origi_sal = $dados['salario'] ?? 00;
                    }

                    $editado_nome = $_GET['alternome'] ?? 'teste';
                    $editado_ano = $_GET['alterano'] ?? 000;
                    $editado_sal = $_GET['altersal'] ?? 000;
                    $editor = "update usuarios set nome = '$editado_nome', ano = '$editado_ano', salario = '$editado_sal' where id = '$buscid'";
                    $editar = mysqli_query($con, $editor);
                ?>

                <?php
                   function delet(){
                    $host = "localhost";
                    $usuario = "root";
                    $senha = "";
                    $bd = "bd_lista_usuarios";
                    $con = mysqli_connect($host, $usuario, $senha, $bd);
                    if(!$con){
                        die("Connection Failed" .mysqli_connect_errno());
                    }

                    $linha = $_GET['iden'];
                    $deleta = "delete from usuarios where id = '$linha'";
                    $deletar = mysqli_query($con, $deleta);
                   }
                   if(isset($_GET['deletar']))
                ?>
            </div>
        </div>
    </dialog>

    <script src="comandos.js"></script>
</body>
</html>