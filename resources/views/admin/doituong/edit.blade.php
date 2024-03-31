<form id="sua" action="{{route('doituong.update',$doituong->MA_DOI_TUONG)}}" method="post">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <label for="inputText" class="">Mã định danh</label>
            <div class="col-sm-10">
                <input type="text" required class="form-control" name="MA_DINH_DANH_V20">
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <label for="">Mã đối tượng</label>
            <select id="" class="form-control custom-select" required name="MA_DOI_TUONG" required
                autofocus>
                <option value="">Đối tượng</option>
                @foreach ($doituong as $item)
                    <option value="{{ $item->MA_DOI_TUONG }}">{{ $item->TEN_DOI_TUONG }}</option>
                @endforeach
            </select>
        </div>
        
        

    </div>

    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
    <button type="submit" class="btn btn-warning update_dantoc">Cập nhật</button>
</form>
