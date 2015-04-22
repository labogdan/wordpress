angular.module('nzVoice')
    .filter('to_trusted', to_trusted);

to_trusted.$inject = ['$sce'];

function to_trusted($sce) {
        return function (text) {
            return $sce.trustAsHtml(text);
    };
};
