<p>This page tests the flash functionality of the Session class and notifications helper.<p>
<?php
$session = \Digraph\Users\Session::getInstance();

$last = $session->getFlash('test');
echo "<p>The last pageview's number was: $last</p>";

$next = rand();
$session->setFlash('test', $next);
echo "<p>This pageview's number is: $next</p>";

$notification = rand();
echo "<p>You should also see the number $notification in a notification on your next pageview anywhere on this site.</p>";
$this->cms()->helper('notifications')->flashNotice("Flash test: $notification");
