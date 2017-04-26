<select class="form-control" name="dob3" >
<option value = ""></option>
<?php
 
$startdate = 1700;
$enddate = date("Y");
$years = range ($enddate,$startdate);

foreach($years as $year) {
   
?>

<option value = "<?=$year;?>"><?=$year;?></option>
<?php

}
?>
</select>