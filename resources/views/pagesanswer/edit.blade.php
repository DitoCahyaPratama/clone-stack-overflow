<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Edit Answer</h4></div>

                    <div class="card-body">
                        <form method="POST" action="/answer/{{$data->id}}">
                     @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Isi Jawaban:</label>
                                <input type="text" name= "isi_jawaban" class="form-control" value="{{$data->isi_jawaban}}">
                            </div>

                            <button type="submit" class="btn btn-secondary mb-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
