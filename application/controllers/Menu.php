<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       is_logged_in();
       $this->load->library('form_validation');
       $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }
    public function ubah($id){
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['menu'] = $this->Menu_model->edit_menu($where, 'user_menu')->result();
         $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editMenu', $data);
            $this->load->view('templates/footer');
        }
    public function updateMenu(){
           
        $id               = htmlspecialchars($this->input->post('id', true));
        $menu                 = htmlspecialchars($this->input->post('menu', true));
        $data = array(
            'menu' => $menu
            
        );
        $where = array('id' => $id);
        $this->Menu_model->update_menu($where,$data,'user_menu');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">update Menu!</div>');
        redirect('menu');
    }
    public function ubahSubMenu($id){
        $data['title'] = 'Edit Sub Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['submenu'] = $this->Menu_model->edit_sub_menu($where, 'user_sub_menu')->result();
         $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/editSubMenu', $data);
            $this->load->view('templates/footer');
        }
    public function updateSubMenu(){
        $id                  = htmlspecialchars($this->input->post('id', true));
        $title               = htmlspecialchars($this->input->post('title', true));
        $url                 = htmlspecialchars($this->input->post('url', true));
        $icon                = htmlspecialchars($this->input->post('icon', true));
        $is_active           = htmlspecialchars($this->input->post('is_active', true));
        $data = array(
            'title' => $title,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active

            
        );
        $where = array('id' => $id);
        $this->Menu_model->update_sub_menu($where,$data,'user_sub_menu');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">update Menu!</div>');
        redirect('menu/submenu');
    }
    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function hapusMenuUtama($id_menu)
    {
        $where = array('id' => $id_menu);
         $this->Menu_model->delete_menu($where,'user_menu');
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success!</div>');
        redirect('menu');
    }
    public function hapusSubMenu($id_subMenu)
    {
        $where = array('id' => $id_subMenu);
         $this->Menu_model->delete_sub_menu($where,'user_sub_menu');
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete success!</div>');
        redirect('menu/submenu');
    }
}
