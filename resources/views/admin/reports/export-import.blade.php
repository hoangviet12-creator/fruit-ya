@if(isset($data))
    <h2>Báo cáo nhập hàng từ {{ date('d/m/Y', strtotime($start)) }} đến {{ date('d/m/Y', strtotime($end)) }}</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> # </th>
                <th> Tên sản phẩm </th>
                <th> Danh mục sản phẩm </th>
                <th> Nhà cung cấp </th>
                <th> Số lượng đã nhập </th>
                <th> Tổng tiền </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $item)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->vendor->name}}</td>
                    <td>{{$item->goodsReceivedNoteDetails->sum('quantity')}} {{$item->unit}}</td>
                    <td>{{number_format($item->goodsReceivedNoteDetails->sum('total_price'))}}đ</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endif
