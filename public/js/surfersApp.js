angular.module('surfersApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
});

angular.module('surfersApp')
.factory('$getDB', function($http) {
  var consultaDB = {
    async: function(route) {
      var promise = $http.get(route).then(function (response) {
        return response.data;
      	}, function(httpError) {
      		// get the error
            throw httpError.data;
      });

      return promise;
    }
  };
  return consultaDB;
})
.factory('$postDB', function($http) {
  var consultaDB = {
    async: function(route,dati) {
      var promise = $http.post(route, dati).then(function (response) {
        // The return value gets picked up by the then in the controller.
        return response.data;
      	}, function(httpError) {
      		// get the error
            throw httpError.data;
      });

      // Return the promise to the controller
      return promise;
    }
  };
  return consultaDB;
});

angular.module('surfersApp')
.controller('products', function($scope,$getDB,$postDB ) {

	angular.stringToArrayObjs = function(obj) {

		_obj = [];
		
	    angular.forEach(obj, function (val, key) {

	    	var arr = val.img.split(',');
	    	val.img = arr;
	    	_obj.push(val);
        });	

        return _obj;
	}


	angular.consultaDB = function () {

      var urlProdutos = "/produtosJ";
      var urlInsta = "/instagram";

      $getDB.async(urlProdutos).then(function(response) {
            var temp = response;
            $scope.products = angular.stringToArrayObjs(temp);
            $scope.card = temp[0];
        });


      $getDB.async(urlInsta).then(function(response) {
            var temp = response;
            $scope.instagramFeed = temp;
        });

  	}




	angular.consultaDB("/produtosJ");

	$scope.page = 1;
	$scope.destra = false;
	$scope.sinitra = false;

	$scope.formEmail = true;
	

	$scope.stringToArray = function(obj) {
		console.log(obj);
		return obj.split(',');
	}

	$scope.next = function(id) {
		$scope.destra = true;
		if ($scope.page < $scope.products.length) {
			$scope.page += 1;
			$scope.card = $scope.products[$scope.page-1];			
		}

	}

	$scope.preview = function(id) {
		if ($scope.page > 1) {
			$scope.page -= 1;
			$scope.card = $scope.products[$scope.page-1];			
		}
	}

	$scope.sendMail = function (obj){
		$postDB.async('/mail/send',obj).then(function(response) {
            var temp = response;
      });

		$scope.formEmail = false;
	}

});

