<aside id="fh5co-hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(<?=base_url()?>assets/images/sd.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">

                  <h1>Sekolah Jogja Adalah <br>Web Penyedia Data Pokok Pendidikan  </h1>
                  <h2>Kementrian Daerah Istimewa Jogjakarta<a href="http://freehtml5.co/" target="_blank"></a></h2>
                  
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(<?=base_url()?>assets/images/smp.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Sekolah Jogja Adalah <br>Penyedia Data Sekolah Terlengkap</h1>
                  <h2>Kementrian Daerah Istimewa Jogjakarta<a href="http://freehtml5.co/" target="_blank"></a></h2>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(<?=base_url()?>assets/images/sma.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Sekolah Jogja Adalah <br>Penyedia Data Sekolah Terpercaya</h1>
                  <h2>Kementrian Daerah Istimewa Jogjakarta<a href="http://freehtml5.co/" target="_blank"></a></h2>
                  
                </div>
              </div>
            </div>
          </div>
        </li>       
        </ul>
      </div>
  </aside>

  <div id="fh5co-course-categories">
    <div class="container">
      <div class="row">
 
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-info-large"></i>
              </span>
              <div class="desc">
                <h3><a href="#">Data Sekolah</a></h3>
                <p>Memberikan info data sekolah terbaru</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-news2"></i>
              </span>
              <div class="desc">
                <h3><a href="#"> Mengolah Data </a></h3>
                <p>Mengolah data sekolah yang ada di Jogjakarta</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 text-center animate-box">
            <div class="services">
              <span class="icon">
                <i class="icon-database"></i>
              </span>
              <div class="desc">
                <h3><a href="#">Rekap Data Sekolah</a></h3>
                <p> Memberikan layanan rekap data sekolah dan layanan mendownload</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(<?=base_url()?>assets/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jumlahSekolah; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah Sekolah</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-head"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jumlahGuru; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah Guru</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-head"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jumlahSiswa[0]['jumlah']; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah Siswa</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-head"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jumlahTenagaPen; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah Tenpendidik</span>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $akre_a[0]->a; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Umum Akreditasi A</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $akre_b[0]->b; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Umum Akreditasi B</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $akre_c[0]->c; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Umum Akreditasi C</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $non_akre[0]->non_akre; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Umum Belum Terakreditasi </span>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jur_a[0]->jur_a; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Non-Umum Akreditasi A</span>
            </div>

            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jur_b[0]->jur_b; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Non-Umum Akreditasi B</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jur_c[0]->jur_c; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Non-Umum Akreditasi C</span>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
              <span class="icon"><i class="icon-home-outline"></i></span>
              <span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $jur_non[0]->jur_non; ?>" data-speed="1000" data-refresh-interval="50"></span>
              <span class="fh5co-counter-label">Jumlah sekolah Non Umum Belum Terakreditasi </span>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </div>

  
  <div id="fh5co-course">
    <div class="container">
    <h1 align="center">TABEL DATA POKOK</h1>
    <br>
    <br>
    <br>

    <div class="col-md-6 animate-box">
          <div class="course">
            <div class="panel panel-default">
              <div class="panel-heading">Semua Data</div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th >Jenjang</th>
                        <th >Jumlah Sekolah</th>
                        <th >Jumlah Siswa</th>
                        <th >Jumlah Guru</th> 
                      </tr>
                    </thead>
                      <?php
                      $no=1;
                      $x=0;
                      foreach ($dat as $a)
                      {
                      ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $a['jenjang'];?></td>
                        <td><?php echo $a['jumlah'];?></td>
                        <td><?php echo $sis[$x]['jumlah_siswa'];?></td>
                        <td><?php echo $gur[$x]['jumlah_guru'];?></td>
                      </tr>
                      <?php
                      $x++;
                          }
                      ?>
                  </table>
                </div>
            </div>
          </div>
    </div>


      <div class="col-md-6 animate-box">
          <div class="course">
            <div class="panel panel-default">
              <div class="panel-heading">Data Sekolah</div>
                <div class="panel-body">
                  <table class="table table-hover">
                <tr>
                <tr>
                <th>No</th>
                <th>Kabupaten</th>
                <th>SD/MI</th>
                <th>SMP/MTS</th>
                <th>SMA/MA</th>
                <th>SMK</th>
                <th>SLB</th>
            </tr>


            <?php
            $x=0;
                foreach ($dasar as $a)
                    {
                    ?>
            <tr>
                <td><?php echo $a['id'];?></td>
                <td><?php echo $a['kab'];?></td>
                <td><?php echo $a['jml_sklh'];?></td>
                <td><?php echo $menengah[$x]['jml_sklh'];?></td>
                <td><?php echo $atas[$x]['jml_sklh'];?></td>
                <td><?php echo $kejuruan[$x]['jml_sklh'];?></td>
                <td>
                    <?php
                            foreach ($spesial as $b)
                                {
                                    if($b['id']==$a['id'])
                                    echo $b['jml_sklh'];
                                    else
                                    echo '0';
                                }
                    ?>
                </td>
            </tr>
                <?php
                $x++;
                    }
                   /// var_dump($menengah);
                ?>
                </table>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    

        <div class="col-md-6 animate-box">
          <div class="course">
            <div class="panel panel-default">
              <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kabupaten</th>
                        <th>Jumlah Siswa</th>
                        <th>Jumlah Pria</th>
                        <th>Jumlah Wanita</th>
                </tr>
                <?php
                $x=0;
                    foreach ($kab_sklh as $a)
                        {
                        ?>
                <tr>
                    <td><?php echo $a['id'];?></td>
                    <td><?php echo $a['kab'];?></td>
                    <td><?php echo $a['jumlah_siswa'];?></td>
                    <td><?php echo $a['jumlah_putra'];?></td>
                    <td><?php echo $a['jumlah_putri'];?></td>
                </tr>
                    <?php
                    $x++;
                        }
                    ?>
                
            </table>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-6 animate-box">
          <div class="course">
            <div class="panel panel-default">
              <div class="panel-heading">Data Guru</div>
                <div class="panel-body">
                  <table class="table table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th >Kabupaten</th>
                    <th>Jumlah Guru</th>
                    <th>Jumlah Pria</th>
                    <th>Jumlah Wanita</th>
            </tr>
            <?php
            $x=0;
                foreach ($kab as $a)
                    {
                    ?>
            <tr>
                <td><?php echo $a['id'];?></td>
                <td><?php echo $a['kabupaten'];?></td>
                <td>
                    <?php
                        $test=0;
                            foreach ($all as $b)
                            {
                                if($b['id']==$a['id'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
                </td>
                <td>
                    <?php
                        $test=0;
                            foreach ($laki as $b)
                            {
                                if($b['id']==$a['id'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
                </td>
                <td>
                    <?php
                        $test=0;
                            foreach ($perempuan as $b)
                            {
                                if($b['id']==$a['id'])
                                    {
                                    $test++;
                                    echo $b['jumlah_guru'];
                                    }
                            }
                        if($test==0)
                            {
                            echo '0';
                            }    
                    ;?>
                </td>
                
            </tr>
                <?php
                $x++;
                    }
                ?>
                
            </table>

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
        
        
       
  

  

  
      
       
        

  <div id="fh5co-testimonial" style="background-image: url(<?=base_url()?>assets/images/school.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
          <h2><span>Pemrograman Web</span></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row animate-box">
            <div class="owl-carousel owl-carousel-fullwidth">
              <div class="item">
                <div class="testimony-slide active text-center">
                  <div class="user" style="background-image: url(<?=base_url()?>assets/images/person1.jpg);"></div>
                  <span>Kelompok 5<br><small>Teknik Informatika</small>
                  <br>
                  <small>UIN Sunan Kalijaga</small>
                  </span>
                  <blockquote>
                    <p>&ldquo;
                    Jangan sia-siakan waktumu
                    <br>
                    Berjuanglah sampai titik darah penghabisan
                    <br>
                    Jangan lupa Bahagia 
                    &rdquo;</p>
                    
                  </blockquote>
                </div>
              </div>
              <div class="item">
                
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
