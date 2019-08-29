<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html>
<head>

<style>

table{
    border:1px solid dodgerblue;
    width:50%;
}
table td, th{
    /* border:1px solid cyan; */
    padding:10px;

}
table th{
    background-color:dodgerblue;
}

table tr:nth-child(even){
    background-color:#f1f1f1;

}

table tr:nth-child(odd){
    background-color:#f1f1c1;
    
}


</style>

</head>
<body>
	<form action="">
		<table>
			<tr>
				<th>Item Name</th>
				<th>Item Size</th>
				<th>Item Price</th>
				<th>Actions</th>
			</tr>
			<?php $result_set = selectItem();?>
			<?php while($item = mysqli_fetch_assoc($result_set)){ ?>

			<tr>
				<td>
					<?php echo $item['itemName']?>
				</td>
				<td>
					<?php echo $item['itemSize']?>
				</td>
				<td>
					<?php echo $item['itemPrice']?>
				</td>
				<td>
					<!-- options presented to the user -->
					<select name="" id="">
						<option value="">Like</option>
						<option value="">Remove</option>
						<option value="">Save for later</option>
					</select>
					<button>Save</button>
					<!-- 
                the above button should be used to save individual selections.
                so that when the submit button is clicked the data get inserted
                into the same table again but now the status will change to the itemStatus
                in the table will change to the value in the select box
             -->
				</td>
			</tr>
			<?php }?>

			<!-- 
when the button below is clicked, the value stored while the user pressed the save button should get inserted
into the cart table and the status should change to the value of the select box
-->
			<button>Submit</button>
		</table>
	</form>
</body>

</html>