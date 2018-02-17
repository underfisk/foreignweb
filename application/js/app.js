
var templateApp = angular.module("tmpApp",["ngRoute"])
.constant('app_url', window.location.origin+window.location.pathname + 'application/')
.constant('base_url',window.location.origin+window.location.pathname)
	.config(function($routeProvider,base_url){
		$routeProvider
		.when("/home", {
			templateUrl: base_url + 'home'
			//clearConsole
		})
		.when("/register", {
			templateUrl: base_url + 'register',
			controller: "scrollToTop"
			//controller: "clearConsole"
		})
		.when("/login", {
			templateUrl: base_url + 'login',
			controller: "scrollToTop"
			//controller: "clearConsole"
		})
		.otherwise({
			//if we don't have nothing we just call the home page to protect
			templateUrl:  base_url + 'home'
			//controller: "clearConsole" use this to clear console as a callback
		});
	});

templateApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});

templateApp.config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    // Solução para os objetos aparecerem no $_POST, ou isso ou $httpParamSerializer direto no $http
    $httpProvider.interceptors.push(['$q', function($q) {
        return {
            request: function(config) {
                if (config.data && typeof config.data === 'object') {
                    config.data = $.param(config.data);
                }
                return config || $q.when(config);
            }
        };
    }]);
}]);

/*
* Retrieves the notices 
*/
templateApp.controller('notices-section', function($scope, $http, base_url){
	$http.get(base_url + 'Main/ajaxNotices')
	.then(function(response){
		$scope.data = response.data;
	});
	//after ajax we loop the information in the div element
});

//This filter sets the content safe in the scope and renders as HTML and not by text
templateApp.filter('unsafe', function($sce) {
	return function(val) {
		return $sce.trustAsHtml(val);
	};
});
	

var homeApp = angular.module('homeApp',[])
.constant('base_url',window.location.origin+window.location.pathname);

var registerApp = angular.module("registerApp",[]);
var loginApp = angular.module("loginApp",[]);


templateApp.controller("scrollToTop", function($location,$anchorScroll){
	$location.hash('top');
	$anchorScroll();
});

templateApp.controller("clearConsole", function($scope){
			console.clear();
});


//This is the controller to retrieve slides data only
homeApp.controller("featured-slides", function($scope, $http){
	$http.get("the url here")
	.then(function(response){
		$scope.slides = response.data.slides; //slides is the name of the json array
	});
});





//Login controller
loginApp.controller("login-form", function($scope, $http){
	$scope.submitForm = function(){
		$http({
			method: "POST",
			url: "URL HERE",
			data: {
				"usr" : $scope.username,
				"pwd" : $scope.password
			},
			headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
		}).then(function(response){
			//on sucess
		},function(response){
			//on error
		});
	}
});

