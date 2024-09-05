<?php
/**
 * Plugin Name: siri plugin
 * Plugin URI: https://www.innovanza.net
 * Description: Display content using a shortcode to insert in a page or post
 * Version: 0.1
 * Text Domain: siri-plugin
 * Author: anas
 * Author URI: https://www.innovanza.net
 */


  function siri_plugin($atts) {   
	  
$includesPath = plugins_url()."/siri-plugin/";
	$Content = '<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


   <h3>Please fill this form to innitiate the calculations</h3>

    <div class="outer-container">
       <form>
    <div class="form-group">
	<div class="input-group-prepend">
          <div class="input-group-text">$</div>
        </div>
        <label for="List_Price">List Price</label>
        <input type="text" class="form-control" id="List_Price" name="List_Price" placeholder="List Price">
    </div>
	   <div class="form-group">
        <label for="City">City</label>
        <input type="text" class="form-control" id="City" name="City" placeholder="City">
    </div>
	   <div class="form-group">
        <label for="Sq_Ft_Total">Sq_Ft_Total</label>
        <input type="text" class="form-control" id="Sq_Ft_Total" name="Sq_Ft_Total" placeholder="Sq_Ft_Total">
    </div>
	   <div class="form-group">
        <label for="Property_Style">Property Style</label>
        <input type="text" class="form-control" id="Property_Style" name="Property_Style" placeholder="Property Style">
    </div>
	   <div class="form-group">
        <label for="Beds_Total">Beds_Total</label>
        <input type="text" class="form-control" id="Beds_Total" name="Beds_Total" placeholder="Beds Total">
    </div>
	   <div class="form-group">
        <label for="Bathrooms">Bathrooms</label>
        <input type="text" class="form-control" id="Bathrooms" name="Bathrooms" placeholder="Bathrooms">
    </div>
    
    <button type="button" class="btn btn-primary" id="submit">Submit</button>
	</form>

    </div>
	
	<div style="display:none;border: red 2px solid;float:left;width:50%;">
	<h4>Match Records :</h4>
    <table class="tutorial-table">
        <thead>
            <tr>
                <th>List Price</th>
				<th>Sq_Ft_Total</th>
            </tr>
        </thead>
        <tbody>	
        </tbody>
    </table>
	</div>
	
 

<script src="'.$includesPath.'js/main.js" type="text/javascript"></script>';

    return $Content;
}

	
add_shortcode('siri_plugin', 'siri_plugin');

 
 
 ?>