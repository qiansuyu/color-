<?php
Session_Start();
unset($_SESSION);

print "<!doctype html>\n";
print "<html>\n";
print "<head>\n";
print "\t<title>Session Lab</title>\n";
print "</head>\n";
print "<body>\n";
print "<h1>Session Lab</h1>";
print "<form action=\"sessconfirm.php\",\"continue.php\" method=\"POST\">";
print "Choose a color:<select name='color'>";
print "<option value='Red'>Red</option>";
print "<option value='Green'>Green</option>";
print "<option value='Blue'>Blue</option>";
print "</select>";
print "<input type='submit' name='submit' >";
print "</form>";
print "</body>";
print "</html>";