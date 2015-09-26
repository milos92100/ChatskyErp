/**
 * This class represents a user service.
 * 
 * @author Milos Stojanovic
 * @email milos92100@gmail.com
 * @category Service
 * @version 1.0
 */
angular.module('app').service('UserService', function($http) {
    /**
     * This method inserts the given user in the database.It exevutes a ajax
     * request and handles the response. The marameters are the user for the
     * registration and the callback functions for the ajax request.
     * 
     * @param user
     * @param callbackOK
     * @param callbackError
     */
    this.register = function(user, callbackOK, callbackError) {
            user.controller = 'User';
            user.action = 'add';
            $http({
                method: 'POST',
                url: window.location.origin + '/api/api.php',
                data: $.param(user),
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }).success(function(data, status, headers, config) {
                if (typeof(callbackOK) != 'undefined') {
                    callbackOK(data)
                }
            }).error(function(data, status, headers, config) {
                if (typeof(callbackError) != 'undefined') {
                    callbackError(data)
                }
            });
        },
        /**
         * [find description]
         * 
         * @param {Object} user
         * @param {Function} callback
         * @return {void}
         */
        this.find = function(user, callback) {},
        /**
         * 
         */
        this.getById = function(user_id, callback) {
            $http({
                method: 'POST',
                data: $.param({
                    user_id: user_id,
                    controller: 'User',
                    action: 'getById',
                }),
                url: window.location.origin + '/api/api.php',
                controller: 'User',
                action: 'getById',
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
        },
        /**
         * Removes a user with the givne id. s
         * 
         * @param int id
         * @param function callback
         */
        this.remove = function(user, callback) {
            user.controller = 'User';
            user.action = 'Delete';
            $http({
                method: 'POST',
                data: $.param(user),
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
        /**
         * This method takes ll user form the table, and passes them to the callback
         * function.
         * 
         * @param function callback
         */
    this.getUsers = function(callback) {
            $http({
                method: 'POST',
                url: window.location.origin + '/api/api.php',
                data: $.param({
                    entity: 'User',
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
         * This method initializes the login of the user. The result is passed to
         * the callback function
         * 
         * @param string username
         * @param string password
         * @param function callback
         */
    this.login = function(dusername, dpassword, callback) {
            $http({
                method: 'POST',
                url: window.location.origin + '/api/api.php',
                data: $.param({
                    username: dusername,
                    password: dpassword,
                    controller: 'User',
                    action: 'Login',
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
         * This method initializes the logut of the user.
         * 
         * @param function callback
         * 
         */
    this.logOut = function(callback) {
        $http({
            method: 'POST',
            url: window.location.origin + '/api/api.php',
            data: $.param({
                controller: 'User',
                action: 'Logout',
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
    this.getLogedInUser = function(callback) {
            $http({
                method: 'POST',
                url: window.location.origin + '/api/api.php',
                data: $.param({
                    controller: 'User',
                    action: 'GetLogedInUser',
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
         * This method saves the edited user data.
         * 
         * @param user
         * @param callback function
         */
    this.saveUserData = function(user, callback) {
        user.controller = 'User';
        user.action = 'Update';
        $http({
            method: 'POST',
            data: $.param(user),
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