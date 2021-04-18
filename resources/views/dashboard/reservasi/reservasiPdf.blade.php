<!DOCTYPE html>
<html>

<head>
    <title>ToBeABrideXCloudStudio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/tobeabride.ico">


    <style type="text/css">
    table tr td,
    table tr th {
        font-size: 9pt;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }

    body {
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.7;
        color: #212529;
        overflow-x: hidden;
        background: url(assets/img/silver/seamless.png);
    }

    .date-section__flowers {
        max-width: 300px;
        padding-bottom: 30px;
    }

    .section--bg {
        background: <?=$calon->color ?>;
    }
    </style>

</head>

<body>

    <section class="title text-center">
        <div class="container">
            <div class="date-section__flowers m-auto">
                <img style="width:400px;height:100px;" src="assets\img\logo\flow.png" alt="flowers">
            </div>
        </div>
    </section>
    <table class="table w3-centered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <!-- <th>Pengantin</th> -->
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
                <!-- <td>{{$r->calon->nick_pria}} & {{$r->calon->nick_wanita}}</td> -->
                <td>{{$r->nama}}</td>
                <td>{{$r->alamat}}</td>
                <td>{{$r->ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>