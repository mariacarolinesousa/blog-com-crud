<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Artigo</title>
</head>



<body>
    <form action="new-post.php" method="POST">
        <fieldset>
            <legend>Criando um Artigo</legend>
            <label for="nome">Nome</label> <br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome"  required> <br>
                <label for="texto">Texto</label> <br>
                <input type="text" id="texto" name="texto" placeholder="Digite seu Texto"  required> <br>
                <button type="submit">Enviar</button>
    </form>
    
</body>
</html>