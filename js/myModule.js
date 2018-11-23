var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Activa", {
				templateUrl:"partials/Activa.php",
				controller:"activaCtrl"
		})
		.when("/Actualizate", {
				templateUrl:"partials/Actualiza.php",
				controller:"mainCtrl"
		})
        .when("/Usuario-exito", {
				templateUrl:"partials/Exito.php",
				controller:"mainCtrl"
		})
    .when("/Usuario-competencia", {
				templateUrl:"partials/usuariocompetencia.php",
				controller:"mainCtrl"
		})
    .when("/Usuario-habilidad", {
				templateUrl:"partials/usuariohabilidad.php",
				controller:"mainCtrl"
		})
		.otherwise({
				templateUrl:"partials/main.php",
				controller:"mainCtrl"
		});
});

