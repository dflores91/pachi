@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Versiones</div>

                <div class="card-body">
                    @if(Auth::user()->hasRole('admin'))
                        <div></div>

                    @else
                    <form action="upload" id="upload" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple><br />
    <input type="submit">
</form>
<div id="message"></div>

                    @endif

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
