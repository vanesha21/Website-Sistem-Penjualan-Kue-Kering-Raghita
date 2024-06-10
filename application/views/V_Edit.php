    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/edit_produk.css">
</head>
<body>
<center>
    <h1>Edit Produk <?php echo $produk['nama']; ?></h1>
<center>
<form method="POST" action="<?= base_url('edit/aksi_edit'); ?>" enctype="multipart/form-data" >
    <section class="base">
    <input name="id" value="<?= $id; ?>" type="hidden" />
    <input name="gambar_lama" value="<?= $gambar_lama; ?>" type="hidden" />
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $produk['nama']; ?>" autofocus="" required="" />
    </div>
    <div>
        <label>Harga</label>
        <input type="text" name="harga" required=""value="<?php echo $produk['harga']; ?>" />
    </div>
    <div>
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" value="<?php echo $produk['deskripsi']; ?>" />
    </div>
    <div>
        <label>Stok</label>
        <input type="text" name="stok" required="" value="<?php echo $produk['stok']; ?>"/>
    </div>
    <div>
        <label>Gambar</label>
        <img src="<?= base_url('assets/img/'); ?><?php echo $produk['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
        <input type="file" name="gambar" />
        <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
    </div>
    <div>
        <button type="submit">Simpan Perubahan</button>
    </div>
    </section>
</form>