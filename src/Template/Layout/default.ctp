<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Trading Desk</title>
      <?= $this->Html->charset();?>
      <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
      <!-- css-->
      <?= $this->Html->script(['jquery.js', 'bootstrap.min.js','bootstrap-select.js']);?>
      <?= $this->Html->css('font-awesome.css');?>
      <?= $this->Html->css('font-awesome.min.css');?>
      <?= $this->Html->css('bootstrap.min.css');?>
      <?= $this->Html->css('style.css');?>
      <?= $this->Html->css('bootstrap-select.css');?>
      <?= $this->Html->css('bootstrap-tagsinput.css');?>
      <?= $this->Html->css('app.css');?>    
     
      <?= $this->fetch('meta') ?>
            <?= $this->fetch('css') ?>
            <?= $this->fetch('script') ?>
    
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
   <body>
   
    <div class="wrapper">
      
      <!-- header -->
      <div class="navigation">
        <div class="container">
        
                <table>
                    <tbody><tr>
                        <td>
                        <a href="#"><img src="img/logo.png" id="logo"></a>
                        </td>
            
                        <td>
                        <ul class="nav-center">
                        <li class="active"><a href="dashboard.html">Dashboard</a></li>
                        <li><?= $this->Html->link(__('Campaigns'), ['controller' => 'overview_campaign', 'action' => '']) ?></li>
                        <li><a href="inventory.html">Inventory</a></li>
                        <li><a href="invoice.html">Billing</a></li>
                        </ul>
                        </td>
                        
                        <td>
                        <ul class="nav-right">
                        <li>Balance: $245,999</li>
                        <li><a href="add_funds.html">&nbsp;</a></li>
                        <li><a href="add_campaign.html">&nbsp;</a></li>
                        <li><a href="profile.html">&nbsp;</a></li>
                        <li> <?= $this->Html->link(__(''), ['controller' => 'Users', 'action' => 'login']) ?>
                        &nbsp;</li>
                        </ul>
                        </td>
                    </tr></tbody>
                </table>    
            
      </div>
      </div>
        
      <!-- end/header -->
      <div class="container">

      <?= $this->fetch('content');?>

      </div>
      
    </div>



        <script type="text/javascript">
        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
              dropupAuto: false
            });

            // $('.selectpicker').selectpicker('hide');
        });
      </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
    <script src="dist/bootstrap-tagsinput.min.js"></script>
    <script src="dist/bootstrap-tagsinput/bootstrap-tagsinput-angular.min.js"></script>   
        
       <script>
            
            $(function(){
    var myObjects = [
        {
            id: 1,
            axis: "12AM",
            bar: "59",
            value: "120k",
        },
        {
            id: 2,
            axis: "02AM",
            bar: "92",
            value: "99k",
        },
        {
            id: 3,
            axis: "04AM",
            bar: "151",
            value: "5.5k",
        },
        {
            id: 4,
            axis: "06AM",
            bar: "178",
            value: "900",
        },
        {
            id: 5,
            axis: "08AM",
            bar: "230",
            value: "22k",
        },
        {
            id: 6,
            axis: "10AM",
            bar: "247",
            value: "30k",
        },
        {
            id: 7,
            axis: "12PM",
            bar: "258",
            value: "60k",
        },
        {
            id: 8,
            axis: "02PM",
            bar: "230",
            value: "99k",
        },
        {
            id: 9,
            axis: "04PM",
            bar: "206",
            value: "220k",
        },
        {
            id: 10,
            axis: "06PM",
            bar: "179",
            value: "524k",
        },
        {
            id: 11,
            axis: "08PM",
            bar: "150",
            value: "2.2m",
        },
        {
            id: 12,
            axis: "10PM",
            bar: "65",
            value: "852k",
        },
    ];
    var content = "12PM - 02PM <br> <strong>3,273,121,943,123</strong>";
    var html = '';
    var opacity = 1;
    $.each(myObjects, function(){
    
        if(this.bar >= 0 && this.bar <=100)
        {
        opacity = 0.15;
        }
        if(this.bar >= 101 && this.bar <=180)
        {
        opacity = 0.25;
        }
        if(this.bar >= 181)
        {
        opacity = 1;
        }
    
    
        html += '<div class="graph-view"><div data-toggle="popover" data-placement="top" data-content="'+content+'" class="graph-bar" style="height: '+this.bar+'px; background-color: rgba(255,81,0,'+opacity+');">';
        html += '<span class="graph-x">'+this.axis+'</span>';
        html += '</div></div>';
    });
    
    $('.bar-3').html( html );
    
});
            
            </script>
    
        <script type="text/javascript">
        $(document).ready(function(){
            $(".graph-bar").popover({ trigger: "hover", html : true });
        });
       </script>
   </body>
</html>
