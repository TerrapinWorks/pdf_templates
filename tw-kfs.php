<?php
/**
 * Template Name: Terrapin Works KFS Invoice Template
 * Version: 0.1
 * Description: The Terrapin Works invoice template. Configured for KFS Acccount.
 * Author: Nicholas Bentley, Merus IT Services
 * Author URI: https://merus.it
 * Group: Terrapin Works Templates
 * License: GPLv2
 * Required PDF Version: 4.4
 * Tags: terrapinworks, invoice, kfs
 */
/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}
?>

<!-- Any PDF CSS styles can be placed in here -->
<style>
	body {
		font-family: "Proxima Nova", proximanova, sans-serif;
	}
    @page {
        header: html_twHeader;
        footer: html_twFooter;
    }
    table.header {
    	vertical-align: bottom; 
    	font-family: "Proxima Nova", proximanova, sans-serif;
    	color: #000088;
    	width: 100%;
    	border: 1px solid #cf202e;
    }
    table.header th,td {
    	padding-top: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	padding-right: 10px;
    }
    table.header a,a:visited,a:link {
    	text-decoration: none;
    }
    .footer {
    	text-align: center;
    }
    .row {
    	padding-top: 20px;
        clear: both;
        margin-bottom: 5mm;
    }
    .col {
        float: left;
    }
    .col-1-2 {
        width: 49%;
        padding-right: 1%;
    }
    .col-1-3 {
    	font-family: "Proxima Nova", proximanova, sans-serif;
        width: 33%;
        padding-right: 0.3%;
    }
    .col-1-3 h3.section2_header {
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 10px;
        color: #cf202e;
    }
    .col-1-3 h2.section2_header {
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 10px;
        color: #cf202e;
    }
    .col-1-3 h3.section1_header {
    	margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 10px;
        color: #b0b0b0;
    }
    .col-1-3 div.bottompadding {
    	padding-bottom: 45px;
    }
    .col-1-3 div.bottompadding_2 {
    	padding-bottom: 25px;
    }
    .col-1-3 div.bottompadding_3 {
    	padding-bottom: 10px;
    }
    .col-1-3 h1 {
    	font-size: 28px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        color: #cf202e;
    }
    .col-1-3 br {
        margin-top: 0px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }
    .inner {
        padding: none;
    }
    .inner-section2 {
    	padding: none;
    	text-align: right;
    }
    h3.standard {
    	color: #b0b0b0;
    	padding-bottom: 10px
    }
    h4.addtlinfo {
        color: #cf202e;
    }
</style>


<!-- register header and footer -->
<htmlpageheader name="twHeader">
    <table class="header">
    	<tr>
    		<td width="33%" style="background-color: #cf202e; text-align: center; font-size: 20pt; color: #ffffff;"><strong>INVOICE</strong></td>
    		<td width="35%" style="text-align: left; font-size: 12px; padding-left: 20px;"><strong>Business Office & Primary Contact</strong><br />Lalitha Shalini, <a style="color: #cf202e; text-decoration: none;" href="mailto:lshalini@umd.edu">lshalini@umd.edu</a><br />University of Maryland<br />Engineering Information Technology<br />4356 Stadium Dr. Suite 2125<br />College Park, MD 20742</td>
    		<td width="32%" style="text-align: center;">
                <img width="250px" src="https://s3.amazonaws.com/cdn.terrapin.works/brand/terrapin-works-logo_final_red-black_RPC.png"></img>
                [gravityforms action="conditional" merge_tag="{Which lab are you in?:1}" condition="is" value="Advanced Fabrication Lab"]
                <strong>Print Job</strong><br />Type: {Equipment or Service (Type):70.2}<br />Equipment: {Equipment or Service (Equipment or Service):70.3}
                [/gravityforms]
                [gravityforms action="conditional" merge_tag="{Which lab are you in?:1}" condition="is" value="Advanced Fabrication Lab"]test[/gravityforms]
                [gravityforms action="conditional" merge_tag="{Which lab are you in?:1}" condition="is" value="Research Prototyping Lab"]<img width="250px" src="https://s3.amazonaws.com/cdn.terrapin.works/brand/terrapin-works-logo_final_red-black_RPL.png"></img>[/gravityforms]
                [gravityforms action="conditional" merge_tag="{Which lab are you in?:1}" condition="is" value="Advanced Fabrication Lab"]<img width="250px" src="https://s3.amazonaws.com/cdn.terrapin.works/brand/terrapin-works-logo_final_red-black_AFL.png"></img>[/gravityforms]
            </td>
    	</tr>
    </table>
</htmlpageheader>

<htmlpagefooter name="twFooter">
    <div class="footer">
    	{PAGENO}/{nbpg}
    </div>
</htmlpagefooter>

<!-- Write PDF body -->
<div class="row">
    <div class="col col-1-3">
        <div class="inner" height="40mm">
            <div><h3 class="section1_header">Billed To</h3></div><div class="bottompadding">{PI Name (First):59.3} {PI Name (Last):59.6}</div><h3 class="section1_header">Payment Method</h3><div>{How is the customer paying?:2}* &#8226; {KFS Account #:19}</div><div style="font-size: 10px;">*Additional information on second page.</div>
        </div>
    </div>

    <div class="col col-1-3">
        <div class="inner" height="40mm">
            <div><h3 class="section1_header">Invoice Number</h3></div><div class="bottompadding">INV{Transaction ID:42}</div><h3 class="section1_header">Sale Date</h3><div>{date_created}</div>
        </div>
    </div>

    <div class="col col-1-3">
        <div class="inner" height="40mm">
           <div><h3 class="section1_header">Invoice Total</h3></div><div class="bottompadding_2"><h1>$55.12</h1></div><div><h3 class="section1_header">Payment Status</h3></div><div>{Payment Status:44}</div>
        </div>
    </div>
</div>
<div style="border-bottom: 3px solid #cf202e;"></div>
<div class="row">
    <div class="col col-1-3">
        <div class="inner" height="40mm">
            <div><h3 class="section2_header">Description</h3></div>
            <div>
                [gravityforms action="conditional" merge_tag="{Product or Service?:71}" condition="is" value="Product"]
                <strong>Print Job</strong><br />Type: {Equipment or Service (Type):70.2}<br />Equipment: {Equipment or Service (Equipment or Service):70.3}
                [/gravityforms]
                [gravityforms action="conditional" merge_tag="{Product or Service?:71}" condition="is" value="Service"]
                {Equipment or Service (Equipment or Service):70.3}
                [/gravityforms]
            </div>
        </div>
    </div>

    <div class="col col-1-3">
        <div class="inner-section2" height="40mm">
            <div><h3 class="section2_header">Qty</h3></div><div>1</div>
        </div>
    </div>

    <div class="col col-1-3">
        <div class="inner-section2" height="40mm">
            <div><h3 class="section2_header">Amount</h3></div>
            <div>
                {What is the subtotal (excluding tax, if applicable)?:3}
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col col-1-3">
        <div class="inner" height="40mm">
            <div></div>
        </div>
    </div>

    <div class="col col-1-3">
    	<div class="inner" height="40mm">
            <div></div>
        </div>        
    </div>

    <div class="col col-1-3">
        <div class="inner-section2" height="40mm">
           <div><h3 class="section2_header">Subtotal <span style="color: #000000;">{What is the subtotal (excluding tax, if applicable)?:3}</span></h3></div><div><h3 class="section2_header">Tax <span style="color: #000000;">$0.00</span></h3></div><div class="bottompadding_2"></div><div><h2 class="section2_header">Grand Total <span style="color: #000000;">{Grand Total (KFS Account):14}</span></h2></div>
        </div>
    </div>

</div>

<pagebreak />
<div style="padding-top: 10px;">
	<h3 class="standard">Additional Information</h3>
	<p>Use of payment methods internal to the university system (e.g. KFS Account) will generate additional data below to assist business offices in various colleges & departments when reconciling charges.</p>
</div>
<div style="border-bottom: 3px solid #cf202e;"></div>
<div style="padding-top: 10px;">
    <h4 class="addtlinfo">Customer Information</h4>
    <p>Customer Name: {Customer Name (First):17.3} {Customer Name (Last):17.6}<br />Customer Email: {Customer Email:65}<br />Customer UID: {Customer UID:66}</p>
    <h4 class="addtlinfo">PI / Billing Contact Information</h4>
    <p>Name: {PI Name (First):59.3} {PI Name (Last):59.6}<br />Phone: {PI Phone Number:60}<br />Department / Org: {Department (Department):64.2}</p>
    <h4 class="addtlinfo">KFS Account to be charged</h4>
    <p>KFS Account #: {KFS Account #:19}</p>
</div>