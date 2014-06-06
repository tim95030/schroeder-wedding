<?php

require 'flight/Flight.php';
require 'controllers/utils.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=php', 'adminB5wvs3P', 'ivcHw2Xg3fCP'));

Flight::route('/', function() {
  render_page("home", "Gennifer Williams' and Tim Schroeder's Wedding Page");
});

Flight::route('/proposal-story', function() {
  render_page("proposal-story", "The Proposal Story");
});

Flight::route('/RSVP', function() {
  render_page("rsvp", "RSVP to the Wedding of Gennifer Williams and Tim Schroeder");
});

include_once 'controllers/recipes.php';
Flight::set('flight.log_errors', false);
Flight::start();

?>