<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cadastros de instituto</title>
</head>

<body>
    <h1>Cadastro da instituição</h1>
    <form action="process3.php" method="POST">
    <p>
        <label>Nome da instituição</label>
        <input type="text" name='instituto'>
    </p>
    <p>
        <label>Ensino</label>
        <select name="Ensino" id="Ensino">
            <option value="Selecione">Selecione</option>
            <option value="Ensino_Fundamental_I">Ensino Fundamental I</option>
            <option value="Ensino_Fundamental_II">Ensino Fundamental II</option>
            <option value="Ensino_Médio">Ensino Médio</option>
        </select>
    </p>
    <p>
        <button type='submit'>Entrar</button>
    </p>
    </form>
</body>

</html>