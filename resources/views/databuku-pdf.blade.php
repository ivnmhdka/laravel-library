<head>

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
</head>