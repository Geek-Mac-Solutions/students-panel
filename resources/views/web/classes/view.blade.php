@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">TODAY LIVE CLASSES
         </h1>
         <p class="font-20 fw-500 text-purple">09.10.2024 | Saturday | 05.00 PM
         </p>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row">
      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
         <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
            <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
            </h3>
            <div class="row justify-content-center pt-2 pb-3">
               <div class="col-6">
                  <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                     alt="Guru Niwasa LMS">
               </div>
            </div>
            <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
            <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
               Medium | Shehan Sir
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
               </span>
            </p>
            <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
            <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
            <div class="row justify-content-center pt-4">
               <div class="col-lg-10 text-white">
                  <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                     CLICK TO JOIN <br>
                     <span class="font-9"> FIRST WEEK PASS</span>
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>


      <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    CLICK TO JOIN <br>
                    <span class="font-9">NEW STUDENT PASS
                    </span>
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>

     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-danger fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    YOU CAN’T JOIN <br>
                    <span class="font-9">HAVE TO PAY CLASS FEES
                    </span>
                    </a>
                    


                 </p>
              </div>
           </div>
        </div>
     </div>


     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-success fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    CLICK TO JOIN <br>
                    
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>
     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    Ended <br>
                    
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>
     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    Holiday <br>
                    
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>
     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                   Still Not Scheduled
 <br>
                    
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>
     <div  class="col-lg-3 col-sm-4 mb-3 align-items-center">
        <div class="border-new pt-3 pb-5 px-3 rounded-35 bg-white text-center">
           <h3 class="font-20 fw-bold pb-2">8.00 - 10.00 PM
           </h3>
           <div class="row justify-content-center pt-2 pb-3">
              <div class="col-6">
                 <img class="d-block w-100 rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                    alt="Guru Niwasa LMS">
              </div>
           </div>
           <p class="font-14 fw-500 text-dark text-start">Grade - <span class="fw-bolder">Grade 6</span></p>
           <p class="font-14 fw-500 text-dark text-start">Subject - <span class="fw-bolder"> Mathematics Theory | English
              Medium | Shehan Sir
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Class Status - <span class="fw-bolder text-success"> Scheduled
              </span>
           </p>
           <p class="font-14 fw-500 text-dark text-start">Special Note - <span class="fw-bolder font-12">Lorem Ipsum. "Neque porro quisquam est qui dolorem</span></p>
           <p class="font-14 fw-500 text-dark text-start">Zoom Password - - <span class="fw-bolder">8899</span></p>
           <div class="row justify-content-center pt-4">
              <div class="col-lg-10 text-white">
                 <p  class="btn-cus w-100 text-uppercase font-14 text-white rounded-pill py-2 px-3 bg-warning fw-500 align-items-center "><a href="" class="text-white hvr-shrink w-100 ">
                    Postponed
 <br>
                    
                    </a>
                 </p>
              </div>
           </div>
        </div>
     </div>
     
   </div>
</div>
@endsection