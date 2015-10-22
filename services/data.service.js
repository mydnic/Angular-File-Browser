(function (){
    'use strict';

    angular
        .module('app')
        .factory('fileService', FileService);


    function FileService($http) {

        return {
            getAll: getAll,
        };

        ///

        function getAll(folder) {
            return $http.get('scripts/scanFiles.php', {
                params: {
                    folder: folder,
                }
            })
            .then(getComplete);

            function getComplete(response) {
                return response.data;
            }
        }

    }

})();