<p>
    This page calls the user helper's redirectToLogin() method. It should bounce
    you to the login page, and back here once you're signed in.
</p>
<?php
if ($this->helper('users')->isAuthenticated()) {
    return;
}
$this->package()->response()->set('cacheable', false);
$this->helper('users')->redirectToLogin();
 ?>
