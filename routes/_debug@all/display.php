<?php
$verbs = [];

foreach (glob(__DIR__.'/*.php') as $file) {
    $file = basename($file);
    $file = preg_replace('/\.php$/', '', $file);
    if ($file == 'display') {
        continue;
    }
    $verbs[] = $file;
}

echo "<ul>";
foreach ($verbs as $verb) {
    echo "<li>".$this->helper('urls')->parse('_debug/'.$verb)->html()."</li>";
}
echo "</ul>";
