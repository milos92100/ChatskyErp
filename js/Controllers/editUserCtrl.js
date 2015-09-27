/**
 * Edit user view controller
 * 
 * @author Milos Stojanovic
 * @email milos92100@gmail.com
 * @category Controlller
 * @version 1.0
 */
admin.controller('editUserCtrl', ['$scope', '$http', 'UserService', '$routeParams',
    function($scope, $http, UserService, $routeParams) {
        $scope.user = {};
       

       console.log($routeParams.user_id);

        UserService.getById($routeParams.user_id, function(data) {
                if (data.success) {
                    $scope.user = data.data.user;
                } else {
                    bootbox.alert("User with the id (" + $routeParams.user_id + ") was not found");
                    location.href = '#/users';
                }
            })
            /**
             * 
             */
        $scope.save = function() {
            UserService.saveUserData($scope.user, function(data) {
                if (data.success) {
                    bootbox.alert(data.msg);
                    location.href = '#/users';
                } else {
                    bootbox.alert(data.msg);
                }
            })
        }
    }
]);