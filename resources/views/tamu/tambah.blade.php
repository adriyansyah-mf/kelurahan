<x-app-layout>
    <x-slot name="header_content">
        <h1>Tambah Data Tamu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>

            <div class="breadcrumb-item">Tambah Data Tamu</div>
        </div>
    </x-slot>
    <form action="/tamu/store" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-7">
              <input type="text" class="form-control" name="nik" placeholder="NIK">
            </div>
            <div class="col-7 mt-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama Tamu">
              </div>
              <div class="col-7 mt-3">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
              <div class="col mt-3">
                <input type="text" class="form-control" name="rt" placeholder="Kode RT">
              </div>
            <div class="col mt-3">
              <input type="text" class="form-control" name="rw" placeholder="Kode RW">
            </div>

        </div>
        <input  type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </form>
</x-app-layout>
