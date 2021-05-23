<x-app-layout>
    <x-slot name="header_content">
        <h1>Edit Data RW</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>

            <div class="breadcrumb-item">Tambah Data RW</div>
        </div>
    </x-slot>
    @foreach ($rw as $p)


    <form action="/rw/update" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="col-7">
              <input type="text" class="form-control" name="namarw" placeholder="Nama RT" value="{{ $p->nama_rw }}">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="rw" placeholder="RW" value="{{ $p->kode_rw }}">
            </div>

        </div>
        <input  type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </form>
    @endforeach
</x-app-layout>
