<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title">Tambah Data Benda</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="needs-validation" action="{{ route('cagarbudaya_benda.create') }}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Benda</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Benda" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Penyimpanan</label>
                        <input type="text" class="form-control" id="tempat_penyimpanan" name="tempat_penyimpanan"
                            placeholder="Tempat Penyimpanan">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
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
                        <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Kepemilikan</label>
                        <textarea type="text" class="form-control" id="riwayat" name="riwayat"
                            placeholder="Riwayat Kepemilikan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pengelola</label>
                        <input type="text" class="form-control" id="pengelola" name="pengelola" placeholder="Pengelola">
                    </div>
                    <div class="form-group">
                        <label>Panjang</label>
                        <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang">
                    </div>
                    <div class="form-group">
                        <label>Lebar</label>
                        <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar">
                    </div>
                    <div class="form-group">
                        <label>Tinggi</label>
                        <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="Tinggi">
                    </div>
                    <div class="form-group">
                        <label>Tebal</label>
                        <input type="text" class="form-control" id="tebal" name="tebal" placeholder="Tebal">
                    </div>
                    <div class="form-group">
                        <label>Diameter</label>
                        <input type="text" class="form-control" id="diameter" name="diameter" placeholder="Diameter">
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="text" class="form-control" id="berat" name="berat" placeholder="Berat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" class="form-control" id="warna" name="warna" placeholder="Warna">
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
                        <label>Sejarah Benda</label>
                        <textarea type="text" class="form-control" id="sejarah" name="sejarah"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Benda</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder=""
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Benda</label>
                        <input type="file" class="form-control" id="foto" name="foto" placeholder="" required>
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