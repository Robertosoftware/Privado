var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
		.when("/Categoria-editar", {
				templateUrl:"partials/admin/CRUD/categoria-crud/categoria-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Ingles", {
				templateUrl:"partials/admin/CRUD/ingles-crud/ingles.php",
				controller:"ofertaCtrl"
		})
    .when("/Ingles-editar", {
				templateUrl:"partials/admin/CRUD/ingles-crud/ingles-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Subcategoria", {
				templateUrl:"partials/admin/CRUD/subcategoria-crud/subcategoria.php",
				controller:"ofertaCtrl"
		})
    .when("/Subcategoria-edita", {
				templateUrl:"partials/admin/CRUD/subcategoria-crud/subcategoria-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Localidad", {
				templateUrl:"partials/admin/CRUD/localidad-crud/localidad.php",
				controller:"ofertaCtrl"
		})
    .when("/Localidad-editar", {
				templateUrl:"partials/admin/CRUD/localidad-crud/localidad-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Horario", {
				templateUrl:"partials/admin/CRUD/horario-crud/horario.php",
				controller:"ofertaCtrl"
		})
    .when("/Horario-editar", {
				templateUrl:"partials/admin/CRUD/horario-crud/horario-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Educacion", {
				templateUrl:"partials/admin/CRUD/educacion-crud/educacion.php",
				controller:"ofertaCtrl"
		})
    .when("/Educacion-editar", {
				templateUrl:"partials/admin/CRUD/educacion-crud/educacion-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Sexo", {
				templateUrl:"partials/admin/CRUD/sexo-crud/sexo.php",
				controller:"ofertaCtrl"
		})
    .when("/Sexo-editar", {
				templateUrl:"partials/admin/CRUD/sexo-crud/sexo-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Competencia", {
				templateUrl:"partials/admin/CRUD/competencia-crud/competencia.php",
				controller:"ofertaCtrl"
		})
    .when("/Competencia-editar", {
				templateUrl:"partials/admin/CRUD/competencia-crud/competencia-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Tecnica", {
				templateUrl:"partials/admin/CRUD/tecnica-crud/tecnica.php",
				controller:"ofertaCtrl"
		})
    .when("/Tecnica-editar", {
				templateUrl:"partials/admin/CRUD/tecnica-crud/tecnica-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Empresa", {
				templateUrl:"partials/admin/CRUD/empresa-crud/empresa.php",
				controller:"ofertaCtrl"
		})
    .when("/Empresa-editar", {
				templateUrl:"partials/admin/CRUD/empresa-crud/empresa-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Usuarios", {
				templateUrl:"partials/admin/CRUD/usuarios-crud/usuarios.php",
				controller:"ofertaCtrl"
		})
    .when("/Trabajo", {
				templateUrl:"partials/admin/CRUD/trabajo-crud/trabajo.php",
				controller:"ofertaCtrl"
		})
    .when("/Usuarios-editar", {
				templateUrl:"partials/admin/CRUD/usuarios-crud/usuarios-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Trabajo-editar", {
				templateUrl:"partials/admin/CRUD/trabajo-crud/trabajo-editar.php",
				controller:"ofertaCtrl"
		})
    .when("/Categoria", {
				templateUrl:"partials/admin/CRUD/categoria-crud/categoria.php",
				controller:"ofertaCtrl"
		})
		.when("/Oferta", {
				templateUrl:"partials/admin/oferta.php",
				controller:"ofertaCtrl"
		})
        .when("/Ofertatrabajo", {
        templateUrl:"partials/admin/ofertacompetencia.php",
				controller:"ofertaCtrl"
		}) 
        .when("/Ofertahab", {
        templateUrl:"partials/admin/ofertahabilidad.php",
				controller:"ofertaCtrl"
		})
     .when("/Ofertaexito", {
        templateUrl:"partials/admin/ofertaexito.php",
				controller:"ofertaCtrl"
		}) 
		.otherwise({
				templateUrl:"partials/admin/main-admin.php",
				controller:"mainCtrl"
		});
});

