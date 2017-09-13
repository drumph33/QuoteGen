<?php require 'quoteGen.php'; ?>
<!DOCTYPE html>
<!--
Name: Dylan Rumph
Date: September 13, 2017
Course: CSCI E-15: Dynamic Web Applications
Project: Project 1 - Quote Generator
-->
<html>
    <head>
        <meta charset="utf-8" />
        <title>DWA 15 Project 1</title>
        <link rel="stylesheet" type="text/css" href="project1.css">
        <link rel="shortcut icon" href="favicon.png"/>
    </head>

    <body>

        <!-- Display name, picture, and description -->
        <h1>Dylan Rumph</h1>

        <img src="images/profile.png" alt="Profile Photo">

        <h2>About Me</h2>

        <p>I have been working as an RF engineer but would like to transition into the software
        engineering space thus am taking this class and working towards a Master's degree.</p>

        <!-- Display a random quotation -->
        <h2> Words of Wisdom </h2>

        <h3> <?php quoteGen();?> </h3>

    </body>
</html>
