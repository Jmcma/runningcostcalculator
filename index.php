<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//code.angularjs.org/snapshot/angular.min.js"></script>
  <meta charset="utf-8">
  <title>Running Cost Calculator for electric heating mats</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <script src="js/script.js"></script>
</head>
<body > 
<div class="text-container-costs">
<h3>Calculates the approximate costs of heating a room</h3>
<span>This calculator shall give you a rough idea about the running costs for your electric underfloor heating system. </span>
<span>Please be aware that the power consumption of an electric underfloor heating is depending on many factors (e.g. heat loss of your room) which we are not able to influence – therefore we will not be held responsible if your electric heating mat or heating cable needs more or less power than calculated on this page. </span>
<p></p>
<span>For the installation of any electric underfloor heating system we always recommend to use <a alt="insulation boards" href="https://www.warmfloor24.co.uk/all-products-1/insulation-boards.html" target="_blank">insulation boards</a> which can lead to a significant reduction of you running costs by as much as 50%. </span>
<span>Still confused? Call us <a href="https://www.warmfloor24.co.uk/call-us" target="_blank">02037 692251</a> or send us a mail <a href="mailto:sales@warmfloor24.co.uk">sales@warmfloor24.co.uk</a>. Our experts are always pleased to help you.</span>
<p></p>
</div> 
<div class="calculator-container" ng-controller="EnergyController" ng-app="staticSelect">
	<div class="room-size-container">
		<h4 class="room-size-title">Room Size:</h4>
		<input type="number" id="input_room_size_custom" ng-model="roomval" ng-value="10"  >
		<span>m²</span>
	</div>
	<div class="daily-use-container">
		<h4 class="daily-use-title">Daily Usage:</h4>
		<input type="number" id="daily_usage_custom"  min="1" max="24"   ng-model="dailyval" ng-value="8" >
		<span>hours</span>
	</div>
	<div class="energy-cost-container">
		<h4 class="energy-cost-title"> Energy Costs:</h4>
		<input type="number" id="energySelect" min="0"  value="10" ng-model="zoneinfos.rate" ng-value="15" >
		<span>pence/kW</span>
	</div>
	<div class="product-container-big"  >
		<div class="product-container-small">
			<label>
			<input type="radio" name="product_values" id="A1" class="product-values-radio ng-untouched ng-valid ng-dirty ng-not-empty ng-valid-parse" ng-model="matval" ng-value="0.1" data-name="mat100">
			<img src="img/heating-mat-100-small.jpg" alt="heating mat 100w/m"  title="heating mat 100w/m" class="product-img-radio" ng-click="SwitchFunction(0.1)"/>
			</label>
			<span>Heating Mat for tiles, stone and glued floorings 100 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underfloorheating-100.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
		<div class="product-container-small">
			<label>
			<input type="radio" name="product_values" id="A2" class="product-values-radio" ng-model="matval" ng-value="0.15000000000000001" data-name="mat150">
			<img src="img/heating-mat-150-small.jpg" alt="heating mat 150w/m" title="heating mat 150w/m" class="product-img-radio" ng-click="SwitchFunction(0.15000000000000001)"/>
			</label>
			<span>Heating Mat for tiles, stone and glued floorings 150 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underfloorheating-150.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
		<div class="product-container-small">
		    <label>
			<input type="radio" name="product_values" id="A3" class="product-values-radio" ng-model="matval" ng-value="0.16" data-name="mat160">
			<img src="img/heating-mat-160-small.jpg" alt="heating mat 160w/m" title="heating mat 160w/m" class="product-img-radio" ng-click="SwitchFunction(0.16)"/>
			</label>
			<span>Heating Mat for tiles, stone and glued floorings 160 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underfloorheating-160.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
		<div class="product-container-small">
			<label>
			<input type="radio" name="product_values" id="A4" class="product-values-radio" ng-model="matval" ng-value="0.2" data-name="mat200">
			<img src="img/heating-mat-200-small.jpg" alt="heating mat 200w/m" title="heating mat 200w/m" class="product-img-radio" ng-click="SwitchFunction(0.2)"/>
			</label>
			<span>Heating Mat for tiles, stone and glued floorings 200 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underfloorheating-200.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
		<div class="product-container-small" style="display:none;">
			<label>
			<input type="radio" name="product_values" id="A5" class="product-values-radio" ng-model="matval" ng-value="0.08" data-name="alu80">
			<img src="img/80alu.jpg" class="product-img-radio" ng-click="SwitchFunction(0.08)"/>
			</label>
			<span>Heating Mat for dry installation floorings: wooden, carpet, PVC 80 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underwoodheating-150.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
		<div class="product-container-small">
			<label>
			<input type="radio" name="product_values" id="A6" class="product-values-radio" ng-model="matval" ng-value="0.15" data-name="alu150">
			<img src="img/aluminium-heating-mat-150-small.jpg" alt="aluminium heating mat 150w/m" title="aluminium heating mat 150w/m" class="product-img-radio" ng-click="SwitchFunction(0.15)"/>
			</label>
			<span>Heating Mat for dry installation floorings: wooden, carpet, PVC 150 W/m²</span></br><a href="https://www.warmfloor24.co.uk/electric-underwoodheating-150.html" target="_parent"><span>more info</span></a>
			<hr />
		</div>
	</div>
	<div class="results-container">
		<div id="result" class="" data-element="scrollfollow" style="">
			<h4>Estimated Running Cost</h4>
			<table>
				<tbody>
				<tr><td colspan="2"><b>Product Name</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left">{{SwitchFunction(matval)}}</td></tr>
				<tr><td colspan="2"><b>Product Rate</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left"><b>{{matval*1000 | number : 0}}</b> W/m<sup>2</sup></td></tr>
				<tr><td colspan="2"><b>Room Size</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left"><b>{{roomval}}</b> m<sup>2</sup></td></tr>
				<tr><td colspan="2"><b>Energy Price</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left"><b>{{zoneinfos.rate}}</b> pence/kW</td></tr>
				<tr><td colspan="2"><b>Daily Usage</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left"><b>{{dailyval}}</b> hour/s</td></tr>
				<tr><td colspan="2"><b>Costs</b></td></tr>
				<tr class="border_bottom"><td colspan="2" align="left"><b>{{(zoneinfos.rate*matval*dailyval*roomval)*0.01 | number : 2}} pounds</b> <small>per selected daily usage</small></td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>