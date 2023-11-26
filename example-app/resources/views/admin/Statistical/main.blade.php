@extends('admin.main')
@section('content')
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
                                    <h2 class="mb-0">{{$order}}</h2>
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
                        <h4 class="card-title">Order Status</h4>
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
                                    @foreach($sqls as $sql)
                                    <tr>
                                        <td>
                                            <img src="https://media.istockphoto.com/id/1273355370/vi/vec-to/h%C3%ACnh-%E1%BA%A3nh-%C4%91%E1%BA%A1i-di%E1%BB%87n-avatar-nam-minh-h%E1%BB%8Da-vector-eps10.jpg?s=612x612&w=0&k=20&c=k4RfS7qZxAN2MdrKMaE5JNnvYWs9fxASnPzCH-8sT-k=" alt="image" />
                                            <span class="pl-2">{{$sql->name}}</span>
                                        </td>
                                        <td> {{$sql->id}} </td>

                                        <td>{{ number_format( $sql->total_amount , 0, ',', '.') }} VND </td>
                                        <td> {{ $sql->order_count }} </td>
                                        <td>
                                            <a href="/statistical/list/{{$sql->id}}" class="badge badge-outline-success">Chi tiết</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{$sqls->links()}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection