<!DOCTYPE html><html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>5 notatek</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="pk.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      heightStyle: "content",
      activate: function( event, ui ) {
        let tekst = $(ui.oldHeader[0]).next().children().val();
        tekst = encodeURIComponent(tekst);
        let nr_taba = ui.oldHeader[0].id.substring(3,4);
        let seter_url = "http://localhost/5notatek/set.php?id=" + nr_taba + "&czy_nazwa=0&txt=" + tekst;
        //console.log(seter_url);
        $( $(ui.oldHeader[0]).children() ).load( seter_url );
        $( $(ui.newHeader[0]).children() ).html("");
      }
    });
  } );
  </script>
</head>
<body>
 
<div id="accordion">
  <h3 id="bar1">Section 1 <span id="sp1">...</span></h3>
  <div>
    <textarea>Mauris mauris ante, blandit et, ...</textarea>
  </div>
  <h3 id="bar2">Section 2 <span id="sp2">...</span></h3>
  <div>
    <textarea>Sed non urna. Donec et ante.  </textarea>
  </div>
  <h3 id="bar3">Section 3 <span id="sp3">...</span></h3>
  <div>
    <textarea>Nam enim risus, molestie et, porta ac, aliquam ac, risus.  </textarea>
  </div>
  <h3 id="bar4">Section 4 <span id="sp4">...</span></h3>
  <div>
    <textarea>Cras dictum. Pellentesque habitant morbi tristique senectus et. </textarea>
  </div>
  <h3 id="bar5">Section 5 <span id="sp5">...</span></h3>
  <div>
    <textarea>Hmm ras dictum..  </textarea>
  </div>
</div>
 
 
 
 
</body></html>