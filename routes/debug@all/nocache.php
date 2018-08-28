<p>
    This page should get a cache ttl of 30 seconds, and have output caching
    disabled. The number below should change on every page view.
</p>
<?php
//set up output
$this->field('page_title', 'non-cacheable output test');
$this->response()->set('cacheable', false);
$this->response()->set('ttl', 30);
echo "<p>Random number: ".rand()."</p>";
//check that output caching is available
if (!$this->cms()->modules()->provided('outputcache')) {
    $this->cms()->helper('notifications')->warning('The feature <strong>outputcache</strong> is not provided by any modules. This page probably isn\'t actually testing anything meaningful.');
}
 ?>
