(function (){
    'use strict';
    
    angular
        .module('app')
        .directive('fileList', fileList);

    function fileList() {
        // Runs during compile
        return {
            restrict: 'EA', // E = Element, A = Attribute, C = Class, M = Comment
            templateUrl: 'files/FileList.html',
            controller: 'FileController',
            controllerAs: 'file',
        };
    }

})();