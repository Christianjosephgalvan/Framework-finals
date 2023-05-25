<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Operations In CI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	
	<div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="phoneModalLabel">Add New Phone</h1>
					
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(); ?>crud/addProduct" method="POST">
					<div class="modal-body">
						<div class="form-group mb-3">				    
							<input type="text" name="brand" class="form-control" placeholder="Brand" required>
						</div>
						<div class="form-group mb-3">				   
							<input type="text" name="price" class="form-control" placeholder="Enter Price" required>
						</div>
						<div class="form-group mb-3">				   
							<input type="text" name="color" class="form-control" placeholder="Enter Color" required>
						</div>
						<div class="form-group mb-3">				   
							<input type="date" name="date_release" class="form-control" placeholder="" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-sharp fa-solid fa-xmark"></i>&nbsp;Close</button>
						<button type="submit" name="btnSave" class="btn btn-primary"><i class="fa-solid fa-download"></i>&nbsp;Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="jumbotron">
		<h1 align="center">TechnoGadgets</h1>
	</div>
	
	<div class="container mt-5">
		<?php if ($this->session->flashdata('inserted')): ?>

			<div  class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo $this->session->flashdata('inserted'); ?>
				<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		<?php endif; ?>
		<?php if ($this->session->flashdata('updated')): ?>

			<div  class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo $this->session->flashdata('updated'); ?>
				<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		<?php endif; ?>

		<?php if ($this->session->flashdata('deleted')): ?>

			<div  class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo $this->session->flashdata('deleted'); ?>
				<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		<?php endif; ?>
		<div class="row">
  			<div class="col-md-12">
  				<div class="card">
  					<div class="card-header">
  						<h5 class=" card-title">Mobile Phones
  							<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#phoneModal" style="float: right;"><i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i>&nbsp;Add Phone</button>
  						</h5>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">Brand</th>
									<th scope="col">Price</th>
									<th scope="col">Color</th>
									<th scope="col">Date Release</th>
									<th scope="col" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($product_details as $product): ?>
									<tr>
										<td><?php echo $product->brand;?></td>
										<td><?php echo $product->price;?></td>
										<td><?php echo $product->color;?></td>
										<td><?php echo $product->date_release;?></td>
										<td class="text-center">
											<a href="<?php echo base_url(); ?>crud/editProduct/<?php echo $product->id; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
											<a href="<?php echo base_url(); ?>crud/deleteProduct/<?php echo $product->id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</div>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="js/index.js"></script>	
</body>
</html>