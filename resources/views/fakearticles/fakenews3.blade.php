<html lang="en" class="b-pw-1280 b-reith-sans-font b-reith-serif-font b-reith-serif-loaded b-reith-sans-loaded" data-rh="lang,class"><head>
      <meta data-rh="true" http-equiv="X-UA-Compatible" content="IE=edge"><meta data-rh="true" charset="utf-8"><meta data-rh="true" name="viewport" content="width=device-width, initial-scale=1"><meta data-rh="true" name="google-site-verification" content="I0_h0oRDIOewanIX2SQEN0-dHGdH6uBQT7V9l_WqRY8">
      <title>You think this is a sonic boom – but it’s not - BBC Future</title>
      
      <script type="text/javascript" async="" src="//static.chartbeat.com/js/chartbeat.js"></script><script>
        window.orb_fig_blocking = true;
      </script>
      <script type="text/javascript">
        /* IE11 polyfills */
        if (!('values' in Object)) {
          Object.prototype.constructor.values = function(o) {
            if (typeof o !== 'object') return console.error('not an object')
            return Object.keys(o).map(function(k) { return o[k] })
          }
        }
        if (!('find' in Array.prototype)) {
          Array.prototype.find = function(fn) {
            for (let i = 0; i < this.length; i += 1) {
              if (fn.call(this, this[i], i)) return this[i];
            }
            return undefined;
          }
        }
        if (!('includes' in Array.prototype)) {
          Array.prototype.includes = function(search) {
            return this.indexOf(search) > -1
          }
        }
      </script>
      <script>document.documentElement.className = document.documentElement.className.replace('no-js', '');</script>
      <!-- Orbit: 3.0.0-1719.65af99a0 -->
<!-- Environment: live -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root {
    --bbc-font: ReithSans, Arial, Helvetica, freesans, sans-serif;
    --bbc-font-legacy: Arial, Helvetica, freesans, sans-serif;
}
</style>
    <link rel="stylesheet" href="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/css/orb-ltr.min.css">
    <script src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/require.min.js"></script>
    <script>
        // nav-orbit-pollyfills
        // Promise polyfill from https://github.com/bramstein/promis
        (function(){'use strict';var f,g=[];function l(a){g.push(a);1==g.length&&f()}function m(){for(;g.length;)g[0](),g.shift()}f=function(){setTimeout(m)};function n(a){this.a=p;this.b=void 0;this.f=[];var b=this;try{a(function(a){q(b,a)},function(a){r(b,a)})}catch(c){r(b,c)}}var p=2;function t(a){return new n(function(b,c){c(a)})}function u(a){return new n(function(b){b(a)})}function q(a,b){if(a.a==p){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&"object"==typeof b&&"function"==typeof d){d.call(b,function(b){c||q(a,b);c=!0},function(b){c||r(a,b);c=!0});return}}catch(e){c||r(a,e);return}a.a=0;a.b=b;v(a)}} function r(a,b){if(a.a==p){if(b==a)throw new TypeError;a.a=1;a.b=b;v(a)}}function v(a){l(function(){if(a.a!=p)for(;a.f.length;){var b=a.f.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0==a.a?"function"==typeof c?e(c.call(void 0,a.b)):e(a.b):1==a.a&&("function"==typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(h){b(h)}}})}n.prototype.g=function(a){return this.c(void 0,a)};n.prototype.c=function(a,b){var c=this;return new n(function(d,e){c.f.push([a,b,d,e]);v(c)})}; function w(a){return new n(function(b,c){function d(c){return function(d){h[c]=d;e+=1;e==a.length&&b(h)}}var e=0,h=[];0==a.length&&b(h);for(var k=0;k<a.length;k+=1)u(a[k]).c(d(k),c)})}function x(a){return new n(function(b,c){for(var d=0;d<a.length;d+=1)u(a[d]).c(b,c)})};window.Promise||(window.Promise=n,window.Promise.resolve=u,window.Promise.reject=t,window.Promise.race=x,window.Promise.all=w,window.Promise.prototype.then=n.prototype.c,window.Promise.prototype["catch"]=n.prototype.g);}());
    
    
        // Polyfill Event constructor for IE ref: ORBITEN-919
        // see: https://stackoverflow.com/questions/26596123
        (function () {
          if (typeof window.CustomEvent === "function") {
            return false;
          }
          function CustomEvent(event, params) {
            params = params || { bubbles: false, cancelable: false, detail: undefined };
            var evt = document.createEvent('CustomEvent');
            evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
            return evt;
          }
          CustomEvent.prototype = window.Event.prototype;
          window.Event = CustomEvent;
        })();
    
    
        //Element.prototype.matches polyfill
        //from https://developer.mozilla.org/en-US/docs/Web/API/Element/matches#Polyfill
        if (!Element.prototype.matches) {
          Element.prototype.matches = Element.prototype.msMatchesSelector ||
                                      Element.prototype.webkitMatchesSelector;
        }
        //NodeList.forEach Polyfill
        //from https://developer.mozilla.org/en-US/docs/Web/API/NodeList/forEach#Polyfill
        if (window.NodeList && !NodeList.prototype.forEach) {
          NodeList.prototype.forEach = Array.prototype.forEach;
        }
    
        // Object.assign polyfill from https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign#Polyfill
        if (typeof Object.assign != 'function') {
          // Must be writable: true, enumerable: false, configurable: true
          Object.defineProperty(Object, "assign", {
            value: function assign(target, varArgs) { // .length of function is 2
              'use strict';
              if (target == null) { // TypeError if undefined or null
                throw new TypeError('Cannot convert undefined or null to object');
              }
    
              var to = Object(target);
    
              for (var index = 1; index < arguments.length; index++) {
                var nextSource = arguments[index];
    
                if (nextSource != null) { // Skip over if undefined or null
                  for (var nextKey in nextSource) {
                    // Avoid bugs when hasOwnProperty is shadowed
                    if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
                      to[nextKey] = nextSource[nextKey];
                    }
                  }
                }
              }
              return to;
            },
            writable: true,
            configurable: true
          });
        }
    
        // window.fetch polyfill https://github.com/github/fetch/blob/v0.11.0/fetch.js - chosen for IE9 compatibility
        if(typeof window.fetch !== 'function') {
          (function(self){"use strict";if(self.fetch){return}function normalizeName(name){if(typeof name!=="string"){name=String(name)}if(/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(name)){throw new TypeError("Invalid character in header field name")}return name.toLowerCase()}function normalizeValue(value){if(typeof value!=="string"){value=String(value)}return value}function Headers(headers){this.map={};if(headers instanceof Headers){headers.forEach(function(value,name){this.append(name,value)},this)}else if(headers){Object.getOwnPropertyNames(headers).forEach(function(name){this.append(name,headers[name])},this)}}Headers.prototype.append=function(name,value){name=normalizeName(name);value=normalizeValue(value);var list=this.map[name];if(!list){list=[];this.map[name]=list}list.push(value)};Headers.prototype["delete"]=function(name){delete this.map[normalizeName(name)]};Headers.prototype.get=function(name){var values=this.map[normalizeName(name)];return values?values[0]:null};Headers.prototype.getAll=function(name){return this.map[normalizeName(name)]||[]};Headers.prototype.has=function(name){return this.map.hasOwnProperty(normalizeName(name))};Headers.prototype.set=function(name,value){this.map[normalizeName(name)]=[normalizeValue(value)]};Headers.prototype.forEach=function(callback,thisArg){Object.getOwnPropertyNames(this.map).forEach(function(name){this.map[name].forEach(function(value){callback.call(thisArg,value,name,this)},this)},this)};function consumed(body){if(body.bodyUsed){return Promise.reject(new TypeError("Already read"))}body.bodyUsed=true}function fileReaderReady(reader){return new Promise(function(resolve,reject){reader.onload=function(){resolve(reader.result)};reader.onerror=function(){reject(reader.error)}})}function readBlobAsArrayBuffer(blob){var reader=new FileReader;reader.readAsArrayBuffer(blob);return fileReaderReady(reader)}function readBlobAsText(blob){var reader=new FileReader;reader.readAsText(blob);return fileReaderReady(reader)}var support={blob:"FileReader"in self&&"Blob"in self&&function(){try{new Blob;return true}catch(e){return false}}(),formData:"FormData"in self,arrayBuffer:"ArrayBuffer"in self};function Body(){this.bodyUsed=false;this._initBody=function(body){this._bodyInit=body;if(typeof body==="string"){this._bodyText=body}else if(support.blob&&Blob.prototype.isPrototypeOf(body)){this._bodyBlob=body}else if(support.formData&&FormData.prototype.isPrototypeOf(body)){this._bodyFormData=body}else if(!body){this._bodyText=""}else if(support.arrayBuffer&&ArrayBuffer.prototype.isPrototypeOf(body)){}else{throw new Error("unsupported BodyInit type")}if(!this.headers.get("content-type")){if(typeof body==="string"){this.headers.set("content-type","text/plain;charset=UTF-8")}else if(this._bodyBlob&&this._bodyBlob.type){this.headers.set("content-type",this._bodyBlob.type)}}};if(support.blob){this.blob=function(){var rejected=consumed(this);if(rejected){return rejected}if(this._bodyBlob){return Promise.resolve(this._bodyBlob)}else if(this._bodyFormData){throw new Error("could not read FormData body as blob")}else{return Promise.resolve(new Blob([this._bodyText]))}};this.arrayBuffer=function(){return this.blob().then(readBlobAsArrayBuffer)};this.text=function(){var rejected=consumed(this);if(rejected){return rejected}if(this._bodyBlob){return readBlobAsText(this._bodyBlob)}else if(this._bodyFormData){throw new Error("could not read FormData body as text")}else{return Promise.resolve(this._bodyText)}}}else{this.text=function(){var rejected=consumed(this);return rejected?rejected:Promise.resolve(this._bodyText)}}if(support.formData){this.formData=function(){return this.text().then(decode)}}this.json=function(){return this.text().then(JSON.parse)};return this}var methods=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];function normalizeMethod(method){var upcased=method.toUpperCase();return methods.indexOf(upcased)>-1?upcased:method}function Request(input,options){options=options||{};var body=options.body;if(Request.prototype.isPrototypeOf(input)){if(input.bodyUsed){throw new TypeError("Already read")}this.url=input.url;this.credentials=input.credentials;if(!options.headers){this.headers=new Headers(input.headers)}this.method=input.method;this.mode=input.mode;if(!body){body=input._bodyInit;input.bodyUsed=true}}else{this.url=input}this.credentials=options.credentials||this.credentials||"omit";if(options.headers||!this.headers){this.headers=new Headers(options.headers)}this.method=normalizeMethod(options.method||this.method||"GET");this.mode=options.mode||this.mode||null;this.referrer=null;if((this.method==="GET"||this.method==="HEAD")&&body){throw new TypeError("Body not allowed for GET or HEAD requests")}this._initBody(body)}Request.prototype.clone=function(){return new Request(this)};function decode(body){var form=new FormData;body.trim().split("&").forEach(function(bytes){if(bytes){var split=bytes.split("=");var name=split.shift().replace(/\+/g," ");var value=split.join("=").replace(/\+/g," ");form.append(decodeURIComponent(name),decodeURIComponent(value))}});return form}function headers(xhr){var head=new Headers;var pairs=xhr.getAllResponseHeaders().trim().split("\n");pairs.forEach(function(header){var split=header.trim().split(":");var key=split.shift().trim();var value=split.join(":").trim();head.append(key,value)});return head}Body.call(Request.prototype);function Response(bodyInit,options){if(!options){options={}}this.type="default";this.status=options.status;this.ok=this.status>=200&&this.status<300;this.statusText=options.statusText;this.headers=options.headers instanceof Headers?options.headers:new Headers(options.headers);this.url=options.url||"";this._initBody(bodyInit)}Body.call(Response.prototype);Response.prototype.clone=function(){return new Response(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new Headers(this.headers),url:this.url})};Response.error=function(){var response=new Response(null,{status:0,statusText:""});response.type="error";return response};var redirectStatuses=[301,302,303,307,308];Response.redirect=function(url,status){if(redirectStatuses.indexOf(status)===-1){throw new RangeError("Invalid status code")}return new Response(null,{status:status,headers:{location:url}})};self.Headers=Headers;self.Request=Request;self.Response=Response;self.fetch=function(input,init){return new Promise(function(resolve,reject){var request;if(Request.prototype.isPrototypeOf(input)&&!init){request=input}else{request=new Request(input,init)}var xhr=new XMLHttpRequest;function responseURL(){if("responseURL"in xhr){return xhr.responseURL}if(/^X-Request-URL:/m.test(xhr.getAllResponseHeaders())){return xhr.getResponseHeader("X-Request-URL")}return}xhr.onload=function(){var status=xhr.status===1223?204:xhr.status;if(status<100||status>599){reject(new TypeError("Network request failed"));return}var options={status:status,statusText:xhr.statusText,headers:headers(xhr),url:responseURL()};var body="response"in xhr?xhr.response:xhr.responseText;resolve(new Response(body,options))};xhr.onerror=function(){reject(new TypeError("Network request failed"))};xhr.open(request.method,request.url,true);if(request.credentials==="include"){xhr.withCredentials=true}if("responseType"in xhr&&support.blob){xhr.responseType="blob"}request.headers.forEach(function(value,name){xhr.setRequestHeader(name,value)});xhr.send(typeof request._bodyInit==="undefined"?null:request._bodyInit)})};self.fetch.polyfill=true})(typeof self!=="undefined"?self:this);
        }
    
        if (typeof window.CustomEvent !== 'function') {
    
          function CustomEvent(event, params) {
            params = params || { bubbles: false, cancelable: false, detail: null };
            var evt = document.createEvent('CustomEvent');
            evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
            return evt;
          }
    
          CustomEvent.prototype = window.Event.prototype;
    
          window.CustomEvent = CustomEvent;
    
        }
    </script>

<script>
    window.orbitData = {};

    var additionalPageProperties = {};
        additionalPageProperties['custom_var_5'] = '4288' || null;
        additionalPageProperties['custom_var_1'] = '17-02-2016 03:38' || null;
        additionalPageProperties['custom_var_3'] = 'aircraft' || null;
        additionalPageProperties['custom_var_9'] = '1' || null;
        additionalPageProperties['custom_var_10'] = '' || null;
        additionalPageProperties['custom_var_6'] = '' || null;

    window.orbitData.userProfileUrl = "https://www.bbc.co.uk/userprofile";

    window.page = {
        name: 'future.article.20160216-you-think-this-is-a-sonic-boom-its-not.page' || null,
        destination: 'FEATURE_SITES_GNL' || null,
        producer: 'GNL_FUTURE' || null,
        section: '' || null,
        site: '' || null,
        contentId: '' || null,
        contentType: 'article' || null,
        edition: '' || null,
        additionalProperties: additionalPageProperties
    };
    window.page.language = 'en';
    window.page.language = 'en';

    window.page.modal = false;


    !function(){var t={3053:function(t,r,e){function n(t,r){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);r&&(n=n.filter((function(r){return Object.getOwnPropertyDescriptor(t,r).enumerable}))),e.push.apply(e,n)}return e}function o(t){for(var r=1;r<arguments.length;r++){var e=null!=arguments[r]?arguments[r]:{};r%2?n(Object(e),!0).forEach((function(r){i(t,r,e[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(e)):n(Object(e)).forEach((function(r){Object.defineProperty(t,r,Object.getOwnPropertyDescriptor(e,r))}))}return t}function i(t,r,e){return r in t?Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[r]=e,t}var u=e(1391),c=e(9135);window.bbcpage=u.init(o({},window.page)),window.page=void 0,window.bbcuser=c.init(window,o({},window.user))},1391:function(t){function r(t,r){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);r&&(n=n.filter((function(r){return Object.getOwnPropertyDescriptor(t,r).enumerable}))),e.push.apply(e,n)}return e}function e(t){for(var e=1;e<arguments.length;e++){var o=null!=arguments[e]?arguments[e]:{};e%2?r(Object(o),!0).forEach((function(r){n(t,r,o[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(o)):r(Object(o)).forEach((function(r){Object.defineProperty(t,r,Object.getOwnPropertyDescriptor(o,r))}))}return t}function n(t,r,e){return r in t?Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[r]=e,t}t.exports={init:function(t){var r=e({},t);return document.addEventListener("bbc-page-reset",(function(t){var e;t.detail&&t.detail.page&&(e=t.detail.page,r=Object.assign(r,e)),document.dispatchEvent(new Event("bbc-page-updated"))})),{getName:function(){return Promise.resolve(r.name||function(){if("file:"===window.location.protocol)return"local.file";var t=window.location.pathname.replace(/\/$/,"").replace(/^\//,"").replace(/\//g,".");return"".concat(t,".page")}())},getLanguage:function(){return Promise.resolve(r.language)},getDestination:function(){return Promise.resolve(r.destination)},getProducer:function(){return Promise.resolve(r.producer)},getSection:function(){return Promise.resolve(r.section)},getContentType:function(){return Promise.resolve(r.contentType)},getContentId:function(){return Promise.resolve(r.contentId)},getReferrer:function(){return Promise.resolve(window.orb&&null!==window.orb.referrer&&void 0!==window.orb.referrer?window.orb.referrer:document.referrer)},getAdditionalProperties:function(){return Promise.resolve(e({},r.additionalProperties))},loadCSS:function(t){return new Promise((function(r,e){var n=document.createElement("link");n.type="text/css",n.rel="stylesheet",n.onload=function(){r()},n.href=t,document.getElementsByTagName("head")[0].appendChild(n)}))},isModal:function(){return Promise.resolve(r.modal)}}}}},9135:function(t){function r(t){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function e(t,r){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);r&&(n=n.filter((function(r){return Object.getOwnPropertyDescriptor(t,r).enumerable}))),e.push.apply(e,n)}return e}function n(t){for(var r=1;r<arguments.length;r++){var n=null!=arguments[r]?arguments[r]:{};r%2?e(Object(n),!0).forEach((function(r){o(t,r,n[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):e(Object(n)).forEach((function(r){Object.defineProperty(t,r,Object.getOwnPropertyDescriptor(n,r))}))}return t}function o(t,r,e){return r in t?Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[r]=e,t}function i(t,r){if(!(t instanceof r))throw new TypeError("Cannot call a class as a function")}function u(t,e){return!e||"object"!==r(e)&&"function"!=typeof e?function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t):e}function c(t){var r="function"==typeof Map?new Map:void 0;return(c=function(t){if(null===t||(e=t,-1===Function.toString.call(e).indexOf("[native code]")))return t;var e;if("function"!=typeof t)throw new TypeError("Super expression must either be null or a function");if(void 0!==r){if(r.has(t))return r.get(t);r.set(t,n)}function n(){return a(t,arguments,l(this).constructor)}return n.prototype=Object.create(t.prototype,{constructor:{value:n,enumerable:!1,writable:!0,configurable:!0}}),f(n,t)})(t)}function a(t,r,e){return(a=s()?Reflect.construct:function(t,r,e){var n=[null];n.push.apply(n,r);var o=new(Function.bind.apply(t,n));return e&&f(o,e.prototype),o}).apply(null,arguments)}function s(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}function f(t,r){return(f=Object.setPrototypeOf||function(t,r){return t.__proto__=r,t})(t,r)}function l(t){return(l=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}var p=function(t){!function(t,r){if("function"!=typeof r&&null!==r)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(r&&r.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),r&&f(t,r)}(o,t);var r,e,n=(r=o,e=s(),function(){var t,n=l(r);if(e){var o=l(this).constructor;t=Reflect.construct(n,arguments,o)}else t=n.apply(this,arguments);return u(this,t)});function o(){return i(this,o),n.apply(this,arguments)}return o}(c(Error));function h(t){return new Promise((function(r,e){window.require(t,(function(){r.apply(this,arguments)}),(function(t){e(t)}))}))}t.exports={init:function(t,r){var e,o=n({},r),i=null;function u(){if(["X-Country","X-Ip_is_advertise_combined","X-Ip_is_uk_combined"].every((function(t){return!!o[t]})))return Promise.resolve(o);if(!i){var r=t.location.hostname.endsWith(".com")?"com":"co.uk";i=t.fetch("https://www.bbc.".concat(r,"/userinfo")).then((function(t){return t.json()}))}return i}function c(t){if(t.status>=200&&t.status<300)return t;var r=new Error(t.statusText);throw r.response=t,r}function a(t){return t.json()}function s(){if(o.ageBand)return Promise.resolve(o);if(!e){if("undefined"==typeof XMLHttpRequest||!("withCredentials"in new XMLHttpRequest))return Promise.resolve(o);e=h(["idcta-v2/idcta-1"]).then((function(r){return r.initiateTokenRefresh().then((function(){return t.fetch(t.orbitData.userProfileUrl,{credentials:"include"}).then(c).then(a).then((function(t){return o=n(n({},o),t)}))}))}))}return e}var f={getHashedId:function(){return h(["idcta-v2/idcta-1"]).then((function(t){return t.getCookieInstance().getHidFromCookie()}))},isSignedIn:function(){return h(["idcta-v2/idcta-1"]).then((function(t){return t&&t.getCookieInstance().hasCookie()}))},getCountry:function(){return u().then((function(t){return t["X-Country"]||"gb"}))},isUKCombined:function(){return u().then((function(t){if(!t["X-Ip_is_uk_combined"])throw new p("missing isUKCombined from userinfo response");return"yes"===t["X-Ip_is_uk_combined"].toLowerCase()}))},canSeeAdverts:function(){return u().then((function(t){if(!t["X-Ip_is_advertise_combined"])throw new p("missing canSeeAdverts from userinfo response");return"yes"===t["X-Ip_is_advertise_combined"].toLowerCase()}))},getAgeBand:function(){return u().then((function(t){return t["X-Age-Band"]?Promise.resolve(t["X-Age-Band"]):f.isSignedIn().then((function(t){if(t)return s().then((function(t){return o["X-Age-Band"]=t["X-Age-Band"],o["X-Age-Band"]||void 0})).catch((function(){return o["X-Age-Band"]||void 0}))}))}))},allowsPerformanceCookies:function(){return h(["orb/cookies"]).then((function(t){return!!t.cookiesEnabled()&&!!t.readPolicy("performance")}))},allowsFunctionalCookies:function(){return h(["orb/cookies"]).then((function(t){return!!t.cookiesEnabled()&&!!t.readPolicy("personalisation")}))},getCookieValue:function(t){return h(["orb/cookies"]).then((function(r){return r.get(t)}))}};return f},BBCUserError:p}},7633:function(t,r,e){e(9170),e(6992),e(1539),e(8674),e(7922),e(4668),e(7727),e(8783);var n=e(857);t.exports=n.Promise},1111:function(t,r,e){e(1539),e(4916),e(4953),e(8992),e(9841),e(4506),e(7852),e(2023),e(4723),e(6373),e(6528),e(3112),e(2481),e(5306),e(8757),e(4765),e(3123),e(3157),e(3650),e(3210),e(5674),e(8702),e(8783),e(5218),e(4475),e(7929),e(915),e(9253),e(2125),e(8830),e(8734),e(9254),e(7268),e(7397),e(86),e(623);var n=e(857);t.exports=n.String},9662:function(t,r,e){var n=e(7854),o=e(614),i=e(6330),u=n.TypeError;t.exports=function(t){if(o(t))return t;throw u(i(t)+" is not a function")}},9483:function(t,r,e){var n=e(7854),o=e(4411),i=e(6330),u=n.TypeError;t.exports=function(t){if(o(t))return t;throw u(i(t)+" is not a constructor")}},6077:function(t,r,e){var n=e(7854),o=e(614),i=n.String,u=n.TypeError;t.exports=function(t){if("object"==typeof t||o(t))return t;throw u("Can't set "+i(t)+" as a prototype")}},1223:function(t,r,e){var n=e(5112),o=e(30),i=e(3070),u=n("unscopables"),c=Array.prototype;null==c[u]&&i.f(c,u,{configurable:!0,value:o(null)}),t.exports=function(t){c[u][t]=!0}},1530:function(t,r,e){"use strict";var n=e(8710).charAt;t.exports=function(t,r,e){return r+(e?n(t,r).length:1)}},5787:function(t,r,e){var n=e(7854),o=e(7976),i=n.TypeError;t.exports=function(t,r){if(o(r,t))return t;throw i("Incorrect invocation")}},9670:function(t,r,e){var n=e(7854),o=e(111),i=n.String,u=n.TypeError;t.exports=function(t){if(o(t))return t;throw u(i(t)+" is not an object")}},1318:function(t,r,e){var n=e(5656),o=e(1400),i=e(6244),u=function(t){return function(r,e,u){var c,a=n(r),s=i(a),f=o(u,s);if(t&&e!=e){for(;s>f;)if((c=a[f++])!=c)return!0}else for(;s>f;f++)if((t||f in a)&&a[f]===e)return t||f||0;return!t&&-1}};t.exports={includes:u(!0),indexOf:u(!1)}},206:function(t,r,e){var n=e(1702);t.exports=n([].slice)},7072:function(t,r,e){var n=e(5112)("iterator"),o=!1;try{var i=0,u={next:function(){return{done:!!i++}},return:function(){o=!0}};u[n]=function(){return this},Array.from(u,(function(){throw 2}))}catch(t){}t.exports=function(t,r){if(!r&&!o)return!1;var e=!1;try{var i={};i[n]=function(){return{next:function(){return{done:e=!0}}}},t(i)}catch(t){}return e}},4326:function(t,r,e){var n=e(1702),o=n({}.toString),i=n("".slice);t.exports=function(t){return i(o(t),8,-1)}},648:function(t,r,e){var n=e(7854),o=e(1694),i=e(614),u=e(4326),c=e(5112)("toStringTag"),a=n.Object,s="Arguments"==u(function(){return arguments}());t.exports=o?u:function(t){var r,e,n;return void 0===t?"Undefined":null===t?"Null":"string"==typeof(e=function(t,r){try{return t[r]}catch(t){}}(r=a(t),c))?e:s?u(r):"Object"==(n=u(r))&&i(r.callee)?"Arguments":n}},7741:function(t,r,e){var n=e(1702),o=e(206),i=n("".replace),u=n("".split),c=n([].join),a=String(Error("zxcasd").stack),s=/\n\s*at [^:]*:[^\n]*/,f=s.test(a),l=/@[^\n]*\n/.test(a)&&!/zxcasd/.test(a);t.exports=function(t,r){if("string"!=typeof t)return t;if(f)for(;r--;)t=i(t,s,"");else if(l)return c(o(u(t,"\n"),r),"\n");return t}},9920:function(t,r,e){var n=e(2597),o=e(3887),i=e(1236),u=e(3070);t.exports=function(t,r){for(var e=o(r),c=u.f,a=i.f,s=0;s<e.length;s++){var f=e[s];n(t,f)||c(t,f,a(r,f))}}},4964:function(t,r,e){var n=e(5112)("match");t.exports=function(t){var r=/./;try{"/./"[t](r)}catch(e){try{return r[n]=!1,"/./"[t](r)}catch(t){}}return!1}},8544:function(t,r,e){var n=e(7293);t.exports=!n((function(){function t(){}return t.prototype.constructor=null,Object.getPrototypeOf(new t)!==t.prototype}))},4230:function(t,r,e){var n=e(1702),o=e(4488),i=e(1340),u=/"/g,c=n("".replace);t.exports=function(t,r,e,n){var a=i(o(t)),s="<"+r;return""!==e&&(s+=" "+e+'="'+c(i(n),u,"&quot;")+'"'),s+">"+a+"</"+r+">"}},4994:function(t,r,e){"use strict";var n=e(3383).IteratorPrototype,o=e(30),i=e(9114),u=e(8003),c=e(7497),a=function(){return this};t.exports=function(t,r,e){var s=r+" Iterator";return t.prototype=o(n,{next:i(1,e)}),u(t,s,!1,!0),c[s]=a,t}},8880:function(t,r,e){var n=e(9781),o=e(3070),i=e(9114);t.exports=n?function(t,r,e){return o.f(t,r,i(1,e))}:function(t,r,e){return t[r]=e,t}},9114:function(t){t.exports=function(t,r){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:r}}},654:function(t,r,e){"use strict";var n=e(2109),o=e(6916),i=e(1913),u=e(6530),c=e(614),a=e(4994),s=e(9518),f=e(7674),l=e(8003),p=e(8880),h=e(1320),d=e(5112),v=e(7497),y=e(3383),g=u.PROPER,b=u.CONFIGURABLE,m=y.IteratorPrototype,x=y.BUGGY_SAFARI_ITERATORS,w=d("iterator"),O="keys",E="values",S="entries",j=function(){return this};t.exports=function(t,r,e,u,d,y,P){a(e,r,u);var T,_,A,I=function(t){if(t===d&&B)return B;if(!x&&t in k)return k[t];switch(t){case O:case E:case S:return function(){return new e(this,t)}}return function(){return new e(this)}},R=r+" Iterator",L=!1,k=t.prototype,C=k[w]||k["@@iterator"]||d&&k[d],B=!x&&C||I(d),D="Array"==r&&k.entries||C;if(D&&(T=s(D.call(new t)))!==Object.prototype&&T.next&&(i||s(T)===m||(f?f(T,m):c(T[w])||h(T,w,j)),l(T,R,!0,!0),i&&(v[R]=j)),g&&d==E&&C&&C.name!==E&&(!i&&b?p(k,"name",E):(L=!0,B=function(){return o(C,this)})),d)if(_={values:I(E),keys:y?B:I(O),entries:I(S)},P)for(A in _)(x||L||!(A in k))&&h(k,A,_[A]);else n({target:r,proto:!0,forced:x||L},_);return i&&!P||k[w]===B||h(k,w,B,{name:d}),v[r]=B,_}},9781:function(t,r,e){var n=e(7293);t.exports=!n((function(){return 7!=Object.defineProperty({},1,{get:function(){return 7}})[1]}))},317:function(t,r,e){var n=e(7854),o=e(111),i=n.document,u=o(i)&&o(i.createElement);t.exports=function(t){return u?i.createElement(t):{}}},8324:function(t){t.exports={CSSRuleList:0,CSSStyleDeclaration:0,CSSValueList:0,ClientRectList:0,DOMRectList:0,DOMStringList:0,DOMTokenList:1,DataTransferItemList:0,FileList:0,HTMLAllCollection:0,HTMLCollection:0,HTMLFormElement:0,HTMLSelectElement:0,MediaList:0,MimeTypeArray:0,NamedNodeMap:0,NodeList:1,PaintRequestList:0,Plugin:0,PluginArray:0,SVGLengthList:0,SVGNumberList:0,SVGPathSegList:0,SVGPointList:0,SVGStringList:0,SVGTransformList:0,SourceBufferList:0,StyleSheetList:0,TextTrackCueList:0,TextTrackList:0,TouchList:0}},8509:function(t,r,e){var n=e(317)("span").classList,o=n&&n.constructor&&n.constructor.prototype;t.exports=o===Object.prototype?void 0:o},7871:function(t){t.exports="object"==typeof window},1528:function(t,r,e){var n=e(8113),o=e(7854);t.exports=/ipad|iphone|ipod/i.test(n)&&void 0!==o.Pebble},6833:function(t,r,e){var n=e(8113);t.exports=/(?:ipad|iphone|ipod).*applewebkit/i.test(n)},5268:function(t,r,e){var n=e(4326),o=e(7854);t.exports="process"==n(o.process)},1036:function(t,r,e){var n=e(8113);t.exports=/web0s(?!.*chrome)/i.test(n)},8113:function(t,r,e){var n=e(5005);t.exports=n("navigator","userAgent")||""},7392:function(t,r,e){var n,o,i=e(7854),u=e(8113),c=i.process,a=i.Deno,s=c&&c.versions||a&&a.version,f=s&&s.v8;f&&(o=(n=f.split("."))[0]>0&&n[0]<4?1:+(n[0]+n[1])),!o&&u&&(!(n=u.match(/Edge\/(\d+)/))||n[1]>=74)&&(n=u.match(/Chrome\/(\d+)/))&&(o=+n[1]),t.exports=o},748:function(t){t.exports=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"]},2914:function(t,r,e){var n=e(7293),o=e(9114);t.exports=!n((function(){var t=Error("a");return!("stack"in t)||(Object.defineProperty(t,"stack",o(1,7)),7!==t.stack)}))},2109:function(t,r,e){var n=e(7854),o=e(1236).f,i=e(8880),u=e(1320),c=e(3505),a=e(9920),s=e(4705);t.exports=function(t,r){var e,f,l,p,h,d=t.target,v=t.global,y=t.stat;if(e=v?n:y?n[d]||c(d,{}):(n[d]||{}).prototype)for(f in r){if(p=r[f],l=t.noTargetGet?(h=o(e,f))&&h.value:e[f],!s(v?f:d+(y?".":"#")+f,t.forced)&&void 0!==l){if(typeof p==typeof l)continue;a(p,l)}(t.sham||l&&l.sham)&&i(p,"sham",!0),u(e,f,p,t)}}},7293:function(t){t.exports=function(t){try{return!!t()}catch(t){return!0}}},7007:function(t,r,e){"use strict";e(4916);var n=e(1702),o=e(1320),i=e(2261),u=e(7293),c=e(5112),a=e(8880),s=c("species"),f=RegExp.prototype;t.exports=function(t,r,e,l){var p=c(t),h=!u((function(){var r={};return r[p]=function(){return 7},7!=""[t](r)})),d=h&&!u((function(){var r=!1,e=/a/;return"split"===t&&((e={}).constructor={},e.constructor[s]=function(){return e},e.flags="",e[p]=/./[p]),e.exec=function(){return r=!0,null},e[p](""),!r}));if(!h||!d||e){var v=n(/./[p]),y=r(p,""[t],(function(t,r,e,o,u){var c=n(t),a=r.exec;return a===i||a===f.exec?h&&!u?{done:!0,value:v(r,e,o)}:{done:!0,value:c(e,r,o)}:{done:!1}}));o(String.prototype,t,y[0]),o(f,p,y[1])}l&&a(f[p],"sham",!0)}},2104:function(t){var r=Function.prototype,e=r.apply,n=r.bind,o=r.call;t.exports="object"==typeof Reflect&&Reflect.apply||(n?o.bind(e):function(){return o.apply(e,arguments)})},9974:function(t,r,e){var n=e(1702),o=e(9662),i=n(n.bind);t.exports=function(t,r){return o(t),void 0===r?t:i?i(t,r):function(){return t.apply(r,arguments)}}},6916:function(t){var r=Function.prototype.call;t.exports=r.bind?r.bind(r):function(){return r.apply(r,arguments)}},6530:function(t,r,e){var n=e(9781),o=e(2597),i=Function.prototype,u=n&&Object.getOwnPropertyDescriptor,c=o(i,"name"),a=c&&"something"===function(){}.name,s=c&&(!n||n&&u(i,"name").configurable);t.exports={EXISTS:c,PROPER:a,CONFIGURABLE:s}},1702:function(t){var r=Function.prototype,e=r.bind,n=r.call,o=e&&e.bind(n);t.exports=e?function(t){return t&&o(n,t)}:function(t){return t&&function(){return n.apply(t,arguments)}}},5005:function(t,r,e){var n=e(7854),o=e(614),i=function(t){return o(t)?t:void 0};t.exports=function(t,r){return arguments.length<2?i(n[t]):n[t]&&n[t][r]}},1246:function(t,r,e){var n=e(648),o=e(8173),i=e(7497),u=e(5112)("iterator");t.exports=function(t){if(null!=t)return o(t,u)||o(t,"@@iterator")||i[n(t)]}},8554:function(t,r,e){var n=e(7854),o=e(6916),i=e(9662),u=e(9670),c=e(6330),a=e(1246),s=n.TypeError;t.exports=function(t,r){var e=arguments.length<2?a(t):r;if(i(e))return u(o(e,t));throw s(c(t)+" is not iterable")}},8173:function(t,r,e){var n=e(9662);t.exports=function(t,r){var e=t[r];return null==e?void 0:n(e)}},647:function(t,r,e){var n=e(1702),o=e(7908),i=Math.floor,u=n("".charAt),c=n("".replace),a=n("".slice),s=/\$([$&'`]|\d{1,2}|<[^>]*>)/g,f=/\$([$&'`]|\d{1,2})/g;t.exports=function(t,r,e,n,l,p){var h=e+t.length,d=n.length,v=f;return void 0!==l&&(l=o(l),v=s),c(p,v,(function(o,c){var s;switch(u(c,0)){case"$":return"$";case"&":return t;case"`":return a(r,0,e);case"'":return a(r,h);case"<":s=l[a(c,1,-1)];break;default:var f=+c;if(0===f)return o;if(f>d){var p=i(f/10);return 0===p?o:p<=d?void 0===n[p-1]?u(c,1):n[p-1]+u(c,1):o}s=n[f-1]}return void 0===s?"":s}))}},7854:function(t,r,e){var n=function(t){return t&&t.Math==Math&&t};t.exports=n("object"==typeof globalThis&&globalThis)||n("object"==typeof window&&window)||n("object"==typeof self&&self)||n("object"==typeof e.g&&e.g)||function(){return this}()||Function("return this")()},2597:function(t,r,e){var n=e(1702),o=e(7908),i=n({}.hasOwnProperty);t.exports=Object.hasOwn||function(t,r){return i(o(t),r)}},3501:function(t){t.exports={}},842:function(t,r,e){var n=e(7854);t.exports=function(t,r){var e=n.console;e&&e.error&&(1==arguments.length?e.error(t):e.error(t,r))}},490:function(t,r,e){var n=e(5005);t.exports=n("document","documentElement")},4664:function(t,r,e){var n=e(9781),o=e(7293),i=e(317);t.exports=!n&&!o((function(){return 7!=Object.defineProperty(i("div"),"a",{get:function(){return 7}}).a}))},8361:function(t,r,e){var n=e(7854),o=e(1702),i=e(7293),u=e(4326),c=n.Object,a=o("".split);t.exports=i((function(){return!c("z").propertyIsEnumerable(0)}))?function(t){return"String"==u(t)?a(t,""):c(t)}:c},2788:function(t,r,e){var n=e(1702),o=e(614),i=e(5465),u=n(Function.toString);o(i.inspectSource)||(i.inspectSource=function(t){return u(t)}),t.exports=i.inspectSource},8340:function(t,r,e){var n=e(111),o=e(8880);t.exports=function(t,r){n(r)&&"cause"in r&&o(t,"cause",r.cause)}},9909:function(t,r,e){var n,o,i,u=e(8536),c=e(7854),a=e(1702),s=e(111),f=e(8880),l=e(2597),p=e(5465),h=e(6200),d=e(3501),v="Object already initialized",y=c.TypeError,g=c.WeakMap;if(u||p.state){var b=p.state||(p.state=new g),m=a(b.get),x=a(b.has),w=a(b.set);n=function(t,r){if(x(b,t))throw new y(v);return r.facade=t,w(b,t,r),r},o=function(t){return m(b,t)||{}},i=function(t){return x(b,t)}}else{var O=h("state");d[O]=!0,n=function(t,r){if(l(t,O))throw new y(v);return r.facade=t,f(t,O,r),r},o=function(t){return l(t,O)?t[O]:{}},i=function(t){return l(t,O)}}t.exports={set:n,get:o,has:i,enforce:function(t){return i(t)?o(t):n(t,{})},getterFor:function(t){return function(r){var e;if(!s(r)||(e=o(r)).type!==t)throw y("Incompatible receiver, "+t+" required");return e}}}},7659:function(t,r,e){var n=e(5112),o=e(7497),i=n("iterator"),u=Array.prototype;t.exports=function(t){return void 0!==t&&(o.Array===t||u[i]===t)}},614:function(t){t.exports=function(t){return"function"==typeof t}},4411:function(t,r,e){var n=e(1702),o=e(7293),i=e(614),u=e(648),c=e(5005),a=e(2788),s=function(){},f=[],l=c("Reflect","construct"),p=/^\s*(?:class|function)\b/,h=n(p.exec),d=!p.exec(s),v=function(t){if(!i(t))return!1;try{return l(s,f,t),!0}catch(t){return!1}};t.exports=!l||o((function(){var t;return v(v.call)||!v(Object)||!v((function(){t=!0}))||t}))?function(t){if(!i(t))return!1;switch(u(t)){case"AsyncFunction":case"GeneratorFunction":case"AsyncGeneratorFunction":return!1}return d||!!h(p,a(t))}:v},4705:function(t,r,e){var n=e(7293),o=e(614),i=/#|\.prototype\./,u=function(t,r){var e=a[c(t)];return e==f||e!=s&&(o(r)?n(r):!!r)},c=u.normalize=function(t){return String(t).replace(i,".").toLowerCase()},a=u.data={},s=u.NATIVE="N",f=u.POLYFILL="P";t.exports=u},111:function(t,r,e){var n=e(614);t.exports=function(t){return"object"==typeof t?null!==t:n(t)}},1913:function(t){t.exports=!1},7850:function(t,r,e){var n=e(111),o=e(4326),i=e(5112)("match");t.exports=function(t){var r;return n(t)&&(void 0!==(r=t[i])?!!r:"RegExp"==o(t))}},2190:function(t,r,e){var n=e(7854),o=e(5005),i=e(614),u=e(7976),c=e(3307),a=n.Object;t.exports=c?function(t){return"symbol"==typeof t}:function(t){var r=o("Symbol");return i(r)&&u(r.prototype,a(t))}},408:function(t,r,e){var n=e(7854),o=e(9974),i=e(6916),u=e(9670),c=e(6330),a=e(7659),s=e(6244),f=e(7976),l=e(8554),p=e(1246),h=e(9212),d=n.TypeError,v=function(t,r){this.stopped=t,this.result=r},y=v.prototype;t.exports=function(t,r,e){var n,g,b,m,x,w,O,E=e&&e.that,S=!(!e||!e.AS_ENTRIES),j=!(!e||!e.IS_ITERATOR),P=!(!e||!e.INTERRUPTED),T=o(r,E),_=function(t){return n&&h(n,"normal",t),new v(!0,t)},A=function(t){return S?(u(t),P?T(t[0],t[1],_):T(t[0],t[1])):P?T(t,_):T(t)};if(j)n=t;else{if(!(g=p(t)))throw d(c(t)+" is not iterable");if(a(g)){for(b=0,m=s(t);m>b;b++)if((x=A(t[b]))&&f(y,x))return x;return new v(!1)}n=l(t,g)}for(w=n.next;!(O=i(w,n)).done;){try{x=A(O.value)}catch(t){h(n,"throw",t)}if("object"==typeof x&&x&&f(y,x))return x}return new v(!1)}},9212:function(t,r,e){var n=e(6916),o=e(9670),i=e(8173);t.exports=function(t,r,e){var u,c;o(t);try{if(!(u=i(t,"return"))){if("throw"===r)throw e;return e}u=n(u,t)}catch(t){c=!0,u=t}if("throw"===r)throw e;if(c)throw u;return o(u),e}},3383:function(t,r,e){"use strict";var n,o,i,u=e(7293),c=e(614),a=e(30),s=e(9518),f=e(1320),l=e(5112),p=e(1913),h=l("iterator"),d=!1;[].keys&&("next"in(i=[].keys())?(o=s(s(i)))!==Object.prototype&&(n=o):d=!0),null==n||u((function(){var t={};return n[h].call(t)!==t}))?n={}:p&&(n=a(n)),c(n[h])||f(n,h,(function(){return this})),t.exports={IteratorPrototype:n,BUGGY_SAFARI_ITERATORS:d}},7497:function(t){t.exports={}},6244:function(t,r,e){var n=e(7466);t.exports=function(t){return n(t.length)}},5948:function(t,r,e){var n,o,i,u,c,a,s,f,l=e(7854),p=e(9974),h=e(1236).f,d=e(261).set,v=e(6833),y=e(1528),g=e(1036),b=e(5268),m=l.MutationObserver||l.WebKitMutationObserver,x=l.document,w=l.process,O=l.Promise,E=h(l,"queueMicrotask"),S=E&&E.value;S||(n=function(){var t,r;for(b&&(t=w.domain)&&t.exit();o;){r=o.fn,o=o.next;try{r()}catch(t){throw o?u():i=void 0,t}}i=void 0,t&&t.enter()},v||b||g||!m||!x?!y&&O&&O.resolve?((s=O.resolve(void 0)).constructor=O,f=p(s.then,s),u=function(){f(n)}):b?u=function(){w.nextTick(n)}:(d=p(d,l),u=function(){d(n)}):(c=!0,a=x.createTextNode(""),new m(n).observe(a,{characterData:!0}),u=function(){a.data=c=!c})),t.exports=S||function(t){var r={fn:t,next:void 0};i&&(i.next=r),o||(o=r,u()),i=r}},3366:function(t,r,e){var n=e(7854);t.exports=n.Promise},133:function(t,r,e){var n=e(7392),o=e(7293);t.exports=!!Object.getOwnPropertySymbols&&!o((function(){var t=Symbol();return!String(t)||!(Object(t)instanceof Symbol)||!Symbol.sham&&n&&n<41}))},8536:function(t,r,e){var n=e(7854),o=e(614),i=e(2788),u=n.WeakMap;t.exports=o(u)&&/native code/.test(i(u))},8523:function(t,r,e){"use strict";var n=e(9662),o=function(t){var r,e;this.promise=new t((function(t,n){if(void 0!==r||void 0!==e)throw TypeError("Bad Promise constructor");r=t,e=n})),this.resolve=n(r),this.reject=n(e)};t.exports.f=function(t){return new o(t)}},6277:function(t,r,e){var n=e(1340);t.exports=function(t,r){return void 0===t?arguments.length<2?"":r:n(t)}},3929:function(t,r,e){var n=e(7854),o=e(7850),i=n.TypeError;t.exports=function(t){if(o(t))throw i("The method doesn't accept regular expressions");return t}},30:function(t,r,e){var n,o=e(9670),i=e(6048),u=e(748),c=e(3501),a=e(490),s=e(317),f=e(6200),l=f("IE_PROTO"),p=function(){},h=function(t){return"<script>"+t+"</"+"script>"},d=function(t){t.write(h("")),t.close();var r=t.parentWindow.Object;return t=null,r},v=function(){try{n=new ActiveXObject("htmlfile")}catch(t){}var t,r;v="undefined"!=typeof document?document.domain&&n?d(n):((r=s("iframe")).style.display="none",a.appendChild(r),r.src=String("javascript:"),(t=r.contentWindow.document).open(),t.write(h("document.F=Object")),t.close(),t.F):d(n);for(var e=u.length;e--;)delete v.prototype[u[e]];return v()};c[l]=!0,t.exports=Object.create||function(t,r){var e;return null!==t?(p.prototype=o(t),e=new p,p.prototype=null,e[l]=t):e=v(),void 0===r?e:i(e,r)}},6048:function(t,r,e){var n=e(9781),o=e(3070),i=e(9670),u=e(5656),c=e(1956);t.exports=n?Object.defineProperties:function(t,r){i(t);for(var e,n=u(r),a=c(r),s=a.length,f=0;s>f;)o.f(t,e=a[f++],n[e]);return t}},3070:function(t,r,e){var n=e(7854),o=e(9781),i=e(4664),u=e(9670),c=e(4948),a=n.TypeError,s=Object.defineProperty;r.f=o?s:function(t,r,e){if(u(t),r=c(r),u(e),i)try{return s(t,r,e)}catch(t){}if("get"in e||"set"in e)throw a("Accessors not supported");return"value"in e&&(t[r]=e.value),t}},1236:function(t,r,e){var n=e(9781),o=e(6916),i=e(5296),u=e(9114),c=e(5656),a=e(4948),s=e(2597),f=e(4664),l=Object.getOwnPropertyDescriptor;r.f=n?l:function(t,r){if(t=c(t),r=a(r),f)try{return l(t,r)}catch(t){}if(s(t,r))return u(!o(i.f,t,r),t[r])}},8006:function(t,r,e){var n=e(6324),o=e(748).concat("length","prototype");r.f=Object.getOwnPropertyNames||function(t){return n(t,o)}},5181:function(t,r){r.f=Object.getOwnPropertySymbols},9518:function(t,r,e){var n=e(7854),o=e(2597),i=e(614),u=e(7908),c=e(6200),a=e(8544),s=c("IE_PROTO"),f=n.Object,l=f.prototype;t.exports=a?f.getPrototypeOf:function(t){var r=u(t);if(o(r,s))return r[s];var e=r.constructor;return i(e)&&r instanceof e?e.prototype:r instanceof f?l:null}},7976:function(t,r,e){var n=e(1702);t.exports=n({}.isPrototypeOf)},6324:function(t,r,e){var n=e(1702),o=e(2597),i=e(5656),u=e(1318).indexOf,c=e(3501),a=n([].push);t.exports=function(t,r){var e,n=i(t),s=0,f=[];for(e in n)!o(c,e)&&o(n,e)&&a(f,e);for(;r.length>s;)o(n,e=r[s++])&&(~u(f,e)||a(f,e));return f}},1956:function(t,r,e){var n=e(6324),o=e(748);t.exports=Object.keys||function(t){return n(t,o)}},5296:function(t,r){"use strict";var e={}.propertyIsEnumerable,n=Object.getOwnPropertyDescriptor,o=n&&!e.call({1:2},1);r.f=o?function(t){var r=n(this,t);return!!r&&r.enumerable}:e},7674:function(t,r,e){var n=e(1702),o=e(9670),i=e(6077);t.exports=Object.setPrototypeOf||("__proto__"in{}?function(){var t,r=!1,e={};try{(t=n(Object.getOwnPropertyDescriptor(Object.prototype,"__proto__").set))(e,[]),r=e instanceof Array}catch(t){}return function(e,n){return o(e),i(n),r?t(e,n):e.__proto__=n,e}}():void 0)},288:function(t,r,e){"use strict";var n=e(1694),o=e(648);t.exports=n?{}.toString:function(){return"[object "+o(this)+"]"}},2140:function(t,r,e){var n=e(7854),o=e(6916),i=e(614),u=e(111),c=n.TypeError;t.exports=function(t,r){var e,n;if("string"===r&&i(e=t.toString)&&!u(n=o(e,t)))return n;if(i(e=t.valueOf)&&!u(n=o(e,t)))return n;if("string"!==r&&i(e=t.toString)&&!u(n=o(e,t)))return n;throw c("Can't convert object to primitive value")}},3887:function(t,r,e){var n=e(5005),o=e(1702),i=e(8006),u=e(5181),c=e(9670),a=o([].concat);t.exports=n("Reflect","ownKeys")||function(t){var r=i.f(c(t)),e=u.f;return e?a(r,e(t)):r}},857:function(t,r,e){var n=e(7854);t.exports=n},2534:function(t){t.exports=function(t){try{return{error:!1,value:t()}}catch(t){return{error:!0,value:t}}}},9478:function(t,r,e){var n=e(9670),o=e(111),i=e(8523);t.exports=function(t,r){if(n(t),o(r)&&r.constructor===t)return r;var e=i.f(t);return(0,e.resolve)(r),e.promise}},2248:function(t,r,e){var n=e(1320);t.exports=function(t,r,e){for(var o in r)n(t,o,r[o],e);return t}},1320:function(t,r,e){var n=e(7854),o=e(614),i=e(2597),u=e(8880),c=e(3505),a=e(2788),s=e(9909),f=e(6530).CONFIGURABLE,l=s.get,p=s.enforce,h=String(String).split("String");(t.exports=function(t,r,e,a){var s,l=!!a&&!!a.unsafe,d=!!a&&!!a.enumerable,v=!!a&&!!a.noTargetGet,y=a&&void 0!==a.name?a.name:r;o(e)&&("Symbol("===String(y).slice(0,7)&&(y="["+String(y).replace(/^Symbol\(([^)]*)\)/,"$1")+"]"),(!i(e,"name")||f&&e.name!==y)&&u(e,"name",y),(s=p(e)).source||(s.source=h.join("string"==typeof y?y:""))),t!==n?(l?!v&&t[r]&&(d=!0):delete t[r],d?t[r]=e:u(t,r,e)):d?t[r]=e:c(r,e)})(Function.prototype,"toString",(function(){return o(this)&&l(this).source||a(this)}))},7651:function(t,r,e){var n=e(7854),o=e(6916),i=e(9670),u=e(614),c=e(4326),a=e(2261),s=n.TypeError;t.exports=function(t,r){var e=t.exec;if(u(e)){var n=o(e,t,r);return null!==n&&i(n),n}if("RegExp"===c(t))return o(a,t,r);throw s("RegExp#exec called on incompatible receiver")}},2261:function(t,r,e){"use strict";var n,o,i=e(6916),u=e(1702),c=e(1340),a=e(7066),s=e(2999),f=e(2309),l=e(30),p=e(9909).get,h=e(9441),d=e(7168),v=f("native-string-replace",String.prototype.replace),y=RegExp.prototype.exec,g=y,b=u("".charAt),m=u("".indexOf),x=u("".replace),w=u("".slice),O=(o=/b*/g,i(y,n=/a/,"a"),i(y,o,"a"),0!==n.lastIndex||0!==o.lastIndex),E=s.UNSUPPORTED_Y||s.BROKEN_CARET,S=void 0!==/()??/.exec("")[1];(O||S||E||h||d)&&(g=function(t){var r,e,n,o,u,s,f,h=this,d=p(h),j=c(t),P=d.raw;if(P)return P.lastIndex=h.lastIndex,r=i(g,P,j),h.lastIndex=P.lastIndex,r;var T=d.groups,_=E&&h.sticky,A=i(a,h),I=h.source,R=0,L=j;if(_&&(A=x(A,"y",""),-1===m(A,"g")&&(A+="g"),L=w(j,h.lastIndex),h.lastIndex>0&&(!h.multiline||h.multiline&&"\n"!==b(j,h.lastIndex-1))&&(I="(?: "+I+")",L=" "+L,R++),e=new RegExp("^(?:"+I+")",A)),S&&(e=new RegExp("^"+I+"$(?!\\s)",A)),O&&(n=h.lastIndex),o=i(y,_?e:h,L),_?o?(o.input=w(o.input,R),o[0]=w(o[0],R),o.index=h.lastIndex,h.lastIndex+=o[0].length):h.lastIndex=0:O&&o&&(h.lastIndex=h.global?o.index+o[0].length:n),S&&o&&o.length>1&&i(v,o[0],e,(function(){for(u=1;u<arguments.length-2;u++)void 0===arguments[u]&&(o[u]=void 0)})),o&&T)for(o.groups=s=l(null),u=0;u<T.length;u++)s[(f=T[u])[0]]=o[f[1]];return o}),t.exports=g},7066:function(t,r,e){"use strict";var n=e(9670);t.exports=function(){var t=n(this),r="";return t.global&&(r+="g"),t.ignoreCase&&(r+="i"),t.multiline&&(r+="m"),t.dotAll&&(r+="s"),t.unicode&&(r+="u"),t.sticky&&(r+="y"),r}},2999:function(t,r,e){var n=e(7293),o=e(7854).RegExp;r.UNSUPPORTED_Y=n((function(){var t=o("a","y");return t.lastIndex=2,null!=t.exec("abcd")})),r.BROKEN_CARET=n((function(){var t=o("^r","gy");return t.lastIndex=2,null!=t.exec("str")}))},9441:function(t,r,e){var n=e(7293),o=e(7854).RegExp;t.exports=n((function(){var t=o(".","s");return!(t.dotAll&&t.exec("\n")&&"s"===t.flags)}))},7168:function(t,r,e){var n=e(7293),o=e(7854).RegExp;t.exports=n((function(){var t=o("(?<a>b)","g");return"b"!==t.exec("b").groups.a||"bc"!=="b".replace(t,"$<a>c")}))},4488:function(t,r,e){var n=e(7854).TypeError;t.exports=function(t){if(null==t)throw n("Can't call method on "+t);return t}},6029:function(t){t.exports=Object.is||function(t,r){return t===r?0!==t||1/t==1/r:t!=t&&r!=r}},3505:function(t,r,e){var n=e(7854),o=Object.defineProperty;t.exports=function(t,r){try{o(n,t,{value:r,configurable:!0,writable:!0})}catch(e){n[t]=r}return r}},6340:function(t,r,e){"use strict";var n=e(5005),o=e(3070),i=e(5112),u=e(9781),c=i("species");t.exports=function(t){var r=n(t),e=o.f;u&&r&&!r[c]&&e(r,c,{configurable:!0,get:function(){return this}})}},8003:function(t,r,e){var n=e(3070).f,o=e(2597),i=e(5112)("toStringTag");t.exports=function(t,r,e){t&&!o(t=e?t:t.prototype,i)&&n(t,i,{configurable:!0,value:r})}},6200:function(t,r,e){var n=e(2309),o=e(9711),i=n("keys");t.exports=function(t){return i[t]||(i[t]=o(t))}},5465:function(t,r,e){var n=e(7854),o=e(3505),i="__core-js_shared__",u=n[i]||o(i,{});t.exports=u},2309:function(t,r,e){var n=e(1913),o=e(5465);(t.exports=function(t,r){return o[t]||(o[t]=void 0!==r?r:{})})("versions",[]).push({version:"3.19.0",mode:n?"pure":"global",copyright:"© 2021 Denis Pushkarev (zloirock.ru)"})},6707:function(t,r,e){var n=e(9670),o=e(9483),i=e(5112)("species");t.exports=function(t,r){var e,u=n(t).constructor;return void 0===u||null==(e=n(u)[i])?r:o(e)}},3429:function(t,r,e){var n=e(7293);t.exports=function(t){return n((function(){var r=""[t]('"');return r!==r.toLowerCase()||r.split('"').length>3}))}},8710:function(t,r,e){var n=e(1702),o=e(9303),i=e(1340),u=e(4488),c=n("".charAt),a=n("".charCodeAt),s=n("".slice),f=function(t){return function(r,e){var n,f,l=i(u(r)),p=o(e),h=l.length;return p<0||p>=h?t?"":void 0:(n=a(l,p))<55296||n>56319||p+1===h||(f=a(l,p+1))<56320||f>57343?t?c(l,p):n:t?s(l,p,p+2):f-56320+(n-55296<<10)+65536}};t.exports={codeAt:f(!1),charAt:f(!0)}},4986:function(t,r,e){var n=e(8113);t.exports=/Version\/10(?:\.\d+){1,2}(?: [\w./]+)?(?: Mobile\/\w+)? Safari\//.test(n)},6650:function(t,r,e){var n=e(1702),o=e(7466),i=e(1340),u=e(8415),c=e(4488),a=n(u),s=n("".slice),f=Math.ceil,l=function(t){return function(r,e,n){var u,l,p=i(c(r)),h=o(e),d=p.length,v=void 0===n?" ":i(n);return h<=d||""==v?p:((l=a(v,f((u=h-d)/v.length))).length>u&&(l=s(l,0,u)),t?p+l:l+p)}};t.exports={start:l(!1),end:l(!0)}},8415:function(t,r,e){"use strict";var n=e(7854),o=e(9303),i=e(1340),u=e(4488),c=n.RangeError;t.exports=function(t){var r=i(u(this)),e="",n=o(t);if(n<0||n==1/0)throw c("Wrong number of repetitions");for(;n>0;(n>>>=1)&&(r+=r))1&n&&(e+=r);return e}},6091:function(t,r,e){var n=e(6530).PROPER,o=e(7293),i=e(1361);t.exports=function(t){return o((function(){return!!i[t]()||"​᠎"!=="​᠎"[t]()||n&&i[t].name!==t}))}},3111:function(t,r,e){var n=e(1702),o=e(4488),i=e(1340),u=e(1361),c=n("".replace),a="["+u+"]",s=RegExp("^"+a+a+"*"),f=RegExp(a+a+"*$"),l=function(t){return function(r){var e=i(o(r));return 1&t&&(e=c(e,s,"")),2&t&&(e=c(e,f,"")),e}};t.exports={start:l(1),end:l(2),trim:l(3)}},261:function(t,r,e){var n,o,i,u,c=e(7854),a=e(2104),s=e(9974),f=e(614),l=e(2597),p=e(7293),h=e(490),d=e(206),v=e(317),y=e(6833),g=e(5268),b=c.setImmediate,m=c.clearImmediate,x=c.process,w=c.Dispatch,O=c.Function,E=c.MessageChannel,S=c.String,j=0,P={},T="onreadystatechange";try{n=c.location}catch(t){}var _=function(t){if(l(P,t)){var r=P[t];delete P[t],r()}},A=function(t){return function(){_(t)}},I=function(t){_(t.data)},R=function(t){c.postMessage(S(t),n.protocol+"//"+n.host)};b&&m||(b=function(t){var r=d(arguments,1);return P[++j]=function(){a(f(t)?t:O(t),void 0,r)},o(j),j},m=function(t){delete P[t]},g?o=function(t){x.nextTick(A(t))}:w&&w.now?o=function(t){w.now(A(t))}:E&&!y?(u=(i=new E).port2,i.port1.onmessage=I,o=s(u.postMessage,u)):c.addEventListener&&f(c.postMessage)&&!c.importScripts&&n&&"file:"!==n.protocol&&!p(R)?(o=R,c.addEventListener("message",I,!1)):o=T in v("script")?function(t){h.appendChild(v("script")).onreadystatechange=function(){h.removeChild(this),_(t)}}:function(t){setTimeout(A(t),0)}),t.exports={set:b,clear:m}},1400:function(t,r,e){var n=e(9303),o=Math.max,i=Math.min;t.exports=function(t,r){var e=n(t);return e<0?o(e+r,0):i(e,r)}},5656:function(t,r,e){var n=e(8361),o=e(4488);t.exports=function(t){return n(o(t))}},9303:function(t){var r=Math.ceil,e=Math.floor;t.exports=function(t){var n=+t;return n!=n||0===n?0:(n>0?e:r)(n)}},7466:function(t,r,e){var n=e(9303),o=Math.min;t.exports=function(t){return t>0?o(n(t),9007199254740991):0}},7908:function(t,r,e){var n=e(7854),o=e(4488),i=n.Object;t.exports=function(t){return i(o(t))}},7593:function(t,r,e){var n=e(7854),o=e(6916),i=e(111),u=e(2190),c=e(8173),a=e(2140),s=e(5112),f=n.TypeError,l=s("toPrimitive");t.exports=function(t,r){if(!i(t)||u(t))return t;var e,n=c(t,l);if(n){if(void 0===r&&(r="default"),e=o(n,t,r),!i(e)||u(e))return e;throw f("Can't convert object to primitive value")}return void 0===r&&(r="number"),a(t,r)}},4948:function(t,r,e){var n=e(7593),o=e(2190);t.exports=function(t){var r=n(t,"string");return o(r)?r:r+""}},1694:function(t,r,e){var n={};n[e(5112)("toStringTag")]="z",t.exports="[object z]"===String(n)},1340:function(t,r,e){var n=e(7854),o=e(648),i=n.String;t.exports=function(t){if("Symbol"===o(t))throw TypeError("Cannot convert a Symbol value to a string");return i(t)}},6330:function(t,r,e){var n=e(7854).String;t.exports=function(t){try{return n(t)}catch(t){return"Object"}}},9711:function(t,r,e){var n=e(1702),o=0,i=Math.random(),u=n(1..toString);t.exports=function(t){return"Symbol("+(void 0===t?"":t)+")_"+u(++o+i,36)}},3307:function(t,r,e){var n=e(133);t.exports=n&&!Symbol.sham&&"symbol"==typeof Symbol.iterator},5112:function(t,r,e){var n=e(7854),o=e(2309),i=e(2597),u=e(9711),c=e(133),a=e(3307),s=o("wks"),f=n.Symbol,l=f&&f.for,p=a?f:f&&f.withoutSetter||u;t.exports=function(t){if(!i(s,t)||!c&&"string"!=typeof s[t]){var r="Symbol."+t;c&&i(f,t)?s[t]=f[t]:s[t]=a&&l?l(r):p(r)}return s[t]}},1361:function(t){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},9170:function(t,r,e){"use strict";var n=e(2109),o=e(7854),i=e(7976),u=e(9518),c=e(7674),a=e(9920),s=e(30),f=e(8880),l=e(9114),p=e(7741),h=e(8340),d=e(408),v=e(6277),y=e(2914),g=o.Error,b=[].push,m=function(t,r){var e=i(x,this)?this:s(x),n=arguments.length>2?arguments[2]:void 0;c&&(e=c(new g(void 0),u(e))),f(e,"message",v(r,"")),y&&f(e,"stack",p(e.stack,1)),h(e,n);var o=[];return d(t,b,{that:o}),f(e,"errors",o),e};c?c(m,g):a(m,g);var x=m.prototype=s(g.prototype,{constructor:l(1,m),message:l(1,""),name:l(1,"AggregateError")});n({global:!0},{AggregateError:m})},6992:function(t,r,e){"use strict";var n=e(5656),o=e(1223),i=e(7497),u=e(9909),c=e(654),a="Array Iterator",s=u.set,f=u.getterFor(a);t.exports=c(Array,"Array",(function(t,r){s(this,{type:a,target:n(t),index:0,kind:r})}),(function(){var t=f(this),r=t.target,e=t.kind,n=t.index++;return!r||n>=r.length?(t.target=void 0,{value:void 0,done:!0}):"keys"==e?{value:n,done:!1}:"values"==e?{value:r[n],done:!1}:{value:[n,r[n]],done:!1}}),"values"),i.Arguments=i.Array,o("keys"),o("values"),o("entries")},1539:function(t,r,e){var n=e(1694),o=e(1320),i=e(288);n||o(Object.prototype,"toString",i,{unsafe:!0})},7922:function(t,r,e){"use strict";var n=e(2109),o=e(6916),i=e(9662),u=e(8523),c=e(2534),a=e(408);n({target:"Promise",stat:!0},{allSettled:function(t){var r=this,e=u.f(r),n=e.resolve,s=e.reject,f=c((function(){var e=i(r.resolve),u=[],c=0,s=1;a(t,(function(t){var i=c++,a=!1;s++,o(e,r,t).then((function(t){a||(a=!0,u[i]={status:"fulfilled",value:t},--s||n(u))}),(function(t){a||(a=!0,u[i]={status:"rejected",reason:t},--s||n(u))}))})),--s||n(u)}));return f.error&&s(f.value),e.promise}})},4668:function(t,r,e){"use strict";var n=e(2109),o=e(9662),i=e(5005),u=e(6916),c=e(8523),a=e(2534),s=e(408),f="No one promise resolved";n({target:"Promise",stat:!0},{any:function(t){var r=this,e=i("AggregateError"),n=c.f(r),l=n.resolve,p=n.reject,h=a((function(){var n=o(r.resolve),i=[],c=0,a=1,h=!1;s(t,(function(t){var o=c++,s=!1;a++,u(n,r,t).then((function(t){s||h||(h=!0,l(t))}),(function(t){s||h||(s=!0,i[o]=t,--a||p(new e(i,f)))}))})),--a||p(new e(i,f))}));return h.error&&p(h.value),n.promise}})},7727:function(t,r,e){"use strict";var n=e(2109),o=e(1913),i=e(3366),u=e(7293),c=e(5005),a=e(614),s=e(6707),f=e(9478),l=e(1320);if(n({target:"Promise",proto:!0,real:!0,forced:!!i&&u((function(){i.prototype.finally.call({then:function(){}},(function(){}))}))},{finally:function(t){var r=s(this,c("Promise")),e=a(t);return this.then(e?function(e){return f(r,t()).then((function(){return e}))}:t,e?function(e){return f(r,t()).then((function(){throw e}))}:t)}}),!o&&a(i)){var p=c("Promise").prototype.finally;i.prototype.finally!==p&&l(i.prototype,"finally",p,{unsafe:!0})}},8674:function(t,r,e){"use strict";var n,o,i,u,c=e(2109),a=e(1913),s=e(7854),f=e(5005),l=e(6916),p=e(3366),h=e(1320),d=e(2248),v=e(7674),y=e(8003),g=e(6340),b=e(9662),m=e(614),x=e(111),w=e(5787),O=e(2788),E=e(408),S=e(7072),j=e(6707),P=e(261).set,T=e(5948),_=e(9478),A=e(842),I=e(8523),R=e(2534),L=e(9909),k=e(4705),C=e(5112),B=e(7871),D=e(5268),F=e(7392),M=C("species"),U="Promise",N=L.get,G=L.set,X=L.getterFor(U),$=p&&p.prototype,H=p,q=$,W=s.TypeError,V=s.document,z=s.process,Y=I.f,K=Y,J=!!(V&&V.createEvent&&s.dispatchEvent),Q=m(s.PromiseRejectionEvent),Z="unhandledrejection",tt=!1,rt=k(U,(function(){var t=O(H),r=t!==String(H);if(!r&&66===F)return!0;if(a&&!q.finally)return!0;if(F>=51&&/native code/.test(t))return!1;var e=new H((function(t){t(1)})),n=function(t){t((function(){}),(function(){}))};return(e.constructor={})[M]=n,!(tt=e.then((function(){}))instanceof n)||!r&&B&&!Q})),et=rt||!S((function(t){H.all(t).catch((function(){}))})),nt=function(t){var r;return!(!x(t)||!m(r=t.then))&&r},ot=function(t,r){if(!t.notified){t.notified=!0;var e=t.reactions;T((function(){for(var n=t.value,o=1==t.state,i=0;e.length>i;){var u,c,a,s=e[i++],f=o?s.ok:s.fail,p=s.resolve,h=s.reject,d=s.domain;try{f?(o||(2===t.rejection&&at(t),t.rejection=1),!0===f?u=n:(d&&d.enter(),u=f(n),d&&(d.exit(),a=!0)),u===s.promise?h(W("Promise-chain cycle")):(c=nt(u))?l(c,u,p,h):p(u)):h(n)}catch(t){d&&!a&&d.exit(),h(t)}}t.reactions=[],t.notified=!1,r&&!t.rejection&&ut(t)}))}},it=function(t,r,e){var n,o;J?((n=V.createEvent("Event")).promise=r,n.reason=e,n.initEvent(t,!1,!0),s.dispatchEvent(n)):n={promise:r,reason:e},!Q&&(o=s["on"+t])?o(n):t===Z&&A("Unhandled promise rejection",e)},ut=function(t){l(P,s,(function(){var r,e=t.facade,n=t.value;if(ct(t)&&(r=R((function(){D?z.emit("unhandledRejection",n,e):it(Z,e,n)})),t.rejection=D||ct(t)?2:1,r.error))throw r.value}))},ct=function(t){return 1!==t.rejection&&!t.parent},at=function(t){l(P,s,(function(){var r=t.facade;D?z.emit("rejectionHandled",r):it("rejectionhandled",r,t.value)}))},st=function(t,r,e){return function(n){t(r,n,e)}},ft=function(t,r,e){t.done||(t.done=!0,e&&(t=e),t.value=r,t.state=2,ot(t,!0))},lt=function(t,r,e){if(!t.done){t.done=!0,e&&(t=e);try{if(t.facade===r)throw W("Promise can't be resolved itself");var n=nt(r);n?T((function(){var e={done:!1};try{l(n,r,st(lt,e,t),st(ft,e,t))}catch(r){ft(e,r,t)}})):(t.value=r,t.state=1,ot(t,!1))}catch(r){ft({done:!1},r,t)}}};if(rt&&(q=(H=function(t){w(this,q),b(t),l(n,this);var r=N(this);try{t(st(lt,r),st(ft,r))}catch(t){ft(r,t)}}).prototype,(n=function(t){G(this,{type:U,done:!1,notified:!1,parent:!1,reactions:[],rejection:!1,state:0,value:void 0})}).prototype=d(q,{then:function(t,r){var e=X(this),n=e.reactions,o=Y(j(this,H));return o.ok=!m(t)||t,o.fail=m(r)&&r,o.domain=D?z.domain:void 0,e.parent=!0,n[n.length]=o,0!=e.state&&ot(e,!1),o.promise},catch:function(t){return this.then(void 0,t)}}),o=function(){var t=new n,r=N(t);this.promise=t,this.resolve=st(lt,r),this.reject=st(ft,r)},I.f=Y=function(t){return t===H||t===i?new o(t):K(t)},!a&&m(p)&&$!==Object.prototype)){u=$.then,tt||(h($,"then",(function(t,r){var e=this;return new H((function(t,r){l(u,e,t,r)})).then(t,r)}),{unsafe:!0}),h($,"catch",q.catch,{unsafe:!0}));try{delete $.constructor}catch(t){}v&&v($,q)}c({global:!0,wrap:!0,forced:rt},{Promise:H}),y(H,U,!1,!0),g(U),i=f(U),c({target:U,stat:!0,forced:rt},{reject:function(t){var r=Y(this);return l(r.reject,void 0,t),r.promise}}),c({target:U,stat:!0,forced:a||rt},{resolve:function(t){return _(a&&this===i?H:this,t)}}),c({target:U,stat:!0,forced:et},{all:function(t){var r=this,e=Y(r),n=e.resolve,o=e.reject,i=R((function(){var e=b(r.resolve),i=[],u=0,c=1;E(t,(function(t){var a=u++,s=!1;c++,l(e,r,t).then((function(t){s||(s=!0,i[a]=t,--c||n(i))}),o)})),--c||n(i)}));return i.error&&o(i.value),e.promise},race:function(t){var r=this,e=Y(r),n=e.reject,o=R((function(){var o=b(r.resolve);E(t,(function(t){l(o,r,t).then(e.resolve,n)}))}));return o.error&&n(o.value),e.promise}})},4916:function(t,r,e){"use strict";var n=e(2109),o=e(2261);n({target:"RegExp",proto:!0,forced:/./.exec!==o},{exec:o})},5218:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("anchor")},{anchor:function(t){return o(this,"a","name",t)}})},4506:function(t,r,e){"use strict";var n=e(2109),o=e(1702),i=e(4488),u=e(9303),c=e(1340),a=e(7293),s=o("".charAt);n({target:"String",proto:!0,forced:a((function(){return"\ud842"!=="𠮷".at(0)}))},{at:function(t){var r=c(i(this)),e=r.length,n=u(t),o=n>=0?n:e+n;return o<0||o>=e?void 0:s(r,o)}})},4475:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("big")},{big:function(){return o(this,"big","","")}})},7929:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("blink")},{blink:function(){return o(this,"blink","","")}})},915:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("bold")},{bold:function(){return o(this,"b","","")}})},9841:function(t,r,e){"use strict";var n=e(2109),o=e(8710).codeAt;n({target:"String",proto:!0},{codePointAt:function(t){return o(this,t)}})},7852:function(t,r,e){"use strict";var n,o=e(2109),i=e(1702),u=e(1236).f,c=e(7466),a=e(1340),s=e(3929),f=e(4488),l=e(4964),p=e(1913),h=i("".endsWith),d=i("".slice),v=Math.min,y=l("endsWith");o({target:"String",proto:!0,forced:!!(p||y||(n=u(String.prototype,"endsWith"),!n||n.writable))&&!y},{endsWith:function(t){var r=a(f(this));s(t);var e=arguments.length>1?arguments[1]:void 0,n=r.length,o=void 0===e?n:v(c(e),n),i=a(t);return h?h(r,i,o):d(r,o-i.length,o)===i}})},9253:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("fixed")},{fixed:function(){return o(this,"tt","","")}})},2125:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("fontcolor")},{fontcolor:function(t){return o(this,"font","color",t)}})},8830:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("fontsize")},{fontsize:function(t){return o(this,"font","size",t)}})},4953:function(t,r,e){var n=e(2109),o=e(7854),i=e(1702),u=e(1400),c=o.RangeError,a=String.fromCharCode,s=String.fromCodePoint,f=i([].join);n({target:"String",stat:!0,forced:!!s&&1!=s.length},{fromCodePoint:function(t){for(var r,e=[],n=arguments.length,o=0;n>o;){if(r=+arguments[o++],u(r,1114111)!==r)throw c(r+" is not a valid code point");e[o]=r<65536?a(r):a(55296+((r-=65536)>>10),r%1024+56320)}return f(e,"")}})},2023:function(t,r,e){"use strict";var n=e(2109),o=e(1702),i=e(3929),u=e(4488),c=e(1340),a=e(4964),s=o("".indexOf);n({target:"String",proto:!0,forced:!a("includes")},{includes:function(t){return!!~s(c(u(this)),c(i(t)),arguments.length>1?arguments[1]:void 0)}})},8734:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("italics")},{italics:function(){return o(this,"i","","")}})},8783:function(t,r,e){"use strict";var n=e(8710).charAt,o=e(1340),i=e(9909),u=e(654),c="String Iterator",a=i.set,s=i.getterFor(c);u(String,"String",(function(t){a(this,{type:c,string:o(t),index:0})}),(function(){var t,r=s(this),e=r.string,o=r.index;return o>=e.length?{value:void 0,done:!0}:(t=n(e,o),r.index+=t.length,{value:t,done:!1})}))},9254:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("link")},{link:function(t){return o(this,"a","href",t)}})},6373:function(t,r,e){"use strict";var n=e(2109),o=e(7854),i=e(6916),u=e(1702),c=e(4994),a=e(4488),s=e(7466),f=e(1340),l=e(9670),p=e(4326),h=e(7976),d=e(7850),v=e(7066),y=e(8173),g=e(1320),b=e(7293),m=e(5112),x=e(6707),w=e(1530),O=e(7651),E=e(9909),S=e(1913),j=m("matchAll"),P="RegExp String",T="RegExp String Iterator",_=E.set,A=E.getterFor(T),I=RegExp.prototype,R=o.TypeError,L=u(v),k=u("".indexOf),C=u("".matchAll),B=!!C&&!b((function(){C("a",/./)})),D=c((function(t,r,e,n){_(this,{type:T,regexp:t,string:r,global:e,unicode:n,done:!1})}),P,(function(){var t=A(this);if(t.done)return{value:void 0,done:!0};var r=t.regexp,e=t.string,n=O(r,e);return null===n?{value:void 0,done:t.done=!0}:t.global?(""===f(n[0])&&(r.lastIndex=w(e,s(r.lastIndex),t.unicode)),{value:n,done:!1}):(t.done=!0,{value:n,done:!1})})),F=function(t){var r,e,n,o,i,u,c=l(this),a=f(t);return r=x(c,RegExp),void 0===(e=c.flags)&&h(I,c)&&!("flags"in I)&&(e=L(c)),n=void 0===e?"":f(e),o=new r(r===RegExp?c.source:c,n),i=!!~k(n,"g"),u=!!~k(n,"u"),o.lastIndex=s(c.lastIndex),new D(o,a,i,u)};n({target:"String",proto:!0,forced:B},{matchAll:function(t){var r,e,n,o,u=a(this);if(null!=t){if(d(t)&&(r=f(a("flags"in I?t.flags:L(t))),!~k(r,"g")))throw R("`.matchAll` does not allow non-global regexes");if(B)return C(u,t);if(void 0===(n=y(t,j))&&S&&"RegExp"==p(t)&&(n=F),n)return i(n,t,u)}else if(B)return C(u,t);return e=f(u),o=new RegExp(t,"g"),S?i(F,o,e):o[j](e)}}),S||j in I||g(I,j,F)},4723:function(t,r,e){"use strict";var n=e(6916),o=e(7007),i=e(9670),u=e(7466),c=e(1340),a=e(4488),s=e(8173),f=e(1530),l=e(7651);o("match",(function(t,r,e){return[function(r){var e=a(this),o=null==r?void 0:s(r,t);return o?n(o,r,e):new RegExp(r)[t](c(e))},function(t){var n=i(this),o=c(t),a=e(r,n,o);if(a.done)return a.value;if(!n.global)return l(n,o);var s=n.unicode;n.lastIndex=0;for(var p,h=[],d=0;null!==(p=l(n,o));){var v=c(p[0]);h[d]=v,""===v&&(n.lastIndex=f(o,u(n.lastIndex),s)),d++}return 0===d?null:h}]}))},6528:function(t,r,e){"use strict";var n=e(2109),o=e(6650).end;n({target:"String",proto:!0,forced:e(4986)},{padEnd:function(t){return o(this,t,arguments.length>1?arguments[1]:void 0)}})},3112:function(t,r,e){"use strict";var n=e(2109),o=e(6650).start;n({target:"String",proto:!0,forced:e(4986)},{padStart:function(t){return o(this,t,arguments.length>1?arguments[1]:void 0)}})},8992:function(t,r,e){var n=e(2109),o=e(1702),i=e(5656),u=e(7908),c=e(1340),a=e(6244),s=o([].push),f=o([].join);n({target:"String",stat:!0},{raw:function(t){for(var r=i(u(t).raw),e=a(r),n=arguments.length,o=[],l=0;e>l;){if(s(o,c(r[l++])),l===e)return f(o,"");l<n&&s(o,c(arguments[l]))}}})},2481:function(t,r,e){e(2109)({target:"String",proto:!0},{repeat:e(8415)})},8757:function(t,r,e){"use strict";var n=e(2109),o=e(7854),i=e(6916),u=e(1702),c=e(4488),a=e(614),s=e(7850),f=e(1340),l=e(8173),p=e(7066),h=e(647),d=e(5112),v=e(1913),y=d("replace"),g=RegExp.prototype,b=o.TypeError,m=u(p),x=u("".indexOf),w=u("".replace),O=u("".slice),E=Math.max,S=function(t,r,e){return e>t.length?-1:""===r?e:x(t,r,e)};n({target:"String",proto:!0},{replaceAll:function(t,r){var e,n,o,u,p,d,j,P,T,_=c(this),A=0,I=0,R="";if(null!=t){if((e=s(t))&&(n=f(c("flags"in g?t.flags:m(t))),!~x(n,"g")))throw b("`.replaceAll` does not allow non-global regexes");if(o=l(t,y))return i(o,t,_,r);if(v&&e)return w(f(_),t,r)}for(u=f(_),p=f(t),(d=a(r))||(r=f(r)),j=p.length,P=E(1,j),A=S(u,p,0);-1!==A;)T=d?f(r(p,A,u)):h(p,u,A,[],void 0,r),R+=O(u,I,A)+T,I=A+j,A=S(u,p,A+P);return I<u.length&&(R+=O(u,I)),R}})},5306:function(t,r,e){"use strict";var n=e(2104),o=e(6916),i=e(1702),u=e(7007),c=e(7293),a=e(9670),s=e(614),f=e(9303),l=e(7466),p=e(1340),h=e(4488),d=e(1530),v=e(8173),y=e(647),g=e(7651),b=e(5112)("replace"),m=Math.max,x=Math.min,w=i([].concat),O=i([].push),E=i("".indexOf),S=i("".slice),j="$0"==="a".replace(/./,"$0"),P=!!/./[b]&&""===/./[b]("a","$0");u("replace",(function(t,r,e){var i=P?"$":"$0";return[function(t,e){var n=h(this),i=null==t?void 0:v(t,b);return i?o(i,t,n,e):o(r,p(n),t,e)},function(t,o){var u=a(this),c=p(t);if("string"==typeof o&&-1===E(o,i)&&-1===E(o,"$<")){var h=e(r,u,c,o);if(h.done)return h.value}var v=s(o);v||(o=p(o));var b=u.global;if(b){var j=u.unicode;u.lastIndex=0}for(var P=[];;){var T=g(u,c);if(null===T)break;if(O(P,T),!b)break;""===p(T[0])&&(u.lastIndex=d(c,l(u.lastIndex),j))}for(var _,A="",I=0,R=0;R<P.length;R++){for(var L=p((T=P[R])[0]),k=m(x(f(T.index),c.length),0),C=[],B=1;B<T.length;B++)O(C,void 0===(_=T[B])?_:String(_));var D=T.groups;if(v){var F=w([L],C,k,c);void 0!==D&&O(F,D);var M=p(n(o,void 0,F))}else M=y(L,c,k,C,D,o);k>=I&&(A+=S(c,I,k)+M,I=k+L.length)}return A+S(c,I)}]}),!!c((function(){var t=/./;return t.exec=function(){var t=[];return t.groups={a:"7"},t},"7"!=="".replace(t,"$<a>")}))||!j||P)},4765:function(t,r,e){"use strict";var n=e(6916),o=e(7007),i=e(9670),u=e(4488),c=e(6029),a=e(1340),s=e(8173),f=e(7651);o("search",(function(t,r,e){return[function(r){var e=u(this),o=null==r?void 0:s(r,t);return o?n(o,r,e):new RegExp(r)[t](a(e))},function(t){var n=i(this),o=a(t),u=e(r,n,o);if(u.done)return u.value;var s=n.lastIndex;c(s,0)||(n.lastIndex=0);var l=f(n,o);return c(n.lastIndex,s)||(n.lastIndex=s),null===l?-1:l.index}]}))},7268:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("small")},{small:function(){return o(this,"small","","")}})},3123:function(t,r,e){"use strict";var n=e(2104),o=e(6916),i=e(1702),u=e(7007),c=e(7850),a=e(9670),s=e(4488),f=e(6707),l=e(1530),p=e(7466),h=e(1340),d=e(8173),v=e(206),y=e(7651),g=e(2261),b=e(2999),m=e(7293),x=b.UNSUPPORTED_Y,w=4294967295,O=Math.min,E=[].push,S=i(/./.exec),j=i(E),P=i("".slice);u("split",(function(t,r,e){var i;return i="c"=="abbc".split(/(b)*/)[1]||4!="test".split(/(?:)/,-1).length||2!="ab".split(/(?:ab)*/).length||4!=".".split(/(.?)(.?)/).length||".".split(/()()/).length>1||"".split(/.?/).length?function(t,e){var i=h(s(this)),u=void 0===e?w:e>>>0;if(0===u)return[];if(void 0===t)return[i];if(!c(t))return o(r,i,t,u);for(var a,f,l,p=[],d=(t.ignoreCase?"i":"")+(t.multiline?"m":"")+(t.unicode?"u":"")+(t.sticky?"y":""),y=0,b=new RegExp(t.source,d+"g");(a=o(g,b,i))&&!((f=b.lastIndex)>y&&(j(p,P(i,y,a.index)),a.length>1&&a.index<i.length&&n(E,p,v(a,1)),l=a[0].length,y=f,p.length>=u));)b.lastIndex===a.index&&b.lastIndex++;return y===i.length?!l&&S(b,"")||j(p,""):j(p,P(i,y)),p.length>u?v(p,0,u):p}:"0".split(void 0,0).length?function(t,e){return void 0===t&&0===e?[]:o(r,this,t,e)}:r,[function(r,e){var n=s(this),u=null==r?void 0:d(r,t);return u?o(u,r,n,e):o(i,h(n),r,e)},function(t,n){var o=a(this),u=h(t),c=e(i,o,u,n,i!==r);if(c.done)return c.value;var s=f(o,RegExp),d=o.unicode,v=(o.ignoreCase?"i":"")+(o.multiline?"m":"")+(o.unicode?"u":"")+(x?"g":"y"),g=new s(x?"^(?:"+o.source+")":o,v),b=void 0===n?w:n>>>0;if(0===b)return[];if(0===u.length)return null===y(g,u)?[u]:[];for(var m=0,E=0,S=[];E<u.length;){g.lastIndex=x?0:E;var T,_=y(g,x?P(u,E):u);if(null===_||(T=O(p(g.lastIndex+(x?E:0)),u.length))===m)E=l(u,E,d);else{if(j(S,P(u,m,E)),S.length===b)return S;for(var A=1;A<=_.length-1;A++)if(j(S,_[A]),S.length===b)return S;E=m=T}}return j(S,P(u,m)),S}]}),!!m((function(){var t=/(?:)/,r=t.exec;t.exec=function(){return r.apply(this,arguments)};var e="ab".split(t);return 2!==e.length||"a"!==e[0]||"b"!==e[1]})),x)},3157:function(t,r,e){"use strict";var n,o=e(2109),i=e(1702),u=e(1236).f,c=e(7466),a=e(1340),s=e(3929),f=e(4488),l=e(4964),p=e(1913),h=i("".startsWith),d=i("".slice),v=Math.min,y=l("startsWith");o({target:"String",proto:!0,forced:!!(p||y||(n=u(String.prototype,"startsWith"),!n||n.writable))&&!y},{startsWith:function(t){var r=a(f(this));s(t);var e=c(v(arguments.length>1?arguments[1]:void 0,r.length)),n=a(t);return h?h(r,n,e):d(r,e,e+n.length)===n}})},7397:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("strike")},{strike:function(){return o(this,"strike","","")}})},86:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("sub")},{sub:function(){return o(this,"sub","","")}})},3650:function(t,r,e){"use strict";var n=e(2109),o=e(1702),i=e(4488),u=e(9303),c=e(1340),a=o("".slice),s=Math.max,f=Math.min;n({target:"String",proto:!0,forced:!"".substr||"b"!=="ab".substr(-1)},{substr:function(t,r){var e,n,o=c(i(this)),l=o.length,p=u(t);return p===1/0&&(p=0),p<0&&(p=s(l+p,0)),(e=void 0===r?l:u(r))<=0||e===1/0||p>=(n=f(p+e,l))?"":a(o,p,n)}})},623:function(t,r,e){"use strict";var n=e(2109),o=e(4230);n({target:"String",proto:!0,forced:e(3429)("sup")},{sup:function(){return o(this,"sup","","")}})},8702:function(t,r,e){"use strict";var n=e(2109),o=e(3111).end,i=e(6091)("trimEnd"),u=i?function(){return o(this)}:"".trimEnd;n({target:"String",proto:!0,name:"trimEnd",forced:i},{trimEnd:u,trimRight:u})},5674:function(t,r,e){"use strict";var n=e(2109),o=e(3111).start,i=e(6091)("trimStart"),u=i?function(){return o(this)}:"".trimStart;n({target:"String",proto:!0,name:"trimStart",forced:i},{trimStart:u,trimLeft:u})},3210:function(t,r,e){"use strict";var n=e(2109),o=e(3111).trim;n({target:"String",proto:!0,forced:e(6091)("trim")},{trim:function(){return o(this)}})},3948:function(t,r,e){var n=e(7854),o=e(8324),i=e(8509),u=e(6992),c=e(8880),a=e(5112),s=a("iterator"),f=a("toStringTag"),l=u.values,p=function(t,r){if(t){if(t[s]!==l)try{c(t,s,l)}catch(r){t[s]=l}if(t[f]||c(t,f,r),o[r])for(var e in u)if(t[e]!==u[e])try{c(t,e,u[e])}catch(r){t[e]=u[e]}}};for(var h in o)p(n[h]&&n[h].prototype,h);p(i,"DOMTokenList")},1150:function(t,r,e){var n=e(7633);e(3948),t.exports=n},9712:function(t,r,e){var n=e(1111);t.exports=n},5666:function(t){var r=function(t){"use strict";var r,e=Object.prototype,n=e.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",u=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function a(t,r,e){return Object.defineProperty(t,r,{value:e,enumerable:!0,configurable:!0,writable:!0}),t[r]}try{a({},"")}catch(t){a=function(t,r,e){return t[r]=e}}function s(t,r,e,n){var o=r&&r.prototype instanceof y?r:y,i=Object.create(o.prototype),u=new _(n||[]);return i._invoke=function(t,r,e){var n=l;return function(o,i){if(n===h)throw new Error("Generator is already running");if(n===d){if("throw"===o)throw i;return I()}for(e.method=o,e.arg=i;;){var u=e.delegate;if(u){var c=j(u,e);if(c){if(c===v)continue;return c}}if("next"===e.method)e.sent=e._sent=e.arg;else if("throw"===e.method){if(n===l)throw n=d,e.arg;e.dispatchException(e.arg)}else"return"===e.method&&e.abrupt("return",e.arg);n=h;var a=f(t,r,e);if("normal"===a.type){if(n=e.done?d:p,a.arg===v)continue;return{value:a.arg,done:e.done}}"throw"===a.type&&(n=d,e.method="throw",e.arg=a.arg)}}}(t,e,u),i}function f(t,r,e){try{return{type:"normal",arg:t.call(r,e)}}catch(t){return{type:"throw",arg:t}}}t.wrap=s;var l="suspendedStart",p="suspendedYield",h="executing",d="completed",v={};function y(){}function g(){}function b(){}var m={};m[i]=function(){return this};var x=Object.getPrototypeOf,w=x&&x(x(A([])));w&&w!==e&&n.call(w,i)&&(m=w);var O=b.prototype=y.prototype=Object.create(m);function E(t){["next","throw","return"].forEach((function(r){a(t,r,(function(t){return this._invoke(r,t)}))}))}function S(t,r){function e(o,i,u,c){var a=f(t[o],t,i);if("throw"!==a.type){var s=a.arg,l=s.value;return l&&"object"==typeof l&&n.call(l,"__await")?r.resolve(l.__await).then((function(t){e("next",t,u,c)}),(function(t){e("throw",t,u,c)})):r.resolve(l).then((function(t){s.value=t,u(s)}),(function(t){return e("throw",t,u,c)}))}c(a.arg)}var o;this._invoke=function(t,n){function i(){return new r((function(r,o){e(t,n,r,o)}))}return o=o?o.then(i,i):i()}}function j(t,e){var n=t.iterator[e.method];if(n===r){if(e.delegate=null,"throw"===e.method){if(t.iterator.return&&(e.method="return",e.arg=r,j(t,e),"throw"===e.method))return v;e.method="throw",e.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}var o=f(n,t.iterator,e.arg);if("throw"===o.type)return e.method="throw",e.arg=o.arg,e.delegate=null,v;var i=o.arg;return i?i.done?(e[t.resultName]=i.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=r),e.delegate=null,v):i:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,v)}function P(t){var r={tryLoc:t[0]};1 in t&&(r.catchLoc=t[1]),2 in t&&(r.finallyLoc=t[2],r.afterLoc=t[3]),this.tryEntries.push(r)}function T(t){var r=t.completion||{};r.type="normal",delete r.arg,t.completion=r}function _(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(P,this),this.reset(!0)}function A(t){if(t){var e=t[i];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,u=function e(){for(;++o<t.length;)if(n.call(t,o))return e.value=t[o],e.done=!1,e;return e.value=r,e.done=!0,e};return u.next=u}}return{next:I}}function I(){return{value:r,done:!0}}return g.prototype=O.constructor=b,b.constructor=g,g.displayName=a(b,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var r="function"==typeof t&&t.constructor;return!!r&&(r===g||"GeneratorFunction"===(r.displayName||r.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,b):(t.__proto__=b,a(t,c,"GeneratorFunction")),t.prototype=Object.create(O),t},t.awrap=function(t){return{__await:t}},E(S.prototype),S.prototype[u]=function(){return this},t.AsyncIterator=S,t.async=function(r,e,n,o,i){void 0===i&&(i=Promise);var u=new S(s(r,e,n,o),i);return t.isGeneratorFunction(e)?u:u.next().then((function(t){return t.done?t.value:u.next()}))},E(O),a(O,c,"Generator"),O[i]=function(){return this},O.toString=function(){return"[object Generator]"},t.keys=function(t){var r=[];for(var e in t)r.push(e);return r.reverse(),function e(){for(;r.length;){var n=r.pop();if(n in t)return e.value=n,e.done=!1,e}return e.done=!0,e}},t.values=A,_.prototype={constructor:_,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=r,this.done=!1,this.delegate=null,this.method="next",this.arg=r,this.tryEntries.forEach(T),!t)for(var e in this)"t"===e.charAt(0)&&n.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=r)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function o(n,o){return c.type="throw",c.arg=t,e.next=n,o&&(e.method="next",e.arg=r),!!o}for(var i=this.tryEntries.length-1;i>=0;--i){var u=this.tryEntries[i],c=u.completion;if("root"===u.tryLoc)return o("end");if(u.tryLoc<=this.prev){var a=n.call(u,"catchLoc"),s=n.call(u,"finallyLoc");if(a&&s){if(this.prev<u.catchLoc)return o(u.catchLoc,!0);if(this.prev<u.finallyLoc)return o(u.finallyLoc)}else if(a){if(this.prev<u.catchLoc)return o(u.catchLoc,!0)}else{if(!s)throw new Error("try statement without catch or finally");if(this.prev<u.finallyLoc)return o(u.finallyLoc)}}}},abrupt:function(t,r){for(var e=this.tryEntries.length-1;e>=0;--e){var o=this.tryEntries[e];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=r&&r<=i.finallyLoc&&(i=null);var u=i?i.completion:{};return u.type=t,u.arg=r,i?(this.method="next",this.next=i.finallyLoc,v):this.complete(u)},complete:function(t,r){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&r&&(this.next=r),v},finish:function(t){for(var r=this.tryEntries.length-1;r>=0;--r){var e=this.tryEntries[r];if(e.finallyLoc===t)return this.complete(e.completion,e.afterLoc),T(e),v}},catch:function(t){for(var r=this.tryEntries.length-1;r>=0;--r){var e=this.tryEntries[r];if(e.tryLoc===t){var n=e.completion;if("throw"===n.type){var o=n.arg;T(e)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,n){return this.delegate={iterator:A(t),resultName:e,nextLoc:n},"next"===this.method&&(this.arg=r),v}},t}(t.exports);try{regeneratorRuntime=r}catch(t){Function("r","regeneratorRuntime = r")(r)}},7147:function(t,r,e){"use strict";var n="undefined"!=typeof globalThis&&globalThis||"undefined"!=typeof self&&self||void 0!==n&&n,o="URLSearchParams"in n,i="Symbol"in n&&"iterator"in Symbol,u="FileReader"in n&&"Blob"in n&&function(){try{return new Blob,!0}catch(t){return!1}}(),c="FormData"in n,a="ArrayBuffer"in n;if(a)var s=["[object Int8Array]","[object Uint8Array]","[object Uint8ClampedArray]","[object Int16Array]","[object Uint16Array]","[object Int32Array]","[object Uint32Array]","[object Float32Array]","[object Float64Array]"],f=ArrayBuffer.isView||function(t){return t&&s.indexOf(Object.prototype.toString.call(t))>-1};function l(t){if("string"!=typeof t&&(t=String(t)),/[^a-z0-9\-#$%&'*+.^_`|~!]/i.test(t)||""===t)throw new TypeError('Invalid character in header field name: "'+t+'"');return t.toLowerCase()}function p(t){return"string"!=typeof t&&(t=String(t)),t}function h(t){var r={next:function(){var r=t.shift();return{done:void 0===r,value:r}}};return i&&(r[Symbol.iterator]=function(){return r}),r}function d(t){this.map={},t instanceof d?t.forEach((function(t,r){this.append(r,t)}),this):Array.isArray(t)?t.forEach((function(t){this.append(t[0],t[1])}),this):t&&Object.getOwnPropertyNames(t).forEach((function(r){this.append(r,t[r])}),this)}function v(t){if(t.bodyUsed)return Promise.reject(new TypeError("Already read"));t.bodyUsed=!0}function y(t){return new Promise((function(r,e){t.onload=function(){r(t.result)},t.onerror=function(){e(t.error)}}))}function g(t){var r=new FileReader,e=y(r);return r.readAsArrayBuffer(t),e}function b(t){if(t.slice)return t.slice(0);var r=new Uint8Array(t.byteLength);return r.set(new Uint8Array(t)),r.buffer}function m(){return this.bodyUsed=!1,this._initBody=function(t){var r;this.bodyUsed=this.bodyUsed,this._bodyInit=t,t?"string"==typeof t?this._bodyText=t:u&&Blob.prototype.isPrototypeOf(t)?this._bodyBlob=t:c&&FormData.prototype.isPrototypeOf(t)?this._bodyFormData=t:o&&URLSearchParams.prototype.isPrototypeOf(t)?this._bodyText=t.toString():a&&u&&((r=t)&&DataView.prototype.isPrototypeOf(r))?(this._bodyArrayBuffer=b(t.buffer),this._bodyInit=new Blob([this._bodyArrayBuffer])):a&&(ArrayBuffer.prototype.isPrototypeOf(t)||f(t))?this._bodyArrayBuffer=b(t):this._bodyText=t=Object.prototype.toString.call(t):this._bodyText="",this.headers.get("content-type")||("string"==typeof t?this.headers.set("content-type","text/plain;charset=UTF-8"):this._bodyBlob&&this._bodyBlob.type?this.headers.set("content-type",this._bodyBlob.type):o&&URLSearchParams.prototype.isPrototypeOf(t)&&this.headers.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"))},u&&(this.blob=function(){var t=v(this);if(t)return t;if(this._bodyBlob)return Promise.resolve(this._bodyBlob);if(this._bodyArrayBuffer)return Promise.resolve(new Blob([this._bodyArrayBuffer]));if(this._bodyFormData)throw new Error("could not read FormData body as blob");return Promise.resolve(new Blob([this._bodyText]))},this.arrayBuffer=function(){if(this._bodyArrayBuffer){var t=v(this);return t||(ArrayBuffer.isView(this._bodyArrayBuffer)?Promise.resolve(this._bodyArrayBuffer.buffer.slice(this._bodyArrayBuffer.byteOffset,this._bodyArrayBuffer.byteOffset+this._bodyArrayBuffer.byteLength)):Promise.resolve(this._bodyArrayBuffer))}return this.blob().then(g)}),this.text=function(){var t,r,e,n=v(this);if(n)return n;if(this._bodyBlob)return t=this._bodyBlob,r=new FileReader,e=y(r),r.readAsText(t),e;if(this._bodyArrayBuffer)return Promise.resolve(function(t){for(var r=new Uint8Array(t),e=new Array(r.length),n=0;n<r.length;n++)e[n]=String.fromCharCode(r[n]);return e.join("")}(this._bodyArrayBuffer));if(this._bodyFormData)throw new Error("could not read FormData body as text");return Promise.resolve(this._bodyText)},c&&(this.formData=function(){return this.text().then(O)}),this.json=function(){return this.text().then(JSON.parse)},this}d.prototype.append=function(t,r){t=l(t),r=p(r);var e=this.map[t];this.map[t]=e?e+", "+r:r},d.prototype.delete=function(t){delete this.map[l(t)]},d.prototype.get=function(t){return t=l(t),this.has(t)?this.map[t]:null},d.prototype.has=function(t){return this.map.hasOwnProperty(l(t))},d.prototype.set=function(t,r){this.map[l(t)]=p(r)},d.prototype.forEach=function(t,r){for(var e in this.map)this.map.hasOwnProperty(e)&&t.call(r,this.map[e],e,this)},d.prototype.keys=function(){var t=[];return this.forEach((function(r,e){t.push(e)})),h(t)},d.prototype.values=function(){var t=[];return this.forEach((function(r){t.push(r)})),h(t)},d.prototype.entries=function(){var t=[];return this.forEach((function(r,e){t.push([e,r])})),h(t)},i&&(d.prototype[Symbol.iterator]=d.prototype.entries);var x=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];function w(t,r){if(!(this instanceof w))throw new TypeError('Please use the "new" operator, this DOM object constructor cannot be called as a function.');var e,n,o=(r=r||{}).body;if(t instanceof w){if(t.bodyUsed)throw new TypeError("Already read");this.url=t.url,this.credentials=t.credentials,r.headers||(this.headers=new d(t.headers)),this.method=t.method,this.mode=t.mode,this.signal=t.signal,o||null==t._bodyInit||(o=t._bodyInit,t.bodyUsed=!0)}else this.url=String(t);if(this.credentials=r.credentials||this.credentials||"same-origin",!r.headers&&this.headers||(this.headers=new d(r.headers)),this.method=(e=r.method||this.method||"GET",n=e.toUpperCase(),x.indexOf(n)>-1?n:e),this.mode=r.mode||this.mode||null,this.signal=r.signal||this.signal,this.referrer=null,("GET"===this.method||"HEAD"===this.method)&&o)throw new TypeError("Body not allowed for GET or HEAD requests");if(this._initBody(o),!("GET"!==this.method&&"HEAD"!==this.method||"no-store"!==r.cache&&"no-cache"!==r.cache)){var i=/([?&])_=[^&]*/;if(i.test(this.url))this.url=this.url.replace(i,"$1_="+(new Date).getTime());else{this.url+=(/\?/.test(this.url)?"&":"?")+"_="+(new Date).getTime()}}}function O(t){var r=new FormData;return t.trim().split("&").forEach((function(t){if(t){var e=t.split("="),n=e.shift().replace(/\+/g," "),o=e.join("=").replace(/\+/g," ");r.append(decodeURIComponent(n),decodeURIComponent(o))}})),r}function E(t,r){if(!(this instanceof E))throw new TypeError('Please use the "new" operator, this DOM object constructor cannot be called as a function.');r||(r={}),this.type="default",this.status=void 0===r.status?200:r.status,this.ok=this.status>=200&&this.status<300,this.statusText=void 0===r.statusText?"":""+r.statusText,this.headers=new d(r.headers),this.url=r.url||"",this._initBody(t)}w.prototype.clone=function(){return new w(this,{body:this._bodyInit})},m.call(w.prototype),m.call(E.prototype),E.prototype.clone=function(){return new E(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new d(this.headers),url:this.url})},E.error=function(){var t=new E(null,{status:0,statusText:""});return t.type="error",t};var S=[301,302,303,307,308];E.redirect=function(t,r){if(-1===S.indexOf(r))throw new RangeError("Invalid status code");return new E(null,{status:r,headers:{location:t}})};var j=n.DOMException;try{new j}catch(t){(j=function(t,r){this.message=t,this.name=r;var e=Error(t);this.stack=e.stack}).prototype=Object.create(Error.prototype),j.prototype.constructor=j}function P(t,r){return new Promise((function(e,o){var i=new w(t,r);if(i.signal&&i.signal.aborted)return o(new j("Aborted","AbortError"));var c=new XMLHttpRequest;function s(){c.abort()}c.onload=function(){var t,r,n={status:c.status,statusText:c.statusText,headers:(t=c.getAllResponseHeaders()||"",r=new d,t.replace(/\r?\n[\t ]+/g," ").split("\r").map((function(t){return 0===t.indexOf("\n")?t.substr(1,t.length):t})).forEach((function(t){var e=t.split(":"),n=e.shift().trim();if(n){var o=e.join(":").trim();r.append(n,o)}})),r)};n.url="responseURL"in c?c.responseURL:n.headers.get("X-Request-URL");var o="response"in c?c.response:c.responseText;setTimeout((function(){e(new E(o,n))}),0)},c.onerror=function(){setTimeout((function(){o(new TypeError("Network request failed"))}),0)},c.ontimeout=function(){setTimeout((function(){o(new TypeError("Network request failed"))}),0)},c.onabort=function(){setTimeout((function(){o(new j("Aborted","AbortError"))}),0)},c.open(i.method,function(t){try{return""===t&&n.location.href?n.location.href:t}catch(r){return t}}(i.url),!0),"include"===i.credentials?c.withCredentials=!0:"omit"===i.credentials&&(c.withCredentials=!1),"responseType"in c&&(u?c.responseType="blob":a&&i.headers.get("Content-Type")&&-1!==i.headers.get("Content-Type").indexOf("application/octet-stream")&&(c.responseType="arraybuffer")),!r||"object"!=typeof r.headers||r.headers instanceof d?i.headers.forEach((function(t,r){c.setRequestHeader(r,t)})):Object.getOwnPropertyNames(r.headers).forEach((function(t){c.setRequestHeader(t,p(r.headers[t]))})),i.signal&&(i.signal.addEventListener("abort",s),c.onreadystatechange=function(){4===c.readyState&&i.signal.removeEventListener("abort",s)}),c.send(void 0===i._bodyInit?null:i._bodyInit)}))}P.polyfill=!0,n.fetch||(n.fetch=P,n.Headers=d,n.Request=w,n.Response=E)}},r={};function e(n){var o=r[n];if(void 0!==o)return o.exports;var i=r[n]={exports:{}};return t[n](i,i.exports,e),i.exports}e.d=function(t,r){for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},e.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),e.o=function(t,r){return Object.prototype.hasOwnProperty.call(t,r)},e(5666),e(1150),e(9712),e(7147);e(3053)}();    window.page = undefined;
    window.user = undefined;
</script>

    <script>
        window.orb = {
            worldwideNavlinks: '<li class="orb-nav-homedotcom"><a href="https://www.bbc.com/">Home</a></li><li class="orb-nav-newsdotcom"><a href="https://www.bbc.com/news">News</a></li><li class="orb-nav-sport"><a href="https://www.bbc.com/sport">Sport</a></li><li class="orb-nav-reeldotcom"><a href="https://www.bbc.com/reel">Reel</a></li><li class="orb-nav-worklife"><a href="https://www.bbc.com/worklife">Worklife</a></li><li class="orb-nav-traveldotcom"><a href="https://www.bbc.com/travel">Travel</a></li><li class="orb-nav-future"><a href="https://www.bbc.com/future">Future</a></li><li class="orb-nav-culture"><a href="https://www.bbc.com/culture">Culture</a></li><li class="orb-nav-music"><a href="https://www.bbc.com/culture/music">Music</a></li><li class="orb-nav-tv"><a href="https://www.bbc.co.uk/schedules/p00fzl9m">TV</a></li><li class="orb-nav-weather"><a href="https://www.bbc.com/weather">Weather</a></li><li class="orb-nav-sounds"><a href="https://www.bbc.co.uk/sounds">Sounds</a></li>',
        }
    </script>
    <script src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/api-forge-free.min.js"></script>

<link rel="preload" href="https://static.files.bbci.co.uk/fonts/reith/2.512/BBCReithSans_W_Rg.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="https://static.files.bbci.co.uk/fonts/reith/2.512/BBCReithSans_W_Bd.woff2" as="font" type="font/woff2" crossorigin="">

    
    <!-- navid Web Module: 0.2.0-83.b25d09c -->
    
    
    <!-- searchbox Web Module: 3.0.0-360.499e0e7 -->
    
    
    <!-- navpromo Web Module: 3.0.0-272.f5cddc4 -->
    
    
    <!-- cookies Web Module: 0.0.3-682.bdba111 -->
    
    
    <!-- useractivityhelper Web Module: 1.0.0-209.892bd1e -->
    
    
    <!-- reverb Web Module: 3.3.0 -->
    
    <!-- ads Web Module: 20211005-115145-f94ae3cc3-4.56.0 -->

    
    <link rel="stylesheet" href="https://static.files.bbci.co.uk/account/id-cta/1.54.11/style/id-cta.css"><!--[if IE 8]><link href="https://static.files.bbci.co.uk/account/id-cta/1.54.11/style/ie8.css" rel="stylesheet"/> <![endif]--><script type="text/javascript">(function () {if (!window.require) {throw new Error('idcta: could not find require module');}if (typeof (map) == 'undefined') {var map = {};}if (!!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect) {document.documentElement.className += ' id-svg';}var ptrt = new RegExp("[\\?&]ptrt=([^&]*)").exec(document.location.href);var ENDPOINT_URL = 'https://idcta.api.bbc.co.uk';var ENDPOINT_CONFIG = ('/idcta/config?callback=&ptrt=' + (ptrt ? ptrt[1] : encodeURIComponent(document.location.href))).replace(/\&amp;/g, '&');var ENDPOINT_TRANSLATIONS = '/idcta/translations?callback=';function hasPromise() {var P = window.Promise;var promiseToString = null;if (P) {try {promiseToString = Object.prototype.toString.call(P.resolve());} catch (e) {/*silently ignored*/}}return (promiseToString === '[object Promise]' && !P.cast);}if (hasPromise()) {define('idcta/es6-promise', function () {return window.Promise;});define('idcta-v2/es6-promise', function () {return window.Promise;});}map['idcta-v2'] = 'https://static.files.bbci.co.uk/account/id-cta/1.54.11/modules/idcta-v2';map['idcta-v2/config'] = ENDPOINT_URL + ENDPOINT_CONFIG;map['idcta-v2/translations'] = ENDPOINT_URL + ENDPOINT_TRANSLATIONS;map['idcta'] = 'https://static.files.bbci.co.uk/account/id-cta/1.8.2/modules/idcta';map['idcta-v2/idcta-1'] = 'https://static.files.bbci.co.uk/account/id-cta/1.54.11/modules/idcta-v2/dist/idcta-1.min';map['idcta-v2/experiment-snippet'] = 'https://cdn.optimizely.com/public/4621041136/s/idcta_live';const idctaShim = {deps: ['idcta-v2/idcta-1'],};require({shim: {'idcta-v2/statusbar': idctaShim,'idcta-v2/id-config': idctaShim},map: {'*': {'idcta/idcta-1': 'idcta-v2/idcta-1','idcta': 'idcta-v2',}},paths: map});window.idctaBaseUrl = ENDPOINT_URL;define('idcta/config', ['idcta-v2/config'], function (data) { return data; });define('idcta/translations', ['idcta-v2/translations'], function (data) { return data; });})();</script>

    
    
<link rel="stylesheet" href="https://nav.files.bbci.co.uk/searchbox/eeaabba0195c5483bf5b00915e258921/css/box.css">

    
    
    
    
    
         <script src="https://static.files.bbci.co.uk/cookies/6868f40b6841deedfcf9895de775e1ab/cookie-banner/cookie-library.bundle.js"></script><script type="text/javascript">void 0!==window.define&&define("orb/cookies",function(){return window.bbccookies})</script>  
    
    
    <script type="text/javascript">window.__detectview={clickManagementEnabled:false};</script>
    
    
    <script type="text/javascript">"use strict";!function(){window.__reverbStaticLocation="https://mybbc-analytics.files.bbci.co.uk/reverb-client-js/",window.__smarttagVersion="5.29.1",window.__reverb={},window.__reverb.__reverbLoadedPromise=new Promise(function(e,i){window.__reverb.__resolveReverbLoaded=e,window.__reverb.__rejectReverbLoaded=i}),window.__reverb.__reverbTimeout=setTimeout(function(){window.__reverb.__rejectReverbLoaded()},5e3);var i=function(d,a){window.__reverb.__reverbLoadedPromise.then(function(e){if(d&&d.detail){var i=!!d.detail.item,n=d.detail.label,t=i?"viewability":d.detail.type,o=d.detail.elem,r=d.detail.originalEvent;d.detail.isClick&&(a=d.detail.isClick),e.userActionEvent(t,n,d.detail,o,r,a)}},function(){console.log("Reverb failed to load. Event not sent")})},n=function(){window.__reverb.__reverbLoadedPromise.then(function(e){e.initialise().then(function(){return e.viewEvent()})},function(){console.log("Reverb failed to load. Event not sent")})};document.addEventListener("bbc-user-event",function(e){i(e,!1)}),document.addEventListener("bbc-user-click",function(e){i(e,!0)}),document.addEventListener("bbc-page-updated",n),window.addEventListener("pageshow",function(e){e.persisted&&n()})}();</script><script type="text/javascript" src="https://mybbc-analytics.files.bbci.co.uk/reverb-client-js/reverb-3.3.0.js" async=""></script>
    
    <script type="text/javascript">const adsDebug=/[?|&]ads-debug/.test(window.location.href);var bbcdotcomConfig={},bbcdotcomForgeAsync=!0,googletag=window.googletag||{};googletag.cmd=window.googletag.cmd||[],bbcdotcomScripts=[],tp=window.tp||[],_comscore=window._comscore||[];var bbcdotcom={test:/test/.test(window.location.hostname),adverts:{keyValues:{},breakpoints:{}},advert:{write:function(){},show:function(){},isActive:function(){return!1},layout:function(){return{reset:function(){}}}},config:{init:function(){},isAvailable:function(){return new Promise(function(o){bbcdotcom.resolves?bbcdotcom.resolves.isAvailable.push(o):o(!1)})},isAdsEnabledAsync:function(){return new Promise(function(o){bbcdotcom.resolves?bbcdotcom.resolves.adsEnabled.push(o):o(!1)})},isAnalyticsEnabledAsync:function(){return new Promise(function(o){bbcdotcom.resolves?bbcdotcom.resolves.analyticsEnabled.push(o):o(!1)})},setSections:function(){},setAdsEnabled:function(){},setAnalyticsEnabled:function(){},setAssetPrefix:function(){},setFlagpoles:function(){},setVersion:function(){},setJsPrefix:function(){},setSwfPrefix:function(){},setCssPrefix:function(){},setConfig:function(){},getAssetPrefix:function(){},getJsPrefix:function(){},getSwfPrefix:function(){},getCssPrefix:function(){},isOptimizelyEnabled:function(){},isThirdPartyDisabled:function(){},isThirdPartyDisabledEU:function(){},setEU:function(){}},survey:{init:function(){return!1}},data:{},init:function(){},objects:function(o){return!1},locale:{set:function(){},get:function(){}},setAdKeyValue:function(){},utils:{addEvent:function(){},addHtmlTagClass:function(){},log:function(){}},addLoadEvent:function(){},resolves:{isAvailable:[],adsEnabled:[],analyticsEnabled:[]},resolvePromises:function(){if(bbcdotcom.resolves){for(var o=0;o<bbcdotcom.resolves.isAvailable.length;o++)bbcdotcom.resolves.isAvailable[o](!1);delete bbcdotcom.resolves}},flag:{a:!1,s:!1},asyncCmd:[],isSportApp:function(){var o=window.location.pathname;return void 0!==o&&-1!==o.indexOf(".app")&&0===o.indexOf("/sport")},init:function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.init(o)})},slotAsync:function(o,n,t,c){bbcdotcom.asyncCmd.push(function(){bbcdotcom.slotAsync(o,n,t,c)})}};bbcdotcom.adverts.slotAsync=function(o,n,t){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.slotAsync(o,n,t)})},bbcdotcom.config.isAdsEnabled=function(){var o=window.location.pathname;return void 0===o||0!==o.indexOf("/sport")||-1===o.indexOf(".app")},bbcdotcom.config.isActive=function(){var o=window.location.pathname;return void 0===o||0!==o.indexOf("/sport")||-1===o.indexOf(".app")},bbcdotcom.config.isAnalyticsEnabled=function(){return!0},bbcdotcom.registerAd=function(o,n,t){bbcdotcom.asyncCmd.push(function(){bbcdotcom.registerAd(o,n,t)})},bbcdotcom.setAdUnit=function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.setAdUnit(o)})},bbcdotcom.adverts.adUnit={},bbcdotcom.adverts.adUnit.setUid=function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.adUnit.setUid(o)})},bbcdotcom.setConfig=function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.setConfig(o)})},bbcdotcom.setAdKeyValue=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.setAdKeyValue(o,n)})},bbcdotcom.getFeature=function(){return{isEnabled:function(){return!0}}},bbcdotcom.disableAndCloseOpenAds=function(){bbcdotcom.asyncDisableAndCloseOpenAds=!0},bbcdotcom.setAdKeyValue=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.keyValues.set(o,n)})},bbcdotcom.adverts.keyValues.set=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.keyValues.set(o,n)})},bbcdotcom.adverts.keyValues.unset=function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.keyValues.unset(o)})},bbcdotcom.pubsub={},bbcdotcom.pubsub.on=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.pubsub.on(o,n)})},bbcdotcom.pubsub.off=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.pubsub.off(o,n)})},bbcdotcom.analytics={},bbcdotcom.analytics.page=function(o){bbcdotcom.asyncCmd.push(function(){bbcdotcom.analytics.page(o)})},bbcdotcom.av={emp:{adverts:""}},bbcdotcom.config.isContinuousPlayPage=function(){return!1},bbcdotcom.config.isSportApp=function(){var o=window.location.pathname;return void 0!==o&&-1!==o.indexOf(".app")&&0===o.indexOf("/sport")},bbcdotcom.adverts.breakpoints.setGroupStart=function(o,n){bbcdotcom.asyncCmd.push(function(){bbcdotcom.adverts.breakpoints.setGroupStart(o,n)})},"undefined"!=typeof require&&require({paths:{bbcdotcom:"https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/script"}}),window.bbcdotcom&&bbcdotcom.isSportApp&&!bbcdotcom.isSportApp()&&window.bbcuser.isUKCombined().then(function(o){return o&&!adsDebug?(adsDebug&&console.log("UK location, not ads debug mode, don't load flags, don't load ads."),(o=window.bbcdotcom||{}).config.isAdsEnabled=function(){return!1},o.config.isActive=function(){return!1},o.config.isAnalyticsEnabled=function(){return!1},o.getFeature=function(){return{isEnabled:function(){return!1}}},void o.resolvePromises()):void window.bbcuser.canSeeAdverts().then(function(o){if(!o&&!adsDebug)return adsDebug&&console.log("canSeeAdverts false, not ads debug mode, don't load ads."),(n=window.bbcdotcom||{}).config.isAdsEnabled=function(){return!1},n.config.isActive=function(){return!1},n.config.isAnalyticsEnabled=function(){return!1},n.getFeature=function(){return{isEnabled:function(){return!1}}},void n.resolvePromises();var n=/test/.test(window.location.hostname)?"https://gn-flagpoles.test.api.bbci.co.uk/gnlops":"https://gn-flagpoles.api.bbci.co.uk/gnlops",e=new XMLHttpRequest;e.open("GET",n),e.onload=function(){var n,o,t=JSON.parse(e.responseText),c=window.bbcdotcom||{};c.flag.a="true"===t.adverts?1:0,c.flag.s="true"===t.analytics?1:0,c.flag.a||c.flag.s?(o=/test/.test(window.location.hostname)?"https://gn-flagpoles.test.api.bbci.co.uk/bbcdotcom":"https://gn-flagpoles.api.bbci.co.uk/bbcdotcom",(n=new XMLHttpRequest).open("GET",o),n.onload=function(){var c=JSON.parse(n.responseText),e=window.bbcdotcom||{};[{tp:"thirdPartyEEA"},{d:"adsense"},{asa:"adsportapp"},{l:"lotame"},{p:"platinum"},{g:"grapeshot"},{sh:"sherlock"},{pe:"permutive"},{si:"signin"},{sis:"signinSport"},{sin:"signinNews"},{siw:"signinWWHP"},{piano:"piano"},{fundingchoices_cmp:"fundingchoices_cmp"},{storyworks_cmp:"storyworks_cmp"},{content_rec:"content_rec"},{ias_publisher:"ias_publisher"},{fpd:"fpd"}].forEach(function(o,n){for(var t in o)e.flag[t]="true"===c[o[t]]?1:0}),e.data={ads:e.flag.a,stats:e.flag.s,statsProvider:"",country:""},function(){const o=document.createElement("link");o.href="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/style/bbcdotcom-async.css",o.rel="stylesheet",o.type="text/css",document.head.appendChild(o)}();var o=document.createElement("script"),t=document.head||document.getElementsByTagName("head")[0];o.type="text/javascript",o.async=!0,o.src="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/script/bbcdotcom.js",o.onload=function(){window.bbcuser.getCountry().then(function(o){e.data.country=o,e.assetPrefix="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/",bbcdotcomConfig={assetPrefix:"https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/",staticVersion:"20211005-115145-f94ae3cc3-4.56.0",staticPrefix:"https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/"},e.config.init(bbcdotcomConfig,e.data,window.location,window.document),e.config.setAssetPrefix(bbcdotcomConfig.assetPrefix),e.config.setVersion(bbcdotcomConfig.staticVersion),e.config.setFlagpoles(e.flag);o=!!o&&-1!==["AT","BE","BG","HR","CY","CZ","DK","EE","FI","FR","DE","GR","HU","IE","IT","LV","LT","LU","MT","NL","PL","PT","RO","SK","SI","ES","SE","IS","LI","NO","CH"].indexOf(o.toUpperCase());e.config.setEU(o);var n,o=function(o){var n=document.createElement("link"),t=document.head||document.getElementsByTagName("head")[0];n.href=o,n.rel="dns-prefetch",t.appendChild(n)};e.flag.s&&(o("//secure-us.imrworldwide.com/"),o("//me-cdn.effectivemeasure.net/")),e.flag.a&&(o("//www.googletagservices.com/"),o("//bbc.gscontxt.net/"),(n=document.createElement("meta")).setAttribute("name","google-site-verification"),n.setAttribute("content","auTeTTwSt_KBY_4iDoR00Lwb7-qzx1IgzJy6ztaWgEI"),t.appendChild(n)),e.flag.a&&(e.config.isGrapeshotEnabled()&&!e.config.isWorldService()&&(n=window.location.href.split("?")[0],bbcdotcomScripts.push({src:"https://bbc.gscontxt.net/?url="+encodeURIComponent(n)})),bbcdotcomScripts.push({src:"https://securepubads.g.doubleclick.net/tag/js/gpt.js"}),e.config.isIASEnabled()&&(window.__iasPET=window.__iasPET||{},window.__iasPET.queue=window.__iasPET.queue||[],window.__iasPET.pubId="9708",bbcdotcomScripts.push({src:"https://cdn.adsafeprotected.com/iasPET.1.js"}))),(e.flag.s||e.flag.a)&&(e.config.isPermutiveEnabled()&&!e.config.isWorldService()&&(function(t){if(!t){t=t||{},(window.permutive=t).q=[],t.config={consentRequired:!0},t.config.projectId="e488cdb0-e7cb-4d91-9648-60d437d8e491",t.config.apiKey="1bb84885-9325-4fef-adda-a208032b2715",t.config.environment=t.config.environment||"production";for(var o=["addon","identify","track","trigger","query","segment","segments","ready","on","once","user","consent"],n=0;n<o.length;n++){var c=o[n];t[c]=function(n){return function(){var o=Array.prototype.slice.call(arguments,0);t.q.push({functionName:n,arguments:o})}}(c)}}}((document,window.permutive)),bbcdotcomScripts.push({src:"https://cdn.permutive.com/e488cdb0-e7cb-4d91-9648-60d437d8e491-web.js"})),bbcdotcomScripts.forEach(function(o){var n=document.createElement("script");n.async=!1,o.id&&(n.id=o.id),n.src=o.src,t.appendChild(n)}),window.bbcdotcom.config.isCmpEnabled()?(window.googlefc=window.googlefc||{},window.googlefc.callbackQueue=window.googlefc.callbackQueue||[],new Promise(function(t){window.googlefc.callbackQueue.push({CONSENT_DATA_READY:function(){window.__tcfapi("getTCData",2,function(o,n){n&&o.gdprApplies&&(window.bbcdotcom.consent={},window.bbcdotcom.gdprApplies=!0,window.bbcdotcom.consent.comscore=o.vendor.consents[77],window.bbcdotcom.consent.permutive=o.vendor.consents[360]&&o.vendor.consents[361],window.bbcdotcom.consent.googleads=o.vendor.consents[755],window.bbcdotcom.consent.nielsen=o.vendor.consents[373]&&o.vendor.consents[812],t(!0)),t(!0)},[77,164,360,361,373,755,812])}})}).then(function(){for(window.bbcdotcom.consentChecked=!0,window.bbcdotcom.asyncDisableAndCloseOpenAds&&window.bbcdotcom.asyncCmd.unshift(function(){window.bbcdotcom.disableAndCloseOpenAds()});window.bbcdotcom.asyncCmd&&0<window.bbcdotcom.asyncCmd.length;)window.bbcdotcom.asyncCmd.shift()()}),function(){const o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src="https://gn-web-assets.api.bbc.com/ngas/vendor/fundingchoices/cmp.js",document.head.appendChild(o)}()):function(){for(;window.bbcdotcom.asyncCmd&&0<window.bbcdotcom.asyncCmd.length;)window.bbcdotcom.asyncCmd.shift()()}()),window.adsDebug&&adsDebug&&console.log("bbcdotcom up and running...")})},t.appendChild(o)},n.onerror=function(){var o;(o=window.bbcdotcom||{}).config.isAdsEnabled=function(){return!1},o.config.isActive=function(){return!1},o.config.isAnalyticsEnabled=function(){return!1},o.getFeature=function(){return{isEnabled:function(){return!1}}},o.resolvePromises()},n.send()):((o=window.bbcdotcom||{}).config.isAdsEnabled=function(){return!1},o.config.isActive=function(){return!1},o.config.isAnalyticsEnabled=function(){return!1},o.getFeature=function(){return{isEnabled:function(){return!1}}},o.resolvePromises())},e.onerror=function(){var o;(o=window.bbcdotcom||{}).config.isAdsEnabled=function(){return!1},o.config.isActive=function(){return!1},o.config.isAnalyticsEnabled=function(){return!1},o.getFeature=function(){return{isEnabled:function(){return!1}}},o.resolvePromises()},e.send()})});</script>

      
      <style>/* stylelint-disable property-no-unknown */

.styled-line {
  background-color: #8beed9;
  height: 3px;
  width: 72px;
}

.styled-line--small {
  width: 45px;
}

.styled-line--medium {
  width: 135px;
}

.styled-line--large {
  height: 1px;
  width: auto;
}

.styled-line--height--large {
  height: 5px;
}

.styled-line--height--small {
  height: 1px;
}

.styled-line--xs-small {
  width: 25px;
}

.styled-line--worklife {
  background-color: #8beed9;
}

.styled-line--future {
  background-color: #ffc857;
}

.styled-line--culture {
  background-color: #472479;
}

.styled-line--earth {
  background-color: #002856;
}

.styled-line--travel {
  background-color: #002856;
}

.styled-line--white {
  background-color: #fff;
}

.styled-line--dark-grey {
  background-color: #6a6a6a;
}

.styled-line--light-grey {
  background-color: #4b4b4b;
}

.styled-line--grey {
  background-color: #dedede;
}

.article-intro {
  position: relative;
}

.article-intro__line {
  margin-top: 24px;
}

/* stylelint-disable property-no-unknown */

@font-face {
  font-family: 'CuriousSansBold';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.b389ec59.eot), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.b389ec59.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.ba46d70f.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-core';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.cc52df12.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.cc52df12.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.5435c223.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-media';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.41063609.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.41063609.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.28e9b877.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-social';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.523533c6.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.523533c6.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.407b297d.ttf) format("truetype");
}

.gelicon {
  font-family: 'gelicons-core';
}

.gelicon,
.gelicon::before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-style: normal !important;
  font-weight: normal !important;
  speak: none;
  text-decoration: none !important;
}

.gelicon--leading::before {
  margin-right: 8px;
}

.gelicon--trailing::before {
  margin-left: 8px;
}

.gelicon--social {
  font-family: 'gelicons-social' !important;
}

.gelicon--core {
  font-family: 'gelicons-core' !important;
}

/* Set font on all icons (need to do this as Opera doesn't fallback per Glyph) */

/* On the icon, not ::before as IE7 hack injects the icon into the element instead of a pseudo element */

.gelicon--iplayer,
.gelicon--iplayer-radio,
.gelicon--previous,
.gelicon--up,
.gelicon--down,
.gelicon--next,
.gelicon--tobottom,
.gelicon--totop,
.gelicon--zoomin,
.gelicon--zoomout,
.gelicon--search,
.gelicon--print,
.gelicon--print-invert,
.gelicon--yes,
.gelicon--no,
.gelicon--add,
.gelicon--help,
.gelicon--info,
.gelicon--alert,
.gelicon--expires,
.gelicon--duration,
.gelicon--alarm,
.gelicon--countdown,
.gelicon--grid,
.gelicon--chapters,
.gelicon--list,
.gelicon--listthumb,
.gelicon--lock,
.gelicon--unlock,
.gelicon--home,
.gelicon--new,
.gelicon--vocab,
.gelicon--degraded,
.gelicon--calendar-mini,
.gelicon--calendar,
.gelicon--mail,
.gelicon--location,
.gelicon--load,
.gelicon--settings,
.gelicon--embed,
.gelicon--external,
.gelicon--traffic,
.gelicon--refresh,
.gelicon--link,
.gelicon--point,
.gelicon--upload,
.gelicon--download,
.gelicon--finder,
.gelicon--stations,
.gelicon--untitled,
.gelicon--untitled-2,
.gelicon--quote,
.gelicon--calendar-30,
.gelicon--download-desktop,
.gelicon--map,
.gelicon--previous-alternative,
.gelicon--next-alternative,
.gelicon--arrow-down {
  font-family: 'gelicons-core' !important;
}

/* Begin Icons */

.gelicon--iplayer::before {
  content: '\e000';
}

.gelicon--iplayer-radio::before {
  content: '\e001';
}

.gelicon--previous::before {
  content: '\e002';
}

.gelicon--up::before {
  content: '\e003';
}

.gelicon--down::before {
  content: '\e004';
}

.gelicon--next::before {
  content: '\e005';
}

.gelicon--tobottom::before {
  content: '\e006';
}

.gelicon--totop::before {
  content: '\e007';
}

.gelicon--zoomin::before {
  content: '\e008';
}

.gelicon--zoomout::before {
  content: '\e00a';
}

.gelicon--search::before {
  content: '\e009';
}

.gelicon--print::before {
  content: '\e00b';
}

.gelicon--print-invert::before {
  content: '\e00c';
}

.gelicon--yes::before {
  content: '\e00d';
}

.gelicon--no::before {
  content: '\e00e';
}

.gelicon--add::before {
  content: '\e00f';
}

.gelicon--help::before {
  content: '\e010';
}

.gelicon--info::before {
  content: '\e011';
}

.gelicon--alert::before {
  content: '\e012';
}

.gelicon--expires::before {
  content: '\e013';
}

.gelicon--duration::before {
  content: '\e014';
}

.gelicon--alarm::before {
  content: '\e015';
}

.gelicon--countdown::before {
  content: '\e016';
}

.gelicon--grid::before {
  content: '\e017';
}

.gelicon--chapters::before {
  content: '\e018';
}

.gelicon--list::before {
  content: '\e019';
}

.gelicon--listthumb::before {
  content: '\e01a';
}

.gelicon--lock::before {
  content: '\e01b';
}

.gelicon--unlock::before {
  content: '\e01c';
}

.gelicon--home::before {
  content: '\e01d';
}

.gelicon--new::before {
  content: '\e01e';
}

.gelicon--vocab::before {
  content: '\e01f';
}

.gelicon--degraded::before {
  content: '\e020';
}

.gelicon--calendar-mini::before {
  content: '\e021';
}

.gelicon--calendar::before {
  content: '\e022';
}

.gelicon--mail::before {
  content: '\e023';
}

.gelicon--location::before {
  content: '\e024';
}

.gelicon--load::before {
  content: '\e025';
}

.gelicon--settings::before {
  content: '\e026';
}

.gelicon--embed::before {
  content: '\e027';
}

.gelicon--external::before {
  content: '\e028';
}

.gelicon--traffic::before {
  content: '\e029';
}

.gelicon--refresh::before {
  content: '\e02a';
}

.gelicon--link::before {
  content: '\e02b';
}

.gelicon--point::before {
  content: '\e02c';
}

.gelicon--upload::before {
  content: '\e02d';
}

.gelicon--download::before {
  content: '\e02e';
}

.gelicon--finder::before {
  content: '\e02f';
}

.gelicon--stations::before {
  content: '\e030';
}

.gelicon--untitled::before {
  content: '\42';
}

.gelicon--untitled-2::before {
  content: '\43';
}

.gelicon--quote::before {
  content: '\22';
}

.gelicon--playlister-add::before {
  content: '\e031';
}

.gelicon--calendar-30::before {
  content: '\e032';
}

.gelicon--download-desktop::before {
  content: '\e033';
}

.gelicon--map::before {
  content: '\e034';
}

.gelicon--previous-alternative::before {
  content: '\e035';
}

.gelicon--next-alternative::before {
  content: '\e036';
}

.gelicon--arrow-down::before {
  content: '\e038';
}

/* Media icons */

.gelicon--menu,
.gelicon--live,
.gelicon--subtitles,
.gelicon--ws,
.gelicon--sd,
.gelicon--hd,
.gelicon--bsl,
.gelicon--ad,
.gelicon--3d,
.gelicon--tv,
.gelicon--radio,
.gelicon--mobile,
.gelicon--desktop,
.gelicon--game,
.gelicon--tablet,
.gelicon--quiz,
.gelicon--guidance,
.gelicon--record,
.gelicon--listen,
.gelicon--play,
.gelicon--pause,
.gelicon--rewind,
.gelicon--forward,
.gelicon--restart,
.gelicon--image,
.gelicon--document,
.gelicon--slideshow,
.gelicon--activity,
.gelicon--360,
.gelicon--podcast,
.gelicon--newsletter,
.gelicon--rss,
.gelicon--fullscreen,
.gelicon--expand,
.gelicon--popout,
.gelicon--mute,
.gelicon--music-on,
.gelicon--music-off,
.gelicon--windows,
.gelicon--apple,
.gelicon--interactive {
  font-family: 'gelicons-media' !important;
}

/* Begin Icons */

.gelicon--menu::before {
  content: '\e900';
}

.gelicon--live::before {
  content: '\e100';
}

.gelicon--subtitles::before {
  content: '\e101';
}

.gelicon--ws::before {
  content: '\e102';
}

.gelicon--sd::before {
  content: '\e103';
}

.gelicon--hd::before {
  content: '\e104';
}

.gelicon--bsl::before {
  content: '\e105';
}

.gelicon--ad::before {
  content: '\e106';
}

.gelicon--3d::before {
  content: '\e107';
}

.gelicon--tv::before {
  content: '\e108';
}

.gelicon--radio::before {
  content: '\e109';
}

.gelicon--mobile::before {
  content: '\e10a';
}

.gelicon--desktop::before {
  content: '\e10b';
}

.gelicon--game::before {
  content: '\e10c';
}

.gelicon--tablet::before {
  content: '\e10d';
}

.gelicon--quiz::before {
  content: '\e10e';
}

.gelicon--guidance::before {
  content: '\e10f';
}

.gelicon--record::before {
  content: '\e110';
}

.gelicon--listen::before {
  content: '\e111';
}

.gelicon--play::before {
  content: '\e112';
}

.gelicon--pause::before {
  content: '\e113';
}

.gelicon--rewind::before {
  content: '\e114';
}

.gelicon--forward::before {
  content: '\e115';
}

.gelicon--restart::before {
  content: '\e116';
}

.gelicon--image::before {
  content: '\e117';
}

.gelicon--document::before {
  content: '\e118';
}

.gelicon--slideshow::before {
  content: '\e119';
}

.gelicon--activity::before {
  content: '\e11a';
}

.gelicon--360::before {
  content: '\e11b';
}

.gelicon--podcast::before {
  content: '\e11c';
}

.gelicon--newsletter::before {
  content: '\e11d';
}

.gelicon--rss::before {
  content: '\e11e';
}

.gelicon--fullscreen::before {
  content: '\e11f';
}

.gelicon--expand::before {
  content: '\e120';
}

.gelicon--popout::before {
  content: '\e121';
}

.gelicon--mute::before {
  content: '\e122';
}

.gelicon--music-on::before {
  content: '\e123';
}

.gelicon--music-off::before {
  content: '\e124';
}

.gelicon--windows::before {
  content: '\e125';
}

.gelicon--apple::before {
  content: '\e126';
}

.gelicon--interactive::before {
  content: '\e900';
}

/* Social Icons */

.gelicon--share,
.gelicon--recommend,
.gelicon--comments,
.gelicon--blog,
.gelicon--smiley,
.gelicon--love,
.gelicon--twitter,
.gelicon--facebook,
.gelicon--google-plus,
.gelicon--google,
.gelicon--spotify,
.gelicon--pinterest,
.gelicon--tumblr,
.gelicon--stumbleupon,
.gelicon--linkedin,
.gelicon--reddit,
.gelicon--digg,
.gelicon--instagram,
.gelicon--whatsapp {
  font-family: 'gelicons-social' !important;
}

/* GEL */

.gelicon--share::before {
  content: '\e200';
}

.gelicon--recommend::before {
  content: '\e201';
}

.gelicon--comments::before {
  content: '\e202';
}

.gelicon--blog::before {
  content: '\e203';
}

.gelicon--smiley::before {
  content: '\e204';
}

.gelicon--love::before {
  content: '\e205';
}

/* THIRD PARTY */

.gelicon--twitter::before {
  content: '\e300';
}

.gelicon--facebook::before {
  content: '\e301';
}

.gelicon--google-plus::before {
  content: '\e700';
}

.gelicon--google::before {
  content: '\e701';
}

.gelicon--spotify::before {
  content: '\e304';
}

.gelicon--pinterest::before {
  content: '\e305';
}

.gelicon--tumblr::before {
  content: '\e306';
}

.gelicon--stumbleupon::before {
  content: '\e307';
}

.gelicon--linkedin::before {
  content: '\e308';
}

.gelicon--reddit::before {
  content: '\e309';
}

.gelicon--digg::before {
  content: '\e30a';
}

.gelicon--instagram::before {
  content: '\e30b';
}

.gelicon--whatsapp::before {
  content: '\e600';
}

.mapboxgl-map {
  font: 12px/20px Helvetica Neue,Arial,Helvetica,sans-serif;
  overflow: hidden;
  position: relative;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.mapboxgl-canvas {
  position: absolute;
  left: 0;
  top: 0;
}

.mapboxgl-map:-webkit-full-screen {
  width: 100%;
  height: 100%;
}

.mapboxgl-canary {
  background-color: salmon;
}

.mapboxgl-canvas-container.mapboxgl-interactive,
.mapboxgl-ctrl-group button.mapboxgl-ctrl-compass {
  cursor: -webkit-grab;
  cursor: grab;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.mapboxgl-canvas-container.mapboxgl-interactive.mapboxgl-track-pointer {
  cursor: pointer;
}

.mapboxgl-canvas-container.mapboxgl-interactive:active,
.mapboxgl-ctrl-group button.mapboxgl-ctrl-compass:active {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}

.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate,
.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate .mapboxgl-canvas {
  -ms-touch-action: pan-x pan-y;
  touch-action: pan-x pan-y;
}

.mapboxgl-canvas-container.mapboxgl-touch-drag-pan,
.mapboxgl-canvas-container.mapboxgl-touch-drag-pan .mapboxgl-canvas {
  -ms-touch-action: pinch-zoom;
  touch-action: pinch-zoom;
}

.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate.mapboxgl-touch-drag-pan,
.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate.mapboxgl-touch-drag-pan .mapboxgl-canvas {
  -ms-touch-action: none;
  touch-action: none;
}

.mapboxgl-ctrl-bottom-left,
.mapboxgl-ctrl-bottom-right,
.mapboxgl-ctrl-top-left,
.mapboxgl-ctrl-top-right {
  position: absolute;
  pointer-events: none;
  z-index: 2;
}

.mapboxgl-ctrl-top-left {
  top: 0;
  left: 0;
}

.mapboxgl-ctrl-top-right {
  top: 0;
  right: 0;
}

.mapboxgl-ctrl-bottom-left {
  bottom: 0;
  left: 0;
}

.mapboxgl-ctrl-bottom-right {
  right: 0;
  bottom: 0;
}

.mapboxgl-ctrl {
  clear: both;
  pointer-events: auto;
  -webkit-transform: translate(0);
  transform: translate(0);
}

.mapboxgl-ctrl-top-left .mapboxgl-ctrl {
  margin: 10px 0 0 10px;
  float: left;
}

.mapboxgl-ctrl-top-right .mapboxgl-ctrl {
  margin: 10px 10px 0 0;
  float: right;
}

.mapboxgl-ctrl-bottom-left .mapboxgl-ctrl {
  margin: 0 0 10px 10px;
  float: left;
}

.mapboxgl-ctrl-bottom-right .mapboxgl-ctrl {
  margin: 0 10px 10px 0;
  float: right;
}

.mapboxgl-ctrl-group {
  border-radius: 4px;
  background: #fff;
}

.mapboxgl-ctrl-group:not(:empty) {
  -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl-group:not(:empty) {
    -webkit-box-shadow: 0 0 0 2px ButtonText;
    box-shadow: 0 0 0 2px ButtonText;
  }
}

.mapboxgl-ctrl-group button {
  width: 29px;
  height: 29px;
  display: block;
  padding: 0;
  outline: none;
  border: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  background-color: transparent;
  cursor: pointer;
}

.mapboxgl-ctrl-group button + button {
  border-top: 1px solid #ddd;
}

.mapboxgl-ctrl button .mapboxgl-ctrl-icon {
  display: block;
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl-icon {
    background-color: transparent;
  }

  .mapboxgl-ctrl-group button + button {
    border-top: 1px solid ButtonText;
  }
}

.mapboxgl-ctrl button::-moz-focus-inner {
  border: 0;
  padding: 0;
}

.mapboxgl-ctrl-group button:focus {
  -webkit-box-shadow: 0 0 2px 2px #0096ff;
  box-shadow: 0 0 2px 2px #0096ff;
}

.mapboxgl-ctrl button:disabled {
  cursor: not-allowed;
}

.mapboxgl-ctrl button:disabled .mapboxgl-ctrl-icon {
  opacity: .25;
}

.mapboxgl-ctrl button:not(:disabled):hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.mapboxgl-ctrl-group button:focus:focus-visible {
  -webkit-box-shadow: 0 0 2px 2px #0096ff;
  box-shadow: 0 0 2px 2px #0096ff;
}

.mapboxgl-ctrl-group button:focus:not(:focus-visible) {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.mapboxgl-ctrl-group button:focus:first-child {
  border-radius: 4px 4px 0 0;
}

.mapboxgl-ctrl-group button:focus:last-child {
  border-radius: 0 0 4px 4px;
}

.mapboxgl-ctrl-group button:focus:only-child {
  border-radius: inherit;
}

.mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23ccc'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23999'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23ccc'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23aaa'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active-error .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e58978'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background-error .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e54e33'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-waiting .mapboxgl-ctrl-icon {
  -webkit-animation: mapboxgl-spin 2s linear infinite;
  animation: mapboxgl-spin 2s linear infinite;
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23999'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active-error .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e58978'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background-error .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e54e33'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23666'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
  }
}

@-webkit-keyframes mapboxgl-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(1turn);
  }
}

@keyframes mapboxgl-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(1turn);
    transform: rotate(1turn);
  }
}

a.mapboxgl-ctrl-logo {
  width: 88px;
  height: 23px;
  margin: 0 0 -4px -4px;
  display: block;
  background-repeat: no-repeat;
  cursor: pointer;
  overflow: hidden;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg opacity='.3' stroke='%23000' stroke-width='3'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cg opacity='.9' fill='%23fff'%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");
}

a.mapboxgl-ctrl-logo.mapboxgl-compact {
  width: 23px;
}

@media (-ms-high-contrast: active) {
  a.mapboxgl-ctrl-logo {
    background-color: transparent;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg stroke='%23000' stroke-width='3'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cg fill='%23fff'%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  a.mapboxgl-ctrl-logo {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg stroke='%23fff' stroke-width='3' fill='%23fff'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
  padding: 0 5px;
  background-color: rgba(255, 255, 255, 0.5);
  margin: 0;
}

@media screen {
  .mapboxgl-ctrl-attrib.mapboxgl-compact {
    min-height: 20px;
    padding: 0;
    margin: 10px;
    position: relative;
    background-color: #fff;
    border-radius: 3px 12px 12px 3px;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:hover {
    padding: 2px 24px 2px 4px;
    visibility: visible;
    margin-top: 6px;
  }

  .mapboxgl-ctrl-bottom-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:hover,
  .mapboxgl-ctrl-top-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:hover {
    padding: 2px 4px 2px 24px;
    border-radius: 12px 3px 3px 12px;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact .mapboxgl-ctrl-attrib-inner {
    display: none;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:hover .mapboxgl-ctrl-attrib-inner {
    display: block;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    content: "";
    cursor: pointer;
    position: absolute;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
    background-color: rgba(255, 255, 255, 0.5);
    width: 24px;
    height: 24px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 12px;
  }

  .mapboxgl-ctrl-bottom-right > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    bottom: 0;
    right: 0;
  }

  .mapboxgl-ctrl-top-right > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    top: 0;
    right: 0;
  }

  .mapboxgl-ctrl-top-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    top: 0;
    left: 0;
  }

  .mapboxgl-ctrl-bottom-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    bottom: 0;
    left: 0;
  }
}

@media screen and (-ms-high-contrast: active) {
  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' fill='%23fff'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
  }
}

@media screen and (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl-attrib a {
  color: rgba(0, 0, 0, 0.75);
  text-decoration: none;
}

.mapboxgl-ctrl-attrib a:hover {
  color: inherit;
  text-decoration: underline;
}

.mapboxgl-ctrl-attrib .mapbox-improve-map {
  font-weight: 700;
  margin-left: 2px;
}

.mapboxgl-attrib-empty {
  display: none;
}

.mapboxgl-ctrl-scale {
  background-color: rgba(255, 255, 255, 0.75);
  font-size: 10px;
  border: 2px solid #333;
  border-top: #333;
  padding: 0 5px;
  color: #333;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.mapboxgl-popup {
  position: absolute;
  top: 0;
  left: 0;
  display: -ms-flexbox;
  display: flex;
  will-change: transform;
  pointer-events: none;
}

.mapboxgl-popup-anchor-top,
.mapboxgl-popup-anchor-top-left,
.mapboxgl-popup-anchor-top-right {
  -ms-flex-direction: column;
  flex-direction: column;
}

.mapboxgl-popup-anchor-bottom,
.mapboxgl-popup-anchor-bottom-left,
.mapboxgl-popup-anchor-bottom-right {
  -ms-flex-direction: column-reverse;
  flex-direction: column-reverse;
}

.mapboxgl-popup-anchor-left {
  -ms-flex-direction: row;
  flex-direction: row;
}

.mapboxgl-popup-anchor-right {
  -ms-flex-direction: row-reverse;
  flex-direction: row-reverse;
}

.mapboxgl-popup-tip {
  width: 0;
  height: 0;
  border: 10px solid transparent;
  z-index: 1;
}

.mapboxgl-popup-anchor-top .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-top: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-top-left .mapboxgl-popup-tip {
  -ms-flex-item-align: start;
  align-self: flex-start;
  border-top: none;
  border-left: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-top-right .mapboxgl-popup-tip {
  -ms-flex-item-align: end;
  align-self: flex-end;
  border-top: none;
  border-right: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-bottom .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-bottom: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-tip {
  -ms-flex-item-align: start;
  align-self: flex-start;
  border-bottom: none;
  border-left: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-tip {
  -ms-flex-item-align: end;
  align-self: flex-end;
  border-bottom: none;
  border-right: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-left .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-left: none;
  border-right-color: #fff;
}

.mapboxgl-popup-anchor-right .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-right: none;
  border-left-color: #fff;
}

.mapboxgl-popup-close-button {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0 3px 0 0;
  cursor: pointer;
  background-color: transparent;
}

.mapboxgl-popup-close-button:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.mapboxgl-popup-content {
  position: relative;
  background: #fff;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  padding: 10px 10px 15px;
  pointer-events: auto;
}

.mapboxgl-popup-anchor-top-left .mapboxgl-popup-content {
  border-top-left-radius: 0;
}

.mapboxgl-popup-anchor-top-right .mapboxgl-popup-content {
  border-top-right-radius: 0;
}

.mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-content {
  border-bottom-left-radius: 0;
}

.mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-content {
  border-bottom-right-radius: 0;
}

.mapboxgl-popup-track-pointer {
  display: none;
}

.mapboxgl-popup-track-pointer * {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.mapboxgl-map:hover .mapboxgl-popup-track-pointer {
  display: -ms-flexbox;
  display: flex;
}

.mapboxgl-map:active .mapboxgl-popup-track-pointer {
  display: none;
}

.mapboxgl-marker {
  position: absolute;
  top: 0;
  left: 0;
  will-change: transform;
}

.mapboxgl-user-location-dot,
.mapboxgl-user-location-dot:before {
  background-color: #1da1f2;
  width: 15px;
  height: 15px;
  border-radius: 50%;
}

.mapboxgl-user-location-dot:before {
  content: "";
  position: absolute;
  -webkit-animation: mapboxgl-user-location-dot-pulse 2s infinite;
  animation: mapboxgl-user-location-dot-pulse 2s infinite;
}

.mapboxgl-user-location-dot:after {
  border-radius: 50%;
  border: 2px solid #fff;
  content: "";
  height: 19px;
  left: -2px;
  position: absolute;
  top: -2px;
  width: 19px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.35);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.35);
}

@-webkit-keyframes mapboxgl-user-location-dot-pulse {
  0% {
    -webkit-transform: scale(1);
    opacity: 1;
  }

  70% {
    -webkit-transform: scale(3);
    opacity: 0;
  }

  to {
    -webkit-transform: scale(1);
    opacity: 0;
  }
}

@keyframes mapboxgl-user-location-dot-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }

  70% {
    -webkit-transform: scale(3);
    transform: scale(3);
    opacity: 0;
  }

  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}

.mapboxgl-user-location-dot-stale {
  background-color: #aaa;
}

.mapboxgl-user-location-dot-stale:after {
  display: none;
}

.mapboxgl-user-location-accuracy-circle {
  background-color: rgba(29, 161, 242, 0.2);
  width: 1px;
  height: 1px;
  border-radius: 100%;
}

.mapboxgl-crosshair,
.mapboxgl-crosshair .mapboxgl-interactive,
.mapboxgl-crosshair .mapboxgl-interactive:active {
  cursor: crosshair;
}

.mapboxgl-boxzoom {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  background: #fff;
  border: 2px dotted #202020;
  opacity: .5;
}

@media print {
  .mapbox-improve-map {
    display: none;
  }
}

/* stylelint-disable property-no-unknown */

.partner-module {
  border-bottom: 1px solid #472479;
  border-top: 0;
}

.partner-module__link,
.partner-module__link:visited {
  -ms-flex-align: center;
  align-items: center;
  color: #444;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0;
  text-decoration: none;
}

.partner-module__link:hover {
  background-color: #f5f5f5;
}

.partner-module__heading {
  display: inline-block;
  font-size: 16px;
  line-height: 22px;
  margin: 16px 0;
}

.partner-module__partner-name {
  font-weight: bold;
}

.partner-module__partner-logo {
  display: block;
  height: 31px;
  margin: 12px 0;
  margin-left: 17px;
  width: 88px;
}

/* stylelint-disable property-no-unknown */

.author-unit {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: 14px;
  letter-spacing: -0.1px;
  line-height: 35px;
}

.author-unit--small-mobile {
  line-height: 30px;
}

.author-unit .author-unit__container {
  color: #4a4a4a;
  margin: 0 auto;
}

.author-unit .author-unit__container--desktop {
  margin: 0;
}

.author-unit__container {
  -ms-flex-align: baseline;
  align-items: baseline;
  display: -ms-flexbox;
  display: flex;
  padding: 10px 0;
}

.author-unit__text {
  font-style: italic;
  font-weight: 600;
  padding-right: 10px;
  text-decoration: none;
}

.author-unit__icon {
  color: #6a6a6a;
  padding-right: 14px;
  position: relative;
  text-decoration: none;
  top: 1px;
}

.author-unit__icon:hover {
  color: #00bbf2;
}

/* stylelint-disable property-no-unknown */

.uppercase-label {
  color: #8f8d8d;
  font-size: 12px;
  font-style: condensed;
  font-weight: bold;
  letter-spacing: 1px;
  line-height: 16px;
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}

.uppercase-label--small {
  font-size: 11px;
  font-weight: 400;
  line-height: 14px;
  margin: 0;
}

.uppercase-label--medium {
  font-size: 14px;
  line-height: 18px;
}

.uppercase-label--reith-condensed {
  font-weight: 400;
}

.uppercase-label--white {
  color: #ebebeb;
}

.uppercase-label--light-grey {
  color: #999;
}

.uppercase-label--dark-grey {
  color: #444;
}

.uppercase-label--large {
  font-size: 16px;
  line-height: 18px;
}

.uppercase-label--true-white {
  color: #fff;
  text-shadow: 0 1px 1px #193e6d;
}

.uppercase-label--arial {
  font-family: Arial;
}

.label-with-line {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.label-with-line__label {
  margin: 0 16px 0 0;
}

.body-text-card-inline-video {
  margin: 24px 0;
  position: relative;
}

/* stylelint-disable property-no-unknown */

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.spinner {
  fill: #444;
}

.spinner__image {
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}

.spinner--worklife {
  fill: #8beed9;
}

.spinner--future {
  fill: #ffc857;
}

.spinner--culture {
  fill: #472479;
}

.spinner--travel {
  fill: #002856;
}

.spinner--earth {
  fill: #002856;
}

.spinner--white {
  fill: #fff;
}

.spinner--audio {
  height: 32px;
  width: 32px;
}

/* stylelint-disable property-no-unknown */

/* stylelint-disable property-no-unknown */

.inline-video {
  height: 100%;
}

.inline-video__container {
  position: relative;
}

.inline-video__border-line {
  padding: 0 10px;
}

.inline-video .play-button__inline-video {
  bottom: 0;
  left: 0;
  position: absolute;
  z-index: 1000;
}

.inline-video__smp {
  background-color: #000;
  padding-bottom: 56.25%;
}

.inline-video__smp--loaded {
  background-color: unset;
  padding-bottom: unset;
}

.inline-video__description {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  color: #737373;
  font-size: 16px;
  font-style: italic;
  line-height: 24px;
  margin: 0 10px 0 3%;
  padding: 20px 0 12px;
}

.inline-video__description--desktop {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  margin: 0 18px;
  padding: 28px 0 18px;
}

/* stylelint-disable property-no-unknown */

.inline-image__description {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  font-style: italic;
  margin: 0 10px;
  padding: 20px 0 12px;
}

.inline-image__description--desktop {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  margin: 0 18px;
  padding: 20px 0 18px;
}

.inline-image img {
  border-radius: 0;
}

/* stylelint-disable property-no-unknown */

.inline-quote {
  border-left: 3px solid #575757;
  color: #575757;
  font-style: italic;
  letter-spacing: -1.69px;
  line-height: 32px;
  margin: 0;
  padding-left: 22px;
}

.inline-quote--worklife {
  border-left: 3px solid #8beed9;
}

.inline-quote--future {
  border-left: 3px solid #ffc857;
}

.inline-quote--culture {
  border-left: 3px solid #472479;
}

.inline-quote--earth {
  border-left: 3px solid #002856;
}

.inline-quote h2 {
  font-weight: 300;
}

/* stylelint-disable property-no-unknown */

.inline-audio-player {
  background: none;
}

.inline-audio-player__smp-container {
  display: inline-block;
  width: 100%;
}

.inline-audio-player__smp-container > div {
  /* CreateSMPAudio */
  display: inline-block;
  width: 100%;
}

.inline-audio-player__smp-container > div > div {
  height: 50px;
  position: relative;
  /* stylelint-disable-next-line selector-max-compound-selectors */
}

.inline-audio-player__smp-container > div > div > div {
  padding: 0 !important;
}

.inline-audio-player__container {
  display: -ms-flexbox;
  display: flex;
}

.inline-audio-player__cta-holder {
  -ms-flex-align: center;
  align-items: center;
  background-color: #ededed;
  display: -ms-flexbox;
  display: flex;
  padding-right: 8px;
}

.inline-audio-player__cta-container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.inline-audio-player__cta-container.initialising * {
  cursor: initial;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.inline-audio-player__cta-container.initialising button {
  opacity: 0.6;
}

.inline-audio-player__text {
  background: none;
  border: 0;
  color: #222;
  cursor: pointer;
  font-size: 18px;
  height: 25px;
  letter-spacing: -0.1px;
  line-height: 25px;
  margin-left: 12px;
  outline: inherit;
  padding: 0;
}

.inline-audio-player__text--offline {
  cursor: default;
  pointer-events: none;
}

.inline-audio-player__disclaimer {
  background-color: #e6711b;
  color: #fff;
  cursor: pointer;
  height: 25px;
  left: -110px;
  line-height: 12px;
  margin-left: 0;
  padding: 0 7px;
  position: relative;
  top: 25px;
  width: 66px;
}

.inline-audio-player__disclaimer:hover .inline-audio-player__arrow {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.inline-audio-player__inner-arrow {
  color: #4d4d49;
  font-size: 10px;
}

.inline-audio-player__arrow-button {
  background-color: transparent;
  border: 0;
  margin-left: auto;
  outline: none;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.inline-audio-player__arrow-button__open {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.inline-audio-player__disclaimer-copy {
  color: #444;
  display: block;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 17px;
  margin-top: 16px;
}

.inline-audio-player__arrow {
  border: solid #fff;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  top: -1px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.inline-audio-player__hidden {
  display: none;
}

.inline-audio-player .collapsible-container {
  background-color: #ededed;
  color: #444;
  font-size: 16px;
  line-height: 24px;
  padding: 1rem;
}

.inline-audio-player .collapsible-container__hide {
  display: none;
}

.inline-audio-player .previous-button__inline-audio {
  margin-right: 1px;
}

.inline-audio-player__line {
  margin-top: 16px;
}

.inline-audio-player .previous-media-button {
  height: 50px;
  margin-right: 1px;
  width: 50px;
}

.inline-audio-player .previous-button__inline-audio {
  margin-right: 1px;
}

.copyright__text {
  color: #737373;
  font-size: 16px;
  font-style: italic;
  line-height: 24px;
  margin-bottom: 10px;
  text-align: center;
}

@media (max-width: 767px) {
  .copyright__text {
    margin-top: 12px;
  }
}

.content-embed {
  width: 100%;
}

.infographic-embed__frame {
  width: 100%;
}

/* stylelint-disable property-no-unknown */

.article-video {
  height: 100%;
  position: relative;
}

.article-video img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.article-video__overlay {
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  top: 0;
  width: 100%;
}

.article-video__play-button {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  left: 50%;
  padding: 0;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 1500;
}

.article-video__label {
  margin-bottom: 16px;
}

.article-video__image {
  bottom: 0;
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-video__image--hide {
  opacity: 0;
}

.article-video__playercore {
  display: block;
}

.article-video__playercore--mobile {
  display: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-video__playercore--show {
  display: block;
}

.article-video--bordered {
  border-radius: 4px;
  overflow: hidden;
}

/* stylelint-disable property-no-unknown */

.hero-video {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 180px;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  z-index: 1;
}

.hero-video__video {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 80%;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  width: 80%;
  z-index: 2;
}

.hero-video__video--desktop {
  left: 0;
  top: 65px;
  width: 71.5% !important;
}

.hero-video__video--mobile {
  height: 100%;
  width: 100%;
}

.hero-video__video--small-desktop {
  height: 70%;
  left: 0;
  top: 78px;
  width: 67%;
}

.hero-video--small-desktop,
.hero-video--desktop {
  display: block;
  height: 720px;
}

.hero-video img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
  -webkit-filter: brightness(40%);
  filter: brightness(40%);
}

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .hero-video img {
    opacity: 0.5;
  }
}

.hero-video--mobile {
  height: 280px;
}

.hero-video--medium-mobile {
  height: 430px;
}

.hero-video--tablet {
  height: 574px;
}

.hero-video--tablet .hero-video__video {
  margin-bottom: 10px;
}

.hero-video__play-button {
  position: absolute;
  z-index: 100;
}

.hero-video__video div div {
  position: inherit !important;
  position: unset !important;
}

.share-tools-popout {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #979797;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding: 30px 0 20px;
  position: relative;
  width: 300px;
}

.share-tools-popout__text {
  color: #444;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0 18px 18px;
  text-align: center;
  text-transform: uppercase;
}

.share-tools-popout__url-container {
  padding: 0 18px;
  width: 100%;
}

.share-tools-popout__articleurl {
  border: 1px solid #979797;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #a39f9f;
  font-size: 12px;
  letter-spacing: -0.5px;
  margin-bottom: 8px;
  margin-top: 0;
  padding: 12px 10px;
  text-align: center;
  width: 262px;
}

.share-tools-popout__close {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  right: 8px;
  top: 20px;
}

.share-tools-popout__close:hover .share-tools-popout__close-icon {
  color: #888;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.share-tools-popout__close-icon {
  color: #000;
  font-size: 16px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.share-tools-popout__border-arrow {
  background-color: #fff;
  border: 1px solid #979797;
  border-bottom: 0;
  border-right: 0;
  height: 12px;
  left: 40px;
  position: absolute;
  top: -7px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 12px;
}

.share-tools-popout__tools {
  margin-bottom: 13px;
}

.share-tools-popout__details {
  -ms-flex-item-align: normal;
  -ms-grid-row-align: normal;
  align-self: normal;
  color: #444;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 16px;
  margin: 0;
  max-width: 180px;
  padding-left: 14px;
}

.share-tools-popout__copied,
.share-tools-popout__copy {
  background-color: #000;
  border: unset;
  color: #fff;
  cursor: pointer;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin-bottom: 18px;
  padding: 12px 6px;
  text-transform: uppercase;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  width: 110px;
}

.share-tools-popout__copy:hover {
  background-color: #555;
}

.share-tools-popout__copied .gelicon--yes {
  color: #ff9700;
  margin-left: 8px;
}

.share-button-with-popout {
  position: relative;
  z-index: 9999;
}

.share-button-with-popout__popout {
  max-width: 330px;
  padding-right: 8px;
  position: absolute;
  top: 53px;
  width: 100%;
}

.share-button-with-popout__popout--desktop {
  width: auto;
}

.article-end__line--long {
  margin-bottom: 24px;
}

.article-end__share-tools {
  margin-bottom: 0;
}

.article-end--tablet .article-end__line--long {
  margin-bottom: 36px;
}

.article-end--desktop .article-end__line--long {
  margin-bottom: 44px;
}

.article-end--desktop .article-end__share-tools {
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 50px;
}

.article-end--desktop .article-end__share {
  margin-top: 0;
}

.article-end__share {
  margin-top: 5px;
}

/* stylelint-disable property-no-unknown */

.article-share-tools {
  display: -ms-flexbox;
  display: flex;
}

.article-share-tools a,
.article-share-tools button {
  background-color: transparent;
  border: 1px solid #e4e4e4;
  border-radius: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #979797;
  display: -ms-flexbox;
  display: flex;
  height: 52px;
  margin-right: 2px;
  width: 52px;
}

.article-share-tools--dark a,
.article-share-tools--dark button {
  color: #444;
  height: 54px;
  width: 54px;
}

.article-share-tools--dark a svg,
.article-share-tools--dark button svg {
  stroke: #444;
}

.article-share-tools a:hover,
.article-share-tools button:hover {
  background-color: #fff;
}

.article-share-tools .facebook-icon:hover {
  color: #3b5898;
}

.article-share-tools .email-icon:hover {
  color: #615f5d;
}

.article-share-tools .twitter-icon:hover {
  color: #47c7fa;
}

.article-share-tools .linkedin-icon:hover {
  color: #0077b5;
}

.article-share-tools .whatsapp-icon:hover {
  color: #25d366;
}

.article-share-tools .facebook-messenger {
  color: #0184ff;
}

.article-share-tools .ticked-icon {
  background-color: transparent;
  border: 1px solid #e4e4e4;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 11px;
  margin-right: 2px;
  padding: 3px;
}

.article-share-tools--popout > *,
.article-share-tools--popout a {
  color: #020203;
  margin-bottom: 3px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.domestic-disclaimer {
  background-color: #333;
  position: relative;
}

.domestic-disclaimer__content {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 990px;
}

.domestic-disclaimer__content--desktop-small {
  max-width: 976px;
}

.domestic-disclaimer__content--desktop {
  max-width: 1248px;
}

.domestic-disclaimer__text {
  color: #d8d8d8;
  font-size: 13px;
  line-height: 14px;
  margin: auto;
  padding: 8px 16px;
}

.domestic-disclaimer__text--tablet {
  font-size: 14px;
  line-height: 19px;
  padding: 16px 54px 16px 16px;
}

.domestic-disclaimer__text--desktop {
  font-size: 14px;
  line-height: 19px;
  margin-left: 0;
  max-width: 890px;
  padding: 14px 16px;
}

.domestic-disclaimer__close-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  padding: 0 16px 0 0;
  position: relative;
}

.domestic-disclaimer__close-button--desktop {
  padding: 0 16px 0 0;
}

.domestic-disclaimer__close-icon {
  color: #d8d8d8;
  font-size: 16px;
}

.domestic-disclaimer__close-icon--desktop {
  font-size: 22px;
}

/* stylelint-disable property-no-unknown */

.section-header-text__text {
  background-color: #fff;
  border-radius: 4px;
  -webkit-box-shadow: 0 0 20px 0 rgba(153, 153, 153, 0.5), 0 2px 5px 0 rgba(153, 153, 153, 0.5);
  box-shadow: 0 0 20px 0 rgba(153, 153, 153, 0.5), 0 2px 5px 0 rgba(153, 153, 153, 0.5);
  margin: 0 8px;
  opacity: 0.95;
  padding: 16px;
  position: relative;
  z-index: 3;
}

.section-header-text__text--no-margin {
  margin: 0;
}

.section-header-text__ad {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: end;
  justify-content: flex-end;
  margin: 0 8px 8px;
  position: relative;
  top: unset;
}

.section-header-text__ad--desktop {
  margin: 0 0 8px;
}

.section-header-text__title {
  display: inline-block;
}

.section-header-text__title--large-margin {
  margin: 0 40px 16px 0;
}

.section-header-text__title--premium {
  border: 1.78px solid;
  padding: 8px;
}

.section-header-text__title-content {
  color: #444;
  font-size: 22px;
  font-weight: bold;
  margin: unset;
}

.section-header-text__title-content--tablet {
  font-size: 24px;
}

.section-header-text__title-content--desktop {
  font-size: 28px;
}

.section-header-text__description {
  color: #555;
  font-size: 14px;
  line-height: 20px;
  margin: 0;
}

.section-header-text__description--large {
  font-size: 16px;
  line-height: 24px;
}

/* stylelint-disable property-no-unknown */

.section-header-unit {
  max-width: 1280px;
  position: relative;
}

.section-header-unit--tablet {
  height: 320px;
}

.section-header-unit--desktop {
  border-radius: 4px;
  height: 320px;
  overflow: hidden;
}

.section-header-unit__image {
  height: 320px;
  max-height: 320px;
  overflow: hidden;
  position: relative;
}

.section-header-unit__image img {
  left: 50%;
  position: relative;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.section-header-unit__image--right img {
  left: unset;
  min-width: 100%;
  right: 0;
  width: unset;
}

.section-header-unit__image--left img {
  left: unset;
  min-width: 100%;
  right: unset;
  width: unset;
}

.section-header-unit__content {
  position: relative;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.section-header-unit__content--desktop {
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  max-width: 420px;
  position: absolute;
  right: 32px;
  top: 0;
  -webkit-transform: none;
  transform: none;
}

.section-header-unit__content--advert {
  -webkit-transform: translateY(calc(-50% - 28px));
  transform: translateY(calc(-50% - 28px));
  /* - half the height of the advert so the text is still centered. */
}

/* stylelint-disable property-no-unknown */

.label-list {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  position: relative;
}

.label-list__line {
  width: 100%;
}

.label-list__content {
  margin: 30px 0 0 16px;
  width: 100%;
}

.label-list__content--tablet {
  margin: 34px 0 0 38px;
}

.label-list__content--desktop {
  margin: 42px 0 0 32px;
}

.label-list__list-item {
  margin: 0;
  padding: 0;
}

.label-list__link {
  color: #444;
  font-size: 18px;
  line-height: 24px;
  text-decoration: none;
}

.label-list__link:hover {
  color: #adadad;
}

.label-list__link--large {
  font-size: 22px;
  line-height: 29px;
}

.label-list__link:not(:first-of-type) {
  margin-top: 8px;
}

.label-list__link--large:not(:first-of-type) {
  margin-top: 12px;
}

.label-list__list-items {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 36px;
}

.label-list__list-items--tablet {
  margin-top: 52px;
}

.label-list__list-items--desktop {
  margin-top: 46px;
}

/* stylelint-disable property-no-unknown */

.offline-reading {
  font-family: 'CuriousSansBold';
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.offline-reading__header {
  font-size: 14px;
  line-height: 20px;
  margin: 0 0 16px;
  max-width: 220px;
  text-align: center;
}

.offline-reading__header--desktop {
  font-size: 18px;
  max-width: 460px;
}

.offline-reading__buttons {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
}

.offline-reading__buttons--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
}

.offline-reading__top-stories {
  margin-bottom: 24px;
}

.offline-reading__top-stories--desktop {
  margin: 0 16px 0 0;
}

.offline-reading__icon {
  display: block;
  height: auto;
  margin-bottom: 24px;
  width: 120px;
}

/* stylelint-disable property-no-unknown */

.rectangle-image {
  background-size: cover;
  height: 74px;
  max-width: 100%;
  overflow: hidden;
  position: relative;
  width: 132px;
}

.rectangle-image img {
  height: 100%;
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: auto;
}

.rectangle-image--small {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 32px;
  width: 56px;
}

.rectangle-image--large {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 162px;
  width: 288px;
}

.rectangle-image--medium {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 126px;
  width: 222px;
}

.rectangle-image--full-screen {
  padding-top: 56.25%;
  width: 100%;
}

.rectangle-image img {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.rectangle-image__overlay {
  background-color: rgba(0, 0, 0, 0.6);
  bottom: 0;
  height: 100%;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}

.rectangle-image__overlay--culture {
  background-color: rgba(72, 41, 120, 0.6);
}

.rectangle-image:hover .rectangle-image__overlay {
  opacity: 1;
}

.rectangle-image:hover img {
  height: 108%;
}

/* stylelint-disable property-no-unknown */

.rectangle-story-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 100%;
  width: 288px;
}

.rectangle-story-item__image-container:hover .rectangle-image__overlay {
  opacity: 1;
}

.rectangle-story-item__image-container:hover .rectangle-story-item__icon {
  background-color: #000;
}

.rectangle-story-item__image-container--culture:hover .rectangle-story-item__icon {
  background-color: #482978;
}

.rectangle-story-item__image-container:hover .rectangle-image img {
  height: 108%;
}

.rectangle-story-item__image-container {
  position: relative;
  width: 100%;
}

.rectangle-story-item--tablet {
  width: 222px;
}

.rectangle-story-item__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-top: 3px;
  width: 100%;
}

.rectangle-story-item__label {
  color: #4a4a4a;
  display: block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin-right: auto;
  margin-top: 20px;
  padding-bottom: 3px;
  text-decoration: none;
  text-transform: uppercase;
}

.rectangle-story-item__label--worklife:hover,
.rectangle-story-item__label--future:hover,
.rectangle-story-item__label__travel:hover {
  background-image: none;
}

.rectangle-story-item__label--worklife > span:hover,
.rectangle-story-item__label--future > span:hover,
.rectangle-story-item__label__travel > span:hover {
  border-bottom: 1px solid #4a4a4a;
}

.rectangle-story-item__label--culture:hover {
  background-image: none;
}

.rectangle-story-item__label--culture > span:hover {
  border-bottom: 1px solid #482978;
}

.rectangle-story-item__line {
  display: block;
  margin: 16px 0;
}

.rectangle-story-item__author {
  color: #4a4a4a;
  display: block;
  font-size: 14px;
  font-style: italic;
  letter-spacing: 0.1px;
  line-height: 35px;
  text-decoration: none;
}

.rectangle-story-item__title {
  color: rgba(46, 46, 46, 0.85);
  display: block;
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  text-decoration: none;
}

.rectangle-story-item__icon {
  background-color: #000;
  bottom: 0;
  color: #fff;
  font-size: 14px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  text-align: center;
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
  width: 44px;
}

.rectangle-story-item__title--white,
.rectangle-story-item__author--white,
.rectangle-story-item__label--white {
  color: #fff;
}

.rectangle-story-item__label--white:hover {
  border-bottom: 0;
}

.rectangle-story-item__label--white > span:hover {
  border-bottom: 1px solid #fff;
}

.rectangle-article-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1;
  flex: 1 1;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
}

.rectangle-article-group--tablet,
.rectangle-article-group--desktop {
  -ms-flex-direction: row;
  flex-direction: row;
}

.rectangle-article-group__article {
  display: inline-block;
  padding-top: 12px;
}

.rectangle-article-group__article--tablet {
  padding: 0 16px 0 0;
}

.rectangle-article-group__article--desktop {
  padding: 0 24px 0 0;
}

.fake-ad {
  -ms-flex-line-pack: center;
  align-content: center;
  -ms-flex-align: center;
  align-items: center;
  background: #f6f6f6;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 8px;
}

.fake-ad__body {
  -ms-flex-align: center;
  align-items: center;
  background: #5ae9cb;
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  font-family: Arial, sans-serif;
  -ms-flex-pack: center;
  justify-content: center;
}

.fake-ad__text {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  color: #444;
  font-family: Arial, sans-serif;
  font-size: 12px;
  font-weight: bold;
  line-height: 1.5;
  text-align: right;
  text-transform: uppercase;
}

.fake-ad--mpu .fake-ad__body {
  height: 320px;
  width: 320px;
}

.fake-ad--mpu .fake-ad__text {
  width: 320px;
}

.fake-ad--mobile-leaderboard .fake-ad__body {
  height: 50px;
  width: 300px;
}

.fake-ad--mobile-leaderboard .fake-ad__text {
  width: 300px;
}

.fake-ad--leaderboard .fake-ad__body {
  height: 90px;
  width: 728px;
}

.fake-ad--leaderboard .fake-ad__text {
  width: 728px;
}

.body-text-card-inline-image {
  margin: 24px 0;
  position: relative;
}

/* stylelint-disable property-no-unknown */

.body-text-card {
  color: #444;
  display: block;
  font-size: 16px;
  line-height: 1.5;
}

.body-text-card__image,
.body-text-card__video {
  margin: 24px 0;
}

.body-text-card__text {
  display: block;
}

.body-text-card__advert {
  margin: 20px 0;
}

.body-text-card__text div a {
  cursor: pointer;
  font-weight: bold;
  text-decoration: none;
}

.body-text-card__text a:hover {
  text-decoration: underline;
}

.body-text-card__text > div > p {
  margin: 0 20px 16px;
}

.body-text-card__text > div > p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
}

.body-text-card__drop-capped {
  float: left;
  margin: 0 8px 0 20px;
  padding-top: 6px;
}

.body-text-card__text--drop-capped p:first-of-type::first-letter {
  color: transparent;
  font-size: 0;
}

.body-text-card__text--flush-text > div > p {
  margin-left: 0;
  margin-right: 0;
}

.body-text-card__text--future div a:visited {
  color: #666;
}

.body-text-card__text--future div a {
  color: #002856;
  -webkit-text-decoration-color: #002856;
  text-decoration-color: #002856;
}

.body-text-card__text--travel div a {
  color: #589e50;
  -webkit-text-decoration-color: #589e50;
  text-decoration-color: #589e50;
}

.body-text-card__text--worklife div a {
  color: #0052a1;
  -webkit-text-decoration-color: #0052a1;
  text-decoration-color: #0052a1;
}

.body-text-card__text--earth div a {
  color: #0fbb56;
  -webkit-text-decoration-color: #0fbb56;
  text-decoration-color: #0fbb56;
}

.body-text-card__text--culture div a {
  color: #472479;
  -webkit-text-decoration-color: #472479;
  text-decoration-color: #472479;
}

/* stylelint-disable property-no-unknown */

.branding {
  -webkit-box-sizing: content-box !important;
  box-sizing: content-box !important;
  display: inline-block;
  height: 24px;
  padding: 12px 16px;
  width: 100%;
}

.branding__icon {
  display: inline-block;
  height: 24px;
  width: 100%;
}

.branding__icon g {
  fill: #fff;
}

.branding--medium {
  padding: 16px;
}

.branding--large {
  padding: 16px 24px;
}

.branding--worklife {
  background-color: #0052a1;
}

.branding--future {
  background-color: #002856;
}

.branding--culture {
  background-color: #472479;
}

.branding--earth {
  background-color: #0fbb56;
}

.branding--travel {
  background-color: #589e50;
}

.branding--travel svg,
.branding--earth svg,
.branding--culture svg,
.branding--future svg,
.branding--worklife svg {
  height: 24px;
}

.branding--small,
.branding--small svg {
  height: 17px;
}

.branding__icon--medium,
.branding--medium,
.branding--medium svg {
  height: 22px;
}

.branding__icon--large,
.branding--large,
.branding--large svg {
  height: 24px;
}

.branding__icon--largest,
.branding--largest,
.branding--largest svg {
  height: 32px;
}

.branding__icon--small,
.branding--travel .branding__icon--small svg,
.branding--earth .branding__icon--small svg,
.branding--culture .branding__icon--small svg,
.branding--future .branding__icon--small svg,
.branding--worklife .branding__icon--small svg {
  height: 17px;
}

/* stylelint-disable property-no-unknown */

.swimlane-inner {
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto 100%;
  display: block;
  padding: 24px 16px;
}

.swimlane-inner--small {
  padding: 24px 8px;
}

.swimlane-inner--tablet {
  padding: 28px 16px 42px;
}

.swimlane-inner--small-desktop {
  padding: 30px 16px 42px;
}

.swimlane-inner--desktop {
  padding: 38px 16px 42px;
}

.swimlane {
  overflow: hidden;
  position: relative;
  z-index: 0;
}

.swimlane__black {
  background-color: #0e0e0e;
}

.swimlane__background-image {
  height: 500px;
  position: absolute;
  right: 0;
  top: 0;
  width: 915px;
  z-index: -1;
}

.swimlane__background-image--mobile {
  height: 181px;
  width: 320px;
}

.swimlane__background-image--tablet {
  height: 421px;
  width: 752px;
}

.swimlane__background-image--desktop {
  height: 500px;
  width: 915px;
}

.swimlane__background-image--atb {
  background-color: rgba(51, 51, 51, 0.8);
  background-size: cover;
  height: 100%;
  width: 100%;
}

.swimlane__item {
  margin: 0 0 25px;
  width: 100%;
}

.swimlane__item--desktop {
  margin: 0;
}

.swimlane__item--tablet {
  margin: 0 16px 25px 0;
  width: calc((100% - 48px) / 3);
}

.swimlane__item--tablet:nth-of-type(3n + 3) {
  margin-right: 0;
}

.swimlane__item--two-columns {
  margin-right: 0 !important;
  max-width: 572px;
  width: 50%;
}

.swimlane__item--four-columns {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 25px;
  margin-right: 16px;
  width: calc((100% - 48px) / 4);
}

.swimlane__item--four-columns:nth-of-type(4n + 4) {
  margin-right: 0;
}

.swimlane__items {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 24px;
  text-align: left;
}

.swimlane__items--desktop {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  margin-top: 42px;
}

.swimlane__items--small-desktop {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 30px;
}

.swimlane__items--tablet {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-top: 30px;
}

.swimlane__items--no-title {
  margin-top: 0;
}

.swimlane__content {
  margin: auto;
  max-width: 942px;
  text-align: center;
}

.swimlane__content--desktop {
  max-width: 1216px;
}

.swimlane__title {
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: 2.92px;
  line-height: 19px;
  text-transform: uppercase;
}

.swimlane__title--black {
  color: #010101;
  font-weight: 400;
}

.see-more-button-container-alt {
  color: #0e0e0e;
}

.follow-us-on {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
}

.follow-us-on__text {
  color: #fff;
  font-size: 16px;
  font-style: condensed;
  line-height: 20px;
  margin: 0 0 20px;
  padding: 0;
  text-transform: uppercase;
}

.follow-us-on__links {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
}

.follow-us-on__link:first-child {
  margin-right: 16px;
}

/* stylelint-disable property-no-unknown */

.nav-bar {
  background-color: #fff;
}

.nav-bar__hidden-menu {
  display: none;
}

.nav-bar__visible-menu {
  display: block;
}

.nav-bar__no-scroll {
  max-height: 100vh;
  overflow: hidden;
}

/* stylelint-disable property-no-unknown */

.dot-with-label {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.dot-with-label__text {
  padding-left: 8px;
}

.dot-with-label__text a {
  text-decoration: none;
}

.dot-with-label__text:hover h2 {
  color: #adadad;
}

.sponsor-section {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  max-width: 530px;
}

.sponsor-section--menu {
  padding: 20px 0 16px 24px;
}

.sponsor-section__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
}

.sponsor-section__container--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.sponsor-section__sponsor {
  color: #fff;
  padding-right: 16px;
}

.sponsor-section__sponsor-name {
  font-family: 'CuriousSansBold';
  color: #4e4e4e;
  font-size: 26px;
  margin: 0;
  white-space: nowrap;
}

.sponsor-section__sponsor-name--mobile {
  padding-bottom: 16px;
}

.sponsor-section__sponsor-name--desktop {
  font-size: 22px;
}

.sponsor-section__sponsor-name--menu {
  color: #fff;
}

.sponsor-section__sponsor-name--menu-desktop {
  font-size: 32px;
}

.sponsor-section__summary {
  color: #ebebeb;
  font-size: 16px;
  line-height: 24px;
  padding-top: 16px;
}

.sponsor-section__advert {
  display: inline-block;
}

.icon-with-label {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.icon-with-label__icon {
  padding-right: 10px;
}

.full-width-image-article {
  width: 100%;
}

.full-width-image-article__container {
  min-height: 325px;
  overflow: hidden;
  position: relative;
}

.full-width-image-article__container--desktop {
  min-height: 400px;
}

.full-width-image-article__image {
  height: 100%;
  overflow: hidden;
  position: absolute;
  width: 100%;
}

.full-width-image-article__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.full-width-image-article__text {
  -ms-flex-align: center;
  align-items: center;
  color: #fff;
  left: 50%;
  max-width: 488px;
  padding: 0 20px;
  position: absolute;
  text-align: center;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 100%;
}

.full-width-image-article__text a {
  color: #fff;
  text-decoration: none;
}

.full-width-image-article__text .full-width-image-article-text__label {
  display: inline-block;
  font-size: 14.4px;
  font-weight: bold;
  letter-spacing: 3.6px;
  line-height: 19px;
  margin-bottom: 11px;
  text-transform: uppercase;
}

.full-width-image-article__text .full-width-image-article-text__header {
  font-size: 24px;
  letter-spacing: -0.25px;
  line-height: 42px;
  margin: 0;
  padding: 0;
}

.full-width-image-article__text .full-width-image-article-text__header--desktop {
  font-size: 33.6px;
}

.full-width-image-article__text .full-width-image-article-text__author {
  font-size: 16.6px;
  font-style: italic;
  letter-spacing: -0.13px;
  line-height: 42px;
  margin-bottom: 0;
  margin-top: 28px;
}

.full-width-image-article__text .full-width-image-article-text__author--desktop {
  margin-top: 32px;
}

.full-width-image-article__background {
  background-image: radial-gradient(50% 49%, rgba(5, 36, 53, 0.37) 50%, rgba(0, 0, 0, 0) 83%);
  height: 100%;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.full-width-image-article__link {
  color: #fff;
  text-decoration: none;
}

.more-articles {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  -o-object-fit: cover;
  object-fit: cover;
  overflow: hidden;
  position: relative;
  -webkit-transition: background-image 0.4s;
  transition: background-image 0.4s;
}

.more-articles__heading {
  display: inline-block;
  margin: auto;
  max-width: 1272px;
  padding: 20px 0 0 16px;
  position: relative;
  z-index: 5;
}

.more-articles__stories {
  margin: 10px 16px 42px;
  max-width: 1232px;
  padding: 8px;
  position: relative;
  z-index: 4;
}

.more-articles__stories--small {
  padding: 0;
}

.more-articles__stories--tablet {
  margin: 24px 16px 72px;
  max-width: 1216px;
}

.more-articles__stories--desktop {
  margin: 56px 48px 92px;
  max-width: 1152px;
}

.more-articles__story-container:not(:first-of-type) {
  padding-top: 16px;
}

.more-articles__line {
  opacity: 0.3;
  padding-top: 16px;
  z-index: 5;
}

.more-articles__image-overlay {
  background-color: rgba(25, 62, 109, 0.3);
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  pointer-events: none;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
  z-index: 1;
}

.more-articles__image {
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.more-articles__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.more-articles__image--right img {
  left: unset;
  min-width: 100%;
  right: 0;
  width: unset;
}

.more-articles__image--left img {
  left: unset;
  min-width: 100%;
  right: unset;
  width: unset;
}

.more-articles__image--visible {
  opacity: 1;
}

.more-articles__story--two-columns,
.more-articles__story--three-columns {
  padding-right: 16px;
  width: 310px;
}

.more-articles__story-container:nth-child(even) .more-articles__story--two-columns {
  padding-right: 0;
}

.more-articles__story-container:nth-child(3n + 3) .more-articles__story--three-columns {
  padding-right: 0;
}

.more-articles__stories--two-columns,
.more-articles__stories--three-columns {
  -ms-flex-align: end;
  align-items: flex-end;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 16px;
}

.more-articles__stories--two-columns .more-articles-item__link,
.more-articles__stories--three-columns .more-articles-item__link {
  pointer-events: all;
}

.more-articles__story-container--two-columns {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  width: 50%;
}

.more-articles__story-container--two-columns:nth-child(2) {
  padding-top: 0;
}

.more-articles__story-container--three-columns {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  width: 33%;
}

.more-articles__story-container--three-columns:nth-child(-n + 3) {
  padding-top: 0;
}

.more-articles__heading--small {
  padding: 20px 0 0 8px;
}

.more-articles__heading--desktop {
  max-width: 1264px;
  padding: 38px 0 0 16px;
}

.more-articles__heading--tablet {
  max-width: 1264px;
  padding: 24px 0 0 16px;
}

/* stylelint-disable property-no-unknown */

.more-articles-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
  z-index: 5;
}

.more-articles-item__link {
  text-decoration: none;
}

.more-articles-item__container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.more-articles-item__label {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 8px;
}

.more-articles-item__type {
  margin-right: 16px;
  position: relative;
}

.more-articles-item__icon {
  color: #fff;
  font-size: 12px;
  margin-right: 8px;
}

.more-articles-item__text {
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  line-height: 24px;
  padding: 0;
  position: relative;
  text-shadow: 0 1px 2px rgba(25, 62, 109, 0.7);
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}

.more-articles-item__text--medium {
  font-size: 22px;
  line-height: 28px;
}

.more-articles-item__text--large {
  color: #ebebeb;
  font-size: 30px;
  line-height: 37px;
}

.more-articles-item__container--column {
  -ms-flex-direction: column;
  flex-direction: column;
}

.more-articles-item__image-container {
  position: relative;
}

.more-articles-item--two-columns {
  margin-right: 16px;
}

.more-articles-item__label--desktop {
  margin-top: 16px;
}

.more-articles-item__label--tablet {
  margin-top: 16px;
}

.more-articles-item__link:hover .more-articles-item__text {
  color: #adadad;
}

.most-popular {
  background-color: #f9f9f9;
}

.most-popular__inner {
  margin: 0 auto;
  max-width: 894px;
  padding: 45px 24px 21px;
}

.most-popular__inner--desktop {
  padding: 47px 0 86px;
}

.most-popular__header {
  color: #010101;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin: 0;
  text-align: center;
  text-transform: uppercase;
}

.most-popular__items {
  display: block;
}

.most-popular__items--desktop {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 57px;
}

.most-popular-item {
  box-sizing: border-box;
  padding-top: 33px;
}

.most-popular-item:last-of-type {
  margin-bottom: 42px;
}

.most-popular-item--desktop {
  padding: 0 20px;
  width: calc(33.333%);
}

.most-popular-item--desktop:nth-child(3n + 2) {
  -ms-flex-order: 2;
  order: 2;
  padding: 38px 20px;
}

.most-popular-item--desktop:nth-child(3n + 3) {
  -ms-flex-order: 3;
  order: 3;
}

.most-popular-item--desktop:nth-child(n+4) {
  border-left: 1px solid #dadada;
}

.most-popular-item--desktop:last-of-type {
  margin-bottom: 0;
}

.most-popular-item a {
  text-decoration: none;
}

.most-popular-item__content {
  -ms-flex-align: end;
  align-items: flex-end;
  display: -ms-flexbox;
  display: flex;
  margin-top: 5px;
}

.most-popular-item__number {
  color: #cbcbcb;
  font-size: 40px;
  font-style: italic;
  font-weight: bold;
  line-height: 32px;
  margin: 0 20px 0 0;
  width: 25px;
}

.most-popular-item__label {
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0 0 0 45px;
  text-transform: uppercase;
}

.most-popular-item__title {
  color: #2e2e2ecc;
  font-size: 14px;
  letter-spacing: -0.17px;
  line-height: 22px;
  margin-bottom: 0;
  margin-top: 0;
}

.most-popular-item__title--desktop {
  font-size: 16px;
}

.StickyElementContent {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
}

.StickyElementContent--is-undocked {
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

.StickyElementContent--is-hidden {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}

/* stylelint-disable property-no-unknown */

.error-page-header {
  position: relative;
}

.error-page-header__headers {
  margin-bottom: 16px;
  position: relative;
  z-index: 1;
}

.error-page-header__headers--tablet-plus {
  margin-bottom: 32px;
}

.error-page-header__description {
  color: #444;
  font-size: 16px;
  line-height: 20px;
}

.error-page-header__play-icon {
  margin-right: 16px;
}

.error-page-header__play-icon button {
  color: #adadad;
}

.error-page-header__dot-label {
  display: -ms-flexbox;
  display: flex;
}

/* stylelint-disable property-no-unknown */

.styled-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.styled-list__item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
}

.styled-list__item:not(:first-of-type) {
  padding-top: 8px;
}

.styled-list__item a {
  font-weight: bold;
  text-decoration: none;
}

.styled-list__item--worklife a {
  color: #8beed9;
}

.styled-list__item--future a {
  color: #ffc857;
}

.styled-list__item--culture a {
  color: #472479;
}

.styled-list__item--earth a {
  color: #002856;
}

.styled-list__item--travel a {
  color: #002856;
}

.styled-list__text {
  color: #444;
  font-size: 16px;
  line-height: 24px;
  padding-left: 20px;
}

.styled-list__dot {
  display: -ms-flexbox;
  display: flex;
  margin-top: 8px;
}

/* stylelint-disable property-no-unknown */

.image-gallery-item {
  margin: 26px 0;
}

.image-gallery-item img {
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.image-gallery-item__image--landscape {
  margin: 20px 0 20px -3%;
  width: 106%;
}

@media (max-width: 1000px) and (min-width: 767px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -16%;
    width: 116%;
  }
}

@media (max-width: 1180px) and (min-width: 1024px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -8%;
    width: 108%;
  }
}

@media (max-width: 1365px) and (min-width: 1280px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -42%;
    width: 142%;
  }
}

@media (min-width: 1366px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -55%;
    width: 155%;
  }
}

.image-gallery-item__image--portrait {
  margin: 20px 0;
  width: 100%;
}

@media (max-width: 599px) {
  .image-gallery-item__image--portrait {
    margin-left: -3%;
    width: 106%;
  }
}

.image-gallery-item__image--portrait,
.image-gallery-item__image--portrait img {
  max-height: 507px;
  min-height: 463px;
}

@media (max-width: 1279px) and (min-width: 768px) {
  .image-gallery-item__image--portrait,
  .image-gallery-item__image--portrait img {
    min-height: 818px;
  }
}

.error-page {
  position: relative;
}

.error-page__container {
  margin-bottom: 16px;
}

.error-page__container--tablet-plus {
  margin-bottom: 32px;
}

.error-page__title {
  margin-bottom: 12px;
}

.error-page__title--desktop {
  margin-bottom: 24px;
}

/* stylelint-disable property-no-unknown */

.article-labels {
  font-size: 12px;
  line-height: 16px;
  text-transform: uppercase;
}

.article-labels a {
  color: #fff;
  letter-spacing: 1px;
  text-decoration: none;
}

.article-labels__text:first-child {
  font-weight: bold;
}

/* stylelint-disable property-no-unknown */

.rectangle-story-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin: auto;
  position: relative;
}

.rectangle-story-group__articles {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1;
  flex: 1 1;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
}

.rectangle-story-group__articles--small-tablet {
  -ms-flex-pack: unset;
  justify-content: unset;
}

.rectangle-story-group__articles--full-screen {
  display: block;
}

.rectangle-story-group__article {
  display: inline-block;
  padding-left: 18px;
  padding-top: 16px;
}

.rectangle-story-group__article--tablet {
  padding-left: 20px;
  padding-top: 22px;
}

.rectangle-story-group__article--desktop {
  padding-left: 22px;
  padding-top: 24px;
}

.rectangle-story-group__article--desktop:first-of-type {
  padding-left: 8px;
}

.rectangle-story-group__article--small-tablet {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 50%;
}

.rectangle-story-group__article--full-screen {
  display: block;
  padding: 16px;
}

.rectangle-story-group__article--full-screen:first-of-type {
  padding-top: 0;
}

.rectangle-story-group__article--small-desktop {
  padding-left: 10px;
}

.rectangle-story-group__article--small-desktop:last-of-type {
  padding-right: 8px;
}

.rectangle-story-group__articles-container {
  margin: auto;
  max-width: 950px;
  overflow: hidden;
  width: 100%;
}

.rectangle-story-group__advert-mpu {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  padding: 16px 16px 24px;
}

.rectangle-story-group__advert-mpu--desktop {
  border-left: 1px solid #dadada;
  display: block;
  padding: 0 0 0 16px;
  padding-top: 0;
}

.rectangle-story-group__advert-mpu--small-desktop {
  display: block;
  padding: 0 0 0 8px;
}

.rectangle-story-group__hero--desktop {
  display: -ms-flexbox;
  display: flex;
}

.rectangle-story-group__article-hero--tablet {
  display: -ms-flexbox;
  display: flex;
}

.article-title-card-rectangle {
  width: 100%;
}

.article-title-card-rectangle__image:hover .article-title-card-rectangle__overlay {
  opacity: 1;
}

.article-title-card-rectangle__overlay {
  background-color: rgba(0, 0, 0, 0.6);
  bottom: 0;
  height: 100%;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: -webkit-transform 0.5s ease;
  transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
  transition: transform 0.5s ease, -webkit-transform 0.5s ease;
  width: 100%;
  will-change: transform;
}

.article-title-card-rectangle__overlay--culture {
  background-color: rgba(72, 41, 120, 0.6);
}

.article-title-card-rectangle__image {
  margin-right: 40px;
  max-height: 390px;
  max-width: 620px;
  overflow: hidden;
  position: relative;
  width: auto;
}

.article-title-card-rectangle__image img {
  display: block;
  min-height: 194px;
  min-width: 344px;
  width: 100%;
}

.article-title-card-rectangle__image--tablet,
.article-title-card-rectangle__image--desktop {
  margin-right: 0;
  width: 100%;
}

.article-title-card-rectangle__image--tablet img,
.article-title-card-rectangle__image--desktop img {
  width: 110%;
}

.article-title-card-rectangle__image--preview-article {
  margin-right: 0;
}

.article-title-card-rectangle__image--index {
  margin-right: 0;
  max-width: 100%;
}

.article-title-card-rectangle__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
}

.article-title-card-rectangle__container--tablet,
.article-title-card-rectangle__container--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
}

.article-title-card-rectangle__container--preview-article {
  margin-right: 8px;
}

.article-title-card-rectangle__container--index {
  -ms-flex-align: initial;
  align-items: initial;
  -ms-flex-direction: column;
  flex-direction: column;
}

.article-title-card-rectangle__text-box {
  background-color: #fff;
  margin-left: 40px;
  padding: 16px 22px 0;
  position: relative;
  top: -22px;
}

.article-title-card-rectangle__text-box__label {
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 20px;
  margin: 0;
  text-transform: uppercase;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}

.article-title-card-rectangle__text-box__label--worklife:hover,
.article-title-card-rectangle__text-box__label--future:hover {
  border-bottom: 1px solid #4a4a4a;
}

.article-title-card-rectangle__text-box__label--culture:hover {
  border-bottom: 1px solid #482978;
}

.article-title-card-rectangle__text-box__label--index {
  color: #000;
  font-size: 20px;
  font-weight: 300;
  letter-spacing: -0.53px;
  line-height: 30px;
}

.article-title-card-rectangle__text-box__label--index--tablet {
  font-size: 28px;
  letter-spacing: -0.74px;
  line-height: 44px;
}

.article-title-card-rectangle__text-box__label--index--desktop {
  font-size: 32px;
  letter-spacing: -0.84px;
  line-height: 44px;
}

.article-title-card-rectangle__text-box__header {
  color: #2e2e2e;
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  margin-bottom: 30px;
  margin-top: 12px;
}

.article-title-card-rectangle__text-box__header--desktop {
  font-size: 28px;
}

.article-title-card-rectangle__text-box__header--tablet {
  font-size: 26px;
}

.article-title-card-rectangle__text-box__header--index {
  color: #3d3d3d;
  font-family: Helvetica;
  font-size: 16px;
  letter-spacing: -0.12px;
  line-height: 31px;
  margin-top: 4px;
}

.article-title-card-rectangle__text-box__author {
  color: #4a4a4a;
  font-size: 14px;
  font-style: italic;
  letter-spacing: -0.1px;
  line-height: 35px;
  margin: 8px 0 0;
}

.article-title-card-rectangle__text-box__author--tablet {
  margin: 14px 0 0;
}

.article-title-card-rectangle__text-box--tablet,
.article-title-card-rectangle__text-box--desktop {
  left: -40px;
  margin: 0;
  padding: 40px;
  top: 0;
  -webkit-transform: none;
  transform: none;
}

.article-title-card-rectangle__text-box--desktop {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}

.article-title-card-rectangle__text-box--tablet {
  padding: 35px 22px 22px;
}

.article-title-card-rectangle__text-box--index {
  left: 0;
  margin-right: 40px;
}

.article-title-card-rectangle__text-box--index--tablet {
  margin-left: 50px;
  margin-right: 50px;
  padding: 30px 36px 0;
  top: -80px;
}

.article-title-card-rectangle__text-box--index--desktop {
  margin-left: 50px;
  max-width: 560px;
  top: -88px;
  width: 100%;
}

.article-title-card-rectangle__link {
  color: #000;
  text-decoration: none;
}

.article-title-card-rectangle__text-container {
  display: block;
  max-width: 252px;
}

.article-title-card-rectangle__text-container--tablet,
.article-title-card-rectangle__text-container--desktop {
  max-width: 320px;
}

.article-title-card-rectangle__preview-container {
  color: #4d4d4d;
  text-decoration: none;
}

.article-title-card-rectangle__preview-text {
  display: block;
  font-size: 16px;
  line-height: 24px;
  margin-top: 27px;
  max-width: 396px;
}

.article-title-card-rectangle__read-more {
  display: inline-block;
  font-size: 15px;
  letter-spacing: 4px;
  margin: 25px 16px 0 0;
  text-transform: uppercase;
}

.article-title-card-rectangle__arrow {
  color: #bababa;
  display: inline-block;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

.article-headline {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding: 43px 0;
}

.article-headline .article-labels {
  text-align: center;
}

.article-headline__line--short {
  margin-bottom: 40px;
}

.article-headline--largeTablet .article-headline__text {
  font-size: 32px;
  text-align: center;
}

.article-headline--tablet {
  padding: 31px 0;
}

.article-headline--tablet .article-headline__collection {
  margin-bottom: 24px;
}

.article-headline--tablet .article-headline__text {
  font-size: 32px;
  letter-spacing: -0.84px;
  margin: 0 15px 23px;
  text-align: center;
}

.article-headline--mobile {
  padding: 20px 0;
}

.article-headline--mobile .article-headline__text {
  font-size: 24px;
  letter-spacing: -0.63px;
  margin: 0 15px 15px;
  text-align: center;
}

.article-headline--mobile .article-headline__collection {
  margin-bottom: 15px;
}

.article-headline__collection {
  margin-bottom: 40px;
}

.article-headline__collection a {
  color: #242424;
}

.article-headline__text {
  font-size: 45px;
  letter-spacing: -1.26px;
  line-height: 30px;
  margin-bottom: 44px;
}

/* stylelint-disable property-no-unknown */

.loading-spinner {
  margin: 0 auto;
  text-align: center;
}

.loading-spinner__message {
  color: #002756;
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin: 12px 0;
  text-align: center;
  text-transform: uppercase;
}

.loading-spinner__image {
  display: block;
  margin: 0 auto;
  width: 48px;
}

@media only screen and (min-width: 1600px) {
  .hero-image {
    height: 900px;
    position: relative;
  }

  .hero-image img {
    bottom: -100%;
    display: block;
    height: 100%;
    left: -100%;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    object-fit: cover;
    position: absolute;
    right: -100%;
    top: -100%;
    width: 100%;
  }
}

@media only screen and (max-width: 1600px) {
  .hero-image {
    height: 0;
    overflow: hidden;
    padding-top: 56.25%;
    position: relative;
  }

  .hero-image img {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
  }
}

/* stylelint-disable property-no-unknown */

.article-hero {
  height: 672px;
  margin: 0;
  overflow: hidden;
  position: relative;
  width: 100%;
}

.article-hero--small-mobile {
  height: 373px;
}

.article-hero--mobile {
  height: 486px;
}

.article-hero--small-tablet {
  height: 433px;
}

.article-hero--tablet {
  height: 433px;
}

.article-hero--tablet .article-hero__content {
  padding: 60px 15px 0;
}

.article-hero__content {
  margin: auto;
  max-width: 1004px;
  pointer-events: none;
  position: relative;
  z-index: 1;
}

.article-hero--desktop {
  height: 573px;
}

.article-hero--desktop .article-hero__content {
  padding: 50px 30px 0;
}

.article-hero--large-desktop .article-hero__content {
  max-width: 1276px;
}

.article-hero--small-tablet .article-hero__content,
.article-hero--mobile .article-hero__content,
.article-hero--small-mobile .article-hero__content {
  padding: 60px 10px 0;
}

.article-hero--small-tablet .article-hero__content-title,
.article-hero--mobile .article-hero__content-title,
.article-hero--small-mobile .article-hero__content-title {
  font-size: 24px;
  line-height: 30px;
  max-width: 220px;
}

.article-hero--small-tablet .article-hero__content-line,
.article-hero--mobile .article-hero__content-line,
.article-hero--small-mobile .article-hero__content-line {
  margin-bottom: 16px;
  margin-top: 16px;
}

.article-hero--small-tablet .article-hero__content-labels,
.article-hero--mobile .article-hero__content-labels,
.article-hero--small-mobile .article-hero__content-labels {
  margin-bottom: 15px;
}

.article-hero--small-tablet .article-hero__content-cta,
.article-hero--mobile .article-hero__content-cta,
.article-hero--small-mobile .article-hero__content-cta {
  line-height: 22px;
}

.article-hero--small-tablet .article-hero__content-cta a,
.article-hero--mobile .article-hero__content-cta a,
.article-hero--small-mobile .article-hero__content-cta a {
  letter-spacing: 3px;
}

.article-hero__ambient-hidden {
  display: none;
}

.article-hero__background-ambient {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.article-hero__background::after {
  background-image: linear-gradient(-63deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.06) 24%, rgba(0, 0, 0, 0.2) 51%, rgba(0, 0, 0, 0.32) 67%, rgba(0, 0, 0, 0.51) 100%);
  content: '';
  height: 100%;
  left: 0;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-hero__background img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.article-hero__background--parallax img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.article-hero a {
  color: #fff;
  letter-spacing: 3px;
  text-decoration: none;
}

.article-hero__content-cta {
  clear: both;
  font-size: 16px;
  font-weight: 400;
  letter-spacing: 4px;
  line-height: 20px;
  max-width: 170px;
  pointer-events: all;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
}

.article-hero__content-cta a {
  display: -ms-flexbox;
  display: flex;
  letter-spacing: 4px;
}

.article-hero__content-labels {
  font-size: 12px;
  letter-spacing: 1px;
  line-height: 16px;
  margin-bottom: 20px;
  pointer-events: all;
}

.article-hero__content-line {
  background-color: #fff;
  border: 0;
  display: block;
  float: left;
  height: 1px;
  margin-bottom: 18px;
  margin-right: 300px;
  margin-top: 25px;
  width: 120px;
}

.article-hero__content-right-arrow {
  position: relative;
}

.article-hero__content-right-arrow::before {
  background: #fff;
  content: '';
  height: 2px;
  left: 5px;
  margin-top: -1px;
  opacity: 0.4;
  position: absolute;
  top: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: 20px;
}

.article-hero__content-right-arrow::after {
  border-right: 2px solid #fff;
  border-top: 2px solid #fff;
  content: '';
  display: inline-block;
  height: 10px;
  left: 16px;
  margin-top: 5px;
  opacity: 0.4;
  position: absolute;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
}

.article-hero__content-right-arrow--small::before {
  opacity: 1;
}

.article-hero__content-right-arrow--small::after {
  margin-top: 6px;
  opacity: 1;
}

.article-hero__content-right-arrow img {
  height: 11px;
  margin-left: 10px;
  width: 19px;
}

.article-hero__content-title {
  color: #fff;
  font-size: 50px;
  line-height: 54px;
  margin-top: 0;
  max-width: 450px;
  pointer-events: all;
  text-shadow: 0 1px 2px rgba(51, 51, 51, 0.7);
}

.article-hero__content-title a {
  letter-spacing: -1.32px;
}

.article-hero__title-text {
  display: inline;
}

.article-hero__content-title > a:hover > div,
.article-hero__content-subtitle > a:hover {
  background-image: -webkit-gradient(linear, left top, right top, color-stop(100%, currentColor), color-stop(0%, transparent));
  background-image: linear-gradient(to right, currentColor 100%, transparent 0%);
  background-position: 0 1.15em;
  background-repeat: repeat-x;
  background-size: 100% 2px;
}

.article-hero__content-subtitle {
  clear: both;
  color: #fff;
  font-size: 23px;
  font-weight: 500;
  line-height: 32px;
  margin-bottom: 16px;
  margin-top: 0;
  max-width: 440px;
  pointer-events: all;
  text-shadow: 0 1px 2px rgba(51, 51, 51, 0.5);
}

.article-hero__content-subtitle a {
  letter-spacing: -1px;
}

.article-hero__content-title--small {
  font-size: 30px;
  line-height: 35px;
}

.article-hero__content-title--tablet {
  clear: both;
  font-size: 32px;
  letter-spacing: -0.84px;
  line-height: 42px;
  max-width: 264px;
}

.article-hero__content-title--small a {
  letter-spacing: -0.63px;
}

.article-hero__down-arrow {
  background-color: transparent;
  border: 0;
  bottom: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  left: calc(50% - 29px);
  margin: 0;
  margin-bottom: 15px;
  padding: 0;
  position: absolute;
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
}

.see-more-button-container {
  color: #fff;
}

/* stylelint-disable */

@media screen and (min-width: 1000px) {
  .similar-articles-story {
    max-width: 900px;
  }
}

@media screen and (min-width: 601px) and (max-width: 999px) {
  .similar-articles-story {
    max-width: 600px;
  }
}

@media screen and (max-width: 600px) {
  .similar-articles-story {
    max-width: 300px;
  }
}

.related-articles {
  position: relative;
}

.related-articles__header {
  text-align: center;
  background-color: #000;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  letter-spacing: 3px;
  margin: 0 0 20px;
  padding: 8px;
  text-transform: uppercase;
}

.related-articles__header--bright {
  margin: 20px 0 1.15ex;
  font-size: 13px;
  background-color: #d8d8d8;
  color: rgba(0, 0, 0, 0.7);
  letter-spacing: 2px;
  line-height: 3;
}

.related-articles__list {
  list-style: none;
  padding: 0 0 1.5ex 0;
  margin: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  /* .with-numbers */
}

.related-articles__list li {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -ms-flex-align: stretch;
  align-items: stretch;
  -ms-flex-line-pack: stretch;
  align-content: stretch;
}

.related-articles__list li > div {
  -ms-flex: 1 1;
  flex: 1 1;
}

.related-articles__list.with-numbers {
  counter-reset: related-numbers;
  list-style-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
  margin: 0 35px;
}

.related-articles__list.with-numbers li::before {
  counter-increment: related-numbers;
  content: counter(related-numbers);
  font-weight: bold;
  font-size: 40px;
  -ms-flex-item-align: end;
  align-self: flex-end;
  line-height: 1.85;
  font-style: italic;
  letter-spacing: 0;
  color: rgba(0, 0, 0, 0.18);
  -ms-flex: 0.1 0.1;
  flex: 0.1 0.1;
  -ms-flex-preferred-size: 1ex;
  flex-basis: 1ex;
  padding-right: 1ex;
  text-align: center;
  display: block;
}

.related-articles__list.with-numbers li {
  margin-bottom: 10px;
}

.related-articles--wide-layout {
  background-color: initial;
  margin-top: 20px;
}

ul.related-articles__list:not(.list-wide) li {
  max-width: 100%;
}

ul.related-articles__list:not(.list-wide).with-borders li:not(:last-of-type) {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

ul.related-articles__list.list-wide li {
  max-width: 49.8%;
}

ul.related-articles__list.list-wide.with-borders li {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.related-article {
  -ms-flex-align: stretch;
  align-items: stretch;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 16px;
  min-height: 90px;
}

.related-article__image {
  width: calc(90px + 0.5ex);
  -ms-flex: 0.3 0.3;
  flex: 0.3 0.3;
  min-width: 90px;
  max-width: calc(90px + 0.5ex);
  margin: 0;
  display: block;
  line-height: 0;
  -ms-flex-order: -1;
  order: -1;
}

.related-article__image img {
  width: 100%;
  border: 0;
  margin: 0 12px 0 0;
}

.related-article__text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column nowrap;
  flex-flow: column nowrap;
  width: 100%;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
  position: relative;
  padding: 12px 6px 12px 0;
  line-height: 1.5;
}

.related-article__text a {
  width: 100%;
  padding-left: 12px;
  display: -ms-flexbox;
  display: flex;
  text-decoration: none;
}

.related-article__text a + a {
  margin-top: 1ex;
}

.related-article__text br {
  display: none;
}

.related-article__title {
  color: rgba(46, 46, 46, 0.85);
  letter-spacing: -0.01em;
  -ms-flex: 1 1;
  flex: 1 1;
}

.related-article__title:hover {
  color: #2e2e2e;
}

.related-article__collection {
  display: block;
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 2.5px;
  line-height: 1.2;
  text-decoration: none;
  text-transform: uppercase;
}

.related-article__collection span {
  display: none;
}

.related-articles__list.square-images .related-article {
  margin: 0.75ex 0;
}

.related-articles__list.square-images .related-article:hover {
  background-color: #f9f9f9;
}

.related-articles__list.square-images.list-wide .related-article {
  margin: 1.25ex 1.75ex;
}

.related-articles__list.round-images a:hover {
  color: #000;
}

.related-articles__list.round-images .related-article {
  margin: 1.25ex 1.75ex;
}

.related-articles__list.round-images .related-article__title {
  padding-left: 10px;
}

.related-articles__list.round-images .related-article__image {
  width: calc(90px + 15px);
  max-width: calc(90px + 15px);
  margin: 0;
}

.related-articles__list.round-images .related-article__image img {
  border-radius: 50%;
}

.related-articles__list.round-images.list-wide .related-article {
  margin: 1.75ex 1.75ex;
}

.vertical-story-card-item {
  cursor: pointer;
  font-family: 'ReithSans';
  height: 456px;
  margin: 20px 10px;
  position: relative;
  width: 297px;
}

@media only screen and (max-width: 1007px) {
  .vertical-story-card-item {
    width: 276px;
  }
}

@media only screen and (max-width: 600px) {
  .vertical-story-card-item {
    width: 276px;
  }
}

.vertical-story-card-item img {
  width: 100%;
}

.vertical-story-card-item__content-box {
  background-color: #fff;
  bottom: 0;
  -webkit-box-shadow: 0 0 5px #d8d8d8;
  box-shadow: 0 0 5px #d8d8d8;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 111px;
  -ms-flex-pack: center;
  justify-content: center;
  position: absolute;
  right: 0;
  width: 275px;
}

@media only screen and (max-width: 1007px) {
  .vertical-story-card-item__content-box {
    width: 261px;
  }
}

.vertical-story-card-item__content-box h1 {
  color: #4a4a4a;
  font-size: 0.75rem;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0;
  padding: 0 10px;
  text-transform: uppercase;
}

.vertical-story-card-item__content-box h2 {
  color: #3d3d3d;
  font-size: 1.3125rem;
  font-weight: lighter;
  letter-spacing: -0.06px;
  line-height: 42px;
  margin: 0;
  padding: 0 10px;
}

/* stylelint-disable property-no-unknown */

.see-more-button {
  border-bottom: 1px solid #979797;
  text-align: center;
}

.see-more-button__inner {
  background-color: transparent;
  border: 0;
  color: #6c6c6c;
  cursor: pointer;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin-bottom: 13px;
  position: relative;
  text-transform: uppercase;
  -webkit-transition: linear 0.6s;
  transition: linear 0.6s;
}

.see-more-button__inner-arrow {
  color: #6c6c6c;
  font-size: 10px;
  position: absolute;
  right: 9px;
  top: 2px;
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
}

.see-more-button__inner-text {
  margin-right: 24px;
}

.see-more-button__inner:hover {
  color: #4a4a4a;
}

.see-more-button__inner:hover .see-more-button__inner-arrow {
  color: #4a4a4a;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.vertical-story-group {
  font-family: 'ReithSans';
  position: relative;
}

.vertical-story-group img {
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.vertical-story-group__image-container {
  height: 370px;
  position: relative;
  width: 100%;
}

.vertical-story-group__image-container img {
  height: 100%;
}

.vertical-story-group__image-mask {
  background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0)));
  background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.vertical-story-group__heading-container {
  color: #fff;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 80px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container {
    top: 120px;
  }
}

.vertical-story-group__heading-container button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
}

.vertical-story-group__heading-container h1 {
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  margin-bottom: 20px;
}

.vertical-story-group__heading-container h2 {
  font-size: 2.1rem;
  font-weight: lighter;
  letter-spacing: -0.25px;
  line-height: 42px;
}

.vertical-story-group__heading-container-landscape {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 0;
  margin-left: auto;
  margin-right: auto;
  position: absolute;
  right: 0;
  top: 65px;
  width: 70%;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container-landscape {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

.vertical-story-group__heading-container-landscape h1 {
  color: #fff;
  font-size: 2.25rem;
  font-weight: lighter;
  letter-spacing: 0.95px;
  margin: 0;
}

.vertical-story-group__heading-container-landscape button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  height: 60px;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  width: 260px;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container-landscape button {
    margin-top: 50px;
  }
}

.vertical-story-group__container {
  display: -ms-grid;
  display: grid;
  grid-auto-rows: minmax(auto, auto);
  grid-template-columns: repeat(auto-fit, minmax(290px, 310px));
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  justify-items: center;
  margin-top: -210px;
  width: 100%;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__container {
    margin-top: -120px;
  }
}

/* stylelint-disable property-no-unknown */

.mapContainer .mapTitle {
  background: transparent;
  color: #fff;
  display: block;
  font-family: 'curiousSans-Bold', Arial, sans-serif;
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  line-height: 1.1875em;
  margin-top: 2%;
  min-width: 25%;
  padding: 2%;
  padding-bottom: 0.375em;
  padding-left: 8px;
  padding-right: 16px;
  padding-top: 0.375em;
  position: relative;
  text-align: center;
  z-index: 100;
}

@media only screen and (max-width: 600px) {
  .mapContainer .mapTitle {
    font-size: 2.4em;
  }
}

.mapContainer .styled-line {
  margin-left: auto;
  margin-right: auto;
}

.mapContainer button {
  background-color: rgba(255, 255, 255, 0.9);
  border: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 60px;
  outline: none;
  padding: 2px;
  width: 60px;
}

.mapContainer button .gelicon {
  color: #589e50;
  font-size: 2.5em;
  vertical-align: middle;
}

.mapContainer button:hover {
  background-color: #f2f2f2;
}

@media only screen and (max-width: 600px) {
  .mapContainer button {
    height: 50px;
    width: 50px;
  }

  .mapContainer button .gelicon {
    font-size: 2em;
  }
}

.mapContainer .navigationPanel {
  -ms-flex-align: end;
  align-items: flex-end;
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 50%;
  max-width: 1200px;
  padding: 10px;
  position: absolute;
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  width: 100%;
}

.mapContainer .zoomControls {
  background-color: #fff;
}

.mapContainer .mapboxgl-popup-content {
  border-radius: 0;
  -webkit-box-shadow: 0 3px 0 0 rgba(0, 0, 0, 0.1) !important;
  box-shadow: 0 3px 0 0 rgba(0, 0, 0, 0.1) !important;
  cursor: default;
  font-family: 'curiousSans-Bold', Arial, sans-serif;
  max-width: 300px;
  padding: 0 !important;
  text-align: left;
}

.mapContainer .mapboxgl-popup-content img {
  width: 300px;
}

@media only screen and (max-width: 600px) {
  .mapContainer .mapboxgl-popup-content {
    max-width: 190px;
  }

  .mapContainer .mapboxgl-popup-content img {
    width: 190px;
  }
}

.mapContainer .mapboxgl-ctrl-logo {
  display: none !important;
}

.mapContainer .map-marker svg {
  -webkit-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out;
}

@media only screen and (max-width: 600px) {
  .mapContainer .map-marker svg {
    height: 52px;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
  }
}

.mapContainer .map-marker-active svg {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}

@media only screen and (max-width: 600px) {
  .mapContainer .map-marker-active svg {
    height: 52px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.mapContainer__articleInfo {
  padding: 0 18px;
}

.mapContainer__articleInfo .article-vertical a {
  color: #4a4a4a;
  display: block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin-right: auto;
  margin-top: 20px;
  text-decoration: none;
  text-transform: uppercase;
}

.mapContainer__articleInfo .article-title {
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  margin: 0.725em 0;
}

.mapContainer__articleInfo .article-title a {
  color: rgba(46, 46, 46, 0.85);
  text-decoration: none;
}

@media only screen and (max-width: 600px) {
  .mapContainer__articleInfo .article-title {
    font-size: 1.7em;
  }
}

.mapContainer__articleInfo .article-author {
  color: #4a4a4a;
  display: block;
  font-size: 14px;
  font-style: italic;
  letter-spacing: 0.1px;
  line-height: 35px;
  margin: 1.45em 0;
  text-decoration: none;
}

.location-header {
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  text-transform: uppercase;
}

.temperature-switcher {
  background: transparent;
  border: 0;
  cursor: pointer;
  font-size: 14px;
  font-style: italic;
  font-weight: 300;
  white-space: nowrap;
}

.temperature-switcher:active {
  color: currentColor;
}

.temperature-switcher__active {
  font-weight: bold;
}

.temperature-switcher span {
  margin: 0 0.2ex;
}

.day {
  --w-day-font-size: 14px;
  --w-day-temp-font-size: 20px;
  --w-day-temp-font-size-big: 32px;
  --w-day-temp-font-weight: 600;
  --w-day-name-font-weight: 500;
  -ms-flex-align: center;
  align-items: center;
  color: #959595;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: var(--w-day-font-size);
}

.day--desktop {
  --w-day-temp-font-size: 24px;
  --w-day-temp-font-weight: normal;
  --w-day-name-font-weight: 600;
}

.day:first-of-type {
  color: #4b4b4b;
}

.day__name {
  font-weight: var(--w-day-name-font-weight);
  line-height: 1;
  margin-bottom: 0.75em;
  text-transform: uppercase;
}

.day__symbol-header {
  display: block;
  height: 80px;
  margin: 7px 0 5px;
  width: 98px;
}

.day__symbol {
  display: block;
  height: 40px;
  margin: 7px 0 5px;
  width: 50px;
}

.day--desktop .day__symbol {
  height: 60px;
  margin-top: 15px;
  width: 70px;
}

.day__temp {
  font-size: var(--w-day-temp-font-size);
  font-weight: var(--w-day-temp-font-weight);
  line-height: 1.2;
  margin-top: 0.75em;
  text-transform: lowercase;
}

.day__temp--header {
  color: #4b4b4b;
  font-size: 32px;
  font-weight: bold;
}

.day--mobile:first-of-type {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 3em;
}

.day--mobile:first-of-type .day__symbol {
  height: 60px;
  margin-right: 10px;
  overflow: visible;
  width: 80px;
}

.day--mobile:first-of-type .day__temp {
  font-size: var(--w-day-temp-font-size-big);
  font-weight: bold;
  margin-top: 0;
}

.day--mobile:first-of-type .day__location {
  font-size: 120%;
  font-weight: 500;
  margin: 1em 0;
}

.day--mobile:first-of-type .day__name {
  color: #959595;
}

.day--mobile:first-of-type .day__location,
.day--mobile:first-of-type .day__name {
  text-align: center;
  width: 100%;
}

.weather {
  --w-height: 50px;
  --w-wrapper-margin: 24px;
  --w-days-flexbasis: 33%;
  margin-bottom: 2rem;
}

.weather--desktop {
  --w-height: 80px;
  --w-wrapper-margin: 50px;
  --w-days-flexbasis: initial;
  margin-bottom: 1rem;
}

.weather:not(.weather--desktop) .weather__days {
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
}

.weather:not(.weather--desktop) .day:first-of-type {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  width: auto;
}

.weather__separator {
  border-right: 1px solid #dcdcdc;
  display: block;
  height: var(--w-height);
}

.weather__days {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-preferred-size: var(--w-days-flexbasis);
  flex-basis: var(--w-days-flexbasis);
  -ms-flex-pack: space-evenly;
  justify-content: space-evenly;
  margin-top: 2.5rem;
}

.weather__days--desktop {
  margin-top: 4rem;
}

.weather__header {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
  flex-flow: column;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: var(--w-wrapper-margin);
}

.weather__header button {
  margin-top: 1.5rem;
}

.weather__header--desktop {
  /* position the temperature switcher on desktop */
  position: relative;
}

.weather__header--desktop button {
  margin: 0;
  position: absolute;
  right: 0;
}

/* stylelint-disable property-no-unknown */

.beta-btn {
  background-color: #e6711b;
  color: #fff;
  cursor: pointer;
  height: 25px;
  line-height: 12px;
  padding: 0 7px;
  width: 66px;
}

.beta-btn:hover .beta-btn__arrow {
  cursor: pointer;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.beta-btn:hover .beta-btn__arrow--expanded {
  -webkit-transform: rotate(-35deg);
  transform: rotate(-35deg);
}

.beta-btn__copy {
  color: #444;
  display: block;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 17px;
  margin: 16px auto;
  max-width: 50%;
}

.beta-btn__arrow {
  border: solid #fff;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  top: -1px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.beta-btn__arrow--expanded {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.image-card {
  position: relative;
}

.image-card img {
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.image-card__heading-container {
  color: #fff;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 80px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.image-card__heading-container button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
}

.image-card__heading-container h1 {
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  margin-top: 0;
}

.image-card__heading-container h2 {
  font-size: 2.1rem;
  font-weight: lighter;
  letter-spacing: -0.25px;
  line-height: 42px;
  margin-top: 0;
}

.image-card__heading-container-landscape {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 90%;
}

.image-card__heading-container-landscape__mobile {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: column;
  flex-direction: column;
}

.image-card__heading-container-landscape h1 {
  color: #fff;
  font-size: 2.25rem;
  font-weight: lighter;
  letter-spacing: 0.95px;
  margin-top: 0;
}

.image-card__heading-container-landscape button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  height: 60px;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  width: 260px;
}

.destination-header {
  width: 100%;
}

.destination-header__container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  min-height: 380px;
  overflow: hidden;
  padding: 0 16px;
  position: relative;
}

.destination-header__image {
  height: 100%;
  overflow: hidden;
  position: absolute;
  width: 100%;
}

.destination-header__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.destination-header__text {
  color: #fff;
  font-size: 28px;
  letter-spacing: -0.95px;
  line-height: 37.4px;
  max-width: 488px;
  padding: 0 20px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.destination-header__text a {
  color: #fff;
  font-weight: 300;
  text-decoration: none;
}

.destination-header__text--desktop {
  font-size: 36px;
}

.destination-header__text-container {
  border-bottom: solid 1px #fff;
  display: inline-block;
  line-height: 1.3;
  padding-bottom: 17px;
}

.destination-header__text-container--desktop {
  padding-bottom: 0.75ex;
}

.destination-header__link-page,
.destination-header__advert {
  color: #fff;
  font-size: 12px;
  letter-spacing: 0.5px;
  margin-top: 20px;
  position: relative;
  text-align: center;
}

.destination-header__link-page span,
.destination-header__advert span {
  display: block;
  width: 100%;
}

.destination-header__link-page--desktop,
.destination-header__advert--desktop {
  margin-top: 40px;
}

.destination-header__link-page {
  left: 14px;
  margin: 0;
  position: absolute;
  text-transform: uppercase;
  top: 20px;
}

.destination-header__link-page--desktop {
  left: 25px;
  top: 36px;
}

.destination-header__background {
  background-image: radial-gradient(50% 49%, rgba(5, 36, 53, 0.37) 50%, rgba(0, 0, 0, 0) 83%);
  height: 100%;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.destination-header a {
  color: #fff;
  text-decoration: none;
}

.filter {
  display: inline-block;
  max-width: 160px;
  position: relative;
}

.filter__button {
  background-color: #000;
  border: 0;
  color: #fff;
  font-size: 16px;
  padding: 16px;
  width: 160px;
}

.filter__content {
  background-color: #000;
  display: none;
  position: absolute;
  width: 160px;
  z-index: 1;
}

.filter:focus .filter__content,
.filter:hover .filter__content {
  display: block;
}

.filter__content--open {
  display: block;
}

.filter__content button {
  background-color: #000;
  border: 0;
  color: #fff;
  cursor: pointer;
  display: block;
  font-style: italic;
  padding: 12px 16px;
  text-decoration: none;
  width: 100%;
}

.filter__content button:hover {
  background-color: #494848;
}

.callout-box-card {
  background-color: #eaeaea;
  color: #4a4a4a;
  margin-left: auto;
  margin-right: auto;
  text-align: left;
}

.callout-box-card img {
  height: 100%;
  width: 100%;
}

.callout-box-card__container {
  padding: 0.2rem 1.5rem;
}

.callout-box-card__container h3 {
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin: 1rem 0;
  text-transform: uppercase;
}

.callout-box-card__container h4 {
  font-size: 28px;
  font-weight: lighter;
  letter-spacing: -0.21px;
  line-height: 35px;
}

.callout-box-card__container .body {
  font-size: 16px;
  font-weight: lighter;
  letter-spacing: -0.12px;
  line-height: 31px;
}

.callout-box-card__container .body a {
  color: #4a4a4a;
  font-weight: bold;
  text-decoration: none;
}

/* stylelint-disable property-no-unknown */

.see-more-button {
  border-bottom: 1px solid #979797;
  text-align: center;
}

.see-more-button-inner {
  background-color: transparent;
  border: 0;
  color: #6c6c6c;
  cursor: pointer;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin-bottom: 13px;
  position: relative;
  text-transform: uppercase;
}

.see-more-button-inner--light {
  color: #b4b4b4;
}

.see-more-button-inner__arrow {
  color: #6c6c6c;
  font-size: 10px;
  position: absolute;
  right: 9px;
  top: 2px;
}

.see-more-button-inner__arrow--light {
  color: #b4b4b4;
}

.see-more-button-inner__text {
  margin-right: 24px;
}

/* stylelint-disable property-no-unknown */

.load-more-button {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.load-more-button__refresh.gelicon--refresh {
  margin-right: 16px;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.load-more-button__downarrow {
  color: #adadad;
  font-size: 22px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.load-more-button__loading .load-more-button__refresh.gelicon--refresh {
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

.load-more-button__downarrow:first-of-type {
  padding-right: 16px;
}

.load-more-button__downarrow:not(:first-of-type) {
  padding-left: 16px;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  100% {
    -webkit-transform: rotate(-270deg);
    transform: rotate(-270deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  100% {
    -webkit-transform: rotate(-270deg);
    transform: rotate(-270deg);
  }
}

/* stylelint-disable property-no-unknown */

.basic-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #adadad;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 0 0 0 #fff, 0 2px 0 0 rgba(0, 0, 0, 0.08);
  box-shadow: inset 0 0 0 0 #fff, 0 2px 0 0 rgba(0, 0, 0, 0.08);
  color: #193e6d;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 20px;
  height: 54px;
  -ms-flex-pack: center;
  justify-content: center;
  min-width: 222px;
  text-align: center;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.basic-button--worklife {
  color: #0052a1;
}

.basic-button--future {
  color: #002856;
}

.basic-button--culture {
  color: #472479;
}

.basic-button--earth {
  color: #0fbb56;
}

.basic-button--travel {
  color: #589e50;
}

.basic-button__text {
  color: #444;
  font-family: 'BBC Reith Sans Cd';
  font-size: 18px;
  line-height: 24px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.basic-button__text--white {
  color: #fff;
}

.basic-button__text--curious {
  font-family: 'CuriousSansBold';
}

.basic-button__text--worklife {
  color: #0052a1;
}

.basic-button__text--future {
  color: #002856;
}

.basic-button__text--culture {
  color: #472479;
}

.basic-button__text--earth {
  color: #0fbb56;
}

.basic-button__text--travel {
  color: #589e50;
}

.basic-button::before {
  padding-right: 16px;
}

.basic-button:hover {
  background-color: #dedede;
}

.basic-button--background-light-blue:hover {
  background-color: #dfe8ff;
}

.basic-button--background-worklife {
  background-color: #0052a1;
}

.basic-button--background-future {
  background-color: #002856;
}

.basic-button--background-culture {
  background-color: #472479;
}

.basic-button--background-earth {
  background-color: #0fbb56;
}

.basic-button--background-travel {
  background-color: #589e50;
}

.basic-button--background-worklife:hover {
  background-color: #4494e4;
}

.basic-button--background-future:hover {
  background-color: #ffc857;
}

.basic-button--background-culture:hover {
  background-color: #472479;
}

.basic-button--background-earth:hover {
  background-color: #002856;
}

.basic-button--background-travel:hover {
  background-color: #002856;
}

.basic-button__text--bold {
  font-weight: bold;
}

/* stylelint-disable property-no-unknown */

.read-more-button {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-weight: bold;
  position: relative;
  width: 224px;
}

/* stylelint-disable property-no-unknown */

.AdFrame {
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.AdFrame--default {
  background-color: #f6f6f6;
}

.AdFrame--dark-grey {
  background-color: rgba(26, 26, 26, 0.8);
}

.AdFrame--centre-aligned {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
}

/* stylelint-disable property-no-unknown */

.text-with-styled-background {
  height: inherit;
  position: relative;
  width: 100%;
}

.text-with-styled-background--collection {
  display: inline-block;
  width: unset;
}

.text-with-styled-background--center-align {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.text-with-styled-background__text {
  font-family: 'CuriousSansBold';
  color: #444;
  display: block;
  font-size: 20px;
  line-height: 24px;
  padding: 0 0 0 10px;
  position: relative;
}

.text-with-styled-background__text--large {
  font-size: 26px;
  line-height: 30px;
  padding: 0 0 0 24px;
}

.text-with-styled-background__text--medium {
  font-size: 22px;
  line-height: 28px;
}

.text-with-styled-background__text--remove-padding {
  padding: 0;
  width: 100%;
}

.text-with-styled-background__text--largest {
  font-size: 38px;
  line-height: 47px;
}

.text-with-styled-background__text--worklife {
  color: #0052a1;
}

.text-with-styled-background__text--future {
  color: #002856;
}

.text-with-styled-background__text--culture {
  color: #472479;
}

.text-with-styled-background__text--earth {
  color: #0fbb56;
}

.text-with-styled-background__text--travel {
  color: #589e50;
}

.text-with-styled-background__text--blue {
  color: #0052a1;
}

.text-with-styled-background__text--collection {
  font-size: 28px;
  line-height: 34px;
  padding: 0;
}

.text-with-styled-background__text--collection--medium {
  font-size: 32px;
  line-height: 38px;
}

.text-with-styled-background__text--collection--large {
  font-size: 38px;
  line-height: 47px;
}

.text-with-styled-background__line-container {
  bottom: 0;
  margin-left: 13px;
  position: absolute;
  width: calc(100% - 26px);
}

.text-with-styled-background__line {
  background-color: rgba(25, 62, 109, 0.05);
  height: 26px;
  max-width: 240px;
  position: relative;
}

.text-with-styled-background__line--large {
  bottom: -10px;
  height: 42px;
  max-width: 340px;
}

.text-with-styled-background__line--narrow {
  height: 26px;
  max-width: 100%;
}

.text-with-styled-background__line--medium {
  bottom: -10px;
  height: 36px;
  max-width: 340px;
}

.text-with-styled-background__line--largest {
  max-width: 100%;
}

.text-with-styled-background__line-container--collection {
  width: calc(100% + 26px);
}

.text-with-styled-background__line-container--no-margin {
  margin: 0;
}

.text-with-styled-background__line--collection {
  height: 26px;
}

/* stylelint-disable property-no-unknown */

.previous-media-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
}

.previous-media-button__icon--white svg {
  fill: #fff;
}

.previous-media-button span {
  height: 18px;
  width: 16px;
}

/* stylelint-disable property-no-unknown */

.simple-header {
  color: #444;
  font-size: 18px;
  font-weight: bold;
  line-height: 24px;
  margin: 0;
}

.simple-header--large {
  font-size: 28px;
  line-height: 34px;
}

.simple-header--simple {
  font-size: 18px;
  line-height: 22px;
}

.simple-header--small {
  font-size: 18px;
  letter-spacing: -0.5px;
  line-height: 28px;
}

.simple-header--smallest {
  font-family: Helvetica;
  font-size: 14px;
  line-height: 24px;
}

.simple-header--medium {
  font-size: 24px;
  line-height: 28px;
}

.simple-header--regular {
  font-size: 22px;
  line-height: 28px;
}

.simple-header--condensed-bold {
  font-stretch: condensed;
}

.simple-header--condensed-bold.simple-header--large {
  line-height: 37px;
}

.simple-header--condensed-bold.simple-header--regular {
  line-height: 28px;
}

.simple-header--white {
  color: #fff;
}

/* stylelint-disable property-no-unknown */

.play-button__inline-audio,
.play-button__inline-video {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  height: 49px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 49px;
}

.play-button__inline-audio .gelicon--play,
.play-button__inline-video .gelicon--play {
  color: #ececec;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
}

.play-button__inline-audio--worklife .gelicon--play,
.play-button__inline-video--worklife .gelicon--play {
  color: #8beed9;
}

.play-button__inline-audio--travel .gelicon--play,
.play-button__inline-video--travel .gelicon--play {
  color: #002856;
}

.play-button__inline-audio--future .gelicon--play,
.play-button__inline-video--future .gelicon--play {
  color: #ffc857;
}

.play-button__inline-audio--culture .gelicon--play,
.play-button__inline-video--culture .gelicon--play {
  color: #472479;
}

.play-button__inline-audio--earth .gelicon--play,
.play-button__inline-video--earth .gelicon--play {
  color: #002856;
}

.play-button__inline-video:hover {
  background-color: #ececec;
}

.play-button__inline-video:hover .gelicon--play {
  color: #000;
}

.play-button__inline-audio {
  color: #fff;
  font-size: 22px;
  height: 50px;
  padding: 0;
  width: 50px;
}

.play-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.2);
  border: 2px solid #5ae9cb;
  border-radius: 50%;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 22px;
  height: 80px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 80px;
}

.play-button:hover {
  color: #5ae9cb;
}

.play-button--white {
  border: 4px solid #fff;
}

.play-button--white:hover {
  color: #fff;
}

.play-button--white .gelicon--play {
  color: inherit;
}

.play-button--worklife {
  border: 2px solid #8beed9;
}

.play-button--worklife:hover {
  color: #8beed9;
}

.play-button--travel {
  border: 2px solid #002856;
}

.play-button--travel:hover {
  color: #002856;
}

.play-button--future {
  border: 2px solid #ffc857;
}

.play-button--future:hover {
  color: #ffc857;
}

.play-button--culture {
  border: 2px solid #472479;
}

.play-button--culture:hover {
  color: #472479;
}

.play-button--earth {
  border: 2px solid #002856;
}

.play-button--earth:hover {
  color: #002856;
}

.play-button--desktop {
  font-size: 30px;
  height: 76px;
  width: 76px;
}

.play-button--background-hover:hover {
  background-color: rgba(0, 0, 0, 0.6);
}

/* stylelint-disable property-no-unknown */

.error-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  display: -ms-flexbox;
  display: flex;
  font-size: 22px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
}

.error-button .gelicon--alert {
  color: #ececec;
}

/* stylelint-disable property-no-unknown */

.simple-p-tag {
  color: #444;
  font-size: 18px;
  font-weight: bold;
  line-height: 24px;
  margin: 0;
}

.simple-p-tag--large {
  font-size: 28px;
  line-height: 34px;
}

.simple-p-tag--medium {
  font-size: 27px;
  letter-spacing: -1.69px;
  line-height: 32px;
}

.simple-p-tag--quote {
  color: #575757;
}

.simple-header--serif-light-italic {
  font-style: italic;
  line-height: inherit;
}

/* stylelint-disable property-no-unknown */

.text-summary__text {
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  text-align: left;
}

.text-summary__text--blue {
  color: #193e6d;
}

.text-summary__text--black {
  color: #000;
}

.text-summary__text--grey {
  color: #6a6a6a;
}

.text-summary__text--dark-grey {
  color: #444;
}

.text-summary__text--left {
  text-align: left;
}

.text-summary__text--right {
  text-align: right;
}

.screen-reader-only {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.inline-html {
  display: block;
}

/* stylelint-disable property-no-unknown */

.drop-capped {
  -ms-flex-align: center;
  align-items: center;
  border: 2px solid #444;
  color: #444;
  display: -ms-flexbox;
  display: flex;
  float: left;
  font-size: 58px;
  font-weight: bold;
  height: 84px;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 8px 10px 4px 0;
  text-transform: uppercase;
  width: 84px;
}

.drop-capped--worklife {
  border-color: #8beed9;
}

.drop-capped--future {
  border-color: #ffc857;
}

.drop-capped--culture {
  border-color: #444;
}

.drop-capped--earth {
  border-color: #002856;
}

.drop-capped--travel {
  border-color: #002856;
}

.drop-capped--desktop {
  margin-right: 24px;
}

/* stylelint-disable property-no-unknown */

.close-nav {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.close-nav__icon {
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  font-size: 20px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.close-nav:hover .close-nav__icon {
  color: #cecece;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.close-nav__label {
  display: inline-block;
  margin-right: 12px;
}

/* stylelint-disable property-no-unknown */

.nav-label {
  color: #4e4e4e;
  font-size: 16px;
  line-height: 22px;
  margin: auto;
  max-width: 1280px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.nav-label:hover {
  color: #8e8e8e;
}

.nav-label--menu {
  color: #ebebeb;
}

.nav-label--menu:hover {
  color: #cecece;
}

.nav-label--white {
  color: #fff;
}

.nav-label--curiousSans {
  font-family: 'CuriousSansBold';
}

/* stylelint-disable property-no-unknown */

.nav-links__link {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  padding-right: 24px;
  position: relative;
  text-decoration: none;
  white-space: nowrap;
}

.nav-links__link--active p {
  border-bottom: 2px solid #002856;
  font-weight: bold;
}

.nav-links__link--active--menu p {
  border-bottom: unset;
}

.nav-links__link--active--worklife p {
  border-bottom: 2px solid #0052a1;
}

.nav-links__link--active--culture p {
  border-bottom: 2px solid #472479;
}

.nav-links__link--active--earth p {
  border-bottom: 2px solid #0fbb56;
}

.nav-links__link--active--travel p {
  border-bottom: 2px solid #589e50;
}

.nav-links__icon {
  background-color: #0052a1;
  bottom: 10px;
  height: 2px;
  position: absolute;
  width: 80px;
}

.nav-links__link--menu {
  display: block;
  padding-right: unset;
}

.nav-links__icon--menu {
  display: none;
}

.nav-links__icon--menu-tablet {
  width: 60px;
}

.nav-links__icon--worklife {
  background-color: #0052a1;
}

.nav-links__icon--future {
  background-color: #002856;
}

.nav-links__icon--culture {
  background-color: #472479;
}

.nav-links__icon--earth {
  background-color: #0fbb56;
}

.nav-links__icon--travel {
  background-color: #589e50;
}

.nav-links__link--menu p {
  font-size: 26px;
  padding: 0 0 32px 24px;
}

.nav-links__link--menu-desktop p {
  font-size: 32px;
  line-height: 42px;
  padding: 0 0 44px 100px;
}

/* stylelint-disable property-no-unknown */

.burger-nav {
  background: transparent;
  border: 0;
  color: #0052a1;
  cursor: pointer;
  font-size: 20px;
  outline: none;
  padding: 0;
}

.burger-nav--worklife {
  color: #0052a1;
}

.burger-nav--future {
  color: #002856;
}

.burger-nav--culture {
  color: #472479;
}

.burger-nav--earth {
  color: #0fbb56;
}

.burger-nav--travel {
  color: #589e50;
}

.burger-nav--medium {
  font-size: 16px;
}

.burger-nav--small {
  font-size: 12px;
}

/* stylelint-disable property-no-unknown */

.nav-menu {
  background-color: #0052a1;
  display: block;
  height: 100%;
  left: 0;
  min-height: 100vh;
  opacity: 0.98;
  overflow: auto;
  position: fixed;
  top: 0;
  width: 100vw;
}

.nav-menu--worklife {
  background-color: #0052a1;
}

.nav-menu--future {
  background-color: #002856;
}

.nav-menu--culture {
  background-color: #472479;
}

.nav-menu--earth {
  background-color: #0fbb56;
}

.nav-menu--travel {
  background-color: #589e50;
}

.nav-menu__close-nav {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 1280px;
  padding: 16px 8px 60px;
}

.nav-menu__close-nav--desktop {
  padding: 20px 16px 70px;
}

.nav-menu__sponsored {
  background-color: rgba(34, 34, 34, 0.5);
  height: 100%;
  margin-bottom: 32px;
}

.nav-menu__sponsored--desktop {
  margin-bottom: 44px;
}

.nav-menu__sponsored-container {
  padding: 20px 16px 16px 24px;
}

.nav-menu__sponsored--desktop-container {
  margin: auto;
  max-width: 1264px;
  padding: 20px 16px 20px 100px;
}

.nav-menu__follow-us {
  padding: 52px 0 34px;
}

/* stylelint-disable property-no-unknown */

.ad-slot {
  display: inline-block;
}

.ad-slot__container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.ad-slot__label {
  max-width: 120px;
  min-width: 112px;
  padding-right: 8px;
  text-align: right;
}

.ad-slot--leaderboard {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
}

.ad-slot__label--mpu,
.ad-slot__label--leaderboard {
  margin-bottom: 8px;
  max-width: unset;
  padding-right: unset;
  text-align: right;
}

.ad-slot__container--mpu,
.ad-slot__container--leaderboard {
  display: inline-block;
  -ms-flex-wrap: unset;
  flex-wrap: unset;
}

.ad-slot__fake--sponsor {
  background-color: #5ae9cb;
  height: 31px;
  min-width: 88px;
}

.ad-slot__fake--mpu {
  background-color: #5ae9cb;
  height: 250px;
  min-width: 300px;
}

.ad-slot__fake--mpu-large {
  background-color: #5ae9cb;
  height: 600px;
  min-width: 300px;
}

.ad-slot__fake--leaderboard-large {
  background-color: #5ae9cb;
  height: 90px;
  min-width: 728px;
}

.ad-slot__fake--leaderboard-medium {
  background-color: #5ae9cb;
  height: 50px;
  min-width: 320px;
}

.ad-slot__fake--leaderboard-small {
  background-color: #5ae9cb;
  height: 50px;
  min-width: 300px;
}

.ad-slot__label--dark {
  color: #dcdcdc;
}

.ad-slot--dark {
  background-color: #f6f6f6;
  padding: 8px;
}

.ad-slot--black {
  background-color: rgba(26, 26, 26, 0.8);
  padding: 8px;
}

.open-nav {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0;
  position: relative;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.open-nav__icon {
  display: -ms-flexbox;
  display: flex;
}

.open-nav__label {
  display: inline-block;
  margin-right: 12px;
}

.play-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.play-icon--red {
  color: #f00;
}

.play-icon--grey {
  color: #999;
}

.play-icon--medium {
  font-size: 16px;
}

.play-icon--large {
  font-size: 20px;
}

.camera-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.camera-icon--red {
  color: #f00;
}

.camera-icon--grey {
  color: #999;
}

.camera-icon--medium {
  font-size: 16px;
}

.camera-icon--large {
  font-size: 20px;
}

/* stylelint-disable property-no-unknown */

.nav-build-bar {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: auto;
  margin: auto;
  max-width: 1280px;
  width: 100%;
}

.nav-build-bar--mobile {
  height: auto;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.nav-build-bar--mobile .nav-build-bar__title-content {
  white-space: pre-wrap;
}

.nav-build-bar--tablet {
  height: 58px;
}

.nav-build-bar--desktop {
  height: 60px;
}

.nav-build-bar__links {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  height: 100%;
  -ms-flex-pack: end;
  justify-content: flex-end;
  margin-left: auto;
  overflow: hidden;
}

.nav-build-bar__sponsored-brand {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  margin-left: 8px;
  text-decoration: none;
  white-space: nowrap;
}

.nav-build-bar__sponsored-brand--no-brand {
  margin-left: 0;
}

.nav-build-bar__branding {
  display: -ms-flexbox;
  display: flex;
  padding: 0 8px 0 0;
}

.nav-build-bar__branding--tablet {
  padding: 0 30px 0 0;
}

.nav-build-bar__branding--desktop {
  padding: 0 80px 0 0;
}

.nav-build-bar__title-content {
  border: 1.78px solid;
  color: #444;
  font-size: 22px;
  font-weight: bold;
  margin: unset;
  padding: 8px;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}

.nav-build-bar__title-content--tablet {
  font-size: 24px;
  white-space: nowrap;
}

.nav-build-bar__title-content--desktop {
  font-size: 28px;
}

.nav-build-bar__open-nav {
  display: -ms-flexbox;
  display: flex;
  height: 48px;
}

.nav-build-bar__open-nav-button {
  display: -ms-flexbox;
  display: flex;
  padding-left: 8px;
}

.nav-build-bar__sponsored {
  background-color: #f6f6f6;
  border: 1px solid #d3d3d3;
  height: 48px;
  padding: 0 16px;
}

.nav-build-bar__open-nav--desktop {
  padding-right: 16px;
}

.nav-build-bar__open-nav--mobile {
  -ms-flex-pack: end;
  justify-content: flex-end;
  max-width: 100px;
  width: 100%;
}

.info-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.info-icon--red {
  color: #f00;
}

.info-icon--grey {
  color: #999;
}

.info-icon--medium {
  font-size: 16px;
}

.info-icon--large {
  font-size: 20px;
}

/* stylelint-disable property-no-unknown */

.styled-dot {
  background-color: #5ae9cb;
  border-radius: 50%;
  -webkit-box-shadow: 0 1px 2px 0 rgba(25, 62, 109, 0.5);
  box-shadow: 0 1px 2px 0 rgba(25, 62, 109, 0.5);
  cursor: pointer;
  display: inline-block;
  height: 6px;
  width: 6px;
}

.styled-dot--no-cursor {
  cursor: unset;
}

.styled-dot--medium {
  -webkit-box-shadow: unset;
  box-shadow: unset;
  height: 10px;
  width: 10px;
}

.styled-dot--dark-blue {
  background-color: #193e6d;
}

.styled-dot--purple {
  background-color: #362e67;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--black {
  background-color: #000;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--grey-green {
  background-color: #008e9b;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--dark-green {
  background-color: #589e50;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--worklife {
  background-color: #8beed9;
}

.styled-dot--future {
  background-color: #ffc857;
}

.styled-dot--culture {
  background-color: #472479;
}

.styled-dot--earth {
  background-color: #002856;
}

.styled-dot--travel {
  background-color: #002856;
}

.styled-dot--worklife-prime {
  background-color: #0052a1;
}

.styled-dot--future-prime {
  background-color: #002856;
}

.styled-dot--culture-prime {
  background-color: #472479;
}

.styled-dot--earth-prime {
  background-color: #0fbb56;
}

.styled-dot--travel-prime {
  background-color: #589e50;
}

.styled-dot--large {
  -webkit-box-shadow: 0 1px 1px 0 rgba(25, 62, 109, 0.5);
  box-shadow: 0 1px 1px 0 rgba(25, 62, 109, 0.5);
  height: 16px;
  width: 16px;
}

.styled-dot--small {
  -webkit-box-shadow: unset;
  box-shadow: unset;
  height: 8px;
  width: 8px;
}

.styled-dot--grey {
  background-color: rgba(0, 0, 0, 0.2);
}

/* stylelint-disable property-no-unknown */

.email-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 11px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.email-icon:hover {
  background-color: #000;
}

.email-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.facebook-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 15px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.facebook-icon:hover {
  background-color: #3b5998;
}

.facebook-icon--blue {
  background-color: transparent;
  border: 1px solid #3b5998;
  color: #3b5998;
}

.facebook-icon--blue:hover {
  background-color: #3b5998;
  color: #fff;
}

.facebook-icon--white {
  background-color: transparent;
  border: 1px solid #fff;
  color: #fff;
}

.facebook-icon--white:hover {
  background-color: #fff;
  color: #3b5998;
}

.facebook-icon--small {
  font-size: 20px;
  height: 38px;
  width: 38px;
}

/* stylelint-disable property-no-unknown */

.hero-header {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.hero-header__header {
  font-family: 'CuriousSansBold';
  color: #fff;
  font-size: 38px;
  line-height: 40px;
  margin: 0;
  text-shadow: 0 1px 2px rgba(25, 62, 109, 0.7);
}

.hero-header__header--large {
  font-size: 44px;
  line-height: 48px;
}

.hero-header__header--medium {
  font-size: 38px;
  line-height: 47px;
}

.hero-header__header--small {
  font-size: 28px;
  line-height: 34px;
}

.hero-header__header--black {
  color: #000;
  text-shadow: unset;
}

.hero-header__header--grey {
  color: #adadad;
  text-shadow: unset;
}

.ticked-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #13de99;
  border-radius: 50%;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  display: -ms-flexbox;
  display: flex;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  width: 50px;
  z-index: 55;
}

.ticked-icon--small {
  font-size: 12px;
  height: 38px;
  width: 38px;
}

/* stylelint-disable property-no-unknown */

.google-plus-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 26px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.google-plus-icon:hover {
  background-color: #d34836;
}

.google-plus-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.reddit-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 26px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.reddit-icon:hover {
  background-color: #ff4500;
}

.reddit-icon__hide {
  display: none;
}

.reddit-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.linkedin-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.linkedin-icon:hover {
  background-color: #0077b5;
}

.linkedin-icon--red:hover {
  background-color: #f00;
}

.share-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #e4e4e4;
  color: #444;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 12px;
  font-weight: bold;
  -ms-flex-pack: center;
  justify-content: center;
  letter-spacing: 3px;
  padding: 18px 16px;
  text-transform: uppercase;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 110px;
  z-index: 55;
}

.share-button .gelicon--share {
  margin-right: 10px;
  -webkit-transition: 0.3s ease-in;
  transition: 0.3s ease-in;
}

.share-button:hover .gelicon--share,
.share-button .gelicon--share-sharing {
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

/* stylelint-disable property-no-unknown */

.whatsapp-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.whatsapp-icon:hover {
  background-color: #25d366;
}

.whatsapp-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.twitter-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.twitter-icon:hover {
  background-color: #1da1f2;
}

.twitter-icon--light-blue {
  background-color: transparent;
  border: 1px solid #1da1f2;
  color: #1da1f2;
}

.twitter-icon--light-blue:hover {
  background-color: #1da1f2;
  color: #fff;
}

.twitter-icon--white {
  background-color: transparent;
  border: 1px solid #fff;
  color: #fff;
}

.twitter-icon--white:hover {
  background-color: #fff;
  color: #1da1f2;
}

.twitter-icon--small {
  font-size: 18px;
  height: 38px;
  width: 38px;
}/* stylelint-disable */
html,
body {
  margin: 0;
  padding: 0; }

#root *,
#root *::before,
#root *::after {
  box-sizing: border-box; }

#root article,
#root aside,
#root figure,
#root footer,
#root header,
#root nav,
#root section {
  display: block; }

body {
  background: #fff; }

.app__body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  overflow: visible;
  position: relative; }

.app__domestic-disclaimer {
  bottom: 0;
  position: fixed;
  width: 100%;
  z-index: 5000; }

.main {
  display: flex;
  flex: 1 0 auto;
  flex-direction: column; }
.navigation {
  background-color: #fff;
  display: none;
  margin: auto;
  max-width: 1248px;
  padding: 4px 16px 0;
  position: relative;
  z-index: 1000; }
  @media (min-width: 1008px) and (max-width: 1279px) {
    .navigation {
      max-width: 976px; } }
  @media (min-width: 600px) {
    .navigation {
      padding: 0 16px 1px; } }
  @media (min-width: 600px) and (max-width: 1007px) {
    .navigation {
      max-width: 990px; } }
  @media (min-width: 300px) and (max-width: 399px) {
    .navigation {
      padding: 4px 8px; } }

.navigation--display {
  display: block; }

.navigation-sticky--undocked {
  background-color: #fff;
  width: 100%;
  z-index: 10000; }

.StickyElement {
  position: relative;
  z-index: 1501; }
.loader {
  display: none;
  height: 100%;
  left: -99999px;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: 0.2s opacity;
  width: 100%;
  z-index: 1000; }
  .loader--is-active {
    background: white;
    display: block;
    left: 0;
    opacity: 1; }
  .loader__body {
    display: none;
    left: 50%;
    position: fixed;
    top: 50%;
    transform: translateX(-50%) translateY(-50%); }
  .loader__body--show-loader {
    display: block; }

.no-js .loader {
  display: none; }
.article-headline__text:focus {
  outline: none; }

.article__main {
  display: flex;
  justify-content: flex-end;
  margin: 0;
  width: 100%; }
  @media (max-width: 1023px) and (min-width: 768px) {
    .article__main {
      width: 80%; } }

.article__subcontainer {
  display: flex;
  justify-content: flex-end;
  position: relative;
  width: 100%;
  z-index: 999; }
  @media (max-width: 1667px) and (min-width: 1194px) {
    .article__subcontainer {
      width: 97%; } }
  @media (min-width: 1680px) {
    .article__subcontainer {
      justify-content: center;
      width: 80% !important; } }
  @media (min-width: 1900px) {
    .article__subcontainer {
      margin: auto;
      width: 71% !important; } }

.article__side-mpu {
  min-height: 810px; }
  .article__side-mpu > div {
    background: #f1f1f1;
    display: inline-block;
    padding: 0 8px 8px; }

.bbccom_standard_slot {
  background: transparent !important; }

.article__body {
  background-color: #fff;
  flex: 1 1 auto;
  margin-top: -56px;
  max-width: 700px;
  width: 100%;
  /* stylelint-disable-next-line order/order */ }
  .article__body-content {
    overflow-wrap: break-word; }
  @media (min-width: 768px) and (max-width: 1007px) {
    .article__body {
      margin: 0 auto;
      position: relative;
      top: -56px;
      width: 82%;
      z-index: 100; } }
  @media (max-width: 767px) {
    .article__body {
      margin-top: 0; } }
  @media (min-width: 1024px) and (max-width: 1180px) {
    .article__body {
      margin-left: 3%;
      width: 97%; } }
  @media (max-width: 1007px) {
    .article__body {
      margin-top: 0; } }

.article__mpu {
  flex-basis: 333px;
  flex-grow: 0;
  height: auto; }

.article__body-content,
.article__body .article__partner,
.article__author-unit {
  padding: 0 10px;
  margin-bottom: 0; }
  @media (min-width: 650px) {
    .article__body-content,
    .article__body .article__partner,
    .article__author-unit {
      padding: 0 18px; } }
  @media (min-width: 1023px) {
    .article__body-content,
    .article__body .article__partner,
    .article__author-unit {
      padding: 0 6% 0 18px; } }

.article__container {
  display: flex;
  justify-content: center;
  width: 100%; }

.article__container + .related-articles {
  margin-top: 30px;
  margin-bottom: 20px; }

.article__intro {
  color: #4d4d49;
  font-size: 18px;
  font-weight: bold;
  letter-spacing: -0.5px;
  line-height: 28px;
  margin-bottom: 24px;
  padding: 14px 0 0; }
  @media (min-width: 650px) {
    .article__intro {
      font-size: 26px;
      font-weight: 400;
      letter-spacing: -1.63px;
      line-height: 37px; } }

.article__end {
  clear: both;
  padding-top: 36px; }

.article__fade-story {
  background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
  bottom: 0;
  height: 210px;
  position: absolute;
  width: 100%;
  z-index: 1501; }

.article__fade-story--show {
  display: block !important; }

.article__body--short {
  height: 700px;
  overflow: hidden;
  position: relative; }
  @media (min-width: 768px) {
    .article__body--short {
      height: 800px; } }

.article__load-more {
  bottom: 24px;
  display: block !important;
  -ms-grid-column: 1;
  -ms-grid-column-span: 1;
  grid-column: 1 / span 1;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
  z-index: 1502; }

.article--hidden {
  display: none !important; }

.article__similar-articles {
  flex: 1 0 333px;
  max-width: 333px; }
  .article__similar-articles--hidden {
    display: none; }
  .article__similar-articles--show {
    display: block; }

@media (max-width: 1365px) and (min-width: 1280px) {
  .hero-video__video {
    max-height: 534px;
    width: 73.5% !important; } }

@media (min-width: 1366px) {
  .hero-video__video {
    left: 5.5%;
    max-height: 534px;
    max-width: 949px;
    width: 70% !important; } }

@media (min-width: 1668px) {
  .hero-video__video {
    left: 14%; } }

@media (min-width: 1900px) {
  .hero-video__video {
    left: 18.5%; } }

.inline-audio {
  display: block;
  padding-top: 8px; }

.article__audio-ad {
  display: flex;
  position: relative;
  margin: 17px 0 14px; }
  @media (max-width: 767px) {
    .article__audio-ad {
      margin: 2px 0 6px; } }
  .article__audio-ad .bbccom_slot {
    padding: 0; }
  .article__audio-ad .bbccom_advert {
    display: flex !important;
    max-width: 100%; }
  .article__audio-ad .bbccom_slot .bbccom_text {
    color: #000 !important;
    font-size: 9px !important;
    font-family: ArialMT !important;
    font-weight: normal !important;
    line-height: 15px !important;
    letter-spacing: 0 !important;
    text-transform: uppercase !important;
    text-align: left !important;
    margin: auto 12px 0 0 !important;
    width: 144px; }
@media (min-width: 1280px) {
  .article-header .article-headline__text {
    font-size: 48px !important; } }

.article-header__leaderboard {
  background: #f1f1f1 !important; }
  .article-header__leaderboard > div > div.bbccom_visible {
    background: #f1f1f1 !important;
    min-height: 100px; }

.article-header__hero-ad {
  display: flex;
  flex-direction: row-reverse; }
  .article-header__hero-ad > div > div.bbccom_visible > div {
    background: #f1f1f1 !important; }

.article-header__video .article-video__video {
  height: 100%;
  margin: auto;
  width: 100%; }
  @media (max-width: 1179px) and (min-width: 768px) {
    .article-header__video .article-video__video {
      height: 80%;
      width: 64%; } }
  @media (max-width: 1180px) and (min-width: 1024px) {
    .article-header__video .article-video__video {
      height: 80%;
      margin-left: 0;
      width: 90%; } }
  @media (min-width: 1181px) {
    .article-header__video .article-video__video {
      height: 80%;
      width: 64%; } }

@media (min-width: 1024px) {
  .article-header__video--ads .article-video__video {
    margin-left: 0;
    width: calc(100% - 333px); } }

/* this delimiter is used in infinite scroll */
.WaypointsList > div + div .article {
  /* stylelint-disable-next-line selector-max-compound-selectors */ }
  .WaypointsList > div + div .article .article-headline::before {
    content: ' ';
    font-size: 0;
    display: block;
    width: 25px;
    height: 3px;
    background: var(--brand-active-colour, currentColor);
    margin: 0 auto 40px; }
.article-body-native-ad {
  margin-bottom: 41px; }

.article-body-native-ad > div > div > div {
  background: #f1f1f1;
  clear: both;
  overflow: hidden;
  padding: 8px !important; }

.article-body-native-ad a {
  padding-right: 15px; }

@media screen and (max-width: 320px) {
  .article-body-native-ad {
    margin-left: -10px;
    width: 320px; } }

.article-body__iframe {
  padding-top: 20px; }

.article-body__pull-quote {
  clear: both;
  margin: 20px 0;
  padding-top: 0; }

.article-body__video-text {
  clear: both;
  margin: 0;
  padding: 20px 0 0;
  width: 100%; }
  @media (max-width: 767px) {
    .article-body__video-text {
      margin-left: -10px;
      width: 107%; } }

.article-body__callout-box {
  float: left;
  clear: both;
  margin: 1rem 1rem 1rem -8rem; }

.article-body__callout-box-mobile {
  float: left;
  clear: both;
  margin: 3rem 0;
  width: 100%; }

.article-body__image-text {
  padding: 0; }

.article-body__mpu-title {
  color: #444;
  font-family: inherit;
  font-size: 14px;
  font-style: italic;
  text-align: center; }

.article-body__image-text--square {
  margin: 20px 0; }

.article-body__image-text--portrait {
  margin: 20px 0; }
  @media (max-width: 599px) {
    .article-body__image-text--portrait {
      margin-left: -3%;
      width: 106%; } }

.article-body__image-text img {
  width: 100%; }

.article-body__video-text, .article-body__image-text--landscape {
  margin: 20px 0 20px -3%;
  width: 106%; }
  @media (max-width: 1000px) and (min-width: 767px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -16%;
      width: 116%; } }
  @media (max-width: 1180px) and (min-width: 1024px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -8%;
      width: 108%; } }
  @media (max-width: 1365px) and (min-width: 1280px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -39%;
      width: 139%; } }
  @media (min-width: 1366px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -52%;
      width: 152%; } }

.article-body__image-gallery .swipe-items__container,
.article-body__image-gallery .swipe-items__gallery {
  padding: 0; }

.article-body__image-gallery {
  margin: 20px 0; }
.around-the-bbc-swimlane {
  margin-top: auto; }
</style>
      <script src="https://cdn.optimizely.com/public/4621041136/s/features_prod.js"></script>
    <style type="text/css" id="s9fXB-0">/* stylelint-disable property-no-unknown */

.styled-line {
  background-color: #8beed9;
  height: 3px;
  width: 72px;
}

.styled-line--small {
  width: 45px;
}

.styled-line--medium {
  width: 135px;
}

.styled-line--large {
  height: 1px;
  width: auto;
}

.styled-line--height--large {
  height: 5px;
}

.styled-line--height--small {
  height: 1px;
}

.styled-line--xs-small {
  width: 25px;
}

.styled-line--worklife {
  background-color: #8beed9;
}

.styled-line--future {
  background-color: #ffc857;
}

.styled-line--culture {
  background-color: #472479;
}

.styled-line--earth {
  background-color: #002856;
}

.styled-line--travel {
  background-color: #002856;
}

.styled-line--white {
  background-color: #fff;
}

.styled-line--dark-grey {
  background-color: #6a6a6a;
}

.styled-line--light-grey {
  background-color: #4b4b4b;
}

.styled-line--grey {
  background-color: #dedede;
}

.article-intro {
  position: relative;
}

.article-intro__line {
  margin-top: 24px;
}

/* stylelint-disable property-no-unknown */

@font-face {
  font-family: 'CuriousSansBold';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.b389ec59.eot), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.b389ec59.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/curious-sans-bold.ba46d70f.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-core';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.cc52df12.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.cc52df12.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-core.5435c223.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-media';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.41063609.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.41063609.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-media.28e9b877.ttf) format("truetype");
}

@font-face {
  font-family: 'gelicons-social';
  font-style: normal;
  font-weight: normal;
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.523533c6.eot);
  src: url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.523533c6.eot) format("embedded-opentype"), url(https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/media/gelicons-social.407b297d.ttf) format("truetype");
}

.gelicon {
  font-family: 'gelicons-core';
}

.gelicon,
.gelicon::before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-style: normal !important;
  font-weight: normal !important;
  speak: none;
  text-decoration: none !important;
}

.gelicon--leading::before {
  margin-right: 8px;
}

.gelicon--trailing::before {
  margin-left: 8px;
}

.gelicon--social {
  font-family: 'gelicons-social' !important;
}

.gelicon--core {
  font-family: 'gelicons-core' !important;
}

/* Set font on all icons (need to do this as Opera doesn't fallback per Glyph) */

/* On the icon, not ::before as IE7 hack injects the icon into the element instead of a pseudo element */

.gelicon--iplayer,
.gelicon--iplayer-radio,
.gelicon--previous,
.gelicon--up,
.gelicon--down,
.gelicon--next,
.gelicon--tobottom,
.gelicon--totop,
.gelicon--zoomin,
.gelicon--zoomout,
.gelicon--search,
.gelicon--print,
.gelicon--print-invert,
.gelicon--yes,
.gelicon--no,
.gelicon--add,
.gelicon--help,
.gelicon--info,
.gelicon--alert,
.gelicon--expires,
.gelicon--duration,
.gelicon--alarm,
.gelicon--countdown,
.gelicon--grid,
.gelicon--chapters,
.gelicon--list,
.gelicon--listthumb,
.gelicon--lock,
.gelicon--unlock,
.gelicon--home,
.gelicon--new,
.gelicon--vocab,
.gelicon--degraded,
.gelicon--calendar-mini,
.gelicon--calendar,
.gelicon--mail,
.gelicon--location,
.gelicon--load,
.gelicon--settings,
.gelicon--embed,
.gelicon--external,
.gelicon--traffic,
.gelicon--refresh,
.gelicon--link,
.gelicon--point,
.gelicon--upload,
.gelicon--download,
.gelicon--finder,
.gelicon--stations,
.gelicon--untitled,
.gelicon--untitled-2,
.gelicon--quote,
.gelicon--calendar-30,
.gelicon--download-desktop,
.gelicon--map,
.gelicon--previous-alternative,
.gelicon--next-alternative,
.gelicon--arrow-down {
  font-family: 'gelicons-core' !important;
}

/* Begin Icons */

.gelicon--iplayer::before {
  content: '\e000';
}

.gelicon--iplayer-radio::before {
  content: '\e001';
}

.gelicon--previous::before {
  content: '\e002';
}

.gelicon--up::before {
  content: '\e003';
}

.gelicon--down::before {
  content: '\e004';
}

.gelicon--next::before {
  content: '\e005';
}

.gelicon--tobottom::before {
  content: '\e006';
}

.gelicon--totop::before {
  content: '\e007';
}

.gelicon--zoomin::before {
  content: '\e008';
}

.gelicon--zoomout::before {
  content: '\e00a';
}

.gelicon--search::before {
  content: '\e009';
}

.gelicon--print::before {
  content: '\e00b';
}

.gelicon--print-invert::before {
  content: '\e00c';
}

.gelicon--yes::before {
  content: '\e00d';
}

.gelicon--no::before {
  content: '\e00e';
}

.gelicon--add::before {
  content: '\e00f';
}

.gelicon--help::before {
  content: '\e010';
}

.gelicon--info::before {
  content: '\e011';
}

.gelicon--alert::before {
  content: '\e012';
}

.gelicon--expires::before {
  content: '\e013';
}

.gelicon--duration::before {
  content: '\e014';
}

.gelicon--alarm::before {
  content: '\e015';
}

.gelicon--countdown::before {
  content: '\e016';
}

.gelicon--grid::before {
  content: '\e017';
}

.gelicon--chapters::before {
  content: '\e018';
}

.gelicon--list::before {
  content: '\e019';
}

.gelicon--listthumb::before {
  content: '\e01a';
}

.gelicon--lock::before {
  content: '\e01b';
}

.gelicon--unlock::before {
  content: '\e01c';
}

.gelicon--home::before {
  content: '\e01d';
}

.gelicon--new::before {
  content: '\e01e';
}

.gelicon--vocab::before {
  content: '\e01f';
}

.gelicon--degraded::before {
  content: '\e020';
}

.gelicon--calendar-mini::before {
  content: '\e021';
}

.gelicon--calendar::before {
  content: '\e022';
}

.gelicon--mail::before {
  content: '\e023';
}

.gelicon--location::before {
  content: '\e024';
}

.gelicon--load::before {
  content: '\e025';
}

.gelicon--settings::before {
  content: '\e026';
}

.gelicon--embed::before {
  content: '\e027';
}

.gelicon--external::before {
  content: '\e028';
}

.gelicon--traffic::before {
  content: '\e029';
}

.gelicon--refresh::before {
  content: '\e02a';
}

.gelicon--link::before {
  content: '\e02b';
}

.gelicon--point::before {
  content: '\e02c';
}

.gelicon--upload::before {
  content: '\e02d';
}

.gelicon--download::before {
  content: '\e02e';
}

.gelicon--finder::before {
  content: '\e02f';
}

.gelicon--stations::before {
  content: '\e030';
}

.gelicon--untitled::before {
  content: '\42';
}

.gelicon--untitled-2::before {
  content: '\43';
}

.gelicon--quote::before {
  content: '\22';
}

.gelicon--playlister-add::before {
  content: '\e031';
}

.gelicon--calendar-30::before {
  content: '\e032';
}

.gelicon--download-desktop::before {
  content: '\e033';
}

.gelicon--map::before {
  content: '\e034';
}

.gelicon--previous-alternative::before {
  content: '\e035';
}

.gelicon--next-alternative::before {
  content: '\e036';
}

.gelicon--arrow-down::before {
  content: '\e038';
}

/* Media icons */

.gelicon--menu,
.gelicon--live,
.gelicon--subtitles,
.gelicon--ws,
.gelicon--sd,
.gelicon--hd,
.gelicon--bsl,
.gelicon--ad,
.gelicon--3d,
.gelicon--tv,
.gelicon--radio,
.gelicon--mobile,
.gelicon--desktop,
.gelicon--game,
.gelicon--tablet,
.gelicon--quiz,
.gelicon--guidance,
.gelicon--record,
.gelicon--listen,
.gelicon--play,
.gelicon--pause,
.gelicon--rewind,
.gelicon--forward,
.gelicon--restart,
.gelicon--image,
.gelicon--document,
.gelicon--slideshow,
.gelicon--activity,
.gelicon--360,
.gelicon--podcast,
.gelicon--newsletter,
.gelicon--rss,
.gelicon--fullscreen,
.gelicon--expand,
.gelicon--popout,
.gelicon--mute,
.gelicon--music-on,
.gelicon--music-off,
.gelicon--windows,
.gelicon--apple,
.gelicon--interactive {
  font-family: 'gelicons-media' !important;
}

/* Begin Icons */

.gelicon--menu::before {
  content: '\e900';
}

.gelicon--live::before {
  content: '\e100';
}

.gelicon--subtitles::before {
  content: '\e101';
}

.gelicon--ws::before {
  content: '\e102';
}

.gelicon--sd::before {
  content: '\e103';
}

.gelicon--hd::before {
  content: '\e104';
}

.gelicon--bsl::before {
  content: '\e105';
}

.gelicon--ad::before {
  content: '\e106';
}

.gelicon--3d::before {
  content: '\e107';
}

.gelicon--tv::before {
  content: '\e108';
}

.gelicon--radio::before {
  content: '\e109';
}

.gelicon--mobile::before {
  content: '\e10a';
}

.gelicon--desktop::before {
  content: '\e10b';
}

.gelicon--game::before {
  content: '\e10c';
}

.gelicon--tablet::before {
  content: '\e10d';
}

.gelicon--quiz::before {
  content: '\e10e';
}

.gelicon--guidance::before {
  content: '\e10f';
}

.gelicon--record::before {
  content: '\e110';
}

.gelicon--listen::before {
  content: '\e111';
}

.gelicon--play::before {
  content: '\e112';
}

.gelicon--pause::before {
  content: '\e113';
}

.gelicon--rewind::before {
  content: '\e114';
}

.gelicon--forward::before {
  content: '\e115';
}

.gelicon--restart::before {
  content: '\e116';
}

.gelicon--image::before {
  content: '\e117';
}

.gelicon--document::before {
  content: '\e118';
}

.gelicon--slideshow::before {
  content: '\e119';
}

.gelicon--activity::before {
  content: '\e11a';
}

.gelicon--360::before {
  content: '\e11b';
}

.gelicon--podcast::before {
  content: '\e11c';
}

.gelicon--newsletter::before {
  content: '\e11d';
}

.gelicon--rss::before {
  content: '\e11e';
}

.gelicon--fullscreen::before {
  content: '\e11f';
}

.gelicon--expand::before {
  content: '\e120';
}

.gelicon--popout::before {
  content: '\e121';
}

.gelicon--mute::before {
  content: '\e122';
}

.gelicon--music-on::before {
  content: '\e123';
}

.gelicon--music-off::before {
  content: '\e124';
}

.gelicon--windows::before {
  content: '\e125';
}

.gelicon--apple::before {
  content: '\e126';
}

.gelicon--interactive::before {
  content: '\e900';
}

/* Social Icons */

.gelicon--share,
.gelicon--recommend,
.gelicon--comments,
.gelicon--blog,
.gelicon--smiley,
.gelicon--love,
.gelicon--twitter,
.gelicon--facebook,
.gelicon--google-plus,
.gelicon--google,
.gelicon--spotify,
.gelicon--pinterest,
.gelicon--tumblr,
.gelicon--stumbleupon,
.gelicon--linkedin,
.gelicon--reddit,
.gelicon--digg,
.gelicon--instagram,
.gelicon--whatsapp {
  font-family: 'gelicons-social' !important;
}

/* GEL */

.gelicon--share::before {
  content: '\e200';
}

.gelicon--recommend::before {
  content: '\e201';
}

.gelicon--comments::before {
  content: '\e202';
}

.gelicon--blog::before {
  content: '\e203';
}

.gelicon--smiley::before {
  content: '\e204';
}

.gelicon--love::before {
  content: '\e205';
}

/* THIRD PARTY */

.gelicon--twitter::before {
  content: '\e300';
}

.gelicon--facebook::before {
  content: '\e301';
}

.gelicon--google-plus::before {
  content: '\e700';
}

.gelicon--google::before {
  content: '\e701';
}

.gelicon--spotify::before {
  content: '\e304';
}

.gelicon--pinterest::before {
  content: '\e305';
}

.gelicon--tumblr::before {
  content: '\e306';
}

.gelicon--stumbleupon::before {
  content: '\e307';
}

.gelicon--linkedin::before {
  content: '\e308';
}

.gelicon--reddit::before {
  content: '\e309';
}

.gelicon--digg::before {
  content: '\e30a';
}

.gelicon--instagram::before {
  content: '\e30b';
}

.gelicon--whatsapp::before {
  content: '\e600';
}

.mapboxgl-map {
  font: 12px/20px Helvetica Neue,Arial,Helvetica,sans-serif;
  overflow: hidden;
  position: relative;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.mapboxgl-canvas {
  position: absolute;
  left: 0;
  top: 0;
}

.mapboxgl-map:-webkit-full-screen {
  width: 100%;
  height: 100%;
}

.mapboxgl-canary {
  background-color: salmon;
}

.mapboxgl-canvas-container.mapboxgl-interactive,
.mapboxgl-ctrl-group button.mapboxgl-ctrl-compass {
  cursor: -webkit-grab;
  cursor: grab;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.mapboxgl-canvas-container.mapboxgl-interactive.mapboxgl-track-pointer {
  cursor: pointer;
}

.mapboxgl-canvas-container.mapboxgl-interactive:active,
.mapboxgl-ctrl-group button.mapboxgl-ctrl-compass:active {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}

.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate,
.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate .mapboxgl-canvas {
  -ms-touch-action: pan-x pan-y;
  touch-action: pan-x pan-y;
}

.mapboxgl-canvas-container.mapboxgl-touch-drag-pan,
.mapboxgl-canvas-container.mapboxgl-touch-drag-pan .mapboxgl-canvas {
  -ms-touch-action: pinch-zoom;
  touch-action: pinch-zoom;
}

.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate.mapboxgl-touch-drag-pan,
.mapboxgl-canvas-container.mapboxgl-touch-zoom-rotate.mapboxgl-touch-drag-pan .mapboxgl-canvas {
  -ms-touch-action: none;
  touch-action: none;
}

.mapboxgl-ctrl-bottom-left,
.mapboxgl-ctrl-bottom-right,
.mapboxgl-ctrl-top-left,
.mapboxgl-ctrl-top-right {
  position: absolute;
  pointer-events: none;
  z-index: 2;
}

.mapboxgl-ctrl-top-left {
  top: 0;
  left: 0;
}

.mapboxgl-ctrl-top-right {
  top: 0;
  right: 0;
}

.mapboxgl-ctrl-bottom-left {
  bottom: 0;
  left: 0;
}

.mapboxgl-ctrl-bottom-right {
  right: 0;
  bottom: 0;
}

.mapboxgl-ctrl {
  clear: both;
  pointer-events: auto;
  -webkit-transform: translate(0);
  transform: translate(0);
}

.mapboxgl-ctrl-top-left .mapboxgl-ctrl {
  margin: 10px 0 0 10px;
  float: left;
}

.mapboxgl-ctrl-top-right .mapboxgl-ctrl {
  margin: 10px 10px 0 0;
  float: right;
}

.mapboxgl-ctrl-bottom-left .mapboxgl-ctrl {
  margin: 0 0 10px 10px;
  float: left;
}

.mapboxgl-ctrl-bottom-right .mapboxgl-ctrl {
  margin: 0 10px 10px 0;
  float: right;
}

.mapboxgl-ctrl-group {
  border-radius: 4px;
  background: #fff;
}

.mapboxgl-ctrl-group:not(:empty) {
  -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl-group:not(:empty) {
    -webkit-box-shadow: 0 0 0 2px ButtonText;
    box-shadow: 0 0 0 2px ButtonText;
  }
}

.mapboxgl-ctrl-group button {
  width: 29px;
  height: 29px;
  display: block;
  padding: 0;
  outline: none;
  border: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  background-color: transparent;
  cursor: pointer;
}

.mapboxgl-ctrl-group button + button {
  border-top: 1px solid #ddd;
}

.mapboxgl-ctrl button .mapboxgl-ctrl-icon {
  display: block;
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl-icon {
    background-color: transparent;
  }

  .mapboxgl-ctrl-group button + button {
    border-top: 1px solid ButtonText;
  }
}

.mapboxgl-ctrl button::-moz-focus-inner {
  border: 0;
  padding: 0;
}

.mapboxgl-ctrl-group button:focus {
  -webkit-box-shadow: 0 0 2px 2px #0096ff;
  box-shadow: 0 0 2px 2px #0096ff;
}

.mapboxgl-ctrl button:disabled {
  cursor: not-allowed;
}

.mapboxgl-ctrl button:disabled .mapboxgl-ctrl-icon {
  opacity: .25;
}

.mapboxgl-ctrl button:not(:disabled):hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.mapboxgl-ctrl-group button:focus:focus-visible {
  -webkit-box-shadow: 0 0 2px 2px #0096ff;
  box-shadow: 0 0 2px 2px #0096ff;
}

.mapboxgl-ctrl-group button:focus:not(:focus-visible) {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.mapboxgl-ctrl-group button:focus:first-child {
  border-radius: 4px 4px 0 0;
}

.mapboxgl-ctrl-group button:focus:last-child {
  border-radius: 0 0 4px 4px;
}

.mapboxgl-ctrl-group button:focus:only-child {
  border-radius: inherit;
}

.mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-out .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 13c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h9c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-9z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-zoom-in .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.5 8.5c-.75 0-1.5.75-1.5 1.5v3h-3c-.75 0-1.5.75-1.5 1.5S9.25 16 10 16h3v3c0 .75.75 1.5 1.5 1.5S16 19.75 16 19v-3h3c.75 0 1.5-.75 1.5-1.5S19.75 13 19 13h-3v-3c0-.75-.75-1.5-1.5-1.5z'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-fullscreen .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M24 16v5.5c0 1.75-.75 2.5-2.5 2.5H16v-1l3-1.5-4-5.5 1-1 5.5 4 1.5-3h1zM6 16l1.5 3 5.5-4 1 1-4 5.5 3 1.5v1H7.5C5.75 24 5 23.25 5 21.5V16h1zm7-11v1l-3 1.5 4 5.5-1 1-5.5-4L6 13H5V7.5C5 5.75 5.75 5 7.5 5H13zm11 2.5c0-1.75-.75-2.5-2.5-2.5H16v1l3 1.5-4 5.5 1 1 5.5-4 1.5 3h1V7.5z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-shrink .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.5 16c-1.75 0-2.5.75-2.5 2.5V24h1l1.5-3 5.5 4 1-1-4-5.5 3-1.5v-1h-5.5zM13 18.5c0-1.75-.75-2.5-2.5-2.5H5v1l3 1.5L4 24l1 1 5.5-4 1.5 3h1v-5.5zm3-8c0 1.75.75 2.5 2.5 2.5H24v-1l-3-1.5L25 5l-1-1-5.5 4L17 5h-1v5.5zM10.5 13c1.75 0 2.5-.75 2.5-2.5V5h-1l-1.5 3L5 4 4 5l4 5.5L5 12v1h5.5z'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23ccc'/%3E%3C/svg%3E");
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23999'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-compass .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 29 29' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10.5 14l4-8 4 8h-8z'/%3E%3Cpath d='M10.5 16l4 8 4-8h-8z' fill='%23ccc'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23333'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23aaa'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active-error .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e58978'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background-error .mapboxgl-ctrl-icon {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e54e33'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
}

.mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-waiting .mapboxgl-ctrl-icon {
  -webkit-animation: mapboxgl-spin 2s linear infinite;
  animation: mapboxgl-spin 2s linear infinite;
}

@media (-ms-high-contrast: active) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23fff'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23999'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-active-error .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e58978'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%2333b5e5'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate.mapboxgl-ctrl-geolocate-background-error .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23e54e33'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3C/svg%3E");
  }

  .mapboxgl-ctrl button.mapboxgl-ctrl-geolocate:disabled .mapboxgl-ctrl-icon {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='29' height='29' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill='%23666'%3E%3Cpath d='M10 4C9 4 9 5 9 5v.1A5 5 0 005.1 9H5s-1 0-1 1 1 1 1 1h.1A5 5 0 009 14.9v.1s0 1 1 1 1-1 1-1v-.1a5 5 0 003.9-3.9h.1s1 0 1-1-1-1-1-1h-.1A5 5 0 0011 5.1V5s0-1-1-1zm0 2.5a3.5 3.5 0 110 7 3.5 3.5 0 110-7z'/%3E%3Ccircle cx='10' cy='10' r='2'/%3E%3Cpath d='M14 5l1 1-9 9-1-1 9-9z' fill='red'/%3E%3C/svg%3E");
  }
}

@-webkit-keyframes mapboxgl-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(1turn);
  }
}

@keyframes mapboxgl-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(1turn);
    transform: rotate(1turn);
  }
}

a.mapboxgl-ctrl-logo {
  width: 88px;
  height: 23px;
  margin: 0 0 -4px -4px;
  display: block;
  background-repeat: no-repeat;
  cursor: pointer;
  overflow: hidden;
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg opacity='.3' stroke='%23000' stroke-width='3'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cg opacity='.9' fill='%23fff'%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");
}

a.mapboxgl-ctrl-logo.mapboxgl-compact {
  width: 23px;
}

@media (-ms-high-contrast: active) {
  a.mapboxgl-ctrl-logo {
    background-color: transparent;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg stroke='%23000' stroke-width='3'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cg fill='%23fff'%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");
  }
}

@media (-ms-high-contrast: black-on-white) {
  a.mapboxgl-ctrl-logo {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='88' height='23' viewBox='0 0 88 23' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill-rule='evenodd'%3E%3Cdefs%3E%3Cpath id='a' d='M11.5 2.25c5.105 0 9.25 4.145 9.25 9.25s-4.145 9.25-9.25 9.25-9.25-4.145-9.25-9.25 4.145-9.25 9.25-9.25zM6.997 15.983c-.051-.338-.828-5.802 2.233-8.873a4.395 4.395 0 013.13-1.28c1.27 0 2.49.51 3.39 1.42.91.9 1.42 2.12 1.42 3.39 0 1.18-.449 2.301-1.28 3.13C12.72 16.93 7 16 7 16l-.003-.017zM15.3 10.5l-2 .8-.8 2-.8-2-2-.8 2-.8.8-2 .8 2 2 .8z'/%3E%3Cpath id='b' d='M50.63 8c.13 0 .23.1.23.23V9c.7-.76 1.7-1.18 2.73-1.18 2.17 0 3.95 1.85 3.95 4.17s-1.77 4.19-3.94 4.19c-1.04 0-2.03-.43-2.74-1.18v3.77c0 .13-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V8.23c0-.12.1-.23.23-.23h1.4zm-3.86.01c.01 0 .01 0 .01-.01.13 0 .22.1.22.22v7.55c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V15c-.7.76-1.69 1.19-2.73 1.19-2.17 0-3.94-1.87-3.94-4.19 0-2.32 1.77-4.19 3.94-4.19 1.03 0 2.02.43 2.73 1.18v-.75c0-.12.1-.23.23-.23h1.4zm26.375-.19a4.24 4.24 0 00-4.16 3.29c-.13.59-.13 1.19 0 1.77a4.233 4.233 0 004.17 3.3c2.35 0 4.26-1.87 4.26-4.19 0-2.32-1.9-4.17-4.27-4.17zM60.63 5c.13 0 .23.1.23.23v3.76c.7-.76 1.7-1.18 2.73-1.18 1.88 0 3.45 1.4 3.84 3.28.13.59.13 1.2 0 1.8-.39 1.88-1.96 3.29-3.84 3.29-1.03 0-2.02-.43-2.73-1.18v.77c0 .12-.1.23-.23.23h-1.4c-.13 0-.23-.1-.23-.23V5.23c0-.12.1-.23.23-.23h1.4zm-34 11h-1.4c-.13 0-.23-.11-.23-.23V8.22c.01-.13.1-.22.23-.22h1.4c.13 0 .22.11.23.22v.68c.5-.68 1.3-1.09 2.16-1.1h.03c1.09 0 2.09.6 2.6 1.55.45-.95 1.4-1.55 2.44-1.56 1.62 0 2.93 1.25 2.9 2.78l.03 5.2c0 .13-.1.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.8 0-1.46.7-1.59 1.62l.01 4.68c0 .13-.11.23-.23.23h-1.41c-.13 0-.23-.11-.23-.23v-4.59c0-.98-.74-1.71-1.62-1.71-.85 0-1.54.79-1.6 1.8v4.5c0 .13-.1.23-.23.23zm53.615 0h-1.61c-.04 0-.08-.01-.12-.03-.09-.06-.13-.19-.06-.28l2.43-3.71-2.39-3.65a.213.213 0 01-.03-.12c0-.12.09-.21.21-.21h1.61c.13 0 .24.06.3.17l1.41 2.37 1.4-2.37a.34.34 0 01.3-.17h1.6c.04 0 .08.01.12.03.09.06.13.19.06.28l-2.37 3.65 2.43 3.7c0 .05.01.09.01.13 0 .12-.09.21-.21.21h-1.61c-.13 0-.24-.06-.3-.17l-1.44-2.42-1.44 2.42a.34.34 0 01-.3.17zm-7.12-1.49c-1.33 0-2.42-1.12-2.42-2.51 0-1.39 1.08-2.52 2.42-2.52 1.33 0 2.42 1.12 2.42 2.51 0 1.39-1.08 2.51-2.42 2.52zm-19.865 0c-1.32 0-2.39-1.11-2.42-2.48v-.07c.02-1.38 1.09-2.49 2.4-2.49 1.32 0 2.41 1.12 2.41 2.51 0 1.39-1.07 2.52-2.39 2.53zm-8.11-2.48c-.01 1.37-1.09 2.47-2.41 2.47s-2.42-1.12-2.42-2.51c0-1.39 1.08-2.52 2.4-2.52 1.33 0 2.39 1.11 2.41 2.48l.02.08zm18.12 2.47c-1.32 0-2.39-1.11-2.41-2.48v-.06c.02-1.38 1.09-2.48 2.41-2.48s2.42 1.12 2.42 2.51c0 1.39-1.09 2.51-2.42 2.51z'/%3E%3C/defs%3E%3Cmask id='c'%3E%3Crect width='100%25' height='100%25' fill='%23fff'/%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/mask%3E%3Cg stroke='%23fff' stroke-width='3' fill='%23fff'%3E%3Ccircle mask='url(%23c)' cx='11.5' cy='11.5' r='9.25'/%3E%3Cuse xlink:href='%23b' mask='url(%23c)'/%3E%3C/g%3E%3Cuse xlink:href='%23a'/%3E%3Cuse xlink:href='%23b'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl.mapboxgl-ctrl-attrib {
  padding: 0 5px;
  background-color: rgba(255, 255, 255, 0.5);
  margin: 0;
}

@media screen {
  .mapboxgl-ctrl-attrib.mapboxgl-compact {
    min-height: 20px;
    padding: 0;
    margin: 10px;
    position: relative;
    background-color: #fff;
    border-radius: 3px 12px 12px 3px;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:hover {
    padding: 2px 24px 2px 4px;
    visibility: visible;
    margin-top: 6px;
  }

  .mapboxgl-ctrl-bottom-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:hover,
  .mapboxgl-ctrl-top-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:hover {
    padding: 2px 4px 2px 24px;
    border-radius: 12px 3px 3px 12px;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact .mapboxgl-ctrl-attrib-inner {
    display: none;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:hover .mapboxgl-ctrl-attrib-inner {
    display: block;
  }

  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    content: "";
    cursor: pointer;
    position: absolute;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
    background-color: rgba(255, 255, 255, 0.5);
    width: 24px;
    height: 24px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 12px;
  }

  .mapboxgl-ctrl-bottom-right > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    bottom: 0;
    right: 0;
  }

  .mapboxgl-ctrl-top-right > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    top: 0;
    right: 0;
  }

  .mapboxgl-ctrl-top-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    top: 0;
    left: 0;
  }

  .mapboxgl-ctrl-bottom-left > .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    bottom: 0;
    left: 0;
  }
}

@media screen and (-ms-high-contrast: active) {
  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd' fill='%23fff'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
  }
}

@media screen and (-ms-high-contrast: black-on-white) {
  .mapboxgl-ctrl-attrib.mapboxgl-compact:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='24' height='24' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' fill-rule='evenodd'%3E%3Cpath d='M4 10a6 6 0 1012 0 6 6 0 10-12 0m5-3a1 1 0 102 0 1 1 0 10-2 0m0 3a1 1 0 112 0v3a1 1 0 11-2 0'/%3E%3C/svg%3E");
  }
}

.mapboxgl-ctrl-attrib a {
  color: rgba(0, 0, 0, 0.75);
  text-decoration: none;
}

.mapboxgl-ctrl-attrib a:hover {
  color: inherit;
  text-decoration: underline;
}

.mapboxgl-ctrl-attrib .mapbox-improve-map {
  font-weight: 700;
  margin-left: 2px;
}

.mapboxgl-attrib-empty {
  display: none;
}

.mapboxgl-ctrl-scale {
  background-color: rgba(255, 255, 255, 0.75);
  font-size: 10px;
  border: 2px solid #333;
  border-top: #333;
  padding: 0 5px;
  color: #333;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.mapboxgl-popup {
  position: absolute;
  top: 0;
  left: 0;
  display: -ms-flexbox;
  display: flex;
  will-change: transform;
  pointer-events: none;
}

.mapboxgl-popup-anchor-top,
.mapboxgl-popup-anchor-top-left,
.mapboxgl-popup-anchor-top-right {
  -ms-flex-direction: column;
  flex-direction: column;
}

.mapboxgl-popup-anchor-bottom,
.mapboxgl-popup-anchor-bottom-left,
.mapboxgl-popup-anchor-bottom-right {
  -ms-flex-direction: column-reverse;
  flex-direction: column-reverse;
}

.mapboxgl-popup-anchor-left {
  -ms-flex-direction: row;
  flex-direction: row;
}

.mapboxgl-popup-anchor-right {
  -ms-flex-direction: row-reverse;
  flex-direction: row-reverse;
}

.mapboxgl-popup-tip {
  width: 0;
  height: 0;
  border: 10px solid transparent;
  z-index: 1;
}

.mapboxgl-popup-anchor-top .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-top: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-top-left .mapboxgl-popup-tip {
  -ms-flex-item-align: start;
  align-self: flex-start;
  border-top: none;
  border-left: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-top-right .mapboxgl-popup-tip {
  -ms-flex-item-align: end;
  align-self: flex-end;
  border-top: none;
  border-right: none;
  border-bottom-color: #fff;
}

.mapboxgl-popup-anchor-bottom .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-bottom: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-tip {
  -ms-flex-item-align: start;
  align-self: flex-start;
  border-bottom: none;
  border-left: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-tip {
  -ms-flex-item-align: end;
  align-self: flex-end;
  border-bottom: none;
  border-right: none;
  border-top-color: #fff;
}

.mapboxgl-popup-anchor-left .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-left: none;
  border-right-color: #fff;
}

.mapboxgl-popup-anchor-right .mapboxgl-popup-tip {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  border-right: none;
  border-left-color: #fff;
}

.mapboxgl-popup-close-button {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0 3px 0 0;
  cursor: pointer;
  background-color: transparent;
}

.mapboxgl-popup-close-button:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.mapboxgl-popup-content {
  position: relative;
  background: #fff;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  padding: 10px 10px 15px;
  pointer-events: auto;
}

.mapboxgl-popup-anchor-top-left .mapboxgl-popup-content {
  border-top-left-radius: 0;
}

.mapboxgl-popup-anchor-top-right .mapboxgl-popup-content {
  border-top-right-radius: 0;
}

.mapboxgl-popup-anchor-bottom-left .mapboxgl-popup-content {
  border-bottom-left-radius: 0;
}

.mapboxgl-popup-anchor-bottom-right .mapboxgl-popup-content {
  border-bottom-right-radius: 0;
}

.mapboxgl-popup-track-pointer {
  display: none;
}

.mapboxgl-popup-track-pointer * {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.mapboxgl-map:hover .mapboxgl-popup-track-pointer {
  display: -ms-flexbox;
  display: flex;
}

.mapboxgl-map:active .mapboxgl-popup-track-pointer {
  display: none;
}

.mapboxgl-marker {
  position: absolute;
  top: 0;
  left: 0;
  will-change: transform;
}

.mapboxgl-user-location-dot,
.mapboxgl-user-location-dot:before {
  background-color: #1da1f2;
  width: 15px;
  height: 15px;
  border-radius: 50%;
}

.mapboxgl-user-location-dot:before {
  content: "";
  position: absolute;
  -webkit-animation: mapboxgl-user-location-dot-pulse 2s infinite;
  animation: mapboxgl-user-location-dot-pulse 2s infinite;
}

.mapboxgl-user-location-dot:after {
  border-radius: 50%;
  border: 2px solid #fff;
  content: "";
  height: 19px;
  left: -2px;
  position: absolute;
  top: -2px;
  width: 19px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.35);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.35);
}

@-webkit-keyframes mapboxgl-user-location-dot-pulse {
  0% {
    -webkit-transform: scale(1);
    opacity: 1;
  }

  70% {
    -webkit-transform: scale(3);
    opacity: 0;
  }

  to {
    -webkit-transform: scale(1);
    opacity: 0;
  }
}

@keyframes mapboxgl-user-location-dot-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }

  70% {
    -webkit-transform: scale(3);
    transform: scale(3);
    opacity: 0;
  }

  to {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}

.mapboxgl-user-location-dot-stale {
  background-color: #aaa;
}

.mapboxgl-user-location-dot-stale:after {
  display: none;
}

.mapboxgl-user-location-accuracy-circle {
  background-color: rgba(29, 161, 242, 0.2);
  width: 1px;
  height: 1px;
  border-radius: 100%;
}

.mapboxgl-crosshair,
.mapboxgl-crosshair .mapboxgl-interactive,
.mapboxgl-crosshair .mapboxgl-interactive:active {
  cursor: crosshair;
}

.mapboxgl-boxzoom {
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
  background: #fff;
  border: 2px dotted #202020;
  opacity: .5;
}

@media print {
  .mapbox-improve-map {
    display: none;
  }
}

/* stylelint-disable property-no-unknown */

.partner-module {
  border-bottom: 1px solid #472479;
  border-top: 0;
}

.partner-module__link,
.partner-module__link:visited {
  -ms-flex-align: center;
  align-items: center;
  color: #444;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0;
  text-decoration: none;
}

.partner-module__link:hover {
  background-color: #f5f5f5;
}

.partner-module__heading {
  display: inline-block;
  font-size: 16px;
  line-height: 22px;
  margin: 16px 0;
}

.partner-module__partner-name {
  font-weight: bold;
}

.partner-module__partner-logo {
  display: block;
  height: 31px;
  margin: 12px 0;
  margin-left: 17px;
  width: 88px;
}

/* stylelint-disable property-no-unknown */

.author-unit {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: 14px;
  letter-spacing: -0.1px;
  line-height: 35px;
}

.author-unit--small-mobile {
  line-height: 30px;
}

.author-unit .author-unit__container {
  color: #4a4a4a;
  margin: 0 auto;
}

.author-unit .author-unit__container--desktop {
  margin: 0;
}

.author-unit__container {
  -ms-flex-align: baseline;
  align-items: baseline;
  display: -ms-flexbox;
  display: flex;
  padding: 10px 0;
}

.author-unit__text {
  font-style: italic;
  font-weight: 600;
  padding-right: 10px;
  text-decoration: none;
}

.author-unit__icon {
  color: #6a6a6a;
  padding-right: 14px;
  position: relative;
  text-decoration: none;
  top: 1px;
}

.author-unit__icon:hover {
  color: #00bbf2;
}

/* stylelint-disable property-no-unknown */

.uppercase-label {
  color: #8f8d8d;
  font-size: 12px;
  font-style: condensed;
  font-weight: bold;
  letter-spacing: 1px;
  line-height: 16px;
  margin: 0;
  padding: 0;
  text-transform: uppercase;
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}

.uppercase-label--small {
  font-size: 11px;
  font-weight: 400;
  line-height: 14px;
  margin: 0;
}

.uppercase-label--medium {
  font-size: 14px;
  line-height: 18px;
}

.uppercase-label--reith-condensed {
  font-weight: 400;
}

.uppercase-label--white {
  color: #ebebeb;
}

.uppercase-label--light-grey {
  color: #999;
}

.uppercase-label--dark-grey {
  color: #444;
}

.uppercase-label--large {
  font-size: 16px;
  line-height: 18px;
}

.uppercase-label--true-white {
  color: #fff;
  text-shadow: 0 1px 1px #193e6d;
}

.uppercase-label--arial {
  font-family: Arial;
}

.label-with-line {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.label-with-line__label {
  margin: 0 16px 0 0;
}

.body-text-card-inline-video {
  margin: 24px 0;
  position: relative;
}

/* stylelint-disable property-no-unknown */

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.spinner {
  fill: #444;
}

.spinner__image {
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}

.spinner--worklife {
  fill: #8beed9;
}

.spinner--future {
  fill: #ffc857;
}

.spinner--culture {
  fill: #472479;
}

.spinner--travel {
  fill: #002856;
}

.spinner--earth {
  fill: #002856;
}

.spinner--white {
  fill: #fff;
}

.spinner--audio {
  height: 32px;
  width: 32px;
}

/* stylelint-disable property-no-unknown */

/* stylelint-disable property-no-unknown */

.inline-video {
  height: 100%;
}

.inline-video__container {
  position: relative;
}

.inline-video__border-line {
  padding: 0 10px;
}

.inline-video .play-button__inline-video {
  bottom: 0;
  left: 0;
  position: absolute;
  z-index: 1000;
}

.inline-video__smp {
  background-color: #000;
  padding-bottom: 56.25%;
}

.inline-video__smp--loaded {
  background-color: unset;
  padding-bottom: unset;
}

.inline-video__description {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  color: #737373;
  font-size: 16px;
  font-style: italic;
  line-height: 24px;
  margin: 0 10px 0 3%;
  padding: 20px 0 12px;
}

.inline-video__description--desktop {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  margin: 0 18px;
  padding: 28px 0 18px;
}

/* stylelint-disable property-no-unknown */

.inline-image__description {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  font-style: italic;
  margin: 0 10px;
  padding: 20px 0 12px;
}

.inline-image__description--desktop {
  border-bottom: 1px solid rgba(106, 106, 106, 0.43);
  margin: 0 18px;
  padding: 20px 0 18px;
}

.inline-image img {
  border-radius: 0;
}

/* stylelint-disable property-no-unknown */

.inline-quote {
  border-left: 3px solid #575757;
  color: #575757;
  font-style: italic;
  letter-spacing: -1.69px;
  line-height: 32px;
  margin: 0;
  padding-left: 22px;
}

.inline-quote--worklife {
  border-left: 3px solid #8beed9;
}

.inline-quote--future {
  border-left: 3px solid #ffc857;
}

.inline-quote--culture {
  border-left: 3px solid #472479;
}

.inline-quote--earth {
  border-left: 3px solid #002856;
}

.inline-quote h2 {
  font-weight: 300;
}

/* stylelint-disable property-no-unknown */

.inline-audio-player {
  background: none;
}

.inline-audio-player__smp-container {
  display: inline-block;
  width: 100%;
}

.inline-audio-player__smp-container > div {
  /* CreateSMPAudio */
  display: inline-block;
  width: 100%;
}

.inline-audio-player__smp-container > div > div {
  height: 50px;
  position: relative;
  /* stylelint-disable-next-line selector-max-compound-selectors */
}

.inline-audio-player__smp-container > div > div > div {
  padding: 0 !important;
}

.inline-audio-player__container {
  display: -ms-flexbox;
  display: flex;
}

.inline-audio-player__cta-holder {
  -ms-flex-align: center;
  align-items: center;
  background-color: #ededed;
  display: -ms-flexbox;
  display: flex;
  padding-right: 8px;
}

.inline-audio-player__cta-container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.inline-audio-player__cta-container.initialising * {
  cursor: initial;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.inline-audio-player__cta-container.initialising button {
  opacity: 0.6;
}

.inline-audio-player__text {
  background: none;
  border: 0;
  color: #222;
  cursor: pointer;
  font-size: 18px;
  height: 25px;
  letter-spacing: -0.1px;
  line-height: 25px;
  margin-left: 12px;
  outline: inherit;
  padding: 0;
}

.inline-audio-player__text--offline {
  cursor: default;
  pointer-events: none;
}

.inline-audio-player__disclaimer {
  background-color: #e6711b;
  color: #fff;
  cursor: pointer;
  height: 25px;
  left: -110px;
  line-height: 12px;
  margin-left: 0;
  padding: 0 7px;
  position: relative;
  top: 25px;
  width: 66px;
}

.inline-audio-player__disclaimer:hover .inline-audio-player__arrow {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.inline-audio-player__inner-arrow {
  color: #4d4d49;
  font-size: 10px;
}

.inline-audio-player__arrow-button {
  background-color: transparent;
  border: 0;
  margin-left: auto;
  outline: none;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.inline-audio-player__arrow-button__open {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.inline-audio-player__disclaimer-copy {
  color: #444;
  display: block;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 17px;
  margin-top: 16px;
}

.inline-audio-player__arrow {
  border: solid #fff;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  top: -1px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.inline-audio-player__hidden {
  display: none;
}

.inline-audio-player .collapsible-container {
  background-color: #ededed;
  color: #444;
  font-size: 16px;
  line-height: 24px;
  padding: 1rem;
}

.inline-audio-player .collapsible-container__hide {
  display: none;
}

.inline-audio-player .previous-button__inline-audio {
  margin-right: 1px;
}

.inline-audio-player__line {
  margin-top: 16px;
}

.inline-audio-player .previous-media-button {
  height: 50px;
  margin-right: 1px;
  width: 50px;
}

.inline-audio-player .previous-button__inline-audio {
  margin-right: 1px;
}

.copyright__text {
  color: #737373;
  font-size: 16px;
  font-style: italic;
  line-height: 24px;
  margin-bottom: 10px;
  text-align: center;
}

@media (max-width: 767px) {
  .copyright__text {
    margin-top: 12px;
  }
}

.content-embed {
  width: 100%;
}

.infographic-embed__frame {
  width: 100%;
}

/* stylelint-disable property-no-unknown */

.article-video {
  height: 100%;
  position: relative;
}

.article-video img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.article-video__overlay {
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  top: 0;
  width: 100%;
}

.article-video__play-button {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  left: 50%;
  padding: 0;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 1500;
}

.article-video__label {
  margin-bottom: 16px;
}

.article-video__image {
  bottom: 0;
  height: 100%;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-video__image--hide {
  opacity: 0;
}

.article-video__playercore {
  display: block;
}

.article-video__playercore--mobile {
  display: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-video__playercore--show {
  display: block;
}

.article-video--bordered {
  border-radius: 4px;
  overflow: hidden;
}

/* stylelint-disable property-no-unknown */

.hero-video {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 180px;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  z-index: 1;
}

.hero-video__video {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 80%;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
  width: 80%;
  z-index: 2;
}

.hero-video__video--desktop {
  left: 0;
  top: 65px;
  width: 71.5% !important;
}

.hero-video__video--mobile {
  height: 100%;
  width: 100%;
}

.hero-video__video--small-desktop {
  height: 70%;
  left: 0;
  top: 78px;
  width: 67%;
}

.hero-video--small-desktop,
.hero-video--desktop {
  display: block;
  height: 720px;
}

.hero-video img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
  -webkit-filter: brightness(40%);
  filter: brightness(40%);
}

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .hero-video img {
    opacity: 0.5;
  }
}

.hero-video--mobile {
  height: 280px;
}

.hero-video--medium-mobile {
  height: 430px;
}

.hero-video--tablet {
  height: 574px;
}

.hero-video--tablet .hero-video__video {
  margin-bottom: 10px;
}

.hero-video__play-button {
  position: absolute;
  z-index: 100;
}

.hero-video__video div div {
  position: inherit !important;
  position: unset !important;
}

.share-tools-popout {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #979797;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding: 30px 0 20px;
  position: relative;
  width: 300px;
}

.share-tools-popout__text {
  color: #444;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0 18px 18px;
  text-align: center;
  text-transform: uppercase;
}

.share-tools-popout__url-container {
  padding: 0 18px;
  width: 100%;
}

.share-tools-popout__articleurl {
  border: 1px solid #979797;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #a39f9f;
  font-size: 12px;
  letter-spacing: -0.5px;
  margin-bottom: 8px;
  margin-top: 0;
  padding: 12px 10px;
  text-align: center;
  width: 262px;
}

.share-tools-popout__close {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  right: 8px;
  top: 20px;
}

.share-tools-popout__close:hover .share-tools-popout__close-icon {
  color: #888;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.share-tools-popout__close-icon {
  color: #000;
  font-size: 16px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.share-tools-popout__border-arrow {
  background-color: #fff;
  border: 1px solid #979797;
  border-bottom: 0;
  border-right: 0;
  height: 12px;
  left: 40px;
  position: absolute;
  top: -7px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 12px;
}

.share-tools-popout__tools {
  margin-bottom: 13px;
}

.share-tools-popout__details {
  -ms-flex-item-align: normal;
  -ms-grid-row-align: normal;
  align-self: normal;
  color: #444;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 16px;
  margin: 0;
  max-width: 180px;
  padding-left: 14px;
}

.share-tools-popout__copied,
.share-tools-popout__copy {
  background-color: #000;
  border: unset;
  color: #fff;
  cursor: pointer;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin-bottom: 18px;
  padding: 12px 6px;
  text-transform: uppercase;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  width: 110px;
}

.share-tools-popout__copy:hover {
  background-color: #555;
}

.share-tools-popout__copied .gelicon--yes {
  color: #ff9700;
  margin-left: 8px;
}

.share-button-with-popout {
  position: relative;
  z-index: 9999;
}

.share-button-with-popout__popout {
  max-width: 330px;
  padding-right: 8px;
  position: absolute;
  top: 53px;
  width: 100%;
}

.share-button-with-popout__popout--desktop {
  width: auto;
}

.article-end__line--long {
  margin-bottom: 24px;
}

.article-end__share-tools {
  margin-bottom: 0;
}

.article-end--tablet .article-end__line--long {
  margin-bottom: 36px;
}

.article-end--desktop .article-end__line--long {
  margin-bottom: 44px;
}

.article-end--desktop .article-end__share-tools {
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 50px;
}

.article-end--desktop .article-end__share {
  margin-top: 0;
}

.article-end__share {
  margin-top: 5px;
}

/* stylelint-disable property-no-unknown */

.article-share-tools {
  display: -ms-flexbox;
  display: flex;
}

.article-share-tools a,
.article-share-tools button {
  background-color: transparent;
  border: 1px solid #e4e4e4;
  border-radius: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #979797;
  display: -ms-flexbox;
  display: flex;
  height: 52px;
  margin-right: 2px;
  width: 52px;
}

.article-share-tools--dark a,
.article-share-tools--dark button {
  color: #444;
  height: 54px;
  width: 54px;
}

.article-share-tools--dark a svg,
.article-share-tools--dark button svg {
  stroke: #444;
}

.article-share-tools a:hover,
.article-share-tools button:hover {
  background-color: #fff;
}

.article-share-tools .facebook-icon:hover {
  color: #3b5898;
}

.article-share-tools .email-icon:hover {
  color: #615f5d;
}

.article-share-tools .twitter-icon:hover {
  color: #47c7fa;
}

.article-share-tools .linkedin-icon:hover {
  color: #0077b5;
}

.article-share-tools .whatsapp-icon:hover {
  color: #25d366;
}

.article-share-tools .facebook-messenger {
  color: #0184ff;
}

.article-share-tools .ticked-icon {
  background-color: transparent;
  border: 1px solid #e4e4e4;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 11px;
  margin-right: 2px;
  padding: 3px;
}

.article-share-tools--popout > *,
.article-share-tools--popout a {
  color: #020203;
  margin-bottom: 3px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.domestic-disclaimer {
  background-color: #333;
  position: relative;
}

.domestic-disclaimer__content {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 990px;
}

.domestic-disclaimer__content--desktop-small {
  max-width: 976px;
}

.domestic-disclaimer__content--desktop {
  max-width: 1248px;
}

.domestic-disclaimer__text {
  color: #d8d8d8;
  font-size: 13px;
  line-height: 14px;
  margin: auto;
  padding: 8px 16px;
}

.domestic-disclaimer__text--tablet {
  font-size: 14px;
  line-height: 19px;
  padding: 16px 54px 16px 16px;
}

.domestic-disclaimer__text--desktop {
  font-size: 14px;
  line-height: 19px;
  margin-left: 0;
  max-width: 890px;
  padding: 14px 16px;
}

.domestic-disclaimer__close-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  padding: 0 16px 0 0;
  position: relative;
}

.domestic-disclaimer__close-button--desktop {
  padding: 0 16px 0 0;
}

.domestic-disclaimer__close-icon {
  color: #d8d8d8;
  font-size: 16px;
}

.domestic-disclaimer__close-icon--desktop {
  font-size: 22px;
}

/* stylelint-disable property-no-unknown */

.section-header-text__text {
  background-color: #fff;
  border-radius: 4px;
  -webkit-box-shadow: 0 0 20px 0 rgba(153, 153, 153, 0.5), 0 2px 5px 0 rgba(153, 153, 153, 0.5);
  box-shadow: 0 0 20px 0 rgba(153, 153, 153, 0.5), 0 2px 5px 0 rgba(153, 153, 153, 0.5);
  margin: 0 8px;
  opacity: 0.95;
  padding: 16px;
  position: relative;
  z-index: 3;
}

.section-header-text__text--no-margin {
  margin: 0;
}

.section-header-text__ad {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: end;
  justify-content: flex-end;
  margin: 0 8px 8px;
  position: relative;
  top: unset;
}

.section-header-text__ad--desktop {
  margin: 0 0 8px;
}

.section-header-text__title {
  display: inline-block;
}

.section-header-text__title--large-margin {
  margin: 0 40px 16px 0;
}

.section-header-text__title--premium {
  border: 1.78px solid;
  padding: 8px;
}

.section-header-text__title-content {
  color: #444;
  font-size: 22px;
  font-weight: bold;
  margin: unset;
}

.section-header-text__title-content--tablet {
  font-size: 24px;
}

.section-header-text__title-content--desktop {
  font-size: 28px;
}

.section-header-text__description {
  color: #555;
  font-size: 14px;
  line-height: 20px;
  margin: 0;
}

.section-header-text__description--large {
  font-size: 16px;
  line-height: 24px;
}

/* stylelint-disable property-no-unknown */

.section-header-unit {
  max-width: 1280px;
  position: relative;
}

.section-header-unit--tablet {
  height: 320px;
}

.section-header-unit--desktop {
  border-radius: 4px;
  height: 320px;
  overflow: hidden;
}

.section-header-unit__image {
  height: 320px;
  max-height: 320px;
  overflow: hidden;
  position: relative;
}

.section-header-unit__image img {
  left: 50%;
  position: relative;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.section-header-unit__image--right img {
  left: unset;
  min-width: 100%;
  right: 0;
  width: unset;
}

.section-header-unit__image--left img {
  left: unset;
  min-width: 100%;
  right: unset;
  width: unset;
}

.section-header-unit__content {
  position: relative;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.section-header-unit__content--desktop {
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  max-width: 420px;
  position: absolute;
  right: 32px;
  top: 0;
  -webkit-transform: none;
  transform: none;
}

.section-header-unit__content--advert {
  -webkit-transform: translateY(calc(-50% - 28px));
  transform: translateY(calc(-50% - 28px));
  /* - half the height of the advert so the text is still centered. */
}

/* stylelint-disable property-no-unknown */

.label-list {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  position: relative;
}

.label-list__line {
  width: 100%;
}

.label-list__content {
  margin: 30px 0 0 16px;
  width: 100%;
}

.label-list__content--tablet {
  margin: 34px 0 0 38px;
}

.label-list__content--desktop {
  margin: 42px 0 0 32px;
}

.label-list__list-item {
  margin: 0;
  padding: 0;
}

.label-list__link {
  color: #444;
  font-size: 18px;
  line-height: 24px;
  text-decoration: none;
}

.label-list__link:hover {
  color: #adadad;
}

.label-list__link--large {
  font-size: 22px;
  line-height: 29px;
}

.label-list__link:not(:first-of-type) {
  margin-top: 8px;
}

.label-list__link--large:not(:first-of-type) {
  margin-top: 12px;
}

.label-list__list-items {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 36px;
}

.label-list__list-items--tablet {
  margin-top: 52px;
}

.label-list__list-items--desktop {
  margin-top: 46px;
}

/* stylelint-disable property-no-unknown */

.offline-reading {
  font-family: 'CuriousSansBold';
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.offline-reading__header {
  font-size: 14px;
  line-height: 20px;
  margin: 0 0 16px;
  max-width: 220px;
  text-align: center;
}

.offline-reading__header--desktop {
  font-size: 18px;
  max-width: 460px;
}

.offline-reading__buttons {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
}

.offline-reading__buttons--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
}

.offline-reading__top-stories {
  margin-bottom: 24px;
}

.offline-reading__top-stories--desktop {
  margin: 0 16px 0 0;
}

.offline-reading__icon {
  display: block;
  height: auto;
  margin-bottom: 24px;
  width: 120px;
}

/* stylelint-disable property-no-unknown */

.rectangle-image {
  background-size: cover;
  height: 74px;
  max-width: 100%;
  overflow: hidden;
  position: relative;
  width: 132px;
}

.rectangle-image img {
  height: 100%;
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: auto;
}

.rectangle-image--small {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 32px;
  width: 56px;
}

.rectangle-image--large {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 162px;
  width: 288px;
}

.rectangle-image--medium {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 126px;
  width: 222px;
}

.rectangle-image--full-screen {
  padding-top: 56.25%;
  width: 100%;
}

.rectangle-image img {
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.rectangle-image__overlay {
  background-color: rgba(0, 0, 0, 0.6);
  bottom: 0;
  height: 100%;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}

.rectangle-image__overlay--culture {
  background-color: rgba(72, 41, 120, 0.6);
}

.rectangle-image:hover .rectangle-image__overlay {
  opacity: 1;
}

.rectangle-image:hover img {
  height: 108%;
}

/* stylelint-disable property-no-unknown */

.rectangle-story-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 100%;
  width: 288px;
}

.rectangle-story-item__image-container:hover .rectangle-image__overlay {
  opacity: 1;
}

.rectangle-story-item__image-container:hover .rectangle-story-item__icon {
  background-color: #000;
}

.rectangle-story-item__image-container--culture:hover .rectangle-story-item__icon {
  background-color: #482978;
}

.rectangle-story-item__image-container:hover .rectangle-image img {
  height: 108%;
}

.rectangle-story-item__image-container {
  position: relative;
  width: 100%;
}

.rectangle-story-item--tablet {
  width: 222px;
}

.rectangle-story-item__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-top: 3px;
  width: 100%;
}

.rectangle-story-item__label {
  color: #4a4a4a;
  display: block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin-right: auto;
  margin-top: 20px;
  padding-bottom: 3px;
  text-decoration: none;
  text-transform: uppercase;
}

.rectangle-story-item__label--worklife:hover,
.rectangle-story-item__label--future:hover,
.rectangle-story-item__label__travel:hover {
  background-image: none;
}

.rectangle-story-item__label--worklife > span:hover,
.rectangle-story-item__label--future > span:hover,
.rectangle-story-item__label__travel > span:hover {
  border-bottom: 1px solid #4a4a4a;
}

.rectangle-story-item__label--culture:hover {
  background-image: none;
}

.rectangle-story-item__label--culture > span:hover {
  border-bottom: 1px solid #482978;
}

.rectangle-story-item__line {
  display: block;
  margin: 16px 0;
}

.rectangle-story-item__author {
  color: #4a4a4a;
  display: block;
  font-size: 14px;
  font-style: italic;
  letter-spacing: 0.1px;
  line-height: 35px;
  text-decoration: none;
}

.rectangle-story-item__title {
  color: rgba(46, 46, 46, 0.85);
  display: block;
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  text-decoration: none;
}

.rectangle-story-item__icon {
  background-color: #000;
  bottom: 0;
  color: #fff;
  font-size: 14px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  text-align: center;
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
  width: 44px;
}

.rectangle-story-item__title--white,
.rectangle-story-item__author--white,
.rectangle-story-item__label--white {
  color: #fff;
}

.rectangle-story-item__label--white:hover {
  border-bottom: 0;
}

.rectangle-story-item__label--white > span:hover {
  border-bottom: 1px solid #fff;
}

.rectangle-article-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1;
  flex: 1 1;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
}

.rectangle-article-group--tablet,
.rectangle-article-group--desktop {
  -ms-flex-direction: row;
  flex-direction: row;
}

.rectangle-article-group__article {
  display: inline-block;
  padding-top: 12px;
}

.rectangle-article-group__article--tablet {
  padding: 0 16px 0 0;
}

.rectangle-article-group__article--desktop {
  padding: 0 24px 0 0;
}

.fake-ad {
  -ms-flex-line-pack: center;
  align-content: center;
  -ms-flex-align: center;
  align-items: center;
  background: #f6f6f6;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 8px;
}

.fake-ad__body {
  -ms-flex-align: center;
  align-items: center;
  background: #5ae9cb;
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  font-family: Arial, sans-serif;
  -ms-flex-pack: center;
  justify-content: center;
}

.fake-ad__text {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  color: #444;
  font-family: Arial, sans-serif;
  font-size: 12px;
  font-weight: bold;
  line-height: 1.5;
  text-align: right;
  text-transform: uppercase;
}

.fake-ad--mpu .fake-ad__body {
  height: 320px;
  width: 320px;
}

.fake-ad--mpu .fake-ad__text {
  width: 320px;
}

.fake-ad--mobile-leaderboard .fake-ad__body {
  height: 50px;
  width: 300px;
}

.fake-ad--mobile-leaderboard .fake-ad__text {
  width: 300px;
}

.fake-ad--leaderboard .fake-ad__body {
  height: 90px;
  width: 728px;
}

.fake-ad--leaderboard .fake-ad__text {
  width: 728px;
}

.body-text-card-inline-image {
  margin: 24px 0;
  position: relative;
}

/* stylelint-disable property-no-unknown */

.body-text-card {
  color: #444;
  display: block;
  font-size: 16px;
  line-height: 1.5;
}

.body-text-card__image,
.body-text-card__video {
  margin: 24px 0;
}

.body-text-card__text {
  display: block;
}

.body-text-card__advert {
  margin: 20px 0;
}

.body-text-card__text div a {
  cursor: pointer;
  font-weight: bold;
  text-decoration: none;
}

.body-text-card__text a:hover {
  text-decoration: underline;
}

.body-text-card__text > div > p {
  margin: 0 20px 16px;
}

.body-text-card__text > div > p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
}

.body-text-card__drop-capped {
  float: left;
  margin: 0 8px 0 20px;
  padding-top: 6px;
}

.body-text-card__text--drop-capped p:first-of-type::first-letter {
  color: transparent;
  font-size: 0;
}

.body-text-card__text--flush-text > div > p {
  margin-left: 0;
  margin-right: 0;
}

.body-text-card__text--future div a:visited {
  color: #666;
}

.body-text-card__text--future div a {
  color: #002856;
  -webkit-text-decoration-color: #002856;
  text-decoration-color: #002856;
}

.body-text-card__text--travel div a {
  color: #589e50;
  -webkit-text-decoration-color: #589e50;
  text-decoration-color: #589e50;
}

.body-text-card__text--worklife div a {
  color: #0052a1;
  -webkit-text-decoration-color: #0052a1;
  text-decoration-color: #0052a1;
}

.body-text-card__text--earth div a {
  color: #0fbb56;
  -webkit-text-decoration-color: #0fbb56;
  text-decoration-color: #0fbb56;
}

.body-text-card__text--culture div a {
  color: #472479;
  -webkit-text-decoration-color: #472479;
  text-decoration-color: #472479;
}

/* stylelint-disable property-no-unknown */

.branding {
  -webkit-box-sizing: content-box !important;
  box-sizing: content-box !important;
  display: inline-block;
  height: 24px;
  padding: 12px 16px;
  width: 100%;
}

.branding__icon {
  display: inline-block;
  height: 24px;
  width: 100%;
}

.branding__icon g {
  fill: #fff;
}

.branding--medium {
  padding: 16px;
}

.branding--large {
  padding: 16px 24px;
}

.branding--worklife {
  background-color: #0052a1;
}

.branding--future {
  background-color: #002856;
}

.branding--culture {
  background-color: #472479;
}

.branding--earth {
  background-color: #0fbb56;
}

.branding--travel {
  background-color: #589e50;
}

.branding--travel svg,
.branding--earth svg,
.branding--culture svg,
.branding--future svg,
.branding--worklife svg {
  height: 24px;
}

.branding--small,
.branding--small svg {
  height: 17px;
}

.branding__icon--medium,
.branding--medium,
.branding--medium svg {
  height: 22px;
}

.branding__icon--large,
.branding--large,
.branding--large svg {
  height: 24px;
}

.branding__icon--largest,
.branding--largest,
.branding--largest svg {
  height: 32px;
}

.branding__icon--small,
.branding--travel .branding__icon--small svg,
.branding--earth .branding__icon--small svg,
.branding--culture .branding__icon--small svg,
.branding--future .branding__icon--small svg,
.branding--worklife .branding__icon--small svg {
  height: 17px;
}

/* stylelint-disable property-no-unknown */

.swimlane-inner {
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto 100%;
  display: block;
  padding: 24px 16px;
}

.swimlane-inner--small {
  padding: 24px 8px;
}

.swimlane-inner--tablet {
  padding: 28px 16px 42px;
}

.swimlane-inner--small-desktop {
  padding: 30px 16px 42px;
}

.swimlane-inner--desktop {
  padding: 38px 16px 42px;
}

.swimlane {
  overflow: hidden;
  position: relative;
  z-index: 0;
}

.swimlane__black {
  background-color: #0e0e0e;
}

.swimlane__background-image {
  height: 500px;
  position: absolute;
  right: 0;
  top: 0;
  width: 915px;
  z-index: -1;
}

.swimlane__background-image--mobile {
  height: 181px;
  width: 320px;
}

.swimlane__background-image--tablet {
  height: 421px;
  width: 752px;
}

.swimlane__background-image--desktop {
  height: 500px;
  width: 915px;
}

.swimlane__background-image--atb {
  background-color: rgba(51, 51, 51, 0.8);
  background-size: cover;
  height: 100%;
  width: 100%;
}

.swimlane__item {
  margin: 0 0 25px;
  width: 100%;
}

.swimlane__item--desktop {
  margin: 0;
}

.swimlane__item--tablet {
  margin: 0 16px 25px 0;
  width: calc((100% - 48px) / 3);
}

.swimlane__item--tablet:nth-of-type(3n + 3) {
  margin-right: 0;
}

.swimlane__item--two-columns {
  margin-right: 0 !important;
  max-width: 572px;
  width: 50%;
}

.swimlane__item--four-columns {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 25px;
  margin-right: 16px;
  width: calc((100% - 48px) / 4);
}

.swimlane__item--four-columns:nth-of-type(4n + 4) {
  margin-right: 0;
}

.swimlane__items {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 24px;
  text-align: left;
}

.swimlane__items--desktop {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  margin-top: 42px;
}

.swimlane__items--small-desktop {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 30px;
}

.swimlane__items--tablet {
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin-top: 30px;
}

.swimlane__items--no-title {
  margin-top: 0;
}

.swimlane__content {
  margin: auto;
  max-width: 942px;
  text-align: center;
}

.swimlane__content--desktop {
  max-width: 1216px;
}

.swimlane__title {
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: 2.92px;
  line-height: 19px;
  text-transform: uppercase;
}

.swimlane__title--black {
  color: #010101;
  font-weight: 400;
}

.see-more-button-container-alt {
  color: #0e0e0e;
}

.follow-us-on {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
}

.follow-us-on__text {
  color: #fff;
  font-size: 16px;
  font-style: condensed;
  line-height: 20px;
  margin: 0 0 20px;
  padding: 0;
  text-transform: uppercase;
}

.follow-us-on__links {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
}

.follow-us-on__link:first-child {
  margin-right: 16px;
}

/* stylelint-disable property-no-unknown */

.nav-bar {
  background-color: #fff;
}

.nav-bar__hidden-menu {
  display: none;
}

.nav-bar__visible-menu {
  display: block;
}

.nav-bar__no-scroll {
  max-height: 100vh;
  overflow: hidden;
}

/* stylelint-disable property-no-unknown */

.dot-with-label {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.dot-with-label__text {
  padding-left: 8px;
}

.dot-with-label__text a {
  text-decoration: none;
}

.dot-with-label__text:hover h2 {
  color: #adadad;
}

.sponsor-section {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  max-width: 530px;
}

.sponsor-section--menu {
  padding: 20px 0 16px 24px;
}

.sponsor-section__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
}

.sponsor-section__container--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.sponsor-section__sponsor {
  color: #fff;
  padding-right: 16px;
}

.sponsor-section__sponsor-name {
  font-family: 'CuriousSansBold';
  color: #4e4e4e;
  font-size: 26px;
  margin: 0;
  white-space: nowrap;
}

.sponsor-section__sponsor-name--mobile {
  padding-bottom: 16px;
}

.sponsor-section__sponsor-name--desktop {
  font-size: 22px;
}

.sponsor-section__sponsor-name--menu {
  color: #fff;
}

.sponsor-section__sponsor-name--menu-desktop {
  font-size: 32px;
}

.sponsor-section__summary {
  color: #ebebeb;
  font-size: 16px;
  line-height: 24px;
  padding-top: 16px;
}

.sponsor-section__advert {
  display: inline-block;
}

.icon-with-label {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.icon-with-label__icon {
  padding-right: 10px;
}

.full-width-image-article {
  width: 100%;
}

.full-width-image-article__container {
  min-height: 325px;
  overflow: hidden;
  position: relative;
}

.full-width-image-article__container--desktop {
  min-height: 400px;
}

.full-width-image-article__image {
  height: 100%;
  overflow: hidden;
  position: absolute;
  width: 100%;
}

.full-width-image-article__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.full-width-image-article__text {
  -ms-flex-align: center;
  align-items: center;
  color: #fff;
  left: 50%;
  max-width: 488px;
  padding: 0 20px;
  position: absolute;
  text-align: center;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 100%;
}

.full-width-image-article__text a {
  color: #fff;
  text-decoration: none;
}

.full-width-image-article__text .full-width-image-article-text__label {
  display: inline-block;
  font-size: 14.4px;
  font-weight: bold;
  letter-spacing: 3.6px;
  line-height: 19px;
  margin-bottom: 11px;
  text-transform: uppercase;
}

.full-width-image-article__text .full-width-image-article-text__header {
  font-size: 24px;
  letter-spacing: -0.25px;
  line-height: 42px;
  margin: 0;
  padding: 0;
}

.full-width-image-article__text .full-width-image-article-text__header--desktop {
  font-size: 33.6px;
}

.full-width-image-article__text .full-width-image-article-text__author {
  font-size: 16.6px;
  font-style: italic;
  letter-spacing: -0.13px;
  line-height: 42px;
  margin-bottom: 0;
  margin-top: 28px;
}

.full-width-image-article__text .full-width-image-article-text__author--desktop {
  margin-top: 32px;
}

.full-width-image-article__background {
  background-image: radial-gradient(50% 49%, rgba(5, 36, 53, 0.37) 50%, rgba(0, 0, 0, 0) 83%);
  height: 100%;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.full-width-image-article__link {
  color: #fff;
  text-decoration: none;
}

.more-articles {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  -o-object-fit: cover;
  object-fit: cover;
  overflow: hidden;
  position: relative;
  -webkit-transition: background-image 0.4s;
  transition: background-image 0.4s;
}

.more-articles__heading {
  display: inline-block;
  margin: auto;
  max-width: 1272px;
  padding: 20px 0 0 16px;
  position: relative;
  z-index: 5;
}

.more-articles__stories {
  margin: 10px 16px 42px;
  max-width: 1232px;
  padding: 8px;
  position: relative;
  z-index: 4;
}

.more-articles__stories--small {
  padding: 0;
}

.more-articles__stories--tablet {
  margin: 24px 16px 72px;
  max-width: 1216px;
}

.more-articles__stories--desktop {
  margin: 56px 48px 92px;
  max-width: 1152px;
}

.more-articles__story-container:not(:first-of-type) {
  padding-top: 16px;
}

.more-articles__line {
  opacity: 0.3;
  padding-top: 16px;
  z-index: 5;
}

.more-articles__image-overlay {
  background-color: rgba(25, 62, 109, 0.3);
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  pointer-events: none;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
  z-index: 1;
}

.more-articles__image {
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.more-articles__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.more-articles__image--right img {
  left: unset;
  min-width: 100%;
  right: 0;
  width: unset;
}

.more-articles__image--left img {
  left: unset;
  min-width: 100%;
  right: unset;
  width: unset;
}

.more-articles__image--visible {
  opacity: 1;
}

.more-articles__story--two-columns,
.more-articles__story--three-columns {
  padding-right: 16px;
  width: 310px;
}

.more-articles__story-container:nth-child(even) .more-articles__story--two-columns {
  padding-right: 0;
}

.more-articles__story-container:nth-child(3n + 3) .more-articles__story--three-columns {
  padding-right: 0;
}

.more-articles__stories--two-columns,
.more-articles__stories--three-columns {
  -ms-flex-align: end;
  align-items: flex-end;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 16px;
}

.more-articles__stories--two-columns .more-articles-item__link,
.more-articles__stories--three-columns .more-articles-item__link {
  pointer-events: all;
}

.more-articles__story-container--two-columns {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  width: 50%;
}

.more-articles__story-container--two-columns:nth-child(2) {
  padding-top: 0;
}

.more-articles__story-container--three-columns {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  width: 33%;
}

.more-articles__story-container--three-columns:nth-child(-n + 3) {
  padding-top: 0;
}

.more-articles__heading--small {
  padding: 20px 0 0 8px;
}

.more-articles__heading--desktop {
  max-width: 1264px;
  padding: 38px 0 0 16px;
}

.more-articles__heading--tablet {
  max-width: 1264px;
  padding: 24px 0 0 16px;
}

/* stylelint-disable property-no-unknown */

.more-articles-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
  z-index: 5;
}

.more-articles-item__link {
  text-decoration: none;
}

.more-articles-item__container {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.more-articles-item__label {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 8px;
}

.more-articles-item__type {
  margin-right: 16px;
  position: relative;
}

.more-articles-item__icon {
  color: #fff;
  font-size: 12px;
  margin-right: 8px;
}

.more-articles-item__text {
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  line-height: 24px;
  padding: 0;
  position: relative;
  text-shadow: 0 1px 2px rgba(25, 62, 109, 0.7);
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}

.more-articles-item__text--medium {
  font-size: 22px;
  line-height: 28px;
}

.more-articles-item__text--large {
  color: #ebebeb;
  font-size: 30px;
  line-height: 37px;
}

.more-articles-item__container--column {
  -ms-flex-direction: column;
  flex-direction: column;
}

.more-articles-item__image-container {
  position: relative;
}

.more-articles-item--two-columns {
  margin-right: 16px;
}

.more-articles-item__label--desktop {
  margin-top: 16px;
}

.more-articles-item__label--tablet {
  margin-top: 16px;
}

.more-articles-item__link:hover .more-articles-item__text {
  color: #adadad;
}

.most-popular {
  background-color: #f9f9f9;
}

.most-popular__inner {
  margin: 0 auto;
  max-width: 894px;
  padding: 45px 24px 21px;
}

.most-popular__inner--desktop {
  padding: 47px 0 86px;
}

.most-popular__header {
  color: #010101;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin: 0;
  text-align: center;
  text-transform: uppercase;
}

.most-popular__items {
  display: block;
}

.most-popular__items--desktop {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 57px;
}

.most-popular-item {
  box-sizing: border-box;
  padding-top: 33px;
}

.most-popular-item:last-of-type {
  margin-bottom: 42px;
}

.most-popular-item--desktop {
  padding: 0 20px;
  width: calc(33.333%);
}

.most-popular-item--desktop:nth-child(3n + 2) {
  -ms-flex-order: 2;
  order: 2;
  padding: 38px 20px;
}

.most-popular-item--desktop:nth-child(3n + 3) {
  -ms-flex-order: 3;
  order: 3;
}

.most-popular-item--desktop:nth-child(n+4) {
  border-left: 1px solid #dadada;
}

.most-popular-item--desktop:last-of-type {
  margin-bottom: 0;
}

.most-popular-item a {
  text-decoration: none;
}

.most-popular-item__content {
  -ms-flex-align: end;
  align-items: flex-end;
  display: -ms-flexbox;
  display: flex;
  margin-top: 5px;
}

.most-popular-item__number {
  color: #cbcbcb;
  font-size: 40px;
  font-style: italic;
  font-weight: bold;
  line-height: 32px;
  margin: 0 20px 0 0;
  width: 25px;
}

.most-popular-item__label {
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0 0 0 45px;
  text-transform: uppercase;
}

.most-popular-item__title {
  color: #2e2e2ecc;
  font-size: 14px;
  letter-spacing: -0.17px;
  line-height: 22px;
  margin-bottom: 0;
  margin-top: 0;
}

.most-popular-item__title--desktop {
  font-size: 16px;
}

.StickyElementContent {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
}

.StickyElementContent--is-undocked {
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

.StickyElementContent--is-hidden {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}

/* stylelint-disable property-no-unknown */

.error-page-header {
  position: relative;
}

.error-page-header__headers {
  margin-bottom: 16px;
  position: relative;
  z-index: 1;
}

.error-page-header__headers--tablet-plus {
  margin-bottom: 32px;
}

.error-page-header__description {
  color: #444;
  font-size: 16px;
  line-height: 20px;
}

.error-page-header__play-icon {
  margin-right: 16px;
}

.error-page-header__play-icon button {
  color: #adadad;
}

.error-page-header__dot-label {
  display: -ms-flexbox;
  display: flex;
}

/* stylelint-disable property-no-unknown */

.styled-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.styled-list__item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
}

.styled-list__item:not(:first-of-type) {
  padding-top: 8px;
}

.styled-list__item a {
  font-weight: bold;
  text-decoration: none;
}

.styled-list__item--worklife a {
  color: #8beed9;
}

.styled-list__item--future a {
  color: #ffc857;
}

.styled-list__item--culture a {
  color: #472479;
}

.styled-list__item--earth a {
  color: #002856;
}

.styled-list__item--travel a {
  color: #002856;
}

.styled-list__text {
  color: #444;
  font-size: 16px;
  line-height: 24px;
  padding-left: 20px;
}

.styled-list__dot {
  display: -ms-flexbox;
  display: flex;
  margin-top: 8px;
}

/* stylelint-disable property-no-unknown */

.image-gallery-item {
  margin: 26px 0;
}

.image-gallery-item img {
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.image-gallery-item__image--landscape {
  margin: 20px 0 20px -3%;
  width: 106%;
}

@media (max-width: 1000px) and (min-width: 767px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -16%;
    width: 116%;
  }
}

@media (max-width: 1180px) and (min-width: 1024px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -8%;
    width: 108%;
  }
}

@media (max-width: 1365px) and (min-width: 1280px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -42%;
    width: 142%;
  }
}

@media (min-width: 1366px) {
  .image-gallery-item__image--landscape {
    margin: 20px 0 20px -55%;
    width: 155%;
  }
}

.image-gallery-item__image--portrait {
  margin: 20px 0;
  width: 100%;
}

@media (max-width: 599px) {
  .image-gallery-item__image--portrait {
    margin-left: -3%;
    width: 106%;
  }
}

.image-gallery-item__image--portrait,
.image-gallery-item__image--portrait img {
  max-height: 507px;
  min-height: 463px;
}

@media (max-width: 1279px) and (min-width: 768px) {
  .image-gallery-item__image--portrait,
  .image-gallery-item__image--portrait img {
    min-height: 818px;
  }
}

.error-page {
  position: relative;
}

.error-page__container {
  margin-bottom: 16px;
}

.error-page__container--tablet-plus {
  margin-bottom: 32px;
}

.error-page__title {
  margin-bottom: 12px;
}

.error-page__title--desktop {
  margin-bottom: 24px;
}

/* stylelint-disable property-no-unknown */

.article-labels {
  font-size: 12px;
  line-height: 16px;
  text-transform: uppercase;
}

.article-labels a {
  color: #fff;
  letter-spacing: 1px;
  text-decoration: none;
}

.article-labels__text:first-child {
  font-weight: bold;
}

/* stylelint-disable property-no-unknown */

.rectangle-story-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  margin: auto;
  position: relative;
}

.rectangle-story-group__articles {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1;
  flex: 1 1;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: center;
  justify-content: center;
  position: relative;
}

.rectangle-story-group__articles--small-tablet {
  -ms-flex-pack: unset;
  justify-content: unset;
}

.rectangle-story-group__articles--full-screen {
  display: block;
}

.rectangle-story-group__article {
  display: inline-block;
  padding-left: 18px;
  padding-top: 16px;
}

.rectangle-story-group__article--tablet {
  padding-left: 20px;
  padding-top: 22px;
}

.rectangle-story-group__article--desktop {
  padding-left: 22px;
  padding-top: 24px;
}

.rectangle-story-group__article--desktop:first-of-type {
  padding-left: 8px;
}

.rectangle-story-group__article--small-tablet {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 50%;
}

.rectangle-story-group__article--full-screen {
  display: block;
  padding: 16px;
}

.rectangle-story-group__article--full-screen:first-of-type {
  padding-top: 0;
}

.rectangle-story-group__article--small-desktop {
  padding-left: 10px;
}

.rectangle-story-group__article--small-desktop:last-of-type {
  padding-right: 8px;
}

.rectangle-story-group__articles-container {
  margin: auto;
  max-width: 950px;
  overflow: hidden;
  width: 100%;
}

.rectangle-story-group__advert-mpu {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  padding: 16px 16px 24px;
}

.rectangle-story-group__advert-mpu--desktop {
  border-left: 1px solid #dadada;
  display: block;
  padding: 0 0 0 16px;
  padding-top: 0;
}

.rectangle-story-group__advert-mpu--small-desktop {
  display: block;
  padding: 0 0 0 8px;
}

.rectangle-story-group__hero--desktop {
  display: -ms-flexbox;
  display: flex;
}

.rectangle-story-group__article-hero--tablet {
  display: -ms-flexbox;
  display: flex;
}

.article-title-card-rectangle {
  width: 100%;
}

.article-title-card-rectangle__image:hover .article-title-card-rectangle__overlay {
  opacity: 1;
}

.article-title-card-rectangle__overlay {
  background-color: rgba(0, 0, 0, 0.6);
  bottom: 0;
  height: 100%;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: -webkit-transform 0.5s ease;
  transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
  transition: transform 0.5s ease, -webkit-transform 0.5s ease;
  width: 100%;
  will-change: transform;
}

.article-title-card-rectangle__overlay--culture {
  background-color: rgba(72, 41, 120, 0.6);
}

.article-title-card-rectangle__image {
  margin-right: 40px;
  max-height: 390px;
  max-width: 620px;
  overflow: hidden;
  position: relative;
  width: auto;
}

.article-title-card-rectangle__image img {
  display: block;
  min-height: 194px;
  min-width: 344px;
  width: 100%;
}

.article-title-card-rectangle__image--tablet,
.article-title-card-rectangle__image--desktop {
  margin-right: 0;
  width: 100%;
}

.article-title-card-rectangle__image--tablet img,
.article-title-card-rectangle__image--desktop img {
  width: 110%;
}

.article-title-card-rectangle__image--preview-article {
  margin-right: 0;
}

.article-title-card-rectangle__image--index {
  margin-right: 0;
  max-width: 100%;
}

.article-title-card-rectangle__container {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
}

.article-title-card-rectangle__container--tablet,
.article-title-card-rectangle__container--desktop {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: row;
  flex-direction: row;
}

.article-title-card-rectangle__container--preview-article {
  margin-right: 8px;
}

.article-title-card-rectangle__container--index {
  -ms-flex-align: initial;
  align-items: initial;
  -ms-flex-direction: column;
  flex-direction: column;
}

.article-title-card-rectangle__text-box {
  background-color: #fff;
  margin-left: 40px;
  padding: 16px 22px 0;
  position: relative;
  top: -22px;
}

.article-title-card-rectangle__text-box__label {
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 20px;
  margin: 0;
  text-transform: uppercase;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}

.article-title-card-rectangle__text-box__label--worklife:hover,
.article-title-card-rectangle__text-box__label--future:hover {
  border-bottom: 1px solid #4a4a4a;
}

.article-title-card-rectangle__text-box__label--culture:hover {
  border-bottom: 1px solid #482978;
}

.article-title-card-rectangle__text-box__label--index {
  color: #000;
  font-size: 20px;
  font-weight: 300;
  letter-spacing: -0.53px;
  line-height: 30px;
}

.article-title-card-rectangle__text-box__label--index--tablet {
  font-size: 28px;
  letter-spacing: -0.74px;
  line-height: 44px;
}

.article-title-card-rectangle__text-box__label--index--desktop {
  font-size: 32px;
  letter-spacing: -0.84px;
  line-height: 44px;
}

.article-title-card-rectangle__text-box__header {
  color: #2e2e2e;
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  margin-bottom: 30px;
  margin-top: 12px;
}

.article-title-card-rectangle__text-box__header--desktop {
  font-size: 28px;
}

.article-title-card-rectangle__text-box__header--tablet {
  font-size: 26px;
}

.article-title-card-rectangle__text-box__header--index {
  color: #3d3d3d;
  font-family: Helvetica;
  font-size: 16px;
  letter-spacing: -0.12px;
  line-height: 31px;
  margin-top: 4px;
}

.article-title-card-rectangle__text-box__author {
  color: #4a4a4a;
  font-size: 14px;
  font-style: italic;
  letter-spacing: -0.1px;
  line-height: 35px;
  margin: 8px 0 0;
}

.article-title-card-rectangle__text-box__author--tablet {
  margin: 14px 0 0;
}

.article-title-card-rectangle__text-box--tablet,
.article-title-card-rectangle__text-box--desktop {
  left: -40px;
  margin: 0;
  padding: 40px;
  top: 0;
  -webkit-transform: none;
  transform: none;
}

.article-title-card-rectangle__text-box--desktop {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}

.article-title-card-rectangle__text-box--tablet {
  padding: 35px 22px 22px;
}

.article-title-card-rectangle__text-box--index {
  left: 0;
  margin-right: 40px;
}

.article-title-card-rectangle__text-box--index--tablet {
  margin-left: 50px;
  margin-right: 50px;
  padding: 30px 36px 0;
  top: -80px;
}

.article-title-card-rectangle__text-box--index--desktop {
  margin-left: 50px;
  max-width: 560px;
  top: -88px;
  width: 100%;
}

.article-title-card-rectangle__link {
  color: #000;
  text-decoration: none;
}

.article-title-card-rectangle__text-container {
  display: block;
  max-width: 252px;
}

.article-title-card-rectangle__text-container--tablet,
.article-title-card-rectangle__text-container--desktop {
  max-width: 320px;
}

.article-title-card-rectangle__preview-container {
  color: #4d4d4d;
  text-decoration: none;
}

.article-title-card-rectangle__preview-text {
  display: block;
  font-size: 16px;
  line-height: 24px;
  margin-top: 27px;
  max-width: 396px;
}

.article-title-card-rectangle__read-more {
  display: inline-block;
  font-size: 15px;
  letter-spacing: 4px;
  margin: 25px 16px 0 0;
  text-transform: uppercase;
}

.article-title-card-rectangle__arrow {
  color: #bababa;
  display: inline-block;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

.article-headline {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding: 43px 0;
}

.article-headline .article-labels {
  text-align: center;
}

.article-headline__line--short {
  margin-bottom: 40px;
}

.article-headline--largeTablet .article-headline__text {
  font-size: 32px;
  text-align: center;
}

.article-headline--tablet {
  padding: 31px 0;
}

.article-headline--tablet .article-headline__collection {
  margin-bottom: 24px;
}

.article-headline--tablet .article-headline__text {
  font-size: 32px;
  letter-spacing: -0.84px;
  margin: 0 15px 23px;
  text-align: center;
}

.article-headline--mobile {
  padding: 20px 0;
}

.article-headline--mobile .article-headline__text {
  font-size: 24px;
  letter-spacing: -0.63px;
  margin: 0 15px 15px;
  text-align: center;
}

.article-headline--mobile .article-headline__collection {
  margin-bottom: 15px;
}

.article-headline__collection {
  margin-bottom: 40px;
}

.article-headline__collection a {
  color: #242424;
}

.article-headline__text {
  font-size: 45px;
  letter-spacing: -1.26px;
  line-height: 30px;
  margin-bottom: 44px;
}

/* stylelint-disable property-no-unknown */

.loading-spinner {
  margin: 0 auto;
  text-align: center;
}

.loading-spinner__message {
  color: #002756;
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin: 12px 0;
  text-align: center;
  text-transform: uppercase;
}

.loading-spinner__image {
  display: block;
  margin: 0 auto;
  width: 48px;
}

@media only screen and (min-width: 1600px) {
  .hero-image {
    height: 900px;
    position: relative;
  }

  .hero-image img {
    bottom: -100%;
    display: block;
    height: 100%;
    left: -100%;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    object-fit: cover;
    position: absolute;
    right: -100%;
    top: -100%;
    width: 100%;
  }
}

@media only screen and (max-width: 1600px) {
  .hero-image {
    height: 0;
    overflow: hidden;
    padding-top: 56.25%;
    position: relative;
  }

  .hero-image img {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
  }
}

/* stylelint-disable property-no-unknown */

.article-hero {
  height: 672px;
  margin: 0;
  overflow: hidden;
  position: relative;
  width: 100%;
}

.article-hero--small-mobile {
  height: 373px;
}

.article-hero--mobile {
  height: 486px;
}

.article-hero--small-tablet {
  height: 433px;
}

.article-hero--tablet {
  height: 433px;
}

.article-hero--tablet .article-hero__content {
  padding: 60px 15px 0;
}

.article-hero__content {
  margin: auto;
  max-width: 1004px;
  pointer-events: none;
  position: relative;
  z-index: 1;
}

.article-hero--desktop {
  height: 573px;
}

.article-hero--desktop .article-hero__content {
  padding: 50px 30px 0;
}

.article-hero--large-desktop .article-hero__content {
  max-width: 1276px;
}

.article-hero--small-tablet .article-hero__content,
.article-hero--mobile .article-hero__content,
.article-hero--small-mobile .article-hero__content {
  padding: 60px 10px 0;
}

.article-hero--small-tablet .article-hero__content-title,
.article-hero--mobile .article-hero__content-title,
.article-hero--small-mobile .article-hero__content-title {
  font-size: 24px;
  line-height: 30px;
  max-width: 220px;
}

.article-hero--small-tablet .article-hero__content-line,
.article-hero--mobile .article-hero__content-line,
.article-hero--small-mobile .article-hero__content-line {
  margin-bottom: 16px;
  margin-top: 16px;
}

.article-hero--small-tablet .article-hero__content-labels,
.article-hero--mobile .article-hero__content-labels,
.article-hero--small-mobile .article-hero__content-labels {
  margin-bottom: 15px;
}

.article-hero--small-tablet .article-hero__content-cta,
.article-hero--mobile .article-hero__content-cta,
.article-hero--small-mobile .article-hero__content-cta {
  line-height: 22px;
}

.article-hero--small-tablet .article-hero__content-cta a,
.article-hero--mobile .article-hero__content-cta a,
.article-hero--small-mobile .article-hero__content-cta a {
  letter-spacing: 3px;
}

.article-hero__ambient-hidden {
  display: none;
}

.article-hero__background-ambient {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.article-hero__background::after {
  background-image: linear-gradient(-63deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.06) 24%, rgba(0, 0, 0, 0.2) 51%, rgba(0, 0, 0, 0.32) 67%, rgba(0, 0, 0, 0.51) 100%);
  content: '';
  height: 100%;
  left: 0;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.article-hero__background img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.article-hero__background--parallax img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.article-hero a {
  color: #fff;
  letter-spacing: 3px;
  text-decoration: none;
}

.article-hero__content-cta {
  clear: both;
  font-size: 16px;
  font-weight: 400;
  letter-spacing: 4px;
  line-height: 20px;
  max-width: 170px;
  pointer-events: all;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
  text-transform: uppercase;
}

.article-hero__content-cta a {
  display: -ms-flexbox;
  display: flex;
  letter-spacing: 4px;
}

.article-hero__content-labels {
  font-size: 12px;
  letter-spacing: 1px;
  line-height: 16px;
  margin-bottom: 20px;
  pointer-events: all;
}

.article-hero__content-line {
  background-color: #fff;
  border: 0;
  display: block;
  float: left;
  height: 1px;
  margin-bottom: 18px;
  margin-right: 300px;
  margin-top: 25px;
  width: 120px;
}

.article-hero__content-right-arrow {
  position: relative;
}

.article-hero__content-right-arrow::before {
  background: #fff;
  content: '';
  height: 2px;
  left: 5px;
  margin-top: -1px;
  opacity: 0.4;
  position: absolute;
  top: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: 20px;
}

.article-hero__content-right-arrow::after {
  border-right: 2px solid #fff;
  border-top: 2px solid #fff;
  content: '';
  display: inline-block;
  height: 10px;
  left: 16px;
  margin-top: 5px;
  opacity: 0.4;
  position: absolute;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
}

.article-hero__content-right-arrow--small::before {
  opacity: 1;
}

.article-hero__content-right-arrow--small::after {
  margin-top: 6px;
  opacity: 1;
}

.article-hero__content-right-arrow img {
  height: 11px;
  margin-left: 10px;
  width: 19px;
}

.article-hero__content-title {
  color: #fff;
  font-size: 50px;
  line-height: 54px;
  margin-top: 0;
  max-width: 450px;
  pointer-events: all;
  text-shadow: 0 1px 2px rgba(51, 51, 51, 0.7);
}

.article-hero__content-title a {
  letter-spacing: -1.32px;
}

.article-hero__title-text {
  display: inline;
}

.article-hero__content-title > a:hover > div,
.article-hero__content-subtitle > a:hover {
  background-image: -webkit-gradient(linear, left top, right top, color-stop(100%, currentColor), color-stop(0%, transparent));
  background-image: linear-gradient(to right, currentColor 100%, transparent 0%);
  background-position: 0 1.15em;
  background-repeat: repeat-x;
  background-size: 100% 2px;
}

.article-hero__content-subtitle {
  clear: both;
  color: #fff;
  font-size: 23px;
  font-weight: 500;
  line-height: 32px;
  margin-bottom: 16px;
  margin-top: 0;
  max-width: 440px;
  pointer-events: all;
  text-shadow: 0 1px 2px rgba(51, 51, 51, 0.5);
}

.article-hero__content-subtitle a {
  letter-spacing: -1px;
}

.article-hero__content-title--small {
  font-size: 30px;
  line-height: 35px;
}

.article-hero__content-title--tablet {
  clear: both;
  font-size: 32px;
  letter-spacing: -0.84px;
  line-height: 42px;
  max-width: 264px;
}

.article-hero__content-title--small a {
  letter-spacing: -0.63px;
}

.article-hero__down-arrow {
  background-color: transparent;
  border: 0;
  bottom: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  left: calc(50% - 29px);
  margin: 0;
  margin-bottom: 15px;
  padding: 0;
  position: absolute;
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
}

.see-more-button-container {
  color: #fff;
}

/* stylelint-disable */

@media screen and (min-width: 1000px) {
  .similar-articles-story {
    max-width: 900px;
  }
}

@media screen and (min-width: 601px) and (max-width: 999px) {
  .similar-articles-story {
    max-width: 600px;
  }
}

@media screen and (max-width: 600px) {
  .similar-articles-story {
    max-width: 300px;
  }
}

.related-articles {
  position: relative;
}

.related-articles__header {
  text-align: center;
  background-color: #000;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  letter-spacing: 3px;
  margin: 0 0 20px;
  padding: 8px;
  text-transform: uppercase;
}

.related-articles__header--bright {
  margin: 20px 0 1.15ex;
  font-size: 13px;
  background-color: #d8d8d8;
  color: rgba(0, 0, 0, 0.7);
  letter-spacing: 2px;
  line-height: 3;
}

.related-articles__list {
  list-style: none;
  padding: 0 0 1.5ex 0;
  margin: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  /* .with-numbers */
}

.related-articles__list li {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -ms-flex-align: stretch;
  align-items: stretch;
  -ms-flex-line-pack: stretch;
  align-content: stretch;
}

.related-articles__list li > div {
  -ms-flex: 1 1;
  flex: 1 1;
}

.related-articles__list.with-numbers {
  counter-reset: related-numbers;
  list-style-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7);
  margin: 0 35px;
}

.related-articles__list.with-numbers li::before {
  counter-increment: related-numbers;
  content: counter(related-numbers);
  font-weight: bold;
  font-size: 40px;
  -ms-flex-item-align: end;
  align-self: flex-end;
  line-height: 1.85;
  font-style: italic;
  letter-spacing: 0;
  color: rgba(0, 0, 0, 0.18);
  -ms-flex: 0.1 0.1;
  flex: 0.1 0.1;
  -ms-flex-preferred-size: 1ex;
  flex-basis: 1ex;
  padding-right: 1ex;
  text-align: center;
  display: block;
}

.related-articles__list.with-numbers li {
  margin-bottom: 10px;
}

.related-articles--wide-layout {
  background-color: initial;
  margin-top: 20px;
}

ul.related-articles__list:not(.list-wide) li {
  max-width: 100%;
}

ul.related-articles__list:not(.list-wide).with-borders li:not(:last-of-type) {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

ul.related-articles__list.list-wide li {
  max-width: 49.8%;
}

ul.related-articles__list.list-wide.with-borders li {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.related-article {
  -ms-flex-align: stretch;
  align-items: stretch;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 16px;
  min-height: 90px;
}

.related-article__image {
  width: calc(90px + 0.5ex);
  -ms-flex: 0.3 0.3;
  flex: 0.3 0.3;
  min-width: 90px;
  max-width: calc(90px + 0.5ex);
  margin: 0;
  display: block;
  line-height: 0;
  -ms-flex-order: -1;
  order: -1;
}

.related-article__image img {
  width: 100%;
  border: 0;
  margin: 0 12px 0 0;
}

.related-article__text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column nowrap;
  flex-flow: column nowrap;
  width: 100%;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -ms-flex-line-pack: start;
  align-content: flex-start;
  position: relative;
  padding: 12px 6px 12px 0;
  line-height: 1.5;
}

.related-article__text a {
  width: 100%;
  padding-left: 12px;
  display: -ms-flexbox;
  display: flex;
  text-decoration: none;
}

.related-article__text a + a {
  margin-top: 1ex;
}

.related-article__text br {
  display: none;
}

.related-article__title {
  color: rgba(46, 46, 46, 0.85);
  letter-spacing: -0.01em;
  -ms-flex: 1 1;
  flex: 1 1;
}

.related-article__title:hover {
  color: #2e2e2e;
}

.related-article__collection {
  display: block;
  color: #4a4a4a;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 2.5px;
  line-height: 1.2;
  text-decoration: none;
  text-transform: uppercase;
}

.related-article__collection span {
  display: none;
}

.related-articles__list.square-images .related-article {
  margin: 0.75ex 0;
}

.related-articles__list.square-images .related-article:hover {
  background-color: #f9f9f9;
}

.related-articles__list.square-images.list-wide .related-article {
  margin: 1.25ex 1.75ex;
}

.related-articles__list.round-images a:hover {
  color: #000;
}

.related-articles__list.round-images .related-article {
  margin: 1.25ex 1.75ex;
}

.related-articles__list.round-images .related-article__title {
  padding-left: 10px;
}

.related-articles__list.round-images .related-article__image {
  width: calc(90px + 15px);
  max-width: calc(90px + 15px);
  margin: 0;
}

.related-articles__list.round-images .related-article__image img {
  border-radius: 50%;
}

.related-articles__list.round-images.list-wide .related-article {
  margin: 1.75ex 1.75ex;
}

.vertical-story-card-item {
  cursor: pointer;
  font-family: 'ReithSans';
  height: 456px;
  margin: 20px 10px;
  position: relative;
  width: 297px;
}

@media only screen and (max-width: 1007px) {
  .vertical-story-card-item {
    width: 276px;
  }
}

@media only screen and (max-width: 600px) {
  .vertical-story-card-item {
    width: 276px;
  }
}

.vertical-story-card-item img {
  width: 100%;
}

.vertical-story-card-item__content-box {
  background-color: #fff;
  bottom: 0;
  -webkit-box-shadow: 0 0 5px #d8d8d8;
  box-shadow: 0 0 5px #d8d8d8;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 111px;
  -ms-flex-pack: center;
  justify-content: center;
  position: absolute;
  right: 0;
  width: 275px;
}

@media only screen and (max-width: 1007px) {
  .vertical-story-card-item__content-box {
    width: 261px;
  }
}

.vertical-story-card-item__content-box h1 {
  color: #4a4a4a;
  font-size: 0.75rem;
  font-weight: bold;
  letter-spacing: 3px;
  margin: 0;
  padding: 0 10px;
  text-transform: uppercase;
}

.vertical-story-card-item__content-box h2 {
  color: #3d3d3d;
  font-size: 1.3125rem;
  font-weight: lighter;
  letter-spacing: -0.06px;
  line-height: 42px;
  margin: 0;
  padding: 0 10px;
}

/* stylelint-disable property-no-unknown */

.see-more-button {
  border-bottom: 1px solid #979797;
  text-align: center;
}

.see-more-button__inner {
  background-color: transparent;
  border: 0;
  color: #6c6c6c;
  cursor: pointer;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin-bottom: 13px;
  position: relative;
  text-transform: uppercase;
  -webkit-transition: linear 0.6s;
  transition: linear 0.6s;
}

.see-more-button__inner-arrow {
  color: #6c6c6c;
  font-size: 10px;
  position: absolute;
  right: 9px;
  top: 2px;
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
}

.see-more-button__inner-text {
  margin-right: 24px;
}

.see-more-button__inner:hover {
  color: #4a4a4a;
}

.see-more-button__inner:hover .see-more-button__inner-arrow {
  color: #4a4a4a;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.vertical-story-group {
  font-family: 'ReithSans';
  position: relative;
}

.vertical-story-group img {
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.vertical-story-group__image-container {
  height: 370px;
  position: relative;
  width: 100%;
}

.vertical-story-group__image-container img {
  height: 100%;
}

.vertical-story-group__image-mask {
  background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0)));
  background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0));
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.vertical-story-group__heading-container {
  color: #fff;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 80px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container {
    top: 120px;
  }
}

.vertical-story-group__heading-container button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
}

.vertical-story-group__heading-container h1 {
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  margin-bottom: 20px;
}

.vertical-story-group__heading-container h2 {
  font-size: 2.1rem;
  font-weight: lighter;
  letter-spacing: -0.25px;
  line-height: 42px;
}

.vertical-story-group__heading-container-landscape {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 0;
  margin-left: auto;
  margin-right: auto;
  position: absolute;
  right: 0;
  top: 65px;
  width: 70%;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container-landscape {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

.vertical-story-group__heading-container-landscape h1 {
  color: #fff;
  font-size: 2.25rem;
  font-weight: lighter;
  letter-spacing: 0.95px;
  margin: 0;
}

.vertical-story-group__heading-container-landscape button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  height: 60px;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  width: 260px;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__heading-container-landscape button {
    margin-top: 50px;
  }
}

.vertical-story-group__container {
  display: -ms-grid;
  display: grid;
  grid-auto-rows: minmax(auto, auto);
  grid-template-columns: repeat(auto-fit, minmax(290px, 310px));
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  justify-items: center;
  margin-top: -210px;
  width: 100%;
}

@media only screen and (max-width: 599px) {
  .vertical-story-group__container {
    margin-top: -120px;
  }
}

/* stylelint-disable property-no-unknown */

.mapContainer .mapTitle {
  background: transparent;
  color: #fff;
  display: block;
  font-family: 'curiousSans-Bold', Arial, sans-serif;
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  line-height: 1.1875em;
  margin-top: 2%;
  min-width: 25%;
  padding: 2%;
  padding-bottom: 0.375em;
  padding-left: 8px;
  padding-right: 16px;
  padding-top: 0.375em;
  position: relative;
  text-align: center;
  z-index: 100;
}

@media only screen and (max-width: 600px) {
  .mapContainer .mapTitle {
    font-size: 2.4em;
  }
}

.mapContainer .styled-line {
  margin-left: auto;
  margin-right: auto;
}

.mapContainer button {
  background-color: rgba(255, 255, 255, 0.9);
  border: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 60px;
  outline: none;
  padding: 2px;
  width: 60px;
}

.mapContainer button .gelicon {
  color: #589e50;
  font-size: 2.5em;
  vertical-align: middle;
}

.mapContainer button:hover {
  background-color: #f2f2f2;
}

@media only screen and (max-width: 600px) {
  .mapContainer button {
    height: 50px;
    width: 50px;
  }

  .mapContainer button .gelicon {
    font-size: 2em;
  }
}

.mapContainer .navigationPanel {
  -ms-flex-align: end;
  align-items: flex-end;
  bottom: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 50%;
  max-width: 1200px;
  padding: 10px;
  position: absolute;
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
  width: 100%;
}

.mapContainer .zoomControls {
  background-color: #fff;
}

.mapContainer .mapboxgl-popup-content {
  border-radius: 0;
  -webkit-box-shadow: 0 3px 0 0 rgba(0, 0, 0, 0.1) !important;
  box-shadow: 0 3px 0 0 rgba(0, 0, 0, 0.1) !important;
  cursor: default;
  font-family: 'curiousSans-Bold', Arial, sans-serif;
  max-width: 300px;
  padding: 0 !important;
  text-align: left;
}

.mapContainer .mapboxgl-popup-content img {
  width: 300px;
}

@media only screen and (max-width: 600px) {
  .mapContainer .mapboxgl-popup-content {
    max-width: 190px;
  }

  .mapContainer .mapboxgl-popup-content img {
    width: 190px;
  }
}

.mapContainer .mapboxgl-ctrl-logo {
  display: none !important;
}

.mapContainer .map-marker svg {
  -webkit-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out;
}

@media only screen and (max-width: 600px) {
  .mapContainer .map-marker svg {
    height: 52px;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
  }
}

.mapContainer .map-marker-active svg {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}

@media only screen and (max-width: 600px) {
  .mapContainer .map-marker-active svg {
    height: 52px;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.mapContainer__articleInfo {
  padding: 0 18px;
}

.mapContainer__articleInfo .article-vertical a {
  color: #4a4a4a;
  display: block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin-right: auto;
  margin-top: 20px;
  text-decoration: none;
  text-transform: uppercase;
}

.mapContainer__articleInfo .article-title {
  font-size: 18px;
  letter-spacing: -0.21px;
  line-height: 30px;
  margin: 0.725em 0;
}

.mapContainer__articleInfo .article-title a {
  color: rgba(46, 46, 46, 0.85);
  text-decoration: none;
}

@media only screen and (max-width: 600px) {
  .mapContainer__articleInfo .article-title {
    font-size: 1.7em;
  }
}

.mapContainer__articleInfo .article-author {
  color: #4a4a4a;
  display: block;
  font-size: 14px;
  font-style: italic;
  letter-spacing: 0.1px;
  line-height: 35px;
  margin: 1.45em 0;
  text-decoration: none;
}

.location-header {
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  text-transform: uppercase;
}

.temperature-switcher {
  background: transparent;
  border: 0;
  cursor: pointer;
  font-size: 14px;
  font-style: italic;
  font-weight: 300;
  white-space: nowrap;
}

.temperature-switcher:active {
  color: currentColor;
}

.temperature-switcher__active {
  font-weight: bold;
}

.temperature-switcher span {
  margin: 0 0.2ex;
}

.day {
  --w-day-font-size: 14px;
  --w-day-temp-font-size: 20px;
  --w-day-temp-font-size-big: 32px;
  --w-day-temp-font-weight: 600;
  --w-day-name-font-weight: 500;
  -ms-flex-align: center;
  align-items: center;
  color: #959595;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: var(--w-day-font-size);
}

.day--desktop {
  --w-day-temp-font-size: 24px;
  --w-day-temp-font-weight: normal;
  --w-day-name-font-weight: 600;
}

.day:first-of-type {
  color: #4b4b4b;
}

.day__name {
  font-weight: var(--w-day-name-font-weight);
  line-height: 1;
  margin-bottom: 0.75em;
  text-transform: uppercase;
}

.day__symbol-header {
  display: block;
  height: 80px;
  margin: 7px 0 5px;
  width: 98px;
}

.day__symbol {
  display: block;
  height: 40px;
  margin: 7px 0 5px;
  width: 50px;
}

.day--desktop .day__symbol {
  height: 60px;
  margin-top: 15px;
  width: 70px;
}

.day__temp {
  font-size: var(--w-day-temp-font-size);
  font-weight: var(--w-day-temp-font-weight);
  line-height: 1.2;
  margin-top: 0.75em;
  text-transform: lowercase;
}

.day__temp--header {
  color: #4b4b4b;
  font-size: 32px;
  font-weight: bold;
}

.day--mobile:first-of-type {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 3em;
}

.day--mobile:first-of-type .day__symbol {
  height: 60px;
  margin-right: 10px;
  overflow: visible;
  width: 80px;
}

.day--mobile:first-of-type .day__temp {
  font-size: var(--w-day-temp-font-size-big);
  font-weight: bold;
  margin-top: 0;
}

.day--mobile:first-of-type .day__location {
  font-size: 120%;
  font-weight: 500;
  margin: 1em 0;
}

.day--mobile:first-of-type .day__name {
  color: #959595;
}

.day--mobile:first-of-type .day__location,
.day--mobile:first-of-type .day__name {
  text-align: center;
  width: 100%;
}

.weather {
  --w-height: 50px;
  --w-wrapper-margin: 24px;
  --w-days-flexbasis: 33%;
  margin-bottom: 2rem;
}

.weather--desktop {
  --w-height: 80px;
  --w-wrapper-margin: 50px;
  --w-days-flexbasis: initial;
  margin-bottom: 1rem;
}

.weather:not(.weather--desktop) .weather__days {
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
}

.weather:not(.weather--desktop) .day:first-of-type {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  width: auto;
}

.weather__separator {
  border-right: 1px solid #dcdcdc;
  display: block;
  height: var(--w-height);
}

.weather__days {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-preferred-size: var(--w-days-flexbasis);
  flex-basis: var(--w-days-flexbasis);
  -ms-flex-pack: space-evenly;
  justify-content: space-evenly;
  margin-top: 2.5rem;
}

.weather__days--desktop {
  margin-top: 4rem;
}

.weather__header {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column;
  flex-flow: column;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: var(--w-wrapper-margin);
}

.weather__header button {
  margin-top: 1.5rem;
}

.weather__header--desktop {
  /* position the temperature switcher on desktop */
  position: relative;
}

.weather__header--desktop button {
  margin: 0;
  position: absolute;
  right: 0;
}

/* stylelint-disable property-no-unknown */

.beta-btn {
  background-color: #e6711b;
  color: #fff;
  cursor: pointer;
  height: 25px;
  line-height: 12px;
  padding: 0 7px;
  width: 66px;
}

.beta-btn:hover .beta-btn__arrow {
  cursor: pointer;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.beta-btn:hover .beta-btn__arrow--expanded {
  -webkit-transform: rotate(-35deg);
  transform: rotate(-35deg);
}

.beta-btn__copy {
  color: #444;
  display: block;
  font-size: 12px;
  letter-spacing: 0;
  line-height: 17px;
  margin: 16px auto;
  max-width: 50%;
}

.beta-btn__arrow {
  border: solid #fff;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 3px;
  position: relative;
  top: -1px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.beta-btn__arrow--expanded {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.image-card {
  position: relative;
}

.image-card img {
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}

.image-card__heading-container {
  color: #fff;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 80px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.image-card__heading-container button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
}

.image-card__heading-container h1 {
  font-size: 0.9rem;
  font-weight: bold;
  letter-spacing: 3.6px;
  margin-top: 0;
}

.image-card__heading-container h2 {
  font-size: 2.1rem;
  font-weight: lighter;
  letter-spacing: -0.25px;
  line-height: 42px;
  margin-top: 0;
}

.image-card__heading-container-landscape {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  left: 50%;
  position: absolute;
  text-align: center;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 90%;
}

.image-card__heading-container-landscape__mobile {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-direction: column;
  flex-direction: column;
}

.image-card__heading-container-landscape h1 {
  color: #fff;
  font-size: 2.25rem;
  font-weight: lighter;
  letter-spacing: 0.95px;
  margin-top: 0;
}

.image-card__heading-container-landscape button {
  background-color: rgba(0, 0, 0, 0.8);
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 0.875rem;
  height: 60px;
  letter-spacing: 0.183rem;
  outline: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  width: 260px;
}

.destination-header {
  width: 100%;
}

.destination-header__container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  min-height: 380px;
  overflow: hidden;
  padding: 0 16px;
  position: relative;
}

.destination-header__image {
  height: 100%;
  overflow: hidden;
  position: absolute;
  width: 100%;
}

.destination-header__image img {
  bottom: -100%;
  display: block;
  height: 100%;
  left: -100%;
  margin: auto;
  min-height: 100%;
  min-width: 100%;
  object-fit: cover;
  position: absolute;
  right: -100%;
  top: -100%;
  width: 100%;
}

.destination-header__text {
  color: #fff;
  font-size: 28px;
  letter-spacing: -0.95px;
  line-height: 37.4px;
  max-width: 488px;
  padding: 0 20px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.destination-header__text a {
  color: #fff;
  font-weight: 300;
  text-decoration: none;
}

.destination-header__text--desktop {
  font-size: 36px;
}

.destination-header__text-container {
  border-bottom: solid 1px #fff;
  display: inline-block;
  line-height: 1.3;
  padding-bottom: 17px;
}

.destination-header__text-container--desktop {
  padding-bottom: 0.75ex;
}

.destination-header__link-page,
.destination-header__advert {
  color: #fff;
  font-size: 12px;
  letter-spacing: 0.5px;
  margin-top: 20px;
  position: relative;
  text-align: center;
}

.destination-header__link-page span,
.destination-header__advert span {
  display: block;
  width: 100%;
}

.destination-header__link-page--desktop,
.destination-header__advert--desktop {
  margin-top: 40px;
}

.destination-header__link-page {
  left: 14px;
  margin: 0;
  position: absolute;
  text-transform: uppercase;
  top: 20px;
}

.destination-header__link-page--desktop {
  left: 25px;
  top: 36px;
}

.destination-header__background {
  background-image: radial-gradient(50% 49%, rgba(5, 36, 53, 0.37) 50%, rgba(0, 0, 0, 0) 83%);
  height: 100%;
  pointer-events: none;
  position: absolute;
  top: 0;
  width: 100%;
}

.destination-header a {
  color: #fff;
  text-decoration: none;
}

.filter {
  display: inline-block;
  max-width: 160px;
  position: relative;
}

.filter__button {
  background-color: #000;
  border: 0;
  color: #fff;
  font-size: 16px;
  padding: 16px;
  width: 160px;
}

.filter__content {
  background-color: #000;
  display: none;
  position: absolute;
  width: 160px;
  z-index: 1;
}

.filter:focus .filter__content,
.filter:hover .filter__content {
  display: block;
}

.filter__content--open {
  display: block;
}

.filter__content button {
  background-color: #000;
  border: 0;
  color: #fff;
  cursor: pointer;
  display: block;
  font-style: italic;
  padding: 12px 16px;
  text-decoration: none;
  width: 100%;
}

.filter__content button:hover {
  background-color: #494848;
}

.callout-box-card {
  background-color: #eaeaea;
  color: #4a4a4a;
  margin-left: auto;
  margin-right: auto;
  text-align: left;
}

.callout-box-card img {
  height: 100%;
  width: 100%;
}

.callout-box-card__container {
  padding: 0.2rem 1.5rem;
}

.callout-box-card__container h3 {
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 16px;
  margin: 1rem 0;
  text-transform: uppercase;
}

.callout-box-card__container h4 {
  font-size: 28px;
  font-weight: lighter;
  letter-spacing: -0.21px;
  line-height: 35px;
}

.callout-box-card__container .body {
  font-size: 16px;
  font-weight: lighter;
  letter-spacing: -0.12px;
  line-height: 31px;
}

.callout-box-card__container .body a {
  color: #4a4a4a;
  font-weight: bold;
  text-decoration: none;
}

/* stylelint-disable property-no-unknown */

.see-more-button {
  border-bottom: 1px solid #979797;
  text-align: center;
}

.see-more-button-inner {
  background-color: transparent;
  border: 0;
  color: #6c6c6c;
  cursor: pointer;
  font-size: 14px;
  letter-spacing: 2.92px;
  line-height: 19px;
  margin-bottom: 13px;
  position: relative;
  text-transform: uppercase;
}

.see-more-button-inner--light {
  color: #b4b4b4;
}

.see-more-button-inner__arrow {
  color: #6c6c6c;
  font-size: 10px;
  position: absolute;
  right: 9px;
  top: 2px;
}

.see-more-button-inner__arrow--light {
  color: #b4b4b4;
}

.see-more-button-inner__text {
  margin-right: 24px;
}

/* stylelint-disable property-no-unknown */

.load-more-button {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.load-more-button__refresh.gelicon--refresh {
  margin-right: 16px;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.load-more-button__downarrow {
  color: #adadad;
  font-size: 22px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.load-more-button__loading .load-more-button__refresh.gelicon--refresh {
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

.load-more-button__downarrow:first-of-type {
  padding-right: 16px;
}

.load-more-button__downarrow:not(:first-of-type) {
  padding-left: 16px;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  100% {
    -webkit-transform: rotate(-270deg);
    transform: rotate(-270deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }

  100% {
    -webkit-transform: rotate(-270deg);
    transform: rotate(-270deg);
  }
}

/* stylelint-disable property-no-unknown */

.basic-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #adadad;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 0 0 0 #fff, 0 2px 0 0 rgba(0, 0, 0, 0.08);
  box-shadow: inset 0 0 0 0 #fff, 0 2px 0 0 rgba(0, 0, 0, 0.08);
  color: #193e6d;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 20px;
  height: 54px;
  -ms-flex-pack: center;
  justify-content: center;
  min-width: 222px;
  text-align: center;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.basic-button--worklife {
  color: #0052a1;
}

.basic-button--future {
  color: #002856;
}

.basic-button--culture {
  color: #472479;
}

.basic-button--earth {
  color: #0fbb56;
}

.basic-button--travel {
  color: #589e50;
}

.basic-button__text {
  color: #444;
  font-family: 'BBC Reith Sans Cd';
  font-size: 18px;
  line-height: 24px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.basic-button__text--white {
  color: #fff;
}

.basic-button__text--curious {
  font-family: 'CuriousSansBold';
}

.basic-button__text--worklife {
  color: #0052a1;
}

.basic-button__text--future {
  color: #002856;
}

.basic-button__text--culture {
  color: #472479;
}

.basic-button__text--earth {
  color: #0fbb56;
}

.basic-button__text--travel {
  color: #589e50;
}

.basic-button::before {
  padding-right: 16px;
}

.basic-button:hover {
  background-color: #dedede;
}

.basic-button--background-light-blue:hover {
  background-color: #dfe8ff;
}

.basic-button--background-worklife {
  background-color: #0052a1;
}

.basic-button--background-future {
  background-color: #002856;
}

.basic-button--background-culture {
  background-color: #472479;
}

.basic-button--background-earth {
  background-color: #0fbb56;
}

.basic-button--background-travel {
  background-color: #589e50;
}

.basic-button--background-worklife:hover {
  background-color: #4494e4;
}

.basic-button--background-future:hover {
  background-color: #ffc857;
}

.basic-button--background-culture:hover {
  background-color: #472479;
}

.basic-button--background-earth:hover {
  background-color: #002856;
}

.basic-button--background-travel:hover {
  background-color: #002856;
}

.basic-button__text--bold {
  font-weight: bold;
}

/* stylelint-disable property-no-unknown */

.read-more-button {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  font-weight: bold;
  position: relative;
  width: 224px;
}

/* stylelint-disable property-no-unknown */

.AdFrame {
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.AdFrame--default {
  background-color: #f6f6f6;
}

.AdFrame--dark-grey {
  background-color: rgba(26, 26, 26, 0.8);
}

.AdFrame--centre-aligned {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
}

/* stylelint-disable property-no-unknown */

.text-with-styled-background {
  height: inherit;
  position: relative;
  width: 100%;
}

.text-with-styled-background--collection {
  display: inline-block;
  width: unset;
}

.text-with-styled-background--center-align {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.text-with-styled-background__text {
  font-family: 'CuriousSansBold';
  color: #444;
  display: block;
  font-size: 20px;
  line-height: 24px;
  padding: 0 0 0 10px;
  position: relative;
}

.text-with-styled-background__text--large {
  font-size: 26px;
  line-height: 30px;
  padding: 0 0 0 24px;
}

.text-with-styled-background__text--medium {
  font-size: 22px;
  line-height: 28px;
}

.text-with-styled-background__text--remove-padding {
  padding: 0;
  width: 100%;
}

.text-with-styled-background__text--largest {
  font-size: 38px;
  line-height: 47px;
}

.text-with-styled-background__text--worklife {
  color: #0052a1;
}

.text-with-styled-background__text--future {
  color: #002856;
}

.text-with-styled-background__text--culture {
  color: #472479;
}

.text-with-styled-background__text--earth {
  color: #0fbb56;
}

.text-with-styled-background__text--travel {
  color: #589e50;
}

.text-with-styled-background__text--blue {
  color: #0052a1;
}

.text-with-styled-background__text--collection {
  font-size: 28px;
  line-height: 34px;
  padding: 0;
}

.text-with-styled-background__text--collection--medium {
  font-size: 32px;
  line-height: 38px;
}

.text-with-styled-background__text--collection--large {
  font-size: 38px;
  line-height: 47px;
}

.text-with-styled-background__line-container {
  bottom: 0;
  margin-left: 13px;
  position: absolute;
  width: calc(100% - 26px);
}

.text-with-styled-background__line {
  background-color: rgba(25, 62, 109, 0.05);
  height: 26px;
  max-width: 240px;
  position: relative;
}

.text-with-styled-background__line--large {
  bottom: -10px;
  height: 42px;
  max-width: 340px;
}

.text-with-styled-background__line--narrow {
  height: 26px;
  max-width: 100%;
}

.text-with-styled-background__line--medium {
  bottom: -10px;
  height: 36px;
  max-width: 340px;
}

.text-with-styled-background__line--largest {
  max-width: 100%;
}

.text-with-styled-background__line-container--collection {
  width: calc(100% + 26px);
}

.text-with-styled-background__line-container--no-margin {
  margin: 0;
}

.text-with-styled-background__line--collection {
  height: 26px;
}

/* stylelint-disable property-no-unknown */

.previous-media-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
}

.previous-media-button__icon--white svg {
  fill: #fff;
}

.previous-media-button span {
  height: 18px;
  width: 16px;
}

/* stylelint-disable property-no-unknown */

.simple-header {
  color: #444;
  font-size: 18px;
  font-weight: bold;
  line-height: 24px;
  margin: 0;
}

.simple-header--large {
  font-size: 28px;
  line-height: 34px;
}

.simple-header--simple {
  font-size: 18px;
  line-height: 22px;
}

.simple-header--small {
  font-size: 18px;
  letter-spacing: -0.5px;
  line-height: 28px;
}

.simple-header--smallest {
  font-family: Helvetica;
  font-size: 14px;
  line-height: 24px;
}

.simple-header--medium {
  font-size: 24px;
  line-height: 28px;
}

.simple-header--regular {
  font-size: 22px;
  line-height: 28px;
}

.simple-header--condensed-bold {
  font-stretch: condensed;
}

.simple-header--condensed-bold.simple-header--large {
  line-height: 37px;
}

.simple-header--condensed-bold.simple-header--regular {
  line-height: 28px;
}

.simple-header--white {
  color: #fff;
}

/* stylelint-disable property-no-unknown */

.play-button__inline-audio,
.play-button__inline-video {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 16px;
  height: 49px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 49px;
}

.play-button__inline-audio .gelicon--play,
.play-button__inline-video .gelicon--play {
  color: #ececec;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
}

.play-button__inline-audio--worklife .gelicon--play,
.play-button__inline-video--worklife .gelicon--play {
  color: #8beed9;
}

.play-button__inline-audio--travel .gelicon--play,
.play-button__inline-video--travel .gelicon--play {
  color: #002856;
}

.play-button__inline-audio--future .gelicon--play,
.play-button__inline-video--future .gelicon--play {
  color: #ffc857;
}

.play-button__inline-audio--culture .gelicon--play,
.play-button__inline-video--culture .gelicon--play {
  color: #472479;
}

.play-button__inline-audio--earth .gelicon--play,
.play-button__inline-video--earth .gelicon--play {
  color: #002856;
}

.play-button__inline-video:hover {
  background-color: #ececec;
}

.play-button__inline-video:hover .gelicon--play {
  color: #000;
}

.play-button__inline-audio {
  color: #fff;
  font-size: 22px;
  height: 50px;
  padding: 0;
  width: 50px;
}

.play-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.2);
  border: 2px solid #5ae9cb;
  border-radius: 50%;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 22px;
  height: 80px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 80px;
}

.play-button:hover {
  color: #5ae9cb;
}

.play-button--white {
  border: 4px solid #fff;
}

.play-button--white:hover {
  color: #fff;
}

.play-button--white .gelicon--play {
  color: inherit;
}

.play-button--worklife {
  border: 2px solid #8beed9;
}

.play-button--worklife:hover {
  color: #8beed9;
}

.play-button--travel {
  border: 2px solid #002856;
}

.play-button--travel:hover {
  color: #002856;
}

.play-button--future {
  border: 2px solid #ffc857;
}

.play-button--future:hover {
  color: #ffc857;
}

.play-button--culture {
  border: 2px solid #472479;
}

.play-button--culture:hover {
  color: #472479;
}

.play-button--earth {
  border: 2px solid #002856;
}

.play-button--earth:hover {
  color: #002856;
}

.play-button--desktop {
  font-size: 30px;
  height: 76px;
  width: 76px;
}

.play-button--background-hover:hover {
  background-color: rgba(0, 0, 0, 0.6);
}

/* stylelint-disable property-no-unknown */

.error-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #000;
  border: 0;
  display: -ms-flexbox;
  display: flex;
  font-size: 22px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  outline: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
}

.error-button .gelicon--alert {
  color: #ececec;
}

/* stylelint-disable property-no-unknown */

.simple-p-tag {
  color: #444;
  font-size: 18px;
  font-weight: bold;
  line-height: 24px;
  margin: 0;
}

.simple-p-tag--large {
  font-size: 28px;
  line-height: 34px;
}

.simple-p-tag--medium {
  font-size: 27px;
  letter-spacing: -1.69px;
  line-height: 32px;
}

.simple-p-tag--quote {
  color: #575757;
}

.simple-header--serif-light-italic {
  font-style: italic;
  line-height: inherit;
}

/* stylelint-disable property-no-unknown */

.text-summary__text {
  font-size: 16px;
  line-height: 24px;
  margin: 0;
  text-align: left;
}

.text-summary__text--blue {
  color: #193e6d;
}

.text-summary__text--black {
  color: #000;
}

.text-summary__text--grey {
  color: #6a6a6a;
}

.text-summary__text--dark-grey {
  color: #444;
}

.text-summary__text--left {
  text-align: left;
}

.text-summary__text--right {
  text-align: right;
}

.screen-reader-only {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute !important;
  width: 1px;
  word-wrap: normal !important;
}

.inline-html {
  display: block;
}

/* stylelint-disable property-no-unknown */

.drop-capped {
  -ms-flex-align: center;
  align-items: center;
  border: 2px solid #444;
  color: #444;
  display: -ms-flexbox;
  display: flex;
  float: left;
  font-size: 58px;
  font-weight: bold;
  height: 84px;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 8px 10px 4px 0;
  text-transform: uppercase;
  width: 84px;
}

.drop-capped--worklife {
  border-color: #8beed9;
}

.drop-capped--future {
  border-color: #ffc857;
}

.drop-capped--culture {
  border-color: #444;
}

.drop-capped--earth {
  border-color: #002856;
}

.drop-capped--travel {
  border-color: #002856;
}

.drop-capped--desktop {
  margin-right: 24px;
}

/* stylelint-disable property-no-unknown */

.close-nav {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.close-nav__icon {
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  font-size: 20px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.close-nav:hover .close-nav__icon {
  color: #cecece;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.close-nav__label {
  display: inline-block;
  margin-right: 12px;
}

/* stylelint-disable property-no-unknown */

.nav-label {
  color: #4e4e4e;
  font-size: 16px;
  line-height: 22px;
  margin: auto;
  max-width: 1280px;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.nav-label:hover {
  color: #8e8e8e;
}

.nav-label--menu {
  color: #ebebeb;
}

.nav-label--menu:hover {
  color: #cecece;
}

.nav-label--white {
  color: #fff;
}

.nav-label--curiousSans {
  font-family: 'CuriousSansBold';
}

/* stylelint-disable property-no-unknown */

.nav-links__link {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: 100%;
  -ms-flex-pack: center;
  justify-content: center;
  padding-right: 24px;
  position: relative;
  text-decoration: none;
  white-space: nowrap;
}

.nav-links__link--active p {
  border-bottom: 2px solid #002856;
  font-weight: bold;
}

.nav-links__link--active--menu p {
  border-bottom: unset;
}

.nav-links__link--active--worklife p {
  border-bottom: 2px solid #0052a1;
}

.nav-links__link--active--culture p {
  border-bottom: 2px solid #472479;
}

.nav-links__link--active--earth p {
  border-bottom: 2px solid #0fbb56;
}

.nav-links__link--active--travel p {
  border-bottom: 2px solid #589e50;
}

.nav-links__icon {
  background-color: #0052a1;
  bottom: 10px;
  height: 2px;
  position: absolute;
  width: 80px;
}

.nav-links__link--menu {
  display: block;
  padding-right: unset;
}

.nav-links__icon--menu {
  display: none;
}

.nav-links__icon--menu-tablet {
  width: 60px;
}

.nav-links__icon--worklife {
  background-color: #0052a1;
}

.nav-links__icon--future {
  background-color: #002856;
}

.nav-links__icon--culture {
  background-color: #472479;
}

.nav-links__icon--earth {
  background-color: #0fbb56;
}

.nav-links__icon--travel {
  background-color: #589e50;
}

.nav-links__link--menu p {
  font-size: 26px;
  padding: 0 0 32px 24px;
}

.nav-links__link--menu-desktop p {
  font-size: 32px;
  line-height: 42px;
  padding: 0 0 44px 100px;
}

/* stylelint-disable property-no-unknown */

.burger-nav {
  background: transparent;
  border: 0;
  color: #0052a1;
  cursor: pointer;
  font-size: 20px;
  outline: none;
  padding: 0;
}

.burger-nav--worklife {
  color: #0052a1;
}

.burger-nav--future {
  color: #002856;
}

.burger-nav--culture {
  color: #472479;
}

.burger-nav--earth {
  color: #0fbb56;
}

.burger-nav--travel {
  color: #589e50;
}

.burger-nav--medium {
  font-size: 16px;
}

.burger-nav--small {
  font-size: 12px;
}

/* stylelint-disable property-no-unknown */

.nav-menu {
  background-color: #0052a1;
  display: block;
  height: 100%;
  left: 0;
  min-height: 100vh;
  opacity: 0.98;
  overflow: auto;
  position: fixed;
  top: 0;
  width: 100vw;
}

.nav-menu--worklife {
  background-color: #0052a1;
}

.nav-menu--future {
  background-color: #002856;
}

.nav-menu--culture {
  background-color: #472479;
}

.nav-menu--earth {
  background-color: #0fbb56;
}

.nav-menu--travel {
  background-color: #589e50;
}

.nav-menu__close-nav {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
  justify-content: space-between;
  margin: auto;
  max-width: 1280px;
  padding: 16px 8px 60px;
}

.nav-menu__close-nav--desktop {
  padding: 20px 16px 70px;
}

.nav-menu__sponsored {
  background-color: rgba(34, 34, 34, 0.5);
  height: 100%;
  margin-bottom: 32px;
}

.nav-menu__sponsored--desktop {
  margin-bottom: 44px;
}

.nav-menu__sponsored-container {
  padding: 20px 16px 16px 24px;
}

.nav-menu__sponsored--desktop-container {
  margin: auto;
  max-width: 1264px;
  padding: 20px 16px 20px 100px;
}

.nav-menu__follow-us {
  padding: 52px 0 34px;
}

/* stylelint-disable property-no-unknown */

.ad-slot {
  display: inline-block;
}

.ad-slot__container {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.ad-slot__label {
  max-width: 120px;
  min-width: 112px;
  padding-right: 8px;
  text-align: right;
}

.ad-slot--leaderboard {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
}

.ad-slot__label--mpu,
.ad-slot__label--leaderboard {
  margin-bottom: 8px;
  max-width: unset;
  padding-right: unset;
  text-align: right;
}

.ad-slot__container--mpu,
.ad-slot__container--leaderboard {
  display: inline-block;
  -ms-flex-wrap: unset;
  flex-wrap: unset;
}

.ad-slot__fake--sponsor {
  background-color: #5ae9cb;
  height: 31px;
  min-width: 88px;
}

.ad-slot__fake--mpu {
  background-color: #5ae9cb;
  height: 250px;
  min-width: 300px;
}

.ad-slot__fake--mpu-large {
  background-color: #5ae9cb;
  height: 600px;
  min-width: 300px;
}

.ad-slot__fake--leaderboard-large {
  background-color: #5ae9cb;
  height: 90px;
  min-width: 728px;
}

.ad-slot__fake--leaderboard-medium {
  background-color: #5ae9cb;
  height: 50px;
  min-width: 320px;
}

.ad-slot__fake--leaderboard-small {
  background-color: #5ae9cb;
  height: 50px;
  min-width: 300px;
}

.ad-slot__label--dark {
  color: #dcdcdc;
}

.ad-slot--dark {
  background-color: #f6f6f6;
  padding: 8px;
}

.ad-slot--black {
  background-color: rgba(26, 26, 26, 0.8);
  padding: 8px;
}

.open-nav {
  -ms-flex-align: center;
  align-items: center;
  background-color: unset;
  border: unset;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0;
  position: relative;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.open-nav__icon {
  display: -ms-flexbox;
  display: flex;
}

.open-nav__label {
  display: inline-block;
  margin-right: 12px;
}

.play-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.play-icon--red {
  color: #f00;
}

.play-icon--grey {
  color: #999;
}

.play-icon--medium {
  font-size: 16px;
}

.play-icon--large {
  font-size: 20px;
}

.camera-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.camera-icon--red {
  color: #f00;
}

.camera-icon--grey {
  color: #999;
}

.camera-icon--medium {
  font-size: 16px;
}

.camera-icon--large {
  font-size: 20px;
}

/* stylelint-disable property-no-unknown */

.nav-build-bar {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  height: auto;
  margin: auto;
  max-width: 1280px;
  width: 100%;
}

.nav-build-bar--mobile {
  height: auto;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.nav-build-bar--mobile .nav-build-bar__title-content {
  white-space: pre-wrap;
}

.nav-build-bar--tablet {
  height: 58px;
}

.nav-build-bar--desktop {
  height: 60px;
}

.nav-build-bar__links {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  height: 100%;
  -ms-flex-pack: end;
  justify-content: flex-end;
  margin-left: auto;
  overflow: hidden;
}

.nav-build-bar__sponsored-brand {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
  margin-left: 8px;
  text-decoration: none;
  white-space: nowrap;
}

.nav-build-bar__sponsored-brand--no-brand {
  margin-left: 0;
}

.nav-build-bar__branding {
  display: -ms-flexbox;
  display: flex;
  padding: 0 8px 0 0;
}

.nav-build-bar__branding--tablet {
  padding: 0 30px 0 0;
}

.nav-build-bar__branding--desktop {
  padding: 0 80px 0 0;
}

.nav-build-bar__title-content {
  border: 1.78px solid;
  color: #444;
  font-size: 22px;
  font-weight: bold;
  margin: unset;
  padding: 8px;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}

.nav-build-bar__title-content--tablet {
  font-size: 24px;
  white-space: nowrap;
}

.nav-build-bar__title-content--desktop {
  font-size: 28px;
}

.nav-build-bar__open-nav {
  display: -ms-flexbox;
  display: flex;
  height: 48px;
}

.nav-build-bar__open-nav-button {
  display: -ms-flexbox;
  display: flex;
  padding-left: 8px;
}

.nav-build-bar__sponsored {
  background-color: #f6f6f6;
  border: 1px solid #d3d3d3;
  height: 48px;
  padding: 0 16px;
}

.nav-build-bar__open-nav--desktop {
  padding-right: 16px;
}

.nav-build-bar__open-nav--mobile {
  -ms-flex-pack: end;
  justify-content: flex-end;
  max-width: 100px;
  width: 100%;
}

.info-icon {
  background: transparent;
  border: 0;
  color: #fff;
  font-size: 12px;
  outline: none;
  padding: 0;
}

.info-icon--red {
  color: #f00;
}

.info-icon--grey {
  color: #999;
}

.info-icon--medium {
  font-size: 16px;
}

.info-icon--large {
  font-size: 20px;
}

/* stylelint-disable property-no-unknown */

.styled-dot {
  background-color: #5ae9cb;
  border-radius: 50%;
  -webkit-box-shadow: 0 1px 2px 0 rgba(25, 62, 109, 0.5);
  box-shadow: 0 1px 2px 0 rgba(25, 62, 109, 0.5);
  cursor: pointer;
  display: inline-block;
  height: 6px;
  width: 6px;
}

.styled-dot--no-cursor {
  cursor: unset;
}

.styled-dot--medium {
  -webkit-box-shadow: unset;
  box-shadow: unset;
  height: 10px;
  width: 10px;
}

.styled-dot--dark-blue {
  background-color: #193e6d;
}

.styled-dot--purple {
  background-color: #362e67;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--black {
  background-color: #000;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--grey-green {
  background-color: #008e9b;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--dark-green {
  background-color: #589e50;
  -webkit-box-shadow: unset;
  box-shadow: unset;
}

.styled-dot--worklife {
  background-color: #8beed9;
}

.styled-dot--future {
  background-color: #ffc857;
}

.styled-dot--culture {
  background-color: #472479;
}

.styled-dot--earth {
  background-color: #002856;
}

.styled-dot--travel {
  background-color: #002856;
}

.styled-dot--worklife-prime {
  background-color: #0052a1;
}

.styled-dot--future-prime {
  background-color: #002856;
}

.styled-dot--culture-prime {
  background-color: #472479;
}

.styled-dot--earth-prime {
  background-color: #0fbb56;
}

.styled-dot--travel-prime {
  background-color: #589e50;
}

.styled-dot--large {
  -webkit-box-shadow: 0 1px 1px 0 rgba(25, 62, 109, 0.5);
  box-shadow: 0 1px 1px 0 rgba(25, 62, 109, 0.5);
  height: 16px;
  width: 16px;
}

.styled-dot--small {
  -webkit-box-shadow: unset;
  box-shadow: unset;
  height: 8px;
  width: 8px;
}

.styled-dot--grey {
  background-color: rgba(0, 0, 0, 0.2);
}

/* stylelint-disable property-no-unknown */

.email-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 11px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.email-icon:hover {
  background-color: #000;
}

.email-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.facebook-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 15px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.facebook-icon:hover {
  background-color: #3b5998;
}

.facebook-icon--blue {
  background-color: transparent;
  border: 1px solid #3b5998;
  color: #3b5998;
}

.facebook-icon--blue:hover {
  background-color: #3b5998;
  color: #fff;
}

.facebook-icon--white {
  background-color: transparent;
  border: 1px solid #fff;
  color: #fff;
}

.facebook-icon--white:hover {
  background-color: #fff;
  color: #3b5998;
}

.facebook-icon--small {
  font-size: 20px;
  height: 38px;
  width: 38px;
}

/* stylelint-disable property-no-unknown */

.hero-header {
  -ms-flex-align: center;
  align-items: center;
  display: -ms-flexbox;
  display: flex;
}

.hero-header__header {
  font-family: 'CuriousSansBold';
  color: #fff;
  font-size: 38px;
  line-height: 40px;
  margin: 0;
  text-shadow: 0 1px 2px rgba(25, 62, 109, 0.7);
}

.hero-header__header--large {
  font-size: 44px;
  line-height: 48px;
}

.hero-header__header--medium {
  font-size: 38px;
  line-height: 47px;
}

.hero-header__header--small {
  font-size: 28px;
  line-height: 34px;
}

.hero-header__header--black {
  color: #000;
  text-shadow: unset;
}

.hero-header__header--grey {
  color: #adadad;
  text-shadow: unset;
}

.ticked-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #13de99;
  border-radius: 50%;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  display: -ms-flexbox;
  display: flex;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  width: 50px;
  z-index: 55;
}

.ticked-icon--small {
  font-size: 12px;
  height: 38px;
  width: 38px;
}

/* stylelint-disable property-no-unknown */

.google-plus-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 26px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.google-plus-icon:hover {
  background-color: #d34836;
}

.google-plus-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.reddit-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 26px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.reddit-icon:hover {
  background-color: #ff4500;
}

.reddit-icon__hide {
  display: none;
}

.reddit-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.linkedin-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.linkedin-icon:hover {
  background-color: #0077b5;
}

.linkedin-icon--red:hover {
  background-color: #f00;
}

.share-button {
  -ms-flex-align: center;
  align-items: center;
  background-color: #fff;
  border: 1px solid #e4e4e4;
  color: #444;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 12px;
  font-weight: bold;
  -ms-flex-pack: center;
  justify-content: center;
  letter-spacing: 3px;
  padding: 18px 16px;
  text-transform: uppercase;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 110px;
  z-index: 55;
}

.share-button .gelicon--share {
  margin-right: 10px;
  -webkit-transition: 0.3s ease-in;
  transition: 0.3s ease-in;
}

.share-button:hover .gelicon--share,
.share-button .gelicon--share-sharing {
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

/* stylelint-disable property-no-unknown */

.whatsapp-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.whatsapp-icon:hover {
  background-color: #25d366;
}

.whatsapp-icon--red:hover {
  background-color: #f00;
}

/* stylelint-disable property-no-unknown */

.twitter-icon {
  -ms-flex-align: center;
  align-items: center;
  background-color: #193e6d;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  display: -ms-flexbox;
  display: flex;
  font-size: 13px;
  height: 50px;
  -ms-flex-pack: center;
  justify-content: center;
  text-decoration: none;
  -webkit-transition-duration: 0.6s;
  transition-duration: 0.6s;
  width: 50px;
  z-index: 55;
}

.twitter-icon:hover {
  background-color: #1da1f2;
}

.twitter-icon--light-blue {
  background-color: transparent;
  border: 1px solid #1da1f2;
  color: #1da1f2;
}

.twitter-icon--light-blue:hover {
  background-color: #1da1f2;
  color: #fff;
}

.twitter-icon--white {
  background-color: transparent;
  border: 1px solid #fff;
  color: #fff;
}

.twitter-icon--white:hover {
  background-color: #fff;
  color: #1da1f2;
}

.twitter-icon--small {
  font-size: 18px;
  height: 38px;
  width: 38px;
}</style><style type="text/css" id="s9MJ5-1">/* stylelint-disable */
html,
body {
  margin: 0;
  padding: 0; }

#root *,
#root *::before,
#root *::after {
  box-sizing: border-box; }

#root article,
#root aside,
#root figure,
#root footer,
#root header,
#root nav,
#root section {
  display: block; }

body {
  background: #fff; }

.app__body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  overflow: visible;
  position: relative; }

.app__domestic-disclaimer {
  bottom: 0;
  position: fixed;
  width: 100%;
  z-index: 5000; }

.main {
  display: flex;
  flex: 1 0 auto;
  flex-direction: column; }
</style><style type="text/css" id="sGKGd-0">.navigation {
  background-color: #fff;
  display: none;
  margin: auto;
  max-width: 1248px;
  padding: 4px 16px 0;
  position: relative;
  z-index: 1000; }
  @media (min-width: 1008px) and (max-width: 1279px) {
    .navigation {
      max-width: 976px; } }
  @media (min-width: 600px) {
    .navigation {
      padding: 0 16px 1px; } }
  @media (min-width: 600px) and (max-width: 1007px) {
    .navigation {
      max-width: 990px; } }
  @media (min-width: 300px) and (max-width: 399px) {
    .navigation {
      padding: 4px 8px; } }

.navigation--display {
  display: block; }

.navigation-sticky--undocked {
  background-color: #fff;
  width: 100%;
  z-index: 10000; }

.StickyElement {
  position: relative;
  z-index: 1501; }
</style><style type="text/css" id="sm8Sw-0">.loader {
  display: none;
  height: 100%;
  left: -99999px;
  opacity: 0;
  position: absolute;
  top: 0;
  transition: 0.2s opacity;
  width: 100%;
  z-index: 1000; }
  .loader--is-active {
    background: white;
    display: block;
    left: 0;
    opacity: 1; }
  .loader__body {
    display: none;
    left: 50%;
    position: fixed;
    top: 50%;
    transform: translateX(-50%) translateY(-50%); }
  .loader__body--show-loader {
    display: block; }

.no-js .loader {
  display: none; }
</style><script charset="utf-8" src="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/js/9.deb4b255.chunk.js"></script><script charset="utf-8" src="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/js/4.d56f6b96.chunk.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="idcta-v2/idcta-1" src="https://static.files.bbci.co.uk/account/id-cta/1.54.11/modules/idcta-v2/dist/idcta-1.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mybbc/notifications/NotificationsMain" src="//mybbc.files.bbci.co.uk/notification-ui/4.3.7/js/NotificationsMain.js"></script><script type="text/javascript" async="" src="https://mybbc-analytics.files.bbci.co.uk/reverb-client-js/smarttag-5.29.1.min.js"></script><style type="text/css" id="s910l-0">.article-headline__text:focus {
  outline: none; }

.article__main {
  display: flex;
  justify-content: flex-end;
  margin: 0;
  width: 100%; }
  @media (max-width: 1023px) and (min-width: 768px) {
    .article__main {
      width: 80%; } }

.article__subcontainer {
  display: flex;
  justify-content: flex-end;
  position: relative;
  width: 100%;
  z-index: 999; }
  @media (max-width: 1667px) and (min-width: 1194px) {
    .article__subcontainer {
      width: 97%; } }
  @media (min-width: 1680px) {
    .article__subcontainer {
      justify-content: center;
      width: 80% !important; } }
  @media (min-width: 1900px) {
    .article__subcontainer {
      margin: auto;
      width: 71% !important; } }

.article__side-mpu {
  min-height: 810px; }
  .article__side-mpu > div {
    background: #f1f1f1;
    display: inline-block;
    padding: 0 8px 8px; }

.bbccom_standard_slot {
  background: transparent !important; }

.article__body {
  background-color: #fff;
  flex: 1 1 auto;
  margin-top: -56px;
  max-width: 700px;
  width: 100%;
  /* stylelint-disable-next-line order/order */ }
  .article__body-content {
    overflow-wrap: break-word; }
  @media (min-width: 768px) and (max-width: 1007px) {
    .article__body {
      margin: 0 auto;
      position: relative;
      top: -56px;
      width: 82%;
      z-index: 100; } }
  @media (max-width: 767px) {
    .article__body {
      margin-top: 0; } }
  @media (min-width: 1024px) and (max-width: 1180px) {
    .article__body {
      margin-left: 3%;
      width: 97%; } }
  @media (max-width: 1007px) {
    .article__body {
      margin-top: 0; } }

.article__mpu {
  flex-basis: 333px;
  flex-grow: 0;
  height: auto; }

.article__body-content,
.article__body .article__partner,
.article__author-unit {
  padding: 0 10px;
  margin-bottom: 0; }
  @media (min-width: 650px) {
    .article__body-content,
    .article__body .article__partner,
    .article__author-unit {
      padding: 0 18px; } }
  @media (min-width: 1023px) {
    .article__body-content,
    .article__body .article__partner,
    .article__author-unit {
      padding: 0 6% 0 18px; } }

.article__container {
  display: flex;
  justify-content: center;
  width: 100%; }

.article__container + .related-articles {
  margin-top: 30px;
  margin-bottom: 20px; }

.article__intro {
  color: #4d4d49;
  font-size: 18px;
  font-weight: bold;
  letter-spacing: -0.5px;
  line-height: 28px;
  margin-bottom: 24px;
  padding: 14px 0 0; }
  @media (min-width: 650px) {
    .article__intro {
      font-size: 26px;
      font-weight: 400;
      letter-spacing: -1.63px;
      line-height: 37px; } }

.article__end {
  clear: both;
  padding-top: 36px; }

.article__fade-story {
  background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
  bottom: 0;
  height: 210px;
  position: absolute;
  width: 100%;
  z-index: 1501; }

.article__fade-story--show {
  display: block !important; }

.article__body--short {
  height: 700px;
  overflow: hidden;
  position: relative; }
  @media (min-width: 768px) {
    .article__body--short {
      height: 800px; } }

.article__load-more {
  bottom: 24px;
  display: block !important;
  -ms-grid-column: 1;
  -ms-grid-column-span: 1;
  grid-column: 1 / span 1;
  left: 50%;
  position: absolute;
  transform: translateX(-50%);
  z-index: 1502; }

.article--hidden {
  display: none !important; }

.article__similar-articles {
  flex: 1 0 333px;
  max-width: 333px; }
  .article__similar-articles--hidden {
    display: none; }
  .article__similar-articles--show {
    display: block; }

@media (max-width: 1365px) and (min-width: 1280px) {
  .hero-video__video {
    max-height: 534px;
    width: 73.5% !important; } }

@media (min-width: 1366px) {
  .hero-video__video {
    left: 5.5%;
    max-height: 534px;
    max-width: 949px;
    width: 70% !important; } }

@media (min-width: 1668px) {
  .hero-video__video {
    left: 14%; } }

@media (min-width: 1900px) {
  .hero-video__video {
    left: 18.5%; } }

.inline-audio {
  display: block;
  padding-top: 8px; }

.article__audio-ad {
  display: flex;
  position: relative;
  margin: 17px 0 14px; }
  @media (max-width: 767px) {
    .article__audio-ad {
      margin: 2px 0 6px; } }
  .article__audio-ad .bbccom_slot {
    padding: 0; }
  .article__audio-ad .bbccom_advert {
    display: flex !important;
    max-width: 100%; }
  .article__audio-ad .bbccom_slot .bbccom_text {
    color: #000 !important;
    font-size: 9px !important;
    font-family: ArialMT !important;
    font-weight: normal !important;
    line-height: 15px !important;
    letter-spacing: 0 !important;
    text-transform: uppercase !important;
    text-align: left !important;
    margin: auto 12px 0 0 !important;
    width: 144px; }
</style><style type="text/css" id="sMRZr-0">@media (min-width: 1280px) {
  .article-header .article-headline__text {
    font-size: 48px !important; } }

.article-header__leaderboard {
  background: #f1f1f1 !important; }
  .article-header__leaderboard > div > div.bbccom_visible {
    background: #f1f1f1 !important;
    min-height: 100px; }

.article-header__hero-ad {
  display: flex;
  flex-direction: row-reverse; }
  .article-header__hero-ad > div > div.bbccom_visible > div {
    background: #f1f1f1 !important; }

.article-header__video .article-video__video {
  height: 100%;
  margin: auto;
  width: 100%; }
  @media (max-width: 1179px) and (min-width: 768px) {
    .article-header__video .article-video__video {
      height: 80%;
      width: 64%; } }
  @media (max-width: 1180px) and (min-width: 1024px) {
    .article-header__video .article-video__video {
      height: 80%;
      margin-left: 0;
      width: 90%; } }
  @media (min-width: 1181px) {
    .article-header__video .article-video__video {
      height: 80%;
      width: 64%; } }

@media (min-width: 1024px) {
  .article-header__video--ads .article-video__video {
    margin-left: 0;
    width: calc(100% - 333px); } }

/* this delimiter is used in infinite scroll */
.WaypointsList > div + div .article {
  /* stylelint-disable-next-line selector-max-compound-selectors */ }
  .WaypointsList > div + div .article .article-headline::before {
    content: ' ';
    font-size: 0;
    display: block;
    width: 25px;
    height: 3px;
    background: var(--brand-active-colour, currentColor);
    margin: 0 auto 40px; }
</style><style type="text/css" id="sGUxT-0">.article-body-native-ad {
  margin-bottom: 41px; }

.article-body-native-ad > div > div > div {
  background: #f1f1f1;
  clear: both;
  overflow: hidden;
  padding: 8px !important; }

.article-body-native-ad a {
  padding-right: 15px; }

@media screen and (max-width: 320px) {
  .article-body-native-ad {
    margin-left: -10px;
    width: 320px; } }

.article-body__iframe {
  padding-top: 20px; }

.article-body__pull-quote {
  clear: both;
  margin: 20px 0;
  padding-top: 0; }

.article-body__video-text {
  clear: both;
  margin: 0;
  padding: 20px 0 0;
  width: 100%; }
  @media (max-width: 767px) {
    .article-body__video-text {
      margin-left: -10px;
      width: 107%; } }

.article-body__callout-box {
  float: left;
  clear: both;
  margin: 1rem 1rem 1rem -8rem; }

.article-body__callout-box-mobile {
  float: left;
  clear: both;
  margin: 3rem 0;
  width: 100%; }

.article-body__image-text {
  padding: 0; }

.article-body__mpu-title {
  color: #444;
  font-family: inherit;
  font-size: 14px;
  font-style: italic;
  text-align: center; }

.article-body__image-text--square {
  margin: 20px 0; }

.article-body__image-text--portrait {
  margin: 20px 0; }
  @media (max-width: 599px) {
    .article-body__image-text--portrait {
      margin-left: -3%;
      width: 106%; } }

.article-body__image-text img {
  width: 100%; }

.article-body__video-text, .article-body__image-text--landscape {
  margin: 20px 0 20px -3%;
  width: 106%; }
  @media (max-width: 1000px) and (min-width: 767px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -16%;
      width: 116%; } }
  @media (max-width: 1180px) and (min-width: 1024px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -8%;
      width: 108%; } }
  @media (max-width: 1365px) and (min-width: 1280px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -39%;
      width: 139%; } }
  @media (min-width: 1366px) {
    .article-body__video-text, .article-body__image-text--landscape {
      margin: 20px 0 20px -52%;
      width: 152%; } }

.article-body__image-gallery .swipe-items__container,
.article-body__image-gallery .swipe-items__gallery {
  padding: 0; }

.article-body__image-gallery {
  margin: 20px 0; }
</style><style type="text/css" id="sHy/5-0">.bbccom_standard_slot {
  background: transparent; }

.bbccom_slot.bbccom_visible .bbccom_advert {
  padding-bottom: 0; }

.bbccom_slot {
  background-color: transparent !important;
  padding-bottom: 8px;
  position: relative;
  z-index: 0; }
  .bbccom_slot .bbccom_native_pwa {
    padding: 8px; }
  .bbccom_slot .bbccom_sponsor_section {
    padding-right: 8px;
    padding-bottom: 0 !important;
    display: flex !important;
    flex-direction: row !important;
    align-items: center; }
    .bbccom_slot .bbccom_sponsor_section > a {
      position: relative !important;
      display: inline-block;
      width: 105px;
      white-space: normal;
      z-index: 9999; }
    .bbccom_slot .bbccom_sponsor_section > div {
      background-color: unset;
      padding-left: 8px;
      z-index: 9999; }

.ad_info_text {
  color: #444;
  font-size: 14px;
  font-style: italic;
  position: relative;
  text-align: center; }

.ad--hidden {
  display: none; }

.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0; }

.sticky::before,
.sticky::after {
  content: '';
  display: table; }

.adslot--mpu {
  height: 100%;
  padding: 0; }
  @media (max-width: 1007px) {
    .adslot--mpu {
      left: unset !important;
      position: relative !important;
      top: unset !important;
      transform: none !important; } }

.adslot--native_pwa {
  padding: 0; }

.adslot__mpu {
  flex-grow: 1; }

.adslot--sponsor {
  padding: 10px; }
  .adslot--sponsor > div {
    display: flex;
    max-width: 216px; }
  .adslot--sponsor .bbccom_text {
    color: #fff !important;
    padding-right: 8px;
    margin: 4px 0 !important;
    width: 106px; }
</style><link rel="apple-touch-icon" sizes="180x180" href="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/future/apple-touch-icon.png" data-rh="true"><link rel="icon" type="image/png" sizes="32x32" href="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/future/favicon-32x32.png" data-rh="true"><link rel="icon" type="image/png" sizes="16x16" href="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/future/favicon-16x16.png" data-rh="true"><link rel="shortcut icon" href="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/future/favicon.ico" data-rh="true"><link rel="mask-icon" href="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/future/safari-pinned-tab.svg" color="#063d90" data-rh="true"><link rel="manifest" href="/worklife/assets/future/site.webmanifest" data-rh="true"><meta name="keywords" content="future,ARTICLE,story,aircraft" data-rh="true"><meta name="author" content="Stephen Dowling" data-rh="true"><meta property="og:type" content="article" data-rh="true"><meta property="og:author" content="Stephen Dowling" data-rh="true"><meta property="og:image:width" content="624" data-rh="true"><meta property="og:image:height" content="351" data-rh="true"><meta property="fb:pages" content="279678448760878" data-rh="true"><meta name="twitter:card" content="summary_large_image" data-rh="true"><meta name="twitter:site" content="@BBC_Future" data-rh="true"><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="idcta-v2/config" src="https://idcta.api.bbc.co.uk/idcta/config?callback=&amp;ptrt=https%3A%2F%2Fwww.bbc.com%2Ffuture%2Farticle%2F20160216-you-think-this-is-a-sonic-boom-its-not"></script><link href="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/style/bbcdotcom-async.css" rel="stylesheet" type="text/css"><script type="text/javascript" async="" src="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/script/bbcdotcom.js"></script><link href="//secure-us.imrworldwide.com/" rel="dns-prefetch"><link href="//me-cdn.effectivemeasure.net/" rel="dns-prefetch"><link href="//www.googletagservices.com/" rel="dns-prefetch"><link href="//bbc.gscontxt.net/" rel="dns-prefetch"><meta name="google-site-verification" content="auTeTTwSt_KBY_4iDoR00Lwb7-qzx1IgzJy6ztaWgEI"><script src="https://bbc.gscontxt.net/?url=https%3A%2F%2Fwww.bbc.com%2Ffuture%2Farticle%2F20160216-you-think-this-is-a-sonic-boom-its-not"></script><script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script><script src="https://cdn.adsafeprotected.com/iasPET.1.js"></script><script src="https://cdn.permutive.com/e488cdb0-e7cb-4d91-9648-60d437d8e491-web.js"></script><script type="text/javascript" async="" src="https://gn-web-assets.api.bbc.com/ngas/vendor/fundingchoices/cmp.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="idcta-v2/statusbar" src="https://static.files.bbci.co.uk/account/id-cta/1.54.11/modules/idcta-v2/statusbar.js"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXBMDfkp33SbsVKXsUhu65lYXfnc6ObmSbGDqzY16dIKpcPvzDbAxxkwp2_QTA6ecIfZwGVZ2aj21vRVGJ9mUQ="></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXxhazBcj_LfYQ2IY4Y3Q3GO39DfZ27_m0yp6h92CpvaKZNrln0PYobf2-whK1HtCI4VGPgElZa6T0bvxguy3Y=?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjM2NDM3MTMxLDYzMzAwMDAwMF0sIjE3MEU1MUY2LTkxN0EtNDY3Mi04Qzk5LTRGQjVEQzA3RUIyRSIsIkE4M0REOTJFLThFQTAtNERGMi04MTI0LUQyRkMyOTBBQUY4NCIsbnVsbCxbbnVsbCxbN10sbnVsbCxudWxsLG51bGwsbnVsbCxmYWxzZV0sImh0dHBzOi8vd3d3LmJiYy5jb20vZnV0dXJlL2FydGljbGUvMjAxNjAyMTYteW91LXRoaW5rLXRoaXMtaXMtYS1zb25pYy1ib29tLWl0cy1ub3QiLG51bGwsW11d"></script><meta http-equiv="origin-trial" content="AxujKG9INjsZ8/gUq8+dTruNvk7RjZQ1oFhhgQbcTJKDnZfbzSTE81wvC2Hzaf3TW4avA76LTZEMdiedF1vIbA4AAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0="><meta http-equiv="origin-trial" content="Azuce85ORtSnWe1MZDTv68qpaW3iHyfL9YbLRy0cwcCZwVnePnOmkUJlG8HGikmOwhZU22dElCcfrfX2HhrBPAkAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A16nvcdeoOAqrJcmjLRpl1I6f3McDD8EfofAYTt/P/H4/AWwB99nxiPp6kA0fXoiZav908Z8etuL16laFPUdfQsAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="AxBHdr0J44vFBQtZUqX9sjiqf5yWZ/OcHRcRMN3H9TH+t90V/j3ENW6C8+igBZFXMJ7G3Pr8Dd13632aLng42wgAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2NTI3NzQ0MDAsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A88BWHFjcawUfKU3lIejLoryXoyjooBXLgWmGh+hNcqMK44cugvsI5YZbNarYvi3roc1fYbHA1AVbhAtuHZflgEAAAB2eyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjUyNzc0NDAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/OOU4XAFfeAV4kM4+W9WBwNAHqq/bvtrRcJ1wpnNyO/i076BSUy1d14l2kBEgVmEuvxojSpD23172C6hBg2AQYAAACWeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9"><meta http-equiv="origin-trial" content="AwrB+XVH/KV6HfZNVtSEqlUJi3yUbtCp0/TJRj+38NDIw19/9P1h7ECTtdLdhIzG0Bsl4n/0rVmttJtGUCcewgAAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9"><meta http-equiv="origin-trial" content="Ax15QOERqai2A5XWrDY38Eg07xh2T0pkhpDPJuDlxr7D2Ka8wHvklgK7tTPZOnT+8H31lwHto5JpvYV8jRn1WgIAAACceyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjM0MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9"><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2021110401.js" async=""></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxXy3eqkuJiKJDQG5bMw52KPcW7acD5Oo_yJBpmtDsINtm0TMAsT4h1T7iZG61Z93Arq8nvB2Tvxlrjs-e_qznLP7mPexUEiRjV3iPym9N2H_f2QJySp50bZRJdOetmEXYSi6qR6pvCwMneIYuQCHGltg-Up8dMSJWSGFF8t7I11RVNSjdXfgrI1ky4A?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjM2NDM3MTMxLDc2MTAwMDAwMF0sbnVsbCxudWxsLG51bGwsW251bGwsWzcsOV0sbnVsbCwyLG51bGwsbnVsbCwwXSwiaHR0cHM6Ly93d3cuYmJjLmNvbS9mdXR1cmUvYXJ0aWNsZS8yMDE2MDIxNi15b3UtdGhpbmstdGhpcy1pcy1hLXNvbmljLWJvb20taXRzLW5vdCIsbnVsbCxbXV0"></script><script async="" src="https://fundingchoicesmessages.google.com/f/AGSKWxU2G7QlqPc2nSQCs88pmmJCa1XSxGKxw8qG4Rq7RkJXz1ulMCW6ZlysdShAkkOnyhwH3C2a7KGEhhy9MJwYJItALuy0ycZw6OhbM6qfdHmwwsyX0TX8_vdYUQ0ETWIJfFcSJZbzwPw3hQuLpuxxAD_OWWtYQLct6E1EySPM1JqEFoKYXO5rSjfQ7MMg?fccs=W251bGwsbnVsbCxudWxsLG51bGwsbnVsbCxudWxsLFsxNjM2NDM3MTMxLDk1MzAwMDAwMF0sbnVsbCxudWxsLG51bGwsWzIsWzcsOSw2XSxudWxsLDIsbnVsbCxudWxsLDBdLCJodHRwczovL3d3dy5iYmMuY29tL2Z1dHVyZS9hcnRpY2xlLzIwMTYwMjE2LXlvdS10aGluay10aGlzLWlzLWEtc29uaWMtYm9vbS1pdHMtbm90IixudWxsLFtdXQ"></script><script async="async" defer="defer" type="text/javascript" src="https://gn-web-assets.api.bbc.com/bbcdotcom/assets/20211005-115145-f94ae3cc3-4.56.0/script/vendor/edr/edr.min.js"></script><style type="text/css">#edr_survey .edr_lwrap iframe {width:100%;height:100%;}#edr_survey .edr_go {opacity:0;display:block;filter:alpha(opacity = 0);position:absolute;font-size:0;background-color:#000;margin:0;padding:0;visibility:visible;z-index:1000000;}#edr_survey .edr_lb {position:fixed;top:0;left:0;right:0;bottom:0;z-index:999998;display:none;}</style><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.bbc.com"></script><link rel="canonical" href="https://www.bbc.com/future/article/20160216-you-think-this-is-a-sonic-boom-its-not" data-rh="true"><meta name="description" content="Awe-inspiring photographs of fast jets surrounded by a split-second shockwave aren’t evidence of a plane breaking the sound barrier. Stephen Dowling looks at what causes them." data-rh="true"><meta property="og:title" content="You think this is a sonic boom – but it’s not" data-rh="true"><meta property="og:url" content="https://www.bbc.com/future/article/20160216-you-think-this-is-a-sonic-boom-its-not" data-rh="true"><meta property="og:description" content="Awe-inspiring photographs of fast jets surrounded by a split-second shockwave aren’t evidence of a plane breaking the sound barrier. Stephen Dowling looks at what causes them." data-rh="true"><meta property="og:image" content="https://ychef.files.bbci.co.uk/live/624x351/p03jmdl1.jpg" data-rh="true"><meta name="twitter:title" content="You think this is a sonic boom – but it’s not" data-rh="true"><meta name="twitter:description" content="Awe-inspiring photographs of fast jets surrounded by a split-second shockwave aren’t evidence of a plane breaking the sound barrier. Stephen Dowling looks at what causes them." data-rh="true"><meta name="twitter:image" content="https://ychef.files.bbci.co.uk/live/624x351/p03jmdl1.jpg" data-rh="true"><script charset="utf-8" src="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/js/8.9cdfc709.chunk.js"></script><style type="text/css" id="s6VXY-0">.around-the-bbc-swimlane {
  margin-top: auto; }
</style></head>
    <body><div id="edr_survey"></div>
       <div id="cookiePrompt"></div> <noscript><p style="position: absolute; top: -999em"><img src="https://a1.api.bbc.co.uk/hit.xiti?&col=1&from=p&ptag=js&s=598253&p=future.article.20160216-you-think-this-is-a-sonic-boom-its-not.page&x2=[responsive]&x3=[bbc_website]&x4=[en]&x7=[article]&x8=[reverb-3.3.0-nojs]&x11=[FEATURE_SITES_GNL]&x12=[GNL_FUTURE]" height="1" width="1" alt=""></p></noscript><div id="bbccom_interstitial_ad" class="bbccom_display_none"></div><div id="bbccom_interstitial" class="bbccom_display_none"><div id="google_ads_iframe_/4817/bbccom.live.site.future/future_article_content_0__container__" style="border: 0pt none;"></div></div><div id="bbccom_wallpaper_ad" class="bbccom_display_none"></div>    <!-- Styling hook for shared modules only -->
<div id="orb-modules">

      <div id="root"><div id="ad-portal"> <div class="article-header__leaderboard"><div class=""><div id="bbccom_leaderboard_1_1_2_3_4" class="bbccom_slot bbccom_standard_slot adslot--leaderboard bbccom_shut" aria-hidden="true" style=""><div id="bbccom_leaderboard_1" class="bbccom_leaderboard bbccom_advert bbccom_shut" style=""><a href="https://www.bbc.com/privacy/cookies/international/" class="bbccom_text">Advertisement</a><div id="google_ads_iframe_/4817/bbccom.live.site.future/future_collection_content_0__container__" style="border: 0pt none; width: 728px; height: 0px;"></div></div></div></div></div> </div><div class="StickyElement"><div class="StickyElementContent" role="navigation"></div></div><div class="app__body"><div class="loader"><div class="loader__body"><div class="loading-spinner"><span class="loading-spinner__image"><span class="spinner--future"><svg class="spinner__image" viewBox="0 0 32 32" id="gel-icon-loading" width="100%" height="100%"><path d="M29.8 8l-3.5 2c1 1.8 1.6 3.8 1.6 6 0 6.6-5.4 12-12 12S4 22.6 4 16 9.4 4 16 4V0C7.2 0 0 7.2 0 16s7.2 16 16 16 16-7.2 16-16c0-2.9-.8-5.6-2.2-8z"></path></svg></span></span><span class="loading-spinner__message b-reith-sans-font">Loading</span></div></div></div><main class="main"><div class="WaypointsList"><div class="WaypointsList__item WaypointsList__item--is-active"><section class="article" id="futurearticle20160216-you-think-this-is-a-sonic-boom-its-not"><div id="headline-futurearticle20160216-you-think-this-is-a-sonic-boom-its-not"><div class="article-header__hero-ad"><div class=""><div id="bbccom_sponsor_section_1_1_2_3_4" class="bbccom_slot bbccom_standard_slot adslot--sponsor_section bbccom_sponsor_slot" aria-hidden="true" style=""><div id="bbccom_sponsor_section_1" class="bbccom_sponsor_section bbccom_advert"><a href="https://advertising.bbcworldwide.com/bbc-storyworks-content-definitions/" class="bbccom_text">IN ASSOCIATION WITH</a><div id="google_ads_iframe_/4817/bbccom.live.site.future/future_collection_content_1__container__" style="border: 0pt none; width: 88px; height: 0px;"></div></div></div></div></div></div><div class="article__container"><div class="article__main"><div class="article__subcontainer"><article class="article__body"><div class="article__author-unit"><div class="author-unit"><div class="author-unit__container author-unit__container--desktop"><a class="author-unit__text b-font-family-serif" target="" rel="" id="">By Stephen Dowling</a><span class="b-font-family-serif b-font-weight-300">17th February 2016</span></div><div class="author-unit__line"><div class="styled-line styled-line--dark-grey styled-line--large"></div></div></div></div><div class="article__body-content"><div class="article__intro b-font-family-serif">Awe-inspiring photographs of fast jets surrounded by a split-second shockwave aren’t evidence of a plane breaking the sound barrier. BBC Future looks at what causes them.</div><div class="article-body-native-ad article-body__body-text"><div class=" sticky"><div id="bbccom_mpu_1_1_2_3_4" class="bbccom_slot bbccom_standard_slot adslot--mpu" aria-hidden="true"><div id="mpu_1" class="bbccom_mpu bbccom_advert"></div></div></div></div><div><div class="body-text-card b-reith-sans-font"><div class="drop-capped b-reith-sans-font drop-capped--future">I</div><div class="body-text-card__text body-text-card__text--future body-text-card__text--drop-capped body-text-card__text--flush-text"><div><p>It’s an eye-catching sight that has been captured by photographers and camera crews time and again; a military jet sweeps in low and fast, travelling at hundreds of miles an hour. As it picks up speed, it begins to be surrounded by a giant cone of vapour, a cloud that seems to erupt around the aircraft.</p><p>That, we’re often told in excitable captions, is a sonic boom.</p><p>Except, it isn’t – or at least, not quite. What you’re seeing is a physical effect that takes place as an aircraft approaches the speed of sound, but it’s not the sonic boom itself.</p><p>As aircraft design has become more sophisticated, planes have become more streamlined, and faster – and begun to do things to the air around them that they just weren’t able to do when they were slower and more cumbersome. And the mystery shockwaves that surround, low, fast-flying planes as they approach and then pass the sound barrier are proof that the air starts to do some very strange things at such speeds.</p></div></div></div></div><div class="article-body-native-ad article-body__body-text"><div class=""><div id="bbccom_native_pwa_1_1_2_3_4" class="bbccom_slot bbccom_standard_slot adslot--native_pwa" aria-hidden="true" style=""><div id="bbccom_native_pwa_1" class="bbccom_native_pwa bbccom_advert"><div id="google_ads_iframe_/4817/bbccom.live.site.future/future_collection_content_2__container__" style="border: 0pt none; width: 10px; height: 0px;"></div></div></div></div></div><div class="article-body__image-text article-body__image-text--landscape"><div id="future/article/20160216-you-think-this-is-a-sonic-boom-its-not-p03jmdxh"></div></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>So what are these mystery vapour cones?</p><p>Rod Irvine, the chairman of the Royal Aeronautical Society’s aerodynamics group, says the conditions that create the vapour cone all lead toward the breaking of the sound barrier – but the cones are usually photographed at speeds just below the speed of sound.</p><p>Flying so close to the ground, the air is denser and creates more friction and drag – and, anyway, pilots are banned from breaking the sound barrier over land. “You can do it over the sea,” he says, “but you can’t do it over the land. It’s one of the things that the Concorde project suffered from because as Concorde was developed the rules changed which meant it could only break the sound barrier over water.”</p></div></div></div></div><div class="article-body__pull-quote"><blockquote class="inline-quote b-font-family-serif b-font-weight-300 inline-quote--future"></blockquote></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>Moreover, capturing the shockwaves created when an aircraft passes the speed of sound are incredibly difficult – they’re much harder to <a href="http://news.sky.com/story/1558155/stunning-photos-capture-planes-sonic-boom">pick up with the naked eye</a>. You need special kit in order to see it. When photographing aerodynamic models being subjected to supersonic speeds in wind tunnels, scientists usually use mirrors to pick up the difference in light refraction from the resulting shockwaves. The resultant Schlieren photograph is then used to visualise the system of shockwaves around the wind tunnel model. In wind tunnel tests the models don’t tend to create the same kind of vapour cones because the air is treated to take the moisture out of the air.</p></div></div></div></div><div class="article-body__image-text article-body__image-text--landscape"><div id="future/article/20160216-you-think-this-is-a-sonic-boom-its-not-p04f5qb5"><div><picture><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p04f5qb5.webp" type="image/webp"><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p04f5qb5.webp" type="image/webp"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p04f5qb5.webp" type="image/webp"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p04f5qb5.webp" type="image/webp"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p04f5qb5.jpg" type="image/jpeg"></picture></div></div></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>The vapour cones are created by a shockwave that is generated by the aircraft as it picks up speed. The shock waves are the physical effects of the aircraft travelling so fast through air. As the aircraft picks up speed, and approaches the speed of sound – around 767mph (1,234km/h) at sea level – shockwaves form around the aircraft. Across these shockwaves there is ‘discontinuity’ in the local air pressure and temperature. This causes the air to lose its capacity to hold water and condensation starts to form, creating the vapour cone.&nbsp;</p></div></div></div></div><div class="article-body__image-text article-body__image-text--landscape"><div id="future/article/20160216-you-think-this-is-a-sonic-boom-its-not-p03jmdf5"><div><picture><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p03jmdf5.webp" type="image/webp"><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p03jmdf5.jpg" type="image/jpeg"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p03jmdf5.webp" type="image/webp"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p03jmdf5.jpg" type="image/jpeg"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p03jmdf5.webp" type="image/webp"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p03jmdf5.jpg" type="image/jpeg"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p03jmdf5.webp" type="image/webp"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p03jmdf5.jpg" type="image/jpeg"></picture></div></div></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>“If you see a vapour cone, you’ve got a shockwave, because you’ve got a change in pressure and temperature,” says Irvine.</p><p>Many of the best pictures of this phenomenon feature aircraft flown by the US Navy; no accident, given that the warm, moist air close to the surface of the sea can help amplify the effect.</p></div></div></div></div><div class="article-body__image-text article-body__image-text--landscape"><div id="future/article/20160216-you-think-this-is-a-sonic-boom-its-not-p04f5qb5"><div><picture><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p04f5qb5.webp" type="image/webp"><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p04f5qb5.webp" type="image/webp"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p04f5qb5.webp" type="image/webp"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p04f5qb5.jpg" type="image/jpeg"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p04f5qb5.webp" type="image/webp"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p04f5qb5.jpg" type="image/jpeg"></picture></div></div></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>It’s a trick commonly performed by F-A/18 Hornet fighter-bombers, the mainstay of the US Navy’s carrier fleets. The Hornet is also used by the Blue Angels aerobatic team, and these pilots are adept at performing manoeuvres that creates these vapour cones – also known as ‘shock collars’ or ‘shock eggs’. Moreover, they’re often done next to an aircraft carrier or out to sea, with trained US Navy photographers close to hand – taking a split-second picture of a jet travelling at 600mph (960km/h) is not something you’re likely to capture in crystal-clear detail on your smartphone.</p></div></div></div></div><div class="article-body__pull-quote"><blockquote class="inline-quote b-font-family-serif b-font-weight-300 inline-quote--future"></blockquote></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>Just to make things more complicated, the vapour cones are often the most dramatic when they take place in what’s called ‘transonic’ flight – that’s when some of the air flowing around the aircraft is flowing at above the speed of sound, and some of it below.</p></div></div></div></div><div class="article-body__image-text article-body__image-text--landscape"><div id="future/article/20160216-you-think-this-is-a-sonic-boom-its-not-p03jmdh9"><div><picture><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p03jmdh9.webp" type="image/webp"><source media="(min-width:1200px)" srcset="https://ychef.files.bbci.co.uk/1600x900/p03jmdh9.jpg" type="image/jpeg"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p03jmdh9.webp" type="image/webp"><source media="(min-width:880px)" srcset="https://ychef.files.bbci.co.uk/1280x720/p03jmdh9.jpg" type="image/jpeg"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p03jmdh9.webp" type="image/webp"><source media="(min-width:576px)" srcset="https://ychef.files.bbci.co.uk/976x549/p03jmdh9.jpg" type="image/jpeg"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p03jmdh9.webp" type="image/webp"><source media="(min-width:224px)" srcset="https://ychef.files.bbci.co.uk/624x351/p03jmdh9.jpg" type="image/jpeg"></picture></div></div></div><div><div class="body-text-card b-reith-sans-font"><div class="body-text-card__text body-text-card__text--future body-text-card__text--flush-text"><div><p>“The aircraft isn’t necessarily travelling faster than the speed of sound, but the air travelling over the wing is accelerated and locally breaks the sound barrier,” says Irvine.</p><p>Ultimately, he says, you need to have the right climactic conditions – the kind of warm moist air that aircraft operating off carriers can find easier than most. Then, get a nearby cameraman who really knows what they’re doing and voila – you’ve captured, on camera, the dramatic vapour cloud that so many of us think is the split-second spectacle of a sonic boom.</p><p><em>Join 500,000+ Future fans by liking us on</em> <a href="https://www.facebook.com/BBCFuture"><strong><em>Facebook</em></strong></a><em>, or follow us on</em> <a href="https://twitter.com/bbc_future"><strong><em>Twitter</em></strong></a><em>,</em> <a href="https://plus.google.com/107828172298602173375/posts"><strong><em>Google+</em></strong></a><em>,</em> <a href="https://www.linkedin.com/company/bbc-com"><strong><em>LinkedIn</em></strong></a> <em>and</em> <a href="https://instagram.com/bbcfuture_official/"><strong><em>Instagram</em></strong></a><em>.</em></p><p><em>If you liked this story,&nbsp;</em><a href="http://pages.emails.bbc.com/subscribe/"><em>sign up for the weekly bbc.com features newsletter</em></a><em>, called “</em><em>If You Only Read 6 Things This Week</em><em>”. A handpicked selection of stories from BBC Future, Earth, Culture, Capital, Travel and Autos, delivered to your inbox every Friday.</em></p></div></div></div></div></div></article></div></div></div></section></div><div class="WaypointsList__item"><section class="article" id="futurearticle20160201-the-wwii-flying-wing-decades-ahead-of-its-time"><div class="article__container"><div class="article__main"><div class="article__subcontainer"></div></div></div></section></div><div class="WaypointsList__item"><section class="article" id="futurearticle20160122-the-shape-of-wings-to-come"></section></div></div></main></div></div>
      <script>window.__ENTITY_ROUTES__ = {"article":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Farticle\u002F:primaryArticleId","entityMapping":":moduleId\u002Farticle\u002F:primaryArticleId"},"previewArticle":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Fpreview\u002Farticle\u002F:primaryArticleId","entityMapping":":moduleId\u002Farticle\u002F:primaryArticleId"},"premiumCollection":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002F:id","entityMapping":":moduleId\u002Fpremium-collection\u002F:id"},"collectionArticlesIndexColumn":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Fcolumns\u002F:id","entityMapping":":moduleId\u002Fcolumn\u002F:id"},"collectionArticlesIndexSection":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Fsections\u002F:id","entityMapping":":moduleId\u002Fcolumn\u002F:id"},"tagArticlesIndex":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Ftags\u002F:id","entityMapping":":moduleId(future|worklife|culture|travel)\u002Ftag\u002F:id"},"tagsIndex":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Ftags","entityMapping":"\u002F:moduleId\u002Ftags"},"verticalArticlesIndex":{"path":"\u002F:moduleId(future|worklife|culture|travel)","entityMapping":"\u002F:moduleId(future|worklife|culture|travel)"},"collectionsColumnsIndex":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Fcolumns","entityMapping":"\u002F:moduleId\u002Fcollections"},"collectionsSectionsIndex":{"path":"\u002F:moduleId(future|worklife|culture|travel)\u002Fsections","entityMapping":"\u002F:moduleId\u002Fcollections"},"destinationsIndex":{"path":"\u002F:moduleId(travel)\u002Fdestinations","entityMapping":"\u002Fdestinations"},"destinationIndex":{"path":"\u002F:moduleId(travel)\u002Fdestinations\u002F:destinationId","entityMapping":":moduleId\u002Fdestination-guide\u002F:destinationId"}};</script>
      
      <script>window.__PWA_CLIENT_SIDE_ENABLED__=true</script>
      <script src="https://static-web-assets.gnl-common.bbcverticals.com/features/pwa/1635508405-80354e01c3fb747c93ecbe95c7f64084089eba4e/static/js/bundle.7358dd61.js"></script>
      
      <script>window.BBC_GNL_PWA_MAIN();</script>
      
  <script type="text/javascript">
  (function() {
      /** CONFIGURATION START **/
      var _sf_async_config = window._sf_async_config = (window._sf_async_config || {});

      _sf_async_config.uid = '50924';
      _sf_async_config.domain = 'bbc.co.uk';
      _sf_async_config.flickerControl = false;
      _sf_async_config.useCanonical = true;
      _sf_async_config.sections = 'future,aircraft';
       _sf_async_config.path = '/future/article/20160216-you-think-this-is-a-sonic-boom-its-not';
      _sf_async_config.authors = "Stephen Dowling";
      /** CONFIGURATION END **/
      function loadChartbeat() {
          var e = document.createElement('script');
          var n = document.getElementsByTagName('script')[0];
          e.type = 'text/javascript';
          e.async = true;
          e.src = '//static.chartbeat.com/js/chartbeat.js';
          n.parentNode.insertBefore(e, n);
      }
      loadChartbeat();
  })();
  </script>

      </div>
<div id="orb-footer" class="orb-footer" dir="ltr"> <div id="navp-orb-footer-promo"></div><aside role="complementary"></aside></div><iframe src="https://a4621041136.cdn.optimizely.com/client_storage/a4621041136.html" hidden="" tabindex="-1" title="Optimizely Internal Frame" height="0" width="0" style="display: none;"></iframe><script type="importmap">{"imports":{"orbit-drawer":"https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/drawer-api.bundle.js","bbccookies":"https://static.files.bbci.co.uk/cookies/6868f40b6841deedfcf9895de775e1ab/cookie-banner/cookie-library.module.js"}}</script><script type="text/javascript" src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/redirect.bundle.js" async=""></script><script type="text/javascript" src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/performance.bundle.js" data-release="3.0.0-1719.65af99a0" data-ux="orb" async=""></script><script id="orb-js-script" data-assetpath="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/" src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/orb.min.js"></script><script type="module" src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/orbit.js" async=""></script><script nomodule="" type="text/javascript" src="https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/legacyOrbit.js" async=""></script>   <script type="text/javascript">/*<![CDATA[*/
       require(['orb/nav'], function(nav) {
         window.bbcuser.isUKCombined().then(function(isUK) {
           if (isUK) {
             nav.loadJs('https://static.files.bbci.co.uk/orbit/0b0a71ff229422fc63da1ec4b9726123/js/edr.min.js');
           }
         });
       });
       /*]]>*/</script>      <script type="text/javascript">require.config({
            paths: {
                "mybbc/templates": '//mybbc.files.bbci.co.uk/notification-ui/4.3.7/templates',
                "mybbc/notifications": '//mybbc.files.bbci.co.uk/notification-ui/4.3.7/js'
            }
        });

        require(['mybbc/notifications/NotificationsMain', 'idcta/idcta-1'], function (NotificationsMain, idcta) {

            var loadNotifications = function (isUK) {
                if (isUK) {
                    window.bbcpage.loadCSS('//mybbc.files.bbci.co.uk/notification-ui/4.3.7/css/main.min.css').then(function() {
                        NotificationsMain.run(idcta, '//mybbc.files.bbci.co.uk/notification-ui/4.3.7/');
                    });
                }
            };
            
            window.bbcuser.isUKCombined().then(function(isUK) {
                loadNotifications(isUK);
            });
        });</script>     <script type="module">if (window.bbcuser && window.bbcuser.isUKCombined) {
        bbcuser.isUKCombined().then(function (isUK) {
            if (isUK) {
                const isOrbUx = !!document.querySelector('.orb-nav-pri-container');
                if (isOrbUx) {
                    const script = document.createElement('script');
                    script.src = 'https://nav.files.bbci.co.uk/searchbox/eeaabba0195c5483bf5b00915e258921//js/old-search-suggest.js';
                    script.async = true;
                    script.setAttribute('data-static-prefix', 'https://nav.files.bbci.co.uk/searchbox/eeaabba0195c5483bf5b00915e258921/');
                    script.setAttribute('data-variant', 'default');
                    document.head.appendChild(script);
                } else {
                    import('https://nav.files.bbci.co.uk/searchbox/eeaabba0195c5483bf5b00915e258921//js/search-suggest.js').then(drawer => {
                        drawer.setupSearchDrawer({
                            searchboxAppStaticPrefix: 'https://nav.files.bbci.co.uk/searchbox/eeaabba0195c5483bf5b00915e258921/',
                            variant: 'default',
                        });
                    });
                }
            }
        });
    }</script>     <script type="text/javascript" src="https://nav.files.bbci.co.uk/navpromo/34f98a4c8573fabed16dc8acea28feb8/js/footerpromo.js" data-base="https://navpromo.api.bbci.co.uk" data-variant="" async=""></script>    <script type="text/javascript">window.COOKIES_STATIC_HOST="https://static.files.bbci.co.uk/cookies/6868f40b6841deedfcf9895de775e1ab/cookie-banner/cookie-prompt/"</script><script src="https://static.files.bbci.co.uk/cookies/6868f40b6841deedfcf9895de775e1ab/cookie-banner/cookie-banners.bundle.js" async=""></script>  <script src="https://nav.files.bbci.co.uk//user-activity-helper/5a08eeec4b85ac14cd5e09e2fab845eb/js/detectview.bundle.js" async=""></script><script type="text/javascript">"use strict";window.__reverb.__reverbLoadedPromise.then(function(e){return e.initialise().then(function(){return e.viewEvent()})},function(){console.log("Failed to load reverb. No event sent")});</script><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=17986528&cs_ucfr=0&cv=2.0&cj=1"></noscript>
    
  
  <iframe name="googlefcPresent" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="__tcfapiLocator" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcInactive" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe name="googlefcLoaded" src="about:blank" style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><script async="" type="text/javascript" src="https://me-ssl.effectivemeasure.net/em.js"></script><script async="" type="text/javascript" src="https://sb.scorecardresearch.com/beacon.js"></script><iframe src="https://0cf06a5b17ebf28155ce906b57629208.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html" style="visibility: hidden; display: none;"></iframe></body></html>