@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Doctores </h3>
                    <div class="col-auto d-flex w-sm-100">
                        <a href="{{route('admin.cadastro.cadastroDoctor')}}" class="btn btn-primary btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>Add Doctor</a>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 row-deck py-1 pb-4">
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                      <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">Dr.Joan Wilson</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Heart Surgeon</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Alexander</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Dentist</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Peter</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Dermatologists</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Mary</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Gynecologist</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Zoe</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">ENT Specialist</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Grace</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Cardiologist</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Diana</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">General Surgeon</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card teacher-card ">
                    <div class="card-body d-flex flex-column">
                        <div class="profile-av mx-auto text-center w220">
                            <img src="{{asset('Style/images/sm/avatar3.jpg')}}" alt="foto de perfil" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                <div class="followers rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-facebook fs-5 text-blue"></i>
                                    </a>
                                </div>
                                <div class="own-video rounded-circle me-3">
                                    <a href="#">
                                        <i class="bi bi-instagram fs-5 text-danger"></i>
                                    </a>
                                </div>
                                <div class="star rounded-circle ">
                                    <a href="#">
                                        <i class="bi bi-linkedin fs-5 text-blue"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="teacher-info  w-100 text-center mt-3">
                            <h6  class="mb-2 mt-2  fw-bold d-block fs-6">DR.Sarah</h6>
                            <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Pediatricians</span>
                            <a href="#" class="btn btn-primary btn-sm">Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection