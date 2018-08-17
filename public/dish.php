<?php
	include_once('connection.php');
	$sql = "Select Name from menu";		
	$result = $connection->query($sql);
		while($row = $result->fetch_array())
		{
			$rows[] = $row;
		}
		echo "<select  name='dish' style='display: inline' >";
		$selected = isset($_POST['dish']) ? $_POST['dish'] : '';
		foreach($rows as $row)
		{							
		echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
		}
		echo "</select>";	
		unset($rows); 		
		$result->close();	

	?>