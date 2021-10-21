<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php
foreach($CmfCustomer as $CmfCustomer) {
	$supplyid[]     = $CmfCustomer['supplyid'];
	$createdate[]   = $CmfCustomer['createdate'];
}
?>

<canvas id="canvas" width="1200" height="380"></canvas>
<script src="static/js/chartjs/Chart.min.js"></script>
	<script>
 
            var lineChartData = {
                labels : <?php echo json_encode($createdate);?>,
                datasets : [
                    {
                    	label: "客户新增走势",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data : <?php echo json_encode($supplyid);?>
                    },
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
         
</script>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>