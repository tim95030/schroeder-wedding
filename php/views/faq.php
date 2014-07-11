<?php echo $header; ?>

<script type="text/javascript" src="js/libs/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php
$faqs = array(
  "guests" => array(
    "question" => "Can I bring guests?",
    "answer" => "Unfortunately we will be unable to accomadate any extra guests. We have done our best to allow for guests where we could. Please check your RSVP for the number of seats we have been able to reserve for you. If you have any further questions you can call or email us."
    ),
  "kids" => array(
    "question" => "Can I bring my kids?",
    "answer" => "We are very limited on space and have chosen to include more of our close friends and family rather than children on our guest list. Please make other arrangements for your children."
    ),
  "reception" => array(
    "question" => "Where is the reception/ceremony?",
    "answer" => "The ceremony will take place at the African Savanna exhibit at the San Francisco Zoo. Following that, there will be a cocktail hour on the Lemur Boardwalk, with an opportunity to meet-and-greet some of the residents of the San Francisco Zoo. We will then migrate to the Lemur Lounge for a dinner reception."
    ),
  "transport" => array(
    "question" => "How do I get there?",
    "answer" => "The San Francisco Zoo is at 1 Zoo Road, San Francisco, CA. Click <a href=\"http://www.sfzoo.org/visit/directions.htm\">here for directions</a>"
    ),
  "parking" => array(
    "question" => "Where do I park?",
    "answer" => "The main zoo parking lot has two entrances, one off of the Great Highway for people driving from the East Bay and South Bay, and one off of Sloat Boulevard at 47th Avenue for those driving from the North Bay. There is only one exit from the parking lot - putting everyone northbound on the Great Highway. Parking at the zoo is free for our wedding guests."
    ),
  "time" => array(
    "question" => "What time do things happen?",
    "answer" => "The ceremony will start 5:30pm and the reception will continue until 11pm. The zoo will also be open during the day from 10am until 4pm. Guests will be asked to vacate the main zoo at 4pm so that a security check can be performed, ensuring the safety of the animals and our guests. During this time, the gift shop and front entrance area will be available for guests to congregate and socialize. Once the security sweep is finished guests will be escorted to the ceremony site. (For a schedule of keeper talks and zoo events please visit <a href=\"http://www.sfzoo.org/explore/today-at-the-zoo.htm\">www.sfzoo.org</a>)"
    ),
  "ontime" => array(
    "question" => "Do I have to be there on time?",
    "answer" => "The short answer is yes. In order to preserve the flow of the ceremony, we ask that guests arrive on time and stay seated with all electronics turned off for the duration of the short ceremony. If you feel this may not be possible please contact us so we can work something out."
    ),
  "outside" => array(
    "question" => "Will it take place outside or inside?",
    "answer" => "The ceremony and the cocktail hour will be outside. However, the reception will be indoors."
    ),
  "weather" => array(
    "question" => "What will the weather be like?",
    "answer" => "It should be quite comfortable but as always in San Francisco, bring layers. Historically the weather in September at the zoo is about 70F with a low of 55F. We will update this with a more accurate estimate when the date is closer."
    ),
  "dresscode" => array(
    "question" => "What is the dress code?",
    "answer" => "While our wedding is taking place at a zoo we expect you dress up as we won't be holding back."
    ),
  "rsvp" => array(
    "question" => "Do I really have to RSVP?",
    "answer" => "Will we let you in if you don't RSVP? Maybe. But, really it's a few seconds of your life. You can use the form on the <a href=\"/RSVP\">RSVP page</a> and be all done in just moments. We really appreciate your speedy response and efforts in helping us to make this event as easy as possible."
    ),
  "rsvp-deadline" => array(
    "question" => "When is the RSVP deadline?",
    "answer" => "Please take every effort to RSVP by August 1st so we can make appropriate plans. If you have trouble committing or need extra time please let us know as soon as possible so we can help out."
    ),
  "rsvp-late" => array(
    "question" => "What if I don't RSVP on time?",
    "answer" => "We leave the gambling to you, but don't risk losing your seat for this awesome event!"
    ),
  // "lodging" => array(
  //   "question" => "Where can I stay before and after the wedding?",
  //   "answer" => ""
  //   ),
  "food" => array(
    "question" => "Will food be served?",
    "answer" => "What kind of foodies would we be if we didn't have food at our wedding? There will be lots of good food. Starting with hors d'oeuvres and drinks during the cocktail hour, and then a dinner buffet, and finally wedding cake of course."
    ),
  // "food-type" => array(
  //   "question" => "What kind of food will there be?",
  //   "answer" => ""
  //   ),
  "dietary" => array(
    "question" => "I have dietary restrictions...now what?",
    "answer" => "Please contact us with any dietary restrictions and we will see what we can do."
    ),
  "dancing" => array(
    "question" => "Will there be dancing?",
    "answer" => "Of course there will be dancing."
    ),
  "not-dancing" => array(
    "question" => "What if I hate dancing?",
    "answer" => "TOO BAD, you're dancing! Just kidding! We've arranged for several fun games to be available off the dance floor so you can still have fun and socialize"
    ),
  "pictures" => array(
    "question" => "Can I take pictures?",
    "answer" => "During the ceremony, we will have two photographers and a videographer capturing the magic, and would prefer that our guests sit back and enjoy, secure in the knowledge that each moment will be immortalized. The professional pictures will be made available to all guests shortly after the wedding, so not to fret! After the ceremony, please get snap happy! We have created an account for sharing photos with WedPics so we can see the celebration from every angle! Just download the app, and login using Wedding ID: TimAndGenni  <br/>The app is called WedPics and you can download it from iTunes or from the Google Play store:<br/> <a href=\"https://play.google.com/store/apps/details?id=com.dejami.WedPics&hl=en\">Android</a><br/><a href=\"https://itunes.apple.com/app/wedpics-wedding-photo-app/id549402355?mt=8\">iOS</a><br/><br/>You can also upload pictures after the wedding by using their website: <a href=\"https://wedpics.com\">https://wedpics.com</a> and entering TimAndGenni as the Wedding ID."
    ),
  "questions" => array(
    "question" => "I have more questions how can I get answers?",
    "answer" => "Please contact us at schroederbride@gmail.com with any further questions. Or give us a call at (408) 384-8467"
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