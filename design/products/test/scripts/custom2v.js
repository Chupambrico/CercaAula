var rot=0;
var d = new Date();
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

$(document).ready(function () {
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
		var g=$(".day").val();
		var hi=$(".orainizio").val();
		var hf=$(".orafine").val();
		var secg= week[g]*(3600*24);
		var sechi= hi*3600;
		var sechf= hf*3600;
		begin= secg+sechi+iniz;
		end=secg+sechf+iniz;
		
function dataWeek(){
		 g=$(".day").val();
		 hi=$(".orainizio").val();
		 hf=$(".orafine").val();
		 secg= week[g]*(3600*24);
		 sechi= hi*3600;
		 sechf= hf*3600;
		 begin= secg+sechi+iniz;
		 end=secg+sechf+iniz;
		 abomba();
}	

 $(".day").change(function () {
	     dataWeek()
    });
    $(".orainizio").change(function () {
			dataWeek()
		
    });
   $(".orafine").change(function () {
		dataWeek()
    });
});

var polo="";
var orai=1417694400;
var oraf=1417775400;
$(document).ready(function() {
	var snapper = new Snap({
	  element: document.getElementById('content')
	});
	if( snapper.state().state=="left" ){
		snapper.close();
	} else {
		snapper.open('left');
	}
	
	 $(".page-sidebar a").on("click", function(e){  
			 e.preventDefault();  
			 var hrefval = $(this).attr("href");  
			   
			 if(hrefval == "#about") {   
			 $(".location").html($(this).html());
			
			   //openClose();
			   if( snapper.state().state=="left" ){
		snapper.close();
	} else {
		snapper.open('left');
	}
	var roba=$(this).html().split("<em");
			   polo=roba[0];		   
			   abomba();
			  }
	 }); 
	/* 	 $(".list li").on("click", function(e){  
		 	 e.preventDefault();  
			 var distance = $('.menu1').css('width');  
			$(".location").html($(this).html());
			 if(distance == "0px") {   
			   openSidepage();  
			  } else { 
			   closeSidepage();  
			 }  
			  
			
	 }); */
	  /*$(".home").on("click", function(e){  
			 e.preventDefault();
			if(rot==1){
			 openClose();  
				rot=0;
			}else{
				openClose();	
				rot=1
			}
			
			
	 }); */
  });

function lol(){
   /* var col = vettore[Math.floor((Math.random() * vettore.length))];
	var zoz = vett[Math.floor((Math.random() * vett.length))];
	document.getElementById("az").innerHTML+="<div class='row'><div class='room'>"+col+"</div><div class='hours'>"+zoz+"</div></div>";*/
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
				//$(".result ul").append("<li><div class='hours'>Libera fino alle "+finq.getHours()+":"+finq.getMinutes()+"</div><div class='room'>"+temp[0]+"</div></li>");
				//$(".result").append("<div class='small-notification yellow-notification'><p>Libera fino alle "+finq.getHours()+":"+finq.getMinutes()+"|"+temp[0]+"</p></div>");
				//$(".result").append("<div class='dropdown-item bg-light'>Libera fino alle "+finq.getHours()+":"+finq.getMinutes()+"|"+temp[0]+"</div>");
				$(".result").append("<div class='container'><h4 class='heading left-text'>"+temp[0]+"</h4><p class='left-text'>"+temp[4]+"<br>Libera fino alle "+finq.getHours()+":"+(finq.getMinutes()<10?'0':'')+finq.getMinutes()+"</p></div><div class='decoration'></div>");
				
			}
		    
			//document.write(stringa);
			
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

/*function openClose() {
	if( snapper.state().state=="left" ){
		snapper.close();
	} else {
		snapper.open('left');
	}
	return false;
}*/
 
 /*function openSidepage() {  
	//Desktop version
	 var col=$(".mob").css('display');
	 if(col=="none"){
				$('.menu1').animate({  
			width: '20%'  
			}, 400, 'easeOutBack'); 
			$('.menu2').animate({  
				right: '1%'    
			}, 400, 'easeOutBack'); 
	 		}else{//Mobile version
					$('.menu1').animate({  
			width: '100%'  
			}, 400, 'easeOutBack'); 
			
		}
	 if(rot==1){
		$('.home').animate({  borderSpacing: 0}, {
    step: function(now,fx) {
      $(this).css('transform','rotate('+now+'deg)');
    },
    duration:'slow'
			},'easeIn');
		 //$('.home').css("transform","rotate(0deg)");
		 rot=0;
	
	 }
 }
  
function closeSidepage(){  
	//Desktop version 
	var col=$(".mob").css('display');
	
	 if(col=="none"){
		 
		$('.menu1').animate({  
		width: '0px'  
		}, 400, 'easeOutQuint');   
		$('.menu2').animate({  
		right: '11%'  
		}, 400, 'easeOutQuint');
	 
	 }else{//Mobile version
		 	$('.menu1').animate({  
				width: '0px'  
				}, 400, 'easeOutQuint');  
	 }
	
	if(rot==0){
	$('.home').animate({  borderSpacing: 180}, {
    step: function(now,fx) {
      $(this).css('transform','rotate('+now+'deg)');
    },
    duration:'slow'
			},'easeIn');
		// $('.home').css("transform","rotate(-180deg)");
			rot=1;
	 }
	


}*/