<!DOCTYPE html>
<html>
<h3>ENTER STUDENT DETAILS</h3><br>
<form action="q6_2_special_variables_html.php" method="POST">
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

$name= $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$totalsub=5;
$total=(float)(($sub1+$sub2+$sub5+$sub4+$sub3)/$totalsub);

if($sub1||$sub2||$sub3||$sub3||$sub4||$sub5||$name)
{
echo "Name of the Student: ".$name. "<br>";
echo "Marks in Each Subject"."<br>";
echo "Subject 1 marks: ".$sub1. "<br>";
echo "Subject 2 marks:".$sub2. "<br>";
echo "Subject 3 marks: ".$sub3. "<br>";
echo "Subject 4 marks: ".$sub4. "<br>";
echo "Subject 5 marks: ".$sub5. "<br>";
echo "Total Marks Obtained: ".($sub1+$sub2+$sub5+$sub4+$sub3)."<br>";
echo "Total Marks: 500"."<br>";
echo "Percentage of the student: ",$total."%";
}

?>
