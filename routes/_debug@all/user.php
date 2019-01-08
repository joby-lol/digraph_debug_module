<?php
if (!($user = $this->helper('users')->user())) {
    echo "<p>You aren't signed in</p>";
    return;
}
?>
<p>This page dumps info about the user object your current account gets built for it through the users helper.</p>
<ul>
    <li>identifier(): <?php echo $user->identifier(); ?></li>
    <li>id(): <?php echo $user->id(); ?></li>
    <li>name(): <?php echo $user->name(); ?></li>
    <li>email(): <?php echo $user->email(); ?></li>
    <li>users->groups(): <?php echo implode(', ', $this->helper('users')->groups()); ?></li>
</ul>

<h2>var_dump() of object</h2>
<?php
var_dump($this->helper('users')->user());
