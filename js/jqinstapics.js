/*
 * jQInstaPics
 * Created by: Abid Din - http://craftedpixelz.co.uk
 * Contributions made by: Kacey Coughlin = http://www.kaceycoughlin.com
 * Version: 1.1
 * Copyright: Crafted Pixelz
 * License: MIT license
 * Updated: 19th August 2013
*/
 
(function ($) {

    var thisId, thisToken;

    $.getScript('private.js', function () {
        thisId = instaId;
        thisToken = instaToken;
    });

    $.fn.jqinstapics = function (options) {

        // Defaults
        var defaults = {
            "user_id": thisId,
            "access_token": thisToken,
            "count": 10,
            "size": null
        };                      

        var o = $.extend(defaults, options);

        return this.each(function () {
        
          // Vars
          var elem = $(this),
              url = "https://api.instagram.com/v1/users/" + o.user_id + "/media/recent?access_token=" + o.access_token + "&count=" + o.count + "&callback=?";
           	
            // Get the images	
            $.getJSON(url, function(data){
                $.each(data.data, function (i, val) {
                    var li = $("<li/>").appendTo(elem),
                        a = $("<a/>", {"href": val.link, "target": "_blank"}).appendTo(li),
                        img = "";
                        
                         //Size
	                    if (o.size === null) { // Check if option left blank, then use default
		                   img = $("<img/>", {"src": val.images.thumbnail.url}).appendTo(a);
	                    } else if (o.size === "low_resolution") {
	                    	img = $("<img/>", {"src": val.images.low_resolution.url}).appendTo(a);
		                } else if (o.size === "standard_resolution") {
		                	img = $("<img/>", {"src": val.images.standard_resolution.url}).appendTo(a);
	                    } else {
		                    // Invalid entry, use default
		                    img = $("<img/>", {"src": val.images.thumbnail.url}).appendTo(a);
	                    }
                    
                    if (val.caption){
                        a.attr("title", val.caption.text);
                    }
                });
            });
            
            if(o.user_id === null || o.access_token === null){
              elem.append("<li>Please specify a User ID and Access Token, as outlined in the docs.</li>");
            }

        });
    };
})(jQuery);