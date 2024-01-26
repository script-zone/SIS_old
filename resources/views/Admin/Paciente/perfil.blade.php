@extends('Admin.index')

@section('conteudo')
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row g-3">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card teacher-card  mb-3">
                    <div class="card-body d-flex teacher-fulldeatil">
                        <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                            <a href="#">
                                <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                            </a>
                            <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                <span class="fw-bold small-14">PACIENTE</span>
                            </div>
                        </div>
                        <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                            <h6  class="mb-0 mt-2  fw-bold d-block fs-6">Utilizador Teste</h6>
                            <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Vila de Viana, Angola/Luanda</span>
                            <p class="mt-2">No bio yet.</p>
                            <div class="row g-2 pt-2">
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-ui-touch-phone"></i>
                                        <span class="ms-2">924145786</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-email"></i>
                                        <span class="ms-2">doctorteste@gmail.com</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-birthday-cake"></i>
                                        <span class="ms-2">DD/MM/YYYY</span>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="d-flex align-items-center">
                                        <i class="icofont-address-book"></i>
                                        <span class="ms-2">Casa S/N</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->

        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Informações Médica</h6>
            </div>
            <div class="card-body">
                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                            <div class="left-info">
                                <span class="text-muted">Grupo Sanguenio</span>
                                <h5 class="fw-bold my-2">0+</h5>
                                <span class="text-muted">Eaten</span>
                            </div>
                            <div class="right-info">
                                <i class="icofont-blood-drop fs-1 color-danger"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                            <div class="left-info">
                                <span class="text-muted">Alergias</span>
                                <h5 class="fw-bold my-2">Lactose</h5>
                                <span class="text-muted">Eaten</span>
                            </div>
                            <div class="right-info">
                                <i class="icofont-pills fs-1 color-lightgreen"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                            <div class="left-info">
                                <span class="text-muted">Deficiencia</span>
                                <h5 class="fw-bold my-2">Fisico Motor</h5>
                                <span class="text-muted">Recommended</span>
                            </div>
                            <div class="right-info">
                                <i class="icofont-crutch fs-1 color-lavender-purple"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                            <div class="left-info">
                                <span class="text-muted">Historico Familiar</span>
                                <h5 class="fw-bold my-2">Auzaimer</h5>
                                <span class="text-muted">Recommended</span>
                            </div>
                            <div class="right-info">
                                <i class="icofont-stethoscope fs-1 color-lavender-purple"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                            <div class="left-info">
                                <span class="text-muted">Terapeutica</span>
                                <h5 class="fw-bold my-2">Alguma coisa</h5>
                                <span class="text-muted">Recommended</span>
                            </div>
                            <div class="right-info">
                                <i class="icofont-restaurant fs-1 color-lavender-purple"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row">
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Procedimentos</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizados: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Exames</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizados: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
                <div class="card col-xl mb-3">
                    <div class="card-body ">
                        <i class="icofont-patient-file fs-3 color-light-orange"></i>
                        <h6 class="mt-3 mb-0 fw-bold small-14">Consultas</h6>
                        <h5 class="mt-3 mb-0 text-muted small-14">Realizadas: <span class="text-muted">16</span></h5>
                        <h5 class="mt-3 mb-0 text-muted small-14">Pendentes: <span class="text-muted">16</span></h5>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0 py-3 pb-2">Registro Clinico do Paciente</h3>
                            <div class="col-auto py-2 w-sm-100">
                                <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Invoice-list" role="tab">RCP Normal</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">RCP Detalhado</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Invoice-list">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12">
                                        
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Tim Mitchell</span></h6>
                                                        <span class="text-muted">Practice to Perfect</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 35 Gubener Str. Emmering, FL 32904</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $288</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>12 Feb, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Brian Swader</span></h6>
                                                        <span class="text-muted">Rhinestone</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 70 Bowman St. South Windsor, CT 06074</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $655</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>18 Feb, 2020</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination mt-4">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>  <!-- Row end  -->
                            </div> <!-- tab end  -->
                            <div class="tab-pane fade" id="Invoice-Simple">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card p-xl-5 p-lg-4 p-0">
                                            <div class="card-body">
                                                <div class="mb-3 pb-3 border-bottom">
                                                    Invoice
                                                    <strong>27/May/2021</strong>
                                                    <span class="float-end"> <strong>Status:</strong> Pending</span>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-sm-6">
                                                        <h6 class="mb-3">From:</h6>
                                                        <div><strong>I-Health Hospital</strong></div>
                                                        <div>111  Berkeley Rd</div>
                                                        <div>STREET ON THE FOSSE, Poland</div>
                                                        <div>Email: info@ihealth.com</div>
                                                        <div>Phone: +44 888 666 3333</div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <h6 class="mb-3">To:</h6>
                                                        <div><strong>Zydus Hospital</strong></div>
                                                        <div>45 Larissa Court</div>
                                                        <div>Victoria, BIRDWOODTON</div>
                                                        <div>Email: info@zydus.com</div>
                                                        <div>Phone: +66 243 456 789</div>
                                                    </div>
                                                </div> <!-- Row end  -->
                                                
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>Item</th>
                                                                <th>Description</th>
                                                                <th class="text-end">Item Cost</th>
                                                                <th class="text-center">Products Item</th>
                                                                <th class="text-end">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Oxygen Concentrator</td>
                                                                <td>Extended Production License</td>
                                                                <td class="text-end">$1999,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$1999,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td>Fabiflu Tablet </td>
                                                                <td>Extended Production License (cost per hour)</td>
                                                                <td class="text-end">$50,00</td>
                                                                <td class="text-center">2</td>
                                                                <td class="text-end">$100,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td>Remdesivir Injection</td>
                                                                <td>1 year Production</td>
                                                                <td class="text-end">$499,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$499,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td>vitamin D3</td>
                                                                <td>Extended Production License</td>
                                                                <td class="text-end">$3.999,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$3.999,00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                    
                                                    </div>
                                                    
                                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                                        <table class="table table-clear">
                                                            <tbody>
                                                                <tr>
                                                                    <td ><strong>Subtotal</strong></td>
                                                                    <td class="text-end">$6.597,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>VAT (10%)</strong></td>
                                                                    <td class="text-end">$659,7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>Total</strong></td>
                                                                    <td class="text-end"><strong>$7.256,7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> <!-- Row end  -->
                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h6>Terms &amp; Condition</h6>
                                                        <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                                                    </div>
                                                    <div class="col-lg-12 text-end">
                                                        <button type="button" class="btn btn-outline-secondary btn-lg my-1"><i class="fa fa-print"></i> Print</button>
                                                        <button type="button" class="btn btn-primary btn-lg my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                                                    </div>
                                                </div> <!-- Row end  -->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row end  -->
                            </div> <!-- tab end  -->
                        </div>
                    </div>

                </div> <!-- Row end  -->
            </div>
        </div>

        
    </div>
</div>
@endsection