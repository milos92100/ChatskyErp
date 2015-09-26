angular.module('app').service('OfficeService', function($http) {
    /**
     * This method takes all offices from the table, and passes them to the callback
     * function.
     * 
     * @param function callback
     */
    this.getOffices = function(callback) {
        $http({
            method: 'POST',
            url: window.location.origin + '/api/api.php',
            data: $.param({
                entity: 'Office',
                controller: 'List',
                action: 'GetList',
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).success(function(data, status, headers, config) {
            if (typeof(callback) != 'undefined') {
                callback(data)
            }
        }).error(function(data, status, headers, config) {
            if (typeof(callback) != 'undefined') {
                callback(data)
            }
        });
    }
});