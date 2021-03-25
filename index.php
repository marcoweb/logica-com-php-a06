<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemplo Template</title>
        <style>
            body {
                font-family: sans-serif;
            }
        </style>
        <link rel="stylesheet" href="estilo.css" />
    </head>
    <body>
    <?php include 'header.php' ?>
    <main>
        <h1>Página Principal</h1>
        <button type="button" onclick="alert('Olá')">Exemplo</button>
    </main>
    <?php include 'footer.php' ?>

    <script src="script.js"></script>
    </body>
</html>