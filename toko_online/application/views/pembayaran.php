<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $item )
                     {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',','.');
                ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form  action="<?php echo base_url('dashboard/proses_pesanan'); ?> " method="post">
        
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                 <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                 <div class="form-group">
                    <label>No. Telpon</label>
                    <input type="text" name="no_telp" placeholder="No Telpon Anda" class="form-control">
                </div>

                 <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>Grab</option>
                        <option>Gojek</option>
                        <option>Shopee Food</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA</option>
                        <option>Mandiri</option>
                        <option>Shopee Pay</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-5">Pesan</button>

            </form>

            <?php 
        } else 
        {
               echo "Keranjang Belanja Anda Masih Kosong";
        }
            ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>