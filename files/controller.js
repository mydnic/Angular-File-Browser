(function() {
    'use strict';

    angular
        .module('app')
        .controller('FileController', ['fileService', '$stateParams', FileController]);

    function FileController(fileService, $stateParams) {
        var vm = this;
        vm.files = [];
        vm.folder = $stateParams.folder;

        activate();

        function activate() {
            return getAll();
        }

        function getAll() {
            return fileService.getAll(vm.folder)
                .then(function(data) {
                    vm.files = data;
                    return vm.files;
                });
        }
    }
})();