<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Cabang</th>
                                    <th>Sapi BUMM</th>
                                    <th>Sapi BUMM/orang</th>
                                    <th>Kambing Bumm</th>
                                    <th>Sapi Cabang</th>
                                    <th>Kambing Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php if($viewqurban): ?>
                                <?php foreach($viewqurban as $qurban): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?php echo $qurban['cabang']; ?></td>
                                    <td><?php echo $qurban['sapi_bumm']; ?></td>
                                    <td><?php echo $qurban['sapib_bumm']; ?></td>
                                    <td><?php echo $qurban['kambing_bumm']; ?></td>
                                    <td><?php echo $qurban['sapi_mandiri']; ?></td>
                                    <td><?php echo $qurban['kambing_mandiri']; ?></td>
                                    <td><?php echo $qurban['info']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('edit-view/'.$qurban['id']);?>"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('delete/'.$qurban['id']);?>"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Cabang</th>
                                    <th>Sapi BUMM</th>
                                    <th>Sapi BUMM/orang</th>
                                    <th>Kambing Bumm</th>
                                    <th>Sapi Cabang</th>
                                    <th>Kambing Cabang</th>
                                    <th>Status</th>
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