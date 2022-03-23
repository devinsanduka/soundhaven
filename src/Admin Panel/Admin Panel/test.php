<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Untitled</title>

 

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://cdn.kendostatic.com/2014.2.716/js/kendo.all.min.js"></script>
</head>
<body>
  <div id="chart"></div>
  <script>
   $('#chart').kendoChart();
     $('#chart').kendoChart({
        series: [
            { data: [500, 450, 300, 125] }
        ]
    });
     $('#chart').kendoChart({
        title: {
            text: 'SOUND HAVEN User Downloads'
        },
        categoryAxis: {
            categories: [ 2014, 2015, 2016, 2017 ],
        },
        series: [{
           type: 'line', 
           data: [1500, , , ], 
           name: 'Amount of Downloads' 
        }]
    });
  </script>
   
</body>
</html>
