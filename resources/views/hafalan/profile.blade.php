@extends('layouts.master')

@section('title')
  <title>Halaman Profile</title>
@endsection

@section('content')

<div class="emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Ganti Foto
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                            <h5>
                                Siti Aisyah
                            </h5>
                            <h6>
                                Pelajar/Mahasiswa
                            </h6>
                            <p class="proile-rating">Peringkat : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang Anda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>Akses Cepat</p>
                    <a href="">Home</a><br/>
                    <a href="">Surah</a><br/>
                    <a href="">Mode Hafalan</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Id Pengguna</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>aisyah1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Siti Aisyah</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>sitiaisyah@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pekerjaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Mahasiswa</p>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pengalaman</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Surah Terhafal</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>100</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Surah saat ini</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Ali Imran</p>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </form>           
</div>
@endsection