<div class="container-fluid">
    <h3>Laporan Buku</h3>

    <form method="get">

    <input type="month" name="bulan" value="<?= $bulan; ?>">

    <select name="kategori" class="form-control">
        <option value="">-- Semua Kategori --</option>

        <?php foreach($list_kategori as $k): ?>

            <option value="<?= $k->id; ?>"
                <?= ($kategori == $k->id) ? 'selected' : ''; ?>>

                <?= $k->nama_kategori; ?>

            </option>

        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-primary btn-sm">
        Filter
    </button>

    </form>

        <button type="submit" class="btn btn-primary btn-sm">
            Filter
        </button>

        <a href="<?= site_url('laporan/buku'); ?>" 
           class="btn btn-secondary btn-sm">
            Reset
        </a>
    </form>

    <br>

    <a href="<?= site_url('Buku/cetak_buku?bulan=' . $bulan); ?>" 
       target="_blank" 
       class="btn btn-success btn-sm">
        Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>

        <?php $no = 1; foreach($data as $d): ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->kode_buku; ?></td>
            <td><?= $d->judul; ?></td>
            <td><?= $d->penulis; ?></td>
            <td><?= $d->penerbit; ?></td>
            <td><?= $d->tahun; ?></td>
            <td><?= $d->id_kategori; ?></td>
            <td><?= $d->stok; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>