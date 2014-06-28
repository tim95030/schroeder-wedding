<?php echo $header; ?>

<script type="text/javascript" src="js/libs/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php
$faqs = array(
  "guests" => array(
    "question" => "Can I bring guests?",
    "answer" => "Unfortunately we will be unable to accomadate any extra guests. We have done our best to allow for guests where we could. Please check your invite for your number. If you have any further questions you can call or email us."
    ),
  "kids" => array(
    "question" => "Can I bring my kids?",
    "answer" => "We are very limited on space and for the same reason not everyone was given a plus one we cannot accomadate kids."
    ),
  "reception" => array(
    "question" => "Where is the reception/ceremony?",
    "answer" => "The reception will be at the African Savanna exhibit at the San Francisco Zoo. Following that there will be a cocktail hour at the Lemur Boardwalk. Then there will have the dinner reception at the Lemur Lounge."
    ),
  "transport" => array(
    "question" => "How do I get there?",
    "answer" => "The San Francisco Zoo is at 1 Zoo Road, San Francisco, CA. Click <a href=\"http://www.sfzoo.org/visit/directions.htm\">here for directions</a>"
    ),
  "parking" => array(
    "question" => "Where do I park?",
    "answer" => "The main zoo parking lot has two entrances, one off of the Great Highway for people driving from the East Bay and South Bay, and one off of Sloat Boulevard at 47th Avenue for those driving from the North Bay. There is only one exit from the parking lot - putting everyone northbound on the Great Highway."
    ),
  "time" => array(
    "question" => "What time do things happen?",
    "answer" => "The ceremony will start 5pm and the reception will continue until 11pm."
    ),
  "ontime" => array(
    "question" => "Do I have to be there on time?",
    "answer" => ""
    ),
  "outside" => array(
    "question" => "Will it take place outside or inside?",
    "answer" => "The ceremony and the cocktail hour will be outside. However, the reception will be indoors."
    ),
  "weather" => array(
    "question" => "What will the weather be like?",
    "answer" => "Historically the weather in September at the zoo is about 70F with a low of 55F. We will update this with a more accurate estimate when the date is closer."
    ),
  "dresscode" => array(
    "question" => "What is the dress code?",
    "answer" => "While our wedding is taking place at a zoo we expect you dress up as we won't be holding back."
    ),
  "rsvp" => array(
    "question" => "Do I really have to RSVP?",
    "answer" => "Will we let you in if you don't RSVP? Maybe. But, really it's a few seconds of your life. You can use the form on the <a href=\"/RSVP\">RSVP page</a> and be all done in just moments. We really appreciate your efforts in helping us make this event as easy as possible."
    ),
  "rsvp-deadline" => array(
    "question" => "When is the RSVP deadline?",
    "answer" => "I suppose technically September 12th at 4:59pm, but it would help us out a whole lot if you could try to respond before August 1st so we can plan on your company."
    ),
  "rsvp-late" => array(
    "question" => "What if I don't RSVP on time?",
    "answer" => "Then we will disown you and never speak to you again. Or nothing. We leave the gambling to you."
    ),
  "lodging" => array(
    "question" => "Where can I stay before and after the wedding?",
    "answer" => ""
    ),
  "food" => array(
    "question" => "Will food be served?",
    "answer" => "It's a Wedding what kind of wedding doesn't have food? There will be lots of good food. Starting with hors d'oeuvres and drinks during the cocktail hour, and then a dinner buffet, and finally wedding cake of course."
    ),
  "food-type" => array(
    "question" => "What kind of food will there be?",
    "answer" => ""
    ),
  "dietary" => array(
    "question" => "What if I have a dietary restriction?",
    "answer" => "Please contact us with any dietary restrictions and we will see what we can do."
    ),
  "dancing" => array(
    "question" => "Will there be dancing?",
    "answer" => "Of course there will be dancing."
    ),
  "not-dancing" => array(
    "question" => "What other activities will there be?",
    "answer" => ""
    ),
  "pictures" => array(
    "question" => "Can I take pictures?",
    "answer" => "While we would like there to be no devices used during the ceremony we fully expect you take as many pictures as you can. We even setup a photo sharing account for the occasion. (TODO: ADD DETAILS)"
    ),
  "questions" => array(
    "question" => "I have more questions how can I get answers?",
    "answer" => "Please contact us at (TODO: fill out) with any further questions."
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

  <div class="col-sm-5 col-sm-offset-2 hidden-xs text-left clearfix">
    <ul id="faqNavRight">
    <?php
    foreach ($faqs_right as $tag => $faq) { ?>
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

  <a href="#" class="back-to-top">Back to Top</a>

  <script type="text/javascript">
    var offset = 220;
    var duration = 500;

    $('a[href^="#"]').on('click', function(event) {

      var target = $( $(this).attr('href') );
      if( target.length ) {
          event.preventDefault();
          $('html, body').animate({
              scrollTop: target.offset().top
          }, duration);
      }

    });
    $(window).scroll(function() {
          if ($(this).scrollTop() > offset) {
              $('.back-to-top').fadeIn(duration);
          } else {
              $('.back-to-top').fadeOut(duration);
          }
      });
    $('.back-to-top').click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, duration);
      return false;
    });
  </script>

<?php echo $footer; ?>