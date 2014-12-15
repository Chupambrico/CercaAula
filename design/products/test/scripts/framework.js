//////////////////
//Site Preloader//
///////////////////

$(window).load(function() { // makes sure the whole site is loaded
	$("#status").fadeOut(); // will first fade out the loading animation
	$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
})


$(document).ready(function(){
	
	
	//////////////////////
	//////////////////////
	//Touch Enabled Stuf//
	//////////////////////
	//////////////////////
	
	//Tap Dismiss
	
    $(".tap-dismiss").hammer({ 
		drag_max_touches:0,
	})	
	.on("tap", function() {
		$(this).fadeOut(500);
	});
	
	//Double tap dimiss
	
    $(".double-tap-dismiss").hammer({ 
		drag_max_touches:0,
	})	
	.on("doubletap", function() {
		$(this).fadeOut(500);
	});
	
	//Swipe to tick swipe to cross tap to clear
	
	$('.swipe-tick-cross-left').click(function(){return false});
    $(".swipe-tick-cross-left").hammer({ 
		drag_max_touches:0,
	})
	.on("dragleft", function(ev){
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).css("background-color", "#ffdcdd");
		$(this).find(".swipe-check-box").show();
		$(this).find(".swipe-tick-box").hide();
		$(this).find(".swipe-null-box").hide();
	})
	.on("dragright", function(ev) {
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).css("background-color", "#e3ffdc");
		$(this).find(".swipe-check-box").hide();
		$(this).find(".swipe-tick-box").show();
		$(this).find(".swipe-null-box").hide();		
	})
	.on("tap", function() {
		$(this).css( "background-color", "#f1f1f1");
		$(this).find(".swipe-check-box").hide();
		$(this).find(".swipe-tick-box").hide();
		$(this).find(".swipe-null-box").show();
	});
	
	//

	$('.swipe-tick-cross-right').click(function(){return false});
    $(".swipe-tick-cross-right").hammer({ 
		drag_max_touches:0,
	})
	.on("dragright", function(ev){
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).css("background-color", "#ffdcdd");
		$(this).find(".swipe-check-box").show();
		$(this).find(".swipe-tick-box").hide();
		$(this).find(".swipe-null-box").hide();
	})
	.on("dragleft", function(ev) {
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).css("background-color", "#e3ffdc");
		$(this).find(".swipe-check-box").hide();
		$(this).find(".swipe-tick-box").show();
		$(this).find(".swipe-null-box").hide();		
	})
	.on("tap", function() {
		$(this).css( "background-color", "#f1f1f1");
		$(this).find(".swipe-check-box").hide();
		$(this).find(".swipe-tick-box").hide();
		$(this).find(".swipe-null-box").show();
	});

	
	//Swipe Left Dismiss Right Dismiss

	
	$('.swipe-left-notification').click(function(){return false});
    $(".swipe-left-notification").hammer({ 
		drag_max_touches:0,
	})
	.on("dragleft", function(ev){
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).find('.swipe-button').css( "width", "20%" ).css( "display", "block");
		$(this).parent().find('.swipe-left-notification a').css( "width", "75%" );
	})
	.on("dragright", function(ev) {
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).find('.swipe-button').css( "width", "0%" ).css( "display", "none");
		$(this).parent().find('.swipe-left-notification a').css( "width", "100%" );
	})

	.on("touch", function() {
		$(this).css( "background-color", "#eaeaea");
	})
	
	.on("release", function() {
		$(this).css( "background-color", "#f1f1f1");
	});
	
	//
	
	$('.swipe-right-notification').click(function(){return false});
    $(".swipe-right-notification").hammer({ 
		drag_max_touches:0,
	})
	.on("dragright", function(ev){
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).find('.swipe-button').css( "width", "20%" ).css( "display", "block");
		$(this).parent().find('.swipe-right-notification a').css( "width", "75%" );
	})
	.on("dragleft", function(ev) {
		var touches = ev.gesture.touches;
		ev.gesture.preventDefault();
		$(this).find('.swipe-button').css( "width", "0%" ).css( "display", "none");
		$(this).parent().find('.swipe-right-notification a').css( "width", "100%" );
	})

	.on("touch", function() {
		$(this).css( "background-color", "#eaeaea");
	})
	
	.on("release", function() {
		$(this).css( "background-color", "#f1f1f1");
	});

	
	$('.swipe-button').click(function(){
		$(this).parent().parent().fadeOut(200);
		return false;
	});

	/////////////////////////////////////////////////////////////////////////////
	//Detect if iOS WebApp Engaged and permit navigation without deploying Safari
	/////////////////////////////////////////////////////////////////////////////
	(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")
		
});

(function (a) {
    a.fn.extend({
        tabify: function (e) {
            function c(b) {
                hash = a(b).find("a").attr("href");
                return hash = hash.substring(0, hash.length - 4)
            }
            function f(b) {
                a(b).addClass("active");
                a(c(b)).show();
                a(b).siblings("li").each(function () {
                    a(this).removeClass("active");
                    a(c(this)).hide()
                })
            }
            return this.each(function () {
                function b() {
                    location.hash && a(d).find("a[href=" + location.hash + "]").length > 0 && f(a(d).find("a[href=" + location.hash + "]").parent())
                }
                var d = this,
                    g = {
                        ul: a(d)
                    };
                a(this).find("li a").each(function () {
                    a(this).attr("href", a(this).attr("href") + "-tab")
                });
                location.hash && b();
                setInterval(b, 100);
                a(this).find("li").each(function () {
                    a(this).hasClass("active") ? a(c(this)).show() : a(c(this)).hide()
                });
                e && e(g)
            })
        }
    })
})(jQuery);

