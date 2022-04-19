<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>menu</title>
    <link rel="stylesheet" href="{{ asset('public/menu/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/menu/assets/css/food-table-meny.css') }}">
    <link rel="stylesheet" href="{{ asset('public/menu/assets/css/styles.css') }}">
    <style>
        .abs-center {
            justify-content: center;
            min-height: 100vh;
        }

        .form {
            width: 450px;
        }

    </style>
</head>

<body>
    <section
        style="background: linear-gradient(rgba(255,255,255,0.67), rgba(255,255,255,0.78) 100%), url(&quot;public/menu/assets/img/hamburger.jpg&quot;) center / cover no-repeat;">
        <div class="text-center" style="padding-top: 30px;padding-bottom: 20px;">
            <h1 class="font-monospace"
                style="font-style: normal;font-weight: bold;color: var(--white);font-size: 70px;text-align: center;filter: grayscale(40%);text-shadow: 1px 0px 2px rgba(52,58,64,0.99);">
                La pasadita</h1>
            <hr style="width: 100px;border: 3px solid var(--light) ;">
            <h2
                style="color: #FFCD2F;font-size: 29px;border-color: #f4db60;text-shadow: 1px 0px 2px rgba(52,58,64,0.99);filter: grayscale(40%);">
                Calle 51 por 38 #1101 Fidel Velázquez&nbsp;</h2>
            <h2
                style="color: #FFCD2F;font-size: 29px;border-color: #f4db60;text-shadow: 1px 0px 2px rgba(52,58,64,0.99);filter: grayscale(40%);">
                <picture><img src="public/menu/assets/img/motorcycle.png"></picture>Servicio a domicilio:
                9999096651&nbsp;
            </h2>
        </div>
        <div class="abs-center">
            <div class="border rounded-0 border">
                <div class="container-fluid font-monospace">
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead
                                        style="background: #d35256;color: var(--light);border-top-color: rgba(128,128,128,0);">
                                        <tr style="border-top-color: rgba(128,128,128,0);">
                                            <th style="font-size: 20px;text-align: center;color: var(--light);">
                                                PREGUNTE POR&nbsp;<span class="rubrik-span"
                                                    style="color: var(--light);">DISPONIBILIDAD</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($va as $com)
                                            <tr>
                                                <td class="menu-item"
                                                    style="background: rgba(255,255,255,0);border-top-width: 0px;">
                                                    {{ $com }}<span class="price"
                                                        style="color: #d35256;">${{ $com }}
                                                        <img src="{{ $com }}"></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('public/menu/assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
