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
    <base href=<?php echo BASE_URL_DIR; ?>>

    <title>4° Ano Ensino Fundamental ─ Secretaria de Educação contra o COVID-19</title>

    <link rel="shortcut icon" href="img/logo.ico">

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
        $("#nav-link-ensino-fundamental").addClass("active");
    </script>




    <div class="jumbotron jumbotron-fluid m-0 flex-grow-1">
        <div class="container">
            <h4 class="pmq-brand-font pmq-text-red">Atividades do 4º Ano ─ Ensino Fundamental</h4>
            <hr class="my-2">
        </div>
        <div class="container pt-3">
            <h5>Atividade 1 ─ 04 de maio de 2020</h5>
            <div class="list-group">
                <a href="https://forms.gle/9Xj7CSzdFT9f8TMn8" class="list-group-item list-group-item-action">Português / Matemática / Ciências </a>
                <a href="https://forms.gle/TrcyzA6r6xnTcaU68" class="list-group-item list-group-item-action">Arte</a>
                <a href="https://forms.gle/EJVpScPXnxdzwd31A" class="list-group-item list-group-item-action">Educação Física</a>
                <a href="https://forms.gle/f5cBkonuNYyVicvh7" class="list-group-item list-group-item-action">Inglês</a>
            </div>

            <h5>Atividade 2 ─ 18 de maio de 2020</h5>
            <div class="list-group">
                <a href="https://forms.gle/D9BS6fMpgwn61u6s7" class="list-group-item list-group-item-action">Português / Matemática / Ciências </a>
                <a href="https://forms.gle/2Y7D9bdo8JbDPJMn9" class="list-group-item list-group-item-action">Arte</a>
                <a href="https://forms.gle/fgz92A2sXHdfCrEJ9" class="list-group-item list-group-item-action">Educação Física</a>
                <a href="https://forms.gle/x7Q2jxwZV35zETyX6" class="list-group-item list-group-item-action">Inglês</a>
            </div>

            <h5>Atividade 3 ─ 01 de junho de 2020</h5>
            <div class="list-group">
                <a href="https://forms.gle/EdXCTYa5TftjGmMX8" class="list-group-item list-group-item-action">Português / Matemática / Ciências </a>
                <a href="https://forms.gle/RhYJ1wYrhvNEuh126" class="list-group-item list-group-item-action">Arte</a>
                <a href="https://forms.gle/dWTPQEYLoVUvHyim6" class="list-group-item list-group-item-action">Educação Física</a>
                <a href="https://forms.gle/APiu3YHBSXMZsczo6" class="list-group-item list-group-item-action">Inglês</a>
            </div>
            
            <h5>Atividade 4 ─ 15 de junho de 2020</h5>
            <div class="list-group">
                <a href="https://forms.gle/B13L1Dra79qAALEc7" class="list-group-item list-group-item-action">Português / Matemática / Ciências </a>
                <a href="https://forms.gle/wDTxvBbVsebGQBTcA" class="list-group-item list-group-item-action">Arte</a>
                <a href="https://forms.gle/NFn5VPmfZ3hGGhke7" class="list-group-item list-group-item-action">Educação Física</a>
                <a href="" class="list-group-item list-group-item-action">Inglês</a>
            </div>

            <h5>Atividade 5 ─ 29 de junho de 2020</h5>
            <div class="list-group">
                <a href="https://forms.gle/unTFJedAWNtLvJwg7" class="list-group-item list-group-item-action">Português / Matemática / Ciências </a>
                <a href="https://forms.gle/HzSGwxU4tD181nFn9" class="list-group-item list-group-item-action">Arte</a>
                <a href="https://forms.gle/CwRCpjjpYkHhTcQ6A" class="list-group-item list-group-item-action">Educação Física</a>
                <a href="https://forms.gle/WYcaTxQ36kZTtUo98" class="list-group-item list-group-item-action">Inglês</a>
            </div>
        </div>
    </div>

    <?php
    include(HTDOCS_DIR . '/html/footer.html');
    ?>
</body>

</html>