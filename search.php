<link rel="stylesheet" href="stylesheet.css">

<?php
   $db_host = '';
   $db_user = '';
   $db_pwd = '';

   $database = '';
   $table = '';
   $table_title = '';
   

   $data = $_POST['number'];
   
   


   if (!mysql_connect($db_host, $db_user, $db_pwd))
       die("Can't connect to database");

   if (!mysql_select_db($database))
       die("Can't select database");

   echo "<h1>Table: {$table_title}</h1>";
   echo '<table id="table" border="1">';
   	print "<th>Employee ID</th>";
	print "<th>Name</th>";
	print "<th>Date Of Birth</th>";
	print "<th>Email</th>";

   $result = mysql_query("SELECT * FROM {$table} WHERE attribute = ' ".$data." ' ");
   $num_fields = mysql_num_fields($result);

   // printing table rows
   while($row = mysql_fetch_row($result))
   {
       echo "<tr>";

       // $row is array... foreach( .. ) puts every element
       // of $row to $cell variable
       foreach($row as $cell)
           echo "<td>$cell</td>";

       echo "</tr>\n";
   }
   mysql_free_result($result);

	echo "</table>";
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p>Please click the link to <a href="search-form.php" >go back to the form</a></p>';
   
?>