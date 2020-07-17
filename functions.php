<?php
function meu_widget() {

  register_sidebar( array(
  'name' => 'Após cabeçalho',
  'id' => 'apos_header',
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'description' => 'Área depois do cabeçalho, usada normalmente para alertas',
  ) );
 
 }
 add_action( 'widgets_init', 'meu_widget' );