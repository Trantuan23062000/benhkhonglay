@foreach ($canlamsang as $item)
    <tr>
        <th>{{ $item->MA_PHIEU_CLS }}</th>
        <td>{{ $item->bacsi->TEN_BS }}</td>
        <td>{{ $item->NGAY_CHI_DINH }}</td>
        <td>
            <a href="{{route('canlamsang.view',$item->MA_PHIEU_CLS)}}" class="btn btn-info btnview"><i class="ri-error-warning-line"></i></a>
        </td>
        <td>
            <a href="" class="btn btn-danger btnxoa"><i class="ri-delete-bin-5-line"></i></a>
        </td>
    </tr>
@endforeach