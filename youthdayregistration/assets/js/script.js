String.prototype.trimLeft = function(charlist) {
  if (charlist === undefined)
	charlist = "\s";

  return this.replace(new RegExp("^[" + charlist + "]+"), "");
};

String.prototype.trimRight = function(charlist) {
  if (charlist === undefined)
	charlist = "\s";

  return this.replace(new RegExp("[" + charlist + "]+$"), "");
};

function valToArray(val) {
	if(val){
		if(Array.isArray(val)){
			return val;
		}
		else{
			return val.split(",");
		}
	}
	else{
		return [];
	}
};

function debounce(fn, delay) {
  var timer = null;
  return function () {
	var context = this, args = arguments;
	clearTimeout(timer);
	timer = setTimeout(function () {
	  fn.apply(context, args);
	}, delay);
  };
}

function extend(obj, src) {
	for (var key in src) {
		if (src.hasOwnProperty(key)) obj[key] = src[key];
	}
	return obj;
}

function setPathLink(path , queryObj){
	var url;
	if(queryObj){
		var str = [];
		for(var k in queryObj){
			var v = queryObj[k]
			if (queryObj.hasOwnProperty(k) && v !== '') {
				str.push(encodeURIComponent(k) + "=" + encodeURIComponent(v));
			} 
		}
		
		var qs = str.join("&");
		
		if(path.indexOf('?') > 0){
			url = path + '&' + qs;  
		}
		else{
			url = path + '?' + qs;  
		}
		
	}
	else{
		url = siteAddr + path;
	}
	
	return url;
}

function randomColor() {
	var letters = '0123456789ABCDEF';
	var color = '#';
	for (var i = 0; i < 6; i++) {
		color += letters[Math.floor(Math.random() * 16)];
	}
	return color;
}

function hideFlashMsg(){
	var elem=$('#flashmsgholder');
	if(elem.length>0){
		var duration=elem.attr("data-show-duration");
		if(duration>0){
			window.setTimeout(function(){
				elem.fadeOut();
			},duration)
		}
	}
}

$(document).ready(function() {
	
	//hides page flash msg after page navigate.
	hideFlashMsg();
	
	__allclientevents
	
	var pageLoadinStyle = $('#page-loading-indicator').html();
	
	$('.has-tooltip').tooltip();
	
	$('.toggle-check-all').click(function(){
		var p = $(this).closest('table').find('.optioncheck');
		p.prop("checked",$(this).prop("checked"));
	});
	
	$('.optioncheck, .toggle-check-all').click(function(){
		var sel_ids =$(this).closest('.page').find("input.optioncheck:checkbox:checked").map(function(){
		  return $(this).val();
		}).get();
		if(sel_ids.length>0){
			 $(this).closest('.page').find('.btn-delete-selected').removeClass('d-none');
		}
		else{
			$(this).closest('.page').find('.btn-delete-selected').addClass('d-none');
		}
	});
	
	$('.btn-delete-selected').click(function(){
		var recordDeleteMsg=$(this).data("prompt-msg");
		if(recordDeleteMsg==''){
			recordDeleteMsg="Are you sure you want to delete this record";
		}
		var sel_ids =$(this).closest('.page').find("input.optioncheck:checkbox:checked").map(function(){
		  return $(this).val();
		}).get();
		if(sel_ids.length>0){
			if(confirm(recordDeleteMsg)){
				var url = $(this).data('url');
				url = url.replace("{sel_ids}",sel_ids);
				window.location = url;
			}
		}
		else{
			alert('No Record Selected');
		}
	});
	
	$('.recordDeletePromptAction').click(function(e){
		var recordDeleteMsg=$(this).attr("data-prompt-msg");
		if(recordDeleteMsg==''){
			recordDeleteMsg="Are you sure you want to delete this record";
		}
		if(!confirm(recordDeleteMsg)){
			e.preventDefault();
		}
	});
	
	$('.removeEditUploadFile').click(function(e){
		 // hidden input that contains all the file
		var holder = $(this).closest(".uploaded-file-holder");
		var inputid = $(this).attr("data-input");
		var inputControl = $(inputid);
		var filepath = $(this).attr('data-file');
		var filenum = $(this).attr('data-file-num');
		var srcTxt = inputControl.val();
		if(srcTxt){
			var arrSrc = srcTxt.split(",");
			arrSrc.forEach(function(src,index){
				if(src == filepath){
					arrSrc.splice(index,1);
				}
			});
		}
		holder.find("#file-holder-"+filenum).remove();
		var ty = arrSrc.join(",");
		inputControl.val(ty);
	});
	
	$('.open-page-modal').on('click',function(e){
        e.preventDefault();
		
		var dataURL = $(this).attr('href');
		var modal = $(this).next('.modal');
		
		modal.modal({show:true});
        modal.find('.modal-body').html(pageLoadinStyle).load(dataURL);
		
    });
	
	$('a.page-modal').on('click',function(e){
        e.preventDefault();
		
		var dataURL = $(this).attr('href');
		var modal = $('#main-page-modal');
		
		modal.modal({show:true});
        modal.find('.modal-body').html(pageLoadinStyle).load(dataURL);
		
    });
	
	$(".custom-file-input").on("change", function() {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
	
	$('.open-page-inline').on('click',function(e){
        e.preventDefault();
		var dataURL = $(this).attr('href');
		
		var page = $(this).parent('.inline-page').find('.page-content');
		var loaded = page.attr('loaded');
		
		if(!loaded){
			page.html(pageLoadinStyle).load(dataURL);
			page.attr('loaded',true)
		}
		page.toggleClass("d-none");
    });
	
	$('.export-btn').on('click',function(e){
		var html = $(this).closest('.page').find('.page-records').html();
		var title = $(this).closest('.page').find('.record-title').html();
		$('#exportformdata').val(html);
		$('#exportformtitle').val(title);
		$('#exportform').submit();
    });
	
	$('form.multi-form').on('submit',function(e){
		var isAllRowsValid = true;
		var form = $(this)[0];
		
		$(form).find('tr.input-row').each(function(e){
			var validateRow = false;
			
			$(this).find('td').each(function(e){
				var inp = $(this).find('input,select,textarea');
				
				if(inp.val() !=''){
					validateRow = true;
					return true;
				}
			});
			
			if(validateRow==true){
				$(this).find('input,select,textarea').each(function(e){
					var elem = $(this)[0];
					if(!elem.checkValidity()){
						isAllRowsValid = false;
						return true;
					}
				});
			}
			
		});
		
		if(isAllRowsValid==false){
			e.preventDefault();
			form.reportValidity();
			e.preventDefault();
		}
    });
	
	$('[data-load-target]').on('change',function(e){
		
		var val = $(this).val();
		var path = $(this).data('load-path');
		
		path = path + '/' + val;
		
		var targetName =  $(this).data('load-target');
		var selectElem ="[name='" +  targetName +  "']";
		
		$(selectElem).html('<option value="">Loading...</option>');
		var placeholder = $(selectElem).attr('placeholder') || 'Select a value...';
		
		$.ajax({
			type: 'GET',
			url: path,
			dataType: 'json',
			success: function (data){
				var options = '<option value="">' + placeholder +  '</option>';
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					options += '<option value="' + data[i].value + '">' + data[i].label + '</option>';
				}
				$(selectElem).html(options);
			},
			error: function (data) {
				
			},
		});
		
    });
	
	__htmleditorplugininit
	
	__selectizeplugininit
	
	__dateplugininitjs
	
});





(function() {
	'use strict';
	 window.addEventListener('load', function() {
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.getElementsByClassName('needs-validation');
	// Loop over them and prevent submission
	var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
			}
			form.classList.add('was-validated');
			$("input:required:invalid").parents('.dropzone').css("borderColor", "red");
			$("input:required:invalid").parents('.custom-file').find('.custom-file-label').css("borderColor", "red");
			$("textarea:required:invalid").parents('.form-group').find('.note-editor').css("borderColor", "red");
		}, false);
	});
	}, false); 
})();


$(window).bind('load', function() {
	$('img').each(function() {
		if((typeof this.naturalWidth != "undefined" &&
			this.naturalWidth == 0 ) 
			|| this.readyState == 'uninitialized' ) {
			$(this).attr('src', './assets/images/no-image-available.png');
		}
	}); }
);

__ionsliderplugininitjs

__smartwizardplugininitjs

__dropzonefileuploadplugininitjs

$(function () { 
  $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
});

$(function() {
	$(".switch-checkbox").bootstrapSwitch();
});
