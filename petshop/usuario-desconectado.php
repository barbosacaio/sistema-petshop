<?php
    print "<link rel='shortcut icon' sizes='196x196' href='imagens/logo.png'>
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
                @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');

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
                        <a href='#cadastro' class='nav-item nav-link' type='button' data-bs-toggle='modal' data-bs-target='#modalCadastro'>Cadastro</a>
                        <a href='#login' class='nav-item nav-link' type='button' data-bs-toggle='modal' data-bs-target='#modalLogin'>Login</a>
                        <a href='#pets' class='nav-item nav-link' type='button' data-bs-toggle='modal' data-bs-target='#modalPets'>Pets</a>
                        <a href='lista-pets.php' class='nav-item nav-link' type='button'>Lista de Pets</a>
                    </div>
                    <div class='navbar-nav ms-auto'>
                        <a href='#sair' class='nav-item nav-link' type='button' data-bs-toggle='modal' data-bs-target='#modalSair'>Sair</a>
                    </div>
                </div>
            </div>
        </nav><br><br>

            <div align='center'>
                <h2 style='font-family: 'Lato';'>Login necessário</h2>
            </div><br>
            <div align='center'>
                <a href='index.html'><button type='button' class='btn' style='background-color: rgba(50, 140, 245, 0.6);'>Voltar</button></a>
            </div>
        </body>
    </html>";
?>