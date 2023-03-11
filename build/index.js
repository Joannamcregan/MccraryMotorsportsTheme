/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/MobileMenu.js":
/*!***********************************!*\
  !*** ./src/modules/MobileMenu.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
class MobileMenu {
  // 1. describe and create/initiate object
  constructor() {
    this.toggleButton = document.querySelector('.site-header__menu-trigger');
    this.menuOverlay = document.querySelector('.menu-overlay');
    this.events();
    this.isOverlayOpen = false;
    console.log(this.toggleButton.classList);
  }
  // 2. events
  events() {
    this.toggleButton.addEventListener('click', () => this.toggleOverlay());
    console.log("events working");
  }

  // 3. methods (functions, actions...)
  toggleOverlay() {
    if (this.isOverlayOpen) {
      this.menuOverlay.classList.remove("site-header__menu--active");
      document.querySelector('body').classList.remove("body-no-scroll");
      this.toggleButton.classList.remove('rotated-menu-icon');
      this.isOverlayOpen = false;
      console.log("closing");
    } else {
      this.menuOverlay.classList.add("site-header__menu--active");
      document.querySelector('body').classList.add("body-no-scroll");
      this.toggleButton.classList.add('rotated-menu-icon');
      this.isOverlayOpen = true;
      console.log("opening");
    }
  }
}
/* harmony default export */ __webpack_exports__["default"] = (MobileMenu);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/MobileMenu */ "./src/modules/MobileMenu.js");

const mobileMenu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__["default"]();
}();
/******/ })()
;
//# sourceMappingURL=index.js.map