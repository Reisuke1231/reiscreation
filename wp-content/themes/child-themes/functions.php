<?php
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'footer1',
    'id' => 'footer1'
  ));
  register_sidebar(array(
    'name' => 'footer2',
    'id' => 'footer2'
  ));
  register_sidebar(array(
    'name' => 'footer3',
    'id' => 'footer3'
  ));
}
?>
