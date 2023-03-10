<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="icon" type="image/png" href="<?= base_url('/assets/Logo HIMATEKNO HD.png'); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/bootstrap.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/font-awesome.min.css'); ?>">
    <!-- Font Awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        
    <style>

    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color: #15396A;">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="<?= base_url('/assets/Logo HIMATEKNO HD.png'); ?>" style="width:30px" class="mt-1 ml-2" alt="">
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"><b>HIMATEKNO</b></a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <center>
                    <h2>Hasil Pemilihan Calon Kandidat Ketua HIMATEKNO</h2>
                </center>

            </div>
            <!-- /.content-header -->
            <div class="container">
                <div class="row">
                    <canvas id="bar" width="400" height="160"></canvas>

                </div>
            </div>


        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>HIMATEKNO</b>
            </div>
            <strong>Copyright &copy; 2020
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

    <script>
        const baseUrl = "<?php echo base_url(); ?>"
        const chartRanking = (chartType) => {

            $.ajax({
                url: baseUrl + 'home/chartRanking',
                dataType: 'json',
                method: 'get',
                success: data => {
                    let chartX = []
                    let chartY = []
                    data.map(data => {
                        chartX.push(data.nama)
                        chartY.push(data.total)
                    })
                    const chartData = {
                        labels: chartX,
                        datasets: [{
                            label: 'skor',
                            data: chartY,
                            backgroundColor: ['blue'],
                            borderColor: ['red'],
                            borderWidth: 4
                        }]
                    }

                    const ctx = document.getElementById(chartType).getContext('2d')
                    const config = {
                        type: chartType,
                        data: chartData
                    }

                    switch (chartType) {
                        case 'bar':
                            chartData.datasets[0].backgroundColor = ['#15396A']
                            chartData.datasets[0].borderColor = ['#15396A']
                            break;
                        default:
                            config.options = {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }

                    }
                    const chart = new Chart(ctx, config)



                }
            })

        }

        chartRanking('bar')
    </script>
</body>

</html>