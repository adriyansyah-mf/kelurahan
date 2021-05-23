<x-app-layout>
    <x-slot name="header_content">
        <h1>Edit Data Warga</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>

            <div class="breadcrumb-item">Tambah Data Warga</div>
        </div>
    </x-slot>
    @foreach ($warga as $p)


    <form action="/warga/update" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="col-7">
              <input type="text" class="form-control" name="nama" placeholder="Nama Tamu" value="{{ $p->nama_warga }}">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{ $p->nik }}">
              </div>
            <div class="col">
              <input type="text" class="form-control" name="jeniskelamin" placeholder="Jenis Kelamin" value="{{ $p->jenis_kelamin }}">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="rt" placeholder="RT" value="{{ $p->kode_rt }}">
              </div>
              <div class="col">
                <input type="text" class="form-control" name="rw" placeholder="RW" value="{{ $p->kode_rw }}">
              </div>


        </div>
        <input  type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </form>
    @endforeach
</x-app-layout>
