/*********************************************************************************************
 *                                                                                           *
 *           Main hook for everything js.                                                    *
 *                                                                                           *
 ********************************************************************************************/

if (typeof $ == 'undefined') $ = jQuery;

var Main = Main || function () {
    
    'use strict';
    
    var init = function () {
        $(document).ready(function () {
            
        });
    };
    
    var oPublic = {
        init : init    
    };
    return oPublic;
    
}();
