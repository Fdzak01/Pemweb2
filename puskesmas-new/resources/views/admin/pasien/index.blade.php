<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Data Pasien</h3>
        <a href="{{url('pasien/create')}}" class="btn btn-info" style="margin: 10px">Tambah +</a>
        <table class ="table table-bordered">
            <tr class = "table-info">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tmp. Lahir</th>
                <th>Tgl. lahir</th>
                <th>Jenis Kelamin</th>
                <th>E-mail</th>
                <th>Aksi</th>
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
                    <td><a href="{{url('pasien/show', $pasien->id)}}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </x-slot>
</x-layout>