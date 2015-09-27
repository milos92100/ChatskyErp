/**
 * Add office voew controller
 * 
 * @author Milos Stojanovic
 * @email milos92100@gmail.com
 * @category Controlller
 * @version 1.0
 */
admin.controller('addOfficeCtrl', ['$scope', '$http', 'OfficeService', '$routeParams',
    function($scope, $http, OfficeService, $routeParams) {
        $scope.office = {
            number: 0,
            name: "",
            description: "",
            surface: 0
        };
        // console.log($routeParams.user_id);
        // UserService.getById($routeParams.user_id, function(data) {
        //         if (data.success) {
        //             $scope.user = data.data.user;
        //         } else {
        //             bootbox.alert("User with the id (" + $routeParams.user_id + ") was not found");
        //             location.href = '#/offices';
        //         }
        //     })
        /**
         * 
         */
        $scope.save = function() {
            try {
                if ($scope.office.number < 1 || $scope.office.name == "" || $scope.office.description == "" || $scope.office.surface < 1) {
                    throw new Error("Fill all fields");
                }
                OfficeService.add($scope.office, function(data) {
                    if (data.success) {
                        bootbox.alert(data.msg);
                        location.href = '#/offices';
                    } else {
                        bootbox.alert(data.msg);
                    }
                })
            } catch (e) {
                $scope.reset;
                alert(e.message);
            }
        }
        $scope.reset = function() {
            $scope.reset;
        }
    }
]);