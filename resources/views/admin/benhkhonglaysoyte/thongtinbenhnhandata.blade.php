@foreach ($doituongmacbenh as $item)
    <tr>
        <th scope="row">MADD00{{ $item->MA_DINH_DANH_V20 }}</th>
        <td>MAHS00{{ $item->MA_HO_SO }}</td>
        <td>{{ $item->HO_TEN }}</td>
        @if ($item->GIOI_TINH=1)
        <td>Nam</td>
        @else
        <td>Nữ</td>
        @endif
        <td>{{$item->SO_DIEN_THOAI}}</td>
        <td>
            <a href="{{route('doituongmacbenh.view',$item->ID)}}" class="btn btn-info btnview"><i class="ri-error-warning-line"></i></a>
        </td>
        <td>
            <a href="{{route('doituongmacbenh.edit',$item->ID)}}" class="btn btn-warning btnsua"><i class="ri-edit-2-fill"></i></a>
        </td>
        <td>
            <a href="{{route('doituongmacbenh.destroy',$item->ID)}}" class="btn btn-danger btnxoa"><i class="ri-delete-bin-5-line"></i></a>
        </td>
        
    </tr>
@endforeach
