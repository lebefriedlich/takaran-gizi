<?php 
    require 'resource.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Input Data</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="usia" class="mt-3">Usia:</label>
                <div class="row">
                    <div class="col-md-10">
                        <input type="number" class="form-control mt-2" id="usia" name="usia" required min="0">
                    </div>
                    <div class="col-md-2">
                        <select class="form-control mt-2" id="tahunOrBulan" name="tahunOrBulan" required>
                            <option value="tahun">Tahun</option>
                            <option value="bulan">Bulan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="mt-3">Gender:</label>
                <select class="form-control mt-2" id="gender" name="gender" required>
                    <option value="">Pilih Gender</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group" id="hamilOrMenyusui">

            </div>
            <div class="form-group" id="umurHamilOrMenyusui">

            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3 hidden" id="submitButton">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>