<?php require_once('db.php'); 

if(isset($_REQUEST['place']))
{
$place=$_REQUEST['place'];
echo $place;

$query="SELECT hotel FROM accomodation where place='".$place."'";
$res=mysql_query($query); ?>
<select>
	<option>-select Hotel-</option>
		<?php while ( $row=mysql_fetch_array($res)) { ?>

	<option><?php echo $row['hotel']; } ?> </option>
</select>
<?php } ?>



