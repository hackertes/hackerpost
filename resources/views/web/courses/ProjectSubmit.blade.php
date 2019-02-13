@extends('web.app')
@section('title','')
@section('content')

    <!-- Section Content -->
    <section id="wrapper">
      
      <!-- Nav Sidebar -->
      <div id="sidebar-wrapper">

        <div class="tabs-video">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item active">
              <a class="nav-link" id="pills-materi-tab" data-toggle="pill" href="#pills-materi" role="tab" aria-controls="pills-materi" aria-selected="true">Materi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-diskusi-tab" data-toggle="pill" href="#pills-diskusi" role="tab" aria-controls="pills-diskusi" aria-selected="false">Diskusi</a>
            </li>
            <div class="tabs-close">
              <a class="btn btn-menu c-blue" onclick="sidebarShow()">
                <i class="fa fa-times"></i>
              </a>
            </div>
          </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
          <!-- Tab Materi -->
          <div class="tab-pane fade active in" id="pills-materi" role="tabpanel" aria-labelledby="pills-materi-tab">
          <?php
             $a = 1;
             foreach ($stn as $key => $section): ?>
              <div class="video-materi">
                <a class="collap" id="<?php echo "materi-".$a ?>" data-toggle="collapse" href="#{{$section->id}}" role="button">
                 <div class="number-circle"><?php echo $a ;?></div>
                  <div class="title">
                     {{$section->title}}
                    <h6><span class="fa fa-clock"></span> 40:48</h6>
                  </div>
                  <i class="icon-collap fa fa-chevron-down"></i>
                </a>    
              </div>
              <div class="collapse submateri" id="{{$section->id}}">
                <ul>
                <?php
                 $i = 1;
                 foreach ($section->video_section as $key => $materi): ?>
                  <li>
                    <a href="{{ url('bootcamp/'.$bc->slug.'/videoPage/'.$vsection->id) }}">
                      <div class="sub-materi row">
                        <div class="col-xs-10 px-0">
                          <i class="fas fa-play-circle"></i><?php echo " $i."; ?> {{$materi->title}}
                        </div>
                        <div class="col-xs-2 px-0 text-right">
                          {{$materi->durasi}}
                          <i class="fa fa-circle ml-2"></i>
                        </div>
                      </div>
                    </a>
                  </li>
                  <?php $i++;?>
                  <?php endforeach; ?>
                  <?php
                  foreach ($section->project_section as $key => $project): ?>
                  <li>
                  <a href="{{ url('bootcamp/'.$bc->slug.'/projectSubmit/'.$section->id) }}">
                    <div class="sub-materi row">
                      <div class="col-xs-10 px-0">
                        <i class="fas fa-clipboard-list"></i>  {{$project->title}}           
                      </div>
                      <div class="col-xs-2 px-0 text-right">
                        <i class="fa fa-check-circle ml-2 c-blue"></i>
                      </div>
                    </div>
                  </a >
                </li>
                <?php endforeach; ?>
                </ul>
              </div>
              <?php $a++;?>
                  <?php endforeach; ?>
          </div>

          <!-- Tab Diskusi-->
          <div class="tab-pane fade" id="pills-diskusi" role="tabpanel" aria-labelledby="pills-diskusi-tab">
            <div class="row box m-4">
              <div class="col-xs-12">
                <h6>Buat Pertanyaan</h6>
                <textarea class="form-control" name="pertanyaan" id="pertanyaan" cols="30" rows="10"></textarea>
                <br>
                <button class="btn btn-primary mb-2">Upload Gambar</button>
                <button class="btn btn-primary mb-2">Tambah Pertanyaan</button>
              </div>

              <hr class="mb-5">

              <div class="col-xs-12">
                <hr>
                <span class="text-muted">Saat ini belum ada diskusi</span>
              </div>

            </div>
          </div>
        </div>

      </div>

      <!-- Content -->
      <div class="container-fluid p-0">
        <div class="row m-0 p-0"  id="page-content-wrapper">

          <div class="project-content col-xs-12 p-0">
            <div class="header">
              <div class="col-xs-11 pl-5">
                Become a {{$bc->slug}} <br>
                <small>{{$vsection->title}}</small>
              </div>
              <div class="col-xs-1 px-4">
                <button type="button" class="plyr__control btn btn-outline-primary px-4" onClick="sidebarShow()"><i class="fa fa-bars"></i></button>
              </div>
            </div>
            
            <div class="row px-5 pt-4">
              <div class="w-100 px-5 py-4">
                  <i class="fa fa-check-circle c-blue"></i> Selamat Anda telah lolos dalam Final Projek Course Linux Fundamental <a href="{{ url('Bootcamp/ProjectView') }}" class="btn btn-outline-primary">Lihat Hasil Preview</a>
              </div>
              <div class="col-xs-12">
                  <h4>Final Projek</h4>

                  1.Buatkan langkah-langkah, screenshot, dan script-scriptnya untuk kasus berikut :
                  
                  SMA Tidak Patah Semangat meng-hire Anda untuk migrasikan lab komputernya yang berjumlah 20 untuk ke Ubuntu
                  dari yang sebelumnya Windows7. Requirementnya adalah sebagai berikut:

                  <ul>
                    <li>
                        OS dan Instalasi : Ubuntu 16.04
                        <ul>
                          <li>Link downloadnya dimana dan langkah-langkah untuk membuat USB booting</li>
                          <li>Partisi/100gb/home,swap 2GB</li>
                          <li>Dual boot dengan windows7</li>
                        </ul>
                    </li>

                    <li>
                        Topologi jaringan
                        <ul>
                          <li>Desain topologi dan alokasi ip nya serta bagaimana agar koneksi ke internet</li>
                          <li>Bagaimana langkah mengkoneksikannya ke jaringan kabel agar seluruhnya terhubung.</li>
                        </ul>
                    </li>

                    <li>
                      Apps
                      <ul>  
                        <li>Instalasi pengganti Photoshop, Microsoft office dan Corel Draw semuanya melalui CLI</li>
                      </ul>
                    </li>

                    <li>
                      CLI
                      <ul>
                        <li>Buatkan 1 folder berisi text welcome.txt di folder /home yang berisi : Selamat datang di Ubuntu kami!. Semuanya harus pake CLI</li>
                      </ul>
                    </li>

                  </ul>
                  
                  Project yang anda submit akan langsung di Review oleh Instruktur dan Team Project Viewer yang sudah kompeten dan memiliki skill yang baik.
                  Pastikan anda mengerjakan project dengan sesuai permintaan karena jika tidak Anda tidak akan bisa melanjutkan ke Course selanjutnya.
                  
                  Ketentuan
                  <ul>
                    <li>
                        Kirimkan tugas ini dalam bentuk dokumen apapun (Word, Excel, PDF, Gambar, dll)
                    </li>
                    <li>
                        Archive dokumen tersebut ke dalam zip/rar. Tim penilai akan mengulas tugas Anda dalam tempo maksimal 2(dua) hari
                        kerja (terkecuali Sabtu, Minggu, dan haru libur nasional).
                    </li>
                    <li>
                        Cukup satu kali saja mengumpulkan tugas, tidak perlu berkali kali. Tindakan demikian hanya akan memperlama proses penilaian.
                    </li>
                  </ul>

                  Siap untuk mengirim?
                  <br>
                  Jika anda memiliki kesulitan atau masalah tentang projek atau status projek anda yang disubmit anda bisa menghubungi kami
                  melalui supportprojek@cilsy.id
                  
                  <br><br>

                  <h4>Couse Linux Fundamental: Final Projek</h4>
                  
                  <input type="file" id="file">
                  
                  <h5>Komentar</h5>
                  <textarea class="form-control" name="komentar" id="komentar" cols="100" rows="2"></textarea>
                  
                  <button class="btn btn-primary my-4" onclick="">Submit Projek</button>
                  
              </div>
            </div> 
          </div>

        </div>
      </div>

    </section>
    
    <script>
      
    //function Menu sidebar    
    function sidebarShow(){
      if($("#wrapper").hasClass("toggled")){
        $("#wrapper").removeClass('toggled');
      }else{
        $("#wrapper").addClass('toggled');
      }
    }


    $('.collap').click(function(e){
      var datatarget =  $(this).attr("href");
      var idtarget =  $(this).attr("id");
      $(datatarget).on('shown.bs.collapse', function() {
        $('#'+idtarget+' i').removeClass('fa-chevron-down').addClass('fa-chevron-up');        
      });

      $(datatarget).on('hidden.bs.collapse', function() {
        $('#'+idtarget+' i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
      });
    });
    </script>
@endsection()