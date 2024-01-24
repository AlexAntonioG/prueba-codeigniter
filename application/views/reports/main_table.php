<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <script>

        $(document).ready(function() {
            new DataTable('#data', {
                paging: false,
                scrollCollapse: true,
                scrollY: '25vh',
                scrollX: true,
                language: 
                {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                dom: 'fBrtilp',
                buttons: 
                [
                    {
                        extend: 'copy',
                        text: 'Copiar'
                    },
                    {
                        extend: 'excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'A2',
                    }
                ]
            });
        });

    </script>

    <main class="container">
        <div class="row row-cols-1 p-3 justify-content-center">
            <table id="data" class="table table-striped table-bordered'" style="width:100%">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                </thead>
                <tbody>
                <?= printData($perfiles); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
   