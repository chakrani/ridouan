<html>
<script>
function changeBg(){
document.getElementById('bg').src='market'+Math.round(10*Math.random())+'.jpg';
}
</script>
<style>
table{
width:100%;
}

body {
    padding-top: 75px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #333;
}

h1 {
    font-size: 1.25em;
    margin-top: 0;
    margin-bottom: 10px;
}

h2, h3, h4, h5 {
    font-size: 1.2em;
    margin-top: 0;
    margin-bottom: 10px;
}

.title {
    color: #333;
    font-weight: bold;
}

.title-indicator {
    color: #333;
    font-weight: bold;
}

.source-description {
   font-size: 70%;
}
.source-name {

}

.title-source {
    font-weight: normal;
    color: rgb(111,116,127);
    font-size: 14px;
    line-height: 1.3125em; 
}

h2 {
    font-weight: normal;
    font-size: 1.1em;
    line-height: 1.3125em;
    text-align: justify;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #000;
}

h3, h4, h5 {
    color: #333;
    font-weight: normal;
    font-size: 1.1em;
    line-height: 1.3125em;
    text-align: justify;
    margin-top: 10px;
    margin-bottom: 10px;
}

.btn {
    border-radius: 0px;
}

.btn-group-xs > .btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 0px;
}

a {
    color: #333;
}
a:hover {
    color: #333;
}

.label-default {
    background-color: #333;
}

.chart-link {
    cursor: pointer;
}

/* ----------------- NAVIGATION ----------- */
.navbar {
    background-color: #333;
    margin-bottom: 0px;
    /*
    border: 1px solid transparent;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
    */
    /*border-bottom: 5px solid #E7E7EF;*/
    /*background:
    radial-gradient(black 15%, transparent 16%) 0 0,
    radial-gradient(black 15%, transparent 16%) 8px 8px,
    radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
    radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
    background-color:#282828;
    background-size:16px 16px;
    */
}


.navbar-brand {
    padding-top: 10px;
    line-height: 14px;
    height: 30px;
}

.navbar .navbar-nav {
    padding-top: 10px;
}

    .navbar .navbar-nav > li > a {
        color: #ddd;
        font-size: 1.2em;
    }

        .navbar .navbar-nav > li > a:visited {
            color: #ddd;
        }


        .navbar .navbar-nav > li > a:hover {
            color: #333;
            background-color: #fafafa;
        }

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:visited {
    color: #333;
    background-color: #fff;
}

.nav-item {
    border-top: 1px solid #ddd;
    padding-top: 5px;
    padding-bottom: 5px;
}

    .nav-item:hover {
        background-color: #fafafa;
    }

    .nav-item > a {
        text-decoration: none;
    }

.dropdown:hover .dropdown-menu {
    display: block;
}


.navbar-toggle {
    padding: 5px;
    border: none;
}

    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        background-color: #fff;
        border-radius: 1px;
        border: none;
    }


.navbar-columns {
    width: 375px;
    padding: 5px;
    padding-left: 20px;
}


.navbar-mobile-list {
}

.navbar-mobile-item {
    color: #fafafa;
    font-size: 18px;
    padding-left: 5px;
    padding-right: 5px;
}

.dropdown-header {
    text-align: left;
    padding-left: 0px;
}

#logo-title {
    font-size: 18px;
    color: #dddddd;
    line-height: 17px;
    font-weight: bold;
    text-decoration: none;
    padding-top: 2px;
    vertical-align: bottom;
}

#logo-subtitle {
    font-size: 20px;
    padding-left: 2px;
    line-height: 14px;
    font-weight: bold;
    text-decoration: none;
    color: #858585;
    /*text-shadow: 0 1px 0 #FFFFFF;*/
    padding-top: 0px;
    vertical-align: bottom;
}


.footerItems {
    /*text-transform: uppercase;*/
    color: #E7E7EF;
    text-decoration: none;
}

    .footerItems:hover {
        /*text-transform: uppercase;*/
        color: #fff;
        text-decoration: none;
    }


    .footerItems:visited {
        color: #fff;
    }


.headlines-title {
    font-size: 1.5em;
    font-weight: bold;
    text-decoration: none;
}

.headlines-description {
    text-align: justify;
}

.chartButton {
    text-decoration: none;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #1965AA;
    color: #F0F0F0;
    border: 1px solid #333;
    border-radius: 10px;
    -moz-border-radius: 10px;
    font-size: 10px;
    font-weight: bold;
}

.searchButton {
    text-decoration: none;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #333;
    color: #F0F0F0;
    border: none;
    /*
    border: 1px solid #333;
    border-radius: 5px;
    -moz-border-radius: 5px;
    */
    font-size: 10px;
    font-weight: bold;
    /*text-transform: uppercase;*/
}

.searchBox {
    width: 120px;
    height: 12px;
    background-color: #ffffff;
    text-align: left;
    color: #333;
    border: none;
    /*
    border: medium solid #fafafa;
    border: 1px solid #333;
    border-radius: 5px;
    -moz-border-radius: 5px;
    */
    font-size: 10px;
    font-weight: bold;
}


.box {
    width: 100%;
    padding: 20px;
    border: thin solid #dedfde;
    background-color: #fafafa;
    text-align: justify;
    color: #333;
}

.loader {
    border: 3px solid #f3f3f3;
    -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
    border-top: 3px solid #555;
    border-radius: 50%;
}

/* TABLES */

.table th {
    background-color: #f5f5f5;

}
th {
    font-weight: normal;
}
.table > thead:first-child > tr:first-child > th {
    border: none;
}

.datatable {
    width: 728px;
    font-size: 12px;
    background-color: #FFFFFF;
    border: medium solid #FAFAFA;
    border-collapse: collapse;
    padding: 0;
}


.datatable-header {
    font-weight: bold;
    text-shadow: 0 1px 0 #FFFFFF;
    letter-spacing: 1px;
    background-color: #E7E7EF;
    white-space: nowrap;
    text-align: center;
}

    .datatable-header a {
        text-decoration: none;
    }

.datatable-group {
    font-weight: bold;
    text-shadow: 0 1px 0 #FFFFFF;
    letter-spacing: 1px;
    /*text-transform: uppercase;*/
    border-bottom-style: solid;
    border-bottom-color: #333;
    border-bottom-width: thin;
    /*text-transform: uppercase;*/
    text-align: center;
}

.datatable-row {
    /*background-color: #FAFAFA;*/
    white-space: nowrap;
}


.datatable-row-alternating {
    /*background-color: #FFFFFF;*/
    white-space: nowrap;
}

.datatable-item-first {
    text-align: left;
    padding-left: 10px;

text-shadow:1px 1px 2px white, 0px 0px .5em white, 0px 0px 0.1em white;


}

.datatable-item {
    text-align: center;
	color:white;
text-shadow:1px 1px 2px black, 0px 0px .5em black, 0px 0px 0.1em black;


}


.LeftSideMenu {
    text-align: left;
    /*padding: 10px 0px 10px 0px;*/
}

.LeftSideMenuTopics {
    font-weight: bold;
    text-align: left;
    /*/*text-transform: uppercase;*/;
}

.LeftSideMenuLinks {
    text-decoration: none;
    white-space: nowrap;
    padding-left: 5px;
}

    .LeftSideMenuLinks:hover {
        text-decoration: underline;
    }

.LeftSideMenuCategories {
    text-decoration: none;
    white-space: nowrap;
    padding-left: 5px;
    font-weight: bold;
}

.WorldEconomyTitles {
    font-size: 16px;
    font-weight: bold;
    margin: 0px;
}

.tickLink {
    float: left;
    margin: 0px 3px 0px 0px;
    /*text-transform: uppercase;*/
    font-weight: bold;
}

    .tickLink a {
        color: #00008B;
    }

.tickContent {
    float: left;
    /*text-transform: uppercase;*/
    margin: 0px 2px 0px 4px;
    position: relative;
    font-weight: bold;
}

    .tickContent a {
        color: #00008B;
        text-decoration: none;
    }

.tickButton {
    float: left;
    cursor: pointer;
    cursor: hand;
    margin: 1px;
    position: relative;
}

.StaticHoverStyle {
    background-color: #1c5674;
}

.MenuSelection {
    background-color: #1c5674;
    text-align: center;
}

.DynamicStyleForMenu {
    background-color: #00008B;
    border-right: white thin solid;
    border-top: white thin solid;
    border-left: white thin solid;
    border-bottom: white thin solid;
}

.DynamicHoverStyle {
    background-color: #FFFFFF;
}

.StartPageSectionTitles {
    background-color: #FFFFFF;
}

.article {
    line-height: 18px;
    text-align: justify;
    background-color: #FAFAFA;
    border: thin solid #F3F3F3;
    padding: 10px;
}


.article-title {
    font-size: 1.5em;
    font-weight: bold;
}

.ArticlesPageTitles {
    font-weight: bold;
}

input, select {
    font-family: sans-serif;
    background-color: #FFFFFF;
    border: 1px solid #E3E2DA;
    font-weight: 400;
    color: #333;
}

.whitespace {
    min-width: 10px;
    min-height: 10px;
}

.EconomicsPageTitles {
    font-size: 11px;
    font-weight: bold;
    /*text-transform: uppercase;*/
    color: #333;
    text-shadow: 0 1px 0 #FFFFFF;
    letter-spacing: 1px;
}

.EconomicsPageSubTitles {
    font-weight: bold;
    line-height: 18px;
}

.EconomicsPageText {
    line-height: 18px;
    text-align: justify;
    background-color: #F0F8FF;
    padding: 0px;
}

.IndicatorDescription {
    line-height: 18px;
    text-align: justify;
    background-color: #E7E7EF;
    padding: 5px 5px 5px 10px;
    border: thick solid #fafafa;
}

.one {
    padding-left: 10px;
}

.two {
    padding-left: 10px;
}


.calendar-box {
    padding: 10px;
    background-color: #fafafa;
    text-align: justify;
    color: #333;
}

.calendar-box-header {
    background-color: #fafafa;
    /*text-transform: uppercase;*/
    font-size: 8px;
    padding: 5px;
}

#calendar {
    width: 100%;
    line-height: 18px;
    /*
    border-collapse:collapse;
    border-spacing: 2px;
    */
}

.calendarHeaderRow {
    /*text-transform: uppercase;*/
    font-size: 8px;
    white-space: nowrap;
    line-height: 10px;
    vertical-align: middle;
    text-shadow: 0 1px 0 #FFFFFF;
}

.dateRow {
    background-color: #D2DEE8;
    /*text-transform: uppercase;*/
    font-size: 9px;
    text-align: center;
    width: 100%;
    text-shadow: 0 1px 0 #FFFFFF;
    letter-spacing: 1px;
    background: #EEE !important;
    font-weight: bold;
}

.calendarRow {
    background-color: #FFFFFF;
    white-space: nowrap;
}

.calendarAlternativeRow {
    background-color: #FFFFFF;
}

.calendar-item {
    text-align: center;
}

.calendar-item-positive {
    color: darkgreen;
}

.calendar-item-negative {
    color: darkred;
}


.calendar-revised {
    cursor: pointer;
}

.calendar-iso {
    color: #333;
}

.calendar-event {
    color: #777;
    font-weight: bold;
}

.calendar-date-1 {
    color: #333;
}

.calendar-date-2 {
    color: #333;
    font-weight: bold;
}

.calendar-date-3- {
    color: #9c3031;
    font-weight: bolder;
}

.calendar-date-3 {
    display: inline;
    padding: 0.2em 0.4em;
    font-size: 85%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background-color: #9b3131;
}


div.ui-tooltip {
    max-width: 400px;
}

.calendar-info {
    background-image: url("/images/questionmarks/info_gray2.gif");
    width: 10px;
    height: 10px;
    white-space: nowrap;
    /*
     vertical-align: middle;
    
   */
}

.uppercase {
    /*text-transform: uppercase;*/
}


.bold {
    font-weight: bold;
}


.contactButton {
    text-decoration: none;
    padding-left: 5px;
    padding-right: 5px;
    background-color: #1965AA;
    color: #F0F0F0;
    border: 1px solid #333;
    border-radius: 10px;
    -moz-border-radius: 10px;
    font-size: 12px;
    font-weight: bold;
}

.chart-type {
    cursor: pointer;
}


.chart-loading {
    width: 20px;
    height: 20px;
    background: url(https://d3fy651gv2fhd3.cloudfront.net/images/progress-wheel.gif) no-repeat;
}


.home-panel {
    padding: 0px;
}

.home-headline {
    background-color: #fff;
    padding: 15px;
    margin-bottom: 10px;
}

.home-news {
    background-color: #dddddd;
    padding: 10px;
    overflow: hidden;
    white-space: nowrap;
}

.home-calendar {
    background-color: #efeff7;
    padding: 10px;
    overflow: hidden;
    white-space: nowrap;
}

.nav > li > a {
    padding: 10px 10px;
}



.market-positive-image {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 7.5px 13.0px 7.5px;
    border-color: transparent transparent #8ecf61;
    background-position: 0px 0px;
    display: inline-block;
}

.market-negative-image {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 13.0px 7.5px 0 7.5px;
    border-color: #ed3b3b transparent transparent;
    background-position: 0px 0px;
    display: inline-block;
}

.market-neutral-image {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 7.5px 0px 7.5px 13px;
    border-color: #fff #fff #fff;
    background-position: 0px 0px;
    display: inline-block;
}

.market-neutral-image-v2 {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 7.5px 0px 7.5px 13px;
    border-color: rgba(237, 59, 59, 0) rgb(49, 44, 44) rgba(192, 247, 8, 0);
    background-position: 0px 0px;
    display: inline-block;
}

.market-name {
    color: #fff;
    background-color: #333;
    padding: 2px;
    padding-left: 5px;
    padding-right: 5px;
    text-transform: uppercase;
}

.market-ticker {
    background-color: #058dc7;
    color: #fff;
    padding: 2px;
    padding-left: 5px;
    padding-right: 5px;
    text-transform: uppercase;
}

.market-price {
    font-weight: bold;
    padding-left: 5px;
    padding: 5px;
    font-size: 105%;
    color: #333;
}

.market-financials {
    color: #333;
    padding: 2px;
    padding-left: 5px;
    text-transform: uppercase;
}


.market-stats-div {
    padding-bottom: 5px;
}

.market-stats-title {
    font-size: 9px;
    text-transform: uppercase;
    color: #000;
    max-width: 200px;
    overflow: hidden;
    white-space: nowrap;
}

.market-stats-info {
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
}

.market-stats-value {
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    padding-left: 5px;
}

.market-stats-badge {
    background-color: #8ECF61;
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 10px;
}

/*

*/

.market-panel {
    /*box-shadow: 0 1px 4px 0 rgba(0,0,0,.26);*/
}

    .market-panel > div {
    }

.market-header-name {
    border-bottom: 1px solid #ccc;
}

    .market-header-name h1 {
        display: inline-block;
        font-weight: bold;
        /*
        font-weight: bold;
        color: #fff;
        background-color: #333;
        line-height: 1em;
        padding: 1px 5px 1px 5px;*/
    }

    .market-header-name span {
        font-size: 0.8em;
        color: #333;
        margin-left: 15px;
    }

.market-header-values {
    padding-top: 5px;
}

.market-header-value {
    display: inline-block;
}

    .market-header-value h2 {
        font-size: 1em;
    }

    .market-header-value span {
        font-weight: 700;
        font-size: 1.4em;
    }

.market-panel2 {
}

    .market-panel2 > div {
        display: inline-block;
    }

.market-border {
    /*box-shadow: 0 1px 4px 0 rgba(0,0,0,.26);*/
}

/* markets financials widget*/

.financials-widget-item {
    padding: 10px;
    border-bottom: 1px solid #e6e6e6;
    position: relative;
    display: block;
}

    .financials-widget-item:hover {
        background-color: #f7f6f6;
        text-decoration: none;
        color: #333;
    }

    .financials-widget-item:focus,
    .financials-widget-item:active,
    .financials-widget-item:visited {
        text-decoration: none;
        color: #333;
    }

    .financials-widget-item:hover > .financials-widget-item-arrow {
        visibility: visible !important;
        opacity: 1 !important;
        transition: opacity 0.5s linear;
    }


    .financials-widget-item:last-child {
        border-bottom: 0px;
    }

    .financials-widget-item span {
        font-size: 1.4em;
        margin-top: 8px;
        font-weight: 700;
        padding-left: 4px;
    }

.financials-widget-item-arrow {
    color: #676767;
}

/*market tables*/


.markets2 thead tr th {
}

    .markets2 thead tr th:first-child {
        padding-left: 15px;
        /*
            font-weight: bold; 
    background-color: #333;
    color: #fafafa;
        */
    }

.markets2 tbody tr td:first-child {
    padding-left: 15px;
}



.markets-switch {
    display: table;
    float: right;
}



/* TABS */

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    color: #333;
    cursor: default;
    background-color: #fff;
    border: none;
    border-bottom: 2px solid #333;
}


/*
.nav .nav-tabs {
    border-bottom: none;
    background-color: #fff;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    background-color: #fff;
}
.nav-tabs {
   border-bottom: none;
}

.nav-tabs > li > a {
    margin-right: 0px;
    border: none;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    cursor: default;
    border: none;
    border-bottom: solid medium #000;
    padding-bottom: 3px;
}
*/



/* TYPEAHEAD */

.iec-dd-origin {
    font-size: 0.7em;
    padding-left: 5px;
    color: #9a9a9a;
}


.typeahead,
.tt-query,
.tt-hint {
    width: 200px;
    height: 30px;
    padding: 3px 12px;
    line-height: 30px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    outline: none;
}

.typeahead {
    background-color: #fff;
}

    .typeahead:focus {
        border: 1px solid #0097cf;
    }

.tt-query {
}

.tt-hint {
    color: #999;
}

.tt-menu {
    width: 422px;
    margin: 12px 0;
    padding: 3px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

.tt-suggestion {
    padding: 3px 20px;
    font-size: 13px;
    line-height: 24px;
}

    .tt-suggestion:hover {
        cursor: pointer;
        color: #fff;
        background-color: #0097cf;
    }

    .tt-suggestion.tt-cursor {
        color: #fff;
        background-color: #0097cf;
    }

    .tt-suggestion p {
        margin: 0;
    }

/* MARKET CHARTS */
.hawk-header-typeahead-cnt {
    border-left: none;
    margin-left: 0px;
}

    .hawk-header-typeahead-cnt > input {
        font-size: 14px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

.hawk-inLabels--label {
    text-transform: uppercase;
}

/* COOKIES CONSENT*/
.cookie-disclaimer {
    background: #000000;
    color: #FFF;
    opacity: 0.8;
    width: 100%;
    bottom: 0;
    left: 0;
    z-index: 1;
    height: 50px;
    position: fixed;
}

    .cookie-disclaimer .container {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .cookie-disclaimer .cookie-close {
        float: right;
        padding: 10px;
        cursor: pointer;
    }


/*
    multimode navigation
    normal: see menu
    search-mode: hide menu items -> show big input
*/

.multimode-nav {
}

    .multimode-nav .visible-search-mode {
        position: absolute;
        transform: translateX(100%);
        margin-left: 1000px;
    }

    .multimode-nav[data-search-mode=true] li {
        display: none;
    }

    .multimode-nav[data-search-mode=true] .visible-search-mode {
        position: relative !important;
        transform: translateX(0);
        display: block;
        transition: transform 0.3s ease;
        margin-left: 0px;
        margin-right: 40px;
    }


.form-control {
    border: none;
    border-radius: 0px;
    border-bottom: 1px #E7E7EF solid;
}

/* IO NOTIFICATIONS */
.ui-pnotify.custom .ui-pnotify-container {
    background-color: #fafafa !important;
    border: none !important;
}

.ui-pnotify.custom .ui-pnotify-title, .ui-pnotify.custom .ui-pnotify-text {
    color: #000 !important;
}

.ui-pnotify-title {
    height: 18px;
}


.chart-figure {
    min-height: 340px;
}

/* VIEWPORT */
/* Classic Phones */
@media only screen and (max-width : 320px) {

    .chart-figure {
        min-height: 100px;
    }

    .chart {
        width: 100px;
    }

    .home-news, .home-calendar, .home-headline {
        margin: 10px;
    }

    .nav > li > a {
        padding: 10px 10px;
    }

    .title-notes {
        display: none;
    }
}
/* Smartphones */
@media only screen and (min-width : 320px) and (max-width : 480px) {
    .chart-figure {
        min-height: 100px;
    }

    .home-news, .home-calendar {
        margin: 5px;
    }

    .nav > li > a {
        padding: 10px 10px;
    }

    .title-notes {
        display: none;
    }
}
/* Tablets */
@media only screen and (min-width : 480px) and (max-width : 768px) {

    .chart {
        width: 470px;
    }


    .nav > li > a {
        padding: 10px 10px;
    }

    .navbar-mobile-item {
        padding-right: 20px;
    }

    .title-notes {
        display: none;
    }
}




/** **** TA CSS **** **/


.nav-search-input-class {
    -webkit-appearance: none;
    outline: none;
    padding-left: 5px;
}

.nav-searchbox-class,
.nav-searchbox-class:visited,
.nav-searchbox-class:hover,
.nav-searchbox-class:active,
.nav-searchbox-class:focus {
    background-color: transparent !important;
}

    .nav-search-input-class:hover,
    .nav-search-input-class:active,
    .nav-search-input-class:focus,
    .nav-searchbox-class:hover > input,
    .nav-searchbox-class:active > input,
    .nav-searchbox-class:focus > input {
        /*background-color:#000 !important;*/
    }

.nav-searchbox-class {
    user-drag: none;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-drag: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}

.nav-search-input-class {
    color: #fff !important;
    -webkit-appearance: none;
    -webkit-border-radius: 0px;
}


#dpSearch-resultCnt-tiny > li,
#dpSearch-resultCnt > li {
    border-radius: 0px;
}

    #dpSearch-resultCnt-tiny > li.active,
    #dpSearch-resultCnt > li.active {
        background-color: rgb(221, 221, 221);
        border-color: rgb(221, 221, 221);
    }

.dpTaResult {
    padding-left: 20px;
}

    .dpTaResult a {
        display: block;
        padding: 3px;
    }

        .dpTaResult a:first-child {
            margin-top: 0px;
        }

    .dpTaResult :first-child {
        padding-top: 5px;
        border-top: 0px;
    }

    .dpTaResult :last-child {
        border-bottom: 0px;
        padding-bottom: 5px;
    }

    .dpTaResult li {
        padding-top: 5px;
        padding-bottom: 5px;
        border-left: 0px;
        border-right: 0px;
    }

    .dpTaResult a:last-child {
        margin-bottom: 0px;
    }

.typeahead-searchbox-glyphicon-wrapper {
    border-bottom: 1px solid #858585;
}

.nav-search-glyphicon-class {
    cursor: pointer;
}

@media (max-width: 991px) { /* XS, SM sizes */
    .typeahead-searchbox-glyphicon-wrapper {
        border-bottom: 1px solid transparent;
    }

        .typeahead-searchbox-glyphicon-wrapper.is-wide-open {
            border-bottom: 1px solid #858585;
        }
}


/** ____ TA CSS ____ **/


/** *** FOR ESTIMATES *** **/
.te-loading {
    width: 20px;
    height: 20px;
    background: url(https://d3fy651gv2fhd3.cloudfront.net/images/progress-wheel.gif) no-repeat;
}

/** ___ FOR ESTIMATES ___ **/


input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    opacity: 1;
}

.arrow-expectation-falling {
    color: #D50000;
}

.arrow-expectation-rising {
    color: #4CAF50;
}

.expectation-falling {
    background-color: #D50000;
}

.expectation-rising {
    background-color: #4CAF50;
}

.expectation-unchanged {
    background-color: #E0E0E0;
}

.estimates-inactive-option {
    opacity: 0.2;
}


.estimates-active-option {
    cursor: pointer;
}

.stats-table-estimates-value {
    border-bottom: 0 !important;
    text-align: -webkit-center;
}

.estimates-star {
    -webkit-mask: url(https://d3fy651gv2fhd3.cloudfront.net/css/images/star.svg) no-repeat 100% 100%;
    mask: url(https://d3fy651gv2fhd3.cloudfront.net/css/images/star.svg) no-repeat 100% 100%;
    /* display: inline-table !important; */
    -webkit-mask-size: cover !important;
    mask-size: cover !important;
    display: inherit;
    height: 15px;
    width: 15px;
    background-color: #FFF;
}

.table-estimates-score {
    /*text-align: center;*/
    text-align: right;
}

.table-estimates-value {
    text-align: right;
}

.about-title {
    line-height: 3.2em;
}

.about-text {
    text-align: justify;
}


input#estimateValueId + span {
    display: none;
}

input#estimateValueId:focus + span {
    display: inline;
}

.stats-badge {
    padding: 3px 3px;
    margin-right: 4px;
    margin-left: 13px;
    background-color: #ffffff;
    border-radius: 5px;
    color: #222;
    font-size: inherit;
    font-weight: inherit;
}

.est-bge,
.estimates-badge {
    padding: 3px 4px;
    margin-right: 0px;
    background-color: #333333;
    border-radius: 2px;
}

.style-handler-estimation-input {
    /*border-bottom: 1px solid #ddd;
        box-shadow: none;*/
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #e7e7e7;
    box-shadow: none;
}

    .style-handler-estimation-input:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

.nav-tabs > li.estimates.active > a,
.nav-tabs > li.estimates.active > a:focus,
.nav-tabs > li.estimates.active > a:hover {
    color: #555;
    cursor: default;
    background-color: #fafafa;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}


.checkmark {
    /*display: none;*/
    display: -webkit-inline-box;
}

    .checkmark.draw:after {
        animation-duration: 400ms;
        animation-timing-function: ease;
        animation-name: checkmark;
        transform: scaleX(-1) rotate(135deg);
    }

    .checkmark:after {
        opacity: 1;
        height: 2em;
        width: 1em;
        transform-origin: left top;
        border-right: 2px solid #5cb85c;
        border-top: 2px solid #5cb85c;
        content: '';
        /* left: 2em; */
        /* top: 4em; */
        /*top: 1.5em;*/
        position: absolute;
    }

@keyframes checkmark {
    0% {
        height: 0;
        width: 0;
        opacity: 1;
    }

    20% {
        height: 0;
        width: 0.5em;
        opacity: 1;
    }

    40% {
        height: 1em;
        width: 1em;
        opacity: 1;
    }

    100% {
        height: 2em;
        width: 1em;
        opacity: 1;
    }
}

/* REMOVE ROUND CORNERS */
code, kbd, pre, .img-rounded, .img-thumbnail, .img-circle, .form-control, .btn, .btn-link, .dropdown-menu, .list-group-item, .input-group-addon, .input-group-btn, .nav-tabs a, .nav-pills a, .navbar, .navbar-toggle, .icon-bar, .breadcrumb, .pagination, .pager *, .label, .badge, .jumbotron, .thumbnail, .alert, .progress, .panel, .well, .modal-content, .tooltip-inner, .popover, .popover-title, .carousel-indicators li {
    border-radius: 0 !important;
}

.dropdown-menu {
    margin: 0px;
    padding: 0px;
}

/* CALENDAR */
.te-c-selected,
.te-c-selected a {
    font-weight: bold !important;
}

.te-c-option {
    cursor: pointer;
}

    .te-c-option > a:hover {
        text-decoration: none;
    }

.te-c-more-countries {
    text-align: -webkit-center;
    padding: 10px;
    border-top: 1px solid #ddd;
}

.te-c-groups-parent {
    display: table;
    width: 100%;
    table-layout: fixed;
    /*margin-bottom: 10px;*/
    /*background-color: #f5f5f5;*/
}

    .te-c-groups-parent span {
        display: table-cell;
        text-align: center;
    }

        .te-c-groups-parent span:hover {
            font-weight: bold;
        }

.te-c-group-selected > a {
    /*border-bottom: 2px solid black;
    padding-left: 10px;
    padding-right: 10px;*/
    font-weight: bold;
}


/*
PAGE MENU
*/
.pagemenu {
    position: fixed;
    top: 50px;
    /*top: 90px;*/
    right: 0;
    left: 0;
    z-index: 100;
    height: 40px;
    width: 100%;
    background-color: #f5f5f5;
    border-bottom: 1px solid #cfcfcf;
}

    .pagemenu .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .pagemenu h1 {
        padding-top: 10px;
    }

.title-notes {
    float: right !important;
}

.pagetabs {
    position: fixed;
    top: 90px;
    /*top: 50px;*/
    right: 0;
    left: 0;
    z-index: 100;
    width: 100%;
    background-color: #fff;
    border-bottom: 1px solid #cfcfcf;
}

    .pagetabs .nav-tabs > li > a {
        border: none;
        margin-right: 0px;
    }

        .pagetabs .nav-tabs > li > a:hover {
            color: #333;
        }

    .pagetabs .nav-tabs > li.active > a, .pagetabs .nav-tabs > li.active > a:focus, .pagetabs .nav-tabs > li.active > a:hover {
        border-bottom: solid 1px #ffffff;
        border-right: solid 1px #ddd;
        border-left: solid 1px #ddd;
    }

        .pagetabs .nav-tabs > li.active > a.expand-panel-open {
            border-bottom: none;
        }

    .pagetabs .nav li a.show-expand-panel, .pagetabs .nav li a.show-expand-panel:focus, .pagetabs .nav li a.show-expand-panel:hover {
        background-color: #fff;
    }

    .pagetabs .nav li a.expanding-panel {
        border-bottom: solid 1px #fbfbfb;
        border-right: solid 1px #ddd;
        border-left: solid 1px #ddd;
    }

.nav-h-scroll {
    white-space: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

    .nav-h-scroll::-webkit-scrollbar {
        display: none;
    }

    .nav-h-scroll > li {
        display: inline-block;
        float: none;
    }

@media only screen and (max-width: 414px) {
    .pagemenu h1 {
        font-size: 1em;
        padding-top: 10px;
        margin: 0px;
    }
}

/* PNOTIFY */
.ui-pnotify {
    top: 36px;
    right: 36px;
    position: absolute;
    height: auto;
    z-index: 2
}

body > .ui-pnotify {
    position: fixed;
    z-index: 100040
}

.ui-pnotify-modal-overlay {
    background-color: rgba(0,0,0,.4);
    top: 0;
    left: 0;
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 1
}

body > .ui-pnotify-modal-overlay {
    position: fixed;
    z-index: 100039
}

.ui-pnotify.ui-pnotify-in {
    display: block !important
}

.ui-pnotify.ui-pnotify-move {
    transition: left .5s ease,top .5s ease,right .5s ease,bottom .5s ease
}

.ui-pnotify.ui-pnotify-fade-slow {
    transition: opacity .4s linear;
    opacity: 0
}

    .ui-pnotify.ui-pnotify-fade-slow.ui-pnotify.ui-pnotify-move {
        transition: opacity .4s linear,left .5s ease,top .5s ease,right .5s ease,bottom .5s ease
    }

.ui-pnotify.ui-pnotify-fade-normal {
    transition: opacity .25s linear;
    opacity: 0
}

    .ui-pnotify.ui-pnotify-fade-normal.ui-pnotify.ui-pnotify-move {
        transition: opacity .25s linear,left .5s ease,top .5s ease,right .5s ease,bottom .5s ease
    }

.ui-pnotify.ui-pnotify-fade-fast {
    transition: opacity .1s linear;
    opacity: 0
}

    .ui-pnotify.ui-pnotify-fade-fast.ui-pnotify.ui-pnotify-move {
        transition: opacity .1s linear,left .5s ease,top .5s ease,right .5s ease,bottom .5s ease
    }

.ui-pnotify.ui-pnotify-fade-in {
    opacity: 1
}

.ui-pnotify .ui-pnotify-shadow {
    -webkit-box-shadow: 0 6px 28px 0 rgba(0,0,0,.1);
    -moz-box-shadow: 0 6px 28px 0 rgba(0,0,0,.1);
    box-shadow: 0 6px 28px 0 rgba(0,0,0,.1)
}

.ui-pnotify-container {
    background-position: 0 0;
    padding: .8em;
    height: 100%;
    margin: 0
}

    .ui-pnotify-container:after {
        content: " ";
        visibility: hidden;
        display: block;
        height: 0;
        clear: both
    }

    .ui-pnotify-container.ui-pnotify-sharp {
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0
    }

.ui-pnotify-title {
    display: block;
    margin-bottom: .4em;
    margin-top: 0
}

.ui-pnotify-text {
    display: block
}

.ui-pnotify-icon, .ui-pnotify-icon span {
    display: block;
    float: left;
    margin-right: .2em
}

.ui-pnotify.stack-bottomleft, .ui-pnotify.stack-topleft {
    left: 25px;
    right: auto
}

.ui-pnotify.stack-bottomleft, .ui-pnotify.stack-bottomright {
    bottom: 25px;
    top: auto
}

.ui-pnotify.stack-modal {
    left: 50%;
    right: auto;
    margin-left: -150px
}

.brighttheme {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0
}

    .brighttheme.ui-pnotify-container {
        padding: 18px
    }

    .brighttheme .ui-pnotify-title {
        margin-bottom: 12px
    }

.brighttheme-notice {
    background-color: #ffffa2;
    border: 0 solid #ff0;
    color: #4f4f00
}

.brighttheme-info {
    background-color: #8fcedd;
    border: 0 solid #0286a5;
    color: #012831
}

.brighttheme-success {
    background-color: #aff29a;
    border: 0 solid #35db00;
    color: #104300
}

.brighttheme-error {
    background-color: #ffaba2;
    background-image: repeating-linear-gradient(135deg,transparent,transparent 35px,rgba(255,255,255,.3) 35px,rgba(255,255,255,.3) 70px);
    border: 0 solid #ff1800;
    color: #4f0800
}

.brighttheme-icon-closer, .brighttheme-icon-info, .brighttheme-icon-notice, .brighttheme-icon-sticker, .brighttheme-icon-success {
    position: relative;
    width: 16px;
    height: 16px;
    font-size: 12px;
    font-weight: 700;
    line-height: 16px;
    font-family: "Courier New",Courier,monospace;
    border-radius: 50%
}

    .brighttheme-icon-closer:after, .brighttheme-icon-info:after, .brighttheme-icon-notice:after, .brighttheme-icon-sticker:after, .brighttheme-icon-success:after {
        position: absolute;
        top: 0;
        left: 4px
    }

.brighttheme-icon-notice {
    background-color: #2e2e00;
    color: #ffffa2;
    margin-top: 2px
}

    .brighttheme-icon-notice:after {
        content: "!"
    }

.brighttheme-icon-info {
    background-color: #012831;
    color: #8fcedd;
    margin-top: 2px
}

    .brighttheme-icon-info:after {
        content: "i"
    }

.brighttheme-icon-success {
    background-color: #104300;
    color: #aff29a;
    margin-top: 2px
}

    .brighttheme-icon-success:after {
        content: "\002713"
    }

.brighttheme-icon-error {
    position: relative;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 16px solid #2e0400;
    font-size: 0;
    line-height: 0;
    color: #ffaba2;
    margin-top: 1px
}

    .brighttheme-icon-error:after {
        position: absolute;
        top: 1px;
        left: -4px;
        font-size: 12px;
        font-weight: 700;
        line-height: 16px;
        font-family: "Courier New",Courier,monospace;
        content: "!"
    }

.brighttheme-icon-closer, .brighttheme-icon-sticker {
    display: inline-block
}

    .brighttheme-icon-closer:after {
        top: -4px;
        content: "\002715"
    }

    .brighttheme-icon-sticker:after {
        top: -5px;
        content: "\01D1BC";
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        transform: rotate(-90deg)
    }

    .brighttheme-icon-sticker.brighttheme-icon-stuck:after {
        -moz-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

.brighttheme .ui-pnotify-action-bar {
    padding-top: 12px
}

    .brighttheme .ui-pnotify-action-bar input, .brighttheme .ui-pnotify-action-bar textarea {
        display: block;
        width: 100%;
        margin-bottom: 12px !important
    }

.brighttheme .ui-pnotify-action-button {
    text-transform: uppercase;
    font-weight: 700;
    padding: 4px 8px;
    border: none;
    background: 0 0
}

    .brighttheme .ui-pnotify-action-button.btn-primary {
        border: none;
        border-radius: 0
    }

.brighttheme-notice .ui-pnotify-action-button.btn-primary {
    background-color: #ff0;
    color: #4f4f00
}

.brighttheme-info .ui-pnotify-action-button.btn-primary {
    background-color: #0286a5;
    color: #012831
}

.brighttheme-success .ui-pnotify-action-button.btn-primary {
    background-color: #35db00;
    color: #104300
}

.brighttheme-error .ui-pnotify-action-button.btn-primary {
    background-color: #ff1800;
    color: #4f0800
}

.ui-pnotify-closer, .ui-pnotify-sticker {
    float: right;
    margin-left: .2em
}

.ui-pnotify-container {
    position: relative;
    left: 0
}

@media (max-width:480px) {
    .ui-pnotify-mobile-able.ui-pnotify {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        width: auto !important;
        font-size: 1.2em;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        -ms-font-smoothing: antialiased;
        font-smoothing: antialiased
    }

        .ui-pnotify-mobile-able.ui-pnotify .ui-pnotify-shadow {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-bottom-width: 5px
        }

    .ui-pnotify-mobile-able .ui-pnotify-container {
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0
    }

    .ui-pnotify-mobile-able.ui-pnotify.stack-bottomleft, .ui-pnotify-mobile-able.ui-pnotify.stack-topleft {
        left: 0;
        right: 0
    }

    .ui-pnotify-mobile-able.ui-pnotify.stack-bottomleft, .ui-pnotify-mobile-able.ui-pnotify.stack-bottomright {
        left: 0;
        right: 0;
        bottom: 0;
        top: auto
    }

        .ui-pnotify-mobile-able.ui-pnotify.stack-bottomleft .ui-pnotify-shadow, .ui-pnotify-mobile-able.ui-pnotify.stack-bottomright .ui-pnotify-shadow {
            border-top-width: 5px;
            border-bottom-width: 1px
        }
}

</style>
<body onload='changeBg()'>
<img style='position:fixed;top:0%;left:0;width:100%;height:100%;opacity:.9' src='white.jpg' id='bg'>
<table style='width:100%' id='tabl'><tr><td>
<?php
@unlink("r1.html");




$ech= file_get_contents("http://d3fy651gv2fhd3.cloudfront.net/stocks?vvvv=".rand(0,43245352));
$tr=explode("<table", $ech);

for($r=1;$r<(count($tr)-1);$r++){

$fs=explode("</table>", $tr[$r]);
echo  "<table".$fs[0]."</table>";


}


//echo $tr[2];
//echo $ech."sad"; //"<table class=\"genTbl closedTbl".$tr[1];


?>
</table>
<script>
var tel=0;
function runs(){
tel=tel-3;

document.getElementById('tabl').style.position="fixed";
document.getElementById('tabl').style.left=0;
document.getElementById('tabl').style.top=tel+"px";



setTimeout("runs()", 100);

}
runs();
var bgs=new Array()
for(r=0;r<10;r++){
bgs[0]="market"+r+".jpg";
}

document.getElementById('bg').style.backgroundImage="url("+bgs[Math.floor(Math.random()*bgs.length)]+")";
document.getElementById('bg').style.backgroundPosition="center center";
a=Math.floor(200+(200*Math.random()));
document.getElementById('bg').style.backgroundSize="100% 100%";
document.getElementById('bg').style.backgroundRepeat="no-repeat";

</script>

