<?php
$this->cms()->helper('notifications')->confirmation('This page intentionally throws a dummy exception to test error handling and logging.');

throw new \Exception("Intentionally generated error with randomized message: ".rand());
