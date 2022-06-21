<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencaraian Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/result.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Hasil Pencarian</h1>
                <hr>
                @foreach ($paginator as $berita)
                    <div class="card">
                        <div class="card-header mt-0">
                            <h4 class="mb-0"> <a href="{{ $berita->id }}">{{ $berita->title_txt_id }}</a>
                            </h4>
                        </div>
                        <div class="card-body mb-0">
                            <p class=" mt-0 mb-0 "><a style="color:green" href=" {{ $berita->id }}">
                                    {{ $berita->id }}</a></p>
                            <p class="card-text max-body mt-0 mb-0">{{ $berita->body_txt_id }}</p>
                            <p>Upload by : {{ $berita->uploader_txt_id }} </p>


                        </div>
                    </div>
                    <br>
                @endforeach
                </hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <ul class="pagination ml-auto">
                    <li class="">{{ $paginator->links() }}</li>
                </ul>

                <form action="/"> <button type="submit" class="btn btn-primary">Kembali ke Halaman
                        Pencarian</button>
                </form>
            </div>

        </div>


    </div>



</body>

</html>
