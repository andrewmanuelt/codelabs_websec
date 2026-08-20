<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codelabs Astratech | Input Data Kualitas Udara</title>
</head>

<body>
    <main class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Input Data Kualitas Udara</h1>
            <a href="<?php echo site_url('air-quality'); ?>" class="btn btn-outline-secondary">Kembali</a>
        </div>

        <?php $error = $this->session->flashdata('error'); ?>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo site_url('air-quality/store'); ?>">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="bulan" class="form-label">Bulan</label>
                    <input type="text" name="bulan" id="bulan" class="form-control" value="<?php echo date('m'); ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control" value="Baik" required>
                </div>
                <div class="col-md-4">
                    <label for="karbon_monoksida" class="form-label">Karbon Monoksida</label>
                    <input type="number" step="any" name="karbon_monoksida" id="karbon_monoksida" class="form-control" value="0" required>
                </div>
                <div class="col-md-4">
                    <label for="max" class="form-label">Max</label>
                    <input type="number" step="any" name="max" id="max" class="form-control" value="0" required>
                </div>
                <div class="col-md-4">
                    <label for="nitrogen_dioksida" class="form-label">Nitrogen Dioksida</label>
                    <input type="number" step="any" name="nitrogen_dioksida" id="nitrogen_dioksida" class="form-control" value="0" required>
                </div>
                <div class="col-md-4">
                    <label for="ozon" class="form-label">Ozon</label>
                    <input type="number" step="any" name="ozon" id="ozon" class="form-control" value="0" required>
                </div>
                <div class="col-md-8">
                    <label for="parameter_pencemar_kritis" class="form-label">Parameter Pencemar Kritis</label>
                    <input type="text" name="parameter_pencemar_kritis" id="parameter_pencemar_kritis" class="form-control" value="Tidak ada" required>
                </div>
                <div class="col-md-6">
                    <label for="periode_data" class="form-label">Periode Data</label>
                    <input type="text" name="periode_data" id="periode_data" class="form-control" value="<?php echo date('Y'); ?>" required>
                </div>
                <div class="col-md-3">
                    <label for="pm_duakomalima" class="form-label">PM 2.5</label>
                    <input type="number" step="any" name="pm_duakomalima" id="pm_duakomalima" class="form-control" value="0" required>
                </div>
                <div class="col-md-3">
                    <label for="pm_sepuluh" class="form-label">PM 10</label>
                    <input type="number" step="any" name="pm_sepuluh" id="pm_sepuluh" class="form-control" value="0" required>
                </div>
                <div class="col-md-6">
                    <label for="stasiun" class="form-label">Stasiun</label>
                    <input type="text" name="stasiun" id="stasiun" class="form-control" value="Stasiun Default" required>
                </div>
                <div class="col-md-6">
                    <label for="sulfur_dioksida" class="form-label">Sulfur Dioksida</label>
                    <input type="number" step="any" name="sulfur_dioksida" id="sulfur_dioksida" class="form-control" value="0" required>
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Simpan Data</button>
        </form>
    </main>
</body>

</html>
