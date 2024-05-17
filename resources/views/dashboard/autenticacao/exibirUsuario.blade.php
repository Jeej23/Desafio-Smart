<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
    <link rel="stylesheet" href="{{ asset('css/exibir.css') }}">
</head>
<body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Email</th>
                    <th>CNPJ</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?=request?></td>
                    <td>Maria</td>
                    <td>maria.silva@example.com</td>
                    <td>12.345.678/0001-99</td>
                    <td>admin</td>
                </tr>
                <tr>
                    <td>João Souza</td>
                    <td>João</td>
                    <td>joao.souza@example.com</td>
                    <td>98.765.432/0001-10</td>
                    <td>user</td>
                </tr>
                <tr>
                    <td>Ana Garcia</td>
                    <td>Ana</td>
                    <td>ana.garcia@example.com</td>
                    <td>23.456.789/0001-00</td>
                    <td>admin</td>
                </tr>
                <tr>
                    <td>Carlos Mendez</td>
                    <td>Carlos</td>
                    <td>carlos.mendez@example.com</td>
                    <td>34.567.890/0001-11</td>
                    <td>user</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
