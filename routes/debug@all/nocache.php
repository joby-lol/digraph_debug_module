<p>
    This page should get a cache ttl of 30 seconds, and have munger caching enabled.
    The number below should change on every refresh.
    Note that browser caching may still be enabled in some browsers.
    There's a sleep of one second applied, to ensure that caching happens if cacheable isn't working.
</p>
<?php
sleep(1);
//set up output
$package->set('response.cacheable', false);
$package->set('response.ttl', 30);
echo "<p>Random number: ".rand()."</p>";
