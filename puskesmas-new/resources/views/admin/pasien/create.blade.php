  <x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
        <x-slot name="page_content">
            <form class="forms-sample" action="{{url('pasien/store')}}" method="post">
                @csrf
                <div class="form-group row">
                  <label for="kode" class="col-4 col-form-label">Kode</label> 
                  <div class="col-8">
                    <input id="kode" name="kode" placeholder="Masukan Kode " type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-address-book-o"></i>
                        </div>
                      </div> 
                      <input id="nama" name="nama" placeholder="Masukan Nama Pasien" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                  <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div> 
                      <input id="tgl_lahir" name="tgl_lahir" placeholder="YYYY-MM-DD" type="date" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Jenis Kelamin</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                      <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                      <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-4 col-form-label">E-Mail</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-envelope"></i>
                        </div>
                      </div> 
                      <input id="email" name="email" placeholder="Masukan E-Mail" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                  <div class="col-8">
                    <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kecamatan_nama" class="col-4 col-form-label">Nama Kecamatan</label> 
                  <div class="col-8">
                    <input id="kecamatan_nama" name="kecamatan_nama" placeholder="Masukan Kecamatan" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    <button name="reset" type="reset" class="btn btn-warning">Batal</button>
                  </div>
                </div>
            </form>
        </x-slot>
    
  </x-layout>
