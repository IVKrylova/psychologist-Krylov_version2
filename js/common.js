$(document).ready(function(){$(".owl-carousel").owlCarousel({autoPlay:3000,items:3,itemsDesktop:[1125,2],itemsDesktopSmall:[980,2],itemsMobile:[650,1],});lightbox.option({'resizeDuration':200,'wrapAround':true,showImageNumberLabel:false});$("#phone").mask("+7 (999) 999-9999");$("#phoneContacts").mask("+7 (999) 999-9999");const nav=$('.topMenu');var h=$('.topRectangle').innerHeight();$(window).scroll(function(){if($(this).scrollTop()>h){nav.addClass("fixed");}else{nav.removeClass("fixed");}});$('.popupRecordingOpen').click(function(){$('.popupRecording').addClass("displayNone");});$('.popapClouse').click(function(){$('.popupRecording').removeClass("displayNone");});$(document).keydown(function(e){if(e.keyCode===27){e.stopPropagation();$('.popupRecording').fadeOut();}});function offset(el){const rect=el.getBoundingClientRect();const scrollLeft=window.pageXOffset||document.documentElement.scrollLeft;const scrollTop=window.pageYOffset||document.documentElement.scrollTop;return{top:rect.top+scrollTop,left:rect.left+scrollLeft}}const animImageProblems=$('.imgProblem');if(animImageProblems.length>0){$(window).scroll(function(){for(let i=0;i<animImageProblems.length;i++){const animImageProblem=animImageProblems[i];const animImageProblemHeight=animImageProblem.offsetHeight;const animImageProblemOffset=offset(animImageProblem).top;const animStart=2;let animPoint=window.innerHeight-animImageProblemHeight/animStart;if(animImageProblemHeight>window.innerHeight){animPoint=window.innerHeight-window.innerHeight/animStart;}if((pageYOffset>(animImageProblemOffset-animPoint))&&(pageYOffset<(animImageProblemOffset+animImageProblemHeight))){animImageProblem.classList.add('animationSwingImg');}else{animImageProblem.classList.remove('animationSwingImg');}}});}const animimgWorkFormats=$('.imgWorkFormat');if(animimgWorkFormats.length>0){$(window).scroll(function(){for(let i=0;i<animimgWorkFormats.length;i++){const animimgWorkFormat=animimgWorkFormats[i];const animimgWorkFormatHeight=animimgWorkFormat.offsetHeight;const animimgWorkFormatOffset=offset(animimgWorkFormat).top;const animStart=2;let animPoint=window.innerHeight-animimgWorkFormatHeight/animStart;if(animimgWorkFormatHeight>window.innerHeight){animPoint=window.innerHeight-window.innerHeight/animStart;}if((pageYOffset>(animimgWorkFormatOffset-animPoint))&&(pageYOffset<(animimgWorkFormatOffset+animimgWorkFormatHeight))){animimgWorkFormat.classList.add('animationRotateImg');}else{animimgWorkFormat.classList.remove('animationRotateImg');}}});}$('.fa-bars').click(function(){const subMenu=$('.subMenuItems');if(subMenu.length>0){$('.allSubMenuItems').removeClass("subMenuItems");$('.subMenuItemLi').click(function(){$('.allSubMenuItems').addClass("subMenuItems");});}else{$('.allSubMenuItems').addClass("subMenuItems");}});if($(window).width()<550){$('.subMenuItemLi').click(function(){$('.photoButton').addClass("mediaPadding");});$(window).scroll(function(){if(($('.photoButton').hasClass("mediaPadding")==true)&(window.pageYOffset<$('.topRectangle').pageYOffset)){$('.photoButton').removeClass("mediaPadding");}});}function checkCookies(){let cookieDate=localStorage.getItem('cookieDate');let cookieNotification=document.getElementById('cookieNotification');let cookieBtn=cookieNotification.querySelector('.cookieAccept');if(!cookieDate||(+cookieDate+86400000)<Date.now()){cookieNotification.classList.add('show');}cookieBtn.addEventListener('click',function(){localStorage.setItem('cookieDate',Date.now());cookieNotification.classList.remove('show');})}checkCookies();});