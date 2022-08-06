<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Professor</title>
</head>

<body>
    <h1>Cadastro de professor</h1>
    <form action="process.php" method="POST">
        <p>
            <!-- Cadastro do nome do professor -->
            <label>Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <!-- Cadastro da disciplina do professor -->
            <label>Disciplina</label>
            <input type="text" name="disciplina">
        </p>
        <p>
            <!-- Cadastro da carga horaria do professor -->
            <label>Carga</label>
            <input type="text" name="carga">
        </p>
        <p>
            <!-- Cadastro da disponibilidade do professor -->
            <label>Disponibilidade</label>
            <select id="disponibilidade" name="cmbDisponibilidade">
                <option>Selecione</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
            </select>
        </p>
        <p>
            <label><strong>Dia disponível</strong></label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Segunda" checked> Segunda
            </label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Terça"> Terça
            </label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Quarta"> Quarta
            </label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Quinta"> Quinta
            </label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Sexta"> Sexta
            </label>
            <label>
                <input type="radio" name="cmbDisponibilidadeDia" value="Todos os dias"> Todos os dias
            </label>

        </p>
        <p>
            <!-- Cadastro das turmas que o professor dará aulas-->
            <label>Turma</label>
            <select id="turma" name="cmbTurma">
                <option>Selecione</option>
                <option value="1º ano">1º ano</option>
                <option value='2º ano'>2º ano</option>
                <option value='3º ano'>3º ano</option>
            </select>
        </p>
        <p>
            <button type='submit'>Entrar</button>
        </p>
    </form>
</body>

</html>