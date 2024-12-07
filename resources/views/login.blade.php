<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Post</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .wrapper {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center">
        <div class="container border shadow rounded p-5 w-50">
            <h4 class="text-center py-3">Login Admin</h4>
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="creator" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
