<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Answer</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Create Answer</h4></div>

                    <div class="card-body">
                        <form method='POST' action='/answer'>
                     @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Isi Jawaban:</label>
                                <textarea type="text" name= 'isi' class="form-control" rows="5" id="formGroupExampleInput"></textarea>
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
