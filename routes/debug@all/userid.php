<p>Use this form to manually set your user id</p>
<?php
$form = new Formward\Form('UserID');

$form['userid'] = new Formward\Fields\Input('UserID');
$form['userid']->default($package->cms()->helper('users')->userID());

echo $form;

if ($form->handle()) {
    $package->cms()->helper('users')->userID($form['userid']->value());
}
