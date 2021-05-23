<x-app-layout>
    <x-slot name="header_content">
        <h1>Data Kelurahan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>
    <a href="/kelurahan/tambah" target="_blank"> + Tambah Pegawai Baru</a>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">Nama Kelurahan</th>
                   <th scope="col">RT</th>
                   <th scope="col">RW</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           @foreach ($kelurahan as $p)
           <tbody>

                <td>{{$p->nama_kelurahan}}</td>
                <td>{{$p->kode_rt}}</td>
                <td>{{$p->kode_rw}}</td>

                <td>
                    <a href="/kelurahan/edit/{{$p->id}}">Edit</a>
		                |
		            <a href="/kelurahan/hapus/{{$p->id}}">Hapus</a>
                </td>

           </tbody>

           @endforeach
       </table>
    </div>
</x-app-layout>
