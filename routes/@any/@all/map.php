<?php
$this->field('page_title', ucfirst($this->class()::COMMON_NOUN.' database map'));
 ?>
<pre><?php print_r($this->class()::map()); ?></pre>
