<?php 
if (!defined('ABSPATH')) die('Restricted Access'); 
$c = JSSTrequest::getVar('page',null,'jsjobs');
$layout = JSSTrequest::getVar('jstlay');
$ff = JSSTrequest::getVar('fieldfor');
?>
<div id="jsstadmin-menu-links">
    <div class="jsst_js-divlink">
        <a href="admin.php?page=jssupportticket">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/admin.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'jssupportticket' && $layout != 'themes') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Admin' , 'js-support-ticket'); ?> <img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=jssupportticket"><span class="jsjobs_text"><?php echo __('Control Panel', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=proinstaller"><span class="jsjobs_text"><?php echo __('Update', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=jssupportticket&jstlay=aboutus"><span class="jsjobs_text"><?php echo __('About Us','js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=jssupportticket&jstlay=translations"><span class="jsjobs_text"><?php echo __('Translations','js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=systemerror"><span class="jsjobs_text"><?php echo __('System Errors', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=jssupportticket&jstlay=shortcodes"><span class="jsjobs_text"><?php echo __('Short Codes', 'js-support-ticket');; ?></span></a>
        </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="admin.php?page=ticket">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/tickets.png'; ?>"/>
        </a>
        <a href="?page=ticket" class="jsst_js-parent <?php if($c == 'ticket' || ($c == 'fieldordering' && $ff == 1) ) echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Tickets' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=ticket"><span class="jsjobs_text"><?php echo __('Tickets', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=ticket&jstlay=addticket"><span class="jsjobs_text"><?php echo __('Create Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=fieldordering&fieldfor=1"><span class="jsjobs_text"><?php echo __('Fields', 'js-support-ticket'); ?></span></a>
          </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="admin.php?page=tickets">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/staff_members.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'staff') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Staff' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
        </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="?page=configuration">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/configuration.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'configuration' || $layout == 'themes') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Configuration' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=configuration"><span class="jsjobs_text"><?php echo __('Configurations', 'js-support-ticket'); ?></span></a>
         
         </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="?page=configuration">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/reports.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'reports') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Reports' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=reports&jstlay=overallreport"><span class="jsjobs_text"><?php echo __('Overall Statistics','js-support-ticket'); ?></span></a>
        </div>
    </div>
     <div class="jsst_js-divlink">
        <a href="admin.php?page=department">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/departments.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'department') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Departments' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
          <a class="jsst_js-child" href="?page=department"><span class="jsjobs_text"><?php echo __('Departments', 'js-support-ticket'); ?></span></a>
          <a class="jsst_js-child" href="?page=department&jstlay=adddepartment"><span class="jsjobs_text"><?php echo __('Add Department', 'js-support-ticket'); ?></span></a>
        </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="admin.php?page=priority">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/priorities.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'priority') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Priorities' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=priority"><span class="jsjobs_text"><?php echo __('Priorities', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=priority&jstlay=addpriority"><span class="jsjobs_text"><?php echo __('Add Priority', 'js-support-ticket'); ?></span></a>
        </div>
    </div>
        <div class="jsst_js-divlink">
        <a href="?page=jssupportticket&jstlay=propage">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/system-emails.png'; ?>"/>
        </a>
         <div class="jsst_js-innerlink">
              </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="?page=jssupportticket&jstlay=propage">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/banned-emails.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'banemail' || $c == 'banemaillog') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Banned Emails' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/><img id="jslefticon" src="<?php echo jssupportticket::$_pluginpath; ?>includes/images/pro-icon.png"></a></span>
        <div class="jsst_js-innerlink">
        
        </div>
    </div>
    <div class="jsst_js-divlink">
        <a href="admin.php?page=emailtemplate">
            <img src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/email-template.png'; ?>"/>
        </a>
        <a href="#" class="jsst_js-parent <?php if($c == 'emailtemplate') echo 'jsst_lastshown'; ?>"><span class="jsst_text"><?php echo __('Email Templates' , 'js-support-ticket'); ?><img class="jsst_arrow" src="<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>"/></span></a>
        <div class="jsst_js-innerlink">
            <a class="jsst_js-child" href="?page=emailtemplate&for=tk-nw"><span class="jsjobs_text"><?php echo __('New Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=cl-tk"><span class="jsjobs_text"><?php echo __('Close Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=dl-tk"><span class="jsjobs_text"><?php echo __('Delete Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=rsp-tk"><span class="jsjobs_text"><?php echo __('Response Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=rpy-tk"><span class="jsjobs_text"><?php echo __('Reply Ticket', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=tk-ew-ad"><span class="jsjobs_text"><?php echo __('New Ticket Admin Alert', 'js-support-ticket'); ?></span></a>
            <a class="jsst_js-child" href="?page=emailtemplate&for=pc-tk"><span class="jsjobs_text"><?php echo __('Ticket Priority Is Changed By', 'js-support-ticket'); ?></span></a>
        </div>
    </div>
    </div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("img#jsst_js-admin-responsive-menu-link").click(function(e){
            e.preventDefault();
            if(jQuery("div#jsstadmin-leftmenu").css('display') == 'none'){
                jQuery("div#jsstadmin-leftmenu").show();
                jQuery("div#jsstadmin-leftmenu").width(280);
                jQuery("div#jsstadmin-leftmenu").find('a.jsst_js-parent,a.jsst_js-parent2').show();
                jQuery('a.jsst_js-parent.jsst_lastshown').next().find('a.jsst_js-child').css('display','block');
                jQuery('a.jsst_js-parent.jsst_lastshown').find('img.jsst_arrow').attr("src","<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow2.png'; ?>");
                jQuery('a.jsst_js-parent.jsst_lastshown').find('span').css('color','#ffffff');
            }else{
                jQuery("div#jsstadmin-leftmenu").hide();
            }
        });
        jQuery("div#jsstadmin-leftmenu").hover(function(){
            jQuery(this).find('#jsstadmin-menu-links').width(280);
            jQuery(this).find('a.jsst_js-parent,a.jsst_js-parent2').show();
            jQuery('a.jsst_js-parent.jsst_lastshown').next().find('a.jsst_js-child').css('display','block');
            jQuery('a.jsst_js-parent.jsst_lastshown').find('img.jsst_arrow').attr("src","<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow2.png'; ?>");
            jQuery('a.jsst_js-parent.jsst_lastshown').find('span').css('color','#ffffff');
        },function(){
            jQuery(this).find('#jsstadmin-menu-links').width(65);
            jQuery(this).find('a.jsst_js-parent,a.jsst_js-parent2').hide();
            jQuery('a.jsst_js-parent.jsst_lastshown').next().find('a.jsst_js-child').css('display','none');
            jQuery('a.jsst_js-parent.lastshown').find('img.jsst_arrow').attr("src","<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>");
            jQuery('a.jsst_js-parent.lastshown').find('span').css('color','#acaeb2');
        });
        jQuery("a.jsst_js-child").find('span.jsst_text').click(function(e){
            jQuery(this).css('color','#ffffff');
        });
        jQuery("a.jsst_js-parent").click(function(e){
            e.preventDefault();
            jQuery('a.jsst_js-parent.jsst_lastshown').next().find('a.jsst_js-child').css('display','none');
            jQuery('a.jsst_js-parent.jsst_lastshown').find('span').css('color','#acaeb2');
            jQuery('a.jsst_js-parent.jsst_lastshown').find('img.jsst_arrow').attr("src","<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow1.png'; ?>");
            jQuery('a.jsst_js-parent.jsst_lastshown').removeClass('jsst_lastshown');
            jQuery(this).find('span').css('color','#ffffff');
            jQuery(this).addClass('jsst_lastshown');
            if(jQuery(this).next().find('a.jsst_js-child').css('display') == 'none'){
                jQuery(this).next().find('a.jsst_js-child').css({'display':'block'},800);
                jQuery(this).find('img.jsst_arrow').attr("src","<?php echo jssupportticket::$_pluginpath.'includes/images/left-icons/arrow2.png'; ?>");
            }
        });
    });
</script>