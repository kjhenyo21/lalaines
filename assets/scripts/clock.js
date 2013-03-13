function updateClock() {
	var now = new Date();
	now = dateFormat(now, "mmmm dd, yyyy h:MM:ss TT");

	// set the content of the element with the ID time to the formatted string
	document.getElementById('time').innerHTML = now;

	// call this function again in 1000ms
	setTimeout(updateClock, 1000);
}
updateClock(); // initial call