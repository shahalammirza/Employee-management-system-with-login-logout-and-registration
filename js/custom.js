(function ($) {
  'use strict';

  const Alert = $.fn.alert.Constructor;
  
  //zoom in out alert
  Alert.prototype.zoomIn = function(e) {
    if (e) e.preventDefault();
    
    const $this = $(this);
    
    const $parent = $this.closest('.alert');
    
    $this.trigger(e = $.Event('zoomIn.bs.alert'));
   
    let $parentWidth = parseInt($parent.css('width'));
    let $parentFontSize = parseInt($parent.css('font-size'));

    if (e.isDefaultPrevented()) return;
    
    $parent.css({
      width: $parentWidth += 20,
      fontSize: $parentFontSize += 2
    });
  };
  
  Alert.prototype.zoomOut = function(e) {
    if (e) e.preventDefault();
    
    const $this = $(this);
    
    const $parent = $this.closest('.alert');
    
    $this.trigger(e = $.Event('zoomOut.bs.alert')); 
    
    let $parentWidth = parseInt($parent.css('width'));
    let $parentFontSize = parseInt($parent.css('font-size'));
    
    if (e.isDefaultPrevented()) return;
    
    $parent.css({
      width: $parentWidth -= 20,
      fontSize: $parentFontSize -= 2
    }); 
  };
  
  Alert.prototype.highContrast = function(e) {
    if (e) e.preventDefault();
    
    const $this = $(this);
    
    const $parent = $this.closest('.alert');
    
    $this.trigger(e = $.Event('highContrast.bs.alert'));
    
    if (e.isDefaultPrevented()) return;
    
    $parent.toggleClass('high-contrast-on'); 
  };

  // zoom in out
  $(document).on('click.bs.alert.data-api', '[data-zoomIn="alert"]', Alert.prototype.zoomIn);
  
  $(document).on('click.bs.alert.data-api', '[data-zoomOut="alert"]', Alert.prototype.zoomOut);
  
  $(document).on('click.bs.alert.data-api', '[data-highContrast="alert"]', Alert.prototype.highContrast);
  
})(jQuery);


