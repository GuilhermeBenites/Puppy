@extends('master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Editar Categoria</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="/categorias/editar/{{$categoria->id}}" method="POST">
                            {{ method_field('PUT') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome  </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nome" name="nome" class="form-control col-md-7 col-xs-12" value="{{$categoria->nome}}">
                                    </div>
                                </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-sm-offset-4">
                                    <a href="{{url('categorias')}}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
