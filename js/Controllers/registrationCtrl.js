angular.module('app').controller('registrationCtrl', ['$scope', '$http', 'UserService', function($scope, $http, UserService) {
    $scope.user = {};
    $scope.reset = function() {
        $scope.reset();
    }
    $scope.save = function() {
        try {
            validate();
            UserService.register($scope.user, function(data) {
                alert(data.msg);
                if (data.success) {
                    location.href = '#/login';
                }
            }, function(data) {
                alert(data.msg);
            });
        } catch (e) {
            $scope.reset;
            alert(e.message);
        }
    }
    validate = function() {
        if ($scope.user.password != $scope.user.repeat_password) {
            throw new Error("The passwords are not matching");
        }
    }
}]);