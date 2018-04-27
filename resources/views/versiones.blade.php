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
                    <div class="panel-heading">Agregar archivos</div>
                    
                    <?=form_open_multipart('files/do_upload');?>
<input type="file" name="userfile" size="20" />
<br />
<input type="submit" value="Subir Archivo" />
<?=form_close()?>
<h5><?=br(1).anchor('files/info', 'Listado de archivos para descargar'); ?></h5>
        
                    @endif

                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection