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

foreach ($verbs as $verb) {
    echo "<li>".$this->helper('urls')->parse('debug/'.$verb)->html()."</li>";
}
