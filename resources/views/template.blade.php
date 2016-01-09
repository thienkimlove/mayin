<!DOCTYPE html>
<html>
<head lang="vi">
    <meta charset="UTF-8">
    <title>Đại Thánh Vương</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}"/>
</head>
<body>
<div class="block-1">
    <div class="company">
        <span>TỔNG CÔNG TY ĐƯỜNG SẮT VIỆT NAM</span>
        <span>CÔNG TY TNHH MỘT THÀNH VIÊN</span>
        <span>VẬN TẢI ĐƯỜNG SẮT {{$data['cong_ty_duong_sat']}}</span>
    </div>
    <div class="captain">
        <strong>THẺ LÊN TÀU HỎA</strong> <br/>
        BOARDING PASS
    </div>
    <div class="qrcode"></div>
    <div class="code">
        Mã vé: {{$data['ma_ve']}}
    </div>
    <div class="come-leave">
        <div class="come">
            <label for="" class="sm-text">Ga đi</label><br/>
            <label for="">{{$data['ga_di']}}</label>
        </div>
        <div class="leave">
            <label for="" class="sm-text">Ga đến</label><br/>
            <label for="">{{$data['ga_den']}}</label>
        </div>
    </div>
    <div class="info">
        <div>
            <label class="title" for="">Tàu/Train</label>
            <label class="title" for="">Ngày đi/Date:</label>
            <label class="title" for="">Giờ đi/Time:</label>
            <label for="" class="title toa">Toa/Coach: </label><label for="" class="sp">{{$data['toa']}}</label>
            <label class="title" for="">Loại vé/Ticket:</label>
            <label class="title" for="">Loại chỗ/Class:</label>
            <label for="" class="title">Họ tên/Name:</label>
            <label class="title" for="">Giấy tờ/Passport:</label>
            <label class="title" for="">Giá/Price:</label>
        </div>
        <div>
            <label for="">{{$data['tau']}}</label>
            <label for="">{{$data['ngay_di']}}</label>
            <label for="">{{$data['gio_di']}}</label>
            <label class="title cho" for="">Chỗ/Seat: </label><label for="" class="number">{{$data['cho']}}</label>
            <label for="">{{$data['loai_ve']}}</label>
            <label for="">{{$data['loai_cho']}}</label>
            <label for="">{{$data['ho_va_ten']}}</label>
            <label for="">{{$data['so_giay_to']}}</label>
            <label for="">{{$data['gia_ve']}} VND</label>
        </div>
    </div>
    <div class="note">
        <label for=""class="sm-text">Ghi chú:</label> Thẻ lên tàu không phải hóa đơn GTGT và không có giá trị thanh toán <br/>
        Để tra cứu hóa đơn điện tử xin vui lòng truy cập địa chỉ web: <br/>
        This boarding pass is not official invoice. To receive an electronic invoice please visit website address at:
        <br/>
        http://hoadon.vantaiduongsathanoi.vn
        Để đảm bảo quyền lợi, quý khách vui lòng mang theo thẻ lên tàu hỏa cùng với giấy tờ tùy thân trong suốt hành trình.
        Ngày in/Printed date: {{$data['ngay_in']}} (1)<br/>
        Ngày thanh toán/Payment date: {{$data['ngay_thanh_toan']}}<br/>
        Serial: {{$data['serial']}} <br/> <br/>
        -----------------
    </div>
</div>
<div class="block-2"></div>
</body>
</html>