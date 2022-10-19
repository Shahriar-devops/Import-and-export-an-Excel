<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/boostrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootsrapcdn.com/bootsrap/4.5.2/js/bootsrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-6 mt-5">
                <div class="p-5 border-2 border border-secondary rounded">
                    <h2>User Data : </h2>
                    <form  method="POST" enctype="multipart/form-data"  action="{{ route('import-user') }}">
                        @csrf
                        <label> Select File</label>
                        <input type="file" name="file" class="form-control" />
                        <div class="mt-5">

                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ route('export-user') }}" class="btn btn-primary float-right">Export Excel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
