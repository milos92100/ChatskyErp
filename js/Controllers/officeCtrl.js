admin.controller('officeCtrl', ['$scope', '$http', 'OfficeService',
    function($scope, $http, OfficeService) {
        $scope.offices = [];
        OfficeService.getOffices(function(data) {
            if (data.success) {
                $scope.offices = data.data.rows;
            } else {
                alert(data.msg);
            }
        });
        /**
         * This method is called when the remove button is clicked.
         * 
         * @param User user
         */
        $scope.remove = function(office) {
                bootbox.confirm("Confirm deleteing  " + office.name + " ( " + office.number + " ) ", function(res) {
                    if (res) {
                        OfficeService.remove(office, function(data) {
                            if (data.success) {
                                bootbox.alert("Office " + office.name + " ( " + office.number + " ) " + " removed");
                                removeById(office.id);
                            } else {
                                bootbox.alert(data.msg);
                            }
                        });
                    }
                });
            }
            /**
             * This method is called when the edit button is clicked
             * 
             * @param User user
             */
        $scope.edit = function(user) {
               // location.href = '#/edit_user/' + user.id;
            }
            /**
             * @param uid
             */
        removeById = function(uid) {
            for (var i = 0; i < $scope.offices.length; i++) {
                if ($scope.offices[i].id == uid) {
                    $scope.offices.splice(i, 1);
                    break;
                }
            }
        };
    }
]);