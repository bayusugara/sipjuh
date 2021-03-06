<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?=base_url();?>assets/images/riau.ico">

        <title>Sistem Informasi Pendaftaran Jamaah Umroh dan Haji - PT. Bimalyndo Hajar Aswad</title>

        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>assets/css/tami.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?=base_url();?>assets/js/modernizr.min.js"></script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading text-center">
					<img src="<?=base_url()?>assets/images/BimalyndoHajarAswad.png" height="100">
					<h3 style="font-size: 18px;"> <strong>Sistem Informasi Pendaftaran Jamaah Umroh dan Haji</strong></h3>
					<h4><strong class="text-custom">PT. Bimalyndo Hajar Aswad</strong></h4>
				</div>

				<div class="panel-body">
					
					<form action="<?=base_url('LoginController/cekLogin');?>" method="POST" enctype="multipart/form-data" class="form-horizontal m-t-20" >
						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="username" name="username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="password" name="password">
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-default btn-block btn-lg waves-effect waves-light" type="submit" name="login" value="login">Log-in</button>
							</div>
						</div>
					</form>
					

				</div>
			</div>

		</div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/detect.js"></script>
        <script src="<?=base_url();?>assets/js/fastclick.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url();?>assets/js/waves.js"></script>
        <script src="<?=base_url();?>assets/js/wow.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?=base_url();?>assets/js/jquery.core.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.app.js"></script>
	
	</body>
</html>