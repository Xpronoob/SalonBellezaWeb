
<x-main-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .calculadora-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="calculadora-container">
        <div class="calculadora">
            <div class="pantalla">0</div>
            <button id="c" class="btn col-3 col-md-auto">C</button>
            <button id="borrar" class="btn col-3 col-md-auto">←</button>
            <button class="btn col-3 col-md-auto">/</button>
            <button class="btn col-3 col-md-auto">*</button>
            <button class="btn col-3 col-md-auto">7</button>
            <button class="btn col-3 col-md-auto">8</button>
            <button class="btn col-3 col-md-auto">9</button>
            <button class="btn col-3 col-md-auto">-</button>
            <button class="btn col-3 col-md-auto">4</button>
            <button class="btn col-3 col-md-auto">5</button>
            <button class="btn col-3 col-md-auto">6</button>
            <button class="btn col-3 col-md-auto">+</button>
            <button class="btn col-3 col-md-auto">1</button>
            <button class="btn col-3 col-md-auto">2</button>
            <button class="btn col-3 col-md-auto">3</button>
            <button id="igual" class="btn col-6 col-md-auto">=</button>
            <button id="cero" class="btn col-6 col-md-auto">0</button>
            <button class="btn col-3 col-md-auto">.</button>
            <button id="btn-10" class="btn col-3 col-md-auto">% 10</button>
<button id="btn-30" class="btn col-3 col-md-auto">% 30</button>
<button id="btn-50" class="btn col-3 col-md-auto">% 50</button>

        </div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
</x-main-layout>
