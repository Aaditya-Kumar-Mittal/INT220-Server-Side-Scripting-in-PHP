<?php
// Step 1: Initialize the multidimensional array
$employees = [
  'John Doe' => [
    'shift' => 'morning',
    'hours' => [8, 8, 8, 8, 8, 0, 0] // hours for Mon-Sun
  ],
  'Jane Smith' => [
    'shift' => 'evening',
    'hours' => [7, 7, 7, 7, 7, 6, 0]
  ],
  'Mark Johnson' => [
    'shift' => 'night',
    'hours' => [6, 6, 6, 6, 6, 6, 6]
  ]
];

// Step 2: Loop through the array to calculate total hours worked by each employee
foreach ($employees as $name => $employee) {
  $total_hours = array_sum($employee['hours']); // Calculate total hours for the employee
  echo "Employee: $name\n";
  echo "Assigned Shift: " . $employee['shift'] . "\n";
  echo "Total Hours Worked in the Week: $total_hours hours\n\n";
}
?>