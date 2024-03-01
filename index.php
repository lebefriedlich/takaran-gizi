<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Input Data</h1>
        <form id="inputForm">
            <div class="form-group">
                <label for="usia" class="mt-3">Usia:</label>
                <input type="number" class="form-control mt-2" id="usia" required>
            </div>
            <div class="form-group">
                <label for="gender" class="mt-3">Gender:</label>
                <select class="form-control mt-2" id="gender" required>
                    <option value="">Pilih Gender</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group" id="hamilOrMenyusui">

            </div>
            <div class="form-group" id="umurHamilOrMenyusui">

            </div>
            <button type="submit" class="btn btn-primary mt-3 hidden" id="submitButton">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>