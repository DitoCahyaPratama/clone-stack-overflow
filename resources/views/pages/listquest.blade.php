<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Quest</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>List Quest</h4></div>
                    <div class="card-body">
                        <div><a href="/list/create" class="btn btn-secondary" role="button">Create</a></div>
                            <br/>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Judul</th>
                                <th scope="col" class="text-center">Isi Pertanyaan</th>
                                <th scope="col" class="text-center">Tag</th>
                                <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $data)
                            <?php $no++ ;?>
                                <tr>
                                    <td class = "text-center">{{ $no }}</td>
                                    <td>{{$data->judul}}</td>
                                    <td>{{$data->isi_pertanyaan}}</td>
                                    <td>{{$data->tag}}</td>
                                    <td class="text-center"><a href="/list/{{$data->id}}">detil</a></td>
                                    <td class="text-center"><a href="/list/{{$data->id}}/edit">update</a></td>
                                <td class="text-center"><a href="/delete/{{$data->id}}">delete</a></td>
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
