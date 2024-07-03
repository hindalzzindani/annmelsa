
<!DOCTYPE html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CodePen">
<meta name="twitter:title" content="Responsive News Card Slider">
<meta name="twitter:description" content="I builth another Card Slider for news and blog pages etc with swiper.js. I made sweet animations when mouse hover and slide changes. Also all of them r...">
<meta name="twitter:image" content="https://screenshot.codepen.io/1260500.bGNxZVo.031d9fdb-fb2d-4f38-8767-e45fe92390f6.png">
<meta property="og:image" content="https://codepen.io/rubythonode/pen/bGNxZVo/image/large.png" itemprop="thumbnailUrl">
<meta property="og:title" content="Responsive News Card Slider">
<meta property="og:url" content="https://codepen.io/rubythonode/details/bGNxZVo">
<meta property="og:site_name" content="CodePen">
<meta property="og:description" content="I builth another Card Slider for news and blog pages etc with swiper.js. I made sweet animations when mouse hover and slide changes. Also all of them r...">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https://codepen.io/rubythonode/pen/bGNxZVo&format=json" title="Responsive News Card Slider" />
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic' rel='stylesheet'>
<link rel="stylesheet" media="all" href="https://static.codepen.io/assets/global/global-d036fc104473b5fd51a687e65136215599e07e36485e603799123b987cf7b65a.css" />
<link rel="stylesheet" media="screen" href="https://static.codepen.io/assets/packs/css/3-5b42f81b.chunk.css" />
<link rel="stylesheet" media="screen" href="https://static.codepen.io/assets/packs/css/everypage-6c9ae100.css" />
<link rel="stylesheet" media="all" href="https://static.codepen.io/assets/editor/editor-0eb836f7eb6ac3f961a1c4bffd46959964bf3f03d8349d78bd357a385ebb9873.css" />
<meta name="description" content="I builth another Card Slider for news and blog pages etc with swiper.js. I made sweet animations when mouse hover and slide changes. Also all of them r...">
<link rel="stylesheet" media="screen" href="https://static.codepen.io/assets/editor/themes/twilight-48405ca83e8c8b4ac067604a220b1b084c7bd4d7b403a53bb88740bd13532661.css" id="cm-theme" />
<style id="cm-font-family" class="cm-font-family">


  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-family: Monaco, MonoSpace;
  }
</style>
<style id="cm-font-size">
  .CodeMirror,
  .console-logs .console-line,
  .console-command-line-input,
  .console-message,
  .CodeMirror-hint {
    font-size: 15px;
  }
</style>
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-30102653-2"></script>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="hI2kI0VkGHgP+LHA6VQy5hXEZZ0DtSYmpfXXg5nyZd0FCz3wJeQDDd39hEP8IhNT43KmeKqOFLFvBrfUOMJ+tg==" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script>/* Firefox needs this to prevent FOUC. */</script>
</head>
<body class="room-editor editor state-htmlOn-cssOn-jsOn sidebar-false preload prelayout
  layout-top
 logged-in ">
<header class="main-header" id="main-header">
</header>
<div class="item-settings-modal pen  item-settings-modal-half" id="item-settings-modal">
<header class="item-settings-modal-header">
<h2 class="item-settings-modal-header-title">Pen Settings</h2>
<div class="save-and-close-wrap">
<button type="button" class="button mini-button button-no-right-margin close" id="top-close-settings">
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
</button>
</div>
</header>
<div class="tabs settings-tabs-wrapper">
<nav id="settings-tabs" class="no-mobile-nav item-settings-tabs">
<div class="item-settings-tab-group">
<a id="settings-html-tab" href="#settings-html" class="settings-tab-html" data-type="html">
HTML
</a>
<a id="settings-css-tab" href="#settings-css" class="settings-tab-css" data-type="css">
CSS
</a>
<a id="settings-js-tab" href="#settings-js" class="settings-tab-js" data-type="js">
JS
</a>
</div>
<div class="item-settings-tab-group">
<a id="settings-behavior-tab" href="#settings-behavior" class="settings-tab-behavior" data-type="behavior">
Behavior
</a>
<a id="settings-editor-tab" href="#settings-editor" class="settings-tab-editor" data-type="editor">
Editor
</a>
</div>
</nav>
<div class="settings" id="settings-html">
<h3 aria-label="HTML">HTML</h3>
<form class="settings-row top-label-form normal-labels preprocessor-choice group">
<h4>
<label for="html-preprocessor">HTML Preprocessor</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About HTML Preprocessors</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>HTML preprocessors can make writing HTML more powerful or convenient. For instance, Markdown is designed to be easier to write and read for text documents and you could write a loop in Pug.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-html-preprocessors/" target="_blank" rel="noopener">Learn more</a> &middot; <a href="/versions/" target="_blank" rel="noopener">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="html-preprocessor" id="html-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="haml">Haml</option>
<option value="markdown">Markdown</option>
<option value="slim">Slim</option>
<option value="pug">Pug</option>
</select>
<div class="select-icon">
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</div>
</div>
</form>
<form class="settings-row top-label-form normal-labels prevent-form-submit" onsubmit="return false;">
<h4>
<label for="html-classes">Add Class(es) to &lt;html></label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>Adding Classes</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body></code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. So you don't have access to higher-up elements like the <code>&lt;html></code> tag. If you want to add classes there that can affect the whole document, this is the place to do it.</p>
</div>
</div>
<input type="text" id="html-classes" name="html-classes" class="fullwidth" placeholder="e.g. single post post-1234" maxlength="250">
</form>
<form class="settings-row top-label-form normal-labels prevent-form-submit" onsubmit="return false;">
<h4>
<label for="head-content">Stuff for &lt;head></label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About the &lt;head></h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>In CodePen, whatever you write in the HTML editor is what goes within the <code>&lt;body></code> tags in <a target="_blank" rel="noopener" href="https://blog.codepen.io/documentation/features/preview-template/">a basic HTML5 template</a>. If you need things in the <code>&lt;head></code> of the document, put that code here.</p>
</div>
</div>
<div class="head-content-wrapper">
<textarea id="head-content" name="head-content" class="fullwidth is-code head-content" placeholder="e.g. &lt;meta>, &lt;link>, &lt;script>"></textarea>
<span class="insecure-resource-tooltip">
<div class="help-flyout-link">
<span class="icon-help">!</span>
<div class="help-flyout help-flyout-reverse">
<svg class="icon-x">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<h5>Insecure Resource</h5>
<p>The resource you are linking to is using the 'http' protocol, which may not work when the browser is using https.</p>
</div>
</div>
</span>
</div>
<button class="button mini-button button-medium" id="meta-tag-insert">↑ Insert the most common viewport meta tag</button>
</form>
</div>
<div class="settings" id="settings-css">
<h3 aria-label="CSS">CSS</h3>
<form class="settings-row settings-row-1 top-label-form normal-labels preprocessor-choice group">
<h4>
<label for="css-preprocessor">CSS Preprocessor</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Preprocessors</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>CSS preprocessors help make authoring CSS easier. All of them offer things like variables and mixins to provide convenient abstractions.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-css-preprocessors/" target="_blank">Learn more</a> &middot; <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="css-preprocessor" id="css-preprocessor" class="fullwidth css-preprocessor">
<option value="none">None</option>
<option value="less">Less</option>
<option value="scss">SCSS</option>
<option value="sass">Sass</option>
<option value="stylus">Stylus</option>
<option value="postcss">PostCSS</option>
</select>
<div class="select-icon">
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</div>
</div>
<div id="need-an-addon" class="align-right hide">
<a id="css-need-an-addon-button" href="#0" class="button button-medium mini-button need-an-addon-button">
Need an add-on?
</a>
</div>
<div class="add-ons add-ons-scss hide" id="add-ons"></div>
</form>
<form id="startercss-options-form" class="settings-row settings-row-2 top-label-form prevent-form-submit" onsubmit="return false;">
<h4>
CSS Base
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About CSS Base</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>It's a common practice to apply CSS to a page that styles elements such that they are consistent across all browsers. We offer two of the most popular choices: <a href="https://necolas.github.io/normalize.css/" target="_blank" rel="noopener">normalize.css</a> and a <a href="http://meyerweb.com/eric/tools/css/reset/" target="_blank" rel="noopener">reset</a>. Or, choose <b>Neither</b> and nothing will be applied.</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="startercss-normalize" name="startercss" checked value="normalize">
<label for="startercss-normalize" class="small-inline">Normalize</label>
</li>
<li>
<input type="radio" id="startercss-reset" name="startercss" checked value="reset">
<label for="startercss-reset" class="small-inline">Reset</label>
</li>
<li>
<input type="radio" id="startercss-neither" name="startercss" checked value="neither">
<label for="startercss-neither" class="small-inline">Neither</label>
</li>
</ul>
</form>
<form id="prefix-options-form" class="settings-row settings-row-3 top-label-form">
<h4>
Vendor Prefixing
</h4>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About Vendor Prefixing</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>To get the best cross-browser support, it is a common practice to apply vendor prefixes to CSS properties and values that require them to work. For instance <code>-webkit-</code> or <code>-moz-</code>.</p>
<p>We offer two popular choices: <a href="https://github.com/postcss/autoprefixer" target="blank" rel="noopener">Autoprefixer</a> (which processes your CSS server-side) and <a href="https://leaverou.github.io/prefixfree/" target="_blank" rel="noopener">-prefix-free</a> (which applies prefixes via a script, client-side).</p>
</div>
</div>
<ul class="radio-list">
<li>
<input type="radio" id="prefix-autoprefixer" name="prefix" value="autoprefixer">
<label for="prefix-autoprefixer" class="small-inline">Autoprefixer</label>
</li>
<li>
<input type="radio" id="prefix-prefixfree" name="prefix" value="prefixfree">
<label for="prefix-prefixfree" class="small-inline">Prefixfree</label>
</li>
<li>
<input type="radio" id="prefix-neither" name="prefix" value="neither">
<label for="prefix-neither" class="small-inline">Neither</label>
</li>
</ul>
</form>
<form id="external-css-resources" class="settings-row settings-row-4 top-label-form prevent-form-submit" onsubmit="return false;">
<h4>
Add External Stylesheets/Pens
</h4>
<p>Any URL's added here will be added as <code>&lt;link></code>s in order, and before the CSS in the editor. If you link to another Pen, it will include the CSS from that Pen. If the preprocessor matches, it will attempt to combine them before processing.</p>
<div class="resource-search-bar">
<svg class="icon icon-mag">
<use xlink:href="/svg_sprite?v=8885a907#mag"></use>
</svg>
<input id="external-css-search" type="text" value="" placeholder="Search for resources (Bootstrap, Foundation, Animate.css...)">
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&utm_medium=website&utm_content=codepen.io&utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://static.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg" />
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>You can apply CSS to your Pen from any stylesheet on the web. Just put a URL to it here and we'll apply it, in the order you have them, before the CSS in the Pen itself.</p>
<p>If the stylesheet you link to has the file extension of a preprocessor, we'll attempt to process it before applying.</p>
<p>You can also link to another Pen here, and we'll pull the CSS from that Pen and include it. If it's using a matching preprocessor, we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/editor/adding-external-resources/" target="_blank" rel="noopener">Learn more</a></p>
</div>
</div>
<div id="css-external-resources" class="external-resource-wrapper">
</div>
<script id="css-external-resources-template" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg class="icon-drag-handle" width="20" height="17">
        <use xlink:href="/svg_sprite?v=8885a907#drag-handle" />
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth css-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-css"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">!</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/svg_sprite?v=8885a907#x"></use>
          </svg>
          <h5>Insecure Resource</h5>
          <p>The resource you are linking to is using the HTTP protocol, which may not work when the browser is using HTTPS.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" width="12" height="12">
          <use xlink:href="/svg_sprite?v=8885a907#x" />
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg class="icon-eye" width="14" height="14">
          <use xlink:href="/svg_sprite?v=8885a907#eye" />
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-css-resource" class="button mini-button button-medium add-resource" data-type="css">
<span data-type="css">+ add another resource</span>
</span>
</div>
</form>
</div>
<div class="settings" id="settings-js">
<div class="item-settings-javascript normal-labels">
<h3 aria-label="JavaScript">JavaScript</h3>
<div class="item-settings-javascript-preprocessor settings-row">
<h4>
<label for="js-preprocessor">JavaScript Preprocessor</label>
</h4>
<div class="help-flyout-link">
<svg class="icon-help" width="14" height="14">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About JavaScript Preprocessors</h5>
<svg class="icon-x" width="12" height="12">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>JavaScript preprocessors can help make authoring JavaScript easier and more convenient. For instance, CoffeeScript can help prevent easy-to-make mistakes and offer a cleaner syntax and Babel can bring ECMAScript 6 features to browsers that only support ECMAScript 5.</p>
<p><a href="https://blog.codepen.io/documentation/editor/using-js-preprocessors/" target="_blank" rel="noopener">Learn more</a> &middot; <a href="/versions/" target="_blank">Versions</a></p>
</div>
</div>
<div class="custom-select-wrap">
<select name="js-preprocessor" id="js-preprocessor" class="fullwidth">
<option value="none">None</option>
<option value="babel">Babel</option>
<option value="typescript">TypeScript</option>
<option value="coffeescript">CoffeeScript</option>
<option value="livescript">LiveScript</option>
</select>
<div class="select-icon">
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</div>
</div>
<div class="processing-packages-message callout hide" id="processing-packages-message">
Babel is required to process package imports. If you need a different preprocessor remove all packages first.
</div>
</div>
<div id="external-js-resources" class="item-settings-javascript-external settings-row external-js-resources top-label-form prevent-form-submit" onsubmit="return false;">
<h4>
Add External Scripts/Pens
</h4>
<p>Any URL's added here will be added as <code>&lt;script></code>s in order, and run <em>before</em> the JavaScript in the editor. You can use the URL of any other Pen and it will include the JavaScript from that Pen.</p>
<div class="resource-search-bar">
<svg class="icon icon-mag" width="18" height="18">
<use xlink:href="/svg_sprite?v=8885a907#mag"></use>
</svg>
<input id="external-js-search" type="text" value="" placeholder="Search CDNjs (jQuery, Lodash, React, Angular, Vue.js, Ember...)">
</div>
<div class="algolia-shoutout">
<a href="https://www.algolia.com/?utm_source=react-instantsearch&utm_medium=website&utm_content=codepen.io&utm_campaign=poweredby" target="_blank">
Powered by <img alt="Algolia" src="https://static.codepen.io/assets/settings/algolia-9e1c0c887f4db420704b2a79926864019ef156bcecc9d5774a7e4eaa731fc5b5.svg" />
</a>
</div>
<div class="help-flyout-link">
<svg class="icon-help" width="14" height="14">
<use xlink:href="/svg_sprite?v=8885a907#help"></use>
</svg>
<div class="help-flyout help-flyout-reverse">
<h5>About External Resources</h5>
<svg class="icon-x" width="12" height="12">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
<p>You can apply a script from anywhere on the web to your Pen. Just put a URL to it here and we'll add it, in the order you have them, before the JavaScript in the Pen itself.</p>
<p>If the script you link to has the file extension of a preprocessor, we'll attempt to process it before applying.</p>
<p>You can also link to another Pen here, and we'll pull the JavaScript from that Pen and include it. If it's using a matching preprocessor, we'll combine the code before preprocessing, so you can use the linked Pen as a true dependency.</p>
<p><a href="https://blog.codepen.io/documentation/editor/adding-external-resources/" target="_blank">Learn more</a></p>
</div>
</div>
<div id="js-external-resources" class="external-resource-wrapper">
</div>
<script id="js-external-resources-template" type="text/template">
  <div data-view-id="<%= view_id %>" class="external-resource-url-row <%= insecure_resource %>">

    <span class="move-external-url">
      <svg class="icon-drag-handle" width="20" height="17">
        <use xlink:href="/svg_sprite?v=8885a907#drag-handle" />
      </svg>
    </span>

    <input
      id="external-resource-input-<%= view_id %>"
      class="fullwidth js-resource external-resource"
      type="text"
      pattern="^((ftp|http|https):)?\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$"
      name="external-js"
      placeholder="<%= placeholder %>"
      value="<%= url %>"
      data-view-id="<%= view_id %>">

    <span class="insecure-resource-tooltip">
      <div class="help-flyout-link">
        <span class="icon-help">!</span>
        <div class="help-flyout help-flyout-reverse">
          <svg class="icon-x">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/svg_sprite?v=8885a907#x"></use>
          </svg>
          <h5>Insecure Resource</h5>
          <p>The resource you are linking to is using the HTTP protocol, which may not work when the browser is using HTTPS.</p>
        </div>
      </div>
    </span>

    <div class="resource-actions">
      <span class="remove-external-url external-url-option" data-view-id="<%= view_id %>">
        <svg class="icon-x" width="12" height="12">
          <use xlink:href="/svg_sprite?v=8885a907#x" />
        </svg>
      </span>

      <a id="external-resource-input-view-link-<%= view_id %>" class="open-external-url external-url-option" target="_blank" rel="noopener" data-view-id="<%= view_id %>" href="<%= url %>">
        <svg class="icon-eye" width="14" height="14">
          <use xlink:href="/svg_sprite?v=8885a907#eye" />
        </svg>
      </a>
    </div>

  </div>
</script>
<div class="external-resource-actions group">
<span id="add-js-resource" class="button button-medium mini-button add-resource" data-type="js">
<span data-type="js">+ add another resource</span>
</span>
</div>
</div>
</div>
</div>
<div class="settings" id="settings-behavior">
<h3 aria-label="Pen Behavior">Behavior</h3>
<form class="settings-row settings-row-2 top-label-form prevent-form-submit" onsubmit="return false;">
<h4>Save Automatically?</h4>
<div>
<p class="hint">If active, Pens will autosave every 30 seconds after being saved once.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-ambiguous">
<input type="checkbox" id="auto-save" name="auto-save" checked>
<label for="auto-save"></label>
<label for="auto-save" class="ios-toggle-mega-label"></label>
</span>
</div>
</div>
</form>
<form class="settings-row settings-row-3 top-label-form prevent-form-submit" onsubmit="return false;">
<h4>Auto-Updating Preview</h4>
<p class="hint">If enabled, the preview panel updates automatically as you code. If disabled, use the "Run" button to update.</p>
<div class="ios-toggle-mega-label-wrap">
<span class="ios-toggle ios-toggle-ambiguous">
<input type="checkbox" id="auto-run" name="auto-run" checked>
<label for="auto-run"></label>
<label for="auto-run" class="ios-toggle-mega-label"></label>
</span>
</div>
</form>
</div>
<div class="settings" id="settings-editor">
<h3 aria-label="Editor Settings">Editor Settings</h3>
<form id="editor-settings-form" class="settings-row settings-row-1 top-label-form prevent-form-submit" onsubmit="return false;">
<h4>Code Indentation</h4>
<div class="settings-row">
<ul class="radio-list">
<li>
<input type="radio" id="indent-with-spaces" name="indent-with" value="spaces" checked>
<label for="indent-with-spaces" class="small-inline">Spaces</label>
</li>
<li>
<input type="radio" id="indent-with-tabs" name="indent-with" value="tabs">
<label for="indent-with-tabs" class="small-inline">Tabs</label>
</li>
</ul>
</div>
<div class="settings-row top-label-form normal-labels">
<h4><label for="tab-size">Indent width</label></h4>
<div class="custom-select-wrap">
<select id="tab-size" class="fullwidth" name="tab-size">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<div class="select-icon">
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
<svg class="icon-arrow-down-mini">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</div>
</div>
</div>
</form>
<div class="settings-row">
<h4>Want to change your Syntax Highlighting theme, Fonts and more?</h4>
<p>Visit <a href="/you/settings/editor" target="_blank">your global Editor Settings</a>.</p>
</div>
</div>
</div>
<footer>
<div class="save-and-close-wrap">
<input type="button" class="button button-small green button-no-right-margin close" value="Close" id="close-settings">
</div>
</footer>
</div>
<div class="tour-modals">
<div id="tour-intro-modal" class="tour-modal tour-intro-modal">
<h2 id="tour-intro-modal-heading" class="tour-intro-modal-heading"></h2>
<p id="tour-intro-modal-description" class="tour-intro-modal-description"></p>
<a href="#" id="tour-intro-start-btn" class="tour-intro-start-btn button green"></a>
<a href="#" id="tour-intro-cancel-link" class="tour-cancel-link"></a>
</div>
<div id="tour-step-modal" class="tour-modal tour-step-modal">
<div class="tour-modal-instructions">
<p id="tour-step-modal-instruction" class="tour-modal-instruction">HTML Settings</p>
<p id="tour-step-modal-info" class="tour-modal-further-info">Here you can Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
</div>
<div id="tour-progress" class="tour-progress">
<div id="tour-progress-indicator" class="tour-progress-indicator"></div>
</div>
<div class="tour-next-step">
<a id="tour-step-next-btn" class="tour-next-step-btn button green">Next Step</a>
<a id="tour-step-cancel" class="tour-cancel-link" href="#">Leave tour</a>
</div>
<div id="tour-step-modal-arrow" class="tour-step-modal-arrow"></div>
</div>
<div id="tour-complete-modal" class="tour-modal tour-complete-modal">
<h2 id="tour-complete-modal-heading" class="tour-intro-complete-heading"></h2>
<p id="tour-complete-modal-description" class="tour-intro-complete-description"></p>
<a href="#" id="tour-complete-option-1" class="tour-intro-start-btn button green"></a>
<a href="#" id="tour-complete-option-2" class="tour-cancel-link"></a>
<a href="#" id="tour-complete-option-3" class="tour-cancel-link"></a>
<a href="#" id="tour-complete-option-4" class="tour-cancel-link"></a>
</div>
</div>
<div id="tour-overlay" class="tour-overlay">
<div id="tour-overlay-section-0" class="tour-overlay-section"></div>
<div id="tour-overlay-section-1" class="tour-overlay-section"></div>
<div id="tour-overlay-section-2" class="tour-overlay-section"></div>
<div id="tour-overlay-section-3" class="tour-overlay-section"></div>
</div>
<div class="page-wrap twilight">
<div class="boxes">
<div class="mobile-editor-nav">
<button id="html-toggle" class="selected"><span>HTML</span></button>
<button id="css-toggle"><span>CSS</span></button>
<button id="js-toggle"><span>JS</span></button>
<button id="result-toggle" class="selected"><span>Result</span></button>
</div>
<div class="top-boxes editor-parent" data-number-of-editors="3">
<div class="editor-resizer html-editor-resizer" title="Double-click to expand."></div>
<div id="box-html" class="box box-html" data-type="html">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<button id="settings-pane-html" class="button button-medium mini-button settings-nub" data-type="html" title="Open HTML Settings">
<svg class="icon-gear" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#gear"></use>
</svg>
</button>
<h2 class="box-title html-editor-title" id="html-editor-title">
<span class="box-title-name">
HTML
</span>
<span class="box-title-preprocessor-name"></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-html" data-dropdown="#editor-dropdown-html" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
HTML Options
</span>
<svg class="icon-arrow-down-mini" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</button>
<ul id="editor-dropdown-html" class="link-list is-dropdown editor-dropdown editor-dropdown-html" data-dropdown-position="css" data-dropdown-type="html">
<li class="editor-dropdown-list-item">
<button id="tidy-html" class="invisible-button tidy-code-button" data-editor-type="html">
Format HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-html" class="invisible-button view-compiled-button" data-editor-type="html">
View Compiled HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-html" class="invisible-button analyze-button" data-editor-type="html">
Analyze HTML
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-html-editor" class="invisible-button maximize-button" data-editor-type="html">
Maximize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-html-editor" class="invisible-button minimize-button" data-editor-type="html">
Minimize HTML Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-html" class="invisible-button fold-all-button" data-editor-type="html">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-html" class="invisible-button unfold-all-button" data-editor-type="html">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap">
<pre id="html" class="code-box" aria-labeledby="html-editor-title">
            <code>
              &lt;div class=&quot;wrapper&quot;&gt;

  &lt;div class=&quot;background&quot;&gt;
    &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132206/news-slider/background.jpg&quot; alt=&quot;&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;item-bg&quot;&gt;&lt;/div&gt;

  &lt;div class=&quot;news-slider&quot;&gt;
    &lt;div class=&quot;news-slider__wrp swiper-wrapper&quot;&gt;
      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;24&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-2.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;25&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-3.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;26&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-4.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;27&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-2.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;28&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-5.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__item swiper-slide&quot;&gt;
        &lt;a href=&quot;#&quot; class=&quot;news__item&quot;&gt;
          &lt;div class=&quot;news-date&quot;&gt;
            &lt;span class=&quot;news-date__title&quot;&gt;29&lt;/span&gt;
            &lt;span class=&quot;news-date__txt&quot;&gt;May&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class=&quot;news__title&quot;&gt;
            Lorem Ipsum Dolor Sit Amed
          &lt;/div&gt;

          &lt;p class=&quot;news__txt&quot;&gt;
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...
          &lt;/p&gt;

          &lt;div class=&quot;news__img&quot;&gt;
            &lt;img src=&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-4.jpg&quot; alt=&quot;news&quot;&gt;
          &lt;/div&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;news-slider__ctr&quot;&gt;

      &lt;div class=&quot;news-slider__arrows&quot;&gt;
        &lt;button class=&quot;news-slider__arrow news-slider-prev&quot;&gt;
          &lt;span class=&quot;icon-font&quot;&gt;
            &lt;svg class=&quot;icon icon-arrow-left&quot;&gt;&lt;use xlink:href=&quot;#icon-arrow-left&quot;&gt;&lt;/use&gt;&lt;/svg&gt;
          &lt;/span&gt;
        &lt;/button&gt;
        &lt;button class=&quot;news-slider__arrow news-slider-next&quot;&gt;
          &lt;span class=&quot;icon-font&quot;&gt;
            &lt;svg class=&quot;icon icon-arrow-right&quot;&gt;&lt;use xlink:href=&quot;#icon-arrow-right&quot;&gt;&lt;/use&gt;&lt;/svg&gt;
          &lt;/span&gt;
        &lt;/button&gt;
      &lt;/div&gt;

      &lt;div class=&quot;news-slider__pagination&quot;&gt;&lt;/div&gt;

    &lt;/div&gt;

  &lt;/div&gt;

&lt;/div&gt;

&lt;svg hidden=&quot;hidden&quot;&gt;
  &lt;defs&gt;
    &lt;symbol id=&quot;icon-arrow-left&quot; viewBox=&quot;0 0 32 32&quot;&gt;
      &lt;title&gt;arrow-left&lt;/title&gt;
      &lt;path d=&quot;M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z&quot;&gt;&lt;/path&gt;
    &lt;/symbol&gt;
    &lt;symbol id=&quot;icon-arrow-right&quot; viewBox=&quot;0 0 32 32&quot;&gt;
      &lt;title&gt;arrow-right&lt;/title&gt;
      &lt;path d=&quot;M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z&quot;&gt;&lt;/path&gt;
    &lt;/symbol&gt;
  &lt;/defs&gt;
&lt;/svg&gt;
            </code>
          </pre>
<div class="error-bar" id="error-bar-html">
<span class="error-icon" data-type="html">
!
</span>
</div>
</div>
</div>
<div class="editor-resizer css-editor-resizer" title="Double-click to expand."></div>
<div id="box-css" class="box box-css" data-type="css">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<button id="settings-pane-css" class="button button-medium mini-button settings-nub" data-type="css" title="Open CSS Settings">
<svg class="icon-gear" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#gear"></use>
</svg>
</button>
<h2 class="box-title css-editor-title" id="css-editor-title">
<span class="box-title-name">
CSS
</span>
<span class="box-title-preprocessor-name"></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-css" data-dropdown="#editor-dropdown-css" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
CSS Options
</span>
<svg class="icon-arrow-down-mini" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</button>
<ul id="editor-dropdown-css" class="link-list is-dropdown editor-dropdown editor-dropdown-css" data-dropdown-position="css" data-dropdown-type="css">
<li class="editor-dropdown-list-item">
<button id="tidy-css" class="invisible-button tidy-code-button" data-editor-type="css">
Format CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-css" class="invisible-button view-compiled-button" data-editor-type="css">
View Compiled CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-css" class="invisible-button analyze-button" data-editor-type="css">
Analyze CSS
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-css-editor" class="invisible-button maximize-button" data-editor-type="css">
Maximize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-css-editor" class="invisible-button minimize-button" data-editor-type="css">
Minimize CSS Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-css" class="invisible-button fold-all-button" data-editor-type="css">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-css" class="invisible-button unfold-all-button" data-editor-type="css">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap">
<pre id="css" class="code-box" aria-labeledby="css-editor-title">
            <code>
              @import url(&#39;https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;subset=latin-ext&#39;);

html {
  position: relative;
  overflow-x: hidden!important;
}

body {
  font-family: &#39;Quicksand&#39;, sans-serif;
}

a, a:hover {
  text-decoration: none;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.background {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;

  &amp;:after {
    content: &#39;&#39;;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(45deg, rgba(209, 0, 42, 0.6) 0%, #0E5DC4 100%);
    opacity: 0.9;
  }

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
    user-select: none;
  }

}

.item-bg {
  width: 300px;
  height: 500px;
  position: absolute;
  top: 30px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);
  opacity: 0;
  transition: all .3s;
  left: -30px;
  //left: 50%;
  //transform: translateX(-50%);

  &amp;.active {
    left: 0;
    top: 0;
    opacity: 1;
  }

}

.news {

  &amp;-slider {
    z-index: 2;
    max-width: 1300px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 60px;

    @media screen and (max-width: 1300px){
      max-width: 1000px;
    }

    @media screen and (max-width: 576px) {
      margin-top: 45px;
    }

    &amp;__wrp {
      display: flex;
      align-items: flex-start;
      position: relative;
      z-index: 2;
    }

    &amp;__item {
      width: 400px;
      flex-shrink: 0;
      //padding: 15px;

      @media screen and (max-width: 992px) {
        width: 340px;
      }

      &amp;.swiper-slide {
        opacity: 0;
        pointer-events: none;
        transition: all .3s;
      }

      &amp;.swiper-slide-active,
      &amp;.swiper-slide-prev,
      &amp;.swiper-slide-next {
        opacity: 1;
        pointer-events: auto;
      }


    }

    &amp;__ctr {
      position: relative;
      z-index: 12;
    }

    &amp;__arrow {
      background: #fff;
      border: none;
      display: inline-flex;
      width: 50px;
      height: 50px;
      justify-content: center;
      align-items: center;
      box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);
      border-radius: 50%;
      position: absolute;
      top: 50%;
      z-index: 12;
      cursor: pointer;
      outline: none!important;

      &amp;:focus {
        outline: none!important;
      }

      .icon-font {
        display: inline-flex;
      }

      &amp;.news-slider-prev {
        left: 15px;
        transform: translateY(-50%);
      }

      &amp;.news-slider-next {
        right: 15px;
        transform: translateY(-50%);
      }

    }

    &amp;__pagination {
      text-align: center;
      margin-top: 50px;

      // @media screen and (max-width: 576px) {
      //   margin-top: 50px;
      // }

      .swiper-pagination-bullet {
        width: 13px;
        height: 10px;
        display: inline-block;
        background: #fff;
        opacity: .2;
        margin: 0 5px;
        border-radius: 20px;
        transition: opacity .5s, background-color .5s, width .5s;
        transition-delay: .5s, .5s, 0s;
      }

      .swiper-pagination-bullet-active {
        opacity: 1;
        background: #ffffff;
        width: 100px;
        transition-delay: 0s;

        @media screen and (max-width: 576px) {
          width: 70px;
        }

      }
    }

  }

  &amp;__item {
    padding: 40px;
    color: #fff;
    border-radius: 10px;
    display: block;
    transition: all .3s;

    @media screen and (min-width: 800px) {
      &amp;:hover {
        color: #222222;
        transition-delay: .1s;
        //background: #fff;
        //box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);

        .news-date,.news__title,.news__txt {
          opacity: 1;
          transition-delay: .1s;
        }

        .news__img {
          box-shadow: none;
        }

      }
    }



    &amp;.active {
      color: #222222;

      .news-date,.news__title,.news__txt {
        opacity: 1;
      }

      .news__img {
        box-shadow: none;
      }

    }

    @media screen and (max-width: 992px) {
      padding: 30px;
    }

    @media screen and (max-width: 576px) {
      padding: 20px;
    }

  }

  &amp;-date {
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 2px solid;
    display: inline-block;
    opacity: .7;
    transition: opacity .3s;

    @media screen and (max-width: 576px) {
      margin-bottom: 10px;
      display: inline-flex;
      align-items: center;
      padding-bottom: 0;
    }

    &amp;__title {
      display: block;
      font-size: 32px;
      margin-bottom: 10px;
      font-weight: 500;

      @media screen and (max-width: 576px) {
        margin-right: 10px;
      }

    }

    &amp;__txt {
      font-size: 16px;
    }

  }

  &amp;__title {
    font-size: 25px;
    font-weight: 500;
    opacity: .7;
    margin-top: 10px;
    margin-bottom: 15px;
    transition: opacity .3s;

    @media screen and (max-width: 576px) {
      font-size: 22px;
      margin-bottom: 10px;
    }

  }

  &amp;__txt {
    margin: 10px 0;
    line-height: 1.6em;
    font-size: 15px;
    opacity: .7;
    transition: opacity .3s;
  }

  &amp;__img {
    border-radius: 10px;
    box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);
    height: 200px;
    margin-top: 30px;
    width: 100%;
    transition: all .3s;
    transform-origin: 0% 0%;

    @media screen and (max-width: 576px) {
      height: 180px;
      margin-top: 20px;
    }

    img {
      max-width: 100%;
      border-radius: 10px;
      height: 100%;
      width: 100%;
    }

  }


}














            </code>
          </pre>
<div class="error-bar" id="error-bar-css">
<span class="error-icon" data-type="css">
!
</span>
</div>
</div>
</div>
<div class="editor-resizer js-editor-resizer" title="Double-click to expand."></div>
<div id="box-js" class="box box-js" data-type="js">
<div class="powers">
<div class="powers-drag-handle" title="Double-click to expand."></div>
<div class="editor-actions-left">
<button id="settings-pane-js" class="button button-medium mini-button settings-nub" data-type="js" title="Open JS Settings">
<svg class="icon-gear" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#gear"></use>
</svg>
</button>
<h2 class="box-title js-editor-title" id="js-editor-title">
<span class="box-title-name">
JS
</span>
<span class="box-title-preprocessor-name"></span>
</h2>
</div>
<div class="editor-actions-right">
<div class="collaborators-indicators"></div>
<button class="button mini-button button-medium editor-dropdown-button editor-dropdown-button-js" data-dropdown="#editor-dropdown-js" aria-haspopup="true" aria-expanded="false">
<span class="visually-hidden">
JS Options
</span>
<svg class="icon-arrow-down-mini" width="10" height="10">
<use xlink:href="/svg_sprite?v=8885a907#arrow-down-mini"></use>
</svg>
</button>
<ul id="editor-dropdown-js" class="link-list is-dropdown editor-dropdown editor-dropdown-js" data-dropdown-position="css" data-dropdown-type="js">
<li class="editor-dropdown-list-item">
<button id="tidy-js" class="invisible-button tidy-code-button" data-editor-type="js">
Format JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="view-compiled-js" class="invisible-button view-compiled-button" data-editor-type="js">
View Compiled JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="analyze-js" class="invisible-button analyze-button" data-editor-type="js">
Analyze JavaScript
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="maximize-js-editor" class="invisible-button maximize-button" data-editor-type="js">
Maximize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="minimize-js-editor" class="invisible-button minimize-button" data-editor-type="js">
Minimize JavaScript Editor
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="fold-all-js" class="invisible-button fold-all-button" data-editor-type="js">
Fold All
</button>
</li>
<li class="editor-dropdown-list-item">
<button id="unfold-all-js" class="invisible-button unfold-all-button" data-editor-type="js">
Unfold All
</button>
</li>
</ul>
</div>
</div>
<div class="code-wrap">
<pre id="js" class="code-box" aria-labeledby="js-editor-title">
            <code>
              var bg = document.querySelector(&#39;.item-bg&#39;);
var items = document.querySelectorAll(&#39;.news__item&#39;);
var item = document.querySelector(&#39;.news__item&#39;);

function cLog(content) {
    console.log(content)
}

if($(window).width() &gt; 800) {
    $(document).on(&quot;mouseover&quot;, &quot;.news__item&quot;, function (_event, _element) {

        var newsItem = document.querySelectorAll(&#39;.news__item&#39;);
        newsItem.forEach(function (element, index) {
            element.addEventListener(&#39;mouseover&#39;, function () {
                var x = this.getBoundingClientRect().left;
                var y = this.getBoundingClientRect().top;
                var width = this.getBoundingClientRect().width;
                var height = this.getBoundingClientRect().height;

                $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);
                $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);
                // $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);


                bg.style.width = width + &#39;px&#39;;
                bg.style.height = height + &#39;px&#39;;
                bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;
            });

            element.addEventListener(&#39;mouseleave&#39;, function () {
                $(&#39;.item-bg&#39;).removeClass(&#39;active&#39;);
                $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);
            });

        });

    });
}


var swiper = new Swiper(&#39;.news-slider&#39;, {
    effect: &#39;coverflow&#39;,
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    keyboard: true,
    spaceBetween: 0,
    slidesPerView: &#39;auto&#39;,
    speed: 300,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 3,
        slideShadows: false
    },
    breakpoints: {
        480: {
            spaceBetween: 0,
            centeredSlides: true
        }
    },
    simulateTouch: true,
    navigation: {
        nextEl: &#39;.news-slider-next&#39;,
        prevEl: &#39;.news-slider-prev&#39;
    },
    pagination: {
        el: &#39;.news-slider__pagination&#39;,
        clickable: true
    },
    on: {
        init: function () {
            var activeItem = document.querySelector(&#39;.swiper-slide-active&#39;);

            var sliderItem = activeItem.querySelector(&#39;.news__item&#39;);

            $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);

            var x = sliderItem.getBoundingClientRect().left;
            var y = sliderItem.getBoundingClientRect().top;
            var width = sliderItem.getBoundingClientRect().width;
            var height = sliderItem.getBoundingClientRect().height;


            $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);

            bg.style.width = width + &#39;px&#39;;
            bg.style.height = height + &#39;px&#39;;
            bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;
        }
    }
});

swiper.on(&#39;touchEnd&#39;, function () {
    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);
    $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);
});

swiper.on(&#39;slideChange&#39;, function () {
    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);
});

swiper.on(&#39;slideChangeTransitionEnd&#39;, function () {
    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);
    var activeItem = document.querySelector(&#39;.swiper-slide-active&#39;);

    var sliderItem = activeItem.querySelector(&#39;.news__item&#39;);

    $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);

    var x = sliderItem.getBoundingClientRect().left;
    var y = sliderItem.getBoundingClientRect().top;
    var width = sliderItem.getBoundingClientRect().width;
    var height = sliderItem.getBoundingClientRect().height;


    $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);

    bg.style.width = width + &#39;px&#39;;
    bg.style.height = height + &#39;px&#39;;
    bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;
});



            </code>
          </pre>
<div class="error-bar" id="error-bar-js">
<span class="error-icon" data-type="js">
!
</span>
</div>
</div>
</div>
</div>
<div id="resizer" class="resizer"><span></span><div id="width-readout" class="width-readout">999px</div></div>
<section id="drawer" class="drawer comments">
</section>
<div class="output-container">
<div class="output-sizer">
<div id="result_div" class="result">
<iframe id="result" name="CodePen" src="https://cdpn.io/rubythonode/fullpage/bGNxZVo" sandbox="allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation allow-same-origin allow-scripts" allow="geolocation; microphone; camera; midi; vr; accelerometer; gyroscope; payment; ambient-light-sensor; encrypted-media" scrolling="auto" allowTransparency="true" allowpaymentrequest="true" allowfullscreen="true" class="result-iframe ">
          </iframe>
<div id="asset-bin-goes-here"></div>
<div id="editor-drag-cover" class="drag-cover"></div>
</div>
<div id="box-console" class="box box-console">
<div class="editor-resizer editor-resizer-console" title="Drag to resize. Double-click to expand."></div>
<div class="powers">
<div class="powers-drag-handle" title="Drag to resize. Double-click to expand."></div>
<div class="editor-actions-left">
<h2 class="box-title"><span class="box-title-name">Console</span></h2>
</div>
<div class="editor-actions-right">
<button class="button button-medium mini-button console-clear-button" title="Clear">
Clear
</button>
<button class="button button-medium mini-button close-editor-button" data-type="console" title="Close">
<svg class="icon-x">
<use xlink:href="/svg_sprite?v=8885a907#x"></use>
</svg>
</button>
</div>
</div>
<div class="console-wrap">
<div class="console-entries short-no-scroll"></div>
<div class="console-command-line">
<span class="console-arrow forwards"></span>
<textarea class="console-command-line-input auto-expand" rows="1" data-min-rows="1"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer id="react-pen-footer" class="site-footer editor-footer"></footer>
<div id="keycommands" class="modal modal-neutral">
<section class="editor-commands" style="padding-right: 10px;">
<h2>Editor Commands</h2>
<div class="key-group">
<kbd class="command-no-mod">
<span class="pc_only">Ctrl</span>
<span class="mac_only">Ctrl</span>
Space
</kbd>
Autocomplete (if available)
</div>
<div class="key-group">
<kbd class="command">F</kbd>
Find
</div>
<div class="key-group">
<kbd class="command">G</kbd>
Find Next
</div>
<div class="key-group">
<kbd class="command">⇧G</kbd>
Find Previous
</div>
<div class="key-group">
<span class="command pc_only">Shift F</span>
<span class="command mac_only">Opt F</span>
Find & Replace
</div>
<div class="key-group">
<kbd class="command">[</kbd>
Indent Code Right
</div>
<div class="key-group">
<kbd class="command">]</kbd>
Indent Code Left
</div>
<div class="key-group">
<kbd class="command-no-mod">⇧ Tab</kbd>
Auto Indent Code
</div>
<div class="key-group">
<kbd class="command">/</kbd>
Line Comment
</div>
<div class="key-group">
<kbd class="command">
<span class="pc_only">⇧</span>
<span class="mac_only">Opt</span>
/
</kbd>
Block Comment
</div>
<p style="margin: 20px 0 0 0;">Also see: <a href="https://blog.codepen.io/documentation/features/tab-triggers/" target="_blank" rel="noopener">Tab Triggers</a></p>
</section>
<section class="editor-commands">
<h2>HTML Specific</h2>
<div class="key-group">
<kbd class="command">⇧A</kbd>
Wrap With...
</div>
<h2>Misc</h2>
<div class="key-group">
<kbd class="command">⇧7</kbd>
Re-run Preview
</div>
<div class="key-group">
<kbd class="command">⇧8</kbd>
Clear All Analyze Errors
</div>
<div class="key-group">
<kbd class="command">⇧9</kbd>
Open This Dialog
</div>
<h2>Pen Actions</h2>
<div class="key-group">
<kbd class="command">P</kbd>
Create New Pen
</div>
<div class="key-group">
<kbd class="command">S</kbd>
Save
</div>
<div class="key-group">
<kbd class="command">I</kbd>
Info Panel (if owned)
</div>
</section>
</div>
<div id="popup-overlay" class="overlay popup-overlay"></div>
<div id="modal-overlay" class="overlay modal-overlay"></div>
<div id="react-popups" class="react-popups"></div>
<noscript>

  <input type="checkbox" class="modal-closing-trick" id="modal-closing-trick">

  <div class="overlay noscript-overlay" style="display: block;"></div>

  <div class="modal modal-message group modal-warning">

    <div class="modal-title">CodePen requires JavaScript to render the code and preview areas in this view.</div>

    <p>Trying <a href="https://codepen.io/rubythonode/debug/bGNxZVo">viewing this Pen in Debug Mode</a>, which is the preview area without any iframe and does not require JavaScript. Although what the preview is of might!</p>

    <p>Need to know how to enable JavaScript? <a href="http://enable-javascript.com/" target="_blank" rel="noopener">Go here.</a></p>

    <label class="button button-medium" for="modal-closing-trick">Close this, use anyway.</label>

  </div>

</noscript>
<input type="hidden" id="init-data" value="{&quot;__browser&quot;:{&quot;device&quot;:&quot;unknown&quot;,&quot;mobile&quot;:null,&quot;name&quot;:&quot;chrome&quot;,&quot;platform&quot;:&quot;pc&quot;,&quot;version&quot;:&quot;79&quot;},&quot;__analytics&quot;:{&quot;controllerActionName&quot;:&quot;show&quot;,&quot;controllerName&quot;:&quot;pen&quot;,&quot;enabled&quot;:true},&quot;__remote_addr&quot;:&quot;46.35.94.105&quot;,&quot;__CPDATA&quot;:{&quot;domain_iframe&quot;:&quot;https://cdpn.io&quot;,&quot;host&quot;:&quot;codepen.io&quot;,&quot;iframe_allow&quot;:&quot;geolocation; microphone; camera; midi; vr; accelerometer; gyroscope; payment; ambient-light-sensor; encrypted-media&quot;,&quot;iframe_sandbox&quot;:&quot;allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation allow-same-origin allow-scripts&quot;},&quot;__env&quot;:&quot;production&quot;,&quot;__turnOffJS&quot;:false,&quot;__constants&quot;:{&quot;grid_iframe_sandbox_attributes&quot;:&quot;allow-scripts allow-pointer-lock allow-same-origin&quot;},&quot;__svg_sprite&quot;:&quot;/svg_sprite?v=8885a907&quot;,&quot;__user&quot;:{&quot;anon&quot;:false,&quot;base_url&quot;:&quot;/hindoalzindani/&quot;,&quot;current_team_id&quot;:0,&quot;current_team_hashid&quot;:&quot;YdEzGn&quot;,&quot;hashid&quot;:&quot;GpExEG&quot;,&quot;id&quot;:4046085,&quot;itemType&quot;:&quot;user&quot;,&quot;name&quot;:&quot;hind&quot;,&quot;owner_id&quot;:&quot;GpExEGYdEzGn&quot;,&quot;paid&quot;:false,&quot;tier&quot;:0,&quot;username&quot;:&quot;hindoalzindani&quot;},&quot;__firestore&quot;:{&quot;config&quot;:{&quot;apiKey&quot;:&quot;AIzaSyBgLAe7N_MdFpuVofMkcQLGwwhUu5tuxls&quot;,&quot;authDomain&quot;:&quot;codepen-store-production.firebaseapp.com&quot;,&quot;databaseURL&quot;:&quot;https://codepen-store-production.firebaseio.com&quot;,&quot;disabled&quot;:false,&quot;projectId&quot;:&quot;codepen-store-production&quot;},&quot;token&quot;:&quot;eyJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJodHRwczovL2lkZW50aXR5dG9vbGtpdC5nb29nbGVhcGlzLmNvbS9nb29nbGUuaWRlbnRpdHkuaWRlbnRpdHl0b29sa2l0LnYxLklkZW50aXR5VG9vbGtpdCIsImNsYWltcyI6eyJvd25lcklkIjoiR3BFeEVHWWRFekduIiwiYWRtaW4iOmZhbHNlfSwiZXhwIjoxNTgwMTEzMTU2LCJpYXQiOjE1ODAxMDk1NTYsImlzcyI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInN1YiI6ImZpcmViYXNlLWFkbWluc2RrLThva3lsQGNvZGVwZW4tc3RvcmUtcHJvZHVjdGlvbi5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSIsInVpZCI6IkdwRXhFRyJ9.yJvVVogSnwqyIy5hsKcwbD0lVzHhP_qdnfqIo8HXg1kXR7-huKB-zquyKUmgZRIRhaRQaFev2cDS7pttfxsx83gGxtT3sBdgTOCg25RfObhh9Z3TAvszhWgM9LTKJVT80UJgNm5I0DWCJuli5gzXJlWXvlsKl9Kr3qVaVtP12UEEPrWKWDGnq3x5OPfz9bCq-ep-s89mFITL9UTxFz7a8_Pp3KKbsYzu4nlP0uTtQ3QLfKa6Iy9FSGSaTTB_VEGSq6116rXeNElxYqaMGCURLm-X7ga6rvK_CUI3wslLbwZuXF7QlCJWs7bEJw8-0OQ-Zzi880ZoS83TP8pDsaLjRw&quot;},&quot;__graphql&quot;:{&quot;data&quot;:{&quot;sessionUser&quot;:{&quot;id&quot;:&quot;GpExEG&quot;,&quot;name&quot;:&quot;hind&quot;,&quot;avatar80&quot;:&quot;https://gravatar.com/avatar/3a0cef2de3c10407e3e77f8bf9d72f2b?s=80&amp;d=https://static.codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png&quot;,&quot;avatar512&quot;:&quot;https://gravatar.com/avatar/3a0cef2de3c10407e3e77f8bf9d72f2b?s=512&amp;d=https://static.codepen.io/assets/avatars/user-avatar-512x512-6e240cf350d2f1cc07c2bed234c3a3bb5f1b237023c204c782622e80d6b212ba.png&quot;,&quot;canCreatePosts&quot;:false,&quot;currentContext&quot;:{&quot;id&quot;:&quot;GpExEG&quot;,&quot;baseUrl&quot;:&quot;/hindoalzindani&quot;,&quot;title&quot;:&quot;hind&quot;,&quot;name&quot;:&quot;hind&quot;,&quot;avatar80&quot;:&quot;https://gravatar.com/avatar/3a0cef2de3c10407e3e77f8bf9d72f2b?s=80&amp;d=https://static.codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png&quot;,&quot;avatar512&quot;:&quot;https://gravatar.com/avatar/3a0cef2de3c10407e3e77f8bf9d72f2b?s=512&amp;d=https://static.codepen.io/assets/avatars/user-avatar-512x512-6e240cf350d2f1cc07c2bed234c3a3bb5f1b237023c204c782622e80d6b212ba.png&quot;,&quot;username&quot;:&quot;hindoalzindani&quot;,&quot;contextType&quot;:&quot;USER&quot;,&quot;projectLimitations&quot;:{&quot;projects&quot;:1,&quot;usedProjects&quot;:0,&quot;__typename&quot;:&quot;ProjectLimitations&quot;},&quot;privateByDefault&quot;:false,&quot;__typename&quot;:&quot;User&quot;},&quot;currentTeamId&quot;:null,&quot;baseUrl&quot;:&quot;/hindoalzindani&quot;,&quot;username&quot;:&quot;hindoalzindani&quot;,&quot;admin&quot;:false,&quot;anon&quot;:false,&quot;pro&quot;:false,&quot;verified&quot;:false,&quot;teams&quot;:[],&quot;permissions&quot;:{&quot;quot;canCreatePrivate&quot;:false,&quot;__typename&quot;:&quot;UserPermissions&quot;},&quot;__typename&quot;:&quot;User&quot;}}},&quot;__pageType&quot;:&quot;pen&quot;,&quot;__jwt&quot;:&quot;eyJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7InBhaWQiOmZhbHNlLCJ0ZWFtX2lkIjoiWWRFekduIiwidXNlcl9pZCI6IkdwRXhFRyIsInVzZXJuYW1lIjoiaGluZG9hbHppbmRhbmkifSwiZXhwIjoxNTgwMTk1OTU2fQ.hUhZ76wpPi21n0H1J_YyXEoCeQ3b9mVuVS6HE5BXVfE&quot;,&quot;__boomboom&quot;:{&quot;serve_url&quot;:&quot;https://cdpn.io/boomboom/v2/index.html&quot;,&quot;store_url&quot;:&quot;https://cdpn.io/boomboom/v2/store&quot;},&quot;__preprocessors_url&quot;:&quot;https://wfwf9k3tn7.execute-api.us-west-2.amazonaws.com/production&quot;,&quot;__layoutType&quot;:null,&quot;__rtData&quot;:&quot;{\&quot;maxMembers\&quot;:0,\&quot;roomID\&quot;:\&quot;bGNxZVo/live\&quot;,\&quot;roomType\&quot;:\&quot;live\&quot;,\&quot;updatedAt\&quot;:1579223233,\&quot;user\&quot;:{\&quot;id\&quot;:\&quot;GpExEG\&quot;,\&quot;hashid\&quot;:\&quot;GpExEG\&quot;,\&quot;name\&quot;:\&quot;hind\&quot;,\&quot;username\&quot;:\&quot;hindoalzindani\&quot;,\&quot;role\&quot;:\&quot;editor\&quot;}}&quot;,&quot;__item&quot;:&quot;{\&quot;custom_screenshot\&quot;:null,\&quot;dependencies\&quot;:{},\&quot;editor_settings\&quot;:{\&quot;theme\&quot;:\&quot;twilight\&quot;,\&quot;html_pre_processor\&quot;:\&quot;none\&quot;,\&quot;css_pre_processor\&quot;:\&quot;none\&quot;,\&quot;css_starter\&quot;:\&quot;neither\&quot;,\&quot;css_prefix\&quot;:\&quot;neither\&quot;,\&quot;js_pre_processor\&quot;:\&quot;none\&quot;,\&quot;font_type\&quot;:\&quot;monaco\&quot;,\&quot;font_size\&quot;:\&quot;15\&quot;,\&quot;key_bindings\&quot;:\&quot;normal\&quot;,\&quot;indent_with\&quot;:\&quot;spaces\&quot;,\&quot;tab_size\&quot;:\&quot;2\&quot;,\&quot;auto_run\&quot;:true,\&quot;line_numbers\&quot;:true,\&quot;line_wrapping\&quot;:true,\&quot;code_folding\&quot;:true,\&quot;match_brackets\&quot;:true,\&quot;autocomplete\&quot;:false,\&quot;emmet_active\&quot;:true,\&quot;snippets\&quot;:{\&quot;markupSnippets\&quot;:{},\&quot;stylesheetSnippets\&quot;:{}}},\&quot;hashid\&quot;:\&quot;bGNxZVo\&quot;,\&quot;itemType\&quot;:\&quot;pen\&quot;,\&quot;owner_id\&quot;:\&quot;zGvvEgYdEzGn\&quot;,\&quot;resources\&quot;:[{\&quot;url\&quot;:\&quot;https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css\&quot;,\&quot;order\&quot;:0,\&quot;resource_type\&quot;:\&quot;css\&quot;,\&quot;par_content\&quot;:\&quot;\&quot;},{\&quot;url\&quot;:\&quot;https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\&quot;,\&quot;order\&quot;:0,\&quot;resource_type\&quot;:\&quot;js\&quot;,\&quot;par_content\&quot;:\&quot;\&quot;},{\&quot;url\&quot;:\&quot;https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js\&quot;,\&quot;order\&quot;:1,\&quot;resource_type\&quot;:\&quot;js\&quot;,\&quot;par_content\&quot;:\&quot;\&quot;}],\&quot;tags\&quot;:[\&quot;news\&quot;,\&quot;news slider\&quot;,\&quot;blog\&quot;,\&quot;blog slider\&quot;,\&quot;card slider\&quot;],\&quot;id\&quot;:42364425,\&quot;user_id\&quot;:1260500,\&quot;html\&quot;:\&quot;&lt;div class=\\\&quot;wrapper\\\&quot;&gt;\\n\\n  &lt;div class=\\\&quot;background\\\&quot;&gt;\\n    &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132206/news-slider/background.jpg\\\&quot; alt=\\\&quot;\\\&quot;&gt;\\n  &lt;/div&gt;\\n  &lt;div class=\\\&quot;item-bg\\\&quot;&gt;&lt;/div&gt;\\n\\n  &lt;div class=\\\&quot;news-slider\\\&quot;&gt;\\n    &lt;div class=\\\&quot;news-slider__wrp swiper-wrapper\\\&quot;&gt;\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;24&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-2.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;25&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-3.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;26&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-4.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;27&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-2.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;28&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-5.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__item swiper-slide\\\&quot;&gt;\\n        &lt;a href=\\\&quot;#\\\&quot; class=\\\&quot;news__item\\\&quot;&gt;\\n          &lt;div class=\\\&quot;news-date\\\&quot;&gt;\\n            &lt;span class=\\\&quot;news-date__title\\\&quot;&gt;29&lt;/span&gt;\\n            &lt;span class=\\\&quot;news-date__txt\\\&quot;&gt;May&lt;/span&gt;\\n          &lt;/div&gt;\\n          &lt;div class=\\\&quot;news__title\\\&quot;&gt;\\n            Lorem Ipsum Dolor Sit Amed\\n          &lt;/div&gt;\\n\\n          &lt;p class=\\\&quot;news__txt\\\&quot;&gt;\\n            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s...\\n          &lt;/p&gt;\\n\\n          &lt;div class=\\\&quot;news__img\\\&quot;&gt;\\n            &lt;img src=\\\&quot;https://res.cloudinary.com/muhammederdem/image/upload/v1537132205/news-slider/item-4.jpg\\\&quot; alt=\\\&quot;news\\\&quot;&gt;\\n          &lt;/div&gt;\\n        &lt;/a&gt;\\n      &lt;/div&gt;\\n    &lt;/div&gt;\\n\\n    &lt;div class=\\\&quot;news-slider__ctr\\\&quot;&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__arrows\\\&quot;&gt;\\n        &lt;button class=\\\&quot;news-slider__arrow news-slider-prev\\\&quot;&gt;\\n          &lt;span class=\\\&quot;icon-font\\\&quot;&gt;\\n            &lt;svg class=\\\&quot;icon icon-arrow-left\\\&quot;&gt;&lt;use xlink:href=\\\&quot;#icon-arrow-left\\\&quot;&gt;&lt;/use&gt;&lt;/svg&gt;\\n          &lt;/span&gt;\\n        &lt;/button&gt;\\n        &lt;button class=\\\&quot;news-slider__arrow news-slider-next\\\&quot;&gt;\\n          &lt;span class=\\\&quot;icon-font\\\&quot;&gt;\\n            &lt;svg class=\\\&quot;icon icon-arrow-right\\\&quot;&gt;&lt;use xlink:href=\\\&quot;#icon-arrow-right\\\&quot;&gt;&lt;/use&gt;&lt;/svg&gt;\\n          &lt;/span&gt;\\n        &lt;/button&gt;\\n      &lt;/div&gt;\\n\\n      &lt;div class=\\\&quot;news-slider__pagination\\\&quot;&gt;&lt;/div&gt;\\n\\n    &lt;/div&gt;\\n\\n  &lt;/div&gt;\\n\\n&lt;/div&gt;\\n\\n&lt;svg hidden=\\\&quot;hidden\\\&quot;&gt;\\n  &lt;defs&gt;\\n    &lt;symbol id=\\\&quot;icon-arrow-left\\\&quot; viewBox=\\\&quot;0 0 32 32\\\&quot;&gt;\\n      &lt;title&gt;arrow-left&lt;/title&gt;\\n      &lt;path d=\\\&quot;M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z\\\&quot;&gt;&lt;/path&gt;\\n    &lt;/symbol&gt;\\n    &lt;symbol id=\\\&quot;icon-arrow-right\\\&quot; viewBox=\\\&quot;0 0 32 32\\\&quot;&gt;\\n      &lt;title&gt;arrow-right&lt;/title&gt;\\n      &lt;path d=\\\&quot;M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z\\\&quot;&gt;&lt;/path&gt;\\n    &lt;/symbol&gt;\\n  &lt;/defs&gt;\\n&lt;/svg&gt;\&quot;,\&quot;css\&quot;:\&quot;@import url(&#39;https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;subset=latin-ext&#39;);\\n\\nhtml {\\n  position: relative;\\n  overflow-x: hidden!important;\\n}\\n\\nbody {\\n  font-family: &#39;Quicksand&#39;, sans-serif;\\n}\\n\\na, a:hover {\\n  text-decoration: none;\\n}\\n\\n.icon {\\n  display: inline-block;\\n  width: 1em;\\n  height: 1em;\\n  stroke-width: 0;\\n  stroke: currentColor;\\n  fill: currentColor;\\n}\\n\\n.background {\\n  position: fixed;\\n  width: 100%;\\n  height: 100%;\\n  left: 0;\\n  top: 0;\\n\\n  &amp;:after {\\n    content: &#39;&#39;;\\n    position: absolute;\\n    top: 0;\\n    left: 0;\\n    width: 100%;\\n    height: 100%;\\n    background-image: linear-gradient(45deg, rgba(209, 0, 42, 0.6) 0%, #0E5DC4 100%);\\n    opacity: 0.9;\\n  }\\n\\n  img {\\n    width: 100%;\\n    height: 100%;\\n    object-fit: cover;\\n    pointer-events: none;\\n    user-select: none;\\n  }\\n\\n}\\n\\n.item-bg {\\n  width: 300px;\\n  height: 500px;\\n  position: absolute;\\n  top: 30px;\\n  background: #fff;\\n  border-radius: 10px;\\n  box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);\\n  opacity: 0;\\n  transition: all .3s;\\n  left: -30px;\\n  //left: 50%;\\n  //transform: translateX(-50%);\\n\\n  &amp;.active {\\n    left: 0;\\n    top: 0;\\n    opacity: 1;\\n  }\\n\\n}\\n\\n.news {\\n\\n  &amp;-slider {\\n    z-index: 2;\\n    max-width: 1300px;\\n    margin-left: auto;\\n    margin-right: auto;\\n    margin-top: 60px;\\n\\n    @media screen and (max-width: 1300px){\\n      max-width: 1000px;\\n    }\\n\\n    @media screen and (max-width: 576px) {\\n      margin-top: 45px;\\n    }\\n\\n    &amp;__wrp {\\n      display: flex;\\n      align-items: flex-start;\\n      position: relative;\\n      z-index: 2;\\n    }\\n\\n    &amp;__item {\\n      width: 400px;\\n      flex-shrink: 0;\\n      //padding: 15px;\\n\\n      @media screen and (max-width: 992px) {\\n        width: 340px;\\n      }\\n\\n      &amp;.swiper-slide {\\n        opacity: 0;\\n        pointer-events: none;\\n        transition: all .3s;\\n      }\\n\\n      &amp;.swiper-slide-active,\\n      &amp;.swiper-slide-prev,\\n      &amp;.swiper-slide-next {\\n        opacity: 1;\\n        pointer-events: auto;\\n      }\\n\\n\\n    }\\n\\n    &amp;__ctr {\\n      position: relative;\\n      z-index: 12;\\n    }\\n\\n    &amp;__arrow {\\n      background: #fff;\\n      border: none;\\n      display: inline-flex;\\n      width: 50px;\\n      height: 50px;\\n      justify-content: center;\\n      align-items: center;\\n      box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);\\n      border-radius: 50%;\\n      position: absolute;\\n      top: 50%;\\n      z-index: 12;\\n      cursor: pointer;\\n      outline: none!important;\\n\\n      &amp;:focus {\\n        outline: none!important;\\n      }\\n\\n      .icon-font {\\n        display: inline-flex;\\n      }\\n\\n      &amp;.news-slider-prev {\\n        left: 15px;\\n        transform: translateY(-50%);\\n      }\\n\\n      &amp;.news-slider-next {\\n        right: 15px;\\n        transform: translateY(-50%);\\n      }\\n\\n    }\\n\\n    &amp;__pagination {\\n      text-align: center;\\n      margin-top: 50px;\\n\\n      // @media screen and (max-width: 576px) {\\n      //   margin-top: 50px;\\n      // }\\n\\n      .swiper-pagination-bullet {\\n        width: 13px;\\n        height: 10px;\\n        display: inline-block;\\n        background: #fff;\\n        opacity: .2;\\n        margin: 0 5px;\\n        border-radius: 20px;\\n        transition: opacity .5s, background-color .5s, width .5s;\\n        transition-delay: .5s, .5s, 0s;\\n      }\\n\\n      .swiper-pagination-bullet-active {\\n        opacity: 1;\\n        background: #ffffff;\\n        width: 100px;\\n        transition-delay: 0s;\\n\\n        @media screen and (max-width: 576px) {\\n          width: 70px;\\n        }\\n\\n      }\\n    }\\n\\n  }\\n\\n  &amp;__item {\\n    padding: 40px;\\n    color: #fff;\\n    border-radius: 10px;\\n    display: block;\\n    transition: all .3s;\\n\\n    @media screen and (min-width: 800px) {\\n      &amp;:hover {\\n        color: #222222;\\n        transition-delay: .1s;\\n        //background: #fff;\\n        //box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);\\n\\n        .news-date,.news__title,.news__txt {\\n          opacity: 1;\\n          transition-delay: .1s;\\n        }\\n\\n        .news__img {\\n          box-shadow: none;\\n        }\\n\\n      }\\n    }\\n\\n\\n\\n    &amp;.active {\\n      color: #222222;\\n\\n      .news-date,.news__title,.news__txt {\\n        opacity: 1;\\n      }\\n\\n      .news__img {\\n        box-shadow: none;\\n      }\\n\\n    }\\n\\n    @media screen and (max-width: 992px) {\\n      padding: 30px;\\n    }\\n\\n    @media screen and (max-width: 576px) {\\n      padding: 20px;\\n    }\\n\\n  }\\n\\n  &amp;-date {\\n    padding-bottom: 20px;\\n    margin-bottom: 20px;\\n    border-bottom: 2px solid;\\n    display: inline-block;\\n    opacity: .7;\\n    transition: opacity .3s;\\n\\n    @media screen and (max-width: 576px) {\\n      margin-bottom: 10px;\\n      display: inline-flex;\\n      align-items: center;\\n      padding-bottom: 0;\\n    }\\n\\n    &amp;__title {\\n      display: block;\\n      font-size: 32px;\\n      margin-bottom: 10px;\\n      font-weight: 500;\\n\\n      @media screen and (max-width: 576px) {\\n        margin-right: 10px;\\n      }\\n\\n    }\\n\\n    &amp;__txt {\\n      font-size: 16px;\\n    }\\n\\n  }\\n\\n  &amp;__title {\\n    font-size: 25px;\\n    font-weight: 500;\\n    opacity: .7;\\n    margin-top: 10px;\\n    margin-bottom: 15px;\\n    transition: opacity .3s;\\n\\n    @media screen and (max-width: 576px) {\\n      font-size: 22px;\\n      margin-bottom: 10px;\\n    }\\n\\n  }\\n\\n  &amp;__txt {\\n    margin: 10px 0;\\n    line-height: 1.6em;\\n    font-size: 15px;\\n    opacity: .7;\\n    transition: opacity .3s;\\n  }\\n\\n  &amp;__img {\\n    border-radius: 10px;\\n    box-shadow: 0 6px 26px 6px rgba(0,0,0,0.25);\\n    height: 200px;\\n    margin-top: 30px;\\n    width: 100%;\\n    transition: all .3s;\\n    transform-origin: 0% 0%;\\n\\n    @media screen and (max-width: 576px) {\\n      height: 180px;\\n      margin-top: 20px;\\n    }\\n\\n    img {\\n      max-width: 100%;\\n      border-radius: 10px;\\n      height: 100%;\\n      width: 100%;\\n    }\\n\\n  }\\n\\n\\n}\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\&quot;,\&quot;parent\&quot;:28126301,\&quot;js\&quot;:\&quot;var bg = document.querySelector(&#39;.item-bg&#39;);\\nvar items = document.querySelectorAll(&#39;.news__item&#39;);\\nvar item = document.querySelector(&#39;.news__item&#39;);\\n\\nfunction cLog(content) {\\n    console.log(content)\\n}\\n\\nif($(window).width() &gt; 800) {\\n    $(document).on(\\\&quot;mouseover\\\&quot;, \\\&quot;.news__item\\\&quot;, function (_event, _element) {\\n\\n        var newsItem = document.querySelectorAll(&#39;.news__item&#39;);\\n        newsItem.forEach(function (element, index) {\\n            element.addEventListener(&#39;mouseover&#39;, function () {\\n                var x = this.getBoundingClientRect().left;\\n                var y = this.getBoundingClientRect().top;\\n                var width = this.getBoundingClientRect().width;\\n                var height = this.getBoundingClientRect().height;\\n\\n                $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);\\n                $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n                // $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n\\n\\n                bg.style.width = width + &#39;px&#39;;\\n                bg.style.height = height + &#39;px&#39;;\\n                bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;\\n            });\\n\\n            element.addEventListener(&#39;mouseleave&#39;, function () {\\n                $(&#39;.item-bg&#39;).removeClass(&#39;active&#39;);\\n                $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n            });\\n\\n        });\\n\\n    });\\n}\\n\\n\\nvar swiper = new Swiper(&#39;.news-slider&#39;, {\\n    effect: &#39;coverflow&#39;,\\n    grabCursor: true,\\n    loop: true,\\n    centeredSlides: true,\\n    keyboard: true,\\n    spaceBetween: 0,\\n    slidesPerView: &#39;auto&#39;,\\n    speed: 300,\\n    coverflowEffect: {\\n        rotate: 0,\\n        stretch: 0,\\n        depth: 0,\\n        modifier: 3,\\n        slideShadows: false\\n    },\\n    breakpoints: {\\n        480: {\\n            spaceBetween: 0,\\n            centeredSlides: true\\n        }\\n    },\\n    simulateTouch: true,\\n    navigation: {\\n        nextEl: &#39;.news-slider-next&#39;,\\n        prevEl: &#39;.news-slider-prev&#39;\\n    },\\n    pagination: {\\n        el: &#39;.news-slider__pagination&#39;,\\n        clickable: true\\n    },\\n    on: {\\n        init: function () {\\n            var activeItem = document.querySelector(&#39;.swiper-slide-active&#39;);\\n\\n            var sliderItem = activeItem.querySelector(&#39;.news__item&#39;);\\n\\n            $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);\\n\\n            var x = sliderItem.getBoundingClientRect().left;\\n            var y = sliderItem.getBoundingClientRect().top;\\n            var width = sliderItem.getBoundingClientRect().width;\\n            var height = sliderItem.getBoundingClientRect().height;\\n\\n\\n            $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);\\n\\n            bg.style.width = width + &#39;px&#39;;\\n            bg.style.height = height + &#39;px&#39;;\\n            bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;\\n        }\\n    }\\n});\\n\\nswiper.on(&#39;touchEnd&#39;, function () {\\n    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n    $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);\\n});\\n\\nswiper.on(&#39;slideChange&#39;, function () {\\n    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n});\\n\\nswiper.on(&#39;slideChangeTransitionEnd&#39;, function () {\\n    $(&#39;.news__item&#39;).removeClass(&#39;active&#39;);\\n    var activeItem = document.querySelector(&#39;.swiper-slide-active&#39;);\\n\\n    var sliderItem = activeItem.querySelector(&#39;.news__item&#39;);\\n\\n    $(&#39;.swiper-slide-active .news__item&#39;).addClass(&#39;active&#39;);\\n\\n    var x = sliderItem.getBoundingClientRect().left;\\n    var y = sliderItem.getBoundingClientRect().top;\\n    var width = sliderItem.getBoundingClientRect().width;\\n    var height = sliderItem.getBoundingClientRect().height;\\n\\n\\n    $(&#39;.item-bg&#39;).addClass(&#39;active&#39;);\\n\\n    bg.style.width = width + &#39;px&#39;;\\n    bg.style.height = height + &#39;px&#39;;\\n    bg.style.transform = &#39;translateX(&#39; + x + &#39;px ) translateY(&#39; + y + &#39;px)&#39;;\\n});\\n\\n\\n\&quot;,\&quot;html_pre_processor\&quot;:\&quot;none\&quot;,\&quot;css_pre_processor\&quot;:\&quot;scss\&quot;,\&quot;js_pre_processor\&quot;:\&quot;none\&quot;,\&quot;html_classes\&quot;:\&quot;\&quot;,\&quot;css_starter\&quot;:\&quot;normalize\&quot;,\&quot;css_prefix_free\&quot;:null,\&quot;css_external\&quot;:null,\&quot;js_library\&quot;:null,\&quot;js_modernizr\&quot;:null,\&quot;js_external\&quot;:null,\&quot;created_at\&quot;:\&quot;2020-01-17T01:07:13.000Z\&quot;,\&quot;updated_at\&quot;:\&quot;2020-01-17T01:07:13.000Z\&quot;,\&quot;session_hash\&quot;:null,\&quot;title\&quot;:\&quot;Responsive News Card Slider\&quot;,\&quot;description\&quot;:\&quot;I builth another Card Slider for news and blog pages etc with swiper.js. I made sweet animations when mouse hover and slide changes. Also all of them responsive.\&quot;,\&quot;slug_hash\&quot;:\&quot;bGNxZVo\&quot;,\&quot;head\&quot;:\&quot;&lt;meta name=\\\&quot;viewport\\\&quot;\\n      content=\\\&quot;width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\\\&quot;&gt;\&quot;,\&quot;private\&quot;:false,\&quot;has_animation\&quot;:true,\&quot;css_pre_processor_lib\&quot;:\&quot;\&quot;,\&quot;checksum\&quot;:0,\&quot;screenshot_uuid\&quot;:\&quot;031d9fdb-fb2d-4f38-8767-e45fe92390f6\&quot;,\&quot;team_id\&quot;:0,\&quot;css_prefix\&quot;:\&quot;neither\&quot;,\&quot;template\&quot;:false,\&quot;js_module\&quot;:null}&quot;,&quot;__profiled&quot;:{&quot;id&quot;:1260500,&quot;hashid&quot;:&quot;zGvvEg&quot;,&quot;name&quot;:&quot;rubythonode&quot;,&quot;username&quot;:&quot;rubythonode&quot;,&quot;type&quot;:&quot;user&quot;,&quot;is_team&quot;:false,&quot;base_url&quot;:&quot;/rubythonode&quot;},&quot;__export_service_url&quot;:&quot;https://codepen.io/api/export&quot;,&quot;__editor_config&quot;:{&quot;id&quot;:&quot;classic&quot;,&quot;editors&quot;:[{&quot;id&quot;:&quot;html&quot;,&quot;type&quot;:&quot;html&quot;,&quot;name&quot;:&quot;HTML&quot;,&quot;settings&quot;:[{&quot;id&quot;:&quot;processor&quot;,&quot;name&quot;:&quot;HTML Preprocessor&quot;,&quot;type&quot;:&quot;select&quot;,&quot;visible&quot;:true,&quot;values&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;,&quot;value&quot;:&quot;none&quot;,&quot;default&quot;:true},{&quot;id&quot;:&quot;haml&quot;,&quot;name&quot;:&quot;Haml&quot;,&quot;value&quot;:&quot;haml&quot;},{&quot;id&quot;:&quot;markdown&quot;,&quot;name&quot;:&quot;Markdown&quot;,&quot;value&quot;:&quot;markdown&quot;},{&quot;id&quot;:&quot;slim&quot;,&quot;name&quot;:&quot;Slim&quot;,&quot;value&quot;:&quot;slim&quot;},{&quot;id&quot;:&quot;pug&quot;,&quot;name&quot;:&quot;Pug&quot;,&quot;value&quot;:&quot;pug&quot;}]},{&quot;id&quot;:&quot;html_classes&quot;,&quot;name&quot;:&quot;Add Class(es) to &lt;html&gt;&quot;,&quot;type&quot;:&quot;input&quot;,&quot;placeholder&quot;:&quot;e.g. single post post-1234&quot;,&quot;visible&quot;:true},{&quot;id&quot;:&quot;head&quot;,&quot;name&quot;:&quot;Stuff for &lt;head&gt;&quot;,&quot;type&quot;:&quot;textarea&quot;,&quot;placeholder&quot;:&quot;e.g. &lt;meta&gt;, &lt;link&gt;, &lt;script&gt;&quot;,&quot;visible&quot;:true}],&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_html&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format HTML&quot;,&quot;disabled_processors&quot;:[&quot;haml&quot;,&quot;markdown&quot;,&quot;slim&quot;,&quot;pug&quot;]},{&quot;id&quot;:&quot;view_compiled_html&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled HTML&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;]},{&quot;id&quot;:&quot;analyze_html&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze HTML&quot;},{&quot;id&quot;:&quot;maximize_html_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize HTML Editor&quot;},{&quot;id&quot;:&quot;minimize_html_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize HTML Editor&quot;},{&quot;id&quot;:&quot;fold_all_html&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;},{&quot;id&quot;:&quot;unfold_all_html&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;haml&quot;,&quot;name&quot;:&quot;Haml&quot;},{&quot;id&quot;:&quot;markdown&quot;,&quot;name&quot;:&quot;Markdown&quot;},{&quot;id&quot;:&quot;slim&quot;,&quot;name&quot;:&quot;Slim&quot;},{&quot;id&quot;:&quot;pug&quot;,&quot;name&quot;:&quot;Pug&quot;}]},{&quot;id&quot;:&quot;css&quot;,&quot;type&quot;:&quot;css&quot;,&quot;name&quot;:&quot;CSS&quot;,&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_css&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format CSS&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;,&quot;stylus&quot;]},{&quot;id&quot;:&quot;view_compiled_css&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled CSS&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;]},{&quot;id&quot;:&quot;analyze_css&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze CSS&quot;},{&quot;id&quot;:&quot;maximize_css_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize CSS Editor&quot;},{&quot;id&quot;:&quot;minimize_css_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize CSS Editor&quot;},{&quot;id&quot;:&quot;fold_all_css&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;]},{&quot;id&quot;:&quot;unfold_all_css&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;,&quot;disabled_processors&quot;:[&quot;sass&quot;]}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;less&quot;,&quot;name&quot;:&quot;Less&quot;},{&quot;id&quot;:&quot;scss&quot;,&quot;name&quot;:&quot;SCSS&quot;},{&quot;id&quot;:&quot;sass&quot;,&quot;name&quot;:&quot;Sass&quot;},{&quot;id&quot;:&quot;stylus&quot;,&quot;name&quot;:&quot;Stylus&quot;},{&quot;id&quot;:&quot;postcss&quot;,&quot;name&quot;:&quot;PostCSS&quot;}],&quot;parSuffixes&quot;:[&quot;less&quot;,&quot;scss&quot;,&quot;sass&quot;,&quot;styl&quot;]},{&quot;id&quot;:&quot;js&quot;,&quot;type&quot;:&quot;js&quot;,&quot;name&quot;:&quot;JS&quot;,&quot;actions&quot;:[{&quot;id&quot;:&quot;tidy_js&quot;,&quot;type&quot;:&quot;tidy_code&quot;,&quot;name&quot;:&quot;Format JavaScript&quot;,&quot;disabled_processors&quot;:[&quot;coffeescript, livescript&quot;]},{&quot;id&quot;:&quot;view_compiled_js&quot;,&quot;type&quot;:&quot;view_compiled&quot;,&quot;name&quot;:&quot;View Compiled JavaScript&quot;,&quot;disabled_processors&quot;:[&quot;none&quot;]},{&quot;id&quot;:&quot;analyze_js&quot;,&quot;type&quot;:&quot;analyze&quot;,&quot;name&quot;:&quot;Analyze JavaScript&quot;},{&quot;id&quot;:&quot;maximize_js_editor&quot;,&quot;type&quot;:&quot;maximize&quot;,&quot;name&quot;:&quot;Maximize JavaScript Editor&quot;},{&quot;id&quot;:&quot;minimize_js_editor&quot;,&quot;type&quot;:&quot;minimize&quot;,&quot;name&quot;:&quot;Minimize JavaScript Editor&quot;},{&quot;id&quot;:&quot;fold_all_js&quot;,&quot;type&quot;:&quot;fold_all&quot;,&quot;name&quot;:&quot;Fold All&quot;},{&quot;id&quot;:&quot;unfold_all_js&quot;,&quot;type&quot;:&quot;unfold_all&quot;,&quot;name&quot;:&quot;Unfold All&quot;}],&quot;processors&quot;:[{&quot;id&quot;:&quot;none&quot;,&quot;name&quot;:&quot;None&quot;},{&quot;id&quot;:&quot;babel&quot;,&quot;name&quot;:&quot;Babel&quot;},{&quot;id&quot;:&quot;typescript&quot;,&quot;name&quot;:&quot;TypeScript&quot;},{&quot;id&quot;:&quot;coffeescript&quot;,&quot;name&quot;:&quot;CoffeeScript&quot;},{&quot;id&quot;:&quot;livescript&quot;,&quot;name&quot;:&quot;LiveScript&quot;}]}],&quot;formatters&quot;:[{&quot;id&quot;:&quot;classic&quot;,&quot;name&quot;:&quot;Classic&quot;,&quot;runOn&quot;:[{&quot;eventType&quot;:&quot;demand&quot;}],&quot;url&quot;:&quot;https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/format&quot;}],&quot;linters&quot;:[{&quot;id&quot;:&quot;classic&quot;,&quot;name&quot;:&quot;Classic&quot;,&quot;runOn&quot;:[{&quot;eventType&quot;:&quot;demand&quot;}],&quot;url&quot;:&quot;https://fi593g2v2a.execute-api.us-west-2.amazonaws.com/production/lint&quot;}],&quot;preview&quot;:{&quot;intervalMaxWaitMS&quot;:3500,&quot;intervalMS&quot;:1200},&quot;settings&quot;:[{&quot;id&quot;:&quot;behavior&quot;,&quot;name&quot;:&quot;Behavior&quot;,&quot;type&quot;:&quot;setting&quot;},{&quot;id&quot;:&quot;editor&quot;,&quot;name&quot;:&quot;Editor&quot;,&quot;type&quot;:&quot;setting&quot;}]},&quot;__packages_domain&quot;:&quot;https://bundles-development.cdpn.io&quot;,&quot;__packages_enabled&quot;:false,&quot;__embed_modal_script&quot;:&quot;https://static.codepen.io/assets/embed/modal/embed_modal-a2a4177b2efcfa6edbb42ce4ad81f7570b801d454f20828b9d24a6068ee3756c.js&quot;,&quot;__run_mode_script&quot;:&quot;https://static.codepen.io/assets/libs/codemirror/addon/runmode/runmode-71408fc65dcc694b1f598f08398b08c8f4494f90b73c64cd4ecf01eaaf3a65d7.js&quot;,&quot;__runtime_js&quot;:&quot;https://static.codepen.io/assets/common/runtime-78f7737f2b92b1b279253c92344b93db2bdf0e3193c90dae7d462d102b33c722.js&quot;,&quot;__standalone_run_mode_script&quot;:&quot;https://static.codepen.io/assets/libs/codemirror/addon/runmode/runmode-standalone-e82db9c70d13c4fd77beef3e400ebba56987206b1e5bb9e39f28c2044991b089.js&quot;,&quot;__syntax_highlighting_script&quot;:&quot;https://static.codepen.io/assets/comments/syntax_highlight_comments.js&quot;,&quot;__eijs&quot;:&quot;https://static.codepen.io/assets/embed/ei.js&quot;,&quot;__favicon_mask_icon&quot;:&quot;https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg&quot;,&quot;__favicon_shortcut_icon&quot;:&quot;https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico&quot;,&quot;__path_to_iframe_console_runner&quot;:&quot;https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js&quot;,&quot;__path_to_iframe_refresh_css&quot;:&quot;https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-8a264da60d1f38eaa58c8243fe0ad6a782e98673c75eb542ccf03bc0efbfe2de.js&quot;,&quot;__path_to_iframe_runtime_errors&quot;:&quot;https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js&quot;,&quot;__path_to_processor_worker&quot;:&quot;https://static.codepen.io/assets/packs/router.js&quot;,&quot;__path_to_stop_execution_on_timeout&quot;:&quot;https://static.codepen.io/assets/common/stopExecutionOnTimeout-9bf952ccbbd13c245169a0a1190323a27ce073a3d304b8c0fdf421ab22794a58.js&quot;,&quot;__path_to_webpack_runtime&quot;:&quot;https://static.codepen.io/assets/common/runtime-78f7737f2b92b1b279253c92344b93db2bdf0e3193c90dae7d462d102b33c722.js&quot;,&quot;__pen_normalize_css_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css&quot;,&quot;__pen_prefix_free_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js&quot;,&quot;__pen_reset_css_url&quot;:&quot;https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css&quot;,&quot;__cdn_css_url&quot;:&quot;https://static.codepen.io/assets/editor/other/cdn/cdncss_data-b2a6b09b819f5d5cad330bde53c28db816c78598cbec7c82693642c0f8198d81.json&quot;,&quot;__cdn_js_url&quot;:&quot;https://static.codepen.io/assets/editor/other/cdn/cdnjs_data-1ba370c14f6d31ca1535a87b2e3e151cf4b60d08485aba18ef86b137051f0175.json&quot;,&quot;__theme_url_twilight&quot;:&quot;https://static.codepen.io/assets/editor/themes/twilight-48405ca83e8c8b4ac067604a220b1b084c7bd4d7b403a53bb88740bd13532661.css&quot;,&quot;__theme_url_solarized_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/solarized-dark-5fe7439b4d53a212b365f27528d40a7876b2b6852a2947f836eae047e82399be.css&quot;,&quot;__theme_url_tomorrow_night&quot;:&quot;https://static.codepen.io/assets/editor/themes/tomorrow-night-e82d9249453131aaae87c236b5507da086266950a06e9350fb73510df0452f25.css&quot;,&quot;__theme_url_oceanic_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/oceanic-dark-cfad494767cbd2f7138753458bcf356953dab4da61123c975f38dfebf22de51e.css&quot;,&quot;__theme_url_panda&quot;:&quot;https://static.codepen.io/assets/editor/themes/panda-021f3e1c7cb8cfbae4daa6bdbf7d316c7d973ce5008709008b9e47ba2c03195e.css&quot;,&quot;__theme_url_duotone_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/duotone-dark-da0858229cacf9704ac249ac70976201b0af94b267b6bef78972af443f2ccf01.css&quot;,&quot;__theme_url_highcontrast_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/highcontrast-dark-7352ce3a878a1a6b34432d2baaf764927ddc7e64f352e9beb432d67d9e9de6df.css&quot;,&quot;__theme_url_classic&quot;:&quot;https://static.codepen.io/assets/editor/themes/classic-39e690d36249816a98f8c8cca424f24cdaeb67ee4865c3c9f13b243e44341271.css&quot;,&quot;__theme_url_solarized_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/solarized-light-a6813646d4c6aae5c04fabf05261eba3e219336de0129c88eef1d3bc9faa8f5e.css&quot;,&quot;__theme_url_xq_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/xq-light-f23ec5a439042add9a2cc90d715bf610cceb2fbd68ff5889b16aa34764fa7264.css&quot;,&quot;__theme_url_oceanic_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/oceanic-light-369cd6ac8c1764b1766d286f1cfb5dd7fc904fa34183744b47564863295fd198.css&quot;,&quot;__theme_url_mdn_like&quot;:&quot;https://static.codepen.io/assets/editor/themes/mdn-like-a86660f5e7e6ed3ec5288e10248ab494dccfa1ba7c1f02a7ff00ab8d23430c21.css&quot;,&quot;__theme_url_duotone_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/duotone-light-d1a63cff87c2780e7f9e0db4c47c931a97779b5567ed46a8a134e8a077868217.css&quot;,&quot;__theme_url_highcontrast_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/highcontrast-light-402556afd162dde6578d3398b13b60e3703329adfeccca558d69a7bb48292ace.css&quot;,&quot;__theme_url_scoped_twilight&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/twilight-97fed6efd51de4b580593b23eabbc20a252f88795424dfcbc70f9317be96c165.css&quot;,&quot;__theme_url_scoped_solarized_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/solarized-dark-57e58cbdb0bd0150fdbb20d369f9d822786883c48123ad001155e4201ae7fe24.css&quot;,&quot;__theme_url_scoped_tomorrow_night&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/tomorrow-night-1c19ca5fed3d088a3a90af3a7f681e6fab07f07d3ed8fc5365ca35ca83d76a06.css&quot;,&quot;__theme_url_scoped_oceanic_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/oceanic-dark-4cea7ced256f6178137fcf6505339bd508a6a841441359824baa1c397f555794.css&quot;,&quot;__theme_url_scoped_panda&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/panda-3977c43032f37d25fe96fb36031628f91b390eeefb738a570c00b9ff70021105.css&quot;,&quot;__theme_url_scoped_duotone_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/duotone-dark-52e4ff03e5548688aec92901dadf77ac73c1813627b018b650ad5c6101d8229e.css&quot;,&quot;__theme_url_scoped_highcontrast_dark&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/highcontrast-dark-a07e68e11e0b53dcd723be7dc1c189fe9da1e81d7cf94b5936a60de2e968c4fd.css&quot;,&quot;__theme_url_scoped_classic&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/classic-4530281752f53cbeb6550b174cc97626d6cbb68900cdbc9c858a6a8c5c5a1bfb.css&quot;,&quot;__theme_url_scoped_solarized_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/solarized-light-75c07f006303ab57d16262859995096fb0b2069a037c16e9ef5be0c99c11f795.css&quot;,&quot;__theme_url_scoped_xq_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/xq-light-ff37c4b15eceed49ef88d1633d528f3912d8ef8e577fd72d45a690b5c71dc5bb.css&quot;,&quot;__theme_url_scoped_oceanic_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/oceanic-light-5627b255eef2c53590bdc8efd905c42a15178b8aebbc4cebd1c4b0011d682659.css&quot;,&quot;__theme_url_scoped_mdn_like&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/mdn-like-260e85e66ece10b0bff26f21ed6fea60be6d8f5f5866837058d4df52f4b11825.css&quot;,&quot;__theme_url_scoped_duotone_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/duotone-light-70284bc016e8d840e1364556b4b29cc9dcb82c739e08c316b5974432c063b393.css&quot;,&quot;__theme_url_scoped_highcontrast_light&quot;:&quot;https://static.codepen.io/assets/editor/themes/scoped/highcontrast-light-285080978997799302e23ab266aaad23836ee963f1fe5a2e62ea4f7e7be26537.css&quot;}">
<script src="https://static.codepen.io/assets/common/browser_support-1963aa6406ae47d3176af996336c5d219acd8913c5af309e72f18933e95201cc.js"></script>
<script src="https://static.codepen.io/assets/common/everypage-f039ed068b85b40d1458db86c1f1212c4ac54dc1dc69c8ec3204a990f693ba15.js"></script>
<script src="https://static.codepen.io/assets/packs/js/vendor-dfb58d8f7aeeed20ac13.chunk.js"></script>
<script src="https://static.codepen.io/assets/packs/js/3-4674114c9439d3d851c3.chunk.js"></script>
<script src="https://static.codepen.io/assets/packs/js/everypage-2e7e78b9d083186e7811.js"></script>
<script src="https://static.codepen.io/assets/packs/js/processorRouter-daaf0edad3c3d2d95bf5.js"></script>
<script src="https://static.codepen.io/assets/editor/global/commonLibs-7484fe04f7187bb8ecb83c4962db75fdf5d900e6e629bfab2f8df7629e357051.js"></script>
<script src="https://static.codepen.io/assets/editor/global/codemirror-db902a526c40d5375f0cc59415690de52260df5349ed6b4602db30b3e11fc4d9.js"></script>
<script src="https://static.codepen.io/assets/libs/emmet-codemirror-plugin-5d6164559517c9065f31696d2b6c916ff238693ed8c4260c1023e65c0f3fd658.js"></script>
<script src="https://static.codepen.io/assets/editor/pen/index-d0e4506622361aa2d993824651abce06544d6fedac92e4448c1f144bc15fdf91.js"></script>
</body>
</html>
