<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

<body>
 <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
 <div id="example">Example -1</div>

 <div id="content">
  <h1>Join the Missing Manual (Digital) Social Club</h1>
  <p>Please enter your online connections below:</p>
  <form action="scripts/getFormInfo.php" method="POST">
	<fieldset>
	<label for="first_name">First Name:</label>
	<input type="text" name="first_name" size="20" /><br />
	<label for="last_name">Last name:</label>
	<input type="text" name="last_name" size="20" /><br />
	<label for="email">E-Mail Address:</label>
	<input type="text" name="email" size="50" /><br />
	<label for="facebook_url">Facebook URL:</label>
	<input type="text" name="facebook_url" size="50" /><br />
	<label for="twitter_handle">Twitter Handle:</label>
	<input type ="text" name="twitter_handle" size="20" /><br />
	</fieldset>
	<br />

	<fieldset class="center">
	 <input type="submit" value="Join the Club" />
	 <input type="reset" value="Clear and Restart" />
	</fieldset>
  </form>
</body>
</html>