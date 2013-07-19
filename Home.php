<?php
/* Database Connection */
//-------------server connection-----------------//
$con=mysql_connect("localhost","root","");
if($con)
{}
else
{ die('Not Connected.<br>'.mysql_error().'<br>'); }

//----------------database connection-----------//
$db=mysql_select_db("dm",$con);
if($db)
{}
else
{ die('Database Not Connected.<br>'.mysql_error().'<br>'); }

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div id="total"><center>
<div id="body">
  <div id="header">
</div>
<div id="main">
<div class="transbox_heading">Bank Name</div><br>
<?php
/* Pagination - Default First Page */
if(!isset($_GET['page']))
{
	$current_page=1;
}
/* Pagination - Default Previous Page */
else
{
	$current_page=$_GET['page'];
	$pervious_page=$current_page-1;
	if($pervious_page>0)
	{echo "<a href='Home.php?page=$pervious_page'><input type='button' value='  Pervious  '></a>";}
}
$entry=8; /* Pagination - Number of Bank shown in per page */
$start_limit=$entry*($current_page-1);	/* Pagination - Starting Bank id shown in the page  */
/* Pagination */
$sql="SELECT * FROM bank";
$query=mysql_query($sql);
$num=mysql_num_rows($query);
$total_page=intval($num/$entry);
if(($num%$entry)>0)
{
	$total_page=$total_page+1;	
}
/* Display Page Number */
for($i=1;$i<=$total_page;$i++)
{
	echo "<a href='Home.php?page=$i'><input type='button' value="   .  $i  .   "></a>";
}
/* Pagination - Default Next Page */
if($current_page<$total_page)
{
	$next=$current_page+1;
	echo "<a href='Home.php?page=$next'><input type='button' value='  Next  '></a>";
}
?>
<br>
<table border="1" bgcolor="#FFFFFF">
	<tr>
		<td align='center'>Bank Id</td>
		<td align='center'>Bank Name</td>
	</tr>
<?php
	

//-----------Fetching Bank Name------------//
$sql1="SELECT * FROM bank LIMIT $start_limit,$entry";
$query1=mysql_query($sql1);
while($row=mysql_fetch_array($query1))
{
$bid=$row['bank_id'];
$bname=$row['bank_name'];

		echo"<tr>
				<td align='center'>".$bid."</td>
				<td align='center'>".$bname."</td>
			</tr>";
}	
?>
</table><br>
</div>
    <div id="footer"></div>
</div></center>
</div>
</body>
</html>
