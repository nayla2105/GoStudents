<!DOCTYPE html>
<html>
<head>
    <title>List Item</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['stok'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
