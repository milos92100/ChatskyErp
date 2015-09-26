/**
 * Login controller
 * 
 * @author Milos Stojanovic
 * @email milos92100@gmail.com
 * @category Controlller
 * @version 1.0
 */
angular.module( 'app' ).controller( 'loginCtrl', [ '$scope', '$http', 'UserService', '$location', function( $scope, $http, UserService, $location ) {

    /**
     * This method resets the form fileds.
     */
    resetForm = function() {
        $scope.password = '';
        $scope.username = '';

    };

    /**
     * This method is called when the login buttob is clicked.Int initalizes the login
     * authentication,and displayes the result.
     */
    $scope.loginClick = function() {

        try {
            var username = $scope.username != undefined ? $scope.username : '';
            var password = $scope.password != undefined ? $scope.password : '';

            if ( username == '' || password == '' ) {
                throw new Error( "Enter all fields" );
            }

            UserService.login( username, password, function( data ) {
                if ( data.success ) {
                    // bootbox.alert( data.msg );
                    window.location = data.data.path;
                } else {
                    bootbox.alert( data.msg );
                    resetForm();
                }
            } );

        } catch ( e ) {
            resetForm();
            bootbox.alert( e.message );
        }

    };

} ] );
