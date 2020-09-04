<?php


class Modal{  

public static function getAssessments(){
    
    $crud = new curd();
    $sql = "SELECT * FROM assessment , accounts WHERE acc_id = ass_acc_id ORDER BY ass_id DESC" ; 
    
    return $crud->getData($sql);
}

    
public static function  fetchTodayActivities(){
    
    $crud = new crud();
    
    $date_today =  date('Y-m-d H:i:s');
    $sql = "SELECT * FROM `log` where log_date >= '$date_today'  ORDER BY `log`.`log_date` DESC ";
    
    return $crud->getData($sql);
}
    
    
public static function fetchActivitiesOvertime(){
    $crud = new crud();
    
    $msg = validation::check_empty($_POST,array("before_date","after_date"));
        
        
        $before_date = $crud->escape_string($_POST['before_date']);
        $after_date = $crud->escape_string($_POST['after_date']);
        
        $bf_date = date('Y-m-d H:i:s', strtotime($before_date));
        $at_date = date('Y-m-d H:i:s', strtotime($after_date));
        
        if(empty($before_date)){
            $bf_date = "2020-01-01 00:00:00";
        }
        
        if(empty($after_date)){
            $at_date = date('Y-m-d H:i:s');
        }
    
        
        if($msg != null){
            $sql = "SELECT * FROM log , accounts WHERE 1";
        }
        else
        {
         $sql = "SELECT * FROM log , accounts
        WHERE 
        v_created_at BETWEEN '$bf_date' AND  '$at_date' ";   
        }
        
        
       
        
        return $crud->getData( $sql );
    
    
}
    
    
    public static function fetchAccounts(){
    $crud = new crud();
    
    $msg = validation::check_empty($_POST,array("before_date","after_date"));
        
        
        $before_date = $crud->escape_string($_POST['before_date']);
        $after_date = $crud->escape_string($_POST['after_date']);
        
        $bf_date = date('Y-m-d H:i:s', strtotime($before_date));
        $at_date = date('Y-m-d H:i:s', strtotime($after_date));
        
        if(empty($before_date)){
            $bf_date = "2020-01-01 00:00:00";
        }
        
        if(empty($after_date)){
            $at_date = date('Y-m-d H:i:s');
        }
    
        
        if($msg != null){
            $sql = "SELECT * FROM accounts WHERE 1";
        }
        else
        {
         $sql = "SELECT * FROM  accounts
        WHERE 
        acc_date BETWEEN '$bf_date' AND  '$at_date' ";   
        }
        
        
       
        
        return $crud->getData( $sql );
        
    }
    
}

?>