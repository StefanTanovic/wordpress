<?php
$wssopt = get_option('wpbs_opt');

if (false == $wssopt) {
    $wssopt = array(
        'facebook_url' => 'https://www.facebook.com',
        'twitter_url' => 'http://www.twitter.com',
        'email_url' => 'info@email.com',
        'youtube_url' => 'http://www.youtube.com',
        'phone_url' => '6130000000',
        'background_color' => '#3b94e3',
        'text_color' => '#ffffff',
        'spos' => '100',
        'position' => 'left',
    );
    update_option('wpbs_opt', $wssopt);
    extract($wssopt);
} else {
    extract($wssopt);
}
?>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<style type="text/css">
    a{
        text-decoration: none;
    }
    .wrap{
        background: #f0f0f0;
        border: 1px solid #d0d0d0;
        box-shadow: 0 0 5px #333333; 
        -moz-box-shadow: 0 0 5px #333333; 
        -webkit-box-shadow: 0 0 5px #333333;
        padding: 10px;
        font-family: calibri;
		overflow:hidden;
    }
    #wrapper{
        float: left;
        width: 500px;"
    }

    .button-primary{
        display: inline-block;
        text-decoration: none;
        font-size: 12px;
        line-height: 23px;
        height: 24px;
        margin: 0;
        padding: 0 10px 1px;
        cursor: pointer;
        border-width: 1px;
        border-style: solid;
        -webkit-border-radius: 3px;
        -webkit-appearance: none;
        border-radius: 3px;
        white-space: nowrap;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;

        box-sizing: border-box;
        text-shadow: none !important;
        background: #B0CB1F !important;
        color: #393F42 !important;
        border: none !important;
    }
    .button-primary:hover{
        background: #393F42 !important;
        color: #B0CB1F !important;
    }
    input[type='text']{
        padding: 5px;
        font-size: 16px;
        border: 1px solid #d0d0d0;
        transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
    }
    input[type='text']:hover{
        box-shadow: 0 0 2px #B0CB1F;

    }
    input[type='text']:focus{
        border: 1px solid #B0CB1F;
        box-shadow: 0 0 5px #B0CB1F;
    }
    .settings-sidebar{
        width: 100%;
        background: #393F42;
        color: #ffffff;
        padding: 10px 5px 10px 10px;
        margin-right: 10px;
        border-bottom: 2px solid #f0f0f0;
        border-left: 5px solid #f0f0f0;
        transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
    }
    .settings-sidebar:hover{
        border-left: 5px solid #B0CB1F;
    }
    .settings-sidebar .title{
        color: #B0CB1F;
    }
    #plugin-title{
        line-height: 50px;
    }
    .font{
        font-family: 'Playball', cursive;
        color: #fff;
        border-bottom: 2px solid #B0CB1F;
        font-size: 35px;
    }


</style>

<div class="wrap">
    <h2 id="plugin-title" style="font-family: calibri"><div id="icon-tools" class="icon32"><br></div>Sliding Social Icons</h2> <br>
    <div style="clear: both;"></div>
    <div  style="float: right;width: 350px;margin-right:10px;">
        <div class="settings-sidebar">
            <h1 class="title">Upgrade to Pro version</h1>
            <p>
				<a href="http://smartcatdesign.net/sliding-social-icons-pro/" target="_blank" class="button-primary">Go Pro</a>
			</p>
        </div>
        <div class="settings-sidebar">
            <h1 class="title">Support This Plugin</h1>
            <p>
                Support this plugin by making a donation of any amount!  
            </p>
            <p>
                This is a free plugin, please <a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/sliding-social-icons">write a review here</a>
            </p>
            <p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="business" value="sales@ottawapc.ca"> 
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="Donation">
                <label>Enter any Donation Amount:</label>
                <input type="text" name="amount" placeholder="Enter donation amount in $">    
                <input class="button-primary" type="submit" border="0" name="submit" value="Donate">
            </form>
            </p>

        </div>
        <div class="settings-sidebar">
            <h1 class="title" style="text-align:center"><span class="font">SmartCat</span></h1>
            <div class="social">
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSmartcatDesign&amp;width=300&amp;height=35&amp;colorscheme=dark&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=233286813420319" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>
            </div>
            <p>
                <a href="http://smartcatdesign.net/sliding-social-icons-free-wordpress-plugin/" target="_blank" class="-primary" style="color:#ffffff">Plugin Page</a>
            </p>
            <p>
                <a href="http://smartcatdesign.net/sliding-social-icons-free-wordpress-plugin/" target="_blank" class="-primary" style="color:#ffffff">Support</a>
            </p>
        </div>
    </div>
    <div id="wrapper">
        <form action="" method="post" id="wptb">
            <input type="hidden" name="action" value="wpbs_save_settings">
            <div class="inside">
                <div class="boxdiv">

                   <script type="text/javascript">
   
                        jQuery(document).ready(function(){
						
							jQuery("#ssi-shortcode").focusout(function(){
								var shortcode = jQuery(this).val();
								shortcode = shortcode.replace(/"/g,"").replace(/'/g,"");
								jQuery(this).val(shortcode);
							});
						
						
                            jQuery('#bg_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            }); 
                
                            jQuery('#label_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            });
        
                            jQuery('#text_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            });
        
                        }); 
                    </script>
                    <div class="sbox" id="box1">

                        <div class="sbcont" id="sbcont-box1" >
                            <table cellpadding="5" cellspacing="0" border="0" class="box_tbl">


                                <tr>
                                    <td colspan="2">
                                        <label>Facebook url</label><br>
                                        <input type="text" name="wpbs__opt[facebook_url]" value="<?php echo $facebook_url; ?>" size="62" />
                                    </td>
                                </tr>
                                
								<tr>
                                    <td colspan="2">
                                        <label>Google Plus URL</label><br>
                                        <input type="text" name="wpbs__opt[gplus_url]" value="<?php echo $gplus_url; ?>" size="62" />
                                    </td>
                                </tr>
								
                                <tr>
                                    <td colspan="2">
                                        <label>Youtube url</label><br>
                                        <input type="text" name="wpbs__opt[youtube_url]" value="<?php echo $youtube_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>LinkedIn URL</label><br>
                                        <input type="text" name="wpbs__opt[linkedin_url]" value="<?php echo $linkedin_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Contact Us Page URL</label><br>
                                        <input type="text" name="wpbs__opt[email_url]" value="<?php echo $email_url; ?>" size="62" />
                                    </td>
                                </tr>
								<tr>
                                    <td colspan="2">
                                        <label>Contact Form Shortcode</label><br>
                                        <input id="ssi-shortcode" type="text" name="wpbs__opt[contact_shortcode]" value="<?php echo $contact_shortcode; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Twitter URL</label><br>
                                        <input type="text" name="wpbs__opt[twitter_url]" value="<?php echo $twitter_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Instagram URL</label><br>
                                        <input type="text" name="wpbs__opt[instagram_url]" value="<?php echo $instagram_url; ?>" size="62" />
                                    </td>
                                </tr>								
                                <tr>
                                    <td colspan="2">
                                        <label>Phone Number</label><br>
                                        <input type="text" name="wpbs__opt[phone_url]" value="<?php echo $phone_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Pinterest url</label><br>
                                        <input type="text" name="wpbs__opt[pinterest_url]" value="<?php echo $pinterest_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr><td>

                                        <label>Position</label><br>

                                        <select class="ps" rel="box1" name="wpbs__opt[position]">
                                            <option value="left" <?php if ($position == "left") echo 'selected="selected"'; ?>>left</option>
                                            <option value="right" <?php if ($position == "right") echo 'selected="selected"'; ?> disabled>right -Pro Version-</option>
                                        </select>

                                    </td><td>

                                        <label id="spos_box1"><?php if ($position == "left" || position == "right") echo "Top";else echo "Left"; ?></label><br>
                                        <input type="text" name="wpbs__opt[spos]" value="<?php echo $spos ?>" size="10" />px

                                    </td></tr>
                                <tr>
                                    <td>

                                        <label>Background color</label><br>
                                        <input type="text" id="bg_colorbox" name="wpbs__opt[background_color]" value="<?php echo $background_color ?>" size="10" /><br />
                                        <label>Text color</label><br>
                                        <input type="text" id="text_colorbox" name="wpbs__opt[text_color]" value="<?php echo $text_color; ?>" size="10" />

                                    </td></tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" name="wpbs__opt[disable]" value="1" <?php if ($disable == 1) echo 'checked="checked"'; else echo ''; ?>> Disable/Hide
                                    </td></tr>
                            </table>

                            <div style="clear: both;">&nbsp;</div>
                        </div>     
                   
                </div>

                </div>
                <br>
                <input type="submit" id="btn" class="button-primary" value="Save Settings"> 
                <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> saving...</span><br /><br />

            </div>
            <br clear="all" />
            <br clear="all" />
        </form>  
    </div> 
    <br>
    <br>
</div>
<br clear="all" />
<br clear="all" />

<script language="JavaScript">
    <!--
    window.onload=changeps;
    function changeps(){
        if(jQuery('.ps').val()=="left"||jQuery('.ps').val()=="right"){
            jQuery('#spos').text("Top");
        }else{
            jQuery('#spos').text("Left");
        }
    }
    jQuery('.ps').live("change",function(){        
        if(jQuery(this).val()=="left"||jQuery(this).val()=="right"){
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Top");
        }else{
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Left");
        }        
    });
    
    jQuery('#wptb').submit(function(){
        jQuery(this).ajaxSubmit({
            'url': ajaxurl,
            'beforeSubmit':function(){
                jQuery('#loading').fadeIn();
            },
            'success':function(res){
                jQuery('#loading').fadeOut();
            }
        });
        return false;
    });
    //-->
</script>