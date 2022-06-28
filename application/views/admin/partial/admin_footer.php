            </div>
        </div>
    </div>
  
  <!-- js -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="<?= base_url('assets/');?>assets/js/plugin/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/');?>assets/js/plugin/pie-chart.js"></script>
    <script src="<?= base_url('assets/');?>assets/js/plugin/circliful.js"></script>
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="<?= base_url('assets/');?>assets/js/main.js"></script>

    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    
    <script>
        <?php
            if (count($all_devices)>0) {
                foreach ($all_devices as $data) {
                    $id = $data['id'];
                    $val = $data['val'];
                    echo 
                    "$(document).ready(function () {
                        $('#circle-list'+$id).circliful({
                            animation: 1,
                            animationStep: $val,
                            foregroundBorderWidth: 15,
                            backgroundBorderWidth: 15,
                            percent:$val,
                            textSize: 28,
                            textStyle: 'font-size: 12px;',
                            textColor: '#666',
                            multiPercentage: 1,
                            percentages: [10, 20, 30]
                        });
                    });";
                }
            }
        ?>
    </script>
    <!-- <script>
        $(document).ready(function () {
            $('#circle-list1').circliful({
                animation: 1,
                animationStep: 5,
                foregroundBorderWidth: 15,
                backgroundBorderWidth: 15,
                percent: 28,
                textSize: 28,
                textStyle: 'font-size: 12px;',
                textColor: '#666',
                multiPercentage: 1,
                percentages: [10, 20, 30]
            });
        });
    </script> -->
    <!-- circliful -->
    <script>
        $(document).ready(function () { 

            $("#circle-1").circliful({
                animation: 1,
                animationStep: 5,
                foregroundBorderWidth: 15,
                backgroundBorderWidth: 15,
                percent: 58,
                textSize: 28,
                textStyle: 'font-size: 12px;',
                textColor: '#666',
                multiPercentage: 1,
                percentages: [10, 20, 30]
            });
        });                
                

        $(document).ready(function () { // 6,32 5,38 2,34
                $("#circle-2").circliful({
                    animation: 1,
                    animationStep: 5,
                    foregroundBorderWidth: 15,
                    backgroundBorderWidth: 15,
                    percent: 12,
                    textSize: 28,
                    textStyle: 'font-size: 12px;',
                    textColor: '#666',
                    multiPercentage: 1,
                    percentages: [10, 20, 30],
                    foregroundColor: "#34db58"
                });
            });
    </script>

    <!-- circliful -->
    <script>
        $(document).ready(function () { // 6,32 5,38 2,34
            $("#test-circle").circliful({
                animation: 1,
                animationStep: 5,
                foregroundBorderWidth: 15,
                backgroundBorderWidth: 15,
                percent: 38,
                textSize: 28,
                textStyle: 'font-size: 12px;',
                textColor: '#666',
                multiPercentage: 1,
                percentages: [10, 20, 30]
            });
        });
    </script>
    <!-- chart -->
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                labels: [
                        <?php
                            if (count($devices_by_tahun)>0) {
                                foreach ($devices_by_tahun as $data) {
                                    echo "'" .$data['bulan'] ."',";
                                }
                            }
                        ?>
                        ],
                datasets: [{
                    label: 'All devices by month',
                    data: [
                        <?php
                            if (count($devices_by_tahun)>0) {
                            foreach ($devices_by_tahun as $data) {
                                echo "'" .$data['total'] ."',";
                            }
                            }
                        ?>
                        ],
                    backgroundColor: [
                        'rgba(54, 162, 235)',
                        'rgba(200, 10, 235)',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    }
                }
            }

        });
    </script>

    <!-- chart -->
    <script>
            const ctx = document.getElementById('myChart2');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [{
                        label: 'Humidity',
                        data: [65, 59, 90, 81, 56, 55, 40, 20],
                        fill: true,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        pointBackgroundColor: 'rgb(255, 99, 132)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(255, 99, 132)'
                    }, {
                        label: 'Temperature',
                        data: [28, 48, 40, 19, 96, 27, 100],
                        fill: true,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgb(54, 162, 235)',
                        pointBackgroundColor: 'rgb(54, 162, 235)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(54, 162, 235)'
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

    

</body>

</html>