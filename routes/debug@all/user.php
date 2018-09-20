<?php
if (!($user = $this->helper('users')->user())) {
    echo "<p>You aren't signed in</p>";
    return;
}
?>
<p>This page dumps info about the user object your current account gets built for it through the users helper.</p>
<ul>
    <li>identifier(): <?php echo $user->identifier(); ?></li>
    <li>name(): <?php echo $user->name(); ?></li>
    <li>email(): <?php echo $user->email(); ?></li>
</ul>
<?php
var_dump($this->helper('users')->user());
