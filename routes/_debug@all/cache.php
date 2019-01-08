<p>
    This page should get a cache ttl of 30 seconds, and have munger caching
    enabled. The number below should only change every 30 seconds.
    There's a sleep of one second applied, to ensure that caching happens.
</p>
<?php
sleep(1);
//set up output
$package->set('response.cacheable', true);
$package->set('response.ttl', 30);
echo "<p>Random number: ".rand()."</p>";
