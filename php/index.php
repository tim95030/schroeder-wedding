<?php

require 'flight/Flight.php';
require 'controllers/utils.php';

Flight::set('flight.log_errors', false);

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_BASE','wedding');
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 

$dsn = 'mysql:dbname='.DB_BASE.';host='.DB_HOST.';port='.DB_PORT;

Flight::register('db', 'PDO', array($dsn, DB_USER, DB_PASS));

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
Flight::start();

?>