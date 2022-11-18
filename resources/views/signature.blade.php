@extends('layout.app2')

@section('content')
    <form method="POST" enctype="multipart/form-data" class="form_sign" action="">
        @csrf
       <div class="row d-flex justify-content-center" >
        <div class="col-md-7">

            <label class="" for="">Signature:</label>

            <br />

            <div id="sig"></div>

            <br />

            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>

            <textarea id="signature64" name="signed" style="display: none"></textarea>
            <button class="btn btn-success">Save</button>

        </div>
       </div>

    </form>
@endsection
