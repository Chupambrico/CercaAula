// Window load event used just in case window height is dependant upon images
$(window).bind("load", function() { 
       
       var footerHeight = 0,
           footerTop = 0,
           $footer = $("#footer");
           $conte = $("#content");
           
       positionFooter();
       
       function positionFooter() {
       
                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
                
                // DEBUGGING STUFF
                
                console.log("Document height: ", $(document.body).height());
                console.log("Window height: ", $(window).height());
                console.log("Window scroll: ", $(window).scrollTop());
                console.log("Footer height: ", footerHeight);
                console.log("Footer top: ", footerTop);
                console.log("-----------")
                
                //
       
               if ( ($(document.body).height()+footerHeight) < /*$(window).height()*/1000) {
                   $footer.css({
                        position: "absolute"
                   }).stop().animate({
                        top: footerTop
                   })
               } else {
                   $footer.css({
                        position: "static"
                   })
               }
			   
			   
				if ( ($conte.height()) < $(window).height()) {
					var alt =$(window).height();
					document.getElementById("content")..style.height = alt;
				}
       }

       $(window)
               .scroll(positionFooter)
               .resize(positionFooter)
               
});