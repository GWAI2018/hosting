<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<title>
My Shopping Cart
</title> 
</head>

<body>
<!--LOGO-->
<img src ="images/shopping-cart.png" width="200px" height="200px" alt="Shopping Cart" class="IMG_1">
<!-- Headings-->

<h2 class ="HED">Shopping Cart</h2>
<h3 class ="HED">The online shopiing store </h3>

<!-- Section Break with HR-->
<hr>
<!-- List Nav Bottons-->
<ul type="disk" class="navbar">
	<li><a href ="">Home</a></li>
	<li><a href ="news.html">News</a></li>
	<li><a href ="">Contact</a></li>
	<li><a href ="">About</a></li>
	<li><a href ="addItems.html">Add new items</a></li>
</ul>
<!-- Adding a Table-->
<?php
$sql = "SELECT * FROM tab1";
$result  = mysqli_query($conn,$sql);

//Valdation before printing 
if(mysqli_num_rows($result)>0)
{
	echo "<table border ='3' width='100%'>";
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>
		<td>" .$row["item_id"]."</td>
		<td>" .$row["item_name"]."</td>
		<td>" .$row["quantity"]."</td>
		<td>" .$row["price"]."</td>
		<td>" .$row["item_description"]."</td>
		<td>" .$row["item_code"]."</td>
		</tr>";
	}
	echo "</table>";
} 
else
{
	echo "Result = 0";
}

//closing the connection
mysqli_close($conn);
?>



<!-- Footer-->
<div class="footer">
<h4> Created by : <a href="https://courseweb.sliit.lk/course/view.php?id=2510"> </a></h4>
<!--Contact Link-->
<a href ="https://www.google.com/"> Visit to our Course</a>
</div>

</body>

</html>
