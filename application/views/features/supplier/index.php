<?php $this->load->view('layouts/dashboard/header'); ?>
<?php $this->load->view('layouts/dashboard/navbar'); ?>
<?php $this->load->view('layouts/dashboard/sidebar'); ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Supplier</h4>
                        <a href="/suppliers/add" class="btn btn-primary">Tambah</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Supplier</th>
                                        <th>Nama Supplier</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($suppliers as $supplier): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $supplier->supplier_code ?></td>
                                        <td><?= $supplier->name ?></td>
                                        <td>
                                            <a href="/suppliers/edit/<?= $supplier->id ?>" class="badge badge-warning">Edit</a>
                                            <a href="/suppliers/delete/<?= $supplier->id ?>" class="badge badge-danger">delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/dashboard/footer'); ?>