<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com bando de dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
    <table>
        <colgroup>
            <col class="vermelho">
            <col class="azul">
        </colgroup>

        <tr>
            <th>CIDADES</th>
            <th>ESTADOS</th>
        </tr>

        <?php include("conn.php");

        $sql_tipo = "SELECT C.NOME AS CIDADE, E.NOME AS ESTADO FROM CIDADE C, ESTADO E WHERE C.CODIGO_ESTADO = E.CODIGO_ESTADO";
        
        $resulta = $conn->query($sql_tipo);

        if ($resulta -> num_rows > 0){
            while ($row = $resulta->fetch_assoc()){
                echo '<tr>';
                echo '<td>'. $row['CIDADE'] .'</td>';
                echo '<td>'. $row['ESTADO'] .'</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
    </div>
</body>
</html>