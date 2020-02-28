<?php
# Staff Counting	Version 3
# q 4

include "dreamsetup.php";


$title = "Dreamhome Rental Agency";
$headline = "Welcome to the Dreamhome Agency"; 
#html_begin ($title, $headline);
?>


<p>Simple London staff Count</p>


<?php
$conn_id = dream_connect () 
   or exit ();
$result_id = mysqli_query ($conn_id, "select count(*) from staff where Address like '%London%'") 
   or exit ();
if ($row = mysqli_fetch_row ($result_id))
   print ("<p> There is " .$row[0]. " member of staff living in London"); 
mysqli_free_result ($result_id);

#html_end ();
?>
