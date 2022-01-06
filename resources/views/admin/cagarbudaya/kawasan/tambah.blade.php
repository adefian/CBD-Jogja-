
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg role="document">
        <div class="modal-content">
        <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kawasan</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form class="needs-validation" action="{{ route('cagarbudaya_kawasan.create') }}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Kawasan</label>
                        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Kawasan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" required class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten">
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label>Kelurahan/Desa</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan">
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="number" class="form-control" id="kodepos" name="kodepos" placeholder="Kode Pos">
                    </div>
                    <div class="form-group">
                        <label>Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik"
                            placeholder="Pemilik">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Kepemilikan</label>
                        <textarea type="text" class="form-control" id="riwayat" name="riwayat"
                            placeholder="Riwayat Kepemilikan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengelola</label>
                        <input type="text" class="form-control" id="pengelola" name="pengelola"
                            placeholder="Pengelola">
                    </div>
                    <div class="form-group">
                        <label>Luas Lahan</label>
                        <input type="text" class="form-control" id="luas_lahan" name="luas_lahan"
                            placeholder="Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label>Batas Utara</label>
                        <input type="text" class="form-control" id="utara" name="utara"
                            placeholder="Batas Utara">
                    </div>
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input type="text" class="form-control" id="selatan" name="selatan"
                            placeholder="Batas Selatan">
                    </div>
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input type="text" class="form-control" id="timur" name="timur"
                            placeholder="Batas Timur">
                    </div>
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input type="text" class="form-control" id="barat" name="barat"
                            placeholder="Batas Barat">
                    </div>
                    <div class="form-group">
                        <label>Ketinggian</label>
                        <input type="text" class="form-control" id="ketinggian" name="ketinggian"
                            placeholder="Ketinggian">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                        <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi">
                    </div>
                    <div class="form-group">
                        <label>Periodesasi</label>
                        <input type="text" class="form-control" id="periodesasi" name="periodesasi" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Sejarah Kawasan</label>
                        <textarea type="text" class="form-control" id="sejarah" name="sejarah"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Kawasan</label>
                        <textarea type="text" required class="form-control" id="deskripsi" name="deskripsi"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Kawasan</label>
                        <input type="file" required class="form-control" id="foto" name="foto" placeholder="">
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