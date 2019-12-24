<form action="#" method="post">
	
	<select name="taskOption">
      <option value="first">First</option>
      <option value="second">Second</option>
      <option value="third">Third</option>
</select>
	
<input type="submit" name="submit" value="Get Selected Values" />
</form>


<?php
	if(isset($_POST['submit'])){
	// As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
		$select = $_POST['taskOption'];
		echo "You have selected :" .$select; // Displaying Selected Value
	}
?>