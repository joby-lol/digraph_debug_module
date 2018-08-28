<?php
$this->cms()->helper('notifications')->confirmation('This page intentionally throws a dummy exception to test error handling and logging.');
if ($this->cms()->modules()->provided('logging')) {
    $this->cms()->helper('notifications')->confirmation('You appear to have a logging module installed. It should capture and log the error being thrown.');
} else {
    $this->cms()->helper('notifications')->warning('You don\'t appear to have a logging module installed.');
}
throw new \Exception("Intentionally generated error with randomized message: ".rand());
