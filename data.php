<?php
$dir = "img"; // sostituisci con il percorso della tua cartella
$files = array();

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != ".." && $file != ".DS_Store" && $file != "bg.jpg") {
                $files[] = $file;
            }
        }
        closedir($dh);
    }
}

// Ordina gli elementi dell'array in base all'ultima lettera del nome del file
usort($files, function($a, $b) {
    $a_last_char = substr($a, -5, 1);
    $b_last_char = substr($b, -5, 1);
    if ($a_last_char == $b_last_char) {
        // Se l'ultima lettera è la stessa, ordina in base al numero prima della lettera
        $a_num = (int) substr($a, 0, -5);
        $b_num = (int) substr($b, 0, -5);
        return $a_num - $b_num;
    } else {
        return strcmp($a_last_char, $b_last_char);
    }
});

echo json_encode($files); // restituisce l'array come JSON
