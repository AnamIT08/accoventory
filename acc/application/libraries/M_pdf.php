<?php
class M_pdf {
    
    function m_pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
            $param = '"utf-8","A4",0,"0",0,0,0,0,0,0'; 
            //$param = '"en-GB-x","A4","","",10,10,10,10,6,3'; 
        }
         
        return new mPDF($param);
    }
}