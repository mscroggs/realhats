<html>
<head>
<title>realhats</title>
<style type='text/css'>
body {background-color:#050607;font-family:monospace;text-align:center;margin-bottom:150px}
.head {color:#CC00FF;font-size:50pt}
.head u {text-decoration:none;color:#FF00CC}
.links {font-size:50px;color:#00CCFF}
.links-smaller {margin-top:45px;font-size:20pt;color:#00CCFF}
.linkimg {height:42px;vertical-align:middle;margin-right:4pt}
a,a:active,a:visited,a:link {color:#FFFFFF}
a:hover {color:#CCFF00}
.us {position:fixed;bottom:5px;color:#FFCC00;font-size:5.0mm;width:100%;}
img.realhat {width:60px;position:relative;margin-right:-60px}
</style>
</head>
<body>
<div class='head'>\usepackage{<u>realhats</u><?php
$hats = Array(
    "<img class='realhat' style='left:-40px;top:-15px' src='realhats-beret.png'>",
    "<img class='realhat' style='left:-50px;top:-25px' src='realhats-cowboy.png'>",
    "<img class='realhat' style='left:-48px;top:-25px' src='realhats-fez.png'>",
    "<img class='realhat' style='left:-44px;top:-15px' src='realhats-makelatexgreatagain.png'>",
    "<img class='realhat' style='left:-42px;top:-25px' src='realhats-santa.png'>",
    "<img class='realhat' style='left:-40px;top:-15px' src='realhats-scottish.png'>",
    "<img class='realhat' style='left:-51px;top:-20px' src='realhats-sombrero.png'>",
    "<img class='realhat' style='left:-55px;top:-12px' src='realhats-tophat.png'>",
    "<img class='realhat' style='left:-52px;top:-30px' src='realhats-witch.png'>"
    "<img class='realhat' style='left:-52px;top:-30px' src='realhats-crown.png'>"
);
echo($hats[array_rand($hats)]);
?>}</div>
<div class='links'>
<a href='https://github.com/mscroggs/realhats'>GitHub</a>
~
<a href='https://ctan.org/pkg/realhats'>CTAN</a>
</div>
<div class='links-smaller'>Read about realhats
<br />
<a href='https://aperiodical.com/2019/03/realhats-writing-a-latex-package/'><img src='aperiodical.png' class='linkimg'>The Aperiodical</a>
<br />
<a href='https://mscroggs.co.uk/blog/63'><img src='mscroggs.png' class='linkimg'>mscroggs.co.uk</a>
</div>
<div class='us'>
\author{Matthew Scroggs (\url{<a href='http://www.mscroggs.co.uk'>mscroggs.co.uk</a>}, \twitter{<a href='https://twitter.com/mscroggs'>@mscroggs</a>})}
<br />\and<br />
\author{Adam Townsend (\url{<a href='http://www.adamtownsend.com'>adamtownsend.com</a>}, \twitter{<a href='https://twitter.com/pecnut'>@pecnut</a>})}
</div>
</body>
</html>
