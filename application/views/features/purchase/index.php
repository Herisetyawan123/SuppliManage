<?php $this->load->view('layouts/dashboard/header'); ?>
<?php $this->load->view('layouts/dashboard/navbar'); ?>
<?php $this->load->view('layouts/dashboard/sidebar'); ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pembelian</h4>
                        <h4 class="btn btn-primary">Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No Transaksi</th>
                                        <th>Kode Supplier</th>
                                        <th>Nama Supplier</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#8974354387</td>
                                        <td>#3248</td>
                                        <td>Edinburgh</td>
                                        <td>Rp. 100.000,00</td>
                                        <td>
                                            <a href="" class="badge badge-primary">Detail</a>
                                            <a href="" class="badge badge-warning">Edit</a>
                                            <a href="" class="badge badge-danger">delete</a>
                                        </td>
                                    </tr>
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