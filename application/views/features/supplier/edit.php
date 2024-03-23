<?php $this->load->view('layouts/dashboard/header'); ?>
<?php $this->load->view('layouts/dashboard/navbar'); ?>
<?php $this->load->view('layouts/dashboard/sidebar'); ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Supplier</h4>
                    </div>
                    <div class="card-body">
                        <form action="/suppliers/update" method="post">
                            <input type="hidden" name="id"  value="<?= $supplier->id ?>">
                            <div class="form-group">
                                <label for="nameBarang">Kode Supplier</label>
                                <input type="text" disabled class="form-control" id="nameBarang" name="supplier_code" value="<?= $supplier->supplier_code ?>">
                            </div>
                            <div class="form-group">
                                <label for="nameBarang">Nama Supplier</label>
                                <input type="text" class="form-control" id="nameBarang" name="name"  value="<?= $supplier->name ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/dashboard/footer'); ?>