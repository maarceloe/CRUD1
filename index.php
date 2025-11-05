<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud 1</title>
    <link href="./css/output.css" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen w-auto shadow-2xl">
        <form action="save.php" method="POST" class="p-16 border rounded-4xl">
            <div class="flex flex-col mb-2">
                <label for="nome" class="text-xl mb-2">Nome:</label>
                <input type="text" name="nome" id="nome" class="border-2 outline-none rounded-xl p-2 focus:border-blue-500 transform transition-all duration-400 text-xl">
            </div>

            <div class="flex flex-col mb-2">
                <label for="senha" class="text-xl mb-2">Senha:</label>
                <input type="password" name="senha" id="senha" class="border-2 outline-none rounded-xl p-2 focus:border-blue-500 transform transition-all duration-400 text-xl">
            </div>

            <input type="submit" value="SALVAR" class="outline-none rounded-xl p-2 mt-4 w-full bg-blue-500 text-white cursor-pointer hover:bg-blue-700 transform transition-all duration-400 text-2xl font-semibold">

        </form>
    </div>
</body>

</html>