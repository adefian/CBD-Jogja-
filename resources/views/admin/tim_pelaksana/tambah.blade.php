
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg role="document">
        <div class="modal-content">
        <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form class="needs-validation" action="{{ route('timpelaksana.store') }}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" required class="form-control" id="nama" name="nama"
                            placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" required class="form-control" id="jabatan" name="jabatan"
                            placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" required class="form-control" id="alamat" name="alamat"
                            placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" required class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="" selected disabled>- Jenis Kelamin -</option>
                            <option value="L">Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" required class="form-control" id="telepon" name="telepon"
                            placeholder="Telepon">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea type="text" required class="form-control" id="keterangan" name="keterangan"
                            placeholder="Keterangan"></textarea>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                    <button type="button" style="margin-left: 3px;" class="btn btn-danger pull-right"
                        data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>