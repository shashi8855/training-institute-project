<html>
    
<body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
    <canvas id='chart' style='width:100%; max-width:700px'></canvas>
    <script>
        var x=[2,6,8,10,12,14,16,18,20];
        var y=[3,6,9,12,15,18,14,13,30];

        new Chart('chart',{
            type: 'line',
            data: {
                labels: x,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: 'rgba(0,0,255,1.0)',
                    borderColor: 'rgba(0,0,255,0.1)',
                    data: y
                }]
            },
            options: {
                legend: {display: false},
                scales:{
                    yAxes: [{ticks : {min: 1,max: 35} }],
                }
            }
        });
    </script>
</body>   
</html>    