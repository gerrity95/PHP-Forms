<?php



mysql_connect('database_host', 'user', 'password'); //Connect here to the server with our username and password 

mysql_select_db('database'); //this is where the name of our database goes

$result = mysql_query("select * from table"); //This is the table you are selecting from, i.e. employees, music etc.

$numrows = mysql_numrows($result);

print "<h1><u>MJJ Music</u></h1>";

print "<table id='table' border='1' cellpadding='5'>";
	print "<th>Name</th>"; //This is where you put in the headings for the tables, i.e. for employees the headings are Employee_ID, Name, Date of birth, email
	print "<th>GUI_Number</th>";
	print "<th>Handicap</th>";
	print "<th>Phone Number</th>"; //See previous comment, all lines since included
for($i = 0; $i < $numrows; $i++)
{
	$row = mysql_fetch_row($result);
	
	print "<tr>"; 
	
	
	foreach($row as $cell)
	{
		print "<td>";
		print $cell;
		print "</td>";
	}
	
	print "</tr>";
}

print "</table>";

mysql_close();

?>