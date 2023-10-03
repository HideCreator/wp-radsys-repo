var gray = false;
$(document).ready(function(){
    setChoose(1);
    $(window).scroll(function () {
        scrollView();
    });
    scrollView();

    setInputFilter(document.getElementById("phone"), function(value) {
        return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
});

function scrollView() {
    if(!gray){
        var hT = $('.section7').offset().top,
        hH = $('.section7').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
        var onGrid = wS > (hT-(hH/2));
        if (onGrid) {
            gray = true;
            $(".grid1").addClass("animate-grayscale1");
            $(".grid2").addClass("animate-grayscale2");
            $(".grid3").addClass("animate-grayscale1");
            $(".grid4").addClass("animate-grayscale2");
            $(".grid5").addClass("animate-grayscale1");
            $(".grid6").addClass("animate-grayscale2");
        }
    }
}

function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }

function setChoose(index){
    hideAllContent();
    $("#chooser"+index).addClass("active");
    $("#content"+index).show();
}

function hideAllContent(){
    for(var i=1;i<8;i++){
        $("#chooser"+i).removeClass("active");
        $("#content"+i).hide();
    }
}

function scrollToDiv($class) {
    $('html, body').animate({
        scrollTop: $("#" + $class + "-section").offset().top - 100
    }, 800);
}