<!doctype html>
<html lang="en">
<x-boostrap />
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="container">
            <div class="form-group mt-4">
                <label for="">File</label>
                <input type="file" class="form-control" name="file" aria-describedby="helpId">
            </div>
        <button class="btn btn-primary mt-2">Upload</button>
        </div>
    </form>
</body>
</html>
