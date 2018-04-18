<?php
/**
 * Template Name: Terrapin Works Default Header
 * Version: 0.1
 * Description: The default Terrapin Works header. Does not output any form data. Do not use.
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
<htmlpageheader name="TerrapinWorksDefaultHeader">
    <table style="border-bottom: 1px solid #000000; vertical-align: bottom; font-family: serif; font-size: 9pt; color: #000088;" width="100%">
        <tbody>
            <tr>
                <td width="50%">Title</td>
                <td style="text-align: right; font-weight: bold;" width="50%">Logo</td>
            </tr>
        </tbody>
    </table>
</htmlpageheader>