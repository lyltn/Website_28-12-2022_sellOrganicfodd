@extends('admin_layout')
@section('admin_content')
<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3>13,500</h3>
					<p>/year</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>
					@foreach($user as $key => $cate)
						<h3>{{$cate->n}}</h3>
						@endforeach
						<p>/year</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Sales</h4>
						@foreach($sale as $key => $cate)
						<h3>{{$cate->n}}</h3>
						@endforeach
						<p>/year</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Orders</h4>
						@foreach($order as $key => $cate)
						<h3>{{$cate->n}}</h3>
						@endforeach
						<p>/year</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="row">
			
		</div>
		<div class="agil-info-calendar">
		<!-- calendar -->
		
		<!-- //calendar -->
		
			<div class="clearfix"> </div>
		</div>
			<!-- tasks -->
			<div class="agile-last-grids">
				
				<div class="col-md-6 agile-last-left agile-last-middle">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Revenue</h3>
						</div>
						<div id="graph8"></div>
						<script>
						/* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
						var day_data = [
							@foreach($tien as $key => $cate)
						  {"period": "2022-{{$cate->month}}", "licensed": {{$cate->num}}, },
						  @endforeach
						  
						];
						Morris.Bar({
						  element: 'graph8',
						  data: day_data,
						  xkey: 'period',
						  ykeys: ['licensed', 'sorned'],
						  labels: ['Licensed','VNĐ' ],
						  xLabelAngle: 60
						});
						</script>
					</div>
				</div>
				<div class="col-md-6 agile-last-left agile-last-right">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>Quantity</h3>
						</div>
						<div id="graph9"></div>
						<script>
						var day_data = [
							@foreach($soluong as $key => $cate)
						  {"elapsed": "2022-{{$cate->month}}", "value": {{$cate->num}}},
						  @endforeach
						  // {"elapsed": "0", "value": 0}
						];
						Morris.Line({
						  element: 'graph9',
						  data: day_data,
						  xkey: 'elapsed',
						  ykeys: ['value'],
						  labels: ['value'],
						  parseTime: false
						});
						</script>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		<!-- //tasks -->
		<div class="col-md-12 agile-calendar " style="margin: 50px 10px;">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<div class="agileits-w3layouts-stats">
					
					
					<div class="clearfix"> </div>
				</div>
@endsection