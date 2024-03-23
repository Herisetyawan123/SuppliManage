<?php $this->load->view('layouts/dashboard/header'); ?>
<?php $this->load->view('layouts/dashboard/navbar'); ?>
<?php $this->load->view('layouts/dashboard/sidebar'); ?>


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nameBarang">Kode Barang</label>
                                <input type="text" class="form-control" style="background-color: whitesmoke;" id="product_code" name="product_code" value="<?= $product->product_code ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nameBarang">Nama Barang</label>
                                <input type="text" class="form-control" id="nameBarang" name="name"  value="<?= $product->name ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" class="form-control" id="satuan" name="unit"  value="<?= $product->unit ?>">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control" name="price"  value="<?= $product->price ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="numer" class="form-control" id="jumlah" name="qty" value="<?= $product->qty ?>">
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