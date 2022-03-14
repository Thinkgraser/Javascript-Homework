
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
#container  {
			width: 800px;
			border: 1px solid black;
			padding: 10px;
			margin: 10px auto;
			}
.colorRed {
	color: #F00;	
}
form{
            background-color: lightgray;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid black;
        }
        legend{
            border-bottom: 2px dotted black;
            font-size: large;
        }
        form p{
            color: black;
        }
        input[type=submit]{
            border-radius: 50px;
            background-color: black;
            color: white;
            padding: 5px 20px;
        }
</style>
</head>

<body>
<header>
        <a href="KoalasFactSheet.pdf"><img src="images\koala_banner.jpg" alt="koala banner"/></a>
        <h1>Koala Bear National Information Center</h1>
    </header>
        <nav>
    <ul>
        <li><a href="koala_home.html">Home</a></li>
        <li><a href="faq.html">About Koalas</a></li>
        <li><a href="save_koalas.html">Save Koalas</a></li>
        <li>Gallery</li>
        <li>Adopt</li>
        <li><a href="contact.html">Contact Us</a></li>
    </ul>
    </nav>

    <main>
        <form method="post" action="form_response_basic.php">
            <legend>Contact Us</legend>
            <p>Send us a message. We would love to hear from you!</p>
            <label for="fname">First name</label><br>
            <input type="text" id="fname" name="fname" placeholder="John"><br>
            <label for="lname">Last name</label><br>
            <input type="text" id="lname" name="lname" placeholder="Doe"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="cars">Topic</label><br>
            <select id="topic" name="topic">
              <option value="donate">How To Donate</option>
              <option value="volunteer">How To Volunteer</option>
              <option value="info">More Info On Koalas</option>
              <option value="other">Other</option>
            </select><br>
            <label for="message">Message</label><br>
            <textarea id="message" name="message" rows="5" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&hearts; &reg; &copy; Copyright 2018 All rights reserved. Australian Koala Foundation</p>
        <img src = "images\koala_logo.svg" alt="koala logo" width="150" height="150"/>
       </footer>

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</body>
</html>
