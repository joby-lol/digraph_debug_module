<?php
$actions = $this->helper('actions');
$actions->add('current', 'test', $this->url(), 'action link back to this page');
var_dump($actions);
