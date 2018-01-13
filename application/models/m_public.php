<?php

class M_public extends CI_Model{

    function kec($a)
    {
        $sql="select * from kecamatan where kode_kab='$a'";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function prestasi()
    {
        $data = $this->db->query('SELECT p.npsn as a1, p.jenjang as a2, p.nama_sekolah as a3, pres.thn_ajaran as a5, pres.jns_prestasi as a6, pres.level as a7, pres.hasil as a8 FROM prestasi as pres join profil as p on p.npsn=pres.npsn')->result_array();
        return $data;
    }
	
	function jml_sklh()
    {
        $data = $this->db->query('SELECT jenjang, count(npsn) as jumlah from profil group by jenjang;')->result_array();
        return $data;
    }
    function jml_siswa()
    {
        $data = $this->db->query('select p.jenjang as jenjang, sum(s.jumlah_siswa) as jumlah_siswa, sum(s.rombel) as jml_rombel from profil as p join siswa as s on p.npsn=s.npsn GROUP by p.jenjang ')->result_array();
        return $data;
    }
    function jml_guru()
    {
        $data = $this->db->query('select p.jenjang as jenjang, count(g.npsn) as jumlah_guru from profil as p join data_guru as g on p.npsn=g.npsn GROUP by p.jenjang ')->result_array();
        return $data;
    }

    function jml_wakasek()
    {
        $data = $this->db->query('SELECT wakasek.*, profil.nama_sekolah FROM `wakasek` JOIN profil ON wakasek.npsn = profil.npsn ')->result_array();
        return $data;
    }
    
    //
    //KABUPTEN
    function jml_siswakab()
    {
        $data = $this->db->query('SELECT k.id as id, k.kabupaten as kab, SUM(s.jumlah_putra+s.jumlah_putri) jumlah_siswa, SUM(s.jumlah_putra) as jumlah_putra, SUM(s.jumlah_putri) jumlah_putri FROM kabupaten as k JOIN profil as p ON k.id=p.kab JOIN siswa as s ON p.npsn=s.npsn GROUP BY p.kab ')->result_array();
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

    //
    //Data siswa per-KECAMATAN
    function jml_siswakec($a)
    {
        $sql = "select k.kode_kab as id_kab, k.kode_kec as id_kec, k.nama_kec as kec, sum(s.jumlah_putra) as putra, sum(s.jumlah_putri) as putri, sum(s.jumlah_putra+s.jumlah_putri) as jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec join siswa as s on p.npsn=s.npsn where k.kode_kab=$a group by p.kec";
        $data = $this->db->query($sql)->result_array();
        
        return $data;
    }
    //Data siswa Per-Sekolah
    function jml_siswanpsn($a)
    {
        $sql  ="SELECT p.kec as kec, p.npsn as npsn, p.nama_sekolah as nm_sklh, p.jenjang as jenjang, sum(s.jumlah_putri) as putri, sum(s.jumlah_putra) as putra, SUM(s.jumlah_putra+s.jumlah_putri) jumlah FROM profil as p JOIN siswa as s ON p.npsn=s.npsn where p.kec='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah Sekolah perJenjang (Kabupaten)
    function jml_sklh_jenjang($a,$b)
    {
        $sql    ="SELECT k.id as id, k.kabupaten as kab, COUNT(p.npsn) jml_sklh FROM kabupaten as k JOIN profil as p on k.id=p.kab WHERE p.jenjang='$a' or p.jenjang='$b' GROUP BY p.kab; ";
        $data =  $this->db->query($sql)->result_array();
        return $data; 
    }
    //Jumlah semua sekolah
    function jml_sklh_jenjang_semua()
    {
        $sql    ="SELECT k.id as id, k.kabupaten as kab, COUNT(p.npsn) jml_sklh FROM kabupaten as k JOIN profil as p on k.id=p.kab GROUP BY p.kab; ";
        $data =  $this->db->query($sql)->result_array();
        return $data; 
    }
    //AMBIL Kecamatan yang ada Sekolahnya
    function sekolahkec($a)
    {
        $sql="SELECT k.kode_kec as id, k.nama_kec as kec, count(p.npsn) jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec where k.kode_kab='$a' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //Jumlah Sekolah perJenjang (Kecamatan)
    function  jml_sklh_jenjang_kec($a,$b)
    {
        $sql    ="SELECT k.kode_kec as id, k.nama_kec as kec, count(p.npsn) jumlah FROM kecamatan as k join profil as p on k.kode_kec=p.kec where p.jenjang='$a' or '$b' group by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //Data Sekolah npsn, jenjang, nama_sekolah, 
    function data_sekolah($a)
    {
        $sql="SELECT npsn, nama_sekolah as nm_sklh, jenjang  FROM `profil` WHERE kec='$a' GROUP by npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //Jumlah KMS Non-KMS PerKabupaten
    function kms_kab(){
        $sql="select k.id as id, k.kabupaten as kab, sum(s.kms) as kms, sum(s.non_kms) as non_kms from profil as p join kabupaten as k on p.kab=k.id join siswa as s on s.npsn=p.npsn group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    //Jumlahh KMS non-KMS perkecamatan
    function kms_kec($a)
    {
        $sql="select p.kec as id, k.nama_kec as kec, sum(s.kms) as kms, sum(s.non_kms) as non_kms from profil as p join kecamatan as k on p.kec=k.kode_kec join siswa as s on p.npsn=s.npsn where p.kab='$a' GROUP by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah kms non-kms persekolah
    function kms_sklh($a)
    {
        $sql="select p.npsn as id, p.nama_sekolah as sekolah, p.jenjang as jenjang, sum(s.kms) as kms, sum(s.non_kms) as non_kms from profil as p join siswa as s on p.npsn=s.npsn where p.kec='$a' GROUP by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function jmlg_pns()
    {
        $sql="SELECT COUNT(sts_pegawai) as stspns FROM data_guru WHERE sts_pegawai='PNS DPK'";
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

    function jmltpty()
    {
        $sql="SELECT COUNT(status_pegawai) as jmltenpty FROM tenkependik WHERE status_pegawai='PTY'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmltptt()
    {
        $sql="SELECT COUNT(status_pegawai) as jmltenptt FROM tenkependik WHERE status_pegawai='PTT'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmltgtt()
    {
        $sql="SELECT COUNT(status_pegawai) as jmltengtt FROM tenkependik WHERE status_pegawai='GTT'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    function jmltgty()
    {
        $sql="SELECT COUNT(status_pegawai) as jmltengty FROM tenkependik WHERE status_pegawai='GTY'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }

    //
    //Jumlah guru per-kabupaten
    function guru_kab()
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.jk='P' OR c.jk='L') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function kab()
    {
        $sql="select * from kabupaten";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

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
    //
    //Jumlah guru per-Kabupaten (JK)
    function guru_kab_jk($a)
    {
        $sql="SELECT k.id as id, k.kabupaten as kab, count(g.nama_guru) as jumlah_guru FROM profil as p join (SELECT * FROM data_guru as c WHERE c.jk='$a') as g ON p.npsn=g.npsn JOIN kabupaten as k ON p.kab=k.id group by p.kab";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah guru per-kecamatan
    function guru_kec()
    {
        $sql="SELECT k.kode_kec as id, k.nama_kec as kec, COUNT(g.nama_guru) as jumlah_guru from profil as p join (SELECT * FROM data_guru as c WHERE c.jk='P' OR c.jk='L') as g on p.npsn=g.npsn JOIN kecamatan as k ON p.kec=k.kode_kec GROUP by p.kec";   
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah guru per-kecamatan (JK)
    function guru_kec_jk($a)
    {
        $sql="SELECT k.kode_kec as id, k.nama_kec as kec, COUNT(g.nama_guru) as jumlah_guru from profil as p join (SELECT * FROM data_guru as c WHERE c.jk='$a') as g on p.npsn=g.npsn JOIN kecamatan as k ON p.kec=k.kode_kec GROUP by p.kec";   
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah guru per-sekolah
    function guru_sklh($b)
    {
        $sql="SELECT p.npsn as id, p.jenjang as jenjang, p.nama_sekolah as nama_sekolah, count(g.nama_guru) as jumlah_guru FROM profil as p JOIN (SELECT * FROM data_guru as c WHERE c.jk='P' OR c.jk='L') as g on p.npsn=g.npsn where p.kec='$b' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //Jumlah guru per-sekolah (JK)
    function guru_sklh_jk($a,$b)
    {
        $sql="SELECT p.npsn as id, p.jenjang as jenjang, p.nama_sekolah as nama_sekolah, count(g.nama_guru) as jumlah_guru FROM profil as p JOIN (SELECT * FROM data_guru as c WHERE c.jk='$a') as g on p.npsn=g.npsn where p.kec='$b' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    //
    //dt sklh umum
    function sklh_umum($a)
    {
        $sql="SELECT p.npsn as npsn,k.kepala_sekolah as nm_kepsek, p.akreditasi as akred, p.kurikulum as kurikulum, w.wakil_kepala as nm_wakasek FROM kepsek as k right JOIN profil as p ON p.npsn=k.npsn left JOIN wakasek as w on w.npsn=p.npsn where p.npsn='$a' GROUP by p.npsn ";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function sklh_profil1($a)
    {
        $sql="SELECT p.npsn npsn, p.jenjang jenjang, p.sk_pendirian as sk, p.tgl_pendirian as tgl, a.kepemilikan FROM profil as p LEFT JOIN aset_tanah as a on p.npsn=a.npsn where p.npsn='$a' GROUP by npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function sklh_profil2($a)
    {
        $sql="select p.npsn as npsn, p.listrik as listrik, p.akses_internet as internet, SUM(a.luas_tanah) as luas from profil as p join aset_tanah as a on p.npsn=a.npsn WHERE p.npsn='$a'";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function siswa($a)
    {
        $sql="SELECT sum(s.jumlah_putra) as putra, sum(s.jumlah_putri) as putri,sum(s.jumlah_putra+s.jumlah_putri) as jumlah FROM siswa as s join profil as p on p.npsn=s.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jmlguru($a)
    {
        $sql="SELECT count(g.nama_guru) as jml FROM profil as p join (select * from data_guru as c WHERE c.jk='P' OR c.jk='L') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jmlguru_p($a)
    {
        $sql="SELECT count(g.nama_guru) as jml FROM profil as p join (select * from data_guru as c WHERE c.jk='P') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jmlguru_l($a)
    {
        $sql="SELECT count(g.nama_guru) as jml FROM profil as p join (select * from data_guru as c WHERE c.jk='L') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jumlahpendik($a)
    {
        $sql="SELECT count(g.nama) as jml FROM profil as p join (select * from tenkependik as c WHERE c.jk='P' OR c.jk='L' OR c.jk='Pe' OR c.jk='La') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jumlahpendik_l($a)
    {
        $sql="SELECT count(g.nama) as jml FROM profil as p join (select * from tenkependik as c WHERE c.jk='L' OR c.jk='La') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function jumlahpendik_p($a)
    {
        $sql="SELECT count(g.nama) as jml FROM profil as p join (select * from tenkependik as c WHERE c.jk='P' OR c.jk='Pe') as g on p.npsn=g.npsn where p.npsn='$a' group by p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function kontak_utama($a)
    {
        $sql="SELECT p.npsn as npsn, p.alamat as alamat, p.kel as kel, kec.nama_kec as kec, kab.kabupaten as kab, p.koordinat_long as lintang, p.koordinat_lat as bujir FROM profil as p join kabupaten as kab ON p.kab=kab.id join kecamatan as kec on p.kec=kec.kode_kec WHERE p.npsn='$a' GROUP BY p.npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function kontak_utama1($a)
    {
        $sql="SELECT telepon as tlp, email as eml, web FROM `profil` WHERE npsn='$a' GROUP by npsn";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }
    function akred_kab($a)
    {
        $data =  $this->db->query("SELECT k.id, k.kabupaten, COUNT(p.akreditasi) as jumlah FROM kabupaten as k LEFT join profil as p ON k.id=p.kab WHERE p.akreditasi='$a' GROUP by p.kab ")->result_array();
        return $data;
    }

    function cbkab()
    {
        $sql="SELECT * FROM kabupaten";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function akred_kec($a,$b)
    {
        $sql="SELECT k.kode_kec as id, k.nama_kec as kec, COUNT(p.akreditasi) as jumlah FROM kecamatan as k LEFT join profil as p ON k.kode_kec=p.kec WHERE p.akreditasi='$a' and p.kab='$b' GROUP by p.kec";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function cbkec($a)
    {
        $sql="SELECT * FROM kecamatan WHERE kode_kab='$a'";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function siswa_jenjang_kab($a)
    {
        $data =  $this->db->query("SELECT k.id as id, k.kabupaten as kab, SUM(s.jumlah_putra+s.jumlah_putri) as jml_siswa FROM profil as p LEFT join kabupaten as k ON p.kab=k.id LEFT JOIN siswa as s ON p.npsn=s.npsn WHERE p.jenjang='$a' GROUP BY p.kab")->result_array();
        return $data;
    }

    function siswa_jenjang_kab1()
    {
        $data =  $this->db->query("SELECT k.id as id, k.kabupaten as kab, SUM(s.jumlah_putra+s.jumlah_putri) as jml_siswa FROM profil as p LEFT join kabupaten as k ON p.kab=k.id LEFT JOIN siswa as s ON p.npsn=s.npsn GROUP BY p.kab")->result_array();
        return $data;
    }

    function acbkab()
    {
        $sql="SELECT id as id, kabupaten as kab FROM kabupaten";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function siswa_jenjang_kec($a,$b)
    {
        $data =  $this->db->query("SELECT k.kode_kec as id, k.nama_kec as kab, SUM(s.jumlah_putra+s.jumlah_putri) as jml_siswa FROM profil as p LEFT join kecamatan as k ON p.kec=k.kode_kec LEFT JOIN siswa as s ON p.npsn=s.npsn WHERE p.jenjang='$a' AND p.kab='$b' GROUP BY p.kec ")->result_array();
        return $data;
    }

    function siswa_sekolah_kec($a)
    {
        $data =  $this->db->query("SELECT p.jenjang as jenjang, p.nama_sekolah as sekolah, p.npsn as npsn,SUM(s.jumlah_putra+s.jumlah_putri) as jumlah FROM profil as p JOIN siswa as s ON p.npsn=s.npsn WHERE p.kec='$a' GROUP BY p.npsn ")->result_array();
        return $data;   
    }

    function count_jmlsek()
    {
        $sql="SELECT count(p.npsn) as jml_sek from profil as p";
        $data =  $this->db->query($sql)->result_array();
        return $data;
    }

    function cek_login($table,$where){       
        return $this->db->get_where($table,$where);
    } 


    function getJumlahSekolah(){
        return $this->db->count_all('profil');
    }

    function getJumlahGuru(){
        return $this->db->count_all('data_guru');
    }

    function getJumlahTenagaPen(){
        return $this->db->count_all('tenkependik');
    }
    function getJumlahSiswa(){
        $this->db->select('SUM(jumlah_siswa) AS jumlah');
        return $this->db->get('siswa')->result_array();
    }

    function akre_a()
    { 
        $sql    ="SELECT COUNT(akreditasi) as a from profil where akreditasi='A'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function akre_b()
    {
        $sql    ="SELECT COUNT(akreditasi) as b from profil where akreditasi='B'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function akre_c()
    {
        $sql    ="SELECT COUNT(akreditasi) as c from profil where akreditasi='C'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function non_akre()
    {
        $sql    ="SELECT COUNT(akreditasi) as non_akre from profil where akreditasi='-'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function jur_a()
    {
        $sql    ="SELECT count(jurusan) as jur_a from jurusan WHERE akreditasi='A'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function jur_b()
    {
        $sql    ="SELECT count(jurusan) as jur_b from jurusan WHERE akreditasi='B'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function jur_c()
    {
        $sql    ="SELECT count(jurusan) as jur_c from jurusan WHERE akreditasi='C'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }

    function jur_non()
    {
        $sql    ="SELECT count(jurusan) as jur_non from jurusan WHERE akreditasi='-'";
        $data =  $this->db->query($sql);
        return $data->result(); 
    }
}