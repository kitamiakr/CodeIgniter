<?php
class Madmin extends CI_Model{
    function tampil_data(){
        return $this->db->get('user');
    }
    function tampil($a)
    {
        return $this->db->get_where('profil',$a);
    }
    function tambah_data($data, $table){
    	$this->db->insert($table, $data);
    }

    function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    function kms_kab(){
        $sql="select k.id as id, k.kabupaten as kab, sum(s.kms) as kms, sum(s.non_kms) as non_kms from profil as p join kabupaten as k on p.kab=k.id join siswa as s on s.npsn=p.npsn group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_siswakab()
    {
        $data = $this->db->query('SELECT k.id as id, k.kabupaten as kab, SUM(s.jumlah_putra+s.jumlah_putri) jumlah_siswa, SUM(s.jumlah_putra) as jumlah_putra, SUM(s.jumlah_putri) jumlah_putri FROM kabupaten as k JOIN profil as p ON k.id=p.kab JOIN siswa as s ON p.npsn=s.npsn GROUP BY p.kab ')->result_array();
        return $data;
    }

    function jml_tsklh()
    {
        $sql="SELECT COUNT(npsn) as jmskl FROM profil";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

     function jml_ttenk()
    {
        $sql="SELECT COUNT(npsn) as jmtenke FROM tenkependik ";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

     function jml_tssw()
    {
        $sql="SELECT SUM(jumlah_putri+jumlah_putra) as jmssw FROM siswa";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

     function jml_tguru()
    {
        $sql="SELECT COUNT(npsn) as jmtgr FROM data_guru";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_sd()
    {
        $sql="SELECT COUNT(jenjang) as jumlah FROM profil WHERE jenjang='SD' OR jenjang='MI' ";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_smp()
    {
        $sql="SELECT COUNT(jenjang) as jumlah2 FROM profil WHERE jenjang='SMP' OR jenjang='MTS'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_sma()
    {
        $sql="SELECT COUNT(jenjang) as jumlah3 FROM profil WHERE jenjang='SMA' OR jenjang='MAN'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_smk()
    {
        $sql="SELECT COUNT(jenjang) as jumlah4 FROM profil WHERE jenjang='SMK'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_kms()
    {
        $sql="SELECT SUM(kms) as jmlkms FROM siswa";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_nonkms()
    {
        $sql="SELECT SUM(non_kms) as jmlnkms FROM siswa";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmlpr_sw()
    {
        $sql="SELECT SUM(jumlah_putri) as jmlpr FROM siswa";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmllk_sw()
    {
        $sql="SELECT SUM(jumlah_putra) as jmllk FROM siswa";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmlg_pns()
    {
        $sql="SELECT COUNT(sts_pegawai) as stspns FROM data_guru WHERE sts_pegawai= 'PNS DPK' OR 'PNS' OR 'PNS (Guru' OR 'PNS Diperb' OR 'PNS Namaba' OR 'PNS/DPK' OR 'PNS Sekola' OR 'PNS Depag' OR 'PNS nota t'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmlg_npns()
    {
        $sql="SELECT COUNT(sts_pegawai) as stsnpns FROM data_guru WHERE sts_pegawai='GTT'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_stf()
    {
        $sql="SELECT COUNT(sertifikasi_guru) as stfguru FROM data_guru WHERE sertifikasi_guru='Sudah'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_s1()
    {
        $sql="SELECT COUNT(pendidikan) as jmlgs1 FROM data_guru WHERE pendidikan='S1'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_tpty()
    {
        $sql="SELECT COUNT(status_pegawai) as jmltenpty FROM tenkependik WHERE status_pegawai='PTY'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_tptt()
    {
        $sql="SELECT COUNT(jk) as jmltenptt FROM tenkependik WHERE jk='Pe'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_tgtt()
    {
        $sql="SELECT COUNT(jk) as jmltengtt FROM tenkependik WHERE jk='L'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_tgty()
    {
        $sql="SELECT COUNT(pnd_thr) as jmltengty FROM tenkependik WHERE pnd_thr='S1'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.jk='P' OR c.jk='L') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    # YANG TERBARU
    function guru_kab_jk($a,$b)
    {
        $sql="SELECT k.id as id,COUNT(g.nama_guru) as jumlah FROM data_guru as g RIGHT JOIN (SELECT * FROM profil WHERE jenjang = '$b') as p ON p.npsn = g.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE g.jk = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_kec_jk($a,$b,$id){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(g.nama_guru) as jumlah FROM kecamatan as k join (SELECT * FROM profil WHERE jenjang= '$b') as p on k.kode_kec=p.kec join data_guru as g on p.npsn=g.npsn where p.kab='$id' AND g.jk = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gurusd_kc_p($c){
        $sql="select k.kode_kec as id,k.nama_kec as nama,COUNT(g.nama_guru) as jumlah FROM kecamatan as k join (SELECT * FROM profil WHERE jenjang= 'SD') as p on k.kode_kec=p.kec join data_guru as g on p.npsn=g.npsn where p.kab='$c' AND g.jk = 'P' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_grp_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahp FROM profil as p JOIN (SELECT * FROM data_guru WHERE jk= 'P') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_grl_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE jk= 'L') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_gr_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlah FROM profil as p JOIN (SELECT * FROM data_guru WHERE jk= 'L' OR jk = 'P') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function kab()
    {
        $sql="select * from kabupaten";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function keca($a){
        $sql="select * from kecamatan";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function kec($a)
    {
        $sql="SELECT k.kode_kec as id, k.nama_kec as kec, count(p.npsn) jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec where k.kode_kab='$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gr_kab_sts($a)
    {
        $sql="SELECT k.id as id,COUNT(g.nama_guru) as jumlah FROM data_guru as g RIGHT JOIN profil as p ON p.npsn = g.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE g.sts_pegawai = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gr_kec_sts($a,$b){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(g.nama_guru) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join data_guru as g on p.npsn=g.npsn where p.kab='$b' AND g.sts_pegawai = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_sts_gty($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sts_pegawai= 'GTY') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_sts_pnsd($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sts_pegawai= 'PNS DPK') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_sts_gtt($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sts_pegawai= 'GTT') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_sts_pns($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sts_pegawai= 'PNS') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_sts_hnr($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sts_pegawai= 'Guru Honor') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }


    function gr_kab_stf($a)
    {
        $sql="SELECT k.id as id,COUNT(g.nama_guru) as jumlah FROM data_guru as g RIGHT JOIN profil as p ON p.npsn = g.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE g.sertifikasi_guru = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gr_kec_stf($a,$b){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(g.nama_guru) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join data_guru as g on p.npsn=g.npsn where p.kab='$b' AND g.sertifikasi_guru = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_stf_sdh($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE sertifikasi_guru= 'Sudah') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_stf_blm($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahb FROM profil as p JOIN (SELECT * FROM data_guru WHERE sertifikasi_guru= 'Belum') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gr_kab_pen($a)
    {
        $sql="SELECT k.id as id,COUNT(g.nama_guru) as jumlah FROM data_guru as g RIGHT JOIN profil as p ON p.npsn = g.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE g.pendidikan = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function gr_kec_pen($a,$b){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(g.nama_guru) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join data_guru as g on p.npsn=g.npsn where p.kab='$b' AND g.pendidikan = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_pen_s1($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE pendidikan= 'S1') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_pen_s2($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE pendidikan= 'S2') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_pen_d4($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE pendidikan= 'D4') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function guru_pen_slta($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(g.nama_guru) as jumlahl FROM profil as p JOIN (SELECT * FROM data_guru WHERE pendidikan= 'SLTA') as g ON p.npsn=g.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tenk_kab_jk($a,$b)
    {
        $sql="SELECT k.id, k.kabupaten, COUNT(t.nama) as jumlah FROM tenkependik as t JOIN (SELECT * FROM profil WHERE jenjang = '$b') as p ON p.npsn = t.npsn JOIN kabupaten as k ON p.kab = k.id WHERE t.jk = '$a' GROUP BY p.kab;";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tenk_kec_jk($a,$b,$id){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(t.nama) as jumlah FROM kecamatan as k join (SELECT * FROM profil WHERE jenjang= '$b') as p on k.kode_kec=p.kec join tenkependik as t on p.npsn=t.npsn where p.kab='$id' AND t.jk = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tensd_kc_p($c){
        $sql="select k.kode_kec as id,k.nama_kec as nama,COUNT(t.nama) as jumlah FROM kecamatan as k join (SELECT * FROM profil WHERE jenjang= 'SD') as p on k.kode_kec=p.kec join tenkependik as t on p.npsn=t.npsn where p.kab='$c' AND t.jk = 'P' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_trp_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahp FROM profil as p JOIN (SELECT * FROM tenkependik WHERE jk= 'Pe') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_trl_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE jk= 'L') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jml_tr_sk($a){
         $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlah FROM profil as p JOIN (SELECT * FROM tenkependik WHERE jk= 'L' OR jk = 'Pe') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tn_kab_sts($a)
    {
        $sql="SELECT k.id as id,COUNT(t.nama) as jumlah FROM tenkependik as t RIGHT JOIN profil as p ON p.npsn = t.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE t.status_pegawai = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tn_kec_sts($a,$b){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(t.nama) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join tenkependik as t on p.npsn=t.npsn where p.kab='$b' AND t.status_pegawai = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_sts_gty($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE status_pegawai= 'GTY') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function ten_sts_pty($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE status_pegawai= 'PTY') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function ten_sts_gtt($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE status_pegawai= 'GTT') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function ten_sts_ptt($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE status_pegawai= 'PTT') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function ten_sts_hnr($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE status_pegawai= 'Honor') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tn_kab_pen($a)
    {
        $sql="SELECT k.id as id,COUNT(t.nama) as jumlah FROM tenkependik as t RIGHT JOIN profil as p ON p.npsn = t.npsn RIGHT JOIN kabupaten as k ON p.kab = k.id WHERE t.pnd_thr = '$a' GROUP BY p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function tn_kec_pen($a,$b){
        $sql="select p.kec as id,k.nama_kec as nama, COUNT(t.nama) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join tenkependik as t on p.npsn=t.npsn where p.kab='$b' AND t.pnd_thr = '$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_s1($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'S1') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_s2($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'S2') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_d4($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'D4') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_d3($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'D3') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_d2($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'D2') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_pen_d1($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'D1') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

     function ten_pen_smk($a){
        $sql="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sk, p.jenjang as jenjang, COUNT(t.nama) as jumlahl FROM profil as p JOIN (SELECT * FROM tenkependik WHERE pnd_thr= 'SMK') as t ON p.npsn=t.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    #UDAH

    function pns_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.sts_pegawai='PNS DPK' OR c.sts_pegawai='GTT') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function pns_kab_np($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.sts_pegawai='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_s_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.sertifikasi_guru ='Sudah') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_kab_s($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.sertifikasi_guru='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_p_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.pendidikan ='D2' OR c.pendidikan ='D3' OR c.pendidikan ='D4' OR c.pendidikan ='S1' OR c.pendidikan ='S2') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guru_kab_p($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.pendidikan='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama) as jumlah_ten FROM profil as p join (SELECT * FROM tenkependik as c WHERE c.jk='Pe' OR c.jk='L') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_kab_jk($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama) as jumlah_ten FROM profil as p join (SELECT * FROM tenkependik as c WHERE c.jk='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_p_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama) as jumlah_ten FROM profil as p join (SELECT * FROM tenkependik as c WHERE c.status_pegawai ='PTY' OR c.status_pegawai ='PTT' OR c.status_pegawai ='Honor Daer' OR c.status_pegawai ='GTT' OR c.status_pegawai ='GTY') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function ten_kab_p($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama) as jumlah_ten FROM profil as p join (SELECT * FROM tenkependik as c WHERE c.status_pegawai='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function guruk_jml_jk($j,$n)
    {
        $sql ="SELECT k.kabupaten as kab, COUNT(g.nama_guru) as jumlahpg FROM data_guru as g JOIN profil as p on p.npsn=g.npsn JOIN kabupaten as k on p.kab=k.id WHERE g.jk ='$j' OR p.jenjang = '$n' GROUP BY k.id";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    //+========================FIKRI====================

    //=======tambah====
    public function insert_siswa($data)
    {
        return $this->db->insert('siswa', $data);
    }

     public function insert_bangunan($data)
    {
        return $this->db->insert('aset_bangunan', $data);
    }

     public function insert_tanah($data)
    {
        return $this->db->insert('aset_tanah', $data);
    }

     public function insert_guru($data)
    {
        return $this->db->insert('data_guru', $data);
    }

     public function insert_kepsek($data)
    {
        return $this->db->insert('kepsek', $data);
    }

    public function insert_tenkependik($data)
    {
        return $this->db->insert('tenkependik', $data);
    }





//=============hapus====
    public function hapus_siswa($param)
    {
        return $this->db->delete('siswa',array('id_siswa'=>$param));
    }

    public function hapus_bangunan($param)
    {
        return $this->db->delete('aset_bangunan',array('id_bangunan'=>$param));
    }

    public function hapus_tanah($param)
    {
        return $this->db->delete('aset_tanah',array('id_tanah'=>$param));
    }

    public function hapus_guru($param)
    {
        return $this->db->delete('data_guru',array('id_guru'=>$param));
    }

    public function hapus_kepsek($param)
    {
        return $this->db->delete('kepsek',array('id_kepsek'=>$param));
    }

     public function hapus_tenkependik($param)
    {
        return $this->db->delete('tenkependik',array('id_tenkependik'=>$param));
    }

//========edit========
    

    function edit_bangunan($where, $table){
        return $this->db->get_where($table, $where);
    }

     function edit_tanah($where, $table){
        return $this->db->get_where($table, $where);
    }

    function edit_guru($where, $table){
        return $this->db->get_where($table, $where);
    }

    function edit_kepsek($where, $table){
        return $this->db->get_where($table, $where);
    }

    function edit_tenkependik($where, $table){
        return $this->db->get_where($table, $where);
    }


    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    function tampil_bangunan($a)
    {
        return $this->db->get_where('aset_bangunan',$a);
    }

        function tampil_tanah($a)
    {
        return $this->db->get_where('aset_tanah',$a);
    }

       function tampil_user($a)
    {
        return $this->db->get_where('user',$a);
    }

    function tampil_guru($a)
    {
        return $this->db->get_where('data_guru',$a);
    }

    function tampil_siswa($a)
    {
        return $this->db->get_where('siswa',$a);
    }

        function tampil_tenkependik($a)
    {
        return $this->db->get_where('tenkependik',$a);
    }

     function tampil_kepsek($a)
    {
        return $this->db->get_where('kepsek',$a);
    }


}
?>