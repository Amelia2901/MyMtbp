<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>
    @extends('components.layouts.app')

    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Subtitle</th>
        </tr>
        @foreach ($contact_mosques as $p)
            <tr>
                <td>{{ $p->title_contact }}</td>
                <td>{{ $p->subtitle_contact }}</td>

                <td>
                    <a href="/pegawai/edit/{{ $p->contact_id }}">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->contact_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>


</body>

</html>
