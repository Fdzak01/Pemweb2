<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Data Pasien</h3>

        @if (session('Create'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('Create') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            
        @endif

        @if (session('Update'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('Update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        
          @endif

        @if (session('Delete'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{ session('Delete') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
        @endif

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
                        <a href="{{url('pasien/edit', $pasien->id)}}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{url('pasien/destroy', $pasien->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm(confirm('apakah anda yakin ingin menghapus data?'))"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </x-slot>
</x-layout>