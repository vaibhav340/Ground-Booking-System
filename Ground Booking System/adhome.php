<html>
<title> home</title> <link rel="stylesheet" href="ahm.css">
<body class="h_image">

<section>
	<div id="main">
	<nav>
		<ul>
			<li> <a href="home.html">HOME</a></li>
			<li> <a href="crick.html">CRICKET</a>
						<ul>    <li><a>Learn</a></li>
							<li><a>Live</a></li>
							<li><a>Tournament</a></li>
		
						</ul>
			</li>






			
                <li> <a href="football.html">FOOTBALL</a>
						<ul>    <li><a>Learn</a></li>
							<li><a>Live</a></li>
							<li><a>Tournament</a></li>
		
						</ul>
			</li>
			<li> <a>KABDDI</a>
						<ul>    <li><a>Learn</a></li>
							<li><a>Live</a></li>
							<li><a>Tournament</a></li>
							

						</ul>
			</li>
			
		</ul>
	
	</nav>
        
		</div>
</section>
<div id="tb">
<?php
	require "connection.php";		
	$s1="select * from ground;";
	$r1=mysqli_query($conn,$s1);
	$c=mysqli_num_rows($r1);

	echo "<table border='1'>";
		echo "<tr>";	
		echo "	<td>name</td>";
		echo "	<td>Sport/td>";
		echo "	<td>date</td>";
		echo "	<td>days</td>";
		echo "	<td>mobileno</td>";
		echo "	<td>tournaments</td>";
		echo "	<td>status</td>";
		echo "	<td>status</td>";
	echo "</tr>";

	for($i=0;$i<=$c;$i++)
	{
		$r2=mysqli_fetch_row($r1); 
	echo "<tr>";
		echo "	<td name='nme'>".$r2[0]."</td>";
		echo "	<td>".$r2[1]."</td>";
		echo "	<td>".$r2[2]."</td>";
		echo "	<td>".$r2[3]."</td>";
		echo "	<td>".$r2[4]."</td>";
		echo "	<td>".$r2[5]."</td>";
		echo "	<td>".$r2[6]."</td>";
		 echo " <td>
    <form name='f'>
    <input type='button' name='paid' onclick='paid.php' value='Paid' />
    </form>
    </td>";
	echo "	</tr>";

	
	}
		
	echo "	</table>";

	
?>
</div>
<div id="tb">
<?php
	require "connection.php";		
	$s1="select * from tournament;";
	$r1=mysqli_query($conn,$s1);
	$c=mysqli_num_rows($r1);

	echo "<table border='1'>";
		echo "<tr>";	
		echo "	<td>name</td>";
		echo "	<td>Sport/td>";
		echo "	<td>tournament</td>";
		echo "	<td>amount</td>";
		echo "	<td>status</td>";
		echo "	<td>status</td>";
	echo "</tr>";

	for($i=0;$i<=$c;$i++)
	{
		$r2=mysqli_fetch_row($r1); 
	echo "<tr>";
		echo "	<td>".$r2[0]."</td>";
		echo "	<td>".$r2[1]."</td>";
		echo "	<td>".$r2[2]."</td>";
		echo "	<td>".$r2[3]."</td>";
		echo "	<td>".$r2[4]."</td>";
		 echo " <td>
    <form name='f'>
    <input type='button' name='paid' value='Paid' />
    </form>
    </td>";
	echo "	</tr>";

	
	}
		
	echo "	</table>";

?>
</div>
</body>
</html>
