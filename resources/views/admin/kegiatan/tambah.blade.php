
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

            <form class="needs-validation" action="{{ route('kegiatan.store') }}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" required class="form-control" id="nama" name="nama_kegiatan"
                            placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelaksanaan</label>
                        <input type="date" required class="form-control" id="tgl" name="tanggal"
                            placeholder="Tanggal Pelaksanaan">
                    </div>
                    <div class="form-group">
                        <label>Tempat Pelaksanaan</label>
                        <input type="text" required class="form-control" id="tempat" name="tempat"
                            placeholder="Tempat Pelaksanaan">
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