<?php
if (file_exists('log/' . PATH_LOG)) {
    $log = file('log/' . PATH_LOG);

    echo "<ol>";
    foreach ($log as $line) {
        list($dt, $page, $ref) = explode('|', $line);
        $dt = date('d-m-Y H:i:s', $dt);
        echo "<li>{$dt} - {$page} -> {$ref}</li>";
    }
    echo "</ol>";
} else {
    echo "Файл журнала не найден.";
}
?>