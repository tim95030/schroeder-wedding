<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div id="container" class="text-center col-md-10 col-md-offset-1">
          <div id="fancy-top"></div>
            <div class="btn-group">
              <a href="/" class="btn btn-default <?php if ($page == "/") { echo "active"; } ?>" role="button">Home</a>
              <a href="/proposal-story" class="btn btn-default <?php if ($page == "/proposal-story") { echo "active"; } ?>" role="button">Proposal Story</a>
              <a href="http://www.myregistry.com/public/schroederwedding" target="_blank" class="btn btn-default" role="button">Registry</a>
              <a href="/recipes" class="btn btn-default <?php if ($page == "/recipes") { echo "active"; } ?>" role="button">Recipes</a>
              <a href="/RSVP" class="btn btn-default <?php if ($page == "/RSVP") { echo "active"; } ?>" role="button">RSVP</a>
            </div>