<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Newsletter extends CI_Controller {
    public function index() {
        if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            if (!$this->db->table_exists($this->uri->segment(2))){
                $this->base_m->create_table($this->uri->segment(2));
            }
            $data = loadDefaultData();
            $data['rows'] = $this->back_m->get_all($this->uri->segment(2));
            echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
        } else {
            redirect('panel');
        }
    }
    public function show($id = '') {
        if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            $data = loadDefaultData();
            if($id != '') {
                $data['value'] = $this->back_m->get_one($this->uri->segment(2), $id);
            }
            echo loadSubViewsBack($this->uri->segment(2), 'show', $data);
        } else {
            redirect('panel');
        }
    }
    public function send() {
        $now = date('Y-m-d');
        if (!is_dir('mailer/attachment/'.$now)) {
            mkdir('./mailer/attachment/' . $now, 0777, TRUE);
        }
        $config['upload_path'] = './mailer/attachment/'.$now;
        $config['allowed_types'] = '*';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($_FILES['attachment'] != null) {
            if ($this->upload->do_upload('attachment')) {
                $data = $this->upload->data();
                $_POST['attachment'] = $now.'/'.$data['file_name'];
            }
        }
        $data['contact'] = $this->back_m->get_one('contact_settings', 1);
        require 'application/libraries/mailer/config.php';
        require 'application/libraries/mailer/functions.php';
        require 'application/libraries/mailer/PHPMailerAutoload.php';
        unset($_POST['name_file_1']);
        $this->back_m->insert('newsletter', $_POST);
        foreach($this->back_m->get_all('subscribers') as $subscriber) {
            $_POST['base_url'] = base_url();
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = $cfg['smtp_host'];
            $mail->SMTPAuth = true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Username = $cfg['smtp_user'];
            $mail->Password = $cfg['smtp_pass'];
            $mail->Port = $cfg['smtp_port'];
            if(isset($_POST['attachment'])) $mail->addAttachment('mailer/attachment/'.$_POST['attachment']);
            $mail->setFrom($cfg['smtp_user'], $data['contact']->company .  ' - newsletter');
            $mail->AddBCC($subscriber->email);
            if(!empty($subscriber->email)) {
                $mail->addReplyTo($subscriber->email);
            }
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $data['contact']->company .  ' - '. $_POST['subject'];
            $mail->Body    = build_mail_body($_POST, 'newsletter.php');
            $sent = $mail->send();
        }
        if(!$sent) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            $this->session->set_flashdata('flashdata', '<p class="font-weight-bold mb-0">Coś poszło nie tak...</p>');
            exit;
        } else {
            $this->session->set_flashdata('flashdata', '<p class="font-weight-bold mb-0">Pomyślnie wysłałeś newsletter!</p>');
        }
        redirect('panel/newsletter');
    }
}