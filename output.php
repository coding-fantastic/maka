<?php  
/*    include "init/config/config.php";
admin::checkSession();
$crud = new crud();

$msg = '';
$text = 'hasd';
$after_date = '';
$before_date = '';



function insuranceValuation(){
    if(isset($_POST['submit'])){
        $msg=validation::check_empty($_POST, array('before_date','after_date'));
        
        if($msg!=null)
            return $msg;
        
        $before_date = $crud->escape_string( $_POST['before_date'] );
        $after_date = $crud->escape_string( $_POST['after_date'] );
        
        $sql = "select * from valuations order by ";
        
        return $before_date;
        
    }
}

*/    

include "init/config/config.php"; 
$crud = new crud();

$before_date = '';
$after_date = '';

//valuation::editValuation();


$before_date = $crud->escape_string($_POST['before_date']);
$after_date = $crud->escape_string($_POST['before_date']);


$result = valuation::fetchValuations($before_date, $after_date);
echo json_encode($before_date);
?>  

<!DOCTYPE html>
<html>
    <head>
    
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">    

</head>

<body style="background:" id="body"> 


<div style="width:100%;min-height:260px; border:2px solid #333">

<!-- Web2PDF Converter Button END -->

<img src="assets/images/maka-logo.png" style="width:100%; height:30%"/>
<!--<a href="//pdfcrowd.com/url_to_pdf/" style="float:right;font-size:11px;margin-right:5px">Save to PDF</a>
<a  href="" onClick="window.print()" title="Print Page" style="float:right;font-size:11px;cursor:pointer;margin-right:10px">Print Page</a>-->
<!-- Web2PDF Converter Button BEGIN -->
<!--<a style="float:right;font-size:11px;cursor:pointer;margin-right:10px" onclick="this.setAttribute('href', 'https://v2.convertapi.com/web/to/pdf?secret=zoubYgYqUNVlUgGI&download=attachment&url=' + encodeURI(window.location))" href="#">
    Save page as PDF
</a>-->

<div style="clear:both; margin-bottom:0px; border-top:1.5px dashed #333"></div>
<div style="clear:both; margin-bottom:5px; border-top:1.5px dashed #333"></div>

<p style="text-align:center;   font-weight:normal; margin:0 0 0 0px; font-size:15px;color:#0085b2;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">Maka</p>


<div style="clear:both; margin-TOP:5px; border-top:1.5px dashed #333"></div>
<div style="clear:both; margin-bottom:10px; border-top:1.5px dashed #333"></div>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">INSURANCE VALUATION REPORTS<br/><strong style="font-size:12px">Date:<?php echo date("Y/m/d"); ?></strong></p>
<div style="clear:both"></div>

<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">From:&nbsp;&nbsp;<?php echo $before_date; ?>&nbsp;&nbsp;To:&nbsp;<?php echo $after_date; ?></p>


    
    
    
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <style>
                            .wrap-text {
                                word-wrap: break-word
                            }

                        </style>
                        
                        <table class="table table-striped table-hover table-bordered mb-0">

                            
                            <thead>
                                
                                    <tr>
                                    <th>#</th>
                                    <th>Ref No</th>
                                    <th>Instructed By</th>
                                    <th>Date</th>
                                    <th>Reg. No.</th>
                                    <th>Make</th>
                                    <th>Type</th>
                                    <th>Value (Ksh)</th>
                                    <th>Forced Value (Ksh)</th>
                                    <!--<th>Action</th>-->
                                </tr>
                            </thead>


                            <tbody>

                                <?php
                                                
                                                $rows = valuation::getValuations();
                                                
                                                if($rows){
                                                    
                                                    $i=1;
                                                    foreach($rows as $row){
                                                        
                                                   $instructed_by =  $row['acc_name'];
                                                    $instructed_at = $row['v_instructed_at'];
                                                        
                                                        $ref_no = $row['v_our_ref'];
                                                    
                                                    $details = json_decode($row['v_details'],true);
                                                        
                                                    $amount = json_decode($row['v_amount'],true);
                                                        
                                                    $hash = $row['v_hash'];
                                                    $id = $row['v_id'];
                                                        
                                                     $reg_no = $details['reg_no'];
                                                     $type = $details['type'];
                                                     $make = $details['make'];
                                                     $color = $details['color'];
                                                        
                                                     $status = $row['v_status'];
                                                        
                                                     $value = number_format($amount['value'],2);
                                                     $forced_value = number_format($amount['forced_value'],2);
                                                        
                                                        
                                                        $status_name =  "";
                                                        
                                                        
                                                        $acc_id = $row['acc_id'];
                                                        $acc_hash = $row['acc_hash'];
                                                        
                                                        
                                                        if($status==1){
                                                            $class = "";
                                                            $status_name = "Suspend";
                                                        }
                                                        else{
                                                             $class = 'class="table-danger"';
                                                            $status_name = "Activate";
                                                            
                                                        }
                                                        $link = $id."_".$hash;
                                                        
                                                         $action = '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <i data-feather="chevron-down"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="view?'.$link.'" target="_blank">View</a>
    <a class="dropdown-item print" data-url="view.php?'.$link.'" href="" target="_blank" >Print</a>
    <a class="dropdown-item" href="?cp_'.$link.'">Copy to New</a>
    <a class="dropdown-item" href="addvaluation?'.$link.'">Edit</a>
    <a class="dropdown-item" href="invoice?'.$acc_id.'_'.$acc_hash.'">Create Invoice</a>
    <a class="dropdown-item" href="?s_'.$status.'_'.$link.'">'.$status_name.'</a>
  </div>
</div>';
                                                        
                                                        
                                                        echo "<tr  $class>
                                                    <td  >$i</td>
                                                    <td  > $ref_no</td>
                                                    <td  >$instructed_by </td>
                                                    <td  >$instructed_at</td>
                                                    <td  >$reg_no</td>
                                                    <td class='wrap-text'  >$make</td>
                                                    <td class='wrap-text'  >$type <br> $color</td>
                                                    <td  >$value</td>
                                                    <td  >$forced_value</td>
                                                    
                                                </tr>";
                                                     
                                                        $i++;
                                                        
                                                    }
                                                }
                                                
                                                ?>

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    
    <?php
 include "init/includes/footer.php";
?>


