"use strict";

// Class definition
var KTFlotchartsDemo = function() {

    // Private functions


    var demo3 = function() {
        // horizontal bar chart:

        var data1 = [
            [10, 10],
            [20, 20],
            [30, 30],
            [40, 40],
            [50, 50]
        ];

        var options = {
            colors: [KTApp.getSettings()['colors']['theme']['base']["primary"]],
            series: {
                bars: {
                    show: true
                }
            },
            bars: {
                horizontal: true,
                barWidth: 6,
                lineWidth: 0, // in pixels
                shadowSize: 0,
                align: 'left'
            },
            grid: {
                tickColor: "#eee",
                borderColor: "#eee",
                borderWidth: 1
            }
        };

        $.plot($("#chart_3"), [data1], options);
    }




    var demo4 = function() {
        // horizontal bar chart:

        var data1 = [
            [10, 10],
            [20, 20],
            [30, 30],
            [40, 40],
            [50, 50]
        ];

        var options = {
            colors: [KTApp.getSettings()['colors']['theme']['base']["primary"]],
            series: {
                bars: {
                    show: true
                }
            },
            bars: {
                horizontal: true,
                barWidth: 6,
                lineWidth: 0, // in pixels
                shadowSize: 0,
                align: 'left'
            },
            grid: {
                tickColor: "#eee",
                borderColor: "#eee",
                borderWidth: 1
            }
        };

        $.plot($("#chart_4"), [data1], options);
    }



    return {
        // public functions
        init: function() {
            demo3();
            demo4();
        }
    };
}();

jQuery(document).ready(function() {
    KTFlotchartsDemo.init();
});
