<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <h3>Data Kelurahan</h3>
        <a href="{{url('kelurahan/create')}}" class="btn btn-info" style="margin: 10px">Tambah +</a>
        <table class ="table table-bordered">
            <tr class = "table-success">
                <th>Id</th>
                <th>Nama Kelurahan</th>
                <th>nama kecamatan</th>
                <th>Aksi</th>
            </tr>

            @foreach ( $list_kelurahan as $kelurahan )
                <tr>
                    <td>{{ $kelurahan->id }}</td>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>{{ $kelurahan->kecamatan_nama }}</td>
                    <td><a href="{{url('kelurahan/show', $kelurahan->id)}}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </x-slot>
</x-layout>