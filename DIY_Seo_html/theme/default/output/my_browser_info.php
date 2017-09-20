<?php
defined('APP_NAME') or die(header('HTTP/1.0 403 Forbidden'));

/*
 * @author Balaji
 * @name A to Z SEO Tools - PHP Script
 * @copyright © 2015 ProThemes.Biz
 *
 */
?>

 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $p_title; ?> 
            <small>Control panel</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
  <div class="row">
      	
          	<div class="col-md-8 main-index">
            
            <div class="xd_top_box">
             <?php echo $ads_720x90; ?>
            </div>
            
                <h2 id="title"><?php echo $data['tool_name']; ?></h2>
                <?php if ($pointOut != 'output') { ?>
                    <br /><br />
                        <table class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><strong><?php echo $lang['175']; ?></strong></td>
                                             <td><span class="badge bg-green"><?php   echo $browser; ?></span></td>

                                        </tr>
                                        <tr>
                                            <td><strong><?php echo $lang['176']; ?></strong></td>
                                            <td><span class="badge bg-aqua"><?php   echo $version; ?></span></td>

                                        </tr>
                                        <tr>
                                           <td><strong><?php echo $lang['177']; ?></strong></td>
                                            <td><span class="badge bg-purple"><?php   echo $platform; ?></span></td>
                                        </tr>
                                        <tr>
                                           <td><strong><?php echo $lang['178']; ?></strong></td>
                                           <td><span class="badge bg-orange"><?php   echo $myUA; ?></span></td>
                                        </tr>
                                    </tbody>
                                    
        </table>  
                          
               <?php 
               } 
               ?>

<br />

<div class="xd_top_box">
<?php echo $ads_720x90; ?>
</div>

<h2 id="sec1" class="about_tool"><?php echo $lang['11'].' '.$data['tool_name']; ?></h2>
<p>
<?php echo $data['about_tool']; ?>
</p> <br />
</div>              
            
<?php
// Sidebar
require_once(THEME_DIR."sidebar.php");
?>     		
                        </div><!--row -->
      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   <br />