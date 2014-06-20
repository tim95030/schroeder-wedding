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
?>
<h1>FAQs</h1>


  <div class="col-xs-3" id="scrollSpy">
    <ul id="faqNav" class="nav">


<?php
foreach ($faqs as $tag => $faq) { ?>
      <li><a href="#<?php echo $tag; ?>"><?php echo $faq['question']; ?></a></li>
<?php
}
?>
    </ul>
  </div>
  <div class="col-xs-9">
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
    $(document).ready(function() {
      $("body").attr("data-spy","scroll");
      $("body").attr("data-target", "#scrollSpy");
      $("#faqNav").affix({
        offset: {
          top: 50, 
          bottom: function () {
            return (this.bottom = $('.footer').outerHeight(true))
          }
        }
      });
    });
  </script>

<?php echo $footer; ?>