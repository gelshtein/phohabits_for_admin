function canUseWebp(){let elem=document.createElement('canvas');if(!!(elem.getContext&&elem.getContext('2d'))){return elem.toDataURL('image/webp').indexOf('data:image/webp')==0;}
return false;}
window.onload=function(){let images=document.querySelectorAll('[data-bg]');for(let i=0;i<images.length;i++){let image=images[i].getAttribute('data-bg');images[i].style.backgroundImage='url('+image+')';}
let isitFirefox=window.navigator.userAgent.match(/Firefox\/([0-9]+)\./);let firefoxVer=isitFirefox?parseInt(isitFirefox[1]):0;if(canUseWebp()||firefoxVer>=65){let imagesWebp=document.querySelectorAll('[data-bg-webp]');for(let i=0;i<imagesWebp.length;i++){let imageWebp=imagesWebp[i].getAttribute('data-bg-webp');imagesWebp[i].style.backgroundImage='url('+imageWebp+')';}}};$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-header li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-header-1 li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(function(){var pathname_url=window.location.pathname;var href_url=window.location.href;$("#menu-footer-menu li").each(function(){var link=$(this).find("a").attr("href");if(pathname_url==link||href_url==link){$(this).addClass("active");}});});$(document).on('click',function(e){var this_class=$(this).attr('class');console.log(this_class);if($('.btn-menu').hasClass('act')){console.log('its act!');}
else{if(!$(e.target).closest(".hidden-menu").length){console.log('успех');}
e.stopPropagation();}});$(function(){var trigger=document.getElementById('toggle');var box=document.getElementById('menu_small');toggle.addEventListener('click',function(){box.classList.toggle('active');});});new WOW().init();