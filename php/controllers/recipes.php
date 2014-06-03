<?php

require_once 'utils.php';

Flight::route('/recipes', function() {
  render_page("recipes", "Tim and Genni's Wedding Recipe Book");
});


?>