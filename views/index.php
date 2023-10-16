<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starter Project</title>
</head>
<body>
    <h1>Lista</h1>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($resultData as $data): ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['nome'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>