<?php
function drawTable($cols, $rows, $color)
{
    echo "<table border='1'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            $style = '';
            if ($i == 1 || $j == 1) {
                $style = " style='font-weight: bold; text-align: center; background-color: $color;'";
            }
            echo "<td" . $style . ">" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function drawMenu($menu, $vertical = true)
{
    echo $vertical ? "<ul>" : "<ul style='display: flex;'>";
    foreach ($menu as $menuItem) {
        echo "<li><a href='{$menuItem['href']}'>{$menuItem['link']}</a></li>";
    }
    echo "</ul>";
}
?>