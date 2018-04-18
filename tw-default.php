<?php
/**
 * Template Name: Terrapin Works Default Invoice Template
 * Version: 0.1
 * Description: The default Terrapin Works invoice template. Not configured for any payment methods.
 * Author: Nicholas Bentley, Mterus IT Services
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

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
</style>
<htmlpageheader name="MyCustomHeader">
    <table style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000088;" width="100%">
        <tbody>
            <tr>
                <td width="50%">Title</td>
                <td style="text-align: right; font-weight: bold;" width="50%">Logo</td>
            </tr>
        </tbody>
    </table>
</htmlpageheader>