<?php
echo "<ul>";
sitemap($this->cms()->read('home'), $this->cms());
echo "</ul>";

function sitemap($obj, &$cms, $max=5, $depth=1)
{
    global $cms;
    if ($obj) {
        echo "<li>".$obj->link();
        if ($depth < $max && $children = $cms->edges()->children($obj)) {
            echo "<ul>";
            foreach ($children as $obj) {
                sitemap($obj, $cms, $max, $depth+1);
            }
            echo "</ul>";
        }
        echo "</li>";
    }
}
