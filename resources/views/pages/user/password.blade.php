@extends('master')

@section('head')


@endsection

@section('activeContactos')
class="mm-active"
@endsection

@section('area')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-user icon-gradient bg-mean-fruit">
        </i>
    </div>
    <div>Cambiar Contraseña
        <div class="page-title-subheading">Cambia la contraseña de inicio de sesión
        </div>
    </div>
</div>
@endsection



@section('main')


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div align="center" class="card-body"><h5 class="card-title">Contraseña</h5>

                <form id="form" action="{{url('user/password/guardar')}}" method="POST">
                    {{ csrf_field() }}

                    <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-3">
                        </div>
                        <div class="col-md-2">
                <div class="position-relative form-group"><label for="old_password">Contraseña Anterior</label>
                    <input name="old_password" id="old_password" type="password" class="form-control" value=""></div>
                        </div>

                  <div class="col-md-2">
                  <div class="position-relative form-group"><label for="new_password">Nueva Contraseña</label>
                   <input name="new_password" id="new_password" type="password" class="form-control" value=""></div>
                    </div>


                  <div class="col-md-2">
                    <div class="position-relative form-group"><label for="confirm_password">Repetir Contraseña</label>
                     <input name="confirm_password" id="confirm_password" type="password" class="form-control" value=""></div>
                      </div>

                    </div>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="mt-1 btn btn-info btn-block">Cambiar Contraseña</button>
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>


@endsection




@section('script')


@if(count($errors) > 0)
<script>
toastr.error("Por favor verifica los campos.");
</script>
@endif

@endsection
