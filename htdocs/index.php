<!-- CONFIG ---------------- -->
<?php
include_once('../conf/conf.php');
?>
<!-- ----------------------- -->



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pmq.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>



<body class='d-flex flex-column min-vh-100'>
    <?php
    include(HTDOCS_DIR . '/html/header.html');
    ?>

    <div class="jumbotron jumbotron-fluid m-0 flex-grow-1">
        <div class="container">
            <h1 class="display-4 pmq-brand-font pmq-text-red">Educação Conect@da contra o COVID-19</h1>
            <p class="lead">Portal educacional da Prefeitura Municipal de Quatá com atividades escolares para o período de quarentena devido à pandemia de COVID-19.</p>
            <hr class="my-2">
            <p>Acesso às atividades:</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p>
        </div>
    </div>

    <footer class="container-fill flex-column m-0 pmq-bg-darkred">

        <div class="container-fill text-light py-3 px-5">
            <div class='row'>
                <div class="col text-justify text-sm m-2">
                    <h5 class="font-weight-bold">Secretaria de Educação</h5>
                    <p></p>

                </div>
                <div class="col">
                    <div class='container-fluid text-center'>
                        <img src="img/logo-prefeitura.png" alt="" class='pmq-header-main-logo'>
                        <a class='container-fluid text-light  text-md' href="">Prefeitura Municipal de Quatá-SP</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fill text-center py-1 pmq-bg-darkerred text-light px-5">
            © 2020 ─ Setor de Tecnologia da Informação. Prefeitura Municipal de Quatá-SP
        </div>
    </footer>
</body>

</html>