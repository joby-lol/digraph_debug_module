<p>
    This page calls the user helper's requireAuth() method. It should bounce
    you to the login page, and back here once you're signed in.
</p>
<?php
$package->cache_noStore();
$this->helper('users')->requireAuth($package);
