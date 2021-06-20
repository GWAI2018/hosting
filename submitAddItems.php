<?php
include_once'config.php';
?>
<?php
//Getting Values from the HTML form
$name = $_POST['field1'];
$code = $_POST['field2'];
$price = $_POST['field3'];
$qty = $_POST['field4'];
$des = $_POST['field5'];

//Insert query execution
$sql = "INSERT INTO tab1 (item_id,item_name,quantity,price,item_description,item_code) VALUES('','$name','$qty','$price','$des','$code')";

if(mysqli_query($conn,$sql))
{
	echo "alert('Record added successfully!')";
	header("Location:Output.php");
}
else
{
	echo "alert('Error: Could not able to execute $sql.')";
}

//closing the connection
mysqli_close($conn);
?>