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
                        <form>
                            <div class="form-group">
                                <label for="nameBarang">Kode Supplier</label>
                                <input type="text" disabled class="form-control" id="nameBarang" name="supplier_code" required>
                            </div>
                            <div class="form-group">
                                <label for="nameBarang">Nama Supplier</label>
                                <input type="text" class="form-control" id="nameBarang" name="name" required>
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