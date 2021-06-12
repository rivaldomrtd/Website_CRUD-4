<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Edit Data</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=number] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>
</head>

<body>
    <h2 align="center">Tambah Data Dokter</h2>
    <div class="container" style="width: 600px" align="center">
        <form action="{{ url('dokter/'.$dokter->id) }}" method="post" style="width: 400px">
            @csrf
            <div class="row">
                <input type="hidden" name="_method" value="patch">
                <div class="col-25"> <label>Nama </label> </div>
                    <div class="col-75"> <input type="text" name="nama" value="{{$dokter->nama}}"> </div>
                </div>
                <div class="row">
                    <div class="col-25"> <label>Jabatan</label> </div>
                        <div class="col-75"> <input type="text" name="jabatan" value="{{$dokter->jabatan}}"> </div>
                    </div>
                <div class="row"><br> <button type="submit" style="position: left">Simpan</button>
        </form>
    </div>
</body>
