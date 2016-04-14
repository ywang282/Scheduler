var uiuc_fix_emergency_alert_attempt_counter = 0;

function uiuc_fix_emergency_alert()
	{
	var mini_alert = null;
	//check for EWS script element in page by ID, if it is there, reposition/style it....
		
	if( jQuery( "#ewas-mini-wrapper" ).length)
		{
		//remove mini-version of alert from dom
		mini_alert = jQuery( "#ewas-mini-wrapper" ).detach();
		//prepend to #alert-div
		jQuery( "#alert-div" ).prepend(mini_alert);
		//add an extra class to the parent element to put the red background color all the way across the alert
		jQuery( "#alert-div" ).addClass("uiuc_emergency_alert_wrapper");
		}
	else
		//It's possible the emergency alert scripts haven't finished loading/executing. Try again every 500 milliseconds, up to 10 times (last attempt after about 5 seconds)
		{
		uiuc_fix_emergency_alert_attempt_counter++;
		if(uiuc_fix_emergency_alert_attempt_counter<=10)
			{
			setTimeout(uiuc_fix_emergency_alert, 500);
			}
		}
	}

jQuery(document).ready(function() {
    uiuc_fix_emergency_alert();
});