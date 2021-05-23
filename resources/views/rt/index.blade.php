<x-app-layout>
    <x-slot name="header_content">
        <h1>Data RT</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>
    <a href="/rt/tambah" target="_blank"> + Tambah RT Baru</a>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
       <table class="table">
           <thead>
               <tr>
                   <th scope="col">Nama RT</th>
                   <th scope="col">Kode RT</th>
                   <th scope="col">Kode RW</th>
                   <th scope="col">Opsi</th>
               </tr>
           </thead>
           @foreach ($rt as $p)
           <tbody>

                <td>{{$p->nama_rt}}</td>
                <td>{{$p->kode_rt}}</td>
                <td>{{$p->kode_rw}}</td>

                <td>
                    <a href="/rt/edit/{{$p->id}}">Edit</a>
		                |
		            <a href="/rt/hapus/{{$p->id}}">Hapus</a>
                </td>

           </tbody>

           @endforeach
       </table>
    </div>
</x-app-layout>
