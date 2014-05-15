<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div id="fancy-top"></div>
    <div id="container" class="container">
      <div class="btn-group">
        <a href="/" class="btn btn-default <?php if ($page == "/") { echo "active"; } ?>" role="button">Home</a>
        <a href="/proposal-story" class="btn btn-default <?php if ($page == "/proposal-story") { echo "active"; } ?>" role="button">Proposal Story</a>
        <a href="http://www.myregistry.com/public/schroederwedding" target="_blank" class="btn btn-default" role="button">Registry</a>
        <a href="/RSVP" class="btn btn-default <?php if ($page == "/RSVP") { echo "active"; } ?>" role="button">RSVP</a>
      </div>