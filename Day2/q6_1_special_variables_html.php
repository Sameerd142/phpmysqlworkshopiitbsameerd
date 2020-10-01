<html>

	<form action='q6_1_special_variables_html.php' method='GET'>
        <h3>Enter the length of side of triangle:</h3>
		Enter length of first side: <input type='text' name='side1' ><br><br>
		Enter length of second side: <input type='text' name='side2' ><br><br>
		Enter length of third side: <input type='text' name='side3' ><br><br>
		<input type='submit' value='Click here' />
	</form>

</html>

<?php

$length1 = $_GET['side1'];
$length2 = $_GET['side2'];
$length3 = $_GET['side3'];

if ($_GET['side1'] == $_GET['side2'] && $_GET['side2'] && $_GET['side3'] && $_GET['side1'] == $_GET['side3'])
{
	echo "Equilateral triangle";
}
elseif($length1!=$length2 && $length2!=$length3 && $length3!= $length1)
{
    if( $length1*$length1 + $length2*$length2 == $length3*$length3 || $length1*$length1 + $length3*$length3 == $length2*$length2 || $length2*$length2 + $length3*$length3 == $length1*$length1)
    {
        echo "Right angled triangle ";
    }
    else
    {
        echo"Scalene triangle";
    }
}
else
{
	echo "Isosceles triangle";
}

?>
