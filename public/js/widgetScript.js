
	
	document.addEventListener("DOMContentLoaded", (event) => {
		console.log('DOM is ready.');	

				var categories = document.getElementById("widget").getAttribute("data-categories");
				console.log(categories);
				var amount = document.getElementById("widget").getAttribute("data-amount");
				console.log(amount);

				var xmlHttp = new XMLHttpRequest();
				xmlHttp.open( "GET", "http://localhost:7070/Miercoles/public/widget/yes/"+amount+"/"+categories, false ); // false for synchronous request
				xmlHttp.send(null);
											
				document.getElementById('content').innerHTML = xmlHttp.responseText;
	});

