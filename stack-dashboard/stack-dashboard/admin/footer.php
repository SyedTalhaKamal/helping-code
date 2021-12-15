
<!-- ///////////////////////////////////////////////////////////////s/////////////--> 

<!-- BEGIN VENDOR JS--> 
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="app-assets/vendors/js/vendors.min.js" ></script> 
<script src="app-assets/js/core/app-menu.js" ></script> 
<script src="app-assets/js/core/app.js" ></script> 
<script src="app-assets/js/scripts/customizer.js" ></script> 
<script src="assets/js/jquery.repeater.min.js" ></script> 
<script src="assets/js/form-repeater.js" ></script> 
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="app-assets/vendors/js/charts/echarts/echarts.js" ></script> 
<script src="app-assets/vendors/js/extensions/moment.min.js" ></script> 
<script src="app-assets/js/scripts/modal/components-modal.js" ></script> 
<script src="./assets/js/intlTelInput.js"></script> 
<script src="assets/js/function.js" ></script> 
<script>
    $( document ).ready(function() {


        $( ".confirm-icon" ).click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(".confirm-input");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        });

        $( ".enter-icon" ).click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(".enter-input");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        });

        $( ".current-icon" ).click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(".current-input");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        });


    });

</script>
<script>
</script>
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 
<!-- END PAGE VENDOR JS--> 
<!-- BEGIN STACK JS--> 
<script>
        // Set paths
        // ------------------------------

        require.config({
            paths: {
                echarts: 'app-assets/vendors/js/charts/echarts'
            }
        });


        // Configuration
        // ------------------------------

        require(
            [
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/chart/scatter',
                'echarts/chart/pie'
            ],


            // Charts setup
            function(ec) {

                // Initialize chart
                // ------------------------------
                var myChart = ec.init(document.getElementById('column-chart'));

                // Chart Options
                // ------------------------------
                chartOptions = {

                    // Setup grid
                    grid: {
                       x: 60,
                        x2: 60,
                        y: 45,
                        y2: 25
                    },

                    // Add tooltip
                    tooltip: {
                        trigger: 'axis'
                    },

                    // Add legend

                    // Add custom colors
                    color: ['#00498B', '#2e5eb6', '#11b04f'],

                    // Enable drag recalculate
                    calculable: true,

                    // Horizontal axis
                    xAxis: [{
                        type: 'category',
                        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                    }],

                    // Vertical axis
                    yAxis: [{
                            type: 'value',
                            // name: 'Water',
                            axisLabel: {
                                formatter: '{value} K'
                            }
                        },
                        {
                            type: 'value',
                            name: 'Temperature',
                            axisLabel: {
                                formatter: '{value} °C'
                            }
                        }
                    ],

                    // Add series
                    series: [{
                            name: 'Evaporation',
                            type: 'bar',
                            data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
                        },
                        {
                            name: 'Precipitation',
                            type: 'bar',
                            data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
                        },
                        
                    ]
                };

                // Apply options
                // ------------------------------

                myChart.setOption(chartOptions);


                // Resize chart
                // ------------------------------

                $(function() {

                    // Resize chart on menu width change and window resize
                    $(window).on('resize', resize);
                    $(".menu-toggle").on('click', resize);

                    // Resize function
                    function resize() {
                        setTimeout(function() {

                            // Resize chart
                            myChart.resize();
                        }, 200);
                    }
                });
            }
        );

    </script>
</body>
</html>