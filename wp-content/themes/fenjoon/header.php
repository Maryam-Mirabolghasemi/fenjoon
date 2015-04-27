<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div id="wrapper">
	
<div style="top: 0%; display: none;" id="request_form">
<div class="close-button"><span class="fa"></span></div>
<div class="form-wrap">
<div style="top: 0px; opacity: 1;" class="title">Tell Us About <span>Your</span> Project</div>
<div dir="ltr" lang="en-US">
<form novalidate="" action="//www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="rq-form" id="rq-form">
<input id="oid" class="oid" name="oid" value="" type="hidden">
<input id="Location__c" class="Location__c" name="Location__c" value="" type="hidden">
<input name="retURL" value="http://bigdropinc.com/thank-you/" type="hidden">
<input name="lead_source" value="Request a Quote" type="hidden">
<input name="Referral_URL__c" value="http://localhost/fenjoon/" type="hidden">
<div class="input-wrap">
<span class="wpcf7-form-control-wrap name">
<input data-parsley-id="5473" id="name" maxlength="80" name="last_name" size="40" placeholder="Your Name" required="true" type="text"><ul id="parsley-id-5473" class="parsley-errors-list"></ul>
</span>
</div>
<div class="input-wrap odd">
<span class="wpcf7-form-control-wrap phone">
<input data-parsley-id="5827" id="phone" maxlength="40" name="phone" size="40" placeholder="Phone Number" required="" type="text"><ul id="parsley-id-5827" class="parsley-errors-list"></ul>
</span>
</div>
<div class="input-wrap">
<span class="wpcf7-form-control-wrap email">
<input data-parsley-id="3540" id="email" name="email" value="" size="40" placeholder="Email Address" required="" data-parsley-type="email" type="text"><ul id="parsley-id-3540" class="parsley-errors-list"></ul>
</span>
</div>
<div class="input-wrap odd">
<span class="wpcf7-form-control-wrap country">
<input data-parsley-id="5616" id="country" maxlength="40" name="company" size="20" placeholder="Company" required="" type="text"><ul id="parsley-id-5616" class="parsley-errors-list"></ul>
</span>
</div>
<div class="textarea-wrap">
<span class="wpcf7-form-control-wrap comment">
<textarea data-parsley-id="0889" name="description" cols="40" rows="10" id="comment" placeholder="Project Brief" required=""></textarea><ul id="parsley-id-0889" class="parsley-errors-list"></ul>
</span>
</div>
<div class="submit-wrap">
<input name="submit" id="quote-submit" onclick="myFunction()" type="submit">
</div>
</form>
</div>
</div>
</div>
	
<header class="" id="header">
<div class="row header">
<nav role="navigation" class="main-navigation" id="nav">
<ul class="menu" id="menu-main">
<li class="menu-item menu-item-type-post_type"><?php wp_loginout(); ?></li>
<li class="menu-item menu-item-type-post_type"><a href="">ثبت سفارش</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-368" id="menu-item-368"><a href="">درباره ما</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-417" id="menu-item-417"><a href="">اعضای تیم</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17" id="menu-item-17"><a href="">ارتباط با ما</a></li>
</ul> <span class="fa" id="m-nav-close"></span>
</nav> 
<a onclick="fast_request()" data-text-detached="Drag down &gt;" data-text="Request a Quote" class="forkit" style="transform: translate(0px, 0px) rotate(0deg);"><span class="string" style="transform: translate(44px, 0px) rotate(14.0362deg); width: 0.478148px;"></span><span class="tag" style="transform: translate(44px, -15px) rotate(45deg);">درخواست سریع سفارش</span></a>
<script>function fast_request(){document.getElementById("request_form").style.display=block;}</script>
<style type="text/css">#nav{margin-right:100px}</style>
<a href="#" id="m-nav">Menu <span class="fa"></span></a>
<div class="clear"></div>
</div>
</header>
</div>
</body>