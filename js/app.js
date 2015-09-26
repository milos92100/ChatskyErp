var app = angular.module( 'app', [ 'ngRoute' ] );

app.config( function( $routeProvider ) {

    $routeProvider.when( '/', {
        templateUrl: './view/public/login.html',
        controller: 'loginCtrl'
    } ).
    when( '/login', {
            templateUrl: './view/public/login.html',
            controller: 'loginCtrl'

        } )
        .when( '/registration', {
            templateUrl: './view/public/registration.html',
            controller: 'registrationCtrl'
        } )
        .otherwise( {
            redirectTo: '/'
        } );

} );
