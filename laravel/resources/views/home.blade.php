<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Nilai</h1>
        <table class="table text-white ">
            <tr>
                <td>Nama</td>
                <td>Nilai</td>
                <td>Rangking</td>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach ($data as $nilai => $nama)
            <tr>
                <td>{{$nama}}</td>
                <td>{{$nilai}}</td>
                <td>{{$i}}</td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>