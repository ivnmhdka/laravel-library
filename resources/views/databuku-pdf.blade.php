<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jumlah Halaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $index => $book)
            <tr>
                <td>{{ $index + 1}}</td>
                <td>{{ $book->judul}}</td>
                <td>{{ $book->pengarang}}</td>
                <td>{{ $book->penerbit}}</td>
                <td>{{ $book->thn_terbit}}</td>
                <td>{{ $book->jml_halaman}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>