    <!DOCTYPE html>

 <html>  

  <head>  

       <title>PHP AngularJS populate dynamic dropdown example - ItSolutionStuff.com</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

  </head>  


  <body>  
      <div class="container" style="width:500px;">  

          <h3 align="center">PHP AngularJS populate dynamic dropdown example - ItSolutionStuff.com</h3>  

          <br />  

          <div ng-app="myapp" ng-controller="usercontroller" ng-init="loadCompetencia()">  

             <select name="competencia" ng-model="competencia" class="form-control" ng-change="loadTecnica()">  

                  <option value="">Select competencia</option>  

                  <option ng-repeat="competencia in competencias" value="{{competencia.idcompetencia}}">{{competencia.nombre}}</option>  

             </select>  

             <br />  

             <select name="tecnica" ng-model="tecnica" class="form-control">  

                  <option value="">Select tecnica</option>  

                  <option ng-repeat="tecnica in tecnicas" value="{{tecnica.idtecnica}}">  

                       {{tecnica.nombre}}  

                  </option>  

             </select>  

          </div>  

     </div>  
        </body>  

 </html>  
 <script>  

 var app = angular.module("myapp",[]);  


 app.controller("usercontroller", function($scope, $http){  


      $scope.loadCompetencia = function(){  

           $http.get("load_competencia.php")  

           .success(function(data){  

                $scope.competencias = data;  

           })  

      }  


      $scope.loadTecnica = function(){  

           $http.post("load_tecnica.php", {'idcompetencia':$scope.competencia})  

           .success(function(data){  

                $scope.tecnicas = data;  

           });  

      }  


 });  


 </script>