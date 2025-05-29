<!DOCTYPE html>
<html>
<head>
    <title>Data NIM Ganjil & Genap</title>
</head>
<body>
    <h1>Data NIM</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ url('/nims') }}" method="POST">
        @csrf
        <input type="text" name="nim" placeholder="Masukkan NIM" required>
        <button type="submit">Tambah</button>
    </form>

    <h2>NIM Ganjil</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ganjil as $nim)
            <tr>
                <td>{{ $nim->id }}</td>
                <td>{{ $nim->nim }}</td>
                <td>
                    <form action="{{ url('/nims/' . $nim->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($ganjil->isEmpty())
                <tr><td colspan="3">Belum ada NIM ganjil.</td></tr>
            @endif
        </tbody>
    </table>

    <h2>NIM Genap</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genap as $nim)
            <tr>
                <td>{{ $nim->id }}</td>
                <td>{{ $nim->nim }}</td>
                <td>
                    <form action="{{ url('/nims/' . $nim->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($genap->isEmpty())
                <tr><td colspan="3">Belum ada NIM genap.</td></tr>
            @endif
        </tbody>
    </table>
</body>
</html>