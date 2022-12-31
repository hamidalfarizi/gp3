<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Tahun_pelajaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tahun_pelajaran_model');

        // cek user login
        check_login();
    }

    /*
     * Listing of tahun_pelajaran
     */
    function index()
    {
        // print_r($_SESSION);

        $data['tahun_pelajaran'] = $this->Tahun_pelajaran_model->get_all_tahun_pelajaran();
        // print_r($data['tahun_pelajaran']);
        $data['_view'] = 'tahun_pelajaran/index';

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('tahun_pelajaran/index', $data);
        $this->load->view('template/footer');
    }

    /*
     * Adding a new tahun_pelajaran
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('tanggal_rapor', 'Tanggal Rapor', 'required');
        $this->form_validation->set_rules('id_kepsek', 'Id Kepsek', 'required');

        if ($this->form_validation->run()) {
            // upload image
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'png';
            $config['overwrite']             = true;
            $config['file_name']             = 'ttd_' . $this->input->post('tahun') . '_' . $this->input->post('semester');

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('ttd')) {
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
                // print_r($data);
                $params = array(
                    'semester' => $this->input->post('semester'),
                    'id_kepsek' => $this->input->post('id_kepsek'),
                    'tahun' => $this->input->post('tahun'),
                    'tanggal_rapor' => $this->input->post('tanggal_rapor'),
                );

                $tahun_pelajaran_id = $this->Tahun_pelajaran_model->add_tahun_pelajaran($params);
                // Deletes cache for the currently requested URI
                $this->output->delete_cache('tahun_pelajaran/index');
                redirect('tahun_pelajaran/index');
            } else {
                $data = array('upload_data' => $this->upload->data());
                // print_r($data);
                $params = array(
                    'semester' => $this->input->post('semester'),
                    'id_kepsek' => $this->input->post('id_kepsek'),
                    'tahun' => $this->input->post('tahun'),
                    'tanggal_rapor' => $this->input->post('tanggal_rapor'),
                    'ttd' => $data['upload_data']['file_name'],
                );

                $tahun_pelajaran_id = $this->Tahun_pelajaran_model->add_tahun_pelajaran($params);
                // Deletes cache for the currently requested URI
                $this->output->delete_cache('tahun_pelajaran/index');
                redirect('tahun_pelajaran/index');
            }
        } else {
            $this->load->model('Guru_model');
            $data['all_guru'] = $this->Guru_model->get_all_guru();

            $data['_view'] = 'tahun_pelajaran/add';
            $this->load->view('template/header');
            $this->load->view('template/sidebar', $data);
            $this->load->view('tahun_pelajaran/add', $data);
            $this->load->view('template/footer');
        }
    }

    /*
     * Editing a tahun_pelajaran
     */
    function edit($id)
    {
        // check if the tahun_pelajaran exists before trying to edit it
        $data['tahun_pelajaran'] = $this->Tahun_pelajaran_model->get_tahun_pelajaran($id);

        if (isset($data['tahun_pelajaran']['id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('tahun', 'Tahun', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('tanggal_rapor', 'Tanggal Rapor', 'required');
            $this->form_validation->set_rules('id_kepsek', 'Id Kepsek', 'required');

            if ($this->form_validation->run()) {
                // upload image
                $file_ext = pathinfo($_FILES["ttd"]["name"], PATHINFO_EXTENSION);
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'png';
                $config['overwrite']             = true;
                $config['file_name']             = 'ttd_' . $this->input->post('tahun') . '_' . $this->input->post('semester');

                $this->load->library('upload', $config);

                if ($_FILES['ttd']['name'] == "") {
                    $ttd = $this->input->post('ttd_old');
                } else {
                    if (!$this->upload->do_upload('ttd')) {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                        $ttd = $data['upload_data']['file_name'];
                        // print_r($data);
                    }
                }

                $params = array(
                    'semester' => $this->input->post('semester'),
                    'id_kepsek' => $this->input->post('id_kepsek'),
                    'tahun' => $this->input->post('tahun'),
                    'tanggal_rapor' => $this->input->post('tanggal_rapor'),
                    'ttd' => $ttd,
                );

                $this->Tahun_pelajaran_model->update_tahun_pelajaran($id, $params);
                // Deletes cache for the currently requested URI
                $this->output->delete_cache('tahun_pelajaran/index');
                redirect('tahun_pelajaran/index');
            } else {
                $this->load->model('Guru_model');
                $data['all_guru'] = $this->Guru_model->get_all_guru();

                $data['_view'] = 'tahun_pelajaran/edit';
                $this->load->view('template/header');
                $this->load->view('template/sidebar', $data);
                $this->load->view('tahun_pelajaran/edit', $data);
                $this->load->view('template/footer');
            }
        } else
            show_error('The tahun_pelajaran you are trying to edit does not exist.');
    }

    /*
     * Deleting tahun_pelajaran
     */
    function remove($id)
    {
        $tahun_pelajaran = $this->Tahun_pelajaran_model->get_tahun_pelajaran($id);

        // check if the tahun_pelajaran exists before trying to delete it
        if (isset($tahun_pelajaran['id'])) {
            $this->Tahun_pelajaran_model->delete_tahun_pelajaran($id);
            redirect('tahun_pelajaran/index');
        } else
            show_error('The tahun_pelajaran you are trying to delete does not exist.');
    }

    /*
    * setting session
    */
    function set_session($id)
    {
        $tahun_pelajaran = $this->Tahun_pelajaran_model->get_tahun_pelajaran($id);
        $update_session = array(
            'id_tahun_pelajaran' => $tahun_pelajaran['id'],
            'tahun' => $tahun_pelajaran['tahun'],
            'semester' => $tahun_pelajaran['semester'],
            'id_kepsek' => $tahun_pelajaran['id_kepsek'],
            'tanggal_rapor' => $tahun_pelajaran['tanggal_rapor']
        );

        $this->session->set_userdata($update_session);
        redirect('tahun_pelajaran');
    }
}