<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Answer</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Answer</h4></div>
                    <div class="card-body">
                        <div><a href="/answer/create" class="btn btn-secondary" role="button">Create</a></div>
                            <br/>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Isi Jawaban</th>
                                <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $data)
                            <?php $no++ ;?>
                                <tr>
                                    <td class = "text-center">{{ $no }}</td>
                                    <td>{{$data->isi}}</td>
                                    <td class="text-center"><a href="/answer/{{$data->id}}">detil</a></td>
                                    <td class="text-center"><a href="/answer/{{$data->id}}/edit">update</a></td>
                                    <td>
                                        <form action="/answer/{{$data->id}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit">delete</button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
