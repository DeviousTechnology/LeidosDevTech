<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

<div id="container">
	<h1>Resources </h1>

	<div id="body">
		<?php 
// 			foreach ($Names as $object) {
// 				echo $object->Name . '<br/>';
// 			}
		?>

		  <div id="table_form"> 
<?php

echo form_open('ResController/home');

echo "<table style='width:100%' border='1'>";

echo "<th>";
echo "Name ";
echo "</th>";

echo "<th>";
echo "Type ";
echo "</th>";

echo "<th>";
echo "Description ";
echo "</th>";

echo "<th>";
echo "PrimaryLoc ";
echo "</th>";

echo "<th>";
echo "SkillsReq ";
echo "</th>";


echo "<th>";
echo "StartDate ";
echo "</th>";

echo "<th>";
echo "EndDate ";
echo "</th>";

foreach ($AI as $object){

  echo "<tr>";

  
  echo "<td align='center'>" ;
  
  echo   'Ahmed' ;   // $object->Name ;
  
  echo "</td>";

  	echo "<td align='center'>" ;
  
  	echo $object->Type ;
  
  	echo "</td>";
  
  	echo "<td align='center'>" ;
  
  	echo $object->Description ;
  
  	echo "</td>";
  
  	echo "<td align='center'>" ;
  
  	echo $object->PrimaryLoc ;
  
  	echo "</td>";
  
  	echo "<td align='center'>" ;
  
  	echo $object->SkillsReq ;
  
  	echo "</td>";
  
  	echo "<td align='center'>" ;
  
  	echo $object->StartDate ;
  
  	echo "</td>";
  
  	echo "<td align='center'>" ;
  
  	echo $object->EndDate ;
  
  	echo "</td>";
  

  
  
    echo "<td align='center'>" ;
  ///// //echo $object->ProjectID;
  echo anchor('login/getEnroll'.$object->ProjectID,"getEnroll") ;
 "<a href='". base_url()."ResController/getEnroll".$object->ProjectID .  "   >Enroll</a>";
  echo "</td>"; 
}

echo "</tr>";


echo "</table>";

echo form_close();

?>
    
  </div>  
</div>

</body>
</html>