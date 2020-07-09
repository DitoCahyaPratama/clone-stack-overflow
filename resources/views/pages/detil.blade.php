<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detil</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Detil</h4></div>

                    <div class="card-body">

                        <h2>Judul: {{$data->judul}} </h2>

                        <h5>Isi Pertanyaan: {{$data->isi_pertanyaan}}</h5>

                        <h5>Tag: {{$data->tag}}</h5>

                        <div><a href="/list" class="btn btn-secondary" role="button">Back</a></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
