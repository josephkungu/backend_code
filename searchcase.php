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
                      <th>caseNo</th>
                      <th>plaintiffID</th>
                      <th>respondentID</th>
                      <th>courtID</th>
                      <th>caseType</th>
                      <th>caseOutcome</th>
                      <th>PJNo</th>
                      <th>caseDate</th>
                     

                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select * from casetable");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
   $caseNo=$row['caseNo']." ".$row['plaintiffID'];
?>                 
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo $caseNo;?></td>
                      <td><?php echo htmlentities($row['plaintiffID']);?></td>
                      <td><?php echo htmlentities($row['respondentID']);?></td>
                      <td><?php echo htmlentities($row['courtID']);?></td>
                      <td><?php echo htmlentities($row['caseType']);?></td>
                      <td><?php echo htmlentities($row['caseOutcome']);?></td>
                      <td><?php echo htmlentities($row['PJNo']);?></td>
                      <td><?php echo htmlentities($row['caseDate']);?></td>
                     
          
                      <a href="ff.php?id=<?php echo $row['clientID']?>" ><i class="icon-edit"></i></a>
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>
              </div>
</body>
</html>
               