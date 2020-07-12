@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>Detil</h4></div>

                    <div class="card-body">

                        <h5>Isi Jawaban: {{$data->isi}}</h5>

                        <div><a href="/answer" class="btn btn-secondary" role="button">Back</a></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
