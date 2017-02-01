<?php include "common/header.php";

$db=new dbHelper();
$totalcollection="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST["getamt"]))
  {
     $distname=$_POST['district'];
     $q="select sum(amt) as total from acc_transcations where dist_nm='$distname'";
     $result=$db->execute($q);

    while($row = $result->fetch_assoc())
     {
       $totalcollection= "<div class='alert alert-success'>Total DMF Collection of District <b>".$distname."</b> is :<b> ".$row["total"]."</b></div>";
     }
  }
}
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Districtwise DMF Collection </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <form action="" method="POST">
              <?php
                  $q="select distinct dist_nm from acc_transcations order by DIST_NM asc";
                  $result=$db->execute($q);
                  $dropdown="<label>Select District </label>&nbsp; <select class='form-control' style='width:50%' name='district'>";
                  while($row = $result->fetch_assoc()){
                    $dropdown.="<option value='".$row['dist_nm']."'>".$row['dist_nm']."</option>";
                  }
                    $dropdown.="</select><br><input type='submit' class='btn btn-success' name='getamt' value='Get'/>";

                  echo $dropdown;
                  $db->conClose();

                  echo "<br><br>".$totalcollection;
                  $totalcollection="";
              ?>
              </form>

            </div>
        </div>
    </div>
</div>
<?php include "common/footer.php"; ?>
