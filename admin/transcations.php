<?php include "common/header.php";

$db=new dbHelper();
$q="select date1,txn,detail,detail1,flag1,amt,amt1,balance,balance1,dist_nm from acc_transcations";
$result=$db->execute($q);
$i=1;
$tble="<table class='table table-striped table-bordered table-hover'>";
$tble.="<thead><tr><th style='width:20px;'>SNo.</th><th>Date</th><th>Transcation</th><th>Details1</th><th>Details2</th><th>flag</th><th>Amount</th><th>Balance</th><th>District</th></tr></thead>";
while($row = $result->fetch_assoc()){
  $tble.="<tr><td>".$i."</td><td>".$row['date1']."</td><td>".$row['txn']."</td><td>".$row['detail']."</td><td>".$row['detail1']."</td><td>".$row['flag1']."</td><td>".$row['amt'].".".$row['amt1']."</td><td>".$row['balance'].".".$row['balance1']."</td><td>".$row['dist_nm']."</td></tr>";
  $i++;
}
$tble.="</table>";
$db->conClose();
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Complete Transcations Detail</h4>
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
