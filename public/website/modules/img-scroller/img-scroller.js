/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/website/modules/img-scroller/img-scroller.js":
/*!***********************************************************************!*\
  !*** ./resources/assets/website/modules/img-scroller/img-scroller.js ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

;

(function ($) {
  'use strict'; // Using strict mode

  var controller = new ScrollMagic.Controller();
  var scroller = $('.img-scroller');
  var scrolleritem = $('.img-scroller li');
  var scrollerItems = $('.img-scroller li').length;
  var scrollIndex = 1;
  var scrollIndexCached = scrollIndex;
  var scrolled = 1;
  var controls = $('<div class="img-scroll-controls"><div class="img-up"></div><div class="img-down"></div></div>');
  var fadeInScroller = new TimelineMax().from(scroller.find('img'), 1, {
    css: {
      autoAlpha: 0
    }
  }, 1.5);
  $('#wrapper').append(controls);
  $('body').on('click', '.img-scroll-controls .img-up', function () {
    if (scrollIndex != 1) {
      scrollIndex--;
      scrolled = scrollIndex;
      scrollTrigger();
    }
  });
  $('body').on('click', '.img-scroll-controls .img-down', function () {
    if (scrollIndex < scrollerItems) {
      scrollIndex++;
      scrolled = scrollIndex;
      scrollTrigger();
    }
  }); // Call trigger function on load

  scrollTrigger(); // The trigger function

  function scrollTrigger() {
    var newItem = scroller.find('li:nth-child(' + scrollIndex + ')');
    newItem.addClass('active').siblings().removeClass('active');
    scroller.animate({
      scrollTop: newItem.offset().top - scroller.offset().top + scroller.scrollTop()
    }, 1000, 'easeInOutExpo'); // Check buttons

    if (scrollIndex != 1) $('body').find('.img-scroll-controls .img-up').removeClass('disabled');else $('body').find('.img-scroll-controls .img-up').addClass('disabled');
    if (scrollIndex < scrolleritem.length) $('body').find('.img-scroll-controls .img-down').removeClass('disabled');else $('body').find('.img-scroll-controls .img-down').addClass('disabled');
  }

  var doMouseWheel = true;

  function mouseHandler(e, d) {
    if (!doMouseWheel) return;
    setTimeout(turnWheelOff, 200);
    setTimeout(turnWheelBackOn, 1000);
    if (e.originalEvent.wheelDelta / 120 > 0 && scrolled > 1) scrolled = scrolled - 0.055;else if (scrolled <= scrollerItems) scrolled = scrolled + 0.055;
    scrollIndex = Math.round(scrolled);
    checkChange();
  }

  $('.img-scroller').bind('mousewheel', mouseHandler);

  function turnWheelBackOn() {
    doMouseWheel = true;
  }

  function turnWheelOff() {
    doMouseWheel = false;
  }

  function checkChange() {
    if (scrollIndexCached === scrollIndex) {
      return;
    }

    scrollIndexCached = scrollIndex;
    scrollTrigger();
  }

  $('body').addClass('no-scroll');
  $(document).keydown(function (e) {
    if (e.keyCode == 37 || e.keyCode == 38) {
      // If key is Up or Left arrow key
      if (scrollIndex != 1) {
        scrollIndex--;
        scrollTrigger();
        scrolled = scrollIndex;
      }

      return false;
    }

    if (e.keyCode == 39 || e.keyCode == 40) {
      // If key is Down or Right arrow key
      if (scrollIndex < scrollerItems) {
        scrollIndex++;
        scrollTrigger();
        scrolled = scrollIndex;
      }

      return false;
    }
  });
})(jQuery);

/***/ }),

/***/ 2:
/*!*****************************************************************************!*\
  !*** multi ./resources/assets/website/modules/img-scroller/img-scroller.js ***!
  \*****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/sandesh/Sites/portfolio/resources/assets/website/modules/img-scroller/img-scroller.js */"./resources/assets/website/modules/img-scroller/img-scroller.js");


/***/ })

/******/ });