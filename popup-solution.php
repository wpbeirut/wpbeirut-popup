<?php
// Code writen from Wordpress Beirut Community with Love.
// the include scripts should always be the same
// to better use the code read the github documentation 
// https://github.com/wpbeirut/popup-solution
?>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
<script type="text/javascript" src="<?= site_url() ?>/wpbeirut-popup/assets/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="<?= site_url() ?>/wpbeirut-popup/assets/jquery.fancybox.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?= site_url() ?>/wpbeirut-popup/assets/custom.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?= site_url() ?>/wpbeirut-popup/assets/custom.js"></script>
<style>
    html, body {
        height:auto!important;
    }
</style>
<script>
// set a global variable firsttime to true.
var firsttime = true;

$(function() {
    $(window).scroll(function() {
      // get the target location selector.
        var popup = $("span.popup");
        // get the current xy of the scroll.
        var offs = getScrollXY();
        // compare if current offset of the selector is less or equal to y of the scroll.
        if(popup.offset().top <= offs[1]){
          // if firsttime is true set it to false.
          if(firsttime) {
            firsttime = false;
            // triger the popup with the location attribute of the page, default is 1.php in pages folder.
            open_popup('<?= site_url() ?>/wpbeirut-popup/pages/'+popup.attr('data-page')+'.php');
          }
        }
        
    });
});
  
</script>