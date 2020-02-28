<?php
# Staff Counting	Version 3
#q 1

include "dreamsetup.php";


$title = "Dreamhome Rental Agency";
$headline = "Welcome to the Dreamhome Agency"; 
#html_begin ($title, $headline);
?>


<p>Simple Client Count</p>


<?php
$conn_id = dream_connect () 
   or exit ();
$result_id = mysqli_query ($conn_id, "select count(*) from client") 
   or exit ();
if ($row = mysqli_fetch_row ($result_id))
   print ("<p> There are " .$row[0]. " clients"); 
mysqli_free_result ($result_id);

#html_end ();
?>
