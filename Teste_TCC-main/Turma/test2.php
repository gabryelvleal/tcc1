<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de cadastros de turmas</title>
</head>

<body>
    <h1>Cadastros de Turmas</h1>
    <form action="process2.php" method="POST">
        <p>
            <label>Ano</label>
            <select name="Ano" id="Ano">
                <option value="">Selecione</option>
                <option value="1 ano">1º ano</option>
                <option value="2 ano">2º ano</option>
                <option value="3 ano">3º ano</option>
            </select>

        </p>
        <p>
            <label>Curso</label>
            <select name="Curso" id="Curso">
                <option value="">Selecione</option>
                <option value="TDS">Desenvolvimento de Sistemas</option>
                <option value="MKT">Marketing</option>
            </select>

        </p>
        <p>
            <label>Turma</label>
            <select name="Turma" id="Turma">
                <option value="">Selecione</option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>

        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>

</html>