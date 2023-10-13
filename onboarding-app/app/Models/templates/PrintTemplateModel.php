<?php
class PrintTemplateModel extends CI_Model
{

    /** 
     * Job Application
     * Offer Letter
     * Joining Letter
     * Appraisal Letter
     * Salary Slip
     * Experience Letter
     * Relieving Letter
     * 
     * Custom Letters / Documentation
    */

    public $data = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
    }
    
    public function renderInvoice() : string {
        $data = $this->parser->parse('templates/print/invoice', $this->data, TRUE);
        return $data;
    }
    
}
