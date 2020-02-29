<link href="bootstrap3.css" rel="stylesheet">  
<?php  
$dbhost = 'localhost';  
$dbuser = 'root';  
$dbpass = '';  
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname = 'hotel';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Connection failed: " . mysqli_connect_error());
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }  
  
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM rooms LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>  
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><? echo $row["room_name"]; ?></td>  
            <td><? echo $row["room_id"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  
$sql = "SELECT COUNT(room_id) FROM rooms";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>