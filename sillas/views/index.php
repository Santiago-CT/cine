<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tus Asientos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .seat {
            background-color: #444451;
            height: 30px;
            width: 30px;
            margin: 3px;
            border-radius: 5px;
        }
        .seat.selected {
            background-color: #6feaf6;
        }
        .seat.occupied {
            background-color: #fff;
            pointer-events: none;
        }
        .seat.vip {
            background-color: #ffc107;
        }
        .seat:not(.occupied):hover {
            cursor: pointer;
            transform: scale(1.2);
        }
        .screen {
            background-color: #fff;
            height: 70px;
            width: 100%;
            margin: 15px 0;
            transform: rotateX(-45deg);
        }
        .row {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="screen"></div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat vip"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <button id="reserve" class="btn btn-primary mt-4">Reservar</button>
    </div>

    <script>
        const seats = document.querySelectorAll('.row .seat:not(.occupied)');
        const reserveButton = document.getElementById('reserve');

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                seat.classList.toggle('selected');
            });
        });

        reserveButton.addEventListener('click', () => {
            const selectedSeats = document.querySelectorAll('.row .seat.selected');
            const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));
            alert('Asientos seleccionados: ' + seatsIndex.join(', '));
            
        });
    </script>
</body>
</html>
