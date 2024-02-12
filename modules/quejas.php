<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css\style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Quejas y comentarios</title>
</head>
<?php include "../headers/menuacceso.php"; ?>
<body >

<div class="complaints-section">
    <h2>Quejas o sugerencias</h2>
    <form class="complaints-form" id="complaintsForm">
        <input type="text" name="name" placeholder="Tu nombre" required><br>
        <input type="text" name="email" placeholder="Tu correo" required><br>
        <textarea name="complaint" placeholder="Tu queja o sugerencia" required></textarea><br>
        <input type="submit" value="Enviar comentario">
    </form>
</div>

<script src="../scripts\scripts_index-2.js"></script>
<?php include "../footer/footer.php"; ?>
</body>
</html>