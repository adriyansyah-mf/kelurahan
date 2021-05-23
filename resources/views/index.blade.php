<x-app-layout>
    <x-slot name="header_content">
        <h1>Data Kelurahan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($kelurahan as $p)
            <tr>
                <td>{{ $p->nama_kelurahan }}</td>

                <td>
                    <a href="/kelurahan/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a href="/kelurahan/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
