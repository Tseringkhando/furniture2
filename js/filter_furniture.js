function viewType(){
	var xmlHttp = new XMLHttpRequest();		
	xmlHttp.open('POST', '../view/user/filter', true);
	var data = new FormData();
	data.append('furniture_cond', this.value);
	xmlHttp.send(data);	

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			var furnitureAll = document.getElementById('furniture_list');
			furnitureAll.innerHTML = xmlHttp.responseText;
		}
	}
}
function changeFurniture(){
	var ele = document.getElementsByClassName('furniture_condition')[0];
	ele.addEventListener('change', viewType);
}

document.addEventListener('DOMContentLoaded', changeFurniture);