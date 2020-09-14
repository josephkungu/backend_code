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
  <title>cases</title>
</head>
<body>
  <div class="module-body table" align="center">
 <table cellpadding="3" cellspacing="3" border="2" class="datatable-1 table table-bordered table-striped  display" width="">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>case number</th>
                      <th>plaintiff ID</th>
                      <th>repondent ID</th>
                      <th>court ID</th>
                      <th>case type</th>
                      <td>case outcome</td>
                      <td>PJNo</td>
                      <td>case Date</td>
                    </tr>
                  </thead>
                  <tbody>

<?php $query=mysqli_query($con,"select * from casetable");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
   $caseNumber=$row['caseNo'];
?>                 
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo $caseNumber;?></td>
                      <td><?php echo htmlentities($row['plaintiffID']);?></td>
                      <td><?php echo htmlentities($row['respondentID']);?></td>
                      <td><?php echo htmlentities($row['courtID']);?></td>
                      <td><?php echo htmlentities($row['caseType']);?></td>
                      <td><?php echo htmlentities($row['caseOutcome']);?></td>
                      <td><?php echo htmlentities($row['PJNo']);?></td>
                      <td><?php echo htmlentities($row['caseDate']);?></td>
                      <a href="ff.php?id=<?php echo $row['plaintiffID']?>" ><i class="icon-edit"></i></a>
                    </tr>
                    <?php $cnt=$cnt+1; } ?>
                    
                </table>
              </div>
</body>
</html>
               