angular.module('nzVoice')
    .filter('to_trusted', to_trusted)
    .filter('style_price', style_price);

to_trusted.$inject = ['$sce'];

function to_trusted($sce) {
        return function (text) {
            return $sce.trustAsHtml(text);
    };
};

function style_price() {
    return function (text) {
        return '$' + parseInt(text);
    };
};
