<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Таблица Умножения</title>
    </head>
    <body>
        <table>
            <caption>Таблица Умножения</caption>
            <pre>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo "<td>" . $i * $j . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </pre>
        </table>
    </body>
</html>
