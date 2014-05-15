<?php

require 'flight/Flight.php';

function render_page($page, $title) {
  $header_params = array(
    "title" => $title,
    "page" => $_SERVER["REQUEST_URI"]
    );
  Flight::render('layout/header', $header_params, 'header');
  Flight::render('layout/footer', array(), 'footer');
  Flight::render($page, array());
}

Flight::route('/', function() {
  render_page("home", "Gennifer Williams' and Tim Schroeder's Wedding Page");
});

Flight::route('/proposal-story', function() {
  render_page("proposal-story", "The Proposal Story");
});

Flight::route('/RSVP', function() {
  render_page("rsvp", "RSVP to the Wedding of Gennifer Williams and Tim Schroeder");
});

Flight::start();

?>