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
        /**
         * This method add the given office to the db
         * 
         * @param office
         * @param callback function
         */
    this.add = function(office, callback) {
        office.controller = 'Office';
        office.action = 'Add';
        $http({
            method: 'POST',
            data: $.param(office),
            url: window.location.origin + '/api/api.php',
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