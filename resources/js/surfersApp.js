angular.module('surfersApp', [ngAnimate], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
});

angular.module('surfersApp')
.controller('TableForn', function($scope) {

});