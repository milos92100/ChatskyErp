var admin = angular.module('app', ['ngRoute', 'ui.bootstrap', 'dialogs']);
admin.controller('headerCtrl', ['$scope', '$http', 'UserService',
    function($scope, $http, UserService) {
        /**
         * [logOutClick description]
         * 
         * @return {[type]} [description]
         */
        $scope.logOutClick = function() {
            UserService.logOut(function(data) {
                location.reload();
            })
        };
        $scope.user = {};
        /**
         * [getLogedInUser description]
         * 
         * @return {[type]} [description]
         */
        getLogedInUser = function() {
            UserService.getLogedInUser(function(data) {
                if (data.success) {
                    $scope.user = data.data.user;
                } else {
                    location.reload();
                }
            })
        };
        getLogedInUser();
    }
])
admin.config(function($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'users.html',
        controller: 'usersCtrl'
    }).when('/users', {
        templateUrl: 'users.html',
        controller: 'usersCtrl'
    }).when('/edit_user/:user_id', {
        templateUrl: 'user_edit.html',
        controller: 'editUserCtrl'
    }).when('/offices', {
        templateUrl: 'offices.html',
        controller: 'officeCtrl'
    }).otherwise({
        redirectTo: '/'
    });
});