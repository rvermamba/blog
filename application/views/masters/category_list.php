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
                                                            <h4 class="sub-title">Category Details </h4>
                                                 
                                                         
                                                
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
   <a href="<?php echo base_url().'master/addCategory'?>"> <button type="button" class="btn btn-primary" >Add Category</button></a>
                    
 </div>                    
 </div>  
 </br>                  
                             <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="table1"class="table table-striped table-bordered nowrap">
                                                    
                                <thead>
                                    <tr>
                                        <th class="custum_center">Sr. No.</th>
                                        <th class="custum_center">Dated</th>
                                        <th class="custum_center">Category Id</th>
                                        <th class="custum_center">Category Name</th>
                                    <th class="custum_center">Action</th>
                                    </tr>
                                </thead>
                               <tbody style="text-align:center">
                            <?php
                           // echo "<pre>";print_r($productdetails);die();
                                $count=1;
                                foreach($categorydetails as $details)
                                {
                                    //$leadsource_id = $this->encryption->encode($lead->lead_id);
                                ?>
                                    <tr>
                                        <td><?php echo $count++;?></td>
                                        <td><?php echo date('d-m-Y',strtotime($details->inserted_date));?></td> 
                                        <td><?php echo $details->id;?></td>
                                        <td><?php echo $details->category_name;?></td>
                                        
                                        
                                        
                                        <td>
                                             
                                            <a href="<?php echo base_url().'master/editCategory/'.$details->id;?>"><button type="button" class="btn btn-primary" title="Edit"><i class="fa fa-pencil" ></i></button></a>
                                            <!-- <a href="<?php// echo base_url().'product/deleteProduct/'.$details->id;?>"><button type="button" class="btn btn-danger" title="Delete"><i class="fa fa-trash " ></i></button></a> -->
                                            <button type="button" class="btn btn-danger" onclick="deleteproduct(<?php echo $details->id;?>);" title="Delete"><i class="fa fa-trash " ></i></button>
                                       
                                            
                                        </td> 

                                    </tr>
                                <?php }
                            ?>
                            </tbody>
                            </table>
                                                
                        </div>
                        </div>
                        </div>

                                                
            <script type="text/javascript">
    $(document).ready( function () {
    $('#table1').DataTable();
} );


              function deleteproduct(id){
                    var x=confirm('Are you sure you want to delete the record' );
                   //alert(id);
                    if (x == true){
                            $.ajax({
                        url : '<?php echo base_url()?>master/deleteCategory',
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


<script type="text/javascript">
    $(document).ready( function () {
    $('#table1').DataTable();
} );
</script>


        <?php $this->load->view("footer")?>