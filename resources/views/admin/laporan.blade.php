<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Transaksi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles -->
</head>

<body>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-tittle">Transaction Report</h3>
        </div>
        <div class="panel-body">
            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Tanggal Pembelian</th>
                        <th>Alamat Pengiriman</th>
                        <th>Harga Barang</th>
                        <th>Biaya Ongkir</th>
                        <th>Total</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($report as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$item->produk}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>{{$item->sub}}</td>
                        <td>{{$item->ongkir}}</td>
                        <td>{{$item->total}}</td>
                        <td>{{$item->status}}</td>
                        <td class="text-center"></td>

                        @empty
                    <tr>
                        <td class="text-center" colspan="3">
                            <p>Tidak ada data</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <script type="text/javascript">
                window.print();
            </script>

        </div>
    </div>
</body>

</html>