<p>Use this form to manually set your user id</p>
<?php
$package->cache_noStore();
$form = new Formward\Form('UserID');

$form['userid'] = new Formward\Fields\Input('UserID');
$form['userid']->default($package->cms()->helper('users')->id());

echo $form;

if ($form->handle()) {
    $package->cms()->helper('users')->id($form['userid']->value());
}
