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
                                                        <h4 class="sub-title">Blog Details </h4>
                                                        <div class="panel-body">
                                                           <?php 
                                                           if($this->session->flashdata('msg') != ''){ ?>
                                                            <div class="alert alert-success"  id="message" style="font-weight:bold;text-align:center">
                                                                <?php echo $this->session->flashdata('msg');?>
                                                            </div>
                                                        <?php } 
                                                        $this->session->set_flashdata('msg',NULL);
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-sm-10" >
                                                            </div> 
                                                            <div class="col-sm-2" >
                                                             <a href="<?php echo base_url().'blog/addBlog'?>"> <button type="button" class="btn btn-primary" >Add Blog</button></a>
                                                         </div>                    
                                                     </div>  
                                                 </br>                  
                                                 <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="table1"class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th class="custum_center">Sr. No.</th>
                                                                    <th class="custum_center" style="min-width:100px;">Action</th>
                                                                    <th class="custum_center">Dated</th>
                                                                    <th class="custum_center">Blog ID</th>
                                                                    <th class="custum_center">Blog Title</th>
                                                                    <th class="custum_center" >Blog Description</th>
                                                                    <th class="custum_center">Blog Category</th>
                                                                    
                                                                    <th class="custum_center">Blog Image</th> 
                                                                </tr>
                                                            </thead>
                                                            <tbody style="text-align:center">
                                                                <?php
                           // echo "<pre>";print_r($blogdetails);die();
                                                                $count=1;
                                                                foreach($blogdetails as $details)
                                                                {
                                    //$leadsource_id = $this->encryption->encode($lead->lead_id);
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $count++;?></td>
                                                                        <td style="min-width:100px;">
                                                                            <a href="<?php echo base_url().'blog/editBlog/'.$details->id;?>"><button type="button" class="btn btn-primary" title="Edit"><i class="fa fa-pencil" ></i></button></a>
                                                                            <!-- <a href="<?php// echo base_url().'product/deleteProduct/'.$details->id;?>"><button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash " ></i></button></a> -->
                                                                            <button type="button" class="btn btn-danger" onclick="deleteBlog(<?php echo $details->id;?>);" title="Delete"><i class="fa fa-trash " ></i></button>
                                                                            
                                                                        </td> 
                                                                        <td><?php echo date('d-m-Y',strtotime($details->inserted_date));?></td> 
                                                                        <td><?php echo $details->id;?></td>
                                                                        <td><?php echo $details->blog_title;?></td>
                                                                        <td><?php echo $details->blog_description;?></td>
                                                                        <td><?php echo $details->category_id;?></td>
                                                                       
                                                                         <td><?php if($details->upload_doc !="") { $imagearr = explode(",",$details->upload_doc); $cnt=1; foreach($imagearr as $img){ ?><a href="<?php echo IMAGE_URL;?><?php echo 'uploads/'.$details->folder_name.'/'.$img;?>" target="_blank"><?php echo 'View Image'.$cnt; $cnt++; ?> </a></br><?php }}?></td>   
                                                                    </tr>
                                                                <?php }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                               
                                                function deleteBlog(id){
                                                    var x=confirm('Are you sure you want to delete the record' );
                   //alert(id);
                   if (x == true){
                    $.ajax({
                        url : '<?php echo base_url()?>blog/deleteBlog',
                        type : 'post',
                        data : "id="+id,
                        success : function (data)
                        {
                                    //alert(data);
                                    if(data == 1)
                                    {
                                        location.reload();
                                       // $("#message").show(); 
                                       // $('#table1').DataTable.ajax.reload();
                                   }
                                   else
                                   {
                                       alert('error');
                                        //$("#message").show()
                                    }
                                }
                            });
                }else{
                        //alert('error');
                    }
                }
                
                
            </script>                                           
           
            <?php $this->load->view("footer")?>