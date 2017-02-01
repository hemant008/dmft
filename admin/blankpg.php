<?php include "common/header.php"; ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Blank Page</h4>
            </div>
        </div>
        <!-- Styles -->
        <style>
        #chartdiv {
          width: 100%;
          height: 500px;
        }
        </style>

        <!-- Resources -->
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/pie.js"></script>
        <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

        <!-- Chart code -->
        <script>
        var chart = AmCharts.makeChart( "chartdiv", {
          "type": "pie",
          "theme": "light",
          "dataProvider": [ {
            "Mineral": "Major Mineral Collection",
            "value": 75
          }, {
            "Mineral": "Minor Mineral Collection",
            "value": 25
          } ],
          "valueField": "value",
          "titleField": "Mineral",
          "outlineAlpha": 0.4,
          "depth3D": 15,
          "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
          "angle": 30,
          "export": {
            "enabled": true
          }
        } );
        </script>

        <!-- HTML -->
        <div id="chartdiv" class="col-md-3"></div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
<?php include "common/footer.php"; ?>
