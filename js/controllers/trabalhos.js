angular.module('thiagorodrigues').controller('TrabalhosController', function($scope, $http){
	
	$scope.projetos = [
		{
			titulo:'Cliente 1',
			url:'https://getuikit.com/v2/docs/images/placeholder_600x400.svg'
		},
		{
			titulo:'Cliente 2',
			url:'https://getuikit.com/v2/docs/images/placeholder_600x400.svg'
		},
		{
			titulo:'Cliente 3',
			url:'https://getuikit.com/v2/docs/images/placeholder_600x400.svg'
		}
	]

});