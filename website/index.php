<html>
<head>
<title>realhats</title>
<style type='text/css'>
body {background-color:#050607;font-family:monospace;text-align:center}
.head {color:#FF00CC;font-size:30mm;padding-left:100px}
.links {font-size:30pt;color:#00CCFF}
a,a:active,a:visited,a:link {color:#FFFFFF}
a:hover {color:#CCFF00}
.us {position:fixed;bottom:5px;color:#FFCC00;font-size:30px;width:100%}
img.realhat {width:100px;position:relative}
</style>
</head>
<body>
<div class='head'>realhats<?php
$hats = Array(
    "<img class='realhat' style='left:-62px;top:-25px' src='realhats-beret.png'>",
    "<img class='realhat' style='left:-62px;top:-25px' src='realhats-scottish.png'>",
    "<img class='realhat' style='left:-78px;top:-50px' src='realhats-witch.png'>",
    "<img class='realhat' style='left:-65px;top:-45px' src='realhats-santa.png'>",
    "<img class='realhat' style='left:-80px;top:-40px' src='realhats-sombrero.png'>"
);
echo($hats[array_rand($hats)]);
?></div>
<div class='links'>
<a href='https://github.com/mscroggs/realhats'>GitHub</a>
~
<a href='https://ctan.org/pkg/realhats'>CTAN</a>
</div>
<div class='us'>
Craeted by
<a href='https://twitter.com/mscroggs'>Matthew Scroggs</a>
&
<a href='https://twitter.com/pecnut'>Adam Townsend</a>
</div>
</body>
</html>
