<p>
    This page should get a cache ttl of 30 seconds, and have output caching
    enabled. The number below should only change every 30 seconds.
</p>
<?php
//set up output
$this->field('page_title', 'cacheable output test');
$this->response()->set('cacheable', true);
$this->response()->set('ttl', 30);
echo "<p>Random number: ".rand()."</p>";
//check that output caching is available
if (!$this->cms()->modules()->provided('outputcache')) {
    $this->cms()->helper('notifications')->warning('The feature <strong>outputcache</strong> is not provided by any modules. This page probably isn\'t actually testing anything meaningful.');
}
 ?>
