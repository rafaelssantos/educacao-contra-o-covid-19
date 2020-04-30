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
    <title>Ensino Fundamental ─ Educação Conect@da </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pmq.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8cd927dbc4.js" crossorigin="anonymous"></script>
</head>



<body class='d-flex flex-column min-vh-100'>
    <?php
    include(HTDOCS_DIR . '/html/header.html');
    ?>

    <script>
        $("#nav-link-educacao-infantil").addClass("active");
    </script>




    <div class="jumbotron jumbotron-fluid m-0 flex-grow-1">
        <div class="container">
            <h4 class="pmq-brand-font pmq-text-red">Ensino Fundamental</h4>
            <hr class="my-2">
            <p class="lead">
                <a class="btn btn-primary btn-lg my-1" href="Jumbo action link" role="button">1º Ano</a>
                <a class="btn btn-primary btn-lg my-1" href="Jumbo action link" role="button">2º Ano</a>
                <a class="btn btn-primary btn-lg my-1" href="Jumbo action link" role="button">3º Ano</a>
                <a class="btn btn-primary btn-lg my-1" href="Jumbo action link" role="button">4º Ano</a>
                <a class="btn btn-primary btn-lg my-1" href="Jumbo action link" role="button">5º Ano</a>
            </p>
        </div>
    </div>

    <?php
    include(HTDOCS_DIR . '/html/footer.html');
    ?>
</body>

</html>