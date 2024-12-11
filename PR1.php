<?php
// Створення асоціативного масиву
$data = [
    "id" => 4,
    "name" => "Ганна Олексієнко",
    "email" => "ganna.aleksienko@example.com",
    "membership_date" => "2021-05-30",
    "books_borrowed" => 7,
    "active" => true
];

// Функція для виводу масиву у вигляді таблиці
function displayAsTable($array) {
    echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th>Key</th><th>Value</th>";
    echo "</tr>";

    foreach ($array as $key => $value) {
        echo "<tr>";
        echo "<td style='padding: 8px;'>" . htmlspecialchars($key) . "</td>";
        echo "<td style='padding: 8px;'>" . htmlspecialchars(is_bool($value) ? ($value ? 'Yes' : 'No') : $value) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Виклик функції для виводу масиву
displayAsTable($data);
?>
