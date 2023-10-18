<!DOCTYPE html>
<html>
<head>
    <title>Yaprak Düzenleme</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Yaprak Düzenleme</h1>
        <form action="ekle.php" method="post" enctype="multipart/form-data">
            <div class="row p-5">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="yaprakAD">Yaprak Adı</label>
                        <input type="text" class="form-control" id="yaprakAD" name="yaprakAD" required>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <button type="submit" class="btn btn-success mt-4">Ekle</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim1">Resim 1</label>
                        <input type="file" class="form-control-file" id="resim1" name="resim1" accept="image/*" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim2">Resim 2</label>
                        <input type="file" class="form-control-file" id="resim2" name="resim2" accept="image/*" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="resim3">Resim 3</label>
                        <input type="file" class="form-control-file" id="resim3" name="resim3" accept="image/*" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="yaprakÖnBilgi">Ön Bilgi</label>
                        <textarea class="form-control" id="yaprakÖnBilgi" name="yaprakÖnBilgi" rows="8" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="baslik1">Başlık 1</label>
                        <input type="text" class="form-control" id="baslik1" name="baslik1">
                        <label for="yaprakBilgi1">Bilgi 1</label>
                        <textarea class="form-control" id="yaprakBilgi1" name="yaprakBilgi1" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="baslik2">Başlık 2</label>
                        <input type="text" class="form-control" id="baslik2" name="baslik2">
                        <label for="yaprakBilgi2">Bilgi 2</label>
                        <textarea class="form-control" id="yaprakBilgi2" name="yaprakBilgi2" rows="8"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
