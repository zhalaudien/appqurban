<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddata">
                            Add Data
                        </button>
                        <a href="" class="btn btn-secondary btn">Exsprot Data</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Cabang</th>
                                    <th>Ketua</th>
                                    <th>No HP</th>
                                    <th>Panitia</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Perwakilan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if($viewcabang): ?>
                                <?php foreach($viewcabang as $cabang): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?php echo $cabang['cabang']; ?></td>
                                    <td><?php echo $cabang['ketua_cabang']; ?></td>
                                    <td><?php echo $cabang['no_hp']; ?></td>
                                    <td><?php echo $cabang['panitia_qurban']; ?></td>
                                    <td><?php echo $cabang['no2_hp']; ?></td>
                                    <td><?php echo $cabang['alamat']; ?></td>
                                    <td><?php echo $cabang['perwakilan']; ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
                                            data-target="#edit"><i class="bi fas fa-pencil-square"></i> Edit</a>
                                        <div class="modal fade" id="edit" data-backdrop="static" tabindex="-1"
                                            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data
                                                            <?php echo $cabang['cabang']; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="add_create" name="add_create"
                                                            action="<?= site_url('/editcabang') ?>">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <input type="hidden" id="id"
                                                                        value="<?php echo $cabang['id']; ?>" name="id"
                                                                        readonly>
                                                                    <label for="cabang">Cabang</label>
                                                                    <input type="text" class="form-control" id="cabang"
                                                                        value="<?php echo $cabang['cabang']; ?>"
                                                                        name="cabang">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pimpinan_cabang">Pimpinan Cabang</label>
                                                                    <input type="text" class="form-control"
                                                                        id="ketua_cabang"
                                                                        value="<?php echo $cabang['ketua_cabang']; ?>"
                                                                        name="ketua_cabang">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_hp">NO HP</label>
                                                                    <input type="text" class="form-control" id="no_hp"
                                                                        value="<?php echo $cabang['no_hp']; ?>"
                                                                        name="no_hp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="panitia_qurban">Panitia Qurban
                                                                        Cabang</label>
                                                                    <input type="text" class="form-control"
                                                                        id="panitia_qurban"
                                                                        value="<?php echo $cabang['panitia_qurban']; ?>"
                                                                        name="panitia_qurban">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no2_hp">NO HP Panitia Qurban</label>
                                                                    <input type="text" class="form-control" id="no2_hp"
                                                                        value="<?php echo $cabang['no2_hp']; ?>"
                                                                        name="no2_hp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" class="form-control" id="alamat"
                                                                        value="<?php echo $cabang['alamat']; ?>"
                                                                        name="alamat">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="ket">Keterangan</code></label>
                                                                    <select class="custom-select rounded-0" id="ket"
                                                                        name="ket">
                                                                        <option><?php echo $cabang['perwakilan']; ?>
                                                                        </option>
                                                                        <option>Sragen</option>
                                                                        <option>Karanganyar</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url('delcabang/'.$cabang['id']);?>"
                                            class="btn btn-danger btn-sm" style="font-weight: 600;"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $cabang['cabang']; ?>')"><i
                                                class="bi bi-trash-fill"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Cabang</th>
                                    <th>Ketua</th>
                                    <th>No HP</th>
                                    <th>Panitia</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Perwakilan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<div class="modal fade" id="adddata" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Data Panitia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="add_create" name="add_create" action="<?= site_url('/addcabang') ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cabang">Cabang</label>
                            <input type="text" class="form-control" id="cabang" placeholder="Masukan Cabang"
                                name="cabang">
                        </div>
                        <div class="form-group">
                            <label for="ketua_cabang">Ketua Cabang</label>
                            <input type="text" class="form-control" id="ketua_cabang"
                                placeholder="Masukan Pimpinan Cabang" name="ketua_cabang">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">NO HP</label>
                            <input type="text" class="form-control" id="no_hp"
                                placeholder="Masukan No HP Pimpinan Cabang" name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="panitia_qurban">Panitia Qurban Cabang</label>
                            <input type="text" class="form-control" id="panitia_qurban"
                                placeholder="Masukan Pimpinan Cabang" name="panitia_qurban">
                        </div>
                        <div class="form-group">
                            <label for="no2_hp">NO HP</label>
                            <input type="text" class="form-control" id="no2_hp"
                                placeholder="Masukan No HP Panitia qurban" name="no2_hp">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Cabang"
                                name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="ket">Perwakilan</code></label>
                            <select class="custom-select rounded-0" id="ket" name="ket">
                                <option>Sragen</option>
                                <option>Karanganyar</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>