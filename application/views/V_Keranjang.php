    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main_CRUD.css'); ?>">
</head>
<body>
<h1 style="text-align: center;">Keranjang Belanja</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-table-area">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="10%">Gambar</th>
                                <th width="33%">Nama</th>
                                <th width="17%">Harga</th>
                                <th width="50%">Jumlah</th>
                                <th width="20%">Total</th>
                                <th width="10%">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                $total = 0;
                                foreach ($all_keranjang as $items) :
                            ?>
                            <tr>
                                <input type="hidden" name="id_keranjang" value="<?= $items['k_id']; ?>">
                                <input type="hidden" name="id_produk" value="<?= $items['k_id_produk']; ?>">
                                <input type="hidden" name="harga" value="<?= $items['p_harga']; ?>">
                                <td><?= $i; ?></td>
                                <td><img src="<?= base_url(); ?>assets/img/<?= $items['p_gambar']; ?>" width="20"></td>
                                <td><?= $items['p_nama']; ?></td>
                                <td>Rp <?= number_format($items['p_harga'], 0, ',', '.'); ?></td>
                                <td>
                                    <input type="number" name="jumlah" id="jumlah" value="<?= $items['k_jumlah']; ?>" width="10">
                                </td>
                                <td id="total">Rp <?= number_format(($items['p_harga'] * $items['k_jumlah']), 0, ',', '.'); ?></td>
                                <td>
                                    <a href="<?= base_url('keranjang/hapus/'. $items["k_id"] .'/'.$this->session->userdata('id').'/'.$items['k_id_produk']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <?php 
                                $i++; 
                                $total += ($items['p_harga'] * $items['k_jumlah']);
                                endforeach; 
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">Grand Total :</td>
                                <td align="right" id="grand_total">Rp <?= number_format($total, 0, ',', '.'); ?></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div style="text-align:right; margin-top: 50px;">
                        <button href="<?php echo base_url('keranjang/kosongkan_keranjang') ?>"><div class="btn btn-sm btn-danger">Kosongkan Keranjang</div></button>
                        <button id="ke_home"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></button>
                        <button href="<?php echo base_url('keranjang/check_out') ?>"><div class="btn btn-sm btn-success">Check Out</div></button>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
$("input[name='jumlah']").on("input", function(e) {
    let id_keranjang = $(this).parent().siblings("input[name='id_keranjang']").val();
    let id_user = "<?= $this->session->userdata('id'); ?>";
    let id_produk = $(this).parent().siblings("input[name='id_produk']").val();
    let jumlah = $(this).val();

    console.log(id_keranjang);

    $.post("<?= base_url('keranjang/set_jumlah') ?>", {id_keranjang: id_keranjang, id_user: id_user, id_produk: id_produk, jumlah: jumlah}, function() {});

    let harga = $(this).parent().siblings("input[name='harga']").val();
    $(this).parent().siblings("td#total").html("Rp " + (harga*jumlah).toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));

    let grand_total = 0;
    $.each($("td#total"), function(key, val) {
        grand_total += parseInt($(val).text().replace("Rp ", "").replace(".", ""));
    });

    $("td#grand_total").html("Rp " + grand_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
});

$("button#ke_home").click(function() { window.location.href = "<?= base_url('home'); ?>"; });
</script>

