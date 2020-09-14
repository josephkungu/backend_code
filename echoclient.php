 <?php
$con = mysqli_connect("localhost","root","","data");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>members</title>
</head>
<body>
  <div class="module-body table" align="center">
 <table cellpadding="3" cellspacing="3" border="2" class="datatable-1 table table-bordered table-striped  display" width="">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Full Name</th>
                      <th>Client ID</th>
                      <th>Email</th>
                      <th>Phone No</th>
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select * from client");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
   $fullname=$row['firstName']." ".$row['lastName'];
?>                 
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo $fullname;?></td>
                      <td><?php echo htmlentities($row['clientID']);?></td>
                      <td><?php echo htmlentities($row['emailAddress']);?></td>
                      <td><?php echo htmlentities($row['phoneNo']);?></td>
                      <a href="ff.php?id=<?php echo $row['clientID']?>" ><i class="icon-edit"></i></a>
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>
              </div>
</body>
</html>
               