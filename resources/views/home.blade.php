@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Form</h1>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <form name="openForm" method="POST" action="{{url('post')}}">

                                <div class="form-group">
                                    <label for="cong_ty_duong_sat">Công ty đường sắt</label>
                                    <input autocomplete="off" class="form-control" id="cong_ty_duong_sat" value="" type="text" name="cong_ty_duong_sat" />
                                </div>

                                <div class="form-group">
                                    <label for="ma_ve">Mã vé</label>
                                    <input class="form-control" id="ma_ve" value="" type="text" name="ma_ve" />
                                </div>

                                <div class="form-group">
                                    <label for="ga_di">Ga đi</label>
                                    <input class="form-control" id="ga_di" value="" type="text" name="ga_di" />
                                </div>

                                <div class="form-group">
                                    <label for="ga_den">Ga đến</label>
                                    <input class="form-control" id="ga_den" value="" type="text" name="ga_den" />
                                </div>

                                <div class="form-group">
                                    <label for="tau">Tàu</label>
                                    <input class="form-control" id="tau" value="" type="text" name="tau" />
                                </div>

                                <div class="form-group">
                                    <label for="ngay_di">Ngày đi</label>
                                    <input class="form-control" id="ngay_di" value="" type="text" name="ngay_di" />
                                </div>

                                <div class="form-group">
                                    <label for="gio_di">Giờ đi</label>
                                    <input class="form-control" id="gio_di" value="" type="text" name="gio_di" />
                                </div>

                                <div class="form-group">
                                    <label for="toa">Toa</label>
                                    <input class="form-control" id="toa" value="" type="text" name="toa" />
                                </div>

                                <div class="form-group">
                                    <label for="cho">Chỗ</label>
                                    <input class="form-control" id="cho" value="" type="text" name="cho" />
                                </div>

                                <div class="form-group">
                                    <label for="loai_ve">Loại vé</label>
                                    <input class="form-control" id="loai_ve" value="" type="text" name="loai_ve" />
                                </div>

                                <div class="form-group">
                                    <label for="loai_cho">Loại chỗ</label>
                                    <input class="form-control" id="loai_cho" value="" type="text" name="loai_cho" />
                                </div>

                                <div class="form-group">
                                    <label for="ho_va_ten">Họ và tên</label>
                                    <input class="form-control" id="ho_va_ten" value="" type="text" name="ho_va_ten" />
                                </div>


                                <div class="form-group">
                                    <label for="so_giay_to">Số Giấy tờ</label>
                                    <input class="form-control" id="so_giay_to" value="" type="text" name="so_giay_to" />
                                </div>

                                <div class="form-group">
                                    <label for="gia_ve">Giá vé</label>
                                    <input class="form-control" id="gia_ve" value="" type="text" name="gia_ve" />
                                </div>

                                <div class="form-group">
                                    <label for="ngay_in">Ngày in</label>
                                    <input class="form-control" id="ngay_in" value="" type="text" name="ngay_in" />
                                </div>


                                <div class="form-group">
                                    <label for="ngay_thanh_toan">Ngày thanh toán</label>
                                    <input class="form-control" id="ngay_thanh_toan" value="" type="text" name="ngay_thanh_toan" />
                                </div>

                                <div class="form-group">
                                    <label for="serial">Serial</label>
                                    <input class="form-control" id="serial" value="" type="text" name="serial" />
                                </div>


                                <div class="form-group">
                                    <input type="submit" name="save" value="Save" class="btn btn-primary form-control" />
                                </div>

                            </form>

                            @include('errors.list')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
