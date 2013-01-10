<?php
/**
 * Copyright (c) Enalean 2011. All rights reserved
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

// For backward compatibility: if the introduction speech was 
// customized in etc/site-content homepage.tab, we display him
// instead of following text.
if ($Language->hasText('homepage', 'introduction')) {
    echo stripcslashes($Language->getText('homepage', 'introduction', array($GLOBALS['sys_org_name'], $GLOBALS['sys_name'])));
    return;
}

$main_content_span = 'span12';
$login_input_span  = 'span3';
if ($display_homepage_news) {
    $main_content_span = 'span8';
    $login_input_span  = 'span2';
}

?>

<style>
#homepage .hero-unit {
    background: white url(subtle_grunge.png);
}
.contenttable {
    width: auto;
}
.main_body_row {
    width: 1260px;
    margin: 0 auto;
}
.homepage_speech {
    width: auto;
}
.homepage-feature {
    margin-bottom: 6em;
}
.btn {
  display: inline-block;
  *display: inline;
  padding: 4px 12px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #bbbbbb;
  *border: 0;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-bottom-color: #a2a2a2;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn:hover,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}

.btn:active,
.btn.active {
  background-color: #cccccc \9;
}

.btn:first-child {
  *margin-left: 0;
}

.btn:hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}

.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

.btn.active,
.btn:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn.disabled,
.btn[disabled] {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

.btn-large {
  padding: 11px 19px;
  font-size: 17.5px;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}

.btn-large [class^="icon-"],
.btn-large [class*=" icon-"] {
  margin-top: 4px;
}

.btn-small {
  padding: 2px 10px;
  font-size: 11.9px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

.btn-small [class^="icon-"],
.btn-small [class*=" icon-"] {
  margin-top: 0;
}

.btn-mini [class^="icon-"],
.btn-mini [class*=" icon-"] {
  margin-top: -1px;
}

.btn-mini {
  padding: 0 6px;
  font-size: 10.5px;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

.btn-block {
  display: block;
  width: 100%;
  padding-right: 0;
  padding-left: 0;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.btn-block + .btn-block {
  margin-top: 5px;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-inverse.active {
  color: rgba(255, 255, 255, 0.75);
}

.btn {
  border-color: #c5c5c5;
  border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25);
}

.btn-primary {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #006dcc;
  *background-color: #0044cc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}

.btn-primary:active,
.btn-primary.active {
  background-color: #003399 \9;
}

.btn-warning {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  *background-color: #f89406;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
  color: #ffffff;
  background-color: #f89406;
  *background-color: #df8505;
}

.btn-warning:active,
.btn-warning.active {
  background-color: #c67605 \9;
}

.btn-danger {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #da4f49;
  *background-color: #bd362f;
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled] {
  color: #ffffff;
  background-color: #bd362f;
  *background-color: #a9302a;
}

.btn-danger:active,
.btn-danger.active {
  background-color: #942a25 \9;
}

.btn-success {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  *background-color: #51a351;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-success:hover,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled] {
  color: #ffffff;
  background-color: #51a351;
  *background-color: #499249;
}

.btn-success:active,
.btn-success.active {
  background-color: #408140 \9;
}

.btn-info {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  *background-color: #2f96b4;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-info:hover,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled] {
  color: #ffffff;
  background-color: #2f96b4;
  *background-color: #2a85a0;
}

.btn-info:active,
.btn-info.active {
  background-color: #24748c \9;
}

.btn-inverse {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #363636;
  *background-color: #222222;
  background-image: -moz-linear-gradient(top, #444444, #222222);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#444444), to(#222222));
  background-image: -webkit-linear-gradient(top, #444444, #222222);
  background-image: -o-linear-gradient(top, #444444, #222222);
  background-image: linear-gradient(to bottom, #444444, #222222);
  background-repeat: repeat-x;
  border-color: #222222 #222222 #000000;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-inverse:hover,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled] {
  color: #ffffff;
  background-color: #222222;
  *background-color: #151515;
}

.btn-inverse:active,
.btn-inverse.active {
  background-color: #080808 \9;
}

button.btn,
input[type="submit"].btn {
  *padding-top: 3px;
  *padding-bottom: 3px;
}

button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
  padding: 0;
  border: 0;
}

button.btn.btn-large,
input[type="submit"].btn.btn-large {
  *padding-top: 7px;
  *padding-bottom: 7px;
}

button.btn.btn-small,
input[type="submit"].btn.btn-small {
  *padding-top: 3px;
  *padding-bottom: 3px;
}

button.btn.btn-mini,
input[type="submit"].btn.btn-mini {
  *padding-top: 1px;
  *padding-bottom: 1px;
}

.btn-link,
.btn-link:active,
.btn-link[disabled] {
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

.btn-link {
  color: #0088cc;
  cursor: pointer;
  border-color: transparent;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

.btn-link:hover {
  color: #005580;
  text-decoration: underline;
  background-color: transparent;
}

.btn-link[disabled]:hover {
  color: #333333;
  text-decoration: none;
}

.btn-group {
  position: relative;
  display: inline-block;
  *display: inline;
  *margin-left: .3em;
  font-size: 0;
  white-space: nowrap;
  vertical-align: middle;
  *zoom: 1;
}

.btn-group:first-child {
  *margin-left: 0;
}

.btn-group + .btn-group {
  margin-left: 5px;
}

.btn-toolbar {
  margin-top: 10px;
  margin-bottom: 10px;
  font-size: 0;
}

.btn-toolbar > .btn + .btn,
.btn-toolbar > .btn-group + .btn,
.btn-toolbar > .btn + .btn-group {
  margin-left: 5px;
}

.btn-group > .btn {
  position: relative;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

.btn-group > .btn + .btn {
  margin-left: -1px;
}

.btn-group > .btn,
.btn-group > .dropdown-menu,
.btn-group > .popover {
  font-size: 14px;
}

.btn-group > .btn-mini {
  font-size: 10.5px;
}

.btn-group > .btn-small {
  font-size: 11.9px;
}

.btn-group > .btn-large {
  font-size: 17.5px;
}

.btn-group > .btn:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  -moz-border-radius-topleft: 4px;
}

.btn-group > .btn:last-child,
.btn-group > .dropdown-toggle {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-bottomright: 4px;
}

.btn-group > .btn.large:first-child {
  margin-left: 0;
  -webkit-border-bottom-left-radius: 6px;
          border-bottom-left-radius: 6px;
  -webkit-border-top-left-radius: 6px;
          border-top-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  -moz-border-radius-topleft: 6px;
}

.btn-group > .btn.large:last-child,
.btn-group > .large.dropdown-toggle {
  -webkit-border-top-right-radius: 6px;
          border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
          border-bottom-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  -moz-border-radius-bottomright: 6px;
}

.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active {
  z-index: 2;
}

.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}

.btn-group > .btn + .dropdown-toggle {
  *padding-top: 5px;
  padding-right: 8px;
  *padding-bottom: 5px;
  padding-left: 8px;
  -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-group > .btn-mini + .dropdown-toggle {
  *padding-top: 2px;
  padding-right: 5px;
  *padding-bottom: 2px;
  padding-left: 5px;
}

.btn-group > .btn-small + .dropdown-toggle {
  *padding-top: 5px;
  *padding-bottom: 4px;
}

.btn-group > .btn-large + .dropdown-toggle {
  *padding-top: 7px;
  padding-right: 12px;
  *padding-bottom: 7px;
  padding-left: 12px;
}

.btn-group.open .dropdown-toggle {
  background-image: none;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-group.open .btn.dropdown-toggle {
  background-color: #e6e6e6;
}

.btn-group.open .btn-primary.dropdown-toggle {
  background-color: #0044cc;
}

.btn-group.open .btn-warning.dropdown-toggle {
  background-color: #f89406;
}

.btn-group.open .btn-danger.dropdown-toggle {
  background-color: #bd362f;
}

.btn-group.open .btn-success.dropdown-toggle {
  background-color: #51a351;
}

.btn-group.open .btn-info.dropdown-toggle {
  background-color: #2f96b4;
}

.btn-group.open .btn-inverse.dropdown-toggle {
  background-color: #222222;
}

.btn .caret {
  margin-top: 8px;
  margin-left: 0;
}

.btn-mini .caret,
.btn-small .caret,
.btn-large .caret {
  margin-top: 6px;
}

.btn-large .caret {
  border-top-width: 5px;
  border-right-width: 5px;
  border-left-width: 5px;
}

.dropup .btn-large .caret {
  border-bottom-width: 5px;
}

.btn-primary .caret,
.btn-warning .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}

.btn-group-vertical {
  display: inline-block;
  *display: inline;
  /* IE7 inline-block hack */

  *zoom: 1;
}

.btn-group-vertical > .btn {
  display: block;
  float: none;
  max-width: 100%;
  -webkit-border-radius: 0;
     -moz-border-radius: 0;
          border-radius: 0;
}

.btn-group-vertical > .btn + .btn {
  margin-top: -1px;
  margin-left: 0;
}

.btn-group-vertical > .btn:first-child {
  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;
}

.btn-group-vertical > .btn:last-child {
  -webkit-border-radius: 0 0 4px 4px;
     -moz-border-radius: 0 0 4px 4px;
          border-radius: 0 0 4px 4px;
}

.btn-group-vertical > .btn-large:first-child {
  -webkit-border-radius: 6px 6px 0 0;
     -moz-border-radius: 6px 6px 0 0;
          border-radius: 6px 6px 0 0;
}

.btn-group-vertical > .btn-large:last-child {
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
}


#homepage h1,
#homepage h2,
#homepage h3,
#homepage h4,
#homepage h5,
#homepage h6 {
  margin: 10px 0;
  font-family: inherit;
  font-weight: bold;
  line-height: 20px;
  color: inherit;
  text-rendering: optimizelegibility;
}

#homepage h1 small,
#homepage h2 small,
#homepage h3 small,
#homepage h4 small,
#homepage h5 small,
#homepage h6 small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}

#homepage h1,
#homepage h2,
#homepage h3 {
  line-height: 40px;
}

#homepage h1 {
  font-size: 38.5px;
}

#homepage h2 {
  font-size: 31.5px;
}

#homepage h3 {
  font-size: 24.5px;
}

#homepage h4 {
  font-size: 17.5px;
}

#homepage h5 {
  font-size: 14px;
}

#homepage h6 {
  font-size: 11.9px;
}

#homepage h1 small {
  font-size: 24.5px;
}

#homepage h2 small {
  font-size: 17.5px;
}

#homepage h3 small {
  font-size: 14px;
}

#homepage h4 small {
  font-size: 14px;
}

#homepage .page-header {
  padding-bottom: 9px;
  margin: 20px 0 30px;
  border-bottom: 1px solid #eeeeee;
}

a.btn-primary {
    color: white;
}
#homepage {
    line-height: 20px;
}
</style>
<div class="hero-unit">
    <div class="row-fluid">
        <img src="/banner.png"  />
    </div>
    
    <div class="row-fluid">
        <div class="span6">
            <br />
            <br />
            <p style="font-size:2em;">Here users, developers and all contributors gather to create Tuleap, the full open source ALM</p>
        </div>
        <div class="span3">
            <h2>Contribute</h2>
            <ul>
                <li><a href="https://tuleap.net/plugins/tracker/?tracker=140">Report a bug </a></li>
                <li><a href="https://tuleap.net/plugins/tracker/?tracker=140">Suggest a new feature</a></li>
                <li><a href="https://tuleap.net/wiki/?group_id=101&pagename=DeveloperGuide">Participate to developments</a></li>
            </ul>
            <a class="btn btn-primary btn-large" href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install">Join now</a>
        </div>
        <div class="span3">
        <br /><br />
            <a class="btn  btn-large" href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install">
                <i class="icon-download-alt icon-white icon-2x"></i><br /><br />
                Get Tuleap</a>
        </div>
    </div>
</div>

    <hr />
<div class="row">
    <div class="span4"><h2>What is Tuleap?</h2>
    <p>Tuleap is a <b>full free Open Source Suite for <a href="http://en.wikipedia.org/wiki/Application_lifecycle_management">Application Lifecycle Management</a></b>.</b><br>
          Traditional development, Requirement Management, Agile Development, IT Service management...Tuleap makes software projects more productive, collaborative and industrialized.
          </p>
          </div>
    <div class="span4"><h2>Who is it for?</h2>
    <p>CEO, Quality managers, Project managers, Developers, Businesses, Agilers. All stackholers creating innovative applications.</p>
    <p>Large companies, SMEs, free projects, public organizations.</p>
    </div>
    
    <div class="span4"><h2>What you get downloading it?</h2>
    <img src="images/open-source-logo.png" alt="Tuleap Open Source" width="50px"><b>ALL Tuleap capabilities in Open Source</b> 
    <p>Unlimited users, unlimited projects, unlimited period.</p>
    </p><b> We don’t distinguish between a “free” and an “enterprise” version.</b>  </p>
    
     </div>
</div>

<div class="row-fluid">
    <hr />
</div>

<div class="row-fluid">
    
    <div class="span4" style="text-align:left">
			<h2><img src="images/play.png" alt="Getting started with Tuleap" width="48px"> 
			Get started</h2>
			<ul>
			<li>Feature Overview</li>
			<li><a href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install">
			Try it!</a></li>
			<li><a href="https://tuleap.net/documentation/user_guide/html/en_US/User_Guide.html">Documentation</a> & videos</li>
			<li><a href="https://tuleap.net/plugins/forumml/message.php?group_id=101&list=1">Ask questions</a></li>
			</ul>
			<p>
			<a class="btn btn-primary btn-large" href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install"><i class="icon-download-alt icon-white"></i> Get Tuleap</a>
			</p>				         
			</div>
    
    <div class="span4" style="text-align:left">
          <h2><img src="images/help.png" alt="Contribute to Tuleap" width="48px">Get Help</h2>
			<ul>
			<li><a href="https://tuleap.net/documentation/user_guide/html/en_US/User_Guide.html">Documentation</a> 
			<li><a href="http://tuleap.com/resources/videos">videos</a></li>
			<li><a href="https://tuleap.net/plugins/forumml/message.php?group_id=101&list=1">Ask questions</a></li>
			<li><a href="http://tuleap.com/?q=services/support">Professional Support</a></li>

			</div>
			
    <div class="span4">
        <h2><?= $Language->getText('homepage', 'news_title') ?></h2>
        <?= news_show_latest($GLOBALS['sys_news_group'], 1, true, false, true, 3) ?>
    </div>
</div>

<div class="row-fluid">
    <hr />
</div>

<div class="page-header">
    <h1>Features overview <small>discover Tuleap pure awesomeness! <i class="icon-thumbs-up"></i></small></h1>
</div>
<div class="row-fluid homepage-feature">
    <div class="span6">
        <img src="http://tuleap.com/sites/default/files/Tuleap-personal-dashboard.png" class="img-polaroid" width="570px" />
    </div>
    <div class="span6">
        <h2>Plan and monitor project</h2>
        <ul><li><strong>Plan releases, sprints, tasks and assign</strong> them to project members</li>
        <li>Track <strong>progress</strong> and <strong>remaining work</strong> </li>
        <li>Map <strong>backlog, stories and tasks</strong> </li>
        <li>Get a handle on project status and <strong>real-time progress</strong> with dashboards </li>
        <li>Know exactly what you have to do on your personal <strong>dashboard</strong></li>
        <li>Run <strong>personalized searches</strong> and generate <strong>adhoc graphs</strong></li>
        <li>Create <strong>public and private reports</strong></li>
        </ul>
        <a href="http://tuleap.com/?q=features/project-management">Learn more on tuleap.com <i class="icon-external-link"></i></a>
    </div>
</div>

<div class="row-fluid homepage-feature">
    <div class="span6">
        <h2>Track, trace, link everything</h2>
        <p>A powerful tracking system with extensive configuration capabilities for all your project items</p>
        <ul><li>Track <strong> any type of project artifacts</strong>: risks, requirements, tasks, bugs,… </li>
        <li>Trace and link artifacts back to code, build, document, discussion, release &amp; more</li>
        <li>Easily <strong> customize trackers</strong>  to match your activity</li>
        <li>Configure<strong> workflow</strong>  to set up automatic actions</li>
        <li>Normalize process with your own trackers <strong>templates</strong></li>
        <li>Set <strong>fine-grained permissions</strong>, on each tracker, on each field</li>
        <li>Generate reports and add them to your <strong> dashboards</strong> </li>
        <li><strong>Import-export</strong> data from or to third tool</li>
        <li>Keep up-to-date with <strong>email notifications</strong></li>
        </ul>
        <a href="http://tuleap.com/?q=features/tracker">Learn more on tuleap.com <i class="icon-external-link"></i></a>
    </div>
    <div class="span6">
        <img src="http://tuleap.com/sites/default/files/Tuleap-bug-tracker-search%20area.png" class="img-polaroid" width="570px" height="356px"/>
    </div>
</div>
<div class="row-fluid homepage-feature">
    <div class="span6">
        <img src="http://tuleap.com/sites/default/files/Tuleap-svn-version-differences_0.png" class="img-polaroid" width="570px" />
    </div>
    <div class="span6">
        <h2>Code &amp; build with famous tools</h2>
        <ul><li><strong>Browse repositories</strong> and <strong>view differences</strong> between versions</li>
        <li><strong>Link commits back to artifacts</strong>, documents,  files…</li>
        <li>Improve <strong>traceability</strong> forcing references in commit messages</li>
        <li>Follow latest commits with <strong>version control widgets on dashboards</strong></li>
        <li>Assign <strong>granular, path</strong> based access rights, on trunck and branches</li>
        <li>Receive <strong>email notifications</strong> when changes occur</li>
        <li>Search in commits</li>
        </ul>
        <p>git, svn, cvs, jenkins logos</p>
        <a href="http://tuleap.com/?q=features/version-control">Learn more on tuleap.com <i class="icon-external-link"></i></a>
    </div>
</div>

<div class="row-fluid homepage-feature">
    <div class="span6">
        <h2>Create, store, version documents</h2>
        <ul><li> Centralize project documentation in a <strong>single documentation space</strong></li>
        <li>Create new <strong>versions</strong> and <strong>compare</strong> them with previous ones</li>
        <li>Organize  <strong>documents reviews </strong> with approval workflow</li>
        <li>Keep your content  <strong>safe and secure </strong> and decide exactly who can modify what</li>
        <li>Run personalized <b>searches in documents</b> and save your queries</li>
        <li>Archive all actions made on documents in an <strong>auditable history</strong></li>
        <li>Stay up-to-date about updates with <strong>notifications</strong></li>
        </ul>
        <a href="http://tuleap.com/?q=features/document-management">Learn more on tuleap.com <i class="icon-external-link"></i></a>
    </div>
    <div class="span6">
        <img src="http://tuleap.com/sites/default/files/Tuleap-document-manager_0.png" class="img-polaroid" width="570px"/>
    </div>
</div>
<div class="row-fluid homepage-feature">
    <div class="span6">
        <img src="http://tuleap.com/sites/default/files/Tuleap-forum-discussion.png" class="img-polaroid" width="570px" />
    </div>
    <div class="span6">
        <h2>Stay tuned, Collaborate &amp; Exchange</h2>
        <ul><li>For each project, choose between integrated collaboration tools: forums, instant messaging, mailing-lists, news, RSS feeds</li>
        <li><strong>Discuss in real-time</strong> with  team members and partners with instant messaging</li>
        <li>Receive <strong>notifications</strong> on your dashboard or by email on document changes, commits or artifacts modifications</li>
        <li><strong>Discuss</strong> ideas in forums with flexible subscription and management</li>
        <li>With the wiki, <strong>share</strong> mockups, <strong>write</strong> documentation together, view <strong>modifications</strong> between versions</li>
        <li><strong>Create links back to artifacts,document, file, etc.from discussions</strong></li>
        </ul>
        <a href="http://tuleap.com/?q=features/collaboration-tools">Learn more on tuleap.com <i class="icon-external-link"></i></a>
    </div>
</div>

<center>
    <a class="btn btn-primary " href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install"><i class="icon-download-alt icon-white"></i> Get Tuleap now!</a>
    
    <a class="btn " href="https://tuleap.net/wiki/?group_id=101&pagename=Installation+%26+Administration%2FHow+to+install"><i class="icon-desktop icon"></i> Try It</a>
</center>
<?php

//tell the upper script that it should'nt display boxes
$display_homepage_boxes = false;
$display_homepage_news  = false;

?>