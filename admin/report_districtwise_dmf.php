<?php include "common/header.php";

$db=new dbHelper();
$q="select DIST_NM, sum(AMT) as total from acc_transcations group by DIST_NM asc";
$result=$db->execute($q);
$amt=0;
$i=1;
$tble="<table class='table table-striped table-bordered table-hover'><thead><tr><th>#</th><th>District</th><th>Amount</th></thead>";
while($row = $result->fetch_assoc()){
  if($row['DIST_NM']!="") //online payment doest not have district name so here we are not showing them
  {
    $tble.="<tr><td>".$i."</td><td>".$row['DIST_NM']."</td><td>".$row['total']."</td></tr>";
    $amt+=$row['total'];
    $i++;
  }
}
$tble.="<tr><td colspan='2' >Grand Total</td><td>$amt</td></table>";
$db->conClose();
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centerelment">
                <h4 class="page-head-line">Report:- Districtwise DMF Collection </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo $tble; ?>
            </div>
        </div>
    </div>
</div>
<?php include "common/footer.php"; ?>
