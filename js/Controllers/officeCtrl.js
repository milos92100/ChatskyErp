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

        // /**
        //  * This method is called when the remove button is clicked.
        //  * 
        //  * @param User user
        //  */
        // $scope.remove = function(user) {
        //         bootbox.confirm("Confirm deleteing  " + user.first_name + " " + user.last_name, function(res) {
        //             if (res) {
        //                 UserService.remove(user, function(data) {
        //                     if (data.success) {
        //                         bootbox.alert("User " + user.first_name + " " + user.last_name + " removed");
        //                         removeById(user.id);
        //                     } else {
        //                         bootbox.alert(data.msg);
        //                     }
        //                 });
        //             }
        //         });
        //     }
        //     /**
        //      * This method is called when the edit button is clicked
        //      * 
        //      * @param User user
        //      */
        // $scope.edit = function(user) {
        //         location.href = '#/edit_user/' + user.id;
        //     }
        //     /**
        //      * @param uid
        //      */
        // removeById = function(uid) {
        //     for (var i = 0; i < $scope.users.length; i++) {
        //         if ($scope.users[i].id == uid) {
        //             $scope.users.splice(i, 1);
        //             break;
        //         }
        //     }
        // };
    }
]);