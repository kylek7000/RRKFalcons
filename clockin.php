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
        <h3>Clock In/Out</h3>
        <p>Please Enter Which Job You Are Clocking In/Out Of</p>
        <form action="sumbitdata.php" method="post">
            <label for="job">Job:</label>
            <input id="job" type="text" name="job" value="" />
            <br>
            <br><br><input type="submit" class="submit_button" value="Submit" />
        </form>
    </div>
  </body>
</html>
