
<?php $this->layout = false ;?>
<!DOCTYPE html>
<html>
   <head>
      <title>Trading Desk</title>
      <?= $this->Html->charset();?>
      <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
      <!-- css-->
      <?= $this->Html->script(['jquery.js', 'bootstrap.min.js','bootstrap-select.js','jquery-1.11.1.js',
      	'jquery.validate.js'

      ]);?>
      <?= $this->Html->css('font-awesome.css');?>
      <?= $this->Html->css('font-awesome.min.css');?>
      <?= $this->Html->css('bootstrap.min.css');?>
      <?= $this->Html->css('style.css');?>
      <?= $this->Html->css('bootstrap-select.css');?>
      <?= $this->Html->css('bootstrap-tagsinput.css');?>
      <?= $this->Html->css('app.css');?>    
 	  <?= $this->Html->css('base.css') ?>
 	  <?= $this->Html->css('cake.css') ?>
      <?= $this->fetch('meta') ?>
            <?= $this->fetch('css') ?>
            <?= $this->fetch('script') ?>
    
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <script>
   /* SUBMIN FoRM
	/*$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!"); 
		}
	});*/
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 3
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 3 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy",
				topic: "Please select at least 2 topics"
			}
		});

		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});
	});

    </script>
   <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->
	<script>
			$(document).ready(function(){
			//$(this).val('My textfield changed');
				if($('select').val() == 0) {
					$('select').removeClass("check").addClass( "blackselect" );
				} else {
					$('select').removeClass("blackselect").addClass( "check" );
					$('.bootstrap-select.ct').removeClass("blackselect").addClass( "check" );
				}
				
				$('.selectpicker').selectpicker('refresh');
				
				});
	
			</script>	
   </head>
   <body id="wrapper_sign">
   		
		<div class="wrapper_in_out">
			<div class="responsive-container">
				<div class="dummy"></div>

				<div class="img-container">
					
					<div class="login">
					<div class="field_form edits">
				<a href="#" id="logo"><?= $this->Html->image('logo_1.png', ['alt' => 'CakePHP']);?></a>
         		<?= $this->Form->create('Dashboard',['class'=>'myForrm','id'=>'signupForm','action'=>'login']);?>
         		<!--<form class="myForm" action="#" id="signupForm">-->
				<span>E-Mail address & password</span>
				<?= $this->Flash->render()?>
				<br><br>
				<div class="for-group">
				<?= $this->Form->input('email',
				 		array( 'lable'=>false,
				 			'required'=>true,
				 		    'type'=>'email',
				 		    'placeholder'=>'Email Address'  
				 		         ));?>
				 
				</div>
				<div class="for-group">
				<!--<input id="password" type="password" name="password">-->
				<?= $this->Form->input('password',
				 		array( 'lable'=>false,
				 			'required'=>true,
				 		    'type'=>'password',
				 		    'placeholder'=>'Password'  
				 		         ));?>
				<span>Min. 3 characters, 1 number, 1 capital letter</span>
				</div>
				
				
				<div class="for-group-select">
				<div class="squareSelect">
					<input type="checkbox" value="None" id="squareSelect" name="check" />
					<label for="squareSelect"></label>
				</div>
				<div class="for-select">
				<label>Stay signed in | <a class="fontStrong" id="signUp" href="#">Sign up</a> | <a href="#forgot">Lost password?</a></label>
				</div>
				</div>
				<?= $this->Form->button('Submit Form', ['type' =>'Login']);?>
				<?= $this->Form->end() ?>

				
				
				<form class="myForm" action="#" id="sign_up">
				<span>Please enter your details</span>
				<br><br>
				<div class="for-group">
				<input type="email" required value="david@sixtysixideas.com" placeholder="Email address">
				</div>
				<div class="for-group">
				<input type="password" value="sssssssssssssssssss" placeholder="Password" required>
				<span>Min. 8 characters, 1 number, 1 capital letter</span>
				</div>
				<div class="for-group">
				<input type="password" required placeholder="Repeat password">
				</div>
				<div class="for-group">
				<input type="text" required value="MagicLabs (Malaysia) Sdn. Bhd.">
				</div>
				<div class="for-group">
				<input type="text" required value="David Wagenleiter">
				</div>
				<div class="for-group">
				<input type="text" required placeholder="Address line 1">
				</div>
				<div class="for-group">
				<input type="text" required placeholder="Address line 2">
				</div>
				<div class="for-group">
				<input type="text" required placeholder="ZIP" style="width: 28%; margin-right: 4%;">
				<input type="text" required placeholder="City" style="width: 68%;">
				</div>
				<div class="for-group">
					<select class="selectpicker check">
					<option value="0">Country</option>
					<option value="1">1</option>
					<option value="2">12</option>
					<option value="3">123</option>
					</select>
				</div>
				<div class="for-group" style="margin-top: 2px;">
				<input type="text" placeholder="Phone number" required>
				</div>
				
				<div class="for-group-select">
				<div class="squareSelect">
					<input type="checkbox" value="None" id="squareSelect1" name="check" />
					<label for="squareSelect1"></label>
				</div>
				<div class="for-select">
				<label>I have read & accept the <a href="#">Terms & Conditions</a></label>
				</div>
				</div>
				<button type="submit" id="myButton">Sign up</button>
				</form>
			</div>
					
					</div>
					
				</div>
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
	  
	  <script>
		$('#signUp').click(function() {
			$('#sign_in').hide();
			$('#sign_up').show("slide");
			
		});
	  </script>
	    <script>
	
			$('select').change(function() {
				
				//$(this).val('My textfield changed');
				if($(this).val() == 0) {
					$(this).removeClass("check").addClass( "blackselect" );
				} else {
					$(this).removeClass("blackselect").addClass( "check" );
					$('.bootstrap-select').removeClass("blackselect").addClass( "check" );
				}
				$('.selectpicker').selectpicker('refresh');
			});
	
	  </script>	
	 
	
   </body>
</html>