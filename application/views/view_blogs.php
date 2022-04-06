         <?php $this->load->view("header")?>
         <?php $this->load->view("nav")?>                     
         <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                       <!-- Page body start -->
                       <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                             <!-- Basic Form Inputs card start -->
                             <div class="card">
                                <div class="card-header">
                                    <!-- <h5>Basic Form Inputs</h5> -->
                                    <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                    <div class="card-header-right"><i
                                        class="icofont icofont-spinner-alt-5"></i></div>
                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">View Blogs </h4>
                                      
                                        <div class="col-lg-12">
                                             <div class="job-card card-columns">
                                                <!-- Job card start -->
                                                <?php foreach($blogdetails as $details) { ?>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="media">
                                                   
                                                                <img  src="<?php echo IMAGE_URL.'uploads/'.$details->folder_name.'/'.$details->upload_doc; ?>" width="300px;" height="300px;"/>
                                                       
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <h6 class="job-card-desc"><?php echo $details->blog_title; ?></h6>
                                                         <span class="text-muted f-14"><?php echo $details->inserted_date; ?></span>
                                                         <div class="job-badge">
                                                                    <label class="label bg-primary">New</label>
                                                                </div>
                                                        <p class="text-muted"><?php echo $details->blog_description; ?></p>
                                                        <div class="job-meta-data"><i class="icofont icofont-safety"></i><?php echo $details->category_name; ?></div>
                                                        <div class="text-right">
                                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light btn-sm"> More
                                                            </button> -->
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                                <!-- Job card end -->

                                             
                                               

                                              
                                            </div>


                                            <!-- Pagination start -->
                                            <?php echo $this->pagination->create_links(); ?>
                                           <!--  <nav aria-label="...">
                                                <ul class="pagination justify-content-center m-t-20 m-b-20">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav> -->
                                            <!-- Pagination end -->
                                        </div>


                                         </div>   
                                        


                                         </div>   
                                         </div>   
                                         </div>   
                                         </div>   
                                         </div>   
                                         </div>   
                                         </div>   
                                         </div>   
                                   
   <?php $this->load->view("footer")?>