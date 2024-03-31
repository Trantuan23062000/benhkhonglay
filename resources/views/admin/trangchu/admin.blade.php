@extends('layout.admin')
@section('content')
    <div>
        <h4>Bạn đang truy cập với quyền Admin</h4>
    </div>

    <div class="row">
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
               Xem danh sách sở y tế
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    @foreach ($soyte as $item)
                    <div class="col-md-4">
                            <h5 class="card-title">{{ $item->TEN_SO_Y_TE }}</h5>
                            <a href="" class="btn btn-primary">Truy cập vào</a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Example single danger button -->
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Khám chữa bệnh</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>     
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tiêm chủng</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>     
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Dân số</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>    
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bệnh không lây nhiễm</h5>
                <p class="card-text">Dữ liệu người mắc các bệnh không lây nhiễm</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>    
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bệnh truyền nhiễm</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>   
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tai nạn thương tích</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tài chính thu chi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Vitamin</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Phòng chống suy dinh dưỡng</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Thuốc thiết yếu vật tư y tế</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">An toàn thực phẩm</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">HIV/AIDS</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Quản lí vệ sinh môi trường</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Chăm sóc sức khỏe sinh sản</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div>  
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Nhân lực</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div> 
          <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tài sản trang thiết bị</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Truy cập dữ liệu</a>
              </div>
            </div>
          </div> 
        </div>
        
    </div>
@stop
