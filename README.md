# popup-solution
A solution to open an external page while scrolling down until you hit a certain content container.
for more information on how to install the wpbeirut-popup, you can watch the video demo
<div align="center">
  <a target="_blank" href="https://www.youtube.com/watch?v=bao2C7ANmfI"><img src="https://img.youtube.com/vi/bao2C7ANmfI/0.jpg" width="100%" alt="Wordpress Beirut Popup Module"></a>
</div>
## objectives
1. allow to integrate a 3rd party component page (such mailchimp form, Google Form, video player, etc) in easy steps.
2. put a single line of code in the content to auto fire and display the 3rd party page as an overlay page.
3. using the best practice of latest fancybox 3 https://fancyapps.com/fancybox/3/


## note
The solution is not a plugin.
It was meant to be a seperate code from the wordpress workflow.
The code can be used on any other platform than wordpress.


## usage
you can clone or upload the wpbeirut-popup folder to the root of your CMS (Wordpress).
in case you need to use it for blog, or pages or category or any specific page render open the page that you need to use.
in our example is the single.php

at the end of the page after the footer add the following line.
`<?php require_once './wpbeirut-popup/popup-solution.php ?>`

to be able to trigger the event you can do the following:
in the WYSWYGET text editor on the desired text line put the following tag

`<span class="popup" data-page="1">&nbsp;</span>`

# more clarifications
the data page attribute indicate the name of the file to open, with the demo code there is a folder pages include 1.php.
the data-page=1 indicate to open the 1.php that is in the pages folder.
the demo contains an embed google form that will open while scrolling down the page.

in the pages folder, you can create as many embed code and name it sequencly like 2.php, 3.php , or name it in a good scence such career.php.
in case you replace 1 by a full name you need to put data-page="fullname" instead of 1.
do not put data-page="fullname.php", fullname or 1 are the correct way, no extension is required.

# how the code works
you can read the code in popup-solutions.php at the buttom between `<script></script>`

1. set a global variable firsttime to true.
2. get the target location selector.
3. get the current xy of the scroll.
4. compare if current offset of the selector is less or equal to y of the scroll.
5. if firsttime is true set it to false.
6. triger the popup with the location attribute of the page, default is 1.php in pages folder.

  
will provide a video on how to install and use on a later stage.