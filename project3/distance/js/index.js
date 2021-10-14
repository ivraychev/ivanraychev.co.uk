document.getElementById('inputCm').addEventListener('input', function(e){
	var cm = e.target.value;
	console.log(cm);
	document.getElementById('inputIn').value = (cm/2.54).toFixed(10);
	document.getElementById('inputM').value = (cm/100).toFixed(10);
});

document.getElementById('inputIn').addEventListener('input', function(e){
	var inches = e.target.value;
	console.log(inches);
	document.getElementById('inputCm').value = (inches/0.3937008).toFixed(10);
	document.getElementById('inputM').value = (inches/39.37008).toFixed(10);
});

document.getElementById('inputM').addEventListener('input', function(e){
	var meters = e.target.value;
	console.log(meters);
	document.getElementById('inputCm').value = (meters/0.01).toFixed(10);
	document.getElementById('inputIn').value = (meters*39.37008).toFixed(10);
});