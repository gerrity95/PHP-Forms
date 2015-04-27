
<h1> Search</h1>

<p><form action="search.php" onSubmit="return check()" method="post">
<p>Please Enter the ID: 
<input id="number" name="number" type="text" />
 <span class="error">*</span></p>
<p>
<input name="Submit" type="submit" value="Submit" /></p>
</form>


<script language='javascript'>
function check()
{
	
	var valid = true;
	
	if (document.getElementById('number').value.length == 0)
	{
		alert('Failed! You must input some data');
		valid = false;
	}
		return valid;
}
</script>
