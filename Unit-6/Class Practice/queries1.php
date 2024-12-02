<?php

//5 ORDER BY and GROUP BY
echo "<h3>Orde by Salary D</h3>";

$sql =  "SELECT * FROM employees ORDER BY salary DESC";
$result = mysqli_query($conn, $sql);
