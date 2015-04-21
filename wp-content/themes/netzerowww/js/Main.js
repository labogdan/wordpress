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
/*        	$('#cartPopover').popover({
        		'placement' : 'bottom',
        		'html' : true,
        		'animation' : true,
        		'template' : '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
        		'content' : '<button class="">hello</button>',
        		'title' : 'SUMMARY'
        	});*/
        });
    };
    
    var oPublic = {
        init : init    
    };
    return oPublic;
    
}();
