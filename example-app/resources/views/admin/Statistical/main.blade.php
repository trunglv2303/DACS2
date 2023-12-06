@extends('admin.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="/template/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/template/assets/vendors/css/vendor.bundle.base.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="/template/assets/css/style.css">
    </head>
    <div style="margin-top: -200px;" class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div style="color: aliceblue;" class="card">
                        <div class="card-body">
                            <h5>Tổng doanh thu</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ number_format($total, 0, ',', '.') }} VND</h2>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div style="color: aliceblue;" class="card">
                        <div class="card-body">
                            <h5>Lợi Nhuận</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ number_format($profit, 0, ',', '.') }} VND</h2>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 grid-margin">
                    <div style="color: aliceblue;" class="card">
                        <div class="card-body">
                            <h5>Tổng đơn hàng</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0">{{ $order }}</h2>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Customer Orders</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Tên Khách Hàng </th>
                                            <th> Mã Khách Hàng </th>
                                            <th> Số tiền đã mua </th>
                                            <th> Số sản phẩm đã mua </th>
                                            <th> Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sqls as $sql)
                                            <tr>
                                                <td>
                                                    <img src="https://media.istockphoto.com/id/1273355370/vi/vec-to/h%C3%ACnh-%E1%BA%A3nh-%C4%91%E1%BA%A1i-di%E1%BB%87n-avatar-nam-minh-h%E1%BB%8Da-vector-eps10.jpg?s=612x612&w=0&k=20&c=k4RfS7qZxAN2MdrKMaE5JNnvYWs9fxASnPzCH-8sT-k="
                                                        alt="image" />
                                                    <span class="pl-2">{{ $sql->name }}</span>
                                                </td>
                                                <td> {{ $sql->id }} </td>

                                                <td>{{ number_format($sql->total_amount, 0, ',', '.') }} VND </td>
                                                <td> {{ $sql->order_count }} </td>
                                                <td>
                                                    <a href="/statistical/list/{{ $sql->id }}"
                                                        class="badge badge-outline-success">Chi tiết</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{ $sqls->links() }}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 grid-margin">

                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <h4 class="card-title">Doanh Thu Tuần</h4>
                        <canvas style="background-color: #191c24"
                            id="myChart1"style="height: 407px; display: block; width: 814px;" width="1017"
                            height="508"></canvas>

                        <?php
                        
                        // Chuỗi JSON đầu vào
                        $jsonResponse = $orderData->getContent();
                        $dataArray = json_decode($jsonResponse, true);
                        
                        ?>
                        <script>
                            var ctx = document.getElementById('myChart1').getContext('2d');
                            
                            var myData = <?php echo json_encode(array_values($dataArray), true); ?>;
                            console.log(myData);
                            var chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", ],
                                    datasets: [{
                                        label: 'My First Dataset',
                                        data: [65, 59, 80, 81, 56, 55, 40],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 205, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(201, 203, 207, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)',
                                            'rgb(54, 162, 235)',
                                            'rgb(153, 102, 255)',
                                            'rgb(201, 203, 207)'
                                        ],
                                        borderWidth: 1

                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                },
                            });
                        </script>
                    </div>
                </div>

            </div>
            {{-- ----------------------------- --}}
            <div class="row">
                <div class="col-12 grid-margin">

                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <h4 class="card-title">Doanh Thu Từng Th</h4>
                        <canvas style="background-color: #191c24"
                            id="myChart"style="height: 407px; display: block; width: 814px;" width="1017"
                            height="508"></canvas>

                        <?php
                        
                        // Chuỗi JSON đầu vào
                        $jsonResponse = $orderData->getContent();
                        $dataArray = json_decode($jsonResponse, true);
                        
                        ?>
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var areaOptions = {
                                plugins: {
                                    filler: {
                                        propagate: true
                                    }
                                },
                                scales: {
                                    yAxes: [{
                                        gridLines: {
                                            color: "rgba(204,34,32)"
                                        }
                                    }],
                                    xAxes: [{
                                        gridLines: {
                                            color: "rgba(204,34,32)"
                                        }
                                    }]
                                }
                            };
                            var myData = <?php echo json_encode(array_values($dataArray), true); ?>;
                            console.log(myData);
                            var chart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                    datasets: [{
                                        label: 'VNĐ',
                                        data: myData,
                                        fill: true,
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 2,
                                        pointStyle: 'circle', // Change to 'rectRounded', 'triangle', etc.
                                        pointBorderColor: 'rgba(75, 192, 192, 1)',
                                        pointBackgroundColor: 'rgba(55, 234,322)',
                                        tension: 0.4 // Adjust the tension for a smoother curve
                                    }]
                                },
                                options: areaOptions
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/template/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/template/assets/js/off-canvas.js"></script>
    <script src="/template/assets/js/hoverable-collapse.js"></script>
    <script src="/template/assets/js/misc.js"></script>
    <script src="/template/assetsnpm install chart.js/js/settings.js"></script>
    <script src="/template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    {{-- <script src="/template/assets/js/chart.js"></script> --}}
@endsection
