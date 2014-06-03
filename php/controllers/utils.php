<?php

function render_page($page, $title) {
  $header_params = array(
    "title" => $title,
    "page" => $_SERVER["REQUEST_URI"]
    );
  Flight::render('../layout/header', $header_params, 'header');
  Flight::render('../layout/footer', array(), 'footer');
  Flight::render($page, array());
}

?>