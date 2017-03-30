
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<title> Search</title>
	<script> 
// function showResult(str) {
//   if (str.length==0) { 
//     document.getElementById("livesearch").innerHTML="";
//     document.getElementById("livesearch").style.border="0px";
//     return;
//   }
//   if (window.XMLHttpRequest) {
//     // code for IE7+, Firefox, Chrome, Opera, Safari
//     xmlhttp=new XMLHttpRequest();
//   } else {  // code for IE6, IE5
//     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }
//   xmlhttp.onreadystatechange=function() {
//     if (this.readyState==4 && this.status==200) {
//       document.getElementById("livesearch").innerHTML=this.responseText;
//       document.getElementById("livesearch").style.border="1px solid #A5ACB2";
//     }
//   }
//   xmlhttp.open("GET","livesearch.php?q="+str,true);
//   xmlhttp.send();
// }
</script> 
</head>
<body>
<!-- <form action="update" method="POST"> -->

<!-- 	<input type="text" name="Name" placeholder="Name"/> -->
<!-- 	<input type="text" name="Username" placeholder="Username"/> -->
<!-- 	<button type="submit" name="submit">Update</button> -->

<!-- </form> -->
<?php
//  echo form_open('Welcome/execute_search');

// //  echo form_input(array('name'=>'search'));
// //echo "<input name='search' type='text' size='30' onkeyup='Welcome/execute_search' >";
// echo form_input(array("name" => "search", "placeholder"=>"Search...", "onkeyup="));
// echo form_submit('search_submit','Submit Search');


?>
<div>
    <?php
        // List up all results.
//         if ($results!=NULL){
//         foreach ($results as $val)
//         {
//             echo $val['Name'];
//             echo "<br>";
//         }
       
//         }
     ?>
</div>
</body>
</html>