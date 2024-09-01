<?php
class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('contact_form');
    }

    public function send_email()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact_form');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');

            $this->email->from($email, $name);
            $this->email->to('your-email@gmail.com'); // Ganti dengan email tujuan
            $this->email->subject('Contact Form Message');
            $this->email->message($message);

            if ($this->email->send()) {
                echo 'Your message has been sent!';
            } else {
                show_error($this->email->print_debugger());
            }
        }
    }
}
