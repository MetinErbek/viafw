<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Photos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo assets('css/styles.css');?>" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" rel="stylesheet" />
		
		
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Ülker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo site_url('login/logout');?>">Logout</a></li>
                        <!--
						<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
						--->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
			 <div class="row" style="padding-top:50px;">
			 <?php foreach($Photos as $photo):?>
				<div class="col-md-2 text-center " >
					<img style="width:100%;height:auto" src="<?php echo '../'.$photo['image'];?>">
					<br><a href="javascript:void(0)" class="deletebtn" data-url="<?php echo site_url('deleteimg?img='.$photo['images_id']);?>" style="text-decoration:none;color:Red;font-size:12px;">x Delete</a>
					<br><span style="font-size:10px"><?php echo date('d.m.Y H:i:s', strtotime($photo['create_date']));?></span>
					<br><br>
				</div>
			 <?php endforeach;?>
			 </div>
			 
			 <br style="clear:both">
			 
			 <div class="row">

				<?php if ($Total_Page > 0): ?>
					<div aria-label="Page navigation" class="col-md-6 text-right pull-right">
						<ul class="pagination pagination-sm justify-content-end mt-2">
							<li class="page-item"><a class="page-link before" data-number="<?php echo 1; ?>" href="<?php echo make_page_url($_GET, 'req_page', 1); ?>"><?php echo ('First'); ?></a></li>
							<?php if ($req_page - 1 > 0): ?>
							<li class="page-item previous"><a class="page-link before" data-number="<?php echo $req_page - 1 ?>" href="<?php echo make_page_url($_GET, 'req_page', $req_page - 1); ?>"> < </a></li>
							<?php endif; ?>
							<?php if (isset($req_page) && $req_page != 1): ?>
								<li class="page-item"><a class="page-link" href="<?php echo make_page_url($_GET, 'req_page', $req_page - 1); ?>"><?php echo $req_page - 1; ?></a></li>
							<?php endif; ?>
							<li class="page-item active"><a class="page-link" href="<?php echo make_page_url($_GET, 'req_page', $req_page); ?>"><?php echo $req_page; ?></a></li>
							<?php if (isset($req_page) && $req_page != $Total_Page): ?>
								<li class="page-item"><a class="page-link" href="<?php echo make_page_url($_GET, 'req_page', $req_page + 1); ?>"><?php echo $req_page + 1; ?></a></li>
							<?php endif; ?>
							<?php if ($req_page + 1 < $Total_Page): ?>    
								<li class="page-item next"><a class="page-link next" data-number="<?php echo $req_page + 1 ?>" href="<?php echo make_page_url($_GET, 'req_page', $req_page + 1); ?>"> > </a></li>
							<?php endif; ?>
							<li class="page-item"><a class="page-link last" data-number="<?php echo $Total_Page ?>" href="<?php echo make_page_url($_GET, 'req_page', $Total_Page); ?>"><?php echo ('Last'); ?></a></li>
						</ul>
					</div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			 
			 
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="<?php echo assets('js/scripts.js');?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				
				
				$('.deletebtn').on('click', function(){
					var realURL = $(this).data('url');
					Swal.fire({
					  title: 'Are you sure?',
					  text: "You won't be able to revert this!",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
					  if (result.isConfirmed) {
						document.location.href=realURL;
					  }
					})
					
					
				})
				
				
				
				<?php if(isset($form_error) && !empty($form_error)):?>
				
					Swal.fire({
					  title: 'Error!',
					  text: '<?php echo $form_error;?>',
					  icon: 'error',
					  confirmButtonText: 'Close'
					})
				
				<?php endif;?>
				
			})
		
		
		</script>
		
    </body>
</html>
