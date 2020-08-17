@extends('master')

@section('head')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />

@endsection

@section('activeContactos')
class="mm-active"
@endsection

@section('area')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-wine icon-gradient bg-mean-fruit">
        </i>
    </div>
    <div>Menu del dia
        <div class="page-title-subheading">Planifique o edite los menus del dia.
        </div>
    </div>
</div>
@endsection

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Agregar menu</h5>

                <form id="form" action="{{url('restaurant')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="position-relative form-group"><label for="almuerzo">Almuerzo</label>
                                    <input name="almuerzo" id="almuerzo" type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group"><label for="cena">Cena</label>
                                    <input name="cena" id="cena" type="text" class="form-control" value=""></div>
                            </div>

                                <div class="col-md-2">
                                    <div class="position-relative form-group"><label for="fecha">Fecha</label>
                                            <input id="fecha" name="fecha" type="date" name="fecha" class="datepicker form-control" value="{{date("Y-m-d")}}" required>
                                    </div>
                                      </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="mt-1 btn btn-info btn-block">Agregar Menu</button>
                    </br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Lista de menus</h5>

                <table id="tabla" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Almuerzo</th>
                            <th>Cena</th>
                            <th>Fecha</th>
                            <th>Guardar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach($menus as $menu)
                        <tr>
                            <form id="form_{{$menu->id}}" method="POST" action="{{url('restaurant/guardar')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$menu->id}}">

                                <td data-search="{{$menu->almuerzo}}" data-order="{{$menu->almuerzo}}">
                                    <input name="almuerzo" id="almuerzo" type="text" class="form-control" value="{{$menu->almuerzo}}"></td>

                                <td data-search="{{$menu->cena}}" data-order="{{$menu->cena}}">
                                    <input name="cena" id="cena" type="text" class="form-control" value="{{$menu->cena}}"></td>

                                <td data-sort='{{date('Ymd',strtotime($menu->fecha))}}' data-search="{{date('Y-m-d',strtotime($menu->fecha))}}" data-order="{{date('Y-m-d',strtotime($menu->fecha))}}">
                                    <input id="fecha" name="fecha" type="date" name="fecha" class="datepicker form-control" value="{{date('Y-m-d',strtotime($menu->fecha))}}" required></td>

                                <td><button type="submit" name="guardar" class="btn btn-info"
                                        value="guardar">Guardar</button></td>
                                <td><button type="button" name="borrar" onclick="remove('form_{{$menu->id}}')" class="btn btn-danger"
                                        value="borrar">Borrar</button></td>

                            </form>
                        </tr>
                        @endforeach

                    <tfoot>
                        <tr>
                            <th>Almuerzo</th>
                            <th>Cena</th>
                            <th>Fecha</th>
                            <th>Guardar</th>
                            <th>Borrar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection


@section('script')


<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#tabla').dataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
            },
            "order": [[ 2, "desc" ]]
        });
    });

</script>



@endsection
