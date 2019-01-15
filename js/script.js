

(function(angular) {
  'use strict';
var myApp = angular.module('staticSelect', []);
  myApp.controller('EnergyController', ['$scope', function($scope) {
    $scope.data = {
     energySelect: null
    };
	$scope.zoneinfos = [{zone: 'Eastern', rate: '17.22', check:''}, 
	{zone: 'East Midlands', rate: '16.95', check:''},
	{zone: 'London', rate: '16.26', check:'selected="selected"'},
	{zone: 'Merseyside/North Wales', rate: '18.87', check:''},
	{zone: 'North East England', rate: '17.29', check:''},
	{zone: 'North West England', rate: '17.38', check:''},
	{zone: 'Northern Scotland', rate: '18.06', check:''},
	{zone: 'Southern Scotland', rate: '17.06', check:''},
	{zone: 'South East England', rate: '17.65', check:''},
	{zone: 'Southern England', rate: '16.67', check:''},
	{zone: 'South Wales', rate: '18.09', check:''},
	{zone: 'South West England', rate: '18.36', check:''},
	{zone: 'West Midlands', rate: '16.94', check:''},
	{zone: 'Yorkshire', rate: '16.89', check:''}
];
$scope.dailyval = 8;
$scope.roomval = 10;
$scope.matval = 0.1;
$scope.zoneinfos.rate = 15;

$scope.matname = "Heating Mat for tiles, stone and glued floorings 100 W/m²";



$scope.SwitchFunction = function (matval){
	switch($scope.matval){
		case 0.1:
		$scope.matname = "Heating Mat for tiles, stone and glued floorings 100 W/m²";
		return $scope.matname;
		break;
		case 0.15000000000000001:
		$scope.matname = "Heating Mat for tiles, stone and glued floorings 150 W/m²";
		return $scope.matname;
		break;
		case 0.16:
		$scope.matname = "Heating Mat for tiles, stone and glued floorings 160 W/m²";
		return $scope.matname;
		break;
		case 0.2:
		$scope.matname = "Heating Mat for tiles, stone and glued floorings 200 W/m²";
		return $scope.matname;
		break;
		case 0.08:
		$scope.matname = "Heating Mat for dry installation floorings: wooden, carpet, PVC 80 W/m²";
		return $scope.matname;
		break;
		case 0.15:
		$scope.matname = "Heating Mat for dry installation floorings: wooden, carpet, PVC 150 W/m²";
		return $scope.matname;
		break;
		default:
		$scope.matname = "Heating Mat for tiles, stone and glued floorings";
		return $scope.matname;
		break;
	}
};


 }]);
})(window.angular);





