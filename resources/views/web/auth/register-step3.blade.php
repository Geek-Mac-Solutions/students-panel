@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-5">
   <div class="container">
      <div class="row justify-content-center  align-items-center">
         {{--
         <div class="col-lg-2 col-4">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/hd_dp.png')}}"
               alt="Guru Niwasa LMS">
         </div>
         --}}
         <div class="col-12 text-center pb-4">
            <h2 class="fw-bold font-18 fw-bolder pt-2">
               STEP 03 - CHOOSE YOUR DESIRED SUBJECTS
            </h2>
            <h2 class="fw-bold font-18 fw-bolder pt-2">
               තුන්වන පියවර - ඔබට අවශ්‍ය විෂයන් තෝරා ගන්න
            </h2>
         </div>
         <div class="col-lg-5">
            <img class="d-block w-100 mx-auto" src="{{asset('themes/default/img/subject1.jpg')}}"
               alt="Guru Niwasa LMS">
         </div>
         <div class="col-lg-7 pt-lg-0 pt-3">
            <h1 class="font-16 fw-bold text-uppercase text-purple text-center   pt-1">THERE ARE TWO METHODS TO CONDUCT CLASSES WITHIN THE INSTITUTE
            </h1>
            <h1 class="font-16 fw-bold text-uppercase text-purple text-center  pt-2">ආයතනය තුල පන්ති මෙහෙයවන ප්‍රධාන ක්‍රමවේ ද 2ක් ඇත.
            </h1>
            <div class="bg-success-subtle rounded-3 my-3 py-3 px-4">
               <h2 class="font-15 fw-bold text-uppercase text-purple text-center">
                  01. <span class="text-danger"> ONLINE & PHYSICAL</span> - THESE CLASSES CAN BE JOINED THROUGH ZOOM AS WELL AS BY PHYSICALLY ATTENDING THEM AT THE SAME TIME.
                  <br>මෙම පන්ති සඳහා zoom ඔස්සේ මෙන්ම එම වේලාවටම ආයතනයට පැමිණ ද සම්බන්ධ විය හැක.
               </h2>
               <h2 class="font-15 fw-bold text-uppercase text-purple text-center pt-2">
                  02. ONLINE ONLY <span class="text-danger"> ONLINE & PHYSICAL</span>  - ONLINE THROUGH ZOOM IS THE ONLY WAY TO JOIN.
                  මෙම පන්ති සදහා zoom ඔස්සේ පමණක් සම්බන්ධ විය හැක.
               </h2>
            </div>
            <p class="font-13 fw-500 text-dark text-center ">
               THE PARTICULAR TIMETABLE WILL BE DISPLAYED AFTER SELECTING THE GRADE AND PLEASE PUT A "✅" SIGN INFRONT OF YOUR DESIRED SUBJECT. YOU CAN ALSO WATCH THE INTRODUCTION VIDEO OF EACH TEACHER BY CLICKING THE “CLICK TO WATCH CLASS INTRO” BUTTON.
            </p>
            <p class="font-13 fw-500 text-dark text-center  pt-2">
               ඔබට අදාල ශ්‍රේණිය තෝරා ගත් පසු එම ශ්‍රේණියට අදාල කාලසටහන දිස්වන අතර ඔබට අවශ්‍යය විෂයන් ඉදිරියේ "✅" ලකුණ යොදන්න. එහි ඇති CLICK TO WATCH CLASS INTRO බොත්තම ඔබා අදාල පන්තිය පිලිබඳව ගුරුවරයා විසින් සිදුකරන හඳුන්වා දීමේ වීඩියෝව නැරඹිය හැක.
            </p>
         </div>
         <div class="row pt-4">
            <div class="col-lg-4 col-sm-6">
               <div class="mb-2">
                  <label class="form-label font-14 fw-bold text-purple  mb-0">ENTER YOUR GRADE
                  </label>
                  <label class="form-label font-14 fw-bold text-purple  mb-0">
                  ඔබගේ ශ්‍රේණිය ඇතුලත් කරන්න </label>
                  <select class="form-select fw-500 rounded-3 border-dark font-14 " aria-label="Default select example" id="gradeDropdown">
                     <option selected="">Grade Select</option>
                  @foreach ($grades as $grade)
                        <option value="{{ $grade['id'] }}">{{ $grade['gname'] }}</option>
                  @endforeach
                  </select>
               </div>
            </div>
            <div class="row align-items-center pt-2">
               <div class="col-lg-2">
                  <p class="font-14 fw-bold   text-dark">
                     මාසික පන්ති ගාස්තුව
                  </p>
               </div>
               <div class="col-lg-10">
                  <p class="font-14 fw-bold  text-dark">
                     🆓 All new students can get the zoom link free for one week through the LMS system from the date that you select the subject.
                  </p>
               </div>
            </div>
            <div class="row align-items-center pt-2">
               <div class="col-lg-2">
                  <p class="font-14 fw-bold   text-dark">
                     Monthly class fee
                  </p>
               </div>
               <div class="col-lg-10">
                  <p class="font-14 fw-bold  text-dark">
                     🆓 සියලුම නවක සිසුන් හට යම් විෂයක් තෝරාගත් දිනයේ සිට සතියක් ඉදිරියට LMS පද්ධතිය හරහා zoom link ලබාගත හැක.
                  </p>
               </div>
            </div>
            <div class="row align-items-center pt-2">
               <div class="col-lg-2">
                  <p class="font-14 fw-bold   text-dark">
                     Total / එකතුව = 0.00
                     Discount / වට්ටම (25%) = 0.00
                  </p>
               </div>
               <div class="col-lg-10">
                  <p class="font-14 fw-bold  text-dark">
                     ▶ All new students can get the class videos of all previous months for free when they pay the class fees for the current month.
                     ▶ සියලුම නවක සිසුන් වර්තමාන මාසයට පන්ති ගාස්තු ගෙවූ විට පෙර මාස සියල්ලේම පන්ති වීඩියෝ නොමිලේ ලබාගත හැක.
                  </p>
               </div>
            </div>
            <div class="row align-items-center pt-2">
               <div class="col-lg-2">
                  <p class="font-14 fw-bold   text-dark">
                     Amount Due / ගෙවිය යුතු මුදල = 0.00
                  </p>
               </div>
               <div class="col-lg-10">
                  <p class="font-14 fw-bold  text-dark">
                     👉 To find out the total monthly class fee, put the correct sign in front of the subjects in the schedule below.
                     👉 මුළු මාසික පන්ති ගාස්තුව දැනගැනීම සදහා පහත කාලසටහනේ විෂයන් ඉදිරියේ හරි ලකුණ යොදන්න
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <h5 class="modal-title font-24 fw-bold   text-purple   pt-3 pb-2">
                     කාලසටහන - TIMETABLE (කාලසටහන දිස්වීමට ඉහත ශ්‍රේණිය තෝරන්න)
                  </h5>
               </div>
            </div>
            <div class="d-none" id="subjectSec">
               <div class="row justify-content-between pt-4 pb-3">
                  <div class="col-lg-4 col-sm-4 ">
                     <p class="font-16 fw-bold   text-purple ">
                        Paid Subjects
                     </p>
                  </div>
                  <div class="col-lg-3 col-sm-4 pt-lg-0 pt-2">
                     <a data-bs-toggle="modal" data-bs-target="#timeTableModal" class=" w-100 text-center font-13 text-white rounded-pill p-3 bg-success fw-500 align-items-center text-white hvr-shrink">Click to View Time Table
                     </a>
                     <!-- Modal -->
                     <div class="modal fade" id="timeTableModal" tabindex="-1" aria-labelledby="timeTableModal"            aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <h4 class="font-13 fw-bolder lh-base text-purple pt-1">
                                    <span class="text-danger">01. Online Time Table 1</span> - THESE CLASSES CAN BE JOINED THROUGH ZOOM AS WELL AS BY PHYSICALLY ATTENDING THEM AT THE SAME TIME.
                                    මෙම පන්ති සඳහා zoom ඔස්සේ මෙන්ම එම වේලාවටම ආයතනයට පැමිණ ද සම්බන්ධ විය හැක.<br>
                                    <span class="text-danger"> 02. Online Time Table 2 </span>- ONLINE THROUGH ZOOM IS THE ONLY WAY TO JOIN.
                                    මෙම පන්ති සදහා zoom ඔස්සේ පමණක් සම්බන්ධ විය හැක.<br>
                                    <span class="text-danger">03. Free Class Timetable</span> - These classes are completely free throughout the month without charging any fees. In these classes, lesson by lesson is not discussed in order, and only selected special lesson parts of the relevant subject are discussed. And even though these classes are conducted for free, they are of very high quality, and the teachers do their best. Students who join regular paid classes can also join these classes, and if your regular paid class is scheduled during this free class time, join the paid class live and cover the free class by video recording
                                 </h4>
                                 <div class="row pt-3">
                                    <div class="col-lg-6 pb-3">
                                       <img class="d-block w-100 mx-auto border border-2 border-secondary"  src="{{asset('themes/default/img/122128.jpg')}}"
                                          alt="Guru Niwasa LMS">
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                       <img class="d-block w-100 mx-auto border border-2 border-secondary" src="{{asset('themes/default/img/154769.jpg')}}"
                                          alt="Guru Niwasa LMS">
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                       <img class="d-block w-100 mx-auto border border-2 border-secondary" src="{{asset('themes/default/img/342714.jpg')}}"
                                          alt="Guru Niwasa LMS">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="subjectsContainer">
                  <!-- Subjects will be loaded here -->
               </div>
               
              
               <div class="row justify-content-between align-items-center pt-4 pb-3">
                  <div class="col-12">
                     <p class="font-14 fw-bold   text-dark ">
                        Free Class
                     </p>
                     <p class="font-13 fw-bold   text-dark ">
                        මෙම පන්ති ඉදිරියේ හරි ළකුණ යෙදීමට අවශ්‍ය නැත. ස්වයංක්‍රීයවම හරි ළකුණ යෙදී ඇත.
                     </p>
                     <p class="font-13 fw-bold   text-dark ">
                        මෙම පන්ති ඔබ තෝරා ගත්තද නොගත්තද ඔබ හට මෙම පන්ති වලට අදාල සියලු තොරතුරු LMS පද්ධති මඟින් පෙන්වනු ලබයි. මෙම Free Class සඳහා අවුරුද්ද මුළුල්ලේම කිසිඳු ගාස්තුවක් අයකර ගනු නොලබයි. මේ පිළිබඳ පැහැදිලි විස්තරයක් LMS ගිණුමට පිවිසුන පසු එහි මුල් පිටුවේ පහළම දක්වා ඇත.
                     </p>
                  </div>
               </div>
               <div class="row  align-items-center pb-3">
                <div class="col-lg-1 col-1 text-center">
                   <input class="form-check-input " style="width: 20px; height: 20px;"  type="checkbox" value="" id="flexCheckDefault">
                </div>
                <div class="col-lg-2 col-sm-2 col-4">
                   <img class="d-block w-100 mx-auto rounded-circle" src="{{asset('themes/default/img/1672228385Achintha_Sir.jpg')}}"
                      alt="Guru Niwasa LMS">
                </div>
                <div class="col-lg-6 col-sm-5 col-7">
                   <p class="font-14 fw-bold pb-2 text-dark">
                      Buddhism බුද්ධ ධර්මය - Theory - සිංහල මාධ්‍යය - Chamalee Miss
                   </p>
                   <a href="https://youtu.be/dHltMMWmoMc" target="_blank" class="py-2 border border-danger text-dark rounded-3 px-lg-3 px-1 font-12 fw-bolder hvr-shrink">
                   <i class="fas fa-play text-danger me-2"></i> Click to Watch Intro
                   </a>
                </div>
                <div class="col-lg-3 col-sm-4 text-center pt-lg-0 pt-2">
                   <div class="bg-success-subtle rounded-3 py-2 px-1">
                      <p class="font-14 fw-bold pb-1 text-dark">
                         Sunday
                      </p>
                      <p class="font-13 fw-500 pb-1 text-secondary">
                         04:30 PM - 06:00 PM
                      </p>
                      <p class="font-13 fw-500 pb-1 text-secondary">
                         ONLINE & PHYSICAL
                         (Same Time)
                      </p>
                   </div>
                </div>
             </div>
               <div class="row justify-content-center pt-2">
                  <div class="col-12 text-center">
                     <p class="font-13 fw-bold pb-1  text-dark ">
                        ⚠ හතරවන පියවර සඳහා පිවිසීමට පෙර ඔබට අවශ්‍ය විෂයන් තෝරා සිටිය යුතුය. ඒ සඳහා විෂයන් ඉදිරියේ ඇති කොටුව තුළ හරි ළකුණ යොදන්න.
                     </p>
                     <p class="font-13 fw-bold pb-1  text-dark ">
                        🟢 LMS පද්ධතිය සඳහා ලියාපදිංචි වූ පසුව වුවද ඔබට විෂයන් නැවත සංශෝධනය කළ හැක.
                     </p>
                     <p class="font-13 fw-bold  pb-1 text-dark ">
                        ⚠ Please select the required subjects before moving on to the 4th step. Put a tick in front of the subjects to select.
                     </p>
                     <p class="font-13 fw-bold pb-1  text-dark ">🟢 You can change these subjects after registering to the LMS as well.
                     </p>
                  </div>
               </div>
               <div class="row justify-content-center pt-3">
                  <div class="col-4">
                     <h3 class="text-center font-13">
                        <a href="{{ route('web.register.step4')}}" class="hvr-shrink text-white  bg-success px-2 py-3 justify-content-around w-100 rounded-3">
                           <div class="row align-items-center  ">
                              <div class="col-9">
                                 CLICK TO VIEW STEP 04<br>හතරවන  පියවර සඳහා පිවිසෙන්න.
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
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    // Event listener for grade dropdown change
    $('#gradeDropdown').change(function() {
        var gradeId = $(this).val();
        fetchSubjects(gradeId);
    });

    // Function to fetch subjects based on grade ID
    function fetchSubjects(gradeId) {
        $.ajax({
            url: '{{ env('API_GETWAY_URL') }}/api/v1/subjects?gid=' + gradeId,
            type: 'GET',
            headers: {
                'Access-Control-Allow-Origin': '*', // or specify the allowed origin if not allowing all
                'Content-Type': 'application/json'
            },
            success: function(response) {
                var subjects = response.data;
                var subjectsHtml = '';
                console.log(response);
                // Iterate through the subjects and generate HTML
                subjects.forEach(function(subject) {
                    var classType = subject.class_type === 'Online' ? 'bg-success-subtle' : 'bg-info-subtle';

                    subjectsHtml += `
                        <div class="row align-items-center pb-3">
                            <div class="col-lg-1 col-1 text-center">
                                <input class="form-check-input" style="width: 20px; height: 20px;" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4">
                                <img class="d-block w-100 mx-auto rounded-circle" src="{{ asset('themes/default/img/1672228385Achintha_Sir.jpg') }}" alt="Guru Niwasa LMS">
                            </div>
                            <div class="col-lg-6 col-sm-5 col-7">
                                <p class="font-14 fw-bold pb-2 text-dark">${subject.sname} - ${subject.class_type} - ${subject.tname} - ${subject.tname}
                                </p>
                                <a href="https://youtu.be/dHltMMWmoMc" target="_blank" class="py-2 border border-danger text-dark rounded-3 px-lg-3 px-1 font-12 fw-bolder hvr-shrink">
                                    <i class="fas fa-play text-danger me-2"></i> Click to Watch Intro
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-4 text-center pt-lg-0 pt-2">
                                <div class="${classType} rounded-3 py-2 px-1">
                                    <p class="font-14 fw-bold pb-1 text-dark">${subject.day_normal}</p>
                                    <p class="font-13 fw-500 pb-1 text-secondary">${subject.start_normal} - ${subject.end_normal}</p>
                                    <p class="font-13 fw-500 pb-1 text-secondary">${subject.class_type}</p>
                                </div>
                            </div>
                        </div>
                    `;
                });

                // Update the subjects container with the generated HTML
                $('#subjectsContainer').html(subjectsHtml);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching subjects:', error);
            }
        });
    }
});
</script>


@endsection