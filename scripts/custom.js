var cmp = new Array(5);
cmp[0]="Lunedì";
cmp[1]="Martedì";
cmp[2]="Mercoledì";
cmp[3]="Giovedì";
cmp[4]="Venerdì";
var week= new Array(5);
week["lun"]=0 ;
week["mar"]=1 ;
week["mer"]=2 ;
week["gio"]=3 ;
week["ven"]=4;
var comp= new Array(5);
comp[0]="lun";
comp[1]="mar";
comp[2]="mer";
comp[3]="gio";
comp[4]="ven";

var begin,end,g,hi,hf,secg,sechi,sechf,iniz,polo="";

$(document).ready(function () {
	var snapper = new Snap({
		element: document.getElementById('content')
	});
	snapper.open('left');
	
	for(var i=0;i<comp.length;i++){
		$(".day").append("<option value="+comp[i]+">"+cmp[i]+"</option>");
	}
	for(var i=9;i<=18;i++){
		$(".orainizio").append("<option value="+i+">"+i+":00</option>");
		$(".orafine").append("<option value="+(i+1)+">"+(i+1)+":00</option>");
	}
	
	dataWeek();
	
	$(".day, .orainizio, .orafine").change(function () {
	    dataWeek();
		abomba();
    });

	$(".page-sidebar a").on("click", function(e){  
		e.preventDefault();  
		var hrefval = $(this).attr("href");  
			   
		if(hrefval == "#about") {   
			$(".location").html($(this).html());
			openClose();
			var sidepolo=$(this).html().split("<em");
			polo=sidepolo[0];		   
			abomba();
		}
	});
	
	$('.flat-menu').click(function(){
		snapper.open('left');
		return false;
	});
	
	$('.sidebar-header').click(function(){
		snapper.close();
		return false;
	});
	
	$('.deploy-sidebar, .page-header, .close-icon').click(function(){
		openClose();
		return false;
	});
	
	function openClose(){
		if( snapper.state().state=="left" ){
			snapper.close();
		} else {
			snapper.open('left');
		}
	}
});

function getMonday() {
	d = new Date();
	var day = d.getDay(),
	diff = d.getDate() - day + (day == 0 ? -6:1);
	d.setDate(diff);
	d.setHours(0);
	d.setMinutes(0);
	d.setSeconds(0);
	d.setMilliseconds(0);
	return new Date(d);
}

function dataWeek(){
	iniz=getMonday();
	iniz=iniz.getTime();
	iniz=iniz/1000;
	g=$(".day").val();
	hi=$(".orainizio").val();
	hf=$(".orafine").val();
	secg= week[g]*(3600*24);
	sechi= hi*3600;
	sechf= hf*3600;
	begin= secg+sechi+iniz;
	end=secg+sechf+iniz;
}
	
function abomba(){
	xmlhttpContenuti=GetXmlHttpObject();
	if (xmlhttpContenuti==null){
		alert ("Your browser does not support Ajax HTTP");
		return;
	}
	if(polo!=""){
		$(".result").html("");
		$(".result").append("<p class='center-text'>Loading the content...</p>");
		var url="../req.php?polo="+polo+"&orai="+begin+"&oraf="+end;
		xmlhttpContenuti.onreadystatechange=boomerang;
		xmlhttpContenuti.open("GET",url,true);
		xmlhttpContenuti.send(null);
	}
}

function boomerang(){
	if (xmlhttpContenuti.readyState==4){
		var stringa= xmlhttpContenuti.responseText.trim();
		var Re = new RegExp("%0D%0A","g");
		stringa = stringa.replace(Re,"");
		var arr=stringa.split("<removekebab>");
		$(".result").html("");
		for(var i=0; i<arr.length-1;i++){
			var temp=arr[i].split("£");
			var iniq=new Date(temp[1]*1000);
			var finq=new Date(temp[2]*1000);
			$(".result").append("<div class='container'><h4 class='heading left-text'>"+temp[0]+"</h4><p class='left-text'>"+temp[3]+"<br>Libera dalle "+iniq.getHours()+":"+(iniq.getMinutes()<10?'0':'')+iniq.getMinutes()+" fino alle "+finq.getHours()+":"+(finq.getMinutes()<10?'0':'')+finq.getMinutes()+"</p></div><div class='decoration'></div>");
		}	
	}
}

function GetXmlHttpObject(){
	if (window.XMLHttpRequest){
		return new XMLHttpRequest();
	}
	if (window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}