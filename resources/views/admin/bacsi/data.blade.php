@foreach ($bacsi as $item)
    <tr>
        
        <th scope="row">BS00{{ $item->MABS }}</th>
        <td>{{ $item->TEN_BS }}</td>
        <td>{{ $item->CHUC_DANH }}</td>
        <td>{{ $item->TEN_KHOA }}</td>
        <td>
            <a href="{{route('bacsi.edit',$item->MABS)}}" class="btn btn-warning btnsua">Sửa</a>
        </td>
        <td>
            <a href="{{route('bacsi.destroy',$item->MABS)}}" class="btn btn-danger btnxoa">Xóa</a>
        </td>
    </tr>
@endforeach
