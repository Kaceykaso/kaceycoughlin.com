/* Google+ public feed
 * Google+ API: Activites: list
 * Implementation by: Kacey Coughlin - www.kaceycoughlin.com
 * MIT License
 */

(function () {
	$.fm.googlePlus = function(options) {
		// Defaults
		var defaults = {
			"id": "id",
			"apiKey": "apiKey" /* api key */
			"collection": "public",
			"maxResults": null, /* count of results to pull */
			"pageToken": null /* use 'nextPageToken' in order to page through many results */
		};
		
		var opts = $.extend(defaults, options);
		
		return this.each(function () {
			// Create connection
			var elem = $(this),
				url = "https://www.googleapis.com/plus/v1/people/"+ o.id +"/activities/public?key="+ o.apiKey +"";
		})
	}

})