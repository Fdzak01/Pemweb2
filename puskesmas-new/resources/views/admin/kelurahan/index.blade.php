<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <h3>Data Kelurahan</h3>

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
                    <td><a href="{{url('kelurahan/show', $kelurahan->id)}}" class="btn btn-info"><i class="far fa-eye"></i> Lihat</a> 
                        <a href="{{url('kelurahan/edit', $kelurahan->id)}}" class="btn btn-primary"><i class="far fa-edit"></i> Edit</a> 
                        <form action="{{url('kelurahan/destroy', $kelurahan->id)}}" method="POST" class="d-inline">
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