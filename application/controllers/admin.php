<?php

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('madmin');
        $this->load->model('m_public');
        $this->load->helper('url');
        $this->load->library('lib_new');
    }

    function index(){
        $this->load->view('head_user');
        $data['jmltsklh'] = $this->madmin->jml_tsklh();
        $data['jmlttenk'] = $this->madmin->jml_ttenk();
        $data['jmltssw'] = $this->madmin->jml_tssw();
        $data['jmltguru'] = $this->madmin->jml_tguru();
        $data['kab'] = $this->lib_new->get_data('kabupaten');
        $this->load->view('admin/beranda', $data);
        $this->load->view('foot_user');
    }

    function user(){
        $this->load->view('head_user');
        $data['user']= $this->madmin->tampil_data()->result();
        $this->load->view('admin/user', $data);
        $this->load->view('foot_user');
    }

    function hapus($id){
        $this->load->view('head_user');
        $where = array('id'=>$id);
        $this->madmin->hapus_data($where, 'user');
        redirect('admin/user');
        $this->load->view('foot_user');
    }

    function edit($id){
        $this->load->view('head_user');
        $where = array('id' => $id);
        $data['user']= $this->madmin->edit_data($where, 'user')->result();
        $this->load->view('admin/useredit', $data);
        $this->load->view('foot_user');
    }


    function tambah_proses(){
        $this->load->view('head_user');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $foto = $this->input->post('foto');
        $npsn = $this->input->post('npsn');

        $data = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nama' => $nama,
            'level' => $level,
            'foto' => $foto,
            'npsn' => $npsn
            );
        $this->madmin->tambah_data($data,'user');
        redirect('admin/user');
        $this->load->view('foot_user');
    }


    function update(){
        $this->load->view('head_user');
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $foto = $this->input->post('foto');
        $npsn = $this->input->post('npsn');

        $data = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'nama' => $nama,
            'level' => $level,
            'foto' => $foto,
            'npsn' => $npsn
            );
        $where = array('id'=> $id);
        $this->madmin->update_data($where,$data,'user');
        redirect('admin/user');
        $this->load->view('foot_user');
    }

    function statistik(){
        $this->load->view('head_user');
        $this->load->view('admin/statistik');
        $this->load->view('foot_user');
    }

    function guru(){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $this->load->view('admin/dguru', $data);
        $this->load->view('foot_user');
    }

    function guru_jk_kab(){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab']= $this->madmin->kab();
        $data['sd']= $this->madmin->guru_kab_jk('P','SD');
        $data['sdl']= $this->madmin->guru_kab_jk('L','SD');
        $data['smp']= $this->madmin->guru_kab_jk('P','SMP');
        $data['smpl']= $this->madmin->guru_kab_jk('L','SMP');
        $data['mi']= $this->madmin->guru_kab_jk('P','MI');
        $data['mil']= $this->madmin->guru_kab_jk('L','MI');
        $data['mts']= $this->madmin->guru_kab_jk('P','MTS');
        $data['mtsl']= $this->madmin->guru_kab_jk('L','MTS');
        $data['sma']= $this->madmin->guru_kab_jk('P','SMA');
        $data['smal']= $this->madmin->guru_kab_jk('L','SMA');
        $data['ma']= $this->madmin->guru_kab_jk('P','MA');
        $data['mal']= $this->madmin->guru_kab_jk('L','MA');
        $data['smk']= $this->madmin->guru_kab_jk('P','SMA');
        $data['smkl']= $this->madmin->guru_kab_jk('L','SMA');
        $this->load->view('admin/kab_dguru', $data);
        $this->load->view('foot_user');
    }

    function guru_jk_kec($id){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kec']= $this->madmin->kec($id);
        $data['sdp']= $this->madmin->gurusd_kc_p('$id');
        $data['sd_p']= $this->madmin->guru_kec_jk('P','SD',$id);
        $data['sd2']= $this->madmin->guru_kec_jk('L','SD',$id);
        $data['mi']= $this->madmin->guru_kec_jk('P','MI',$id);
        $data['mi2']= $this->madmin->guru_kec_jk('L','MI',$id);
        $data['smp']= $this->madmin->guru_kec_jk('P','SMP',$id);
        $data['smp2']= $this->madmin->guru_kec_jk('L','SMP',$id);
        $data['mts']= $this->madmin->guru_kec_jk('P','MTS',$id);
        $data['mts2']= $this->madmin->guru_kec_jk('L','MTS',$id);
        $data['sma']= $this->madmin->guru_kec_jk('P','SMA',$id);
        $data['sma2']= $this->madmin->guru_kec_jk('L','SMA',$id);
        $data['ma']= $this->madmin->guru_kec_jk('P','MA',$id);
        $data['ma2']= $this->madmin->guru_kec_jk('L','MA',$id);
        $data['smk']= $this->madmin->guru_kec_jk('P','SMK',$id);
        $data['smk2']= $this->madmin->guru_kec_jk('L','SMK',$id);

        $this->load->view('admin/kec_dguru_jk', $data);
        $this->load->view('foot_user');
    }

    function guru_jk_sk($a){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['gr'] = $this->madmin->jml_gr_sk($a);
        $data['grl'] = $this->madmin->jml_grl_sk($a);
        $data['grp'] = $this->madmin->jml_grp_sk($a);
        $this->load->view('admin/df_dguru_jk', $data);
        $this->load->view('foot_user');
    }

    function guru_kab_sts(){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['pnsd'] = $this->madmin->gr_kab_sts('PNS DPK');
        $data['hnr'] = $this->madmin->gr_kab_sts('Guru Honor');
        $data['pns'] = $this->madmin->gr_kab_sts('PNS');
        $data['gty'] = $this->madmin->gr_kab_sts('GTY');
        $data['gtt'] = $this->madmin->gr_kab_sts('GTT');
        $this->load->view('admin/kab_sts_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_kec_sts($id){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['kec']= $this->madmin->kec($id);
        $data['pnsd'] = $this->madmin->gr_kec_sts('PNS DPK', $id);
        $data['hnr'] = $this->madmin->gr_kec_sts('Guru Honor',$id);
        $data['pns'] = $this->madmin->gr_kec_sts('PNS',$id);
        $data['gty'] = $this->madmin->gr_kec_sts('GTY',$id);
        $data['gtt'] = $this->madmin->gr_kec_sts('GTT',$id);
        $this->load->view('admin/kec_sts_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_sts_sk($a){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['pnsd'] = $this->madmin->guru_sts_pnsd($a);
        $data['hnr'] = $this->madmin->guru_sts_hnr($a);
        $data['pns'] = $this->madmin->guru_sts_pns($a);
        $data['gty'] = $this->madmin->guru_sts_gty($a);
        $data['gtt'] = $this->madmin->guru_sts_gtt($a);
        $this->load->view('admin/df_dguru_sts', $data);
        $this->load->view('foot_user');
    }

    function guru_kab_stf(){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['sdh'] = $this->madmin->gr_kab_stf('Sudah');
        $data['blm'] = $this->madmin->gr_kab_stf('Belum');
        $this->load->view('admin/kab_stf_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_kec_stf($id){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kec'] = $this->madmin->kec($id);
        $data['sdh'] = $this->madmin->gr_kec_stf('Sudah', $id);
        $data['blm'] = $this->madmin->gr_kec_stf('Belum', $id);
        $this->load->view('admin/kec_stf_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_stf_sk($a){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['sdh'] = $this->madmin->guru_stf_sdh($a);
        $data['blm'] = $this->madmin->guru_stf_blm($a);
        $this->load->view('admin/df_dguru_stf', $data);
        $this->load->view('foot_user');
    }

    function guru_kab_pen(){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['s1'] = $this->madmin->gr_kab_pen('S1');
        $data['s2'] = $this->madmin->gr_kab_pen('S2');
        $data['d4'] = $this->madmin->gr_kab_pen('D4');
        $data['slta'] = $this->madmin->gr_kab_pen('SLTA');
        $this->load->view('admin/kab_pen_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_kec_pen($id){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kec']= $this->madmin->kec($id);
        $data['s1'] = $this->madmin->gr_kec_pen('S1', $id);
        $data['s2'] = $this->madmin->gr_kec_pen('S2', $id);
        $data['d4'] = $this->madmin->gr_kec_pen('D4', $id);
        $data['slta'] = $this->madmin->gr_kec_pen('SLTA', $id);
        $this->load->view('admin/kec_pen_gr', $data);
        $this->load->view('foot_user');
    }

    function guru_pen_sk($a){
        $this->load->view('head_user');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['s1'] = $this->madmin->guru_pen_s1($a);
        $data['s2'] = $this->madmin->guru_pen_s2($a);
        $data['d4'] = $this->madmin->guru_pen_d4($a);
        $data['slta'] = $this->madmin->guru_pen_slta($a);
        $this->load->view('admin/df_dguru_pen', $data);
        $this->load->view('foot_user');
    }

    function ten_jk_kab(){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kab']= $this->madmin->kab();
        $data['all']= $this->madmin->ten_kab();
        $data['sd']= $this->madmin->tenk_kab_jk('Pe','SD');
        $data['sdl']= $this->madmin->tenk_kab_jk('L','SD');
        $data['smp']= $this->madmin->tenk_kab_jk('Pe','SMP');
        $data['smpl']= $this->madmin->tenk_kab_jk('L','SMP');
        $data['mi']= $this->madmin->tenk_kab_jk('Pe','MI');
        $data['mil']= $this->madmin->tenk_kab_jk('L','MI');
        $data['mts']= $this->madmin->tenk_kab_jk('Pe','MTS');
        $data['mtsl']= $this->madmin->tenk_kab_jk('L','MTS');
        $data['sma']= $this->madmin->tenk_kab_jk('Pe','SMA');
        $data['smal']= $this->madmin->tenk_kab_jk('L','SMA');
        $data['ma']= $this->madmin->tenk_kab_jk('Pe','MA');
        $data['mal']= $this->madmin->tenk_kab_jk('L','MA');
        $data['smk']= $this->madmin->tenk_kab_jk('Pe','SMA');
        $data['smkl']= $this->madmin->tenk_kab_jk('L','SMA');
        $this->load->view('admin/kab_dten_jk', $data);
        $this->load->view('foot_user');
    }

    function ten_jk_kec($id){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kec']= $this->madmin->kec($id);
        $data['sd_p']= $this->madmin->tenk_kec_jk('Pe','SD',$id);
        $data['sd2']= $this->madmin->tenk_kec_jk('L','SD',$id);
        $data['mi']= $this->madmin->tenk_kec_jk('Pe','MI',$id);
        $data['mi2']= $this->madmin->tenk_kec_jk('L','MI',$id);
        $data['smp']= $this->madmin->tenk_kec_jk('Pe','SMP',$id);
        $data['smp2']= $this->madmin->tenk_kec_jk('L','SMP',$id);
        $data['mts']= $this->madmin->tenk_kec_jk('Pe','MTS',$id);
        $data['mts2']= $this->madmin->tenk_kec_jk('L','MTS',$id);
        $data['sma']= $this->madmin->tenk_kec_jk('Pe','SMA',$id);
        $data['sma2']= $this->madmin->tenk_kec_jk('L','SMA',$id);
        $data['ma']= $this->madmin->tenk_kec_jk('Pe','MA',$id);
        $data['ma2']= $this->madmin->tenk_kec_jk('L','MA',$id);
        $data['smk']= $this->madmin->tenk_kec_jk('Pe','SMK',$id);
        $data['smk2']= $this->madmin->tenk_kec_jk('L','SMK',$id);

        $this->load->view('admin/kec_ten_jk', $data);
        $this->load->view('foot_user');
    }

        function ten_jk_sk($a){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['gr'] = $this->madmin->jml_tr_sk($a);
        $data['grl'] = $this->madmin->jml_trl_sk($a);
        $data['grp'] = $this->madmin->jml_trp_sk($a);
        $this->load->view('admin/df_dten_jk', $data);
        $this->load->view('foot_user');
    }

    function ten_kab_sts(){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kab'] = $this->madmin->kab();
        $data['pty'] = $this->madmin->tn_kab_sts('PTY');
        $data['hnr'] = $this->madmin->tn_kab_sts('Honor');
        $data['ptt'] = $this->madmin->tn_kab_sts('PTT');
        $data['gty'] = $this->madmin->tn_kab_sts('GTY');
        $data['gtt'] = $this->madmin->tn_kab_sts('GTT');
        $this->load->view('admin/kab_sts_tn', $data);
        $this->load->view('foot_user');
    }

    function ten_kec_sts($id){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kec']= $this->madmin->kec($id);
        $data['pnsd'] = $this->madmin->tn_kec_sts('PTY', $id);
        $data['hnr'] = $this->madmin->tn_kec_sts('Honor',$id);
        $data['pns'] = $this->madmin->tn_kec_sts('PTT',$id);
        $data['gty'] = $this->madmin->tn_kec_sts('GTY',$id);
        $data['gtt'] = $this->madmin->tn_kec_sts('GTT',$id);
        $this->load->view('admin/kec_sts_tn', $data);
        $this->load->view('foot_user');
    }

    function ten_sts_sk($a){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['pty'] = $this->madmin->ten_sts_pty($a);
        $data['hnr'] = $this->madmin->ten_sts_hnr($a);
        $data['ptt'] = $this->madmin->ten_sts_ptt($a);
        $data['gty'] = $this->madmin->ten_sts_gty($a);
        $data['gtt'] = $this->madmin->ten_sts_gtt($a);
        $this->load->view('admin/df_dten_sts', $data);
        $this->load->view('foot_user');
    }

    function ten_kab_pen(){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kab'] = $this->madmin->kab();
        $data['s1'] = $this->madmin->tn_kab_pen('S1');
        $data['s2'] = $this->madmin->tn_kab_pen('S2');
        $data['d4'] = $this->madmin->tn_kab_pen('D4');
        $data['d3'] = $this->madmin->tn_kab_pen('D3');
        $data['d2'] = $this->madmin->tn_kab_pen('D2');
        $data['d1'] = $this->madmin->tn_kab_pen('D1');
        $data['smk'] = $this->madmin->tn_kab_pen('SMK');
        $this->load->view('admin/kab_pen_ten', $data);
        $this->load->view('foot_user');
    }

    function ten_kec_pen($id){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['kec']= $this->madmin->kec($id);
        $data['s1'] = $this->madmin->tn_kec_pen('S1', $id);
        $data['s2'] = $this->madmin->tn_kec_pen('S2', $id);
        $data['d4'] = $this->madmin->tn_kec_pen('D4', $id);
        $data['d3'] = $this->madmin->tn_kec_pen('D3', $id);
        $data['d2'] = $this->madmin->tn_kec_pen('D2', $id);
        $data['d1'] = $this->madmin->tn_kec_pen('D1', $id);
        $data['smk'] = $this->madmin->tn_kec_pen('SMK', $id);
        $this->load->view('admin/kec_pen_ten', $data);
        $this->load->view('foot_user');
    }

    function ten_pen_sk($a){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['s1'] = $this->madmin->ten_pen_s1($a);
        $data['s2'] = $this->madmin->ten_pen_s2($a);
        $data['d4'] = $this->madmin->ten_pen_d4($a);
        $data['d3'] = $this->madmin->ten_pen_d3($a);
        $data['d2'] = $this->madmin->ten_pen_d2($a);
        $data['d1'] = $this->madmin->ten_pen_d1($a);
        $data['smk'] = $this->madmin->ten_pen_smk($a);
        $this->load->view('admin/df_dten_pen', $data);
        $this->load->view('foot_user');
    }

    function sekolah(){
        $this->load->view('head_user');
        $data['dat']= $this->m_public->jml_sklh();
            $data['sis']= $this->m_public->jml_siswa();
            $data['gur']= $this->m_public->jml_guru();
            //Tabel ke-dua
            $data['kab_sklh']= $this->m_public->jml_siswakab();
            //Tabel Ke-tiga
            $data['dasar']= $this->m_public->jml_sklh_jenjang('SD','MI');
            $data['menengah']= $this->m_public->jml_sklh_jenjang('SMP','MTS');
            $data['atas']= $this->m_public->jml_sklh_jenjang('SMA','MA');
            $data['kejuruan']= $this->m_public->jml_sklh_jenjang('SMK','');
            $data['spesial']= $this->m_public->jml_sklh_jenjang('SLB','');
            $data['jumlahh']= $this->m_public->jml_sklh_jenjang_semua();
            //Tabel Ke-empat
            $data['jsd'] = $this->m_public->jml_sd();
        $data['jsmp'] = $this->m_public->jml_smp();
        $data['jsma'] = $this->m_public->jml_sma();
        $data['jsmk'] = $this->m_public->jml_smk();

            $data['kms']= $this->m_public->kms_kab();
        $this->load->view('admin/datasiswa',$data);
        $this->load->view('foot_user');
    }

    function sekolah_kab($a)
        {
            $this->load->view('head_user');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['awal']=$this->m_public->sekolahkec($a);
            $data['dasar']= $this->m_public->jml_sklh_jenjang_kec('SD','MI');
            $data['menengah']= $this->m_public->jml_sklh_jenjang_kec('SMP','MTS');
            $data['atas']= $this->m_public->jml_sklh_jenjang_kec('SMA','MA');
            $data['kejuruan']= $this->m_public->jml_sklh_jenjang_kec('SMK','');
            $data['spesial']= $this->m_public->jml_sklh_jenjang_kec('SLB','');
            $this->load->view('admin/sekolahkabupaten',$data);
            $this->load->view('foot_user');
        }
    function skl_sekolah($a)
        {
            $this->load->view('head_user');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['sekolah']=$this->m_public->data_sekolah($a);
            $this->load->view('admin/sekolahnpsn',$data);
            $this->load->view('foot_user');
        }

        function data_prestasi()
        {
            $this->load->view('head_user');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['prestasi']= $this->m_public->prestasi();
            $this->load->view('admin/prestasi',$data);
            $this->load->view('foot_user');
        }

        function data_sekolah($a)
        {
            $this->load->view('head_user');
            $data['profil1']= $this->m_public->sklh_profil1($a);
            $data['profil2']= $this->m_public->sklh_profil2($a);
            $data['umum']= $this->m_public->sklh_umum($a);
            $data['kontak']= $this->m_public->kontak_utama($a);
            //Tabel3
            $data['kontak1']= $this->m_public->kontak_utama1($a);
            $this->load->view('admin/detail_sekolah',$data);
            $this->load->view('foot_user');
        }

        function data_akreditasi()
        {
            $this->load->view('head_user');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['kab']= $this->m_public->cbkab();
            $data['A']= $this->m_public->akred_kab('A');
            $data['B']= $this->m_public->akred_kab('B');
            $data['C']= $this->m_public->akred_kab('C');
            $data['z']= $this->m_public->akred_kab('');
            $data['l']= $this->m_public->akred_kab('-');
            $this->load->view('admin/akreditasi',$data);
            $this->load->view('foot_user');
        }

        function akreditasi_kab($a)
        {
            $this->load->view('head_user');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['kec']= $this->m_public->cbkec($a);
            $data['A']= $this->m_public->akred_kec('A',$a);
            $data['B']= $this->m_public->akred_kec('B',$a);
            $data['C']= $this->m_public->akred_kec('C',$a);
            $data['z']= $this->m_public->akred_kec('',$a);
            $data['l']= $this->m_public->akred_kec('-',$a);
            $this->load->view('admin/akreditasikec',$data);
            $this->load->view('foot_user');
        }

        function siswa_kabupaten_jnj()
        {
            $this->load->view('head_user');
             $data['jmlkms'] = $this->madmin->jml_kms();
             $data['jmlnonkms'] = $this->madmin->jml_nonkms();
             $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kab']= $this->m_public->acbkab();
            $data['aa']= $this->m_public->siswa_jenjang_kab('SD');
            $data['b']= $this->m_public->siswa_jenjang_kab('MI');
            $data['c']= $this->m_public->siswa_jenjang_kab('SMP');
            $data['d']= $this->m_public->siswa_jenjang_kab('MTS');
            $data['e']= $this->m_public->siswa_jenjang_kab('SMA');
            $data['f']= $this->m_public->siswa_jenjang_kab('MA');
            $data['g']= $this->m_public->siswa_jenjang_kab('SMK');
            $data['h']= $this->m_public->siswa_jenjang_kab('SLB');
            $data['jml']= $this->m_public->siswa_jenjang_kab1();
            $this->load->view('admin/siswa',$data);
            $this->load->view('foot_user');
        }

        function jmlsiswa_kab($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
             $data['jmlnonkms'] = $this->madmin->jml_nonkms();
             $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kab']= $this->m_public->cbkec($a);
            $data['aa']= $this->m_public->siswa_jenjang_kec('SD',$a);
            $data['b']= $this->m_public->siswa_jenjang_kec('MI',$a);
            $data['c']= $this->m_public->siswa_jenjang_kec('SMP',$a);
            $data['d']= $this->m_public->siswa_jenjang_kec('MTS',$a);
            $data['e']= $this->m_public->siswa_jenjang_kec('SMA',$a);
            $data['f']= $this->m_public->siswa_jenjang_kec('MA',$a);
            $data['g']= $this->m_public->siswa_jenjang_kec('SMK',$a);
            $data['h']= $this->m_public->siswa_jenjang_kec('SLB',$a);
            $this->load->view('admin/siswa_jenjang_kab',$data);
            $this->load->view('foot_user');   
        }

        function jmlsiswa_kec($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
             $data['jmlnonkms'] = $this->madmin->jml_nonkms();
             $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['sekolah']= $this->m_public->siswa_sekolah_kec($a);
            $this->load->view('admin/siswa_persekolah',$data);
            $this->load->view('foot_user'); 
        }


    function siswa(){
        $this->load->view('head_user');
        $data['jmlkms'] = $this->madmin->jml_kms();
        $data['jmlnonkms'] = $this->madmin->jml_nonkms();
        $data['jmlprsw'] = $this->madmin->jmlpr_sw();
        $data['jmllksw'] = $this->madmin->jmllk_sw();
        $data['kms']= $this->madmin->kms_kab();
        $data['kab_sklh']= $this->madmin->jml_siswakab();
        $this->load->view('admin/dsiswa', $data );
        $this->load->view('foot_user');
    }

    function siswakms(){
        $this->load->view('head_user');
        $data['jmlkms'] = $this->madmin->jml_kms();
        $data['jmlnonkms'] = $this->madmin->jml_nonkms();
        $data['jmlprsw'] = $this->madmin->jmlpr_sw();
        $data['jmllksw'] = $this->madmin->jmllk_sw();
        $data['kms']= $this->madmin->kms_kab();
        $data['kab_sklh']= $this->madmin->jml_siswakab();
        $this->load->view('admin/dsiswakms', $data );
        $this->load->view('foot_user');
    }

    function siswa_kms_kab($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
            $data['jmlnonkms'] = $this->madmin->jml_nonkms();
            $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kms']= $this->m_public->kms_kec($a);
            $this->load->view('admin/kms_kec',$data);
            $this->load->view('foot_user');
        }
        function siswa_kms_sklh($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
            $data['jmlnonkms'] = $this->madmin->jml_nonkms();
            $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kms']= $this->m_public->kms_sklh($a);
            $this->load->view('admin/kms_sklh',$data);
            $this->load->view('foot_user');

        }

    function siswa_kab($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
            $data['jmlnonkms'] = $this->madmin->jml_nonkms();
            $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kec_sklh']= $this->m_public->jml_siswakec($a);
            $this->load->view('admin/siswakabupaten',$data);
            $this->load->view('foot_user');
        }
        
        function skl_siswa($a)
        {
            $this->load->view('head_user');
            $data['jmlkms'] = $this->madmin->jml_kms();
            $data['jmlnonkms'] = $this->madmin->jml_nonkms();
            $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
            $data['kec_sklh']= $this->m_public->jml_siswanpsn($a);
            $this->load->view('admin/siswanpsn',$data);
            $this->load->view('foot_user');
        }


    function tenpendik(){
        $this->load->view('head_user');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['jml'] = $this->madmin->jml_tpty();
        $data['kab']= $this->madmin->kab();
        $data['all']= $this->madmin->ten_kab();
        $data['laki']= $this->madmin->ten_kab_jk('L');
        $data['perempuan']= $this->madmin->ten_kab_jk('P');
        $data['ptt']= $this->madmin->ten_kab_p('PTT');
        $data['pty']= $this->madmin->ten_kab_p('PTY');
        $data['gtt']= $this->madmin->ten_kab_p('GTT');
        $data['gty']= $this->madmin->ten_kab_p('GTY');
        $this->load->view('admin/dten', $data);
        $this->load->view('foot_user');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('Nama');
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('npsn');
        session_destroy();
        redirect('');
    }

//==================TAMI=================


}
?>