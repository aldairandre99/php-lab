<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <h1 class="flex justify-center text-3xl font-bold w-full  ">
        Sobre nos.
    </h1>
    <?php
        date_default_timezone_set("Africa/Luanda"); 
        echo "<p>A data e hora atuais em Luanda é: </p> ".date("d/m/Y H:i:s A T ");
    ?>
</body>

</html>