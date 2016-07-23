

<!DOCTYPE html>

   
	<head>
		<script type = "text/javascript">
var cel="";			
    function readValues(x) {
				var content = x.children.length;
//				for(var i = 0; i < content; i++) {
//					document.getElementById("hid"+i).value = "";
					var j = x.cells[0].innerHTML;
//					document.getElementById("hid"+i).value = j;
                                       
        cel=j;    
//        alert(cel);
//				}
				
			}

                        
                    
		</script>
                   
	</head>
	<body>
		<table id = "myTable" cellpadding = "3" cellspacing = "3">
			<thead>
				<tr>
					<th>Col 1</th>
					<th>Col 2</th>
				</tr>
			</thead>
			<tbody>
				<tr onClick = "readValues(this)" >
					<td>Row 1, Col 1</td>
					<td>Row 1, Col 2</td>
				</tr>
				<tr onClick = "readValues(this)" >
					<td>Row 2, Col 1</td>
					<td>Row 2, Col 2</td>
				</tr>
			</tbody>
		</table>
              <?php   
                    echo 'blaaaaaaaaaaa';
        echo "<script>document.writeln(cel);</script>";
        
    ?>
		<form action = "#" method = "get/post">
			<input type = "hidden" name = "values1" value = "" id = "hid0" />
			<input type = "hidden" name = "values2" value = "" id = "hid1" />
			<input type = "submit" value = "submit" />
		</form>
	</body>


<!--<html>
<head>
<title>Untitled</title>
<script>
var p1 = "successddddd";
</script>
</head>

<body>

//<?php
//echo "<script>document.writeln(p1);</script>";
//?>

</body>
</html>-->