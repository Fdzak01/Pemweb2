<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-info">
                <th>No.</th>
                <th>Id</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Tempat lahir</th>
                <th>tanggal lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nama Kecamatan</th>
                <th>Dibuat Pada</th>
                <th>Diperbarui pada</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $pasien->id}}</td>
                <td>{{ $pasien->Kode}}</td>
                <td>{{ $pasien->nama}}</td>
                <td>{{ $pasien ->tmp_lahir}}</td>
                <td>{{ $pasien->tgl_lahir}}</td>
                <td>{{ $pasien->gender}}</td>
                <td>{{ $pasien->alamat}}</td>
                <td>{{ $pasien->kecamatan_nama}}</td>
                <td>{{ $pasien->created_at}}</td>
                <td>{{ $pasien->updated_at}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>