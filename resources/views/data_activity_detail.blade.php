@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">  
        <div class="content-wrapper">
          <div class="page-header">
              <p class="mb-1 text-black">Detail Data Kandidat Magang</p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Daftar kandidat </a></li>
                      <li class="breadcrumb-item active" aria-current="page">Lowongan Magang</li>
                  </ol>
              </nav>
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#"
                                    placeholder="Ahmad Syaifullah" name="nama" value="{{ $register-> name}}" disabled>
                            </div>
                            <?php $i = 0;?>
                            @foreach ($register as $r)
                                <?php $i++ ?>
                            @endforeach
                            <input hidden name="id" value="<?php echo $i+1?>" disabled>
                            <div class="form-group">
                                <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                <select class="form-control" id="exampleFormControlSelect1" name="jk" {{ $register-> gender}} disabled>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                <input name="date" type="date" class="flatpickr flatpickr-input form-control" id="checkin-date" value="{{  $register-> date_of_birth }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Tempat Lahir</label><span class="text-danger">*</span>
                                <input name="city_of_birth" type="text" class="flatpickr flatpickr-input form-control" id="checkin-date"  value="{{ $register-> city_of_birth}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Agama</label><span class="text-danger">*</span>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="religion" name="agama" value="{{ $register-> religion_id}}" disabled>
                                    @foreach ($religion as $d)
                                        <option value="{{ $d->id }}">{{ $d->name }}</option> 
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Email</label><span class="text-danger">*</span>
                                <input type="email" class="form-control" id="#" placeholder=" Email" name="email" value="{{ $register-> email}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Nomor HP " name="phone" value="{{ $register-> phone}}" disabled> 
                            </div>
                            <div class="form-group">
                                <label for="#">Twitter</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Twitter" name="twitter" value="{{ $register-> twitter}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Facebook</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Facebook" name="facebook" value="{{ $register-> facebook}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Nomor KTP" name="ktp" value="{{ $register-> identity_number}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#"> File KTP</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="#" placeholder=" KTP" name="ktp_file" value="{{ $register-> identity_file}}" disabled>

                            </div>
                            <div class="form-group">
                                <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Nama Bank" name="bank_id" value="{{ $register-> bank_id}}" disabled>
                                    @foreach ($bank as $b)
                                        <option value="{{ $b->id }}">{{ $b->name }}</option> 
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                <input type="number" class="form-control" id="#"
                                    placeholder="Nomor Bank Akun " name="account" value="{{ $register-> bank_account}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Nama Akun </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#"
                                    placeholder="Nomor Bank Akun " name="bank_name" value="{{ $register-> bank_name}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                <textarea class="form-control" id="#" rows="8"
                                    placeholder="Alamat Domisili" name="address" value="{{ $register-> address}}" disabled></textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Instagram</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Instagram" name="instagram" value="{{ $register-> instagram}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Linked In</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="#" placeholder="Linked In" name="linkedin" value="{{ $register-> linkedin}}" disabled>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title"> Data Pendidikan </h4>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Nama Universitas" name="education_id" value="{{ $register-> education_id}}" disabled>
                                    @foreach ($education as $e)
                                        <option value="{{ $e->id }}" >{{ $e->name }}</option> 
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Universitas</label><span class="text-danger">*</span>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Nama Universitas" name="university_id" value="{{ $register-> university_id}}" disabled> 
                                    @foreach ($university as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option> 
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="#"> Tahun Lulus</label><span class="text-danger" disabled>*</span>
                                <div class="form-group">
                                    <div class="input-group" name="#">
                                        <input type="text" class="form-control mr-2" id="#"
                                            placeholder="Tahun Lulus" name="tahun_lulus" value="{{ $register-> graduation_year}}">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="masih" value="{{ $register-> in_collage}}" disabled>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                  Masih Kuliah
                                                </label>
                                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Jurusan </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Jurusan" name="jurusan" value="{{ $register-> major}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#"> Semester</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="#" placeholder="Semester" name="semester" value="{{ $register-> semester}}" disabled>
                            </div>
                        </div><br>
                    </div>
                    
                    <div class="controls mt-3"> 
                            <div class="entry ">
                                <h4 class="card-title mt-5"> Pengalaman Organisai </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Organisasi</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="organisasi" name="organisasi" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Tahun</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="tahun" name="tahun" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Jabatan</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="jabatan" name="jabatan" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="6" name="deskripsi" disabled></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="#"> File</label>
                                                    <input type="file" class="form-control" id="#" placeholder="" name="file_org" disabled>
                                                </div>
                                            </div>
                                        </div>
                                <span class="input-group-btn float-right">
                                    <button class="btn btn-success btn-sm btn-add" type="button" disabled> Tambah Organisasi
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                    </div><br>
                    <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="#">Keahlian</label><span class="text-danger">*</span>
                                <textarea class="form-control" id="exampleTextarea1" rows="10" name="skill" value="{{ $register-> skill}}" disabled></textarea>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Lain - Lain </h4>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">File CV</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="#" placeholder="File CV.pdf" name="cv" value="{{ $register-> file_cv}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="#">Past Photo</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="#" placeholder="Photo.jpg" name="photo" value="{{ $register-> file_photo}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#"> Portofolio</label>
                                <input type="file" class="form-control" id="#" placeholder="Portofolio.pdf" name="portfolio" value="{{ $register-> file_portfolio}}" disabled>
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                    <div class="row">
                        @foreach ($source as $s)
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input" value="{{ $s->id }}" value="{{ $register-> source_information_id}}" disabled>
                                        <label class="custom-control-label" for="customRadio1" >{{ $s->name }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><br>
                    <input value="1" name="candidate_status_id" hidden>
                <div class="mt-4">
                </div>
        </div>
                
                  
                </div>
              </div>
            </div>
           
          </div>
      
          <!-- ---------------------------------------------------------------------- -->
      
      </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection