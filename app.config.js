(function (){
    'use strict';
    
    angular
        .module('app')
        .config(config);

    function config($stateProvider) {
        // Routes
        $stateProvider
            .state('index', {
                url: '',
                controller: 'FileController as file',
                templateUrl: 'files/show.html'
            })
            .state('f', {
                url: '/f/?{folder}',
                controller: 'FileController as file',
                templateUrl: 'files/show.html'
            });
    }

})();