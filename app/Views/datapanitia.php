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
                                    <th>Nama</th>
                                    <th>Cabang</th>
                                    <th>No HP</th>
                                    <th>Seksi</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if($viewpanitia): ?>
                                <?php foreach($viewpanitia as $user): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?php echo $user['nama']; ?></td>
                                    <td><?php echo $user['cabang']; ?></td>
                                    <td><?php echo $user['no_hp']; ?></td>
                                    <td><?php echo $user['seksi']; ?></td>
                                    <td><?php echo $user['ket']; ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" style="font-weight: 600;" data-toggle="modal"
                                            data-target="#edit"><i class="bi fas fa-pencil-square"></i> Edit</a>
                                        <div class="modal fade" id="edit" data-backdrop="static" tabindex="-1"
                                            role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data
                                                            <?php echo $user['nama']; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" id="add_create" name="add_create"
                                                            action="<?= site_url('/editpanitia') ?>">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <input type="hidden" id="id"
                                                                        value="<?php echo $user['id']; ?>" name="id"
                                                                        readonly>
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" class="form-control" id="nama"
                                                                        value="<?php echo $user['nama']; ?>"
                                                                        name="nama">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="cabang">Cabang</label>
                                                                    <input type="text" class="form-control" id="cabang"
                                                                        placeholder="Masukan Cabang"
                                                                        value="<?php echo $user['cabang']; ?>"
                                                                        name="cabang">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_hp">NO HP</label>
                                                                    <input type="text" class="form-control" id="no_hp"
                                                                        placeholder="Masukan No HP"
                                                                        value="<?php echo $user['no_hp']; ?>"
                                                                        name="no_hp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="seski">Seksi</code></label>
                                                                    <select class="custom-select rounded-0" id="seksi"
                                                                        name="seksi">
                                                                        <option><?php echo $user['seksi']; ?>
                                                                        </option>
                                                                        <?php if($idpanitia): ?>
                                                                        <?php foreach($idpanitia as $panitia): ?>
                                                                        <option><?php echo $panitia['seksi']; ?>
                                                                        </option>
                                                                        <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="ket">Keterangan</code></label>
                                                                    <select class="custom-select rounded-0" id="ket"
                                                                        name="ket">
                                                                        <option><?php echo $user['ket']; ?></option>
                                                                        <option>Anggota</option>
                                                                        <option>Koordinator</option>
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
                                        <a href="<?php echo base_url('delpanitia/'.$user['id']);?>"
                                            class="btn btn-danger btn-sm" style="font-weight: 600;"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $user['nama']; ?> ?');"><i
                                                class="bi fas fs-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Cabang</th>
                                    <th>No HP</th>
                                    <th>Seksi</th>
                                    <th>Keterangan</th>
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

<!-- Modal -->
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
                <form method="post" id="add_create" name="add_create" action="<?= site_url('/addpanitia') ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="cabang">Cabang</label>
                            <input type="text" class="form-control" id="cabang" placeholder="Masukan Cabang"
                                name="cabang">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">NO HP</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="Masukan No HP" name="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="seski">Seksi</code></label>
                            <select class="custom-select rounded-0" id="seksi" name="seksi">
                                <?php if($idpanitia): ?>
                                <?php foreach($idpanitia as $idpanitia): ?>
                                <option><?php echo $idpanitia['seksi']; ?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</code></label>
                            <select class="custom-select rounded-0" id="ket" name="ket">
                                <option>Anggota</option>
                                <option>Koordinator</option>
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