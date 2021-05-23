<x-app-layout>
    <x-slot name="header_content">
        <h1>Data Warga</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>
    <a href="/warga/tambah" target="_blank"> + Tambah Warga Baru</a>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">NIK</th>

                   <th scope="col">Nama </th>

                   <th scope="col">Jenis Kelamin</th>
                   <th scope="col">Kode RT</th>
                   <th scope="col">Kode RW</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           @foreach ($warga as $p)
           <tbody>

                <td>{{$p->nik}}</td>
                <td>{{$p->nama_warga}}</td>
                <td>{{$p->jenis_kelamin}}</td>
                <td>{{$p->kode_rt}}</td>
                <td>{{$p->kode_rw}}</td>


                  <td>
                    <a href="/warga/edit/{{$p->id}}">Edit</a>
		                |
		            <a href="/warga/hapus/{{$p->id}}">Hapus</a>
                </td>
           </tbody>

           @endforeach
       </table>
    </div>
</x-app-layout>
