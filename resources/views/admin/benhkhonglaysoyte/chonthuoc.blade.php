
@for ($i=1;$i<=$sl;$i++) 
    <tr>
        <td>
            <div class="col-mb-3">
                <th><select id="" class="form-control custom-select thuoctt-{{$i}}"
                        name="MA_THUOC[]" autofocus>
                        <option value="">Chọn tên thuốc</option>
                        @foreach ($thuoc as $item)
                            <option value="{{ $item->MA_THUOC }}">
                                {{ $item->TEN_THUOC }}</option>
                        @endforeach
                    </select></th>
            </div>
        </td>
        <td>
            <div class="col-mb-3">
                <div class="">
                    <input type="text" class="form-control lieudungtt-{{$i}}" name="">
                </div>
            </div>
        </td>
        <td>
            <div class="col-mb-3">
                <div class="">
                    <input type="text" class="form-control dongiatt-{{$i}}" name="">
                </div>
            </div>
        </td> 
       <td>
        <div class="col-mb-3">
            <div class="">
                <input type="number" class="form-control" name="SO_LUONG[]">
            </div>
        </div>
       </td>
    </tr>
@endfor