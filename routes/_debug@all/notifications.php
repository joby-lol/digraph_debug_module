<?php
$notifications = $this->cms()->helper('notifications');

$notifications->confirmation('test confirmation');
$notifications->notice('test notice');
$notifications->warning('test warning');
$notifications->error('test error');
