         <?php $this->load->view("header")?>
         
         
         
         <?php $this->load->view("nav")?>                     
         <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <!-- <div class="page-header card">
                                        <div class="row align-items-end">
                                           
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Page-header end -->

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
                                                            <h4 class="sub-title">Edit Membership </h4>
                                                 
       <?php 
            if($this->session->flashdata('msg') != ''){ ?>
            <div class="alert alert-success"  id="true" style="font-weight:bold;text-align:center">
                <?php echo $this->session->flashdata('msg');?>
            </div>
            <?php } 

               $this->session->set_flashdata('msg',NULL);

            ?>
                                                             
                                                
     <form  id="form1" method="post" name="form1" enctype="multipart/form-data"  >  
                
                        
 
<?php //echo "<pre>";print_r($details);die(); ?>
<div class="form-group row">
  <label class="col-sm-2 " >Category Name</label>
  <div class="col-sm-5">
   <input type="text" value="<?php echo$details->category_name ?>"  name="category_name" id="category_name" class="form-control">
  </div>
 </div>


  <div class="form-group row">
  <div class="col-sm-8" align='center'>
   <input type='submit' name='submit' class="btn btn-info dosubmit" value="Submit" />
  </div>
 </div>
</form>

                                                
                                                       




        <?php $this->load->view("footer")?>