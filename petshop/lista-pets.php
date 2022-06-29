<?php
    session_start();

    // Conexão com o banco de dados
    include("conexaodb.php");

    // Sistema para mostrar todos os pets cadastrados no banco de dados
    try{
        // Recupera todos os dados cadastrados na tabela 'animais'
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $buscaLista = $conexao->prepare("SELECT * FROM animais");
        $buscaLista->execute();

        // Navbar padrão do site
        print "<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
                <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

                    body{
                        font-family: 'Roboto';
                        font-size: larger;
                    }
                </style>

                <nav class='navbar navbar-expand-lg navbar-light p-3' style='background-color: rgba(50, 140, 245, 0.6);'>
                    <div class='container-fluid'>

                        <a href='index.html' class='navbar-brand'>
                            <img src='imagens/logo.png' alt='Logo Petshop' width='40px'>
                        </a>

                        <button type='button' class='navbar-toggler' data-bs-toggle='collapse' data-bs-target='#navbarCollapse'>
                            <span class='navbar-toggler-icon'></span>
                        </button>

                        <div class='collapse navbar-collapse' id='navbarCollapse'>
                            <div class='navbar-nav'>
                                <a href='index.html' class='nav-item nav-link active'>Home</a>
                            </div>
                        </div>
                    </div>
                </nav><br><br>";

        // Apresenta a tabela
        print "<div class='table-responsive' align='center'>";
                        print "<table class='table' border='2' cellpadding='3'>";
                            print "<tr><td>ID</td><td>Nome</td><td>Animal</td><td>Raça</td><td>Cor</td><td>Cor dos Olhos</td><td>Email do Dono</td></tr>";

                            if($buscaLista->rowCount()==0){
                                print "<tr><td></td><td>Nenhum dado foi encontrado</td></tr></table>";
                                print "<a href='index.html' type='button' class='btn' style='background-color: rgba(50, 140, 245, 0.6);'>Voltar</a>";
                                exit;
                            }

                            $linha = $buscaLista->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_FIRST);

                            do{
                                print "<tr>";
                                print "<td>".$linha[0]."</td>";
                                print "<td>".$linha[1]."</td>";
                                print "<td>".$linha[2]."</td>";
                                print "<td>".$linha[3]."</td>";
                                print "<td>".$linha[4]."</td>";
                                print "<td>".$linha[5]."</td>";
                                print "<td>".$linha[6]."</td>";

                            }while ($linha = $buscaLista->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT));

                            print "</table>";
                            print "<br>";
                            print "<a href='index.html' type='button' class='btn' style='background-color: rgba(50, 140, 245, 0.6);'>Voltar</a>";
    }catch(Exception $e){
        print "<a href='index.html'>Voltar</a>";
    }
?>