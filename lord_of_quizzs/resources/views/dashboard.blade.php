@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<?php
 
$dataPoints = array( 
	array("y" => $demnguoichoi, "label" => "Tài Khoản" ),
	array("y" => $demlinhvuc, "label" => "Lĩnh Vực" ),
	array("y" => $dembocauhoi, "label" => "Bộ Câu Hỏi" ),
	array("y" => $demcauhoi, "label" => "Câu Hỏi" ),
	array("y" => $demchitietbocauhoi, "label" => "Chi Tiết bộ câu hỏi" ),
);
 
?>
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                        </div>
                        <div class="col-sm-12">
                        <div id="chartContainer"  style="height: 500; width: 100%;"></div>
                        <div >
                            <p></p>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "dark2",
	title:{
		text: "Bảng Thống Kê"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0 tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

@push('js')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush