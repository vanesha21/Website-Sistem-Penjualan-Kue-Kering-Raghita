    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/tambah_produk.css"); ?>">
</head>
<body>
    <center>
        <h1>Tambah Produk</h1>
    <center>
    
    <form method="POST" action="<?= base_url('tambah/aksi_tambah'); ?>" enctype="multipart/form-data" >
        <section class="base">
            <div>
                <label>Nama</label>
                <input type="text" name="nama" autofocus="" required />
            </div>
            <div>
                <label>Harga</label>
                <input type="text" name="harga" required />
            </div>
            <div>
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" />
            </div>
            <div>
                <label>Stok</label>
                <input type="text" name="stok" />
            </div>
            <div>
                <label>Gambar</label>
                <input type="file" name="gambar" required />
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </section>
    </form>