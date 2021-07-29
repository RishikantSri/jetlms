@extends('backend.layouts.app')
@section('content')

<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Users</h2>
          </div>
        </div>
       
        
        <section class="no-padding-bottom">
          <div class="container-fluid">
           
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">4th</div>
                  <div class="avatar"> <img src="{{ asset('backend/img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Tomas Hecktor</strong><span class="d-block">@tomhecktor</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">410 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>110</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>200</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>100</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">5th</div>
                  <div class="avatar"> <img src="{{ asset('backend/img/avatar-2.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alexander Shelby</strong><span class="d-block">@alexshelby</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">320 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>120</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">6th</div>
                  <div class="avatar"> <img src="{{ asset('backend/img/avatar-6.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Arther Kooper</strong><span class="d-block">@artherkooper</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">170 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
       
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>


@endsection
