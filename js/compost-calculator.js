function getFeet() {
    var feet = 0;
    var theForm = document.forms["compostForm"];
    var selectedThickness = theForm.elements["thickness"];
    feet = selectedThickness.options[selectedThickness.selectedIndex].value;
    return feet;
}

function getArea() {
    var area = 0;
    var theForm = document.forms["compostForm"];
    area = document.getElementById("area").value;
    return area;
}

function calculateTotal() {
    var gallon = 6.42851159;
    var total = getFeet() * getArea();
    document.getElementById('cubicFeet1').innerHTML = total.toFixed(1);
    document.getElementById('cubicFeet1-5').innerHTML = (total / 1.5).toFixed(1);
    document.getElementById('cubicFeetBulk').innerHTML = total.toFixed(1);
    document.getElementById('cubicYards').innerHTML = ((10 * total / 27)/10).toFixed(1);
    document.getElementById('gallon33').innerHTML = ((gallon * total)/33).toFixed(1);
    document.getElementById('gallon55').innerHTML = ((gallon * total)/55).toFixed(1);
}
