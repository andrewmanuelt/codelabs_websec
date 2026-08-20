<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codelabs Astratech | Data Kualitas Udara</title>
</head>

<body>
    <main class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-0">Data Kualitas Udara</h1>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted"><?php echo count($air_quality); ?> data</span>
                <a href="<?php echo site_url('air-quality/create'); ?>" class="btn btn-primary">Tambah Data</a>
                <form method="POST" action="<?php echo site_url('logout'); ?>">
                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                </form>
            </div>
        </div>

        <?php $success = $this->session->flashdata('success'); ?>
        <?php if ($success): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <form method="GET" action="<?php echo site_url('air-quality'); ?>" class="row g-2 mb-3">
            <div class="col-md-6">
                <label for="search" class="visually-hidden">Cari data</label>
                <input type="search" name="search" id="search" class="form-control" value="<?php echo htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Cari data air-quality...">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-secondary">Cari</button>
            </div>
            <?php if ($search !== ''): ?>
                <div class="col-auto">
                    <a href="<?php echo site_url('air-quality'); ?>" class="btn btn-outline-secondary">Clear</a>
                </div>
            <?php endif; ?>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle text-nowrap">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Bulan</th>
                        <th scope="col">Karbon Monoksida</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Max</th>
                        <th scope="col">Nitrogen Dioksida</th>
                        <th scope="col">Ozon</th>
                        <th scope="col">Parameter Pencemar Kritis</th>
                        <th scope="col">Periode Data</th>
                        <th scope="col">PM 2.5</th>
                        <th scope="col">PM 10</th>
                        <th scope="col">Stasiun</th>
                        <th scope="col">Sulfur Dioksida</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($air_quality)): ?>
                        <tr>
                            <td colspan="13" class="text-center text-muted">Belum ada data.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($air_quality as $row): ?>
                            <tr>
                                <td><?php echo $row->bulan; ?></td>
                                <td><?php echo $row->karbon_monoksida; ?></td>
                                <td><?php echo $row->kategori; ?></td>
                                <td><?php echo $row->max; ?></td>
                                <td><?php echo $row->nitrogen_dioksida; ?></td>
                                <td><?php echo $row->ozon; ?></td>
                                <td><?php echo $row->parameter_pencemar_kritis; ?></td>
                                <td><?php echo $row->periode_data; ?></td>
                                <td><?php echo $row->pm_duakomalima; ?></td>
                                <td><?php echo $row->pm_sepuluh; ?></td>
                                <td><?php echo $row->stasiun; ?></td>
                                <td><?php echo $row->sulfur_dioksida; ?></td>
                                <td><?php echo $row->tanggal; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
