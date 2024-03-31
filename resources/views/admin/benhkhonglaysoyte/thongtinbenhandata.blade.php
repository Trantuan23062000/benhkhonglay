@foreach ($thongtinbenhan as $item)
    <tr>
        <th>{{ $item->MA_BENH_AN }}</th>
        <td>{{ $item->THOI_GIAN_KHAM_BENH }}</td>
        <td>{{ $item->NGAY_KET_THUC_KHAM }}</td>
        <td>
            <a href="" class="btn btn-info btnview"><i class="ri-error-warning-line"></i></a>
        </td>
        <td>
            <a href="{{route('thongtinbenhan.edit',$item->MA_BENH_AN)}}" class="btn btn-warning btnsua"><i class="ri-edit-2-fill"></i></a>
        </td>
        <td>
            <a href="{{route('thongtinbenhan.destroy',$item->MA_BENH_AN)}}" class="btn btn-danger btnxoa"><i class="ri-delete-bin-5-line"></i></a>
        </td>
        <td>
            <a href="" class="btn btn-danger btnlichsukhambenh">Lịch sử khám bệnh</i></a>
        </td>
        <td>
            <a href="" class="btn btn-success btnxuat">Xuất hồ sơ</i></a>
        </td>
    </tr>
@endforeach