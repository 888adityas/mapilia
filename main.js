// package landing page
const aBoutTrip=()=>{
    document.getElementById('abtItinerary').style.display = "none";
    document.getElementById('aboutJS').style.display = "block";
    document.getElementById('abtOtherInf').style.display = "none";
    
    document.getElementById('Itinerary').style.backgroundColor = "#d4d4d4";
    document.getElementById('OtherInfo').style.backgroundColor = "#d4d4d4";
    document.getElementById('aboutTrip').style.backgroundColor = "#0A9E88";
}
const Itinerary=()=>{
    document.getElementById('abtItinerary').style.display = "block";
    document.getElementById('aboutJS').style.display = "none";
    document.getElementById('abtOtherInf').style.display = "none";
    
    document.getElementById('Itinerary').style.backgroundColor = "#0A9E88";
    document.getElementById('OtherInfo').style.backgroundColor = "#d4d4d4";
    document.getElementById('aboutTrip').style.backgroundColor = "#d4d4d4";
}


const OtherInfo=()=>{
    document.getElementById('abtItinerary').style.display = "none";
    document.getElementById('aboutJS').style.display = "none";
    document.getElementById('abtOtherInf').style.display = "block";
    
    document.getElementById('Itinerary').style.backgroundColor = "#d4d4d4";
    document.getElementById('OtherInfo').style.backgroundColor = "#0A9E88";
    document.getElementById('aboutTrip').style.backgroundColor = "#d4d4d4";
}



