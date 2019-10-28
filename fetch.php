
<?php
$conn= new mysqli('localhost','root','','store');

$ret=mysqli_query ($conn,"Select * from admin");

echo "<table  border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>title</th>"; 
echo "<th>first</th>";
echo "<th>mi</th>";
echo "<th>last</th>";
echo "<th>address1</th>";
echo "<th>address2</th>";
echo "<th>address3</th>";
echo "<th>city</th>";
echo "<th>state</th>";
echo "<th>postal</th>";
echo "<th>province</th>";
echo "<th>vender</th>";
echo "<th>gender</th>";
echo "<th>phone</th>";
echo "<th>dail</th>";
echo "<th>altp</th>";
echo "<th>Shw</th>";
echo "<th>email</th>";
echo "<th>comments</th>";



while($row=mysqli_fetch_array($ret))
{
echo "<tr>";
echo "<td>" .$row['id']. "</td>"; 
echo "<td>" .$row['title']. "</td>"; 
echo "<td>" .$row['first']. "</td>"; 
echo "<td>" .$row['mi']. "</td>"; 
echo "<td>" .$row['last']. "</td>"; 
echo "<td>" .$row['address1']. "</td>"; 
echo "<td>" .$row['address2']. "</td>"; 
echo "<td>" .$row['address3']. "</td>"; 
echo "<td>" .$row['city']. "</td>"; 
echo "<td>" .$row['state']. "</td>"; 
echo "<td>" .$row['postal']. "</td>"; 
echo "<td>" .$row['province']. "</td>"; 
echo "<td>" .$row['vender']. "</td>"; 
echo "<td>" .$row['gender']. "</td>"; 
echo "<td>" .$row['phone']. "</td>"; 
echo "<td>" .$row['dail']. "</td>"; 
echo "<td>" .$row['altp']. "</td>"; 
echo "<td>" .$row['Shw']. "</td>"; 
echo "<td>" .$row['email']. "</td>"; 
echo "<td>" .$row['comments']. "</td>"; 
echo "</tr>"; 
}
echo "</tr>";
echo "</table>";

$conn->close();
?>