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
    <div>Mi cuenta
        <div class="page-title-subheading">Configura opciones de tu cuenta.
        </div>
    </div>
</div>
@endsection



@section('main')


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div align="center" class="card-body"><h5 class="card-title"></h5>

                            <h3 class="themeoptions-heading">Opciones del menu
                            </h3>

                            <h3 class="themeoptions-heading">
                                <div>
                                    Barra superior
                                </div>
                                <button onclick="color('color_barra','')" type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                    Restaurar color
                                </button>
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5 class="pb-2">Elige un color
                                        </h5>
                                        <div class="theme-settings-swatches">
                                            <div onclick="color('color_barra','bg-primary header-text-light')" class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-secondary header-text-light')" class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-success header-text-dark')" class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-info header-text-dark')" class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-warning header-text-dark')" class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-danger header-text-light')" class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-light header-text-dark')" class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-dark header-text-light')" class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-focus header-text-light')" class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-alternate header-text-light')" class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div onclick="color('color_barra','bg-vicious-stance header-text-light')" class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-midnight-bloom header-text-light')" class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-night-sky header-text-light')" class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-slick-carbon header-text-light')" class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-asteroid header-text-light')" class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-royal header-text-light')" class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-warm-flame header-text-dark')" class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-night-fade header-text-dark')" class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-sunny-morning header-text-dark')" class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-tempting-azure header-text-dark')" class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-amy-crisp header-text-dark')" class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-heavy-rain header-text-dark')" class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-mean-fruit header-text-dark')" class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-malibu-beach header-text-light')" class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-deep-blue header-text-dark')" class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-ripe-malin header-text-light')" class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-arielle-smile header-text-light')" class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-plum-plate header-text-light')" class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-happy-fisher header-text-dark')" class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                            </div>
                                            <div onclick="color('color_barra','bg-happy-itmeo header-text-light')" class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-mixed-hopes header-text-light')" class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-strong-bliss header-text-light')" class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-grow-early header-text-light')" class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-love-kiss header-text-light')" class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-premium-dark header-text-light')" class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                            </div>
                                            <div onclick="color('color_barra','bg-happy-green header-text-light')" class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="themeoptions-heading">
                                <div>Barra Lateral</div>
                                <button onclick="color('color_lateral','')" type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                   Restaurar color
                                </button>
                            </h3>
                            <div class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h5 class="pb-2">Elige un color
                                        </h5>
                                        <div class="theme-settings-swatches">
                                            <div onclick="color('color_lateral','bg-primary sidebar-text-light')" class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-secondary sidebar-text-light')" class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-success sidebar-text-dark')" class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-info sidebar-text-dark')" class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-warning sidebar-text-dark')" class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-danger sidebar-text-light')" class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-light sidebar-text-dark')" class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-dark sidebar-text-light')" class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-focus sidebar-text-light')" class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-alternate sidebar-text-light')" class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div onclick="color('color_lateral','bg-vicious-stance sidebar-text-light')" class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-midnight-bloom sidebar-text-light')" class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-night-sky sidebar-text-light')" class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-slick-carbon sidebar-text-light')" class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-asteroid sidebar-text-light')" class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-royal sidebar-text-light')" class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-warm-flame sidebar-text-dark')" class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-night-fade sidebar-text-dark')" class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-sunny-morning sidebar-text-dark')" class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-tempting-azure sidebar-text-dark')" class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-amy-crisp sidebar-text-dark')" class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-heavy-rain sidebar-text-dark')" class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-mean-fruit sidebar-text-dark')" class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-malibu-beach sidebar-text-light')" class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-deep-blue sidebar-text-dark')" class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-ripe-malin sidebar-text-light')" class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-arielle-smile sidebar-text-light')" class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-plum-plate sidebar-text-light')" class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-happy-fisher sidebar-text-dark')" class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                            </div>
                                            <div onclick="color('color_lateral','bg-happy-itmeo sidebar-text-light')" class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-mixed-hopes sidebar-text-light')" class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-strong-bliss sidebar-text-light')" class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-grow-early sidebar-text-light')" class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-love-kiss sidebar-text-light')" class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-premium-dark sidebar-text-light')" class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                            </div>
                                            <div onclick="color('color_lateral','bg-happy-green sidebar-text-light')" class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



@endsection




@section('script')

<script>
    function color($ubicacion,$color) {
       $.ajax({
          type:'POST',
          url:'{{url('user/micuenta/color')}}',
          data: {'_token': "{{csrf_token()}}",
                 'color': $color,
                 'ubicacion': $ubicacion
                },
          success:function(data) {
            toastr.success("Color cambiado.");
          }
       });
    }
 </script>




@if(count($errors) > 0)
<script>
toastr.error("Por favor verifica los campos.");
</script>
@endif

@endsection
