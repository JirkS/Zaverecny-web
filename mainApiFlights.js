class Flight {
    constructor(callsign, departureAirportCandidatesCount, estArrivalAirport, estDepartureAirport, icao24){
        this.callsign = callsign;
        this.departureAirportCandidatesCount = departureAirportCandidatesCount;
		this.estArrivalAirport = estArrivalAirport;
		this.estDepartureAirport = estDepartureAirport;
		this.icao24 = icao24;
    }

	getcallsign() {
		return this.callsign;
	}

	getdepartureAirportCandidatesCount() {
		return this.departureAirportCandidatesCount;
	}

	getestArrivalAirport() {
		return this.estArrivalAirport;
	}

	getestDepartureAirport() {
		return this.estDepartureAirport;
	}

	geticao24() {
		return this.icao24;
	}
};

class Flights {
	constructor(list) {
        this.list = list; 
    }

	list(){
		return this.list;
	}

    addFlight(f) {
        this.list.push(f);
    }
};

const list = [];
let flights = new Flights(list);

function call(){
	document.removeEventListener('keypress', refreshRListen);
	$(".footer").hide(0);
	$("#tbody").empty();
	flights.list = [];
	$(".infinity-loader").show();

	$.ajax({
		type: "GET",
		url: 'https://opensky-network.org/api/flights/all?begin=1517227200&end=1517230800',
		/*https://opensky-network.org/api/flights/all?begin=1517227200&end=1517230800*/
		success: function(data){
		if (data === null || data === undefined || data === "") {
				alert("Error, JSON data nejsou dostupne.");
		} else {
			data.forEach(f => {
				let tmpf = new Flight(f.callsign, f.departureAirportCandidatesCount, f.estArrivalAirport, f.estDepartureAirport, f.icao24);
				flights.addFlight(tmpf);
			});
		}
		addItems(flights);
		},
		complete: function(){
			$(".infinity-loader").hide().fadeOut(500);
			$(".loaderScreen").hide(0).fadeOut(1000);
    		$(".content").fadeIn(1000);
			$(".footer").fadeIn(0);
			document.addEventListener('keypress', refreshRListen);
		}
	});
};

function addItems(flights) {
	let number = 1;

	flights.list.forEach(f => {
		row = document.createElement("tr");
		
		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(number);
		cell.appendChild(cellText);
		row.appendChild(cell);

		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(f.getcallsign());
		cell.appendChild(cellText);
		row.appendChild(cell);

		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(f.getdepartureAirportCandidatesCount());
		cell.appendChild(cellText);
		row.appendChild(cell);

		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(f.getestArrivalAirport());
		cell.appendChild(cellText);
		row.appendChild(cell);

		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(f.getestDepartureAirport());
		cell.appendChild(cellText);
		row.appendChild(cell);

		cell = document.createElement("td");
		cell.setAttribute("class", "text-dark");
		cellText = document.createTextNode(f.geticao24());
		cell.appendChild(cellText);
		row.appendChild(cell);

		$("#tbody")[0].appendChild(row);
		number++;
	});
};

call();

userHasPressedR = false;

function refreshRListen(event) {
	if(event.code === "KeyR"){
        call();
		userHasPressedR = true;
    }
};

document.addEventListener('keypress', refreshRListen);

const toolTipR = document.getElementById("toolTipR");
const myInterval = setInterval(() => {
    if(!userHasPressedR) {
        toolTipR.style.display = 'block';
        $("#toolTipR").animate({left: '0'});
        setTimeout(() => {
            $("#toolTipR").animate({left: '-600'});
            $("#toolTipR").fadeOut(500);
        }, 5000)
    } else {
        clearInterval(myInterval);
    }
}, 15000);