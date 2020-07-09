<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Create Quest</h4></div>

                    <div class="card-body">
                        <form method='POST' action='/list'>
                     @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul:</label>
                                <input type="text" name= 'judul' class="form-control" id="formGroupExampleInput">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Isi Pertanyaan:</label>
                                <textarea type="text" name= 'isi_pertanyaan' class="form-control" rows="5" id="formGroupExampleInput"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Tag:</label>
                                <input type="text" name= 'tag' class="form-control" id="formGroupExampleInput2">
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                            <!-- <a href="/daftar" class="btn btn-info" role="button">Submit</a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
