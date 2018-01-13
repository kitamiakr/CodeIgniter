<?php 


class c_public extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_public');
        $this->load->model('madmin');
		$this->load->helper('url');
	}

    

	function index(){
            $this->load->view('public/header');
            //semua data 
            $data['dat']= $this->m_public->jml_sklh();
            $data['sis']= $this->m_public->jml_siswa();
            $data['gur']= $this->m_public->jml_guru();
            //Tabel ke-dua data siswa per kabupaten
            $data['kab_sklh']= $this->m_public->jml_siswakab();
            //Tabel Ke-tiga data sekolah
            
            $data['dasar']= $this->m_public->jml_sklh_jenjang('SD','MI');
            $data['menengah']= $this->m_public->jml_sklh_jenjang('SMP','MTS');
            $data['atas']= $this->m_public->jml_sklh_jenjang('SMA','MA');
            $data['kejuruan']= $this->m_public->jml_sklh_jenjang('SMK','');
            $data['spesial']= $this->m_public->jml_sklh_jenjang('SLB','');
            //Tabel Ke-empat
            $data['kms']= $this->m_public->kms_kab();
            //Tabel Ke-Lima data guru
            $data['kab']= $this->m_public->kab();
            $data['all']= $this->m_public->guru_kab();
            $data['laki']= $this->m_public->guru_kab_jk('L');
            $data['perempuan']= $this->m_public->guru_kab_jk('P');
            
            //tampilkan jumlah saja
            $data['jml_sek']= $this->m_public->count_jmlsek();
            $data['jumlahSekolah'] = $this->m_public->getJumlahSekolah();
            $data['jumlahGuru'] = $this->m_public->getJumlahGuru();
            $data['jumlahTenagaPen'] = $this->m_public->getJumlahTenagaPen();
            $data['jumlahSiswa'] = $this->m_public->getJumlahSiswa();

            //jumlah akreditasi sekolah umum 
             $data['akre_a']= $this->m_public->akre_a();
             $data['akre_b']= $this->m_public->akre_b();
             $data['akre_c']= $this->m_public->akre_c();
             $data['non_akre']= $this->m_public->non_akre();

             //jumlah akreditasi sekolah non-umum 
              $data['jur_a']= $this->m_public->jur_a();
              $data['jur_b']= $this->m_public->jur_b();
              $data['jur_c']= $this->m_public->jur_c();
              $data['jur_non']= $this->m_public->jur_non();

            $this->load->view('public/home_public',$data);
            $this->load->view('public/footer');
	}

    function guru_jk_kab(){
        $this->load->view('head_public');
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
        $this->load->view('page/kab_dguru', $data);
        $this->load->view('foot_public');
    }

    function guru_jk_kec($id){
        $this->load->view('head_public');
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

        $this->load->view('page/kec_dguru_jk', $data);
        $this->load->view('foot_public');
    }

    function guru_jk_sk($a){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['gr'] = $this->madmin->jml_gr_sk($a);
        $data['grl'] = $this->madmin->jml_grl_sk($a);
        $data['grp'] = $this->madmin->jml_grp_sk($a);
        $this->load->view('page/df_dguru_jk', $data);
        $this->load->view('foot_public');
    }

    function guru_kab_sts(){
        $this->load->view('head_public');
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
        $this->load->view('page/kab_sts_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_kec_sts($id){
        $this->load->view('head_public');
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
        $this->load->view('page/kec_sts_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_sts_sk($a){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['pnsd'] = $this->madmin->guru_sts_pnsd($a);
        $data['hnr'] = $this->madmin->guru_sts_hnr($a);
        $data['pns'] = $this->madmin->guru_sts_pns($a);
        $data['gty'] = $this->madmin->guru_sts_gty($a);
        $data['gtt'] = $this->madmin->guru_sts_gtt($a);
        $this->load->view('page/df_dguru_sts', $data);
        $this->load->view('foot_public');
    }

    function guru_kab_stf(){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['sdh'] = $this->madmin->gr_kab_stf('Sudah');
        $data['blm'] = $this->madmin->gr_kab_stf('Belum');
        $this->load->view('page/kab_stf_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_kec_stf($id){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kec'] = $this->madmin->kec($id);
        $data['sdh'] = $this->madmin->gr_kec_stf('Sudah', $id);
        $data['blm'] = $this->madmin->gr_kec_stf('Belum', $id);
        $this->load->view('page/kec_stf_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_stf_sk($a){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['sdh'] = $this->madmin->guru_stf_sdh($a);
        $data['blm'] = $this->madmin->guru_stf_blm($a);
        $this->load->view('page/df_dguru_stf', $data);
        $this->load->view('foot_public');
    }

    function guru_kab_pen(){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kab'] = $this->madmin->kab();
        $data['s1'] = $this->madmin->gr_kab_pen('S1');
        $data['s2'] = $this->madmin->gr_kab_pen('S2');
        $data['d4'] = $this->madmin->gr_kab_pen('D4');
        $data['slta'] = $this->madmin->gr_kab_pen('SLTA');
        $this->load->view('page/kab_pen_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_kec_pen($id){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['kec']= $this->madmin->kec($id);
        $data['s1'] = $this->madmin->gr_kec_pen('S1', $id);
        $data['s2'] = $this->madmin->gr_kec_pen('S2', $id);
        $data['d4'] = $this->madmin->gr_kec_pen('D4', $id);
        $data['slta'] = $this->madmin->gr_kec_pen('SLTA', $id);
        $this->load->view('page/kec_pen_gr', $data);
        $this->load->view('foot_public');
    }

    function guru_pen_sk($a){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->madmin->jmlg_pns();
        $data['jmlgnpns'] = $this->madmin->jmlg_npns();
        $data['jmlstf'] = $this->madmin->jml_stf();
        $data['jmls1'] = $this->madmin->jml_s1();
        $data['s1'] = $this->madmin->guru_pen_s1($a);
        $data['s2'] = $this->madmin->guru_pen_s2($a);
        $data['d4'] = $this->madmin->guru_pen_d4($a);
        $data['slta'] = $this->madmin->guru_pen_slta($a);
        $this->load->view('page/df_dguru_pen', $data);
        $this->load->view('foot_public');
    }

    function ten_jk_kab(){
        $this->load->view('head_public');
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
        $this->load->view('page/kab_dten_jk', $data);
        $this->load->view('foot_public');
    }

    function ten_jk_kec($id){
        $this->load->view('head_public');
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

        $this->load->view('page/kec_ten_jk', $data);
        $this->load->view('foot_public');
    }

        function ten_jk_sk($a){
        $this->load->view('head_public');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['gr'] = $this->madmin->jml_tr_sk($a);
        $data['grl'] = $this->madmin->jml_trl_sk($a);
        $data['grp'] = $this->madmin->jml_trp_sk($a);
        $this->load->view('page/df_dten_jk', $data);
        $this->load->view('foot_public');
    }

    function ten_kab_sts(){
        $this->load->view('head_public');
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
        $this->load->view('page/kab_sts_tn', $data);
        $this->load->view('foot_public');
    }

    function ten_kec_sts($id){
        $this->load->view('head_public');
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
        $this->load->view('page/kec_sts_tn', $data);
        $this->load->view('foot_public');
    }

    function ten_sts_sk($a){
        $this->load->view('head_public');
        $data['jmltpty'] = $this->madmin->jml_tpty();
        $data['jmltptt'] = $this->madmin->jml_tptt();
        $data['jmltgtt'] = $this->madmin->jml_tgtt();
        $data['jmltgty'] = $this->madmin->jml_tgty();
        $data['pty'] = $this->madmin->ten_sts_pty($a);
        $data['hnr'] = $this->madmin->ten_sts_hnr($a);
        $data['ptt'] = $this->madmin->ten_sts_ptt($a);
        $data['gty'] = $this->madmin->ten_sts_gty($a);
        $data['gtt'] = $this->madmin->ten_sts_gtt($a);
        $this->load->view('page/df_dten_sts', $data);
        $this->load->view('foot_public');
    }

    function ten_kab_pen(){
        $this->load->view('head_public');
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
        $this->load->view('page/kab_pen_ten', $data);
        $this->load->view('foot_public');
    }

    function ten_kec_pen($id){
        $this->load->view('head_public');
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
        $this->load->view('page/kec_pen_ten', $data);
        $this->load->view('foot_public');
    }

    function ten_pen_sk($a){
        $this->load->view('head_public');
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
        $this->load->view('page/df_dten_pen', $data);
        $this->load->view('foot_public');
    }


  public function wakasek()
    {
        $data['wakasek'] = $this->m_public->jml_wakasek();
        $this->load->view('page/wakasek',$data);
    }
    public function dataprestasi()
    {
        $querykab   = $this->db>query("SELECT * FROM kabupaten");
        $querykab   = $querykab->result();
        var_dump($querykab);
    }
  public function sekolah()
  {
    
    $this->load->view('head_public');
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
            $data['jumlah']= $this->m_public->jml_sklh_jenjang_semua();
            //Tabel Ke-empat
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();

            $data['kms']= $this->m_public->kms_kab();
    $this->load->view('page/datasiswa',$data);
    $this->load->view('foot_public');
  }

    function siswa(){
        $this->load->view('head_public');
        $data['jmlkms'] = $this->m_public->jml_kms();
        $data['jmlnonkms'] = $this->m_public->jml_nonkms();
        $data['jmlprsw'] = $this->m_public->jmlpr_sw();
        $data['jmllksw'] = $this->m_public->jmllk_sw();
        $data['kms']= $this->m_public->kms_kab();
        $data['kab_sklh']= $this->m_public->jml_siswakab();
        $this->load->view('page/dsiswa', $data );
        $this->load->view('foot_public');
    }

 function siswa_kab($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kec_sklh']= $this->m_public->jml_siswakec($a);
            $this->load->view('page/siswakabupaten',$data);
            $this->load->view('foot_public');
        }
        
        function skl_siswa($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kec_sklh']= $this->m_public->jml_siswanpsn($a);
            $this->load->view('page/siswanpsn',$data);
            $this->load->view('foot_public');
        }
        
        function sekolah_kab($a)
        {
            $this->load->view('head_public');
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
            $this->load->view('page/sekolahkabupaten',$data);
            $this->load->view('foot_public');
        }
        function skl_sekolah($a)
        {
            $this->load->view('head_public');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();
            $data['sekolah']=$this->m_public->data_sekolah($a);
            $this->load->view('page/sekolahnpsn',$data);
            $this->load->view('foot_public');
        }
        function siswa_kms_kab($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kms']= $this->m_public->kms_kec($a);
            $this->load->view('page/kms_kec',$data);
            $this->load->view('foot_public');
        }
        function siswa_kms_sklh($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kms']= $this->m_public->kms_sklh($a);
            $this->load->view('page/kms_sklh',$data);
            $this->load->view('foot_public');

        }
        function guru_kab($a)
        {
            $this->load->view('head_public');
            $data['kec']= $this->m_public->kec($a);
            $data['all']= $this->m_public->guru_kec();
            $data['laki']= $this->m_public->guru_kec_jk('L');
            $data['perempuan']= $this->m_public->guru_kec_jk('P');
            $this->load->view('page/guru_kec',$data);
            $this->load->view('foot_public');
        }
        function guru_sklh($a)
        {
            $this->load->view('head_public');
            $data['all']= $this->m_public->guru_sklh($a);
            $data['laki']= $this->m_public->guru_sklh_jk('L',$a);
            $data['perempuan']= $this->m_public->guru_sklh_jk('P',$a);
            $this->load->view('page/guru_sklh',$data);
            $this->load->view('foot_public');
        }

        function guru(){
        $this->load->view('head_public');
        $data['jmlgpns'] = $this->m_public->jmlg_pns();
        $data['jmlgnpns'] = $this->m_public->jmlg_npns();
        $data['jmlstf'] = $this->m_public->jml_stf();
        $data['jmls1'] = $this->m_public->jml_s1();

        $data['kab']= $this->m_public->kab();
        $data['all']= $this->m_public->guru_kab();
        $data['laki']= $this->m_public->guru_kab_jk('L');
        $data['perempuan']= $this->m_public->guru_kab_jk('P');
        $data['al']= $this->m_public->pns_kab();
        $data['pns']= $this->m_public->pns_kab_np('PNS DPK');
        $data['nonpns']= $this->m_public->pns_kab_np('GTT');
        $data['srt']= $this->m_public->guru_kab_s('Sudah');
        $data['d2']= $this->m_public->guru_kab_p('D2');
        $data['d3']= $this->m_public->guru_kab_p('D3');
        $data['d4']= $this->m_public->guru_kab_p('D4');
        $data['s1']= $this->m_public->guru_kab_p('S1');
        $data['s2']= $this->m_public->guru_kab_p('S2');
        $this->load->view('page/dguru', $data);
        $this->load->view('foot_public');
         }

        function data_sekolah($a)
        {
            $this->load->view('head_public');
            $data['profil1']= $this->m_public->sklh_profil1($a);
            $data['profil2']= $this->m_public->sklh_profil2($a);
            $data['umum']= $this->m_public->sklh_umum($a);
            $data['kontak']= $this->m_public->kontak_utama($a);
            //Tabel3
            $data['kontak1']= $this->m_public->kontak_utama1($a);
            $this->load->view('page/detail_sekolah',$data);
            $this->load->view('foot_public');
        }
        function data_sekolah1($a)
        {
            $this->load->view('head_public');
            //Tabel1
            $data['umum']= $this->m_public->sklh_umum($a);
            //Tabel2
            $data['siswa']= $this->m_public->siswa($a);
            $data['guru_pl']= $this->m_public->jmlguru($a);
            $data['guru_p']= $this->m_public->jmlguru_p($a);
            $data['guru_l']= $this->m_public->jmlguru_l($a);
            //Tabel3
            
            $this->load->view('page/guru_rekap',$data);
            $this->load->view('foot_public');
        }
        function data_sekolah2($a)
        {
            //Tabel1
            $data['umum']= $this->m_public->sklh_umum($a);
            //Tabel2
            $data['kontak']= $this->m_public->kontak_utama($a);
            //Tabel3
            $data['kontak1']= $this->m_public->kontak_utama1($a);
            $this->load->view('page/detail_sekolah',$data);
        }

        function data_prestasi()
        {
            $this->load->view('head_public');
            $data['jsd'] = $this->m_public->jml_sd();
            $data['jsmp'] = $this->m_public->jml_smp();
            $data['jsma'] = $this->m_public->jml_sma();
            $data['jsmk'] = $this->m_public->jml_smk();

            $data['prestasi']= $this->m_public->prestasi();
            $this->load->view('page/prestasi',$data);
            $this->load->view('foot_public');
        }

        function data_akreditasi()
        {
            $this->load->view('head_public');
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
            $this->load->view('page/akreditasi',$data);
            $this->load->view('foot_public');
        }

        function akreditasi_kab($a)
        {
            $this->load->view('head_public');
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
            $this->load->view('page/akreditasikec',$data);
            $this->load->view('foot_public');
        }

        function siswa_kabupaten_jnj()
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->madmin->jml_kms();
            $data['jmlnonkms'] = $this->madmin->jml_nonkms();
            $data['jmlprsw'] = $this->madmin->jmlpr_sw();
            $data['jmllksw'] = $this->madmin->jmllk_sw();
           $data['kms']= $this->madmin->kms_kab();
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
            $this->load->view('page/siswa',$data);
            $this->load->view('foot_public');
        }

        function siswakms(){
        $this->load->view('head_public');
        $data['jmlkms'] = $this->madmin->jml_kms();
        $data['jmlnonkms'] = $this->madmin->jml_nonkms();
        $data['jmlprsw'] = $this->madmin->jmlpr_sw();
        $data['jmllksw'] = $this->madmin->jmllk_sw();
        $data['kms']= $this->madmin->kms_kab();
        $data['kab_sklh']= $this->madmin->jml_siswakab();
        $this->load->view('page/dsiswakms', $data );
        $this->load->view('foot_public');
    }


        function jmlsiswa_kab($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kms']= $this->m_public->kms_sklh($a);
            $data['kab']= $this->m_public->cbkec($a);
            $data['aa']= $this->m_public->siswa_jenjang_kec('SD',$a);
            $data['b']= $this->m_public->siswa_jenjang_kec('MI',$a);
            $data['c']= $this->m_public->siswa_jenjang_kec('SMP',$a);
            $data['d']= $this->m_public->siswa_jenjang_kec('MTS',$a);
            $data['e']= $this->m_public->siswa_jenjang_kec('SMA',$a);
            $data['f']= $this->m_public->siswa_jenjang_kec('MA',$a);
            $data['g']= $this->m_public->siswa_jenjang_kec('SMK',$a);
            $data['h']= $this->m_public->siswa_jenjang_kec('SLB',$a);
            $this->load->view('page/siswa_jenjang_kab',$data);
            $this->load->view('foot_public');   
        }

        function jmlsiswa_kec($a)
        {
            $this->load->view('head_public');
            $data['jmlkms'] = $this->m_public->jml_kms();
            $data['jmlnonkms'] = $this->m_public->jml_nonkms();
            $data['jmlprsw'] = $this->m_public->jmlpr_sw();
            $data['jmllksw'] = $this->m_public->jmllk_sw();
            $data['kms']= $this->m_public->kms_sklh($a);
            $data['sekolah']= $this->m_public->siswa_sekolah_kec($a);
            $this->load->view('page/siswa_persekolah',$data);
            $this->load->view('foot_public'); 
        }

    


        
        
        
}