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
                                        <h4 class="sub-title">Add Vendor </h4>
                                        <?php 
                                        if($this->session->flashdata('msg') != ''){ ?>
                                            <div class="alert alert-success"  id="true" style="font-weight:bold;text-align:center">
                                                <?php echo $this->session->flashdata('msg');?>
                                            </div>
                                        <?php } 
                                        $this->session->set_flashdata('msg',NULL);
                                        ?>
                                        <form  id="form1" method="post" name="form1" enctype="multipart/form-data"  >  
                                            
                            <div id="showcom" >
                            
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Blog Title</label>
                              <div class="col-sm-5">
                               <input type="text" name='blog_title' id='blog_title' class="form-control">
                           </div>
                       </div> 
                       <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Blog Description</label>
                              <div class="col-sm-5">
                               <input type="text" name='blog_description' id='blog_description' class="form-control">
                           </div>
                       </div>
                   </div>

        <div class="form-group row">
              <label class="col-sm-2 col-form-label">Blog category</label>
              <div class="col-sm-5">
                <select type="text" name='category_id' id='category_id' class="form-control">
                      <option value="">-----------------Select--------------------------</option>
    <?php 

    foreach($category as $list){ ?>
        <option value="<?php echo $list->id;?>"> <?php echo $list->category_name;?></option>
    <?php } ?>
                   
                </select>
            </div>
        </div>

        <div class="form-group row">
    <label class="col-sm-2 col-form-label">Upload Document</span></label>
    <div class="col-sm-5">
       <span id="old_cv"></span>
       <!-- <button  type="button" name="cv" id="upfile1" class=" btn btn-primary">Upload</button> -->
       <!--<img  id="upfile1" style="cursor:pointer" />-->
       <input type="file" id="file1"  name="attachment[]"   />
       <!--<input type="file" name="cv" class="form-control file2 inline btn btn-primary">-->
   </div>
</div> 
                  
<div class="form-group row">
  <div class="col-sm-8" align='center'>
   <input type='submit' name='submit' class="btn btn-info dosubmit" value="Submit" />
</div>
</div>
</form>
                                   
   <?php $this->load->view("footer")?>