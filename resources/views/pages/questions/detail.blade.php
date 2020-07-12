@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Detil</h4></div>

                    <div class="card-body">

                        <h2>Judul: {{$data->judul}} </h2>

                        <h5>Isi Pertanyaan: {{$data->isi}}</h5>

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
@endsection
