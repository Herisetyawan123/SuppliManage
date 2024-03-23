<?php $this->load->view('layouts/dashboard/header'); ?>
<?php $this->load->view('layouts/dashboard/navbar'); ?>
<?php $this->load->view('layouts/dashboard/sidebar'); ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Barang</h4>
                        <a href="/products/add" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Barang</th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($products as $product): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $product->product_code ?></td>
                                        <td><?= $product->name ?></td>
                                        <td><?= $product->unit ?></td>
                                        <td><?= $product->price ?></td>
                                        <td>
                                            <a href="/products/edit/<?= $product->id ?>" class="badge badge-warning">Edit</a>
                                            <a href="/products/delete/<?= $product->product_code ?>" class="badge badge-danger">delete</a>
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