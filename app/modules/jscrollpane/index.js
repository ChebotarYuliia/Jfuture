
var $ = require('jquery');
require('../../../node_modules/jscrollpane/script/jquery.mousewheel');
require('jscrollpane');
require('./index.scss');

module.exports = function() {
  function initjScrollPane() {
    setTimeout(function() {
      $('.jScrollPane:not(.jspScrollable)').each(function() {
        var $this = $(this);

        if ($this.height() > 0) {
          $this.jScrollPane();
        }
      });
    }, 100);
  }

  $(document).click(initjScrollPane);
  // $(document).ready( function() {
  //   setTimeout(initjScrollPane(), 100);
  //   console.log(123);
  // });
  initjScrollPane();
};
