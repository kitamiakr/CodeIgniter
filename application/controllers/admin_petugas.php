<?php

class Admin_petugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('madmin');
        $this->load->model('UserModel');
        $this->load->helper('url');
        $this->load->library('lib_new');
    }

    function index(){
        $data['jmltsklh'] = $this->madmin->jml_tsklh();
        $data['jmlttenk'] = $this->madmin->jml_ttenk();
        $data['jmltssw'] = $this->madmin->jml_tssw();
        $data['jmltguru'] = $this->madmin->jml_tguru();
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $this->load->view('head_sekolah');
        $data['prof'] = $this->madmin->tampil($a)->result();
        $this->load->view('admin/beranda_sekolah', $data);
        $this->load->view('foot_sekolah');
    }
//===========hapus
    function hapus_siswa($id){
         $this->madmin->hapus_siswa($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/siswa');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/siswa');
                }
    }

    function hapus_bangunan($id){
         $this->madmin->hapus_bangunan($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/sekolah');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/sekolah');
                }
    }

     function hapus_tanah($id){
         $this->madmin->hapus_tanah($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/sekolah');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/sekolah');
                }
    }

    function hapus_guru($id){
         $this->madmin->hapus_guru($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/guru');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/guru');
                }
    }

    function hapus_kepsek($id){
         $this->madmin->hapus_kepsek($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/kepsek');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/kepsek');
                }
    }

     function hapus_tenkependik($id){
         $this->madmin->hapus_kepsek($id);
                if ($this->db->affected_rows()) {
                    //$this->session->set_flashdata('info', 'Berhasil dihapus');
                        redirect('/admin_petugas/tenkependik');
                }
                else{
                    //$this->session->set_flashdata('info', 'Gagal dihapus');
                    redirect('/admin_petugas/tenkependik');
                }
    }

//==============tambah
    function tambah_bangunan(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                    //$a = 
                    $b = $this->input->post('nama_bangunan');
                    $c = $this->input->post('kondisi_bangunan');
                    $d = $this->input->post('kostruksi_bangunan');
                    $e = $this->input->post('luas_lantai');
                    $f = $this->input->post('lokasi');
                    $g = $this->input->post('tahun_pembangunan');
                    $h = $this->input->post('luas_bangunan');
                    $i = $this->input->post('biaya_pembangunan');
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'nama_bangunan'         => $b,
                        'kondisi_bangunan'      => $c,
                        'kostruksi_bangunan'    => $d,
                        'luas_lantai'           => $e,
                        'lokasi'                => $f,
                        'tahun_pembangunan'     => $g,
                        'luas_bangunan'         => $h,
                        'biaya_pembangunan'     => $i
                         );
                    $query=$this->madmin->insert_bangunan($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/sekolah');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_bangunan');
            }


    }


    function tambah_tanah(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                   
                    $b = $this->input->post('kepemilikan');
                    $c = $this->input->post('atasnama_sertifikat');
                    $d = $this->input->post('status_tanah');
                    $e = $this->input->post('luas_tanah');
                    $f = $this->input->post('no_sertifikat');
                    $g = $this->input->post('thn_perolehan');
                    $h = $this->input->post('asal_usul');
                    $i = $this->input->post('letak');
                    $j = $this->input->post('peruntukan');
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'kepemilikan'            => $b,
                        'atasnama_sertifikat'    => $c,
                        'status_tanah'           => $d,
                        'luas_tanah'             => $e,
                        'no_sertifikat'          => $f,
                        'thn_perolehan'          => $g,
                        'asal_usul'              => $h,
                        'letak'                  => $i,
                        'peruntukan'             => $j
                         );
                    $query=$this->madmin->insert_tanah($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/sekolah');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_tanah');
            }


    }


    function tambah_siswa(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                    //$a = 
                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('kelas');
                    $d = $this->input->post('jurusan');
                    $e = $this->input->post('rombel');
                    $f = $this->input->post('jumlah_putra');
                    $g = $this->input->post('jumlah_putri');
                    $h = $this->input->post('kms');
                    $i = $this->input->post('non_kms');
                    $j = $this->input->post('jumlah_siswa');
                    $object = array(  
                        'npsn' => $this->session->userdata('npsn'),
                        'tahun_ajaran'   => $b,
                        'kelas'          => $c,
                        'jurusan'        => $d,
                        'rombel'         => $e,
                        'jumlah_putra'   => $f,
                        'jumlah_putri'   => $g,
                        'kms'            => $h,
                        'non_kms'        => $i,
                        'jumlah_siswa'   => $j
                       

                         );
                    $query=$this->madmin->insert_siswa($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/siswa');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_siswa');
            }


    }

    function tambah_guru(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                    //$a = 
                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('nbm');
                    $d = $this->input->post('nama_guru');
                    $e = $this->input->post('bidang');
                    $f = $this->input->post('nuptk');
                    $g = $this->input->post('nip');
                    $h = $this->input->post('tempat_lahir');
                    $i = $this->input->post('tgl_lahir');
                    $j = $this->input->post('telepon');
                    $k = $this->input->post('email');
                    $l = $this->input->post('pangkat_golruang');
                    $m = $this->input->post('tgl_pengangkatan');
                    $n = $this->input->post('sertifikasi_guru');
                    $o = $this->input->post('tmt_sertifikasi');
                    $p = $this->input->post('jk');
                    $q = $this->input->post('sts_pegawai');
                    $r = $this->input->post('organisasi');
                    $s = $this->input->post('alamat');
                    $t = $this->input->post('rt_rw');
                    $u = $this->input->post('kelurahan');
                    $v = $this->input->post('kec');
                    $w = $this->input->post('kab');
                    $x = $this->input->post('pendidikan');
                    $y = $this->input->post('jurusan');
                    $z = $this->input->post('univ');
                    $aa = $this->input->post('thn_lulus');

                    $object = array(  
                        'npsn' => $this->session->userdata('npsn'),
                        'tahun_ajaran'      =>$b,
                        'nbm'               =>$c,
                        'nama_guru'         =>$d,
                        'bidang'            =>$e,
                        'nuptk'             =>$f,
                        'nip'               =>$g,
                        'tempat_lahir'      =>$h,
                        'tgl_lahir'         =>$i,
                        'telepon'           =>$j,
                        'email'             =>$k,
                        'pangkat_golruang'  =>$l,
                        'tgl_pengangkatan'  =>$m,
                        'sertifikasi_guru'  =>$n,
                        'tmt_sertifikasi'  =>$o,
                        'jk'                =>$p,
                        'sts_pegawai'       =>$q,
                        'organisasi'        =>$r,
                        'alamat'            =>$s,
                        'rt_rw'             =>$t,
                        'kelurahan'         =>$u,
                        'kec'               =>$v,
                        'kab'               =>$w,
                        'pendidikan'        =>$x,
                        'jurusan'           =>$y,
                        'univ'              =>$z,
                        'thn_lulus'         =>$aa
                       

                         );
                    $query=$this->madmin->insert_guru($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/guru');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_guru');
            }


    }



    function tambah_kepsek(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                    //$a = 
                    $b = $this->input->post('nbm');
                    $c = $this->input->post('tgl_lahir');
                    $d = $this->input->post('sk_pengangkatan');
                    $e = $this->input->post('tgl_sk');
                    $f = $this->input->post('asal_sk');
                    $g = $this->input->post('tmt_jabatan');
                    $h = $this->input->post('masa_tugaske');
                    $i = $this->input->post('tgl_berahir');
                    $object = array(  
                        'npsn'            => $this->session->userdata('npsn'),
                        'nbm'             => $b,
                        'tgl_lahir'       => $c,
                        'sk_pengangkatan' => $d,
                        'tgl_sk'          => $e,
                        'asal_sk'         => $f,
                        'tmt_jabatan'     => $g,
                        'masa_tugaske'    => $h,
                        'tgl_berahir'     => $i,
                       

                         );
                    $query=$this->madmin->insert_kepsek($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/kepsek');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_kepsek');
            }


    }

    function tambah_tenkependik(){
       // $cek = $this->input->post('submit');
        //var_dump($cek);
        //die();
         $this->load->view('head_sekolah');
            if($this->input->post('submit') !== NULL)
            {     
                    //$a = 
                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('nbm');
                    $d = $this->input->post('jabatan');
                    $e = $this->input->post('nama');
                    $f = $this->input->post('nip');
                    $g = $this->input->post('tempat_lhr');
                    $h = $this->input->post('tgl_lhr');
                    $i = $this->input->post('telepon');
                    $j = $this->input->post('email');
                    $k = $this->input->post('pangkat');
                    $l = $this->input->post('tgl_pengangkatan');
                    $m = $this->input->post('jk');
                    $n = $this->input->post('status_pegawai');
                    $o = $this->input->post('organisasi');
                    $p = $this->input->post('alamat');
                    $q = $this->input->post('rt_rw');
                    $r = $this->input->post('kel');
                    $s = $this->input->post('kec');
                    $t = $this->input->post('kab');
                    $u = $this->input->post('prov');
                    $v = $this->input->post('pnd_thr');

                    $object = array(  
                        'npsn' => $this->session->userdata('npsn'),
                    'tahun_ajaran'      =>$b,
                    'nbm'               =>$c,
                    'jabatan'           =>$d,
                    'nama'              =>$e,
                    'nip'               =>$f,
                    'tempat_lhr'        =>$g,
                    'tgl_lhr'           =>$h,
                    'telepon'           =>$i,
                    'email'             =>$j,
                    'pangkat'           =>$k,
                    'tgl_pengangkatan'  =>$l,
                    'jk'                =>$m,
                    'status_pegawai'    =>$n,
                    'organisasi'        =>$o,
                    'alamat'            =>$p,
                    'rt_rw'             =>$q,
                    'kel'               =>$r,
                    'kec'               =>$s,
                    'kab'               =>$t,
                    'prov'              =>$u,
                    'pnd_thr'           =>$v
                       

                         );
                    $query=$this->madmin->insert_tenkependik($object);
                    if ($query !== NULL) {
                        
                        redirect('/admin_petugas/tenkependik');
                    } 
                    else{
                        echo "gagal";
                    }
            }
            else
            {
                
                 $this->load->view('tambah_tenkependik');
            }


    }


    //=======edit==================
    function edit($id){
        // $this->load->view('head_sekolah');
        // $where = array('id' => $id);
        // $data['user'] = $this->madmin->edit_data($where,'user')->result();
        // $this->load->view('edit',$data);
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                   // $where = array('npsn' => $this->session->userdata('npsn'));
                    $b = $this->input->post('username');
                    $c = $this->input->post('email');
                    $d = $this->input->post('password');
                    $e = $this->input->post('nama');
                    $f = $this->input->post('level');
                    $g = $this->input->post('foto');
                   
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'username'     => $b,
                        'password'     => $c,
                        'nama'         => $d,
                        'level'        => $e,
                        'foto'         => $f
                         );
            $this->db->where('id', $id);
            $this->db->update('user', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/user');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/user');
            }
        }
        else 
        {
        //      $this->load->view('admin/user_sekolah', $data);
        // $this->load->view('foot_sekolah');
           // $data['content'] = '/admin/form_update';
            $data['a'] = $this->db->get_where('user',array('id'=> $id))->row();
            $this->load->view('edit',$data);
        }
    }

   

    function edit_bangunan($id){
        // $this->load->view('head_sekolah');
        // $where = array('id' => $id);
        // $data['user'] = $this->madmin->edit_data($where,'user')->result();
        // $this->load->view('edit',$data);
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                   // $where = array('npsn' => $this->session->userdata('npsn'));
                    $b = $this->input->post('nama_bangunan');
                    $c = $this->input->post('kondisi_bangunan');
                    $d = $this->input->post('kostruksi_bangunan');
                    $e = $this->input->post('luas_lantai');
                    $f = $this->input->post('lokasi');
                    $g = $this->input->post('tahun_pembangunan');
                    $h = $this->input->post('luas_bangunan');
                    $i = $this->input->post('biaya_pembangunan');
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'nama_bangunan'         => $b,
                        'kondisi_bangunan'      => $c,
                        'kostruksi_bangunan'    => $d,
                        'luas_lantai'           => $e,
                        'lokasi'                => $f,
                        'tahun_pembangunan'     => $g,
                        'luas_bangunan'         => $h,
                        'biaya_pembangunan'     => $i
                         );
            $this->db->where('id_bangunan', $id);
            $this->db->update('aset_bangunan', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/sekolah');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/sekolah');
            }
        }
        else 
        {
        //      $this->load->view('admin/user_sekolah', $data);
        // $this->load->view('foot_sekolah');
           // $data['content'] = '/admin/form_update';
            $data['a'] = $this->db->get_where('aset_bangunan',array('id_bangunan'=> $id))->row();
            $this->load->view('edit_bangunan',$data);
        }
    }

    function edit_tanah($id){
        // $this->load->view('head_sekolah');
        // $where = array('id' => $id);
        // $data['user'] = $this->madmin->edit_data($where,'user')->result();
        // $this->load->view('edit',$data);
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                   // $where = array('npsn' => $this->session->userdata('npsn'));
                    $b = $this->input->post('kepemilikan');
                    $c = $this->input->post('atasnama_sertifikat');
                    $d = $this->input->post('status_tanah');
                    $e = $this->input->post('luas_tanah');
                    $f = $this->input->post('no_sertifikat');
                    $g = $this->input->post('thn_perolehan');
                    $h = $this->input->post('asal_usul');
                    $i = $this->input->post('letak');
                    $j = $this->input->post('peruntukan');
                    $object = array(    
                        'npsn' => $this->session->userdata('npsn'),
                        'kepemilikan'            => $b,
                        'atasnama_sertifikat'    => $c,
                        'status_tanah'           => $d,
                        'luas_tanah'             => $e,
                        'no_sertifikat'          => $f,
                        'thn_perolehan'          => $g,
                        'asal_usul'              => $h,
                        'letak'                  => $i,
                        'peruntukan'             => $j
                         );
            $this->db->where('id_tanah', $id);
            $this->db->update('aset_tanah', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/sekolah');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/sekolah');
            }
        }
        else 
        {
        //      $this->load->view('admin/user_sekolah', $data);
        // $this->load->view('foot_sekolah');
           // $data['content'] = '/admin/form_update';
            $data['a'] = $this->db->get_where('aset_tanah',array('id_tanah'=> $id))->row();
            $this->load->view('edit_tanah',$data);
        }
    }



    function edit_siswa($id){
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('kelas');
                    $d = $this->input->post('jurusan');
                    $e = $this->input->post('rombel');
                    $f = $this->input->post('jumlah_putra');
                    $g = $this->input->post('jumlah_putri');
                    $h = $this->input->post('kms');
                    $i = $this->input->post('non_kms');
                    $j = $this->input->post('jumlah_siswa');
                    $object = array(  
                        'npsn' => $this->session->userdata('npsn'),
                        'tahun_ajaran'   => $b,
                        'kelas'          => $c,
                        'jurusan'        => $d,
                        'rombel'         => $e,
                        'jumlah_putra'   => $f,
                        'jumlah_putri'   => $g,
                        'kms'            => $h,
                        'non_kms'        => $i,
                        'jumlah_siswa'   => $j
                       

                         );
            $this->db->where('id_siswa', $id);
            $this->db->update('siswa', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/siswa');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/siswa');
            }
        }
        else 
        {
        
            $data['a'] = $this->db->get_where('siswa',array('id_siswa'=> $id))->row();
            $this->load->view('edit_siswa',$data);
        }
    }

    function edit_guru($id){
         $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('nbm');
                    $d = $this->input->post('nama_guru');
                    $e = $this->input->post('bidang');
                    $f = $this->input->post('nuptk');
                    $g = $this->input->post('nip');
                    $h = $this->input->post('tempat_lahir');
                    $i = $this->input->post('tgl_lahir');
                    $j = $this->input->post('telepon');
                    $k = $this->input->post('email');
                    $l = $this->input->post('pangkat_golruang');
                    $m = $this->input->post('tgl_pengangkatan');
                    $n = $this->input->post('sertifikasi_guru');
                    $o = $this->input->post('tmt_sertifikasi');
                    $p = $this->input->post('jk');
                    $q = $this->input->post('sts_pegawai');
                    $r = $this->input->post('organisasi');
                    $s = $this->input->post('alamat');
                    $t = $this->input->post('rt_rw');
                    $u = $this->input->post('kelurahan');
                    $v = $this->input->post('kec');
                    $w = $this->input->post('kab');
                    $x = $this->input->post('pendidikan');
                    $y = $this->input->post('jurusan');
                    $z = $this->input->post('univ');
                    $aa = $this->input->post('thn_lulus');

                    $object = array(  
                        'npsn' => $this->session->userdata('npsn'),
                        'tahun_ajaran'      =>$b,
                        'nbm'               =>$c,
                        'nama_guru'         =>$d,
                        'bidang'            =>$e,
                        'nuptk'             =>$f,
                        'nip'               =>$g,
                        'tempat_lahir'      =>$h,
                        'tgl_lahir'         =>$i,
                        'telepon'           =>$j,
                        'email'             =>$k,
                        'pangkat_golruang'  =>$l,
                        'tgl_pengangkatan'  =>$m,
                        'sertifikasi_guru'  =>$n,
                        'tmt_sertifikasi'  =>$o,
                        'jk'                =>$p,
                        'sts_pegawai'       =>$q,
                        'organisasi'        =>$r,
                        'alamat'            =>$s,
                        'rt_rw'             =>$t,
                        'kelurahan'         =>$u,
                        'kec'               =>$v,
                        'kab'               =>$w,
                        'pendidikan'        =>$x,
                        'jurusan'           =>$y,
                        'univ'              =>$z,
                        'thn_lulus'         =>$aa
                       

                         );
            $this->db->where('id_guru', $id);
            $this->db->update('data_guru', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/guru');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/guru');
            }
        }
        else 
        {
        
            $data['a'] = $this->db->get_where('data_guru',array('id_guru'=> $id))->row();
            $this->load->view('edit_guru',$data);
        }
    }

    function edit_kepsek($id){
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {     
                    $b = $this->input->post('nbm');
                    $c = $this->input->post('tgl_lahir');
                    $d = $this->input->post('sk_pengangkatan');
                    $e = $this->input->post('tgl_sk');
                    $f = $this->input->post('asal_sk');
                    $g = $this->input->post('tmt_jabatan');
                    $h = $this->input->post('masa_tugaske');
                    $i = $this->input->post('tgl_berahir');
                    $object = array(  
                        'npsn'            => $this->session->userdata('npsn'),
                        'nbm'             => $b,
                        'tgl_lahir'       => $c,
                        'sk_pengangkatan' => $d,
                        'tgl_sk'          => $e,
                        'asal_sk'         => $f,
                        'tmt_jabatan'     => $g,
                        'masa_tugaske'    => $h,
                        'tgl_berahir'     => $i,
                       

                         );
            $this->db->where('id_kepsek', $id);
            $this->db->update('kepsek', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/kepsek');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/kepsek');
            }
        }
        else 
        {
        
            $data['a'] = $this->db->get_where('kepsek',array('id_kepsek'=> $id))->row();
            $this->load->view('edit_kepsek',$data);
        }
    }


    function edit_tenkependik($id){
        $this->load->view('head_sekolah');
        if($this->input->post('submit') !== NULL)
            {       

                    $b = $this->input->post('tahun_ajaran');
                    $c = $this->input->post('nbm');
                    $d = $this->input->post('jabatan');
                    $e = $this->input->post('nama');
                    $f = $this->input->post('nip');
                    $g = $this->input->post('tempat_lhr');
                    $h = $this->input->post('tgl_lhr');
                    $i = $this->input->post('telepon');
                    $j = $this->input->post('email');
                    $k = $this->input->post('pangkat');
                    $l = $this->input->post('tgl_pengangkatan');
                    $m = $this->input->post('jk');
                    $n = $this->input->post('status_pegawai');
                    $o = $this->input->post('organisasi');
                    $p = $this->input->post('alamat');
                    $q = $this->input->post('rt_tw');
                    $r = $this->input->post('kel');
                    $s = $this->input->post('kec');
                    $t = $this->input->post('kab');
                    $u = $this->input->post('prov');
                    $v = $this->input->post('pend_thr');
                    $object = array(  
                        'npsn'            => $this->session->userdata('npsn'),
                            'tahun_ajaran'      =>$b,
                            'nbm'               =>$c,
                            'jabatan'           =>$d,
                            'nama'              =>$e,
                            'nip'               =>$f,
                            'tempat_lhr'        =>$g,
                            'tgl_lhr'           =>$h,
                            'telepon'           =>$i,
                            'email'             =>$j,
                            'pangkat'           =>$k,
                            'tgl_pengangkatan'  =>$l,
                            'jk'                =>$m,
                            'status_pegawai'    =>$n,
                            'organisasi'        =>$o,
                            'alamat'            =>$p,
                            'rt_tw'             =>$q,
                            'kel'               =>$r,
                            'kec'               =>$s,
                            'kab'               =>$t,
                            'prov'              =>$u,
                            'pend_thr'          =>$v
                       

                         );
            $this->db->where('id_tenkependik', $id);
            $this->db->update('tenkependik', $object);
            if ($this->db->affected_rows() !== NULL) {
               // $this->session->set_flashdata('info', 'Sudah di update');
                redirect('/admin_petugas/tenkependik');
            }
            else
            {
              // $this->session->set_flashdata('info', 'Belum di update');
               redirect('/admin_petugas/tenkependik');
            }
        }
        else 
        {
        
            $data['a'] = $this->db->get_where('tenkependik',array('id_tenkependik'=> $id))->row();
            $this->load->view('edit_tenkependik',$data);
        }
    }


    function user(){
        $a = array(
            'id' => $this->session->userdata('id')
            );        
        $this->load->view('head_sekolah');
        $data['user']= $this->madmin->tampil_user($a)->result();
        $this->load->view('admin/user_sekolah', $data);
        $this->load->view('foot_sekolah');
    }

     



    function statistik(){
        $this->load->view('head_sekolah');
        $this->load->view('admin/statistik_sekolah');
        $this->load->view('foot_sekolah');
    }

    function siswa(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset2']= $this->madmin->tampil_siswa($a)->result();
        $this->load->view('head_sekolah');
        $this->load->view('admin/dsiswa_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    function guru(){
        $this->load->view('head_sekolah');
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_guru($a)->result();            
        $this->load->view('admin/dguru_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    function sekolah(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $this->load->view('head_sekolah');
        $data['aset'] = $this->madmin->tampil_bangunan($a)->result();
        $data['aset2'] = $this->madmin->tampil_tanah($a)->result();
        $this->load->view('admin/dsekolah_sekolah', $data);
        $this->load->view('foot_sekolah');
    }

     function bangunan(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_bangunan($a)->result();
        $this->load->view('head_sekolah');
        $this->load->view('admin/dsekolah_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    function tanah(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset2']= $this->madmin->tampil_tanah($a)->result();
        $this->load->view('head_sekolah');
        $this->load->view('admin/dsekolah_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    


    

    function kepsek(){
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_kepsek($a)->result();
        $this->load->view('head_sekolah');
        $this->load->view('admin/dkepsek_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    function tenkependik(){
        $this->load->view('head_sekolah');
        $a = array(
            'npsn' => $this->session->userdata('npsn')
            );
        $data['aset']= $this->madmin->tampil_tenkependik($a)->result();
        $this->load->view('admin/dten_sekolah',$data);
        $this->load->view('foot_sekolah');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login_sekolah');
    }
}
?>