<?php echo $header; ?>

<script type="text/javascript" src="js/libs/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php
$faqs = array(
  "guests" => array(
    "question" => "Can I bring guests?",
    "answer" => ""
    ),
  "kids" => array(
    "question" => "Can I bring my kids?",
    "answer" => ""
    ),
  "reception" => array(
    "question" => "Where is the reception/ceremony?",
    "answer" => ""
    ),
  "transport" => array(
    "question" => "How do I get there?",
    "answer" => ""
    ),
  "parking" => array(
    "question" => "Where do I park?",
    "answer" => ""
    ),
  "time" => array(
    "question" => "What time do things happen?",
    "answer" => ""
    ),
  "ontime" => array(
    "question" => "Do I have to be there on time?",
    "answer" => ""
    ),
  "outside" => array(
    "question" => "Will it take place outside or inside?",
    "answer" => ""
    ),
  "weather" => array(
    "question" => "What will the weather be like?",
    "answer" => ""
    ),
  "dresscode" => array(
    "question" => "What is the dress code?",
    "answer" => ""
    ),
  "rsvp" => array(
    "question" => "Do I really have to RSVP?",
    "answer" => ""
    ),
  "rsvp-deadline" => array(
    "question" => "When is the RSVP deadline?",
    "answer" => ""
    ),
  "rsvp-late" => array(
    "question" => "What if I don't RSVP on time?",
    "answer" => ""
    ),
  "lodging" => array(
    "question" => "Where can I stay before and after the wedding?",
    "answer" => ""
    ),
  "food" => array(
    "question" => "Will food be served?",
    "answer" => ""
    ),
  "food-type" => array(
    "question" => "What kind of food will there be?",
    "answer" => ""
    ),
  "dietary" => array(
    "question" => "What if I have a dietary restriction?",
    "answer" => ""
    ),
  "dancing" => array(
    "question" => "Will there be dancing?",
    "answer" => ""
    ),
  "not-dancing" => array(
    "question" => "What other activities will there be?",
    "answer" => ""
    ),
  "pictures" => array(
    "question" => "Can I take pictures?",
    "answer" => ""
    ),
  "questions" => array(
    "question" => "I have more questions how can I get answers?",
    "answer" => ""
    ),
);

$faqs_left = array_slice($faqs, 0, count($faqs) / 2);
$faqs_right = array_slice($faqs, count($faqs) / 2);

?>
<h1>FAQs</h1>


  <div class="col-sm-4 col-sm-offset-1 hidden-xs text-left">
    <ul id="faqNavLeft">
    <?php
    foreach ($faqs_left as $tag => $faq) { ?>
      <li><a href="#<?php echo $tag; ?>"><?php echo $faq['question']; ?></a></li>
    <?php
    }
    ?>
    </ul>
  </div>

  <div class="col-sm-4 col-sm-offset-2 hidden-xs text-left clearfix">
    <ul id="faqNavRight">
    <?php
    foreach ($faqs_left as $tag => $faq) { ?>
      <li><a href="#<?php echo $tag; ?>"><?php echo $faq['question']; ?></a></li>
    <?php
    }
    ?>
    </ul>
  </div>

  <div class="col-xs-12 visible-xs clearfix">
    <ul id="faqNavXS">
    <?php
    foreach ($faqs as $tag => $faq) { ?>
      <li><a href="#<?php echo $tag; ?>"><?php echo $faq['question']; ?></a></li>
    <?php
    }
    ?>
    </ul>
  </div>

  <hr>
  <div class="col-xs-12 col-md-8 col-md-offset-2">
<?php 
  foreach ($faqs as $tag => $faq) { ?>
    <h2 id="<?php echo $tag; ?>"><?php echo $faq['question']; ?></h2>
    <p><?php echo $faq['answer']; ?></p>
    <hr>
<?php
  }
?>

  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $('a[href^="#"]').on('click', function(event) {
          var target = $(this.href);
          if( target.length ) {
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 1000);
          }
      });
    });
  </script>

<?php echo $footer; ?>