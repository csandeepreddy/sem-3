<!DOCTYPE html>
<head>
 <title>Electricity Bill Calculator</title>
</head>
<body>
 <center>
 <h3>Electricity Bill Calculator</h3>
 <form action="" method="post">
 <input type="number" name="units" placeholder="Please enter no. of
 Units" />
 <input type="submit" name="unit-submit" value="Submit" />
 </form>
<?php
class electric
{
 public $units;
 function set_units($units)
 {
 $this->units=$units;
 }
 function calculate_bill()
 {
 $unit_cost_first = 4.50;
$unit_cost_second = 5.00;
$unit_cost_third = 6.60;
$unit_cost_fourth = 8.00;
 if($this->units <= 50)
 {
 $bill = $this->units * $unit_cost_first;
 }
 else if($this->units > 50 && $this->units <= 100)
 {
 $temp = 50 * $unit_cost_first;
 $remaining_units = $this->units - 50;
 $bill = $temp + ($remaining_units * $unit_cost_second);
 }
 else if($this->units > 100 && $this->units <= 200)
 {
 $temp = (50 * 4.5) + (100 * $unit_cost_second);
 $remaining_units = $this->units - 150;
 $bill = $temp + ($remaining_units * $unit_cost_third);
 }
 else
 {
 $temp = (50 * 4.5) + (100 * $unit_cost_second) + (100 * $unit_cost
_third);
 $remaining_units = $this->units - 250;
 $bill = $temp + ($remaining_units * $unit_cost_fourth);
 }
 return number_format((float)$bill, 2, '.', '');
 }
}
$u=new electric();
if (isset($_POST['unit-submit']))
{
 $units = $_POST['units'];
 $u->set_units($units);
 echo "<br><br>Dear Customer.....<br><br>The Electric city bill amount for
".$units." units is ".$u->calculate_bill();
}
?>
</center>
</body>
</html>
