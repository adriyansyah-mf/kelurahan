<x-app-layout>
    <x-slot name="header_content">
        <h1>Tambah Data Kelurahan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>

            <div class="breadcrumb-item">Tambah Data Kelurahan</div>
        </div>
    </x-slot>
    <form action="/kelurahan/store" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-7">
              <input type="text" class="form-control" name="namakelurahan" placeholder="Nama Kelurahan">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="rt" placeholder="RT">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="rw" placeholder="RW">
            </div>

        </div>
        <input  type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </form>
</x-app-layout>
