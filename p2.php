
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Timus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="p1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="p2.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container mt-5 ">
            <h1 class="text-center">Contact Us</h1>
            <div class="row justify-content-center">
            <div class="col-md-4 col-lg-6">
             <form method="POST" action="confirm.php">
                <div class="mb-3" >
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hobi kamu:</label><br>
                    <input type="checkbox" id="ngoding" name="hobbies[]" value="ngoding">
                    <label for="nyanyi">ngoding</label><br>
                    <input type="checkbox" id="mam" name="hobbies[]" value="mam">
                    <label for="baca">mam</label><br>
                    <input type="checkbox" id="turu" name="hobbies[]" value="turu">
                    <label for="lari">turu</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin:</label><br>
                    <input type="radio" id="laki" name="gender" value="Laki-laki" required>
                    <label for="laki">Laki-laki</label><br>
                    <input type="radio" id="perempuan" name="gender" value="Perempuan" required>
                    <label for="perempuan">Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal_lahir" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
            </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
