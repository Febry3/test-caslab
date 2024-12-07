<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="container border shadow rounded p-3 w-50">
            <h4 class="text-center py-3">Tambah Post</h4>
            <form action="/tambah" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="judul">
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Sub Judul</label>
                    <input type="text" class="form-control" id="tag" name="sub_judul">
                </div>
                <div class="mb-3">
                    <label for="creator" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="creator" name="kategori">
                </div>

                <div class="mb-3">
                    <label for="tag" class="form-label">Deadline TP</label>
                    <input type="date" class="form-control" id="tag" name="deadline_tp">
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Deskripsi TP</label>
                    <input type="text" class="form-control" id="tag" name="deskripsi_tp">
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Link TP</label>
                    <input type="text" class="form-control" id="tag" name="link_tp">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>
