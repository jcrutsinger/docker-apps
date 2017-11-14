<?php
//Step1
 $db = mysqli_connect('192.168.99.101','root','mysql','employees')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>

<?php
//Step2
$query = "SELECT * FROM employees limit 100";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['emp_no'] . ' ' . $row['first_name'] . ': ' . $row['last_name'] . ' ' . $row['hire_date'] .'<br />';
};
?>

</body>
</html>
