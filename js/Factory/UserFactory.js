/**
 * Factory
 */
angular.module( 'app' ).factory( 'Factory_Countries', function( $http ) {

    this.register: function( callback ) {
            $http.get( 'countries.json' ).success( callback );
        },
        this.find: function( user, callback ) {

        },
        this.findById: function( id, callback ) {

        },
        this.login: function


} );
