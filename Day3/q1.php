<?php 
include "connect.php" ;
?>
<html>
<h3>ENTER STUDENT DETAILS</h3><br>
<form action="q6_2_special_variables_html.php" method="POST">
	student id:<input type="number" name="id" placeholder="Enter id"><br><br>
	Name of the student:<input type="text" name="name" placeholder="Enter your name"><br><br>
	Subject1 marks:<input type="number" name="sub1" placeholder="Enter Marks in subject 1"><br><br>
	Subject2 marks:<input type="number" name="sub2" placeholder="Enter Marks in subject 2"><br><br>
	Subject3 marks:<input type="number" name="sub3" placeholder="Enter Marks in subject 3"><br><br>
	Subject4 marks:<input type="number" name="sub4" placeholder="Enter Marks in subject 4"><br><br>
	Subject5 marks:<input type="number" name="sub5" placeholder="Enter Marks in subject 5"><br><br>

	<input type="submit" value="Submit your marks"><br><br>

</form>
</html>
<?php
if (@$_POST["name"] && @$_POST["sub1"] && @$_POST["sub2"] && @$_POST["sub3"] && @$_POST["sub4"] && @$_POST["sub5"])
{

$name= $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$total_obtained=($sub1+$sub2+$sub3+$sub4+$sub5);
$totalsub=500;
$percent=(float)($total_obtained/5);


		echo "<br><br>Total Marks Obtained: <input type='text' value='$total_obtained'>";
		echo "<br>Total Marks: <input type='text' value='500'>";
		echo "<br>Percentage: <input type='text' value='$percent'> %";

	$sql = "INSERT INTO class1 VALUES('',$id,'$name', $sub1, $sub2, $sub3, $sub4, $sub5, $total_obtained, $total_marks, $percent)";
		$result = $conn->query($sql);

if(result){
	echo "success";
}
else
{
	echo "Not inserted";
}
}
?>




