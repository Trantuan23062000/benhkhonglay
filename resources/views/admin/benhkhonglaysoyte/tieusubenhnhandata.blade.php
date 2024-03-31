<?php $stt=1;?>
@foreach ($tiensubenhan as $item)
    <tr>
        <th>{{$stt}}</th>
        <th>{{ $item->HO_TEN }}</th>
        <td>{{ $item->THOI_GIAN_GHI_NHAN }}</td>
        <td>SNT{{$item->SO_NGOAI_TRU}}</td>
        <td>MYT{{$item->MA_YT}}</td>

        <td>
            <a href="" class="btn btn-info btnview"><i class="ri-error-warning-line"></i></a>
        </td>
        <td>
            <a href="" class="btn btn-warning btnsua"><i class="ri-edit-2-fill"></i></a>
        </td>
        <td>
            <a href="" class="btn btn-danger btnxoa"><i class="ri-delete-bin-5-line"></i></a>
        </td>
    </tr>
    <?php $stt++; ?>
@endforeach
