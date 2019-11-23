/* http://keith-wood.name/countdown.html
 * Italian initialisation for the jQuery countdown extension
 * Written by Davide Bellettini (davide.bellettini@gmail.com) and Roberto Chiaveri Feb 2008. */
(function($) {
	$.countdown.regional['en'] = {
		labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
		labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],
		compactLabels: ['y', 'm', 'w', 'd'], 
		whichLabels: null, 
		digits: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'], 
		timeSeparator: ':',
		isRTL: false };
	$.countdown.setDefaults($.countdown.regional['en']);
})(jQuery);
