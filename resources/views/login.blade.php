
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Laravel ArchitectUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

<style>
@font-face {
    font-family: "Architects";
    src: url("fonts/ArchitectsDaughter-Regular.ttf");
    }
</style>
@toastr_css

</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow closed-sidebar-mobile closed-sidebar">
    <div class="app-container closed-sidebar-mobile closed-sidebar">
        <div class="h-100 bg-happy-fisher bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div style="color: white" align="center" class="mx-auto mb-3">

                       <h2>
                        <span style="font-family: Architects">
                            Laravel ArchitectUI
                    </span>
                    </h2>
                    </div>
                    <div class="modal-dialog w-100 mx-auto">
                        <form action="{{url('login')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="h5 modal-title text-center">
                                    <h4 class="mt-2">
                                        <div>Bienvenidos</div>
                                        <span>Por favor ingrese su cuenta.</span>
                                    </h4>
                                </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email" id="email" placeholder="Su Email..." type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password" id="password" placeholder="Su Contraseña..." type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                </br>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © sebastianv20@gmail.com {{date('Y')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('assets/scripts/main.js')}}"></script>

@jquery
@toastr_js
@toastr_render

<script>
    @if(count($errors) > 0)
            toastr.error("Por favor verifica los campos.");
    @endif

</script>

</body>


</html>
