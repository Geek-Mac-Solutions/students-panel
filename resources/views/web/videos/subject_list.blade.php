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
         <h1 class="font-36 fw-bold text-uppercase text-purple">VIDEO RECORDINGS


         </h1>
         <p class="font-20 fw-500 text-purple">SCIENCE

         </p>
      </div>
   </div>




</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
       <div class="col-12">
        <table class="display" id="ports-table">
            <thead>
                <tr>
                    <th>Dev_id</th>
                    <th>Portnumber</th>
                    <th>Descriiption</th>
                    <th>Speed</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
        </table>
       </div>




   </div>
</div>
@endsection

