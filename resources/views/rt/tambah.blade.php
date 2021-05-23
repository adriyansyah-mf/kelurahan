<x-app-layout>
    <x-slot name="header_content">
        <h1>Tambah Data RT</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>

            <div class="breadcrumb-item">Tambah Data RT</div>
        </div>
    </x-slot>
    <form action="/rt/store" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-7">
              <input type="text" class="form-control" name="namart" placeholder="Nama RT">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="rt" placeholder="Kode RT">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="rw" placeholder="Kode RW">
            </div>

        </div>
        <input  type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </form>
</x-app-layout>
