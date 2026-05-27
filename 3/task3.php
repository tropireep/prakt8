<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат - Метод POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="task-container">
        <h2>Результати обчислень (POST)</h2>
        
        <div class="results">
            <?php
            // Перевіряємо, чи надійшли дані методом POST
            if (isset($_POST['c']) && isset($_POST['d'])) {
                
                // Перетворюємо отримані дані у цілі числа (Integer)
                $c = (int)$_POST['c'];
                $d = (int)$_POST['d'];

                // Робимо обчислення
                $sum = $c + $d;
                $diff = $c - $d;
                $prod = $c * $d;
                
                // Перевірка на ділення на нуль
                if ($d != 0) {
                    $quot = $c / $d;
                } else {
                    $quot = "Помилка (ділення на нуль)";
                }

                // Виводимо все на екран
                echo "<p><strong>Сума (\$c + \$d):</strong> " . $sum . "</p>";
                echo "<p><strong>Різниця (\$c - \$d):</strong> " . $diff . "</p>";
                echo "<p><strong>Добуток (\$c * \$d):</strong> " . $prod . "</p>";
                echo "<p><strong>Частка (\$c / \$d):</strong> " . $quot . "</p>";
            } else {
                echo "<p>Дані не були передані. Будь ласка, заповніть форму.</p>";
            }
            ?>
        </div>
        
        <br>
        <a href="task3.html" class="back-link">Повернутися до форми</a>
    </div>

</body>
</html>