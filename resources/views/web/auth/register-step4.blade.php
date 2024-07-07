@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <h2 class="fst-italic font-18 fw-bolder text-center pb-3">STEP 04
               හතරවන පියවර
            </h2>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               🔢 Enter the phone number that you are going to use to create the LMS account here, and definitely click the Send OTP button. Then confirm your phone number using the 4 digits mentioned in the text message you received on your phone.
               <br>
               🔢 මෙහි LMS ගිණුම සෑදීම සඳහා යොදා ගන්නා දුරකථන අංකය ඇතුලත් කර අනිවාර්යයෙන්ම Send OTP බොත්තම ක්ලික් කරන්න. පසුව ඔබගේ දුරකථනයට ලැබෙන කෙටි පණිවිඩයේ සඳහන් ඉලක්කම් 4 යොදා ඔබගේ දුරකථන අංකය තහවුරු කරන්න.
            </p>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               💻📱The phone number used here is used to identify your identity, and after creating the LMS account, you can access your LMS system by entering the phone number and password you used from any phone or computer in the world.
               <br>
               💻📱මෙහිදී යොදා ගන්නා දුරකථන අංකය ඔබගේ අනන්‍යතාය හඳුනා ගැනීම සඳහා යොදාගනු ලබන අතර , LMS ගිණුම සෑදීමෙන් පසුව ලෝකයේ ඇති ඕනෑම දුරකථනයකින් හෝ පරිඝනකයකින් ඔබ යොදන ලද දුරකථන අංකය සහ මුරපදය ඇතුලත් කර ඔබගේ LMS පද්ධතියට පිවිසිය හැක.
            </p>
            <p class="font-12 fw-500   text-dark   pt-1 pb-2">
               📲 Only one phone number can be used to create one LMS account. If there is another student, another LMS account should be created, and use a different phone number for that.
               <br>
               📲 එක් LMS ගිණුමක් සෑදීම සඳහා භාවිතා කළ හැක්කේ එක් දුරකථන අංකයක් පමණි. තවත් දරුවෙකු සිටීනම් තවත් LMS ගිණුමක් සෑදිය යුතු අතර ඒ සඳහා වෙනත් දුරකථන අංකයක් භාවිතා කරන්න.                            
            </p>
         </div>
         <div class="col-12 pt-4">
            <div class="row justify-content-between align-items-center">
               <div class="col-lg-4 col-sm-6 col-12">
               <form action="">
                <div class="mb-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">Phone Number </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark">
                  </div>
                  <button type="button" id="sendOtpBtn" class="btn font-13  text-white gradient-background-1 py-2 px-5  ">
                    Send OTP</button>


                  <div class="mb-2">
                    <label class="form-label font-14 fw-bold text-purple  mb-0">OTP </label>
                    <input type="text" class="form-control fw-500 rounded-3 border-dark">
                  </div>

               <div class="d-none" id="verifyOTP"> 
                <button type="button" class="btn font-13   text-white gradient-background-1 py-2 px-5  ">
                    Verify OTP</button>

                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ OTP ඉලක්කම් 4 ඇතුලත් කර මෙහි දැක්වෙන Verify OTP බොත්තම අනිවාර්යයෙන්ම Click කරන්න.</p>
                    <p class="font-12 fw-500   text-dark   pt-1 pb-2">⚠️ Enter the 4 OTP digits and definitely click the Verify OTP button shown here.</p>
               </div>


               </form>
               </div>
               <div class="col-lg-4 col-sm-5 col-12 pt-lg-0 pt-sm-0 pt-3">
                  <h3 class="text-center font-13">
                     <a href="{{  route('web.register.step5') }}" class="hvr-shrink text-white  bg-success px-2 py-3 justify-content-around w-100 rounded-3">
                        <div class="row align-items-center  ">
                           <div class="col-9">
                              CLICK TO VIEW STEP 05<br>පස්වන  පියවර සඳහා පිවිසෙන්න.
                           </div>
                           <div class="col-2">
                              <i class="fa-solid fa-right-long fs-4 "></i>
                           </div>
                        </div>
                     </a>
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection