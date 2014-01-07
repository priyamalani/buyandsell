<?php
/***********************************
*  QueuenManager.php
*  
*  company: Site Technologies Inc.
*  project: Veloxsites V4.5
*  author: Priya Malani
*  date: December 11th, 2013
*  path: /root/engine/classes/
*  desc: This file has the definitions for the queue manager which is used to insert and retrieve/process items from the job queue.
*   
*  ---------------------------
*  MODS (not for bug fixes - more for feature additions):
*  author:
*  desc:
*  date:
*
**************/
class QueueManager{
    public static $DOMAIN_INVOKE    = "domain_invoke";
    public static $DOMAIN_REVOKE    = "domain_revoke";
    public static $EMAIL_INVOKE     = "email_invoke";
    public static $EMAIL_REVOKE     = "email_revoke";
    public static $ANALYTICS_INVOKE = "analytics_invoke";
    public static $ANALYTICS_REVOKE = "analytics_revoke";
    public static $SCRAPE           = "scrape";
    
    private $queueFile = "";
    private $errorFile = "";
    
    function __construct( $queueFile = null, $errorFile = null ){
        if ( isGood( $queueFile, $errorFile ) ){
            $this->queueFile = $queueFile;
            $this->errorFile = $errorFile;
        }
        else
            throw new Exception('Queue Manager - missing required parameters in QueueManager constructor');
    }
    
    public function postJob( $jobType = null, $params = null ){
        if ( isGood( $jobType, $params ) ){
            $job = new Job( $jobType, $params );
            try{
                $fh = fopen( $this->queueFile, "a" );                
                fwrite( $fh, $job->getJobPost() );
                fclose( $fh );
            } 
            catch (Exception $ex) {
                throw new Exception( 'Queue Manager - exception experienced while attempting to write a job to the queue: msg => '.$ex->getMessage() );
            }
        }
        else
            throw new Exception('Queue Manager - missing required parameters in postJob() method');
    }
}

class Job{
    private $jobType = "";
    private $params = array();
    
    function __construct( $jobType = null, $params = null ){
        if ( isGood( $jobType, $params ) ){
            $this->jobType = $jobType;
            ksort( $params );
            $this->params = $params;            
        }
        else
            throw new Exception('Queue Manager - missing required parameters in Job constructor');
    }
    
    public function getJobPost(){
        //*****  job post object starts with uniqid, then the job type, then the list of parameters all pipe separated
        $jobPost = uniqid('').'|'.$this->jobType;            
        
        foreach( $this->params as $key=>$val ){
            $jobPost .= "|".$val;
        }
        return $jobPost."\n";
    }
}
?>