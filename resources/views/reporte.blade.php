<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
    <h1 class="text-center">Gobierno de El Salvador</h1>
    <h2 class="text-center">Banco Central de Reserva de El Salvador</h2>
    <p>FECHA {{date("d F Y", strtotime($proyecto->created_at))}}</p>
    <div class="form-group">
        <strong>Nombreproyecto:</strong>
        {{ $proyecto->NombreProyecto }}
    </div>
    <div class="form-group">
        <strong>Fuentefondos:</strong>
        {{ $proyecto->fuenteFondos }}
    </div>
    <div class="form-group">
        <strong>Montoplanificado:</strong>
        {{ $proyecto->MontoPlanificado }}
    </div>
    <div class="form-group">
        <strong>Montopatrocinado:</strong>
        {{ $proyecto->MontoPatrocinado }}
    </div>
    <div class="form-group">
        <strong>Montofondospropios:</strong>
        {{ $proyecto->MontoFondosPropios }}
    </div>

</body>
</html>