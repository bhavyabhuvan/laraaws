@extends('frontend.layouts.master')
@section('content')
<style>
*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.new {
    padding: 50px;
}
.new1 {
    padding-top: 50px;
}
.form-group {
    display: block;
    margin-bottom: 15px;
}

.form-group input {
    padding: 0;
    height: initial;
    width: initial;
    margin-bottom: 0;
    display: none;
    cursor: pointer;
}

.form-group label {
    position: relative;
    cursor: pointer;
}
.unit-filter-get-btn{
    font-size:8px !important;
}

.form-group label:before {
    content: "";
    -webkit-appearance: none;
    background-color: transparent;
    border: 2px solid #0079bf;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
        inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
    padding: 10px;
    display: inline-block;
    position: relative;
    vertical-align: middle;
    cursor: pointer;
    margin-right: 5px;
}

.form-group input:checked+label:after {
    content: "";
    display: block;
    position: absolute;
    top: 2px;
    left: 9px;
    width: 6px;
    height: 14px;
    border: solid #0079bf;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}
.search-bg {
    background-color: #079953;
    padding: 20px;
    border-radius: 10px;
}
</style>

<div class="content-body-w new1">
  
    <!-- Filter -->
    <div class="container search-bg">
        <center>
        <h5 class="black-text left-heading-explr mt-26" data-aos="fade-right">Filter to Select Your Comics</h5>
        <div class="row">
            <div class="col-md-4 s6">
                <div class="input-field col s12">
                    <select id="class" class="class_list" name="class">
                        <option value="">Select Class</option>
                        @foreach($classes as $class)
                        <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4 s6">
                <div class="input-field col s12">
                    <select id="subject" class="subject_list" name="quiz_subject">
                            <option value="">Select Subject</option>
                            @foreach($subjects as $subject)
                            <option value="{{$subject->subject_id}}">{{$subject->subject_name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
<!--             <div class="col-md-3 s6">
                <div class="input-field col s12">
                    <select id="language" class="language_list" name="language">
                        <option value="">Select Language</option>
                    </select>
                </div>
                {{csrf_field()}}
            </div> -->
            <div class="col-md-4 m3">
                <div class="input-field col s12">
                    <button class="fetch-btn btn disabled">Search</button>
                </div>
            </div>
        </div>
    </center>    
</div>
    <!-- Filter End -->


<!-- Filter Results -->
    <div class="container-fluid">
        <h5 class="black-text left-heading-explr mt-43 recent-txt" data-aos="fade-right">Recent Uploads</h5>
        <h5 class="black-text left-heading-explr mt-43 search-uploads-txt" data-aos="fade-right">Search Results</h5>
        <div class="row">
            <div class="col s3">
                <div class="btn unit-filter-get-btn ">Chapters</div>
            </div>
        </div>
        <div class="row mt-43">
            <div class="hide-until-change">
                <div class="col s12 m3 units-filter-menu">
                    <h6 class="fw fs">Chapters</h5><br/>
                    <div class="units-ul">
                        @foreach($quizes as $quiz)
                        <div class="form-group">
                            <input type="checkbox" name="checkbox"  value="{{$quiz->unit}}" id="{{$quiz->unit}}">
                            <label class="unit-check-box" for="{{$quiz->unit}}">{{$quiz->unit}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col s9 results-column">
                @foreach($quizes as $quiz)
                <a target="_blank"
                    href="newquiz/{{$quiz->id}}">
                    <!-- Result Card -->
                    <div class="col s6 m4 result-card-div">
                        <div class="result-card g-bg">
                            <div class="image_assigner hide ">
                                   
                                    @if($quiz->subject_name == "Physics")
                                    @php $sub_logo = "assets/images/Physics.png" @endphp
                                    @elseif($quiz->subject_name == "Chemistry")
                                    @php $sub_logo = "assets/images/Chemistry_.png" @endphp
                                    @elseif($quiz->subject_name == "Social")
                                    @php $sub_logo = "assets/images/Chemistry_.png" @endphp
                                    @elseif($quiz->subject_name == "Science")
                                    @php $sub_logo = "assets/images/chemistry.png" @endphp
                                    @elseif($quiz->subject_name == "Civics")
                                    @php $sub_logo = "assets/images/chemistry.png" @endphp
                                    @elseif($quiz->subject_name == "Maths")
                                    @php $sub_logo = "assets/images/chemistry.png" @endphp
                                    @elseif($quiz->subject_name == "Biology")
                                    @php $sub_logo = "assets/images/biology.png" @endphp
                                    @elseif($quiz->subject_name == "EVS")
                                    @php $sub_logo = "assets/images/chemistry.png" @endphp
                                    @elseif($quiz->subject_name == "Geography")
                                    @php $sub_logo = "assets/images/Geography.png" @endphp
                                    @elseif($quiz->subject_name == "History")
                                    @php $sub_logo = "assets/images/history.png" @endphp
                                    @else
                                    @php $sub_logo = "assets/images/sub-logo.png" @endphp
                                    @endif
                                </div>
                                <img src="{{asset($sub_logo)}}" class="carousel-img mt-16">
                            <div class="comic-hd">
                                <h6 class="g-txt center comic-title"><b>{{ $quiz->unit }}</b></h6>
                                <p class="sec-txt center explr">Topic {{ $quiz->unit }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Result Card End-->
                @endforeach
            </div>
        </div>
        <!-- Filter Results End -->

    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.hide-until-change').hide();
    $('.results-column').removeClass('s8');
    $('.results-column').addClass('s12');
    $('.result-card-div').removeClass('m4');
    $('.result-card-div').addClass('m3');
    $('.search-uploads-txt').hide();
    $('.recent-txt').show();
    $('.class_list').on('change', function() {
        var class_id = $(this).val();
        $.ajax({
            url: "{{route('filtercontroller.quizsubjectfetch')}}",
            method: "get",
            data: {
                'id': class_id,
            },
            success: function(subjects) {
                var sub_list = $("#subject");
                $("#subject option").remove();
                sub_list.append('<option value="0"' +
                    '>' +
                    "Select Subject " + '</option>');
                var c_str = ' ';
                var o_str = '';
                for (var i = 0; i < subjects.length; i++) {
                    var o_str = subjects[i].subject_name;
                    if (c_str != o_str) {
                        sub_list.append('<option value=' + subjects[i].subject_id + '>' +
                            o_str + '</option>');
                        c_str = '';
                        c_str += o_str;
                    }
                }
            },
            error: function() {

            }
        });
    });
    $('.subject_list').on('change', function() {
        var subject_id = $(this).val();
        var class_id = $('.class_list').val();
        $.ajax({
            url: "{{route('filtercontroller.quizlanguagefetch')}}",
            method: "get",
            data: {
                'sub_id': subject_id,
                'class_id': class_id,
            },
            success: function(languages) {
                var language_list = $("#language");
                $("#language option").remove();
                language_list.append('<option value=' + "0" +
                    '>' + "Select Language" + '</option>');
                var c_str = ' ';
                var o_str = '';
                for (var i = 0; i < languages.length; i++) {
                    var o_str = languages[i].language;
                    if (c_str != o_str) {
                        language_list.append('<option value=' + languages[i].language_id +
                            '>' + o_str + '</option>');
                        c_str = '';
                        c_str += o_str;
                    }
                }
            },
            error: function() {

            }
        });
    });
    $('.language_list').on('change', function() {
        $('.fetch-btn').removeClass('disabled');
    });
    $('.fetch-btn').click(function() {
        
        $("#topic option").remove();
        $('.hide-until-change').show();
        $('.results-column').addClass('m9');
        $('.result-card-div').removeClass('m3');
        $('.result-card-div').addClass('m4');
        $('.search-uploads-txt').show();
        $('.recent-txt').hide();
        var class_id = $('.class_list').val();
        var subject_id = $('.subject_list').val();
        var language_id = $('.language_list').val();
        var class_name = $('.class_list option:selected').text();
        var subject = $('.subject_list option:selected').text();
        var lang = $('.language_list option:selected').text();
        window.history.replaceState('obj', 'Quiz', '/quiz/'+class_name+'/'+subject+'/'+lang);
        $.ajax({
            url: "{{route('filtercontroller.quizunitfetch')}}",
            method: "get",
            data: {
                'sub_id': subject_id,
                'class_id': class_id,
                'language_id': language_id,
            },
            success: function(languages) {
                
                var unit_list = $('#unit');
                $("#unit option").remove();
                $('.units').empty();
                var c_str = ' ';
                var o_str = '';
                var results = $('.results-column');
                results.empty();
                $('.units-ul').empty();
                var units_list_ul = $('.units-ul');
                //location.replace('');
                for (var i = 0; i < languages.length; i++) {
                    var o_str = languages[i].unit;
                    if (c_str != o_str) {
                        units_list_ul.append(
                            '<div class="form-group"><input type="checkbox" name="checkbox"  value="' +
                            o_str + '" id="' + o_str +
                            '"><label class="unit-check-box" for="' + o_str +
                            '">' + o_str + '</label>');
                        c_str = '';
                        c_str += o_str;
                    }
                    var subject_logo = '';
                    if(languages[i].subject_name == 'History'){
                        subject_logo += '{{asset("assets/images/history.png")}}';
                    }
                    else if(languages[i].subject_name == 'Physics'){
                        subject_logo += '{{asset("assets/images/Physics.png")}}';
                    }
                    else if(languages[i].subject_name == 'Chemistry'){
                        subject_logo += '{{asset("assets/images/Chemistry_.png")}}';
                    }
                    else if(languages[i].subject_name == 'Social'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'Science'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'Civics'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'Maths'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'Biology'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'EVS'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(languages[i].subject_name == 'Geography'){
                        subject_logo += '{{asset("assets/images/Geography.png")}}';
                    }
                    else{
                     subject_logo += '{{asset("assets/images/sub-logo.png")}}';   
                    }
                    var comic_title = languages[i].comic_name;
                    comic_title = comic_title.replace(/ /g, "_");
                    results.append(
                        '<a target="_blank" href = "'+ languages[i].quizlink +
                        '"class="anchor_comic"><div class="col s12 m4 result-card-div"><div class="result-card g-bg"><div class="carousel-img-cnt"><img src="'+subject_logo+'" class="carousel-img mt-16"></div><div class="comic-hd"><h6 class="g-txt center comic-title"><b>' +
                        languages[i].comic_name +
                        '</b></h6><p class="sec-txt center explr topic-name">Topic ' +
                        languages[i].topic +
                        '</p></div></div></div></a>'
                    );



                }
            },
            error: function() {

            }
        });
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on("change", "input[name='checkbox']", function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        var class_id = $('.class_list').val();
        var subject_id = $('.subject_list').val();
        var language_id = $('.language_list').val();
        var unit_name = $(this).val();
        $.ajax({
            url: "{{route('filtercontroller.quiztopicfetch')}}",
            method: "get",
            data: {
                'sub_id': subject_id,
                'class_id': class_id,
                'language_id': language_id,
                'unit_name': unit_name,
            },
            success: function(topics) {
                var topic_list = $('#topic');
                $("#topic option").remove();
                var results = $('.results-column');
                results.empty();
                for (var i = 0; i < topics.length; i++) {
                    console.log(topics[i].topic);
                    topic_list.append('<option value='+ topics[i].id +'>' +
                        topics[i]
                        .topic + '</option>');
                    var subject_logo = '';
                    if(topics[i].subject_name == 'History'){
                        subject_logo += '{{asset("assets/images/history.png")}}';
                    }
                    else if(topics[i].subject_name == 'Physics'){
                        subject_logo += '{{asset("assets/images/Physics.png")}}';
                    }
                    else if(topics[i].subject_name == 'Chemistry'){
                        subject_logo += '{{asset("assets/images/Chemistry_.png")}}';
                    }
                    else if(topics[i].subject_name == 'Social'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'Science'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'Civics'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'Maths'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'Biology'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'EVS'){
                        subject_logo += '{{asset("assets/images/sub-logo.png")}}';
                    }
                    else if(topics[i].subject_name == 'Geography'){
                        subject_logo += '{{asset("assets/images/Geography.png")}}';
                    }
                    else{
                     subject_logo += '{{asset("assets/images/sub-logo.png")}}';   
                    }
                    var comic_title = topics[i].comic_name;
                    comic_title = comic_title.replace(/ /g, "_");
                    results.append(
                        '<a target="_blank" href = "'+ topics[i].quizlink +
                        '"class="anchor_comic"><div class="col s12 m4 result-card-div"><div class="result-card g-bg"><div class="carousel-img-cnt"><img src="'+subject_logo+'" class="carousel-img mt-16"></div><div class="comic-hd"><h6 class="g-txt center comic-title"><b>' +
                        topics[i].comic_name +
                        '</b></h6><p class="sec-txt center explr topic-name">Topic ' +
                        topics[i].topic +
                        '</p></div></div></div></a>'
                    );
                }
            },
            error: function() {}
        });
    });
});
</script>
<script type = text/javascript>
    $('.unit-filter-get-btn').hide();
     var windowSize = $(window).width();

        if (windowSize <= 768) {
            $('.unit-filter-get-btn').show();
            $('.units-filter-menu').hide();
            $('.unit-filter-get-btn').click(function(){
                $('.units-filter-menu').toggle();
            });
        }
</script>

@endsection

   