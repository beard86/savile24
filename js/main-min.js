(function() {

	function scrollTo(Y, duration, easingFunction, callback) {
	    
	    var start = Date.now();
	    var from = document.body.scrollTop || document.documentElement.scrollTop || 0;
	 
	    if(from === Y) {
	        return; /* Prevent scrolling to the Y point if already there */
	    }
	 
	    function min(a,b) {
	    	return a<b?a:b;
	    }
	 
	    function scroll() {
	        var currentTime = Date.now(), time = min(1, ((currentTime - start) / duration)), easedT = easingFunction(time);
	 
	        var tempscroll = (easedT * (Y - from)) + from;
	        document.body.scrollTop = tempscroll;
	        document.documentElement.scrollTop = tempscroll;
	 
	        if(time < 1) {requestAnimationFrame(scroll);}
	        else {
	            if(callback) {callback();}
	        }
	    }
	 
	    requestAnimationFrame(scroll);
	}
 
	var easing = {
	  // no easing, no acceleration
	  linear: function (t) { return t; },
	};

	// header minifies on scroll
	var scrolltimeout = null;
	var scrolldelta = Math.round(document.body.scrollTop || document.documentElement.scrollTop || 0);
	var scrolltemp = 0;
	var prevscroll = window.scrollY;

	var heroimage = document.querySelectorAll('#hero img')[0];

	window.onscroll = function() {
		scrolltemp = document.body.scrollTop || document.documentElement.scrollTop || 0;
		scrolltemp = prevscroll - scrolltemp;
		scrolldelta -= scrolltemp;
		var herotemp = scrolldelta/2.4;
		if(herotemp < 0) { herotemp = 0; }
		heroimage.style.transform = 'translateY('+herotemp+'px)';

		prevscroll = document.body.scrollTop || document.documentElement.scrollTop || 0;
	};

})();