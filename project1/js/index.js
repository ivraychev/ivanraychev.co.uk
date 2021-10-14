function supportsCSSCustomProperties() {
    var div = document.createElement('div');
    div.style.setProperty('--width', '1%');
    return div.style.getPropertyValue('--width') == '1%';
  }
  
  if (!supportsCSSCustomProperties()) {
    alert('Sorry! Your browser does not support CSS Custom Properties.');
  }
