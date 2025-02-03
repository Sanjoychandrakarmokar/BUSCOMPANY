const seatData = {
  Bus1: ["A1", "A2", "B1", "B2", "C1", "C2", "D1", "D2"],
  Bus2: ["A1", "A2", "B1", "B2", "C1", "C2"],
  Bus3: ["A1", "A2", "B1", "B2", "C1"],
  Bus4: [],
};

document.addEventListener("DOMContentLoaded", function () {
  const busSelect = document.getElementById("available_bus");
  const seatsSelect = document.getElementById("available_seats");
  const busErr = document.getElementById("buserr");
  const seatsErr = document.getElementById("seatsErr");

  if (!busSelect || !seatsSelect) {
    return;
  }

  busSelect.addEventListener("change", function () {
    const selectedBus = busSelect.value;
    seatsSelect.innerHTML = "<option value=''>Select Seat</option>";
    busErr.innerHTML = "";
    seatsErr.innerHTML = "";

    if (selectedBus && seatData[selectedBus].length > 0) {
      seatData[selectedBus].forEach((seat) => {
        const option = document.createElement("option");
        option.value = seat;
        option.textContent = seat;
        seatsSelect.appendChild(option);
      });
    } else {
      busErr.style.color = "red";
      busErr.innerHTML = "No seats available for this bus!";
    }
  });
});

function form_check_booking() {
  const selectedBus = document.getElementById("available_bus").value;
  const selectedSeat = document.getElementById("available_seats").value;
  const busErr = document.getElementById("buserr");
  const seatsErr = document.getElementById("seatsErr");

  if (!selectedBus) {
    busErr.style.color = "red";
    busErr.innerHTML = "Please select a bus!";
    return false;
  }

  if (seatData[selectedBus].length === 0) {
    busErr.style.color = "red";
    busErr.innerHTML = "No seats available for this bus!";
    return false;
  }

  if (!selectedSeat) {
    seatsErr.style.color = "red";
    seatsErr.innerHTML = "Please select a seat!";
    return false;
  }

  return (
    bus_check() &&
    date_check() &&
    time_check() &&
    type_check() &&
    ticket_check()
  );
}

function bus_check() {
  var bus = document.getElementById("available_bus").value;
  if (!bus) {
    document.getElementById("buserr").style.color = "red";
    document.getElementById("buserr").innerHTML = "Select a bus";
    return false;
  } else {
    document.getElementById("buserr").innerHTML = "";
    return true;
  }
}

function date_check() {
  var date = document.getElementById("date").value;
  var today = new Date().toISOString().split("T")[0];

  if (!date) {
    document.getElementById("dateerr").style.color = "red";
    document.getElementById("dateerr").innerHTML = "Select a date";
    return false;
  } else if (date < today) {
    document.getElementById("dateerr").style.color = "red";
    document.getElementById("dateerr").innerHTML = "Select a future date";
    return false;
  } else {
    document.getElementById("dateerr").innerHTML = "";
    return true;
  }
}

function time_check() {
  var time = document.getElementById("time").value;
  if (!time) {
    document.getElementById("timeerr").style.color = "red";
    document.getElementById("timeerr").innerHTML = "Select a time";
    return false;
  } else {
    document.getElementById("timeerr").innerHTML = "";
    return true;
  }
}

function type_check() {
  var type = document.getElementById("bus_type").value;
  if (!type) {
    document.getElementById("typeerr").style.color = "red";
    document.getElementById("typeerr").innerHTML = "Select a bus type";
    return false;
  } else {
    document.getElementById("typeerr").innerHTML = "";
    return true;
  }
}

function ticket_check() {
  var ticket = document.getElementById("ticket_number").value;
  if (!ticket || ticket < 1 || ticket > 4) {
    document.getElementById("ticketerr").style.color = "red";
    document.getElementById("ticketerr").innerHTML =
      "Tickets must be between 1 to 4";
    return false;
  } else {
    document.getElementById("ticketerr").innerHTML = "";
    return true;
  }
}
