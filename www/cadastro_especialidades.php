<?php

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];

    $sql = "INSERT INTO especialidades(nome)
            VALUES('$nome')";

    mysqli_query($conexao_bd, $sql);

    header("Location: cadastro_especialidades.php");
    exit;
}

$sqlEspecialidades = "SELECT * FROM especialidades";

$resultado = mysqli_query(
    $conexao_bd,
    $sqlEspecialidades
);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Especialidades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

    <h2>Cadastro de Especialidades</h2>

    <form method="POST">

        <div class="mb-3">

            <label>Nome</label>

            <input
                type="text"
                name="nome"
                class="form-control"
                required
            >

        </div>

        <button type="submit" class="btn btn-primary">
            Salvar
        </button>

    </form>

    <hr>

    <table class="table table-striped">

        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>

        <?php while($esp = mysqli_fetch_assoc($resultado)) { ?>

        <tr>
            <td><?php echo $esp['id']; ?></td>
            <td><?php echo $esp['nome']; ?></td>
        </tr>

        <?php } ?>

    </table>

</body>

</html>