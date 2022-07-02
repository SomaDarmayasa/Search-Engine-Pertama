<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css">
    <title>Search Berita STAN</title>
    <link rel="stylesheet" href="{{ asset('css/uisearch.css') }}">

</head>

<body>
    <br>

    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form action="/cari" method="GET">
                    <div class="search">

                        <input type="text" class="form-control" name="cari"
                            placeholder="Cari Berita tentang STAN? Silahkan ketikkan.. ">
                        <button type="submit" class="btn btn-primary">Cari</button>

                    </div>
                </form>
            </div>



        </div>
    </div>

    </div>














</body>

</html>
