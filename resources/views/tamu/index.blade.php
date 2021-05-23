<x-app-layout>
    <x-slot name="header_content">
        <h1>Data Tamu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>
    <a href="/tamu/tambah" target="_blank"> + Tambah Tamu Baru</a>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">NIK</th>

                   <th scope="col">Nama </th>
                   <th scope="col">Alamat</th>
                   <th scope="col">Kode RT</th>
                   <th scope="col">Kode RW</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           @foreach ($tamu as $p)
           <tbody>

                <td>{{$p->nik}}</td>
                <td>{{$p->nama_tamu}}</td>
                <td>{{$p->alamat}}</td>
                <td>{{$p->kode_rt}}</td>
                <td>{{$p->kode_rw}}</td>


                 <td>
                    <a href="/tamu/edit/{{$p->id}}">Edit</a>
		                |
		            <a href="/tamu/hapus/{{$p->id}}">Hapus</a>
                </td>

           </tbody>

           @endforeach
       </table>
    </div>
</x-app-layout>
