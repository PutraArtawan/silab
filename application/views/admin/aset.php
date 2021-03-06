                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>

                                    <?php foreach ($aset as $val) { ?>
                                    <tbody>
                                        <td><?= $val['nama_barang']; ?></td>
                                        <td><?= $val['speifikasi']; ?></td>
                                        <td>
                                            <center>
                                                <a href="#" class="btn btn-warning btn-square">
                                                    <i>Edit</i>
                                                </a>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="#" class="btn btn-danger btn-square">
                                                    <i>Hapus</i>
                                                </a>
                                        </td>
                                    </tbody>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>