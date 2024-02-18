<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Reservation</title>
    <style>
        /* Add your CSS styles here */
        .seat {
            width: 40px;
            height: 40px;
            margin: 5px;
            cursor: pointer;
            background-color: #ccc;
            border: 1px solid #aaa;
            display: inline-block;
            text-align: center;
            line-height: 40px;
        }

        .seat.selected {
            background-color: #28a745; /* Green for selected seats */
            color: #fff;
        }

        .row {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>Seat Reservation</h2>

<div>
    <p>Select a seat:</p>

    <div id="seatMap">
        <!-- Seat map will be generated dynamically here -->
    </div>

    <p>Selected Seat: <span id="selectedSeat"></span></p>

    <button onclick="reserveSeat()">Reserve Seat</button>
</div>

<script>
  // JavaScript for seat selection logic
document.addEventListener("DOMContentLoaded", function() {
    generateSeatMap();
});

function generateSeatMap() {
    const seatMapContainer = document.getElementById("seatMap");
    const totalRows = 3; 
    const seatsPerRow = 5;
    for (let row = 1; row <= totalRows; row++) {
        const rowContainer = document.createElement("div");
        rowContainer.className = "row";
        seatMapContainer.appendChild(rowContainer);

        for (let seatNumber = 1; seatNumber <= seatsPerRow; seatNumber++) {
            const seat = document.createElement("div");
            seat.className = "seat";
            seat.textContent = seatNumber + (row - 1) * seatsPerRow;
            seat.addEventListener("click", function() {
                toggleSeatSelection(seat);
            });
            rowContainer.appendChild(seat);
        }
    }
}

function toggleSeatSelection(seat) {
    seat.classList.toggle("selected");
    const selectedSeatDisplay = document.getElementById("selectedSeat");
    const selectedSeats = document.querySelectorAll(".seat.selected");
    const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
    selectedSeatDisplay.textContent = selectedSeatNumbers.join(", ");
}

function reserveSeat() {
    const selectedSeats = document.querySelectorAll(".seat.selected");
    const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
    alert("Reserved Seats: " + selectedSeatNumbers.join(", "));
}

</script>

</body>
</html>
