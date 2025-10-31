<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="curriculo">
    <h2>Curriculum Vitae</h2>
    <hr>

    <p><b>Nome:</b> <?= $_POST['nome'] ?></p>
    <p><b>Email:</b> <?= $_POST['email'] ?></p>
    <p><b>Telefone:</b> <?= $_POST['telefone'] ?></p>
    <p><b>CPF:</b> <?= $_POST['cpf'] ?></p>
    <p><b>Idade:</b> <?= $_POST['idade'] ?></p>
    <p><b>Estado Civil:</b> <?= $_POST['estadoCivil'] ?></p>
    <p><b>Nacionalidade:</b> <?= $_POST['nacionalidade'] ?></p>
    <p><b>Gênero:</b> <?= $_POST['genero'] ?></p>
    <p><b>Endereço:</b> <?= $_POST['endereco'] ?></p>
    <p><b>CEP:</b> <?= $_POST['cep'] ?></p>
    <p><b>Cidade:</b> <?= $_POST['cidade'] ?></p>
    <p><b>Estado:</b> <?= $_POST['estado'] ?></p>

    <h3>Objetivo</h3>
    <hr>
    <p><?= $_POST['objetivo'] ?></p>

    <h3>Qualidades</h3>
    <hr>
    <p><?= $_POST['qualidades'] ?></p>

    <h3>Formação Acadêmica</h3>
    <hr>
    <?php
    if (!empty($_POST['instituicao'])) {
        foreach ($_POST['instituicao'] as $key => $inst) {
            echo "<p><b>Instituição:</b> $inst</p>";
            echo "<p><b>Curso:</b> ".$_POST['curso'][$key]."</p>";
            echo "<p><b>Concluído:</b> ".$_POST['concluido'][$key]."</p>";
            echo "<p><b>Ano de Conclusão:</b> ".$_POST['anoConclusao'][$key]."</p><hr>";
        }
    }
    ?>

    <h3>Experiência Profissional</h3>
    <hr>
    <?php
    if (!empty($_POST['empresa'])) {
        foreach ($_POST['empresa'] as $key => $emp) {
            echo "<p><b>Empresa:</b> $emp</p>";
            echo "<p><b>Início:</b> ".$_POST['inicio'][$key]."</p>";
            echo "<p><b>Fim:</b> ".$_POST['fim'][$key]."</p>";
            echo "<p><b>Descrição:</b> ".$_POST['descricao'][$key]."</p><hr>";
        }
    }
    ?>

    <button onclick="window.print()">Imprimir</button>
</div>
</body>
</html>
