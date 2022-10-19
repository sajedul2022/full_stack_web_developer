var mywin;

function passdata(){
	let fullname = document.info.fullname.value;
	let address = document.info.address.value;
	let allinfo;

	mywin = window.open("","","height=300,width=500,top=200,left=500");

	allinfo ="<h2>All My Information </h2>";
	allinfo += "<p>Full Name: "+fullname + " </p>";
	allinfo += "<p>Address: "+address + " </p>";
	mywin.document.write(allinfo);

	// mywin.document.write("<h2>All My Information </h2>");
	// mywin.document.write("<p>Full Name: "+fullname + " </p>");
	// mywin.document.write("<p>Address: "+address + " </p>");



}

function winclose(){
	mywin.close();
	

}