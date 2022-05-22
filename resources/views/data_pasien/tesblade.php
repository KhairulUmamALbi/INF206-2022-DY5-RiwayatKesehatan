<!DOCTYPE html>
<html>

<head>
    <title>Input Search Dengan Bootstrap dan Javascript</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="search.js"></script>
    <style>
        .form-control {
            width: 25%;
        }

        input[type=search] {
            float: right;
            border: 1px solid #0af;
            margin-bottom: 10px;
        }

    </style>
</head>

<body>
    <section class="container">

        <h3>Input Search Dengan Bootstrap dan Javascript</h3>

        <input type="search" class="form-control light-table-filter" data-table="table-hover" placeholder="Mencari..." />

        <table class="table table-hover text-center">
            <thead>
                <tr class="table-primary">
                    {{-- <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Alamat</th> --}}

                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Golongan darah</th>
                    <th scope="col">Subjek</th>
                    <th scope="col">Objek</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">Terapi</th>
                    <th scope="col">Pemeriksa</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Opsi</th>

                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td>Donw Juan</td>
                    <td>donju@gmail.com</td>
                    <td>021707070</td>
                    <td>Jakarta</td>
                </tr>
                <tr>
                    <td>Dee Dumm</td>
                    <td>deed@gmail.com</td>
                    <td>021517070</td>
                    <td>Bandung</td>
                </tr>
                <tr>
                    <td>Excel Id</td>
                    <td>exid@gmail.com</td>
                    <td>021747451</td>
                    <td>Banten</td>
                </tr> --}}


                @foreach($data_pasien as $dp)
            <tr>
                <th scope="row">{{$dp->id}}</th>
                <!-- <td>{{$dp->id}}</td> -->
                <td>{{$dp->name}}</td>
                <td>{{$dp->jenis_kelamin}}</td>
                <td>{{$dp->golongan_darah}}</td>
                <td>{{$dp->subjek}}</td>
                <td>{{$dp->objek}}</td>
                <td>{{$dp->diagnosa}}</td>
                <td>{{$dp->terapi}}</td>
                <td>{{$dp->pemeriksa}}</td>
                <td>{{$dp->tanggal}}</td>


            </tr>
            @endforeach

            </tbody>
        </table>

    </section>

    <script>
        (function(document) {
            'use strict';

            var LightTableFilter = (function(Arr) {

                var _input;

                function _onInputEvent(e) {
                    _input = e.target;
                    var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                    Arr.forEach.call(tables, function(table) {
                        Arr.forEach.call(table.tBodies, function(tbody) {
                            Arr.forEach.call(tbody.rows, _filter);
                        });
                    });
                }

                function _filter(row) {
                    var text = row.textContent.toLowerCase(),
                        val = _input.value.toLowerCase();
                    row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('light-table-filter');
                        Arr.forEach.call(inputs, function(input) {
                            input.oninput = _onInputEvent;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    LightTableFilter.init();
                }
            });

        })(document);
    </script>

</body>

</html>
