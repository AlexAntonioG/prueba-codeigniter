<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Prueba Técnica">
        <meta name="author" content="Natacha Alvarez">

        <title>Telat - Prueba Técnica</title>

        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Fontawesome -->
        <link href="<?php echo base_url('assets/css/fontawesome.min.css'); ?>" rel="stylesheet">
        <!-- DataTables -->
        <link href="<?php echo base_url('assets/css/datatables.min.css'); ?>" rel="stylesheet">
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <!-- Favicon -->
        <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>">

    </head>
    <body>

        <header class="shadow-sm">

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img class="mb-2" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="" width="40" height="40"> Telat 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('index.php'); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/reports/'); ?>">Reports</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>




