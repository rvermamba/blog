         <?php $this->load->view("header")?>
         <?php $this->load->view("nav")?>                     
         <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
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
                                         <div class="alert alert-danger col-md-12 text-center" id="categoryError" style="display:none;">Duplicate Category Name .Please Change Category Name</div>  
                                        <div class="card-block">
                                            <h4 class="sub-title">Add Category </h4>
                                            <?php 
                                            if($this->session->flashdata('msg') != ''){ ?>
                                                <div class="alert alert-success"  id="true" style="font-weight:bold;text-align:center">
                                                    <?php echo $this->session->flashdata('msg');?>
                                                </div>
                                            <?php } 
                                            $this->session->set_flashdata('msg',NULL);
                                            ?>
                                            <!-- <? // validation_error('<div class="alert alert_danger">,</div>'); ?> -->
                                            <form  id="form1" method="post" name="form1" enctype="multipart/form-data"  >  
                                             <div class="form-group row">
                                              <label class="col-sm-2 " >Category Name</label>
                                              <div class="col-sm-5">
                                               <input type="text" name='category_name' onblur="chkcategoryName(this.value);" id='category_name' class="form-control" required>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                          <div class="col-sm-8" align='center'>
                                           <input type='submit' name='submit' class="btn btn-info dosubmit" value="Submit" />
                                       </div>
                                   </div>
                               </form>
                               <script type="text/javascript">
                                   function chkcategoryName(categoryName) {
                                     
                                     $.ajax({   
                                        url: "<?php echo base_url(); ?>master/chkcategoryName",
                                        async: false,
                                                    type: "POST", //The type which you want to use: GET/POST
                                                    data: { "categoryName":categoryName,
                                                },
                                                success: function(data) {
                                                    //alert(data);
                                                    if(data==1){

                                                        $("#categoryError").show();
                                                        $("#category_name").val('');
                                                        setTimeout(function(){$(".alert-danger").hide()}, 5000);
                                                        return false;

                                                    }
                                                }
                                            })
                                 };
                             </script>
                             <?php $this->load->view("footer")?>