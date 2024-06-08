<html>
<body bgcolor="lightblue">
<form method="post">
<fieldset>
            <legend>MY APP</legend>
            <div align="center">
            <img src="zu.jpg" height="300" width ="100%" alt="Zu Image">
            </div>
    Enter Outcome:
    <input type="text" name="outcome" /><br><br>
    <input type="submit" name="bse" value="GET MEANING">
    </fieldset>
</form>
<?php
if (isset($_POST['bse'])) 
{
    $outcome = strtoupper($_POST['outcome']);
    switch ($outcome) {
   case 'e':
   case 'E': echo("Exceed Expectation");
            break;
   case 'm':
   case 'M': echo("Met Expectation");
            break;
   case 'a':
   case 'A': echo("Approaching Expectation");
            break;
   case 'b':
   case 'B': echo("below Expectation");
            break;
   default:
    echo("Enter a valid Outcome");   
}
}
?>
</body>
</html>