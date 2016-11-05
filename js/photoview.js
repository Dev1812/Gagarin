var PhotoLayer = {
  var html = '\
    <div id="popup_box_left" onClick="Photoview.prevPhoto();" class="popup_box_arrow popup_box_left"></div>\
    <div id="popup_box_right" onClick="Photoview.nextPhoto();" class="popup_box_arrow popup_box_right"></div>\
    <div class="popup_box_close" onClick="PopupBox.hide();"></div>\
    <div class="popup_box_wrap" style="width:73%;">\
    <div class="box_body" id="box_body" style="text-align:center;">\
    <img id="pv_progress" style="width:20px;height:20px;margin:240px auto;" src="/images/upload1.gif">\
    </div>\
  </div>';
  ge('popup_box').innerHTML = html;
  setTimeout(function(){
    //PopupBox.show(html, {'width':'73%', 'padding':'0'});
    addEvent(window, 'keydown', Photoview.onKeyUp);
  },10);
},
  onKeyUp: function(e) {
        switch(key_code) {
      case 27:
        onEscKey();
        break;
      case 37:
        onLeftKey();
        break;
      case 39:
        onRightKey();
        break;
    }
    function onLeftKey() {
      Photoview.prevPhoto();
    }
    function onRightKey() {
      Photoview.nextPhoto();
    }
    function onEscKey() {
      PopupBox.hide();
      deleteEvent(window, 'keydown', Photoview.onKeyUp);
    }
  }
}