<div class="content-body pd-t-30 d-flex flex-column content-card-body ">
        <!-- <div class="pricing-header mg-b-25 mg-md-b-35 mg-lg-b-45">
          <label class="content-label content-label-lg tx-10 tx-sm-11 tx-md-12 tx-primary mg-b-2 tx-spacing-2">Simple Pricing That Fit For Your Needs</label>
          <h1 class="tx-24 tx-md-32 tx-xl-36 tx-normal tx-color-01">Choose the right plans for your business</h1>
          <p class="tx-md-16 tx-color-03 mg-b-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
        </div> -->

		<div class="row ">
			<div class="col-md-9">
			<ul class="nav nav-pillsService">

				<?php foreach($teams as $item){?>

				
				<li class="nav-item">
					<a class="nav-link  btn-team btn-info <?php if(($items1->team_id) == ($item->team_id)) {echo "active";}?>" data-toggle="pill" href="#<?php echo $item->name?>" role="tab" aria-controls="pills-<?php echo $item->name?>" aria-selected="true"><?php echo $item->name?></a>
				</li>


				<?php } ?> 



			</ul>
			</div>
			<div class="col-md-3 mt-1 " style="align-items:right;justify-content:right;">
				<a href="javascript: void(0)" data-toggle="modal" data-animation="effect-scale" class="text-white ml-3" id="my"><button id="btnCheck" style="border-radius: 8px;"  class="btn btn-submit text-white btn-all py-2">New Project</button></a>
				<a href=""  data-toggle="modal" data-animation="effect-scale" class="text-white" id="link2"><button id="btnCheck1" style="border-radius: 8px;"  class="btn btn-submit ml-3 text-white btn-all py-2">Add to project</button></a>
			</div>
		</div>
        <div class="" style="margin-top:10px;" >
          
        <!-- <ul class="nav nav-pillsService">

		  	<?php foreach($teams as $item){?>

				
				<li class="nav-item">
					<a class="nav-link  btn-team <?php if(($items1->team_id) == ($item->team_id)) {echo "active";}?>" data-toggle="pill" href="#<?php echo $item->name?>" role="tab" aria-controls="pills-<?php echo $item->name?>" aria-selected="true"><?php echo $item->name?></a>
				</li>


			<?php } ?> 

           
		  
		</ul> -->

					<!-- <div class="px-3 mt-2" style="text-align:right;margin-left:-30rem;">
						
						<a href="javascript: void(0)" data-toggle="modal" data-animation="effect-scale" class="text-white mx-2" id="my"><button id="btnCheck" style="border-radius: 8px;"  class="btn btn-all text-white  py-2">New Project</button></a>
						<a href=""  data-toggle="modal" data-animation="effect-scale" class="text-white" id="link2"><button id="btnCheck1" style="border-radius: 8px;"  class="btn btn-all text-white  py-2">Add to project</button></a>
					</div> -->
                   
					<div class=" mt-2 card bg-transparent " style="border-radius: 8px;margin-bottom:2rem !important;" >
						<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
						
						<!-- <div class="card-header bg-transparent pd-l-15 pd-r-0" style="margin-bottom:-0.1rem;">
									<h6 class="card-title mg-b-0" style="margin-top:1px;margin-bottom:-6px;">Packages</h6>
									<nav class="nav">
									<a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
									<a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
									</nav>
              	
								</div> -->
								<div class="card-body  mb-5">

                   
		  <form action="<?php echo base_url();?>index.php/ClientPackage/addNewProj" method="post">

		  <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content px-5 py-5 "style="border-radius:10px" >
											<div class="modal-header">
												<h6 class="modal-title" id="exampleModalLabel6">New Project</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i data-feather="x"></i></span>
												</button>
											</div>
											<div class="modal-body">
										
											<div class="form-group">
												<label for="exampleInputEmail1">Project Name</label>
												<input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
													name="name" placeholder="Enter Name" style="border-radius:10px">
											</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-dark"  name="btn_addnewproj" value="addNew" style="border-radius: 8px;" >Create</button></a>
											</div>
										
										</div>
									</div>
    							</div>

								<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content px-5 py-5" style="border-radius:10px">
											<div class="modal-header">
												<h6 class="modal-title" id="exampleModalLabel6">Add to Project</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i data-feather="x"></i></span>
												</button>
											</div>
											<div class="modal-body">
												
													<div class="form-group">
														
														<label for="exampleInputEmail1">Project Name</label>
														<!-- <input type="text" id="check2" value=""> -->
														<span id = "check2" style="color:red"> </span>
														<select class="custom-select m-input" 
																				style="border-radius:10px;width:26rem;"
																				name="project_id" id="project_i">
																				<option value = "">-- Select Project --</option>

														<?php  foreach($projects as $project){?>

															<option value="<?php echo $project->project_id?>"><?php echo $project->name?></option>
															
														<?php } ?>
														</select>
														<span id = "check3" style="color:red"> </span>
													</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClear">Close</button>
														<button type="submit" class="btn btn-dark" name="btn_addtoproj" value="AddTo" id="btnAdd" disabled style="border-radius: 8px;">Add To Project</button></a>
													</div>
												
										</div>
								</div>
								</div>									

            <div class="tab-content mt-1">
				

				<?php foreach($teams as $item1){?>

				<div class="tab-pane fade show <?php if(($items1->team_id) == ($item1->team_id)) {echo "active";}?>" id="<?php echo $item1->name?>" role="tabpanel" aria-labelledby="<?php echo $item1->name?>-tab">
					
							<div class="pricing-wrapper mg-lg-b-40">
								
									<div class="row row-xs mt-5" style="display:flex;align-items:left;justify-content:left;margin-left:1.5rem">
										<?php  foreach($packages as $package){?>
											<?php if(($package->team) == ($item1->team_id)){?>
												<div class="col-sm-6 col-md-3" style="margin-bottom:2rem; margin-right:1.5rem;" >
													<div class="card card-pricing  cardBody" id="servicecard" style="height:26rem;width:17rem;">
														<div class="card-header">
															<div class="custom-control custom-checkbox checkbox-xl card_checkbox " style="margin-left: 13rem;">
																<input type="checkbox" class="custom-control-input check1" name="check[]" id="<?php echo $package->package_id ?>" value="<?php echo $package->package_id ?>">
																<label class="custom-control-label check1" for="<?php echo $package->package_id ?>"></label>
																</div>
															
															<i data-feather="box" style="color:#4573d2"></i>
															<h5><?php echo $package->name?></h5>
															
															<!-- <p ><?php echo $service->description?></p> -->
														</div><!-- card-header -->
														<div class="card-body bg-white  mt-1" style="height:3rem;">
<div style="height:12rem;line-height:0.7rem">
														<?php $req = $package->description;
														$y = implode(' ', array_slice(explode(' ', $req), 0, 10))."\n";
														
														$flield = $package->flieds;
														
														// print_r($flield) ; die;
																						$array1 = explode(',', $flield);
																						// echo count($array1);die;

																						
																						// print_r($array1) ; die;
																						for($i= 0 ; $i <= 7; ++$i){

																							
																						}
																						foreach($array1 as $key => $value){
																							if($key < 7 ){

																							
																							
																							// echo $value;

																							?>
														
																							
																								<li><i data-feather="check"></i> <?php echo $value?></li></br>

																		<?php } }?>
																
																						</div>
														<!-- <p class="card-para" style="height:1.5rem;"><?php echo $y?></p> -->

														<?php 
															if(($package->currency)==1){
																$currency = '$';
															}
															else{
																$currency = 'LKR';
															}
														?>

														<div class="pricing-price" style="margin-top:1.5rem;margin-bottom:-5rem;height:35px" >
															<h1 style=""><span><?php echo $currency?></span><?php echo $package->price?><small >/month</small></h1>
														</div>
														<!-- pricing-price -->
														</div>
														<!-- <div class="card-footer" style="height:2rem;background-color:red;padding-bottom:-10px">
														
															<button class="btn btn-block btn-brand-02 btn-uppercase tx-spacing-2 py-2" style="border-radius: 8px;">Add to project</button>
															<div class="tx-11 tx-sans tx-color-04 mg-t-10">Prices may vary depending on the options you need.</div>
														</div> -->
														
													</div><!-- card -->
												</div><!-- col -->
											<?php	} ?>
										<?php	}?>
									</div><!-- row -->
								
							</div>
						
					
                </div>
				  
				 
                
				<?php }?>

														</div> 
             
          </div>
        </div>
        
      </div>
