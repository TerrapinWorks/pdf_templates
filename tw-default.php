<?php
/**
 * Template Name: Terrapin Works Default Invoice Template
 * Version: 0.1
 * Description: The default Terrapin Works invoice template. Not configured for any payment methods.
 * Author: Nicholas Bentley, Merus IT Services
 * Author URI: https://merus.it
 * Group: Terrapin Works Templates
 * License: GPLv2
 * Required PDF Version: 4.4
 * Tags: terrapinworks, invoice
 */
/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}
?>

<!-- Any PDF CSS styles can be placed in here -->
<style>
	@font-face { 
	font-family: 'Proxima Nova';
	src:url('proximanova-regular-webfont.woff') format('woff');
	}
    @page {
        header: html_twHeader;
        footer: html_twFooter;
    }
    table.header {
    	vertical-align: center; 
    	font-family: 'Proxima Nova', sans-serif; 
    	color: #000088;
    	width: 100%;
    }
    table.header th,td {
    	padding-top: 20px;
    	padding-bottom: 20px;
    	padding-left: 10px;
    	padding-right: 10px;
    }
    .footer {
    	text-align: center;
    }
</style>


<!-- register header and footer -->
<htmlpageheader name="twHeader">
    <table class="header">
    	<tr>
    		<td width="35%" style="background-color: #cf202e; text-align: center; font-size: 20pt; color: #ffffff;"><strong>INVOICE</strong></td>
    		<td width="32.5%" style="text-align: center; font-size: 15px;">University of Maryland<br />Engineering Information Technology<br />4356 Stadium Dr. Suite 2125<br />College Park, MD 20742</td>
    		<td width="32.5%" style="text-align: center;"><img width="200px" src="https://s3.amazonaws.com/cdn.terrapin.works/brand/terrapin-works-logo_final_red-black_RPC.png"></img></td>
    	</tr>
    </table>
</htmlpageheader>

<htmlpagefooter name="twFooter">
    <div class="footer">
    	{PAGENO}/{nbpg}
    </div>
</htmlpagefooter>

<!-- Write PDF body -->
<h2>Header</h2>
    
<p>Nulla felis erat, imperdiet eu, ullamcorper non, nonummy quis, elit. Suspendisse potenti. Ut a eros at ligula vehicula pretium. Maecenas feugiat pede vel risus. Nulla et lectus. Fusce eleifend neque sit amet erat. Integer consectetuer nulla non orci. Morbi feugiat pulvinar dolor. Cras odio. Donec mattis, nisi id euismod auctor, neque metus pellentesque risus, at eleifend lacus sapien et risus. Phasellus metus. Phasellus feugiat, lectus ac aliquam molestie, leo lacus tincidunt turpis, vel aliquam quam odio et sapien. Mauris ante pede, auctor ac, suscipit quis, malesuada sed, nulla. Integer sit amet odio sit amet lectus luctus euismod. Donec et nulla. Sed quis orci. </p>

<pagebreak />

<h2>Header</h2>

<p>Nulla felis erat, imperdiet eu, ullamcorper non, nonummy quis, elit. Suspendisse potenti. Ut a eros at ligula vehicula pretium. Maecenas feugiat pede vel risus. Nulla et lectus. Fusce eleifend neque sit amet erat. Integer consectetuer nulla non orci. Morbi feugiat pulvinar dolor. Cras odio. Donec mattis, nisi id euismod auctor, neque metus pellentesque risus, at eleifend lacus sapien et risus. Phasellus metus. Phasellus feugiat, lectus ac aliquam molestie, leo lacus tincidunt turpis, vel aliquam quam odio et sapien. Mauris ante pede, auctor ac, suscipit quis, malesuada sed, nulla. Integer sit amet odio sit amet lectus luctus euismod. Donec et nulla. Sed quis orci. </p>

<pagebreak />

<h2>Header</h2>

<p>Nulla felis erat, imperdiet eu, ullamcorper non, nonummy quis, elit. Suspendisse potenti. Ut a eros at ligula vehicula pretium. Maecenas feugiat pede vel risus. Nulla et lectus. Fusce eleifend neque sit amet erat. Integer consectetuer nulla non orci. Morbi feugiat pulvinar dolor. Cras odio. Donec mattis, nisi id euismod auctor, neque metus pellentesque risus, at eleifend lacus sapien et risus. Phasellus metus. Phasellus feugiat, lectus ac aliquam molestie, leo lacus tincidunt turpis, vel aliquam quam odio et sapien. Mauris ante pede, auctor ac, suscipit quis, malesuada sed, nulla. Integer sit amet odio sit amet lectus luctus euismod. Donec et nulla. Sed quis orci. </p>

