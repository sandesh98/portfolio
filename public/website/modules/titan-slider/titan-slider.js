!function(e){var t={};function a(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,a),o.l=!0,o.exports}a.m=e,a.c=t,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)a.d(n,o,function(t){return e[t]}.bind(null,o));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/",a(a.s=4)}({4:function(e,t,a){e.exports=a(5)},5:function(e,t){var a;(a=jQuery).fn.titanSlider=function(e){var t=this,n=t.find(".slides"),o=t.find(".slide"),i=t.width(),s=n.width(),r=parseInt(o.length),l=1,d=1,u=o.filter(":first"),c=o.filter(":last"),f={x:-1,y:0},v=a('<ul class="titanThumbContainer"></ul>'),p=null,C=!1,m=a.extend({carousel:!1,autoplay:!1,autoplaySpeed:3e3},e);if(u.before(c.clone(!0)),c.after(u.clone(!0)),t.attr("data-index",l).addClass("next"),o.eq(0).addClass("active"),m.carousel){t.after(v),t.addClass("titanCarousel");var y=1;o.each(function(){var e=o.eq(y-1).find("img").clone(),t=a('<li data-thumb="'+y+'"></li>');t.append(e),a(".titanThumbContainer").append(t),y++}),a(".titanThumbContainer li").eq(0).addClass("active"),a("body").on("click",".titanThumbContainer li",function(){a(this).addClass("active").siblings().removeClass("active");var e,s=parseInt(a(this).attr("data-thumb"));o.filter("data-slide",s).addClass("active").siblings().removeClass("active"),e=s-1,t.find(".slide.active"),TweenLite.to(n,1,{ease:Power3.easeInOut,x:-i*e}),clearInterval(p),C=!1})}else TweenLite.to(o.eq(0),1,{scale:1,opacity:1,ease:Power3.easeInOut}),TweenLite.to(o,0,{scale:.8,opacity:0,ease:Power3.easeInOut});function h(){!C&&m.autoplay&&(p=setInterval(x,m.autoplaySpeed),C=!0)}function w(){C&&m.autoplay&&(clearInterval(p),C=!1)}function x(e){d++,g(e)}function b(e){var a=t.offset();f.x=e.pageX-a.left,f.y=e.pageY-a.top,f.x>t.width()/2?t.addClass("next").removeClass("previous"):t.addClass("previous").removeClass("next")}function g(e,a,d){var u=!1,c=t.hasClass("next")?1:-1,f=null,p=null;a&&(c=1),TweenMax.isTweening(n)||(f=o.filter('[data-slide="'+l+'"]'),m.carousel||TweenLite.to(f,1,{scale:.8,opacity:0,ease:Power3.easeInOut}),l+=c,o.removeClass("active"),(u=!!(0===l||l>r))&&(l=0===l?r:1),f=o.filter('[data-slide="'+l+'"]'),p=v.find('[data-thumb="'+l+'"]'),m.carousel?p.addClass("active").siblings().removeClass("active"):TweenLite.to(f,1,{scale:1,opacity:1,ease:Power3.easeInOut}),t.attr("data-index",l),f.addClass("active"),f.find("video").trigger("pause"),o.eq(l).has("video")&&f.find("video").trigger("play"),f.hasClass("dark")?t.addClass("dark"):t.removeClass("dark"),m.carousel||b(e),TweenLite.to(n,1,{ease:Power3.easeInOut,x:"+="+-i*c,onComplete:function(){u&&(1==c?TweenLite.to(n,0,{x:0}):TweenLite.to(n,0,{x:parseInt(s-i*r)}))}}))}return m.autoplay&&(C=!0,p=setInterval(x,m.autoplaySpeed)),t.on("mouseout",function(){h()}),t.on("mouseover",function(){w()}),v.on("mouseout",function(){h()}),v.on("mouseover",function(){w()}),o.eq(0).hasClass("dark")&&t.addClass("dark"),o.each(function(){a(this).attr("data-slide",d),d++}),t.on("mousemove",function(e){b(e)}),t.swipe({swipe:function(e,n,o,i){a(e.target).parent("a").length||("left"==n&&t.addClass("next").removeClass("previous"),"right"==n&&t.addClass("previous").removeClass("next"),g(e),clearInterval(p),C=!1)},tap:function(e){a(e.target).parent("a").length||(g(e),clearInterval(p),C=!1)}}),a(document).keydown(function(e){return 37==e.keyCode||38==e.keyCode?(t.removeClass("next").addClass("previous"),g(e),!1):39==e.keyCode||40==e.keyCode?(t.addClass("next").removeClass("previous"),g(e),!1):void 0}),a(window).on("resize",function(){var e=parseInt(t.find(".active").attr("data-slide"));i=t.width(),s=n.width(),TweenLite.to(n,0,{x:-i*(e-1)})}),this}}});