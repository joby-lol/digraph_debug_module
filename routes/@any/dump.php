<?php
use Digraph\DataObject\FieldMutator\FieldMutatorArrayInterface;

$object = $this->object();

?>
<table>
<?php
foreach ($object::map() as $key => $map) {
    if ($key == 'do_log') {
        continue;
    }
    $value = $object->get($key);
    if ($value instanceof FieldMutatorArrayInterface) {
        $value = print_r($value->toArray(), true);
    }
    if (!is_string($value)) {
        $value = serialize($value);
    } else {
        $value = htmlspecialchars($value);
    }
    if ($map['masked']) {
        $key = "<span style='color:#900;'>$key</span>";
        $value = "<span style='color:#900;'>$value</span>";
    }
    $value = "<pre>$value</pre>";
    echo "<tr>";
    echo "<td valign='top' align='right'><pre><strong>$key</strong></pre></td>";
    echo "<td valign='top'>$value</td>";
    echo "</tr>";
}
?>
</table>
<?php

if ($objs = $this->cms()->edges()->parents($object)) {
    echo "<h2>Parents</h2><ul>";
    foreach ($objs as $o) {
        echo '<li>'.$o->link().'</li>';
    }
    echo "</ul>";
}

if ($objs = $this->cms()->edges()->children($object)) {
    echo "<h2>Children</h2><ul>";
    foreach ($objs as $o) {
        echo '<li>'.$o->link().'</li>';
    }
    echo "</ul>";
}

if ($object->get('do_log') && $object->get('do_log')['log']) {
    echo "<h2>Log</h2><pre>";
    foreach ($object->get('do_log')['log'] as $item) {
        echo date('c', $item['t']).":".PHP_EOL;
        echo "  ".$item['m'].PHP_EOL;
        echo "  ".implode(PHP_EOL.'  ', $item['u']->toArray()).PHP_EOL;
        echo PHP_EOL;
    }
    echo "</pre>";
}
