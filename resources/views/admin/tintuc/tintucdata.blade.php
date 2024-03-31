@foreach ($tintuc as $item)
    <tr>
        
        <th scope="row">{{ $item->ID }}</th>
        <td>{{ $item->TEN_TIN_TUC }}</td>
        @if ($item->TRANG_THAI==0)
        <td><a href="" class="btn btn-success btnan">Hiển thị</a></td>
        @else
        <td><a href="" class="btn btn-info btnhien">Ẩn</a></td>   
        @endif
        
        <td>
            <a href="" class="btn btn-warning btnsua">Sửa</a>
        </td>
        <td>
            <a href="" class="btn btn-danger btnxoa">Xóa</a>
        </td>
    </tr>
@endforeach