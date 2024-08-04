<?php 

// make a variable conn for the connection of database
// in it pass parameters name of local host, name of user, password (if not set put empty ''), name of database
$conn = mysqli_connect('localhost','root','','payroll');

// if unsuccesfull connection print connection failed
// print the error using .mysqli_connect_error()

// else : echo "connection successfull"

if(!$conn){

    die('conection failed '.mysqli_connect_error());
}

?>