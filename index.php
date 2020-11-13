<!DOCTYPE html>
<html lang = "en">
  <head>
    <title>SourceAmerica Design Challenge</title>
    <link href="main.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h1>Time Clock</h1>
    </div>
    <div id="wrap">
        <h3>Sign In/Sign Out Form</h3>
        <p>Please enter your email and password for verification</p>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input id="email" type="text" name="email" value="" />
            <label for="password">Password:</label>
            <input type="password" id="password" type="text" name="password" value="" />
            <br><br><input type="submit" class="submit_button" value="Submit" />
        </form>
    </div>
  </body>
</html>
