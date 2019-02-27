<p>
    This page calls the user helper's requireAuth() method. It should bounce
    you to the login page, and back here once you're signed in.
</p>
<?php
$package->noCache();
$this->helper('users')->requireAuth($package);
 ?>
