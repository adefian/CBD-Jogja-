
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg role="document">
        <div class="modal-content">
        <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Struktur</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form class="needs-validation" action="{{ route('cagarbudaya_struktur.create') }}" method="POST"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Struktur</label>
                        <input type="text" required class="form-control" id="nama" name="nama"
                            placeholder="Nama Struktur">
                    </div>
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
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
                        <label>Koordinat Google X</label>
                        <input type="number" class="form-control" id="latitude" name="latitude"
                            placeholder="Koordinat X">
                    </div>
                    <div class="form-group">
                        <label>Koordinat Google y</label>
                        <input type="number" class="form-control" id="longitude" name="longitude"
                            placeholder="Koordinat Y">
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
                        <label>Panjang</label>
                        <input type="text" class="form-control" id="panjang" name="panjang"
                            placeholder="Panjang">
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
                        <input type="text" class="form-control" id="diameter" name="diameter"
                            placeholder="Diameter">
                    </div>
                    <div class="form-group">
                        <label>Luas Lahan</label>
                        <input type="text" class="form-control" id="luas_lahan" name="luas_lahan"
                            placeholder="Luas Lahan">
                    </div>
                    <div class="form-group">
                        <label>Batas Utara</label>
                        <input type="text" class="form-control" id="batas_utara" name="utara" placeholder="Batas Utara">
                    </div>
                    <div class="form-group">
                        <label>Batas Selatan</label>
                        <input type="text" class="form-control" id="batas_selatan" name="selatan" placeholder="Batas Selatan">
                    </div>
                    <div class="form-group">
                        <label>Batas Timur</label>
                        <input type="text" class="form-control" id="batas_timur" name="timur" placeholder="Batas Timur">
                    </div>
                    <div class="form-group">
                        <label>Batas Barat</label>
                        <input type="text" class="form-control" id="batas_barat" name="barat" placeholder="Batas Barat">
                    </div>
                    <div class="form-group">
                        <label>Bahan</label>
                        <input type="text" class="form-control" id="bahan" name="bahan" placeholder="Bahan">
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
                        <label>Sejarah Struktur</label>
                        <textarea type="text" class="form-control" id="sejarah" name="sejarah"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Struktur</label>
                        <textarea type="text" required class="form-control" id="deskripsi" name="deskripsi"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Struktur</label>
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