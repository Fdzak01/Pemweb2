<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <table class ="table table-bordered">
            <tr class = "table-info">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tmp. Lahir</th>
                <th>Tgl. lahir</th>
                <th>Jenis Kelamin</th>
                <th>E-mail</th>
                <th>Alamat</th>
                <th>Nama Kecamatan</th>
            </tr>

            @foreach ( $list_pasien as $pasien )
                <tr>
                    <td>{{ $pasien->id }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->tmp_lahir}}</td>
                    <td>{{ $pasien->tgl_lahir}}</td>
                    <td>{{ $pasien->gender}}</td>
                    <td>{{ $pasien->email}}</td>
                    <td>{{ $pasien->alamat}}</td>
                    <td>{{ $pasien->kecamatan_nama }}</td>
                </tr>
            @endforeach

        </table>
    </x-slot>
</x-layout>