<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат - Обробка рядків</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="task-container">
        <h2>Результати з'єднання рядків</h2>
        
        <div class="results">
            <?php
            // Перевіряємо, чи надійшли дані від нашої форми
            if (isset($_POST['e']) && isset($_POST['f'])) {
                
                // Отримуємо дані та вказуємо, що це саме рядки (String)
                $e = (string)$_POST['e'];
                $f = (string)$_POST['f'];

                // а) Вивести першу, потім другу
                echo "<h3>а) Перша, потім друга:</h3>";
                // З'єднуємо рядки за допомогою крапки (.)
                echo "<p>Результат: <strong>" . $e . " " . $f . "</strong></p>";

                // б) Вивести другу, потім першу
                echo "<h3>б) Друга, потім перша:</h3>";
                echo "<p>Результат: <strong>" . $f . " " . $e . "</strong></p>";
                
            } else {
                echo "<p>Дані не були передані. Будь ласка, заповніть форму.</p>";
            }
            ?>
        </div>
        
        <br>
        <a href="task4.html" class="back-link">Повернутися до форми</a>
    </div>

</body>
</html>