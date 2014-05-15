<?php echo $header; ?>
<h1>RSVP</h1>

<iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="http://form.jotform.us/form/33035818429154" frameborder="0" style="width:100%; height:457px; border:none;" scrolling="no"></iframe>

<script type="text/javascript">
  window.handleIFrameMessage = function(e) {
    var args = e.data.split(":");
    var iframe = document.getElementById("JotFormIFrame");

    if (!iframe)
      return;

    switch (args[0]) {
      case "scrollIntoView":
        iframe.scrollIntoView();
        break;
      case "setHeight":
        iframe.style.height = args[1] + "px";
        break;
      }
  };

  if (window.addEventListener) {
    window.addEventListener("message", handleIFrameMessage, false);
  } else if (window.attachEvent) {
    window.attachEvent("onmessage", handleIFrameMessage);
  }
</script>

<?php echo $footer; ?>