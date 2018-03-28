@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Empresas</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                   {{$usuarios->table()}}
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('scripts')

@stop