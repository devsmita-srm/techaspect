<?php
if(isset(_POST['pn']))
{
$pname=_POST['pn']
$con=mysqli_connect("techaspect", "localhost","root","root");
$result=mysqli_query("select * from details where productname='$pname'");
if(result.num_rows>0)
{


