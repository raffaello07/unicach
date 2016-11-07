angular.module("unicachApp").controller("BusquedaController", ['$scope', '$http', '$sanitize', function ($scope, $http, $sanitize){

	$scope.busqueda = false;
	$scope.queryInput = "";
	$scope.buscado = false;
	$scope.ultimoQuery = "";

	$scope.buscar = function(query){
		if(!$scope.buscado && (query!=="" && query!==undefined) && query.length>2){
			$scope.busqueda = true;
			$scope.buscado = true;
			$scope.ultimoQuery = query;
			$http.get("buscar/buscar.php?q="+query).success(function(data){
				$scope.results = data;
				$scope.buscado = false;
			});
		}
	};
  	$scope.cerrarBusqueda = function () {
		$scope.busqueda = false;
		$scope.queryInput = "";
		$scope.buscado = false;
		$scope.ultimoQuery = "";
	};
}]);
