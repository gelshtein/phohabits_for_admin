function canUseWebp(){let elem=document.createElement('canvas');if(!!(elem.getContext&&elem.getContext('2d'))){return elem.toDataURL('image/webp').indexOf('data:image/webp')==0;}
return false;}
window.onload=function(){let images=document.querySelectorAll('[data-bg]');for(let i=0;i<images.length;i++){let image=images[i].getAttribute('data-bg');images[i].style.backgroundImage='url('+image+')';}
let isitFirefox=window.navigator.userAgent.match(/Firefox\/([0-9]+)\./);let firefoxVer=isitFirefox?parseInt(isitFirefox[1]):0;if(canUseWebp()||firefoxVer>=65){let imagesWebp=document.querySelectorAll('[data-bg-webp]');for(let i=0;i<imagesWebp.length;i++){let imageWebp=imagesWebp[i].getAttribute('data-bg-webp');imagesWebp[i].style.backgroundImage='url('+imageWebp+')';}}};$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-header li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-header-1 li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-footer-menu li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(".main").click(function(){$('.hidden-menu').removeClass('left_six');$('.btn-menu span:first-child').removeClass('rotate_span_one');$('.btn-menu span:nth-child(2)').removeClass('rotate_span_two');$('.btn-menu span:last-child').removeClass('rotate_span_three');});$('.btn-menu').click(function(){$('.hidden-menu').toggleClass('left_six');$('.btn-menu span:first-child').toggleClass('rotate_span_one');$('.btn-menu span:nth-child(2)').toggleClass('rotate_span_two');$('.btn-menu span:last-child').toggleClass('rotate_span_three');});$(function(){var trigger=document.getElementById('toggle');var box=document.getElementById('menu_small');toggle.addEventListener('click',function(){box.classList.toggle('active');});});new WOW().init();$(function(){$(window).scroll(function(){var heightFirstBlock=$('#howit_first').height();var winTop=$(window).scrollTop();if(winTop-heightFirstBlock>=50){$(".left_block_how_it").addClass("sticky-left");}else{$(".left_block_how_it").removeClass("sticky-left");}});});