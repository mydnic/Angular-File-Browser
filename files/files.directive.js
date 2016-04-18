(function() {
    'use strict';
    
    angular
        .module('app')
        .directive('fileList', fileList);

    function fileList() {
        // Runs during compile
        return {
            restrict: 'A',
            templateUrl: 'files/FileList.html',
            controller: 'FileController',
            controllerAs: 'file',
        };
    }
})();
