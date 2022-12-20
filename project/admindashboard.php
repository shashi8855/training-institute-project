<?php

session_start();

if(session_status() == PHP_SESSION_ACTIVE)
{
    //echo "session is active <br>";

    if($_SESSION['userrtype'] == 2)
    {

?>
<html>

        <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
            <style>
                
                .staff
                {
                    position:absolute;
                    margin-top:40px;
                    margin-left:500px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .staff:hover
                {
                    box-shadow: 3px 5px;
                    color: grey;
                    width:110px;
                }
                .pad
                {
                    padding: 5px;
                    text-align: center;
                }
                .course
                {
                    
                    position:absolute;
                    margin-top:40px;
                    margin-left:650px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .course:hover
                {
                    box-shadow:3px 5px;
                    width:110px;
                    color: grey;
                }
                .batch
                {
                    
                    position:absolute;
                    margin-top:40px;
                    margin-left:800px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .batch:hover
                {
                    box-shadow:3px 5px;
                    width:110px;
                    color: grey;
                }
                .student
                {
                    
                    position:absolute;
                    margin-top:250px;
                    margin-left:500px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:100px;
                    transition:0.2s;
                    
                }
                .student:hover
                {
                    box-shadow:3px 5px;
                    width:110px;
                    color: grey;
                }
                .linegraph
                {
                    
                    position:absolute;
                    margin-top:250px;
                    margin-left:650px;
                    box-shadow: 2px 4px;
                    color:lightgrey;
                    width:400px;
                    transition:0.2s;
                    
                }
                .bottom
                {
                    
                    margin-left:1400px;
                    
                }
            </style>
        </head>
        
        <body>
            
            <h3 align='center'>Admin dashboard</h3>
            
        <div class='staff'>
            <a href=''><img src='./staffimg.jpg' style='width:100%'></a>
            <div class ='pad'>Staff</div>
            </div>

            <div class='course'>
                <a href=''><img src='./course.jpg' style='width:100%'></a>
                <div class ='pad'>Course</div>
            </div>

            <div class='batch'>
                <a href=''><img src='./facultyimg.jpg' style='width:100%'></a>
                <div class ='pad'>Batches</div>
            </div>

            <div class='student'>
                <a href=''><img src='./students.jpg' style='width:100%'></a>
                <div class ='pad'>Students</div>
            </div>
            
            <div class='linegraph'>
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
            </div>    
            
            <div>
            <form  action="logout.php" method="post">

                <div class='bottom'>
                  <input type="submit" name="submit" value="Logout">
                </div>
              </form>

             </div>
            
        </body>
        </html>

        <?php


}
else
{
    header('Location: login.php');
}
}
else
{
header('Location: login.php');
}

//session_unset();

//session_destroy();
        ?>