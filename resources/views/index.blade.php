<!DOCTYPE html>
<html>
<head>
    <title>Tugas 4 MSIB</title>
</head>
<body>
    <h2>Data Barang Kelontong</h2>
    <table border='2'>
    <?php $i = 1;?>
    <tr>
        <th>No</throw>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
    </tr>
    @php($no=1)
    @foreach($barang as $b)
    <tr>
        <td>{{ $no++}}</td>
        <td>{{ $b->nama_barang}}</td>
        <td>{{ $b->jumlah_barang}}</td>
    </tr>
    @endforeach
    <?php $i++;?>
</table>
</body>
</html>