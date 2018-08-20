<?php
$con=mysqli_connect("techaspect","localhost","root","root);
$pname=$_POST['pn'];

$pprice=$_POST['pp'];
$cat=$_POST['pc'];
$quan=$_POST['pq'];
$pdate=$_POST['pd'];
$edate=$_POST['pe'];

$sql=mysqli_query("Insert into details values('$pname',$pprice','$cat','$quan','$pdate','$edate')");
con.close();
?>