
var app = angular.module("app", ["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
	.when("/",{
		templateUrl: "home-dashboard.php"
	})
	.when("/profile",{
		templateUrl: "dashboard-profile.php"
	})
	.when("/dodaj",{
		templateUrl: "dodaj-sastanak.php"
	})
});
