<?php
class EmailTemplateModel extends CI_Model
{
    /** 
     * Approval Mail Templates
     *      Half-Day (Approved / Rejected / Updated / Approved & Updated)
     *      Leaves (Approved / Rejected / Updated / Approved & Updated)
     *      Comp Off (Approved / Rejected / Updated / Approved & Updated)
     *      
     * Warning/Alert Mail Templates
     *      Less Working Hours
     *      Probation (Ending / Extended / Ended)
     *      Internship (Ending / Extended / Ended)
     * 
     * Automatic Mail Templates
     *      Welcome Onboard
     *      Anniversaries
     *      Birthdays
     *      
    */
    
    public $data = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
    }
    
    public function renderInvoice() : string {
        $body = $this->parser->parse('templates/email/invoice', $this->data, TRUE);
        return $body;
    }
    
}
