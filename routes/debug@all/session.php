<?php
//session only started for sure if the helper is instantiated
$package->cms()->helper('session')->userID();
 ?>
<p>PHP session ID: <?php echo session_id(); ?></p>
<p>Approximate session size: <?php echo round(strlen(serialize($_SESSION))/1024); ?>KB</p>
<?php
//pull PHP's session into a Config so we can turn it into YAML
$session = new \Flatrr\Config\Config($_SESSION);
 ?>
<pre><?php echo $session->yaml(); ?></pre>
