<?php include "common/header.php"; ?>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Dashboard</h4>

            </div>
        </div>
        <!-- Statics-->
        <div class="row">
          <div class="col-md-3">
            <div class="circle-tile ">
              <a href="#"><div class="circle-tile-heading dark-green"><i class="fa fa-inr fa-fw fa-3x"></i></div></a>
              <div class="circle-tile-content dark-green">
                <div class="circle-tile-description text-faded"> Total Mineral<br> Collection </div>
                <div class="circle-tile-number text-faded ">440 Cr.</div>

              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="circle-tile ">
              <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa  fa-fw fa-3x"></i></div></a>
              <div class="circle-tile-content dark-blue">
                <div class="circle-tile-description text-faded"> Major Mineral Collection</div>
                <div class="circle-tile-number text-faded ">290 Cr.</div>

              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="circle-tile ">
              <a href="#"><div class="circle-tile-heading red"><i class="fa fa-fw fa-3x"></i></div></a>
              <div class="circle-tile-content red">
                <div class="circle-tile-description text-faded"> Minor Mineral Collection</div>
                <div class="circle-tile-number text-faded ">150 Cr.</div>

              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="circle-tile ">
              <a href="#"><div class="circle-tile-heading dark-green"><i class="fa fa-money fa-fw fa-3x"></i></div></a>
              <div class="circle-tile-content dark-green">
                <div class="circle-tile-description text-faded">District Fund Distributed</div>
                <div class="circle-tile-number text-faded ">120 Cr.</div>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="circle-tile ">
              <a href="#"><div class="circle-tile-heading steelblue"><i class="fa fa-file-powerpoint-o fa-fw fa-3x"></i></div></a>
              <div class="circle-tile-content steelblue">
                <div class="circle-tile-description text-faded">Total Sanctioned <br>Projects</div>
                <div class="circle-tile-number text-faded ">0</div>
              </div>
            </div>
            </div>
        </div>

        <!-- statics End -->
<!---Dashbord -->

        <div clas=="row"><hr style="size:2px margin-top:10px; margin-bottom:20px; border-bottom: solid 2px red"></div>
        <div class="row">

             <div class="col-md-3 col-sm-3 col-xs-4">
              <a href="dmftentry.php" style="text-decoration:none">
                <div class="dashboard-div-wrapper bk-clr-two">
                  <i  class="fa fa-keyboard-o dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      </div>
                    </div>
                     <h5>Fund Collection Entry </h5>
                </div> </a>
            </div>
              <div class="col-md-3 col-sm-3 col-xs-4">
               <a href="fundtransfer.php" style="text-decoration:none">
                <div class="dashboard-div-wrapper bk-clr-three">
                    <i  class="fa fa-inr dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      </div>
                    </div>
                     <h5>Fund Allocation </h5>
                </div>
              </a>
            </div>
           <div class="col-md-3 col-sm-3 col-xs-4">
              <a href="proposalSubmission.php" style="text-decoration:none">
                <div class="dashboard-div-wrapper bk-clr-four">
                  <i  class="fa fa-file-text-o dashboard-div-icon" ></i>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      </div>
                    </div>
                     <h5>Submit Proposal </h5>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
             <a href="proposalDecisionEntry.php" style="text-decoration:none">
               <div class="dashboard-div-wrapper bk-clr-two">
                 <i  class="fa fa-spinner dashboard-div-icon" ></i>
                   <div class="progress progress-striped active">
                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                     </div>
                   </div>
                    <h5>Approval Decision</h5>
               </div>
             </a>
            </div>
             <div class="col-md-3 col-sm-3 col-xs-4">
              <a href="projectMonthlyStatus.php" style="text-decoration:none">
               <div class="dashboard-div-wrapper bk-clr-three">
                   <i  class="fa fa-file-powerpoint-o dashboard-div-icon" ></i>
                   <div class="progress progress-striped active">
                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                     </div>
                   </div>
                    <h5>Project Status Entry</h5>
               </div>
             </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4">
             <a href="projectExpenditureEntry.php" style="text-decoration:none">
               <div class="dashboard-div-wrapper bk-clr-four">
                 <i  class="fa fa-money  dashboard-div-icon" ></i>
                   <div class="progress progress-striped active">
                     <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                     </div>
                   </div>
                    <h5>Project Expenditure </h5>
               </div>
             </a>
            </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
             <a href="projectCompletionEntry.php" style="text-decoration:none">
               <div class="dashboard-div-wrapper bk-clr-two">
                 <i  class="fa fa-thumbs-o-up dashboard-div-icon" ></i>
                   <div class="progress progress-striped active">
                     <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                     </div>
                   </div>
                    <h5>Lock Project </h5>
               </div>
             </a>
            </div>
        </div>

    </div>
</div>
<?php include "common/footer.php"; ?>
