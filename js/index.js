function getEvents() {
  ajax.post({
  	url: '/events/a_get/',
  	success: function(obj) {
  	  switch(obj.err) {
  	  	case false:
  	  	  if(obj.html) {
  	  	  	var html = document.createElement('div');
  	  	  	html.innerHTML = obj.html
  	  	  	ge('events_wrap').appendChild(html);
  	        hide('events_upload');
  	  	  }
  	  	  break;
  	  }
  	}
  });
}