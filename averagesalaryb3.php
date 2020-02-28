<?php
# Staff Counting	Version 3
# q 5

include "dreamsetup.php";


$title = "Dreamhome Rental Agency";
$headline = "Welcome to the Dreamhome Agency"; 
#html_begin ($title, $headline);
?>


<p>Simple Average Salary</p>


<?php
$conn_id = dream_connect () 
   or exit ();
$result_id = mysqli_query ($conn_id, "select avg(salary) from staff where Bno = 'B3'") 
   or exit ();
if ($row = mysqli_fetch_row ($result_id))
   print ("<p> The average salary in B3 is  "  .$row[0]); 
mysqli_free_result ($result_id);

#html_end ();
?>
