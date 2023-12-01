<div class="container-fluid">
    <h4>kategori Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Kategori</th>
            <th>Nama Kue</th>
        </tr> 

        <?php foreach ($kategori as $kat) : ?>
            <tr>
                <td><?php echo $kat->kat ?></td>
                <td><?php echo $kat->nama ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>