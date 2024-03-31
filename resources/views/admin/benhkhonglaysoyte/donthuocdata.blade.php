<?php $stt=1;?>
@foreach ($donthuoc as $item)
    <tr>
        <th scope="row">{{$stt}}</th>
        <th scope="row">MTT00{{$item->MA_TOA_THUOC}}</th>
        <td>{{ $item->NGAY_KE }}</td>
        <td>{{ $item->TOA_KE_DEN }}</td>
        @if ($item->THANH_TIEN==0)
            <td>Bảo hiểm thanh toán 100 %</td>
            @else
            <td>{{ number_Format($item->THANH_TIEN) }}.VNĐ</td>
        @endif

        <td>
            <a href="" class="btn btn-info btnview"><i class="ri-error-warning-line"></i></a>
        </td>
        <td>
            <a href="{{route('donthuoc.destroy',$item->MA_TOA_THUOC)}}" class="btn btn-danger btnxoa"><i class="ri-delete-bin-5-line"></i></a>
        </td>
    </tr>
    <?php $stt++; ?>
@endforeach
