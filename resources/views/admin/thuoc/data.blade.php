@foreach ($thuoc as $item)
    <tr>
        
        <th scope="row">MADT00{{ $item->MA_THUOC }}</th>
        <td>{{ $item->TEN_THUOC }}</td>
        <td>{{ $item->SO_LUONG }}</td>
        <td>{{ $item->DON_GIA }}</td>
        <td>{{ $item->MUC_HUONG }}%</td>
        <td>{{ $item->THANH_TIEN }}</td>
        <td>
            <a href="{{route('thuoc.edit',$item->MA_THUOC)}}" class="btn btn-warning btnsua">Sửa</a>
        </td>
        <td>
            <a href="{{route('thuoc.destroy',$item->MA_THUOC)}}" class="btn btn-danger btnxoa">Xóa</a>
        </td>
    </tr>
@endforeach
