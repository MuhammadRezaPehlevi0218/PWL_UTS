<!DOCTYPE html>
<html>

<head></head>

<body>
    <table border="2">
        <caption>Daftar barang</caption>
        <thead>
            <tr>
                <th>id_barang</th>
                <th>kode_barang</th>
                <th>nama_barang</th>
                <th>kategori_barang</th>
                <th>harga</th>
                <th>qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $db)
            <tr>
                <td>{{$db->Id_barang}}</td>
                <td>{{$db->kode_barang}}</td>
                <td>{{$db->nama_barang}}</td>
                <td>{{$db->kategori_barang}}</td>
                <td>{{$db->harga}}</td>
                <td>{{$db->qty}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>