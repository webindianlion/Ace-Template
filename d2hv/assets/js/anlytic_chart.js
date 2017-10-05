



  $(function () { 

    //////////////////////   Hourly Trend Option   //////////////////////////////////////
   
    $('#hourly_trend_option').highcharts({
      chart: { type: 'spline' },
        title: { text: '' },
        xAxis: {
            categories: ['0', '1', '2', '3', '4', '5', '6', '7', '18', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23']
        },
        yAxis: {
            title: { text: 'Installs' },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: { valueSuffix: '°C' },
        series: [{
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
            name: 'Today',
            color: '#75b1eb'
        }, {
            data: [10, 4, 3, 1, 2, 4, 7,  11, 11, 24, 40, 27, 23, 13, 8, 15, 9,  12, 11, 14, 17, 21, 17],
            name: 'Yesterday',
            color: '#000000'
        }, {
            data: [ 25, 10, 10, 4, 3, 3, 8, 16, 15, 22, 39, 56, 49, 41, 25, 26, 26, 30, 26, 22, 33, 45, 48, 39],
            name: 'Last Week',
            color: '#ff8c1a'
        }]
    });


//////////////////////   Daily Cohort Option   //////////////////////////////////////
           
   
    $('#daily_cohort_option').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: ''
        },        
        xAxis: [{
            categories: ["26 Aug", "27 Aug", "28 Aug", "29 Aug", "30 Aug", "31 Aug", "1 Sep", "2 Sep", "3 Sep", "4 Sep", "5 Sep", "6 Sep", "7 Sep", "Yesterday"],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            title: {
                text: 'Active Users',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'All Events',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },        
        series: [{
            name: 'Active Users',
            type: 'column',
            yAxis: 1,
            data: [ 14381, 15637, 17095, 16343, 16294, 18855, 17006, 15465, 16964, 16350, 16940, 15709, 17593, 16447 ]       

        }, {
            name: 'All Events',
            type: 'spline',
            data: [ 992917, 69190, 73062, 73469, 70796, 99284, 83526, 77074, 78800, 79513, 85955, 78258, 106276, 88498 ]
        }]
    });
    
  
    
//////////////////////   Daily Report New user Area Chart   //////////////////////////////////////
           
   
    
     $('#dailyreport_newuser').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: [ "2016-08-14", "2016-08-15", "2016-08-16", "2016-08-17", "2016-08-18", "2016-08-19", "2016-08-20", "2016-08-21", "2016-08-22", "2016-08-23", "2016-08-24", "2016-08-25", "2016-08-26", "2016-08-27", "2016-08-28", "2016-08-29", "2016-08-30", "2016-08-31" ]
        },
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            title: {
                text: 'Active Users',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'All Events',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true,
            valueSuffix: ' units'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'Installs',
            yAxis: 1,
            data: [ 7846, 9213, 10675, 6824, 355, 168, 134, 93, 72, 70, 55, 35, 39, 36, 29, 24, 17, 26 ]
        }, {
            name: 'All Events',
            data: [ 2490, 3340, 3860, 3610, 1715, 1902, 1393, 1076, 1369, 959, 1082, 1046, 1073, 643, 560, 724, 670, 691 ]
        }]
    });
    

//////////////////////   Daily Report Activity Area Chart   //////////////////////////////////////
           
   
    
     $('#dailyreport_activity').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: [ "2016-08-14", "2016-08-15", "2016-08-16", "2016-08-17", "2016-08-18", "2016-08-19", "2016-08-20", "2016-08-21", "2016-08-22", "2016-08-23", "2016-08-24", "2016-08-25", "2016-08-26", "2016-08-27", "2016-08-28", "2016-08-29", "2016-08-30", "2016-08-31" ]
        },
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            title: {
                text: 'Active Users',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'All Events',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true,
            valueSuffix: ' units'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'Installs',
            yAxis: 1,
            data: [ 38, 56, 51, 54, 25, 28, 23, 17, 24, 23, 26, 23, 21, 9, 11, 13, 11, 13 ]
        }, {
            name: 'All Events',
            data: [ 136.11, 127.55, 114.12, 153.46, 74.4, 200.68, 369.04, 59.82, 204.83, 67.43, 129.92, 131.83, 204.71, 140, 68.36, 92.38, 157.18, 154.92 ]
        }]
    });



//////////////////////   Hourly Report New Users   //////////////////////////////////////
           
      
    $('#hourlyreport_newuser').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23' ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'Installs',
            type: 'column',
            data: [ 1591, 1128, 747, 662, 635, 841, 1416, 2251, 3145, 3976, 4772, 4844, 4154, 4022, 4077, 3575, 2957, 2455, 2415, 2178, 2158, 2434, 2160, 1656 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });
  
  
  
  
  
//////////////////////   Hourly Report Activity   //////////////////////////////////////
           
      
    $('#hourlyreport_activity').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [ '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23' ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'Installs',
            type: 'column',
            data: [ 1965, 1094, 592, 375, 266, 253, 292, 524, 768, 1136, 1580, 2098, 2350, 2749, 2602, 2308, 2425, 2112, 2317, 2481, 2577, 2537, 2499, 2512 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });




//////////////////////   Media Source Report New Users    //////////////////////////////////////
   
    $('#media_source_report_users').highcharts({
      chart: { type: 'spline' },
        title: { text: '' },
        xAxis: {
            categories: [ "2016-08-17", "2016-08-18", "2016-08-19", "2016-08-20", "2016-08-21", "2016-08-22", "2016-08-23", "2016-08-24", "2016-08-25", "2016-08-26", "2016-08-27", "2016-08-28", "2016-08-29", "2016-08-30", "2016-08-31" ]
        },
        yAxis: {
            title: { text: 'Installs' },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: { valueSuffix: '°C' },
        series: [{
            data: [ 10797, 11342, 12534, 8785, 406, 216, 159, 117, 101, 92, 70, 47, 60, 54, 46 ],
            name: 'Non Organic',
            color: '#75b1eb'
        }, {
            data: [ 2831, 2347, 2414, 1823, 942, 650, 569, 533, 528, 345, 266, 307, 268, 233, 242 ],
            name: 'Organic',
            color: '#000000'
        }]
    });
    
    
    

//////////////////////   Media Source Report Activities    //////////////////////////////////////
   
    $('#media_source_report_activity').highcharts({
      chart: { type: 'spline' },
        title: { text: '' },
        xAxis: {
            categories: [ "2016-08-17", "2016-08-18", "2016-08-19", "2016-08-20", "2016-08-21", "2016-08-22", "2016-08-23", "2016-08-24", "2016-08-25", "2016-08-26", "2016-08-27", "2016-08-28", "2016-08-29", "2016-08-30", "2016-08-31" ]
        },
        yAxis: {
            title: { text: 'Installs' },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: { valueSuffix: '°C' },
        series: [{
            data: [ 69, 94, 93, 79, 46, 53, 48, 50, 39, 36, 38, 25, 39, 38, 27 ],
            name: 'Non Organic',
            color: '#75b1eb'
        }, {
            data: [ 2620, 2699, 2579, 2302, 2491, 2320, 2019, 2370, 1949, 2470, 1968, 1521, 2045, 2315, 1776 ],
            name: 'Organic',
            color: '#000000'
        }]
    });    



//////////////////////   Device Report New Users   //////////////////////////////////////


  $('#device_report_users').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'samsung',
                    y: 3
                }, {
                    name: 'micromax',
                    y: 2,
                }, {
                    name: 'panasonic',
                    y: 1
                }, {
                    name: 'intex',
                    y: 1
                }, {
                    name: 'celkon',
                    y: 1
                }, {
                    name: 'haier',
                    y: 1
                }, {
                    name: 'oneplus',
                    y: 1
                }]
            }]
        });
        
        
        
            
//////////////////////   Device Report Activities   //////////////////////////////////////


  $('#device_report_activity').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'samsung',
                    y: 121515
                }, {
                    name: 'micromax',
                    y: 27799
                }, {
                    name: 'xiaomi',
                    y: 21906
                }, {
                    name: 'htc',
                    y: 21756
                }, {
                    name: 'lenovo',
                    y: 16803	
                }, {
                    name: 'sony',
                    y: 16798	
                }, {
                    name: 'motorola',
                    y: 15636	
                }, {
                    name: 'oneplus',
                    y: 12016	
                }, {
                    name: 'lava',
                    y: 11078	
                }, {
                    name: 'asus',
                    y: 7789		
                }, {
                    name: 'others',
                    y: 49879		
                }]
            }]
        });   
        
        
        
 
//////////////////////   OS Version Report New Users   //////////////////////////////////////
           
      
    $('#os_version_report_users').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [ "4.4.2", "5", "4.2.2", "4.4.4", "5.1", "other Versions" ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'All Events',
            type: 'column',
            data: [ 201649, 90827, 52242, 141654, 74366, 754933 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });
       
 
//////////////////////   OS Version Report Activities   //////////////////////////////////////
           
      
    $('#os_version_report_activity').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [  "5.1.1", "4.4.2", "5.0.2", "4.4.4", "6.0.1", "other Versions", ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'All Events',
            type: 'column',
            data: [ 8125, 4956, 4485, 3553, 3107, 8190 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });
        
   
         
        
            
//////////////////////   Carries Report New Users   //////////////////////////////////////


  $('#carrier_report_users').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'airtel',
                    y: 2
                }, {
                    name: 'jio 4g',
                    y: 1
                }, {
                    name: 'cellone',
                    y: 1
                }]
            }]
        });   
        
   
            
//////////////////////   Carries Report Activities   //////////////////////////////////////


  $('#carrier_report_activity').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'airtel',
                    y: 72992
                }, {
                    name: 'vodafone in',
                    y: 68348
                }, {
                    name: 'idea',
                    y: 28585
                }, {
                    name: 'vodafone',
                    y: 17389
                }, {
                    name: 'ind airtel',
                    y: 15952
                }, {
                    name: 'tata docomo',
                    y: 14595
                }, {
                    name: 'aircel',
                    y: 12221
                }, {
                    name: 'reliance',
                    y: 12178
                }, {
                    name: 'cellone',
                    y: 7448
                }, {
                    name: 'dea',
                    y: 6699
                }, {
                    name: 'others',
                    y: 44909
                }]
            }]
        });   
       
        
   
            
//////////////////////   Screen Resolution Report   //////////////////////////////////////


  $('#screen_resolution_report').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: '480x854',
                    y: 17100
                }, {
                    name: '720x1280',
                    y: 14289
                }, {
                    name: '480x800',
                    y: 10824
                }, {
                    name: '540x960',
                    y: 6946
                }, {
                    name: '720x1184',
                    y: 1720
                }, {
                    name: '320x480',
                    y: 1703
                }, {
                    name: '1080x1920',
                    y: 1592
                }, {
                    name: '540x888',
                    y: 729
                }, {
                    name: '480x782',
                    y: 602
                }, {
                    name: '600x976',
                    y: 583
                }, {
                    name: 'OTHERS',
                    y: 2748
                }]
            }]
        });   
       
        
   
            
//////////////////////   Network Type Report   //////////////////////////////////////


  $('#network_type_report').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: '3g',
                    y: 2
                }, {
                    name: '2g',
                    y: 2
                }, {
                    name: 'lte',
                    y: 1
                }]
            }]
        });   
     
        
   
            
//////////////////////   App Upgrade Report   //////////////////////////////////////


  $('#app_upgrade_report').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Installs',
                    y: 58836	
                }, {
                    name: 'upgrades',
                    y: 9263
                }]
            }]
        });     
        
      
        
        
 
//////////////////////   Session Duration Analysis   //////////////////////////////////////
           
      
    $('#session_duration').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [ "0-5 sec", "6-15 sec", "16-30 sec", "31-60 sec", "1-3 min", "4-10 min", "11-30 min", "30+ min"  ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'All Events',
            type: 'column',
            data: [ 5933, 2592, 3442, 4822, 8590, 5528, 1450, 58 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });
               


//////////////////////   View pages Analysis   //////////////////////////////////////
           
      
    $('#page_views').highcharts({
        chart: { zoomType: 'xy' },
        title: { text: '' },
        subtitle: { text: '' },
        xAxis: [{
            categories: [ "0-1", "2-5", "6-12", "13-25", "26-50", "51-100", "100+" ],
            crosshair: true
        }],
        yAxis: {
            min: 0,
            title: { text: 'installs' }
        },
        tooltip: { shared: true },        
        series: [{
            name: 'All Events',
            type: 'column',
            data: [ 93333, 110507, 52582, 30913, 14571, 4300, 789 ],
            tooltip: { valueSuffix: ' mm' }
        }]
    });
       


  
            
//////////////////////   Page Views Report   //////////////////////////////////////


  $('#page_views_reports').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'unknown',
                    y: 553	
                }]
            }]
        });     
        
      
});

