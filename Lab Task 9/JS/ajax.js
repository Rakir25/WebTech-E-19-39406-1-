function searchId(id)
{	if (document.getElementById("searchByID").value == "") 
    {
    	document.getElementById("txtHint").innerHTML =  "Information will be shown here...";
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchId.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
			}
}

function searchName(name)
{
	document.getElementById("txtHint1").innerHTML = "";
	if (document.getElementById("searchByName").value == "") 
    {
    	document.getElementById("txtHint").innerHTML =  "Information will be shown here...";
		document.getElementById("searchByNameErr").innerHTML = "Name Required";
		document.getElementById("searchByNameErr").style.color = "red";
		document.getElementById("searchByName").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchName.php?name="+name, true);
   		xhttp.send();

		document.getElementById("searchByNameErr").innerHTML = "";
		document.getElementById("searchByName").style.borderColor = "black";
	}
}

function showData(id)
{
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() 
  	{
    if (this.readyState == 4 && this.status == 200) 
    	{document.getElementById("txtHint1").innerHTML = this.responseText;}
	};
    xhttp.open("GET", "Controller/searchId.php?id="+id, true);
   	xhttp.send();
}