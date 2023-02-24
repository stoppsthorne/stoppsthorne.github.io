# stoppsthorne.github.io

index.html is the index page for the GH pages.

feedParseExample.php is the php script for the RSS feed. It calls upon the rssstyle.css stylesheet.

pullcode.html is the file that I have been writing on my desktop, which is trying to load the feedParseExample.php into javascript and then output that in html.

---------------------------


I have had success on a local level within the pullcode.html, using:

  $(document).ready(function(){
    $('#phpcontent').load('feedParseExample.php');
   });

works fine -- when both the php and html files are stored on my desktop.

---------------------------

However, in the same file, when using:

  $(document).ready(function(){
    $('#phpcontent').load('https://stoppsthorne.github.io/feedParseExample.php');
  });

trying to call upon the php file when it is hosted on this github pages, it doesn't display the content correctly. Instead it only shows the php variable names, with some styling. It doesn't actually display the content within the variables.
