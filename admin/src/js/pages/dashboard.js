//[Dashboard Javascript]

//Project:	CRMi - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function() {

    'use strict';


    var options = {
        series: [70, 38],
        chart: {
            type: 'donut',
            height: 240,
            width: 240,
        },
        legend: {
            show: false,
        },
        dataLabels: {
            enabled: false,
        },
        plotOptions: {
            pie: {
                customScale: 0.90,
                donut: {
                    size: '80%',
                    labels: {
                        show: true,
                        total: {
                            showAlways: true,
                            show: true,
                        }
                    }
                },
                offsetY: 0,
            },
            stroke: {
                colors: undefined
            }
        },
        colors: ['#7047ee', '#e8e1ff'],
    };

    var chart = new ApexCharts(document.querySelector("#chart41"), options);
    chart.render();


    var analyticsBarChartOptions = {
        chart: {
            height: 194,
            type: 'bar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '40%',
                borderRadius: 3
            },
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#3596f7', '#cce5ff'],
        series: [{
            name: 'پروژه',
            data: [80, 95, 150, 210, 140, 230, 300]
        }, {
            name: 'میز',
            data: [50, 70, 130, 180, 90, 180, 270]
        }],
        xaxis: {
            categories: ['یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنج شنبه', 'جمعه', 'شنبه'],
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: '#333333'
                }
            }
        },
        yaxis: {
            min: 0,
            max: 300,
            tickAmount: 3,
            labels: {
                style: {
                    color: '#333333'
                }
            }
        },
        legend: {
            show: false,
        },
    }

    var analyticsBarChart = new ApexCharts(
        document.querySelector("#analytics-bar-chart"),
        analyticsBarChartOptions
    );

    analyticsBarChart.render();



    var analyticsBarChartOptions = {
        chart: {
            height: 228,
            type: 'bar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '45%',
                borderRadius: 3
            },
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#7047ee'],
        // Value of course in dashboard
        series: [{
            name: 'تعداد',
            data: [8, 9, 15, 21, 34, 43, 50, 68, 76, 85, 99, 100]
        }],
        xaxis: {
            categories: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر ', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: '#333333'
                }
            }
        },
        yaxis: {
            min: 0,
            max: 100,
            tickAmount: 3,
            labels: {
                style: {
                    color: '#333333'
                }
            }
        },
        legend: {
            show: false,
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " عدد"
                }
            }
        }
    }

    var analyticsBarChart = new ApexCharts(
        document.querySelector("#staff_turnover"),
        analyticsBarChartOptions
    );

    analyticsBarChart.render();

















}); // End of use strict