<?php
# This is a common ‘include file’ that contains functions to:
#	login to MySQL
#	set the look & feel of the page
#	terminate the page

#Connect to the MySQL server using top-secret username & password 
function dream_connect ()
{
$server = "cs1.ucc.ie";
$database = "dreamhome";
$username = "CS2212";
$password = "CS2212psw";


$connection =  
    mysqli_connect ($server, $username, $password, $database); 

if ($connection)
   return ($connection); 
return (FALSE);
}


#Setup Look & Feel of Page (Title, Header, Fonts, Colours, etc) function html_begin ($title, $header)
{
print ("<html>\n"); 
print ("<head>\n"); 
#if ($title != "")
   #print ("<title>$title</title>\n"); 
print ("</head>\n");
print ("<body bgcolor=\"#b3ffd9\">\n"); 
#if ($header != "")
   #print ("<h2>$header</h2>\n");
}
 
#Terminate Page Properly function html_end ()
{
print ("</body></html>\n");
}


?>
    
