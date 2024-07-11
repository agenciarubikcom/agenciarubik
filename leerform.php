<?php
// Leer el contenido del archivo JSON
$json_data = file_get_contents('form_data.json');

// Decodificar los datos JSON en un array asociativo
$form_entries = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas del Formulario</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Entradas del Formulario</h1>
    <?php if (!empty($form_entries)): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Comentario</th>
                    <th>Fecha y Hora</th>
                    <th>Página</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($form_entries as $entry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entry['name']); ?></td>
                        <td><?php echo htmlspecialchars($entry['email']); ?></td>
                        <td><?php echo htmlspecialchars($entry['subject']); ?></td>
                        <td><?php echo htmlspecialchars($entry['comment']); ?></td>
                        <td><?php echo htmlspecialchars($entry['datetime']); ?></td>
                        <td><?php echo htmlspecialchars($entry['page']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay entradas para mostrar.</p>
    <?php endif; ?>
</body>
</html>