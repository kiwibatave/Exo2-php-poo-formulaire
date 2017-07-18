
<?php

require 'form.php';
require 'html.php';

$form = new Form ($_POST);

echo $form->startform();
echo $form->input();
echo $form->select();
echo $form->submit();
echo $form->textarea();
echo $form->radio();
echo $form->checkbox();
echo $form->endform();

$test = new Html;

echo $test->meta();
echo $test->css();
echo $test->img();
echo $test->link();


?>
