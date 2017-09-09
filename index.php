<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="project1.css">

<link rel="shortcut icon" href="favicon.png"/>

<title>DWA 15 Project 1</title>

</head>

<body>

<h1>Dylan Rumph</h1>

<img src="images/profile.png" alt="Profile Photo">

<h2>About Me</h2>

<p>I have been working as an RF engineer but would like to transition into the software
engineering space thus am taking this class and working towards a Masters degree.</p>

<h2> Words of Wisdom </h2>

<h3>
<?php
$quotes = [
    0 => 'You miss 100% of the shots you don’t take. – Wayne Gretzky',
    1 => 'Winning isn’t everything, but wanting to win is. – Vince Lombardi',
    2 => 'We become what we think about. – Earl Nightingale',
    3 => 'There are no traffic jams along the extra mile. – Roger Staubach',
    4 => 'It is never too late to be what you might have been. – George Eliot',
    5 => 'I would rather die of passion than of boredom. – Vincent van Gogh',
    6 => 'Dreaming, after all, is a form of planning. – Gloria Steinem',
    7 => 'Either write something worth reading or do something worth writing. – Benjamin Franklin',
    8 => 'Education costs money.  But then so does ignorance. – Sir Claus Moser',
    9 => 'Nothing is impossible, the word itself says, “I’m possible!” – Audrey Hepburn'
];

echo $quotes[rand(0,9)];
 ?>
 </h3>

</body>
</html>
