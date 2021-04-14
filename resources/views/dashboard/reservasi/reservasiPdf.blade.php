<!DOCTYPE html>
<html>

<head>
    <title>ToBeABrideXCloudStudio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
    table tr td,
    table tr th {
        font-size: 9pt;
    }
    </style>
    <center>
        <h5>Reservasi Data</h5>
        <h5>{{$calon->nick_pria}} & {{$calon->nick_wanita}}</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Pengantin</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($reservasi as $r)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$r->calon->nick_pria}} & {{$r->calon->nick_wanita}}</td>
                <td>{{$r->nama}}</td>
                <td>{{$r->alamat}}</td>
                <td>{{$r->ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>