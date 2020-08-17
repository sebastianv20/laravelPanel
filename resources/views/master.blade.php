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

@toastr_css
@yield('head')

<style>
@font-face {
    font-family: "Architects";
    src: url({{asset('fonts/ArchitectsDaughter-Regular.ttf')}});
    }
</style>

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow {{\Session::get('color_barra')}}">
            <div class="app-header__logo">
                <div> <h3 style="font-family: Architects">ArchitectUI</h3></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                 </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="{{url('user/micuenta')}}">  <button type="button" tabindex="0" class="dropdown-item">Mi Cuenta</button></a>
                                            <a href="{{url('user/password')}}"> <button type="button" tabindex="0" class="dropdown-item">Cambiar Contraseña</button></a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                           <a href="{{url('logout')}}"> <button type="button" tabindex="0" class="dropdown-item">Cerrar sesión</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}}
                                    </div>
                                    <div class="widget-subheading">
                                        {{Auth::user()->empresa}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>  <div class="app-main">
                <div class="app-sidebar sidebar-shadow {{\Session::get('color_lateral')}}">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Panel</li>
                                <li>
                                    <a href="{{url('/')}}" @yield('activeInicio')>
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                       Inicio
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('restaurant')}}" @yield('activeRestaurant')>
                                        <i class="metismenu-icon pe-7s-wine"></i>
                                        Menu del dia
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>


                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                @yield('area')
                             </div>
                        </div>

                        @yield('main')

                    </div>
        </div>
    </div>


@jquery
@toastr_js
@toastr_render


<script type="text/javascript" src="{{asset('assets/scripts/main.js?v=2')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@yield('script')



<script>
function remove(form) {


    Swal.fire({
        title: "¿Desea continuar con el archivado?",
        text: "Si continua el registro ya no sera visible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Continuar",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      }).then((result) => {
        if (result.value) {
            var input = $("<input>")
            .attr("type", "hidden")
            .attr("name", "borrar").val("borrar");

        $("#"+form).append(input);
        $("#"+form).submit();
        // For more information about handling dismissals please visit
        // https://sweetalert2.github.io/#handling-dismissals
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire(
            'Cancelado',
            'El registro no se ha modificado.',
            'error'
          )
        }
      })

    }

</script>

</body>
</html>
