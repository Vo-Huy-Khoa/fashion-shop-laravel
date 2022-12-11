<span>Xin chào {{$name}},</span>
<br>
<span>Đơn hàng của bạn đã được đặt thành công ngày {{$date}}.</span>
<br>
{{-- <span>Vui lòng đăng nhập Shopee để xác nhận bạn đã nhận hàng và hài lòng với sản phẩm trong vòng 3 ngày. Sau khi bạn xác nhận, chúng tôi sẽ thanh toán cho Người bán karastore.vn.
    Nếu bạn không xác nhận trong khoảng thời gian này, Shop cũng sẽ thanh toán cho Người bán.</span> --}}
<br><br>
<b>THÔNG TIN ĐƠN HÀNG - DÀNH CHO NGƯỜI MUA</b>
<br>
<span>Mã đơn hàng: &nbsp;&nbsp;&nbsp;</span>
<br>
<span>Ngày đặt hàng: </span> <span>{{$date}}</span>

<br>

<div class="checkout__order__products"> <span>Tên sản phẩm: </span></div>
<ul>
    @foreach ($list_oders as $oders)
    <li>
        {{$oders->products->name}}
        <br>
        <span style="color: red">
            {{number_format($oders->products->unit_price) }}đ
        </span>
        <span style="color: red; margin-left:10px;">
            x {{$oders->quantity }}
        </span>
        <br>
        <span>Thành tiền:</span>
        <span style="color: red;">
            {{number_format($oders->products->unit_price * $oders->quantity)}}đ
        </span>
        <br>
        <hr style="width:35%;margin-left:0px">

    </li>

    @endforeach

</ul>

<br>
<span>Tổng tiền: </span><br>
<ul>
    <li>
        <span>Phí vận chuyển: </span><br>
    </li>
    <li>
        <span>Tổng thanh toán: <b style="color: red;">{{number_format($list_oders->sum('total'))}}đ</b> </span> <br>
    </li>
</ul>

<span>Lưu ý: Shop sẽ từ chối hỗ trợ các khiếu nại sau khi Người mua nhấn "Đã nhận được hàng" trên ứng dụng và Người bán đã nhận được thanh toán cho đơn hàng.</span>
<br>
<span>Chúc bạn luôn có những trải nghiệm tuyệt vời khi mua sắm tại Shop.</span>