<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="./css/output.css">
</head>

<body>
    <section class="flex flex-col justify-center max-w-auto px-32">
        <div class="text-4xl flex justify-center items-center m-2">
            <h1 class="bg-blue-500 border-2 p-4 rounded-full mt-2 text-white">Dados dos usuarios</h1>
        </div>

        <div class="font-semibold text-xl bg-gray-500 text-white">
            <?php
            $sql_list = "SELECT id, nome FROM usuarios";
            $result = $mysqli->query($sql_list);
            while ($row = $result->fetch_assoc()) {
                echo $row["id"] . " - " . $row["nome"] . "<br>";
            }
            ?>
        </div>
    </section>
</body>

</html>