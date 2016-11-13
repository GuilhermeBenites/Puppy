@extends('master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Categorias Cadastradas</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categorias as $categoria)
                                <tr>
                                    <th scope="row">{{$categoria->nome}}</th>
                                    <td>
                                        <div>
                                            <button type="submit" class="btn btn-round btn-warning"><i class="fa fa-pencil"></i></button>
                                            <button type="submit" class="btn btn-round btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
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
@endsection
