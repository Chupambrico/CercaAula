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

var iniz=1417388400;
var d = new Date();
var n = d.getTime()/1000; 
var begin,end;
var polo="";
var g;
var hi;
var hf;
var secg;
var sechi;
var sechf;

$(document).ready(function () {
	var snapper = new Snap({
		element: document.getElementById('content')
	});
	snapper.open('left');
	
    while(n>=(iniz+604800)){
		iniz+=604800;	
	}

	for(var i=0;i<comp.length;i++){
		$(".day").append("<option value="+comp[i]+">"+cmp[i]+"</option>");
	}
	for(var i=9;i<=18;i++){
		$(".orainizio").append("<option value="+i+">"+i+":00</option>");
		$(".orafine").append("<option value="+(i+1)+">"+(i+1)+":00</option>");
	}
	
	
	dataWeek();
		
	function dataWeek(){
		g=$(".day").val();
		hi=$(".orainizio").val();
		hf=$(".orafine").val();
		secg= week[g]*(3600*24);
		sechi= hi*3600;
		sechf= hf*3600;
		begin= secg+sechi+iniz;
		end=secg+sechf+iniz;
	}	

	$(".day, .orainizio, .orafine").change(function () {
	    dataWeek();
		abomba();
    });




	
	
	
	$(".page-sidebar a").on("click", function(e){  
		e.preventDefault();  
		var hrefval = $(this).attr("href");  
			   
		if(hrefval == "#about") {   
			$(".location").html($(this).html());
			if( snapper.state().state=="left" ){
				snapper.close();
			} else {
				snapper.open('left');
			}
			var sidepolo=$(this).html().split("<em");
			polo=sidepolo[0];		   
			abomba();
		}
	});
});


function abomba(){
	xmlhttpContenuti=GetXmlHttpObject();
	if (xmlhttpContenuti==null){
		alert ("Your browser does not support Ajax HTTP");
		return;
	}
	if(polo!=""){
		$(".result").html("");
		$(".result").append("<p class='center-text'>Loading the content...</p>");
		var url="../../../req.php?polo="+polo+"&orai="+begin+"&oraf="+end;
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
			$(".result").append("<div class='container'><h4 class='heading left-text'>"+temp[0]+"</h4><p class='left-text'>"+temp[4]+"<br>Libera fino alle "+finq.getHours()+":"+(finq.getMinutes()<10?'0':'')+finq.getMinutes()+"</p></div><div class='decoration'></div>");
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