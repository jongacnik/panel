<?php 

return function($page) {

  $form = new Kirby\Panel\Form(array(
    'entry' => array(
      'label' => 'fields.structure.delete.label',
      'type'  => 'info',
    )
  ));

  $form->style('delete');
  $form->cancel($page, 'show');

  return $form;

};