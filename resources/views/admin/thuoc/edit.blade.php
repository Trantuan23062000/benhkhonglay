<form id="sua" action="{{route('thuoc.update',$thuoc->MA_THUOC)}}" method="post">
    @csrf @method('PUT')
    <div class="row mt-3">
        <div class="col-sm-3">
            <label for="">Mã thuốc </label>
            <input type="text" value="{{$thuoc->MA_THUOC}}" name="MA_THUOC" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Mã nhóm</label>
            <select id="" class="form-control custom-select" name="MA_NHOM" autofocus>
                @if($thuoc->MA_NHOM==1)
                <option selected value="1">Thuốc trong danh mục BHYT</option>
                <option value="2">Thuốc ngoài danh mục BHYT</option>
                <option value="3">Thuốc thanh toán theo tỷ lệ</option>
                @endif
                @if($thuoc->MA_NHOM==2)
                <option value="1">Thuốc trong danh mục BHYT</option>
                <option selected value="2">Thuốc ngoài danh mục BHYT</option>
                <option value="3">Thuốc thanh toán theo tỷ lệ</option>
                @endif
                @if($thuoc->MA_NHOM==3)
                <option value="1">Thuốc trong danh mục BHYT</option>
                <option value="2">Thuốc ngoài danh mục BHYT</option>
                <option selected value="3">Thuốc thanh toán theo tỷ lệ</option>
                @endif
            </select>
        </div>
        <div class="col-sm-3">
            <label for="">Tên thuốc</label>
            <input type="text" value="{{$thuoc->TEN_THUOC}}" name="TEN_THUOC" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="gioitinh">Đơn vị tính <span class="text-danger font-weight-bold"></span></label>
            <select class="custom-select form-control " name="DON_VI_TINH">
                <option value="">-- Chọn --</option>
                @if ($thuoc->DON_VI_TINH = 0)
                    <option selected value="0">ML</option>
                    <option value="1">UI</option>
                @endif
                @if ($thuoc->DON_VI_TINH = 1)
                    <option value="0">ML</option>
                    <option selected value="1">UI</option>
                @endif

            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <label for="">Hàm lượng</label>
            <input type="text" value="{{$thuoc->HAM_LUONG}}" name="HAM_LUONG" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Đường dùng</label>
            <input type="text" value="{{$thuoc->DUONG_DUNG}}" name="DUONG_DUNG" class="form-control">
        </div>
        <div class="col-sm-3">
            <label for="">Liều dùng</label>
            <select id="" class="form-control custom-select" name="LIEU_DUNG" autofocus>
                @if ($thuoc->LIEU_DUNG == 1)
                <option selected value="1 viên ngày">1 viên/ngày</option>
                <option value="2 viên ngày">2 viên/ngày</option>
                <option value="3 viên ngày">3 viên/ngày</option>
                <option value="4 viên ngày">4 viên/ngày</option>
                <option value="5 viên ngày">5 viên/ngày</option>
                <option value="6 viên ngày">6 viên/ngày</option>   
                @endif 
                @if($thuoc->LIEU_DUNG == 2)
                <option value="1 viên ngày">1 viên/ngày</option>
                <option selected value="2 viên ngày">2 viên/ngày</option>
                <option value="3 viên ngày">3 viên/ngày</option>
                <option value="4 viên ngày">4 viên/ngày</option>
                <option value="5 viên ngày">5 viên/ngày</option>
                <option value="6 viên ngày">6 viên/ngày</option>   
                @endif
                @if ($thuoc->LIEU_DUNG == 3)
                <option value="1 viên ngày">1 viên/ngày</option>
                <option  value="2 viên ngày">2 viên/ngày</option>
                <option selected value="3 viên ngày">3 viên/ngày</option>
                <option value="4 viên ngày">4 viên/ngày</option>
                <option value="5 viên ngày">5 viên/ngày</option>
                <option value="6 viên ngày">6 viên/ngày</option>   
                @endif
                @if ($thuoc->LIEU_DUNG == 4)
                <option value="1 viên ngày">1 viên/ngày</option>
                <option  value="2 viên ngày">2 viên/ngày</option>
                <option  value="3 viên ngày">3 viên/ngày</option>
                <option selected value="4 viên ngày">4 viên/ngày</option>
                <option value="5 viên ngày">5 viên/ngày</option>
                <option value="6 viên ngày">6 viên/ngày</option>  
                @endif
                @if ($thuoc->LIEU_DUNG == 5)
                <option value="1 viên ngày">1 viên/ngày</option>
                <option  value="2 viên ngày">2 viên/ngày</option>
                <option  value="3 viên ngày">3 viên/ngày</option>
                <option  value="4 viên ngày">4 viên/ngày</option>
                <option selected value="5 viên ngày">5 viên/ngày</option>
                <option value="6 viên ngày">6 viên/ngày</option> 
                @endif
                @if ($thuoc->LIEU_DUNG == 6)
                <option value="1 viên ngày">1 viên/ngày</option>
                <option  value="2 viên ngày">2 viên/ngày</option>
                <option  value="3 viên ngày">3 viên/ngày</option>
                <option  value="4 viên ngày">4 viên/ngày</option>
                <option  value="5 viên ngày">5 viên/ngày</option>
                <option selected value="6">6 viên/ngày</option>            
                @endif   
            </select>
        </div>
        <div class="col-sm-3">
            <label for="">Số đăng ký</label>
            <input type="text" value="{{$thuoc->SO_DANG_KY}}" name="SO_DANG_KY" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label for="">Thông tin thầu</label>
            <input type="text" value="{{$thuoc->TT_THAU}}" name="TT_THAU" class="form-control">
        </div>
        <div class="col-sm-6">
            <label for="">Phạm vi</label>
            <select class="custom-select form-control " name="PHAM_VI">
                <option value="">-- Chọn --</option>
                @if ($thuoc->PHAM_VI == 1)
                    <option selected value="1">Trong phạm vi BHYT</option>
                    <option value="2">Ngoài phạm vi BHYT</option>
                @endif
                @if ($thuoc->PHAM_VI == 2)
                    <option value="2">Ngoài phạm vi BHYT</option>
                    <option selected value="1">Trong phạm vi BHYT</option>
                @endif

            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <label for="">Số lượng</label>
            <input type="text" value="{{$thuoc->SO_LUONG}}" name="SO_LUONG" class="form-control">
        </div>
            <div class="col-sm-4">
                <label for="">Đơn giá</label>
                <input type="text" name="DON_GIA" value="{{$thuoc->DON_GIA}}" class="form-control">
            </div>
        <div class="col-sm-4">
            <label for="">Mức hưởng</label>
            <select id="" class="form-control custom-select" name="MUC_HUONG" autofocus>
                @if ($thuoc->MUC_HUONG==0)
                <option selected value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==5)
                <option  value="0">Không có mức hường</option>
                <option selected value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==10)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option selected  value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==20)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option selected value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==30)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option selected value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==40)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option selected value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==50)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option selected value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==60)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option selected value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==70)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option selected value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==80)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option selected value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==90)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option selected value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==95)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option selected value="95">Đúng tuyến 95%</option>
                <option value="100">Đúng tuyến 100%</option>   
                @endif
                @if ($thuoc->MUC_HUONG==100)
                <option value="0">Không có mức hường</option>
                <option value="5">Trái tuyến hổ trợ 5%</option>
                <option value="10">Trái tuyến hổ trợ 10%</option>
                <option value="20">Trái tuyến hổ trợ 20%</option>
                <option value="30">Trái tuyến hổ trợ 30%</option>
                <option value="40">Trái tuyến hổ trợ 40 %</option>
                <option value="50">Đúng tuyến 50%</option>
                <option value="60">Đúng tuyến 60%</option>
                <option value="70">Đúng tuyến 70%</option>
                <option value="80">Đúng tuyến 80%</option>
                <option value="90">Đúng tuyến 90%</option>
                <option value="95">Đúng tuyến 95%</option>
                <option selected value="100">Đúng tuyến 100%</option>   
                @endif

            </select>
        </div>
    </div>

    <div class="mt-3">
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-warning">Tải lên</button>
        </div>
    </div>
</form>