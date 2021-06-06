<?php
include('..\config.php');
$analysis=$_COOKIE['analysis'];
$sql="SELECT emotions FROM emotions where name='$analysis'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)['emotions'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All visualisations</title>
</head>
<style>
    .container {
        width: 50%;
        height: 50%;
    }
</style>
<body style="background-color: beige;">
<center>
    For <br><b><?php echo $analysis;?></b><br>
    <button id="renderBtn">
        View
    </button><br><br><br><br>
    <div class="container">
    <h2 id="p1"></h2>
        <canvas id="myChart"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p2"></h2>
        <canvas id="myChart1"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p3"></h2>
        <canvas id="myChart2"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p4"></h2>
        <canvas id="myChart3"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p5"></h2>
        <canvas id="myChart4"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p6"></h2>
        <canvas id="myChart5"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p7"></h2>
        <canvas id="myChart6"></canvas><br><br><br><br><br>
    </div>
    <div class="container">
    <h2 id="p8"></h2>
        <canvas id="myChart7"></canvas><br><br><br><br><br>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    
    var p=<?php echo $row?>;
    var arr1 = Object.keys(p);
    var arr2 = Object.values(p);

    function random(){
        var a = Math.random()*100;
        return a;
    }

    function renderChart(data, labels) {
    document.getElementById("p1").innerHTML = "Bar Graph";
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Sentiment',
                data: data,
                backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
            }]
        },
    });
}

    function renderChart1(data, labels) {
        document.getElementById("p2").innerHTML = "Pie Chart";
        var ctx = document.getElementById("myChart1").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart2(data, labels) {
        document.getElementById("p3").innerHTML = "Radar Plot";
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart3(data, labels) {
        document.getElementById("p4").innerHTML = "Bubble Graph";
        var ctx = document.getElementById("myChart3").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bubble',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiments',
                    data: [{
                        x: random(),
                        y: random(),
                        r: data[0]*150,
                    },{
                        x: random(),
                        y: random(),
                        r: data[1]*150,
                    },{
                        x: random(),
                        y: random(),
                        r: data[2]*150,
                    },{
                        x: random(),
                        y: random(),
                        r: data[3]*150,
                    },{
                        x: random(),
                        y: random(),
                        r: data[4]*150,
                    },{
                        x: random(),
                        y: random(),
                        r: data[5]*150,
                    }],
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart4(data, labels) {
        document.getElementById("p5").innerHTML = "Polar Area Graph";
        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart5(data, labels) {
        document.getElementById("p6").innerHTML = "Horizontal Bar Graph";
        var ctx = document.getElementById("myChart5").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart6(data, labels) {
        document.getElementById("p7").innerHTML = "Doughnut Chart";
        var ctx = document.getElementById("myChart6").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

    function renderChart7(data, labels) {
        document.getElementById("p8").innerHTML = "Line Graph";
        var ctx = document.getElementById("myChart7").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment',
                    data: data,
                    backgroundColor: [
                        'rgba(252, 240, 0, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 69, 202, 0.7)',
                        'rgba(190, 0, 0, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(254, 117, 0, 0.7)'
                    ],
                    borderColor: [
                        'rgba(252, 240, 0, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 69, 202, 1)',
                        'rgba(190, 0, 0, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(254, 117, 0, 1)'
                    ],
                    borderWidth: 1,
                }]
            },
        });
    }

$("#renderBtn").click(
    function () {
        data = arr2;
        labels =  arr1;
        renderChart(data, labels);
        renderChart1(data, labels);
        renderChart2(data, labels);
        renderChart3(data, labels);
        renderChart4(data, labels);
        renderChart5(data, labels);
        renderChart6(data, labels);
        renderChart7(data, labels);
    })

</script>

</html>