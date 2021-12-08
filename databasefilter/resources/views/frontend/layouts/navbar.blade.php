<div class="container-fluid" style="background-color:#079953; height: 80px;">
    <div class="container">
<a id="resp-menu" class="responsive-menu" href="{{url('/')}}"><i class="fa fa-reorder"></i><img
        class="responsive-img l-g-n" src={{asset('assets/images/main-logo.png')}} /></a>
<div class="hide-on-small-only">
    <a href="{{url('/')}}"><img class="responsive-img l-g-n-h" src="{{asset('assets/images/main-logo.png')}}" /></a>
</div>
<ul class="menu">

    @guest
    <div>
        @if (Auth::check())
        <!--<li><a>Comics <span class="new badge"></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>-->
        <!--    <ul class="sub-menu">-->
        <!--        <li><a href="{{url('explorecomics')}}" class="color4">Explore Comics</a></li>-->
        <!--        <li><a class="color5">Comics to Infinity <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
        <!--            <ul class="sub-menu">-->
        <!--                <li><a href="{{url('/ByteSizedLearning')}}" class="olive">Byte Sized Learning</a></li>-->
        <!--                <li><a href="{{url('ScienceAndTechnology')}}" class="pink">Science And Technology</a></li>-->
        <!--                <li><a href="{{url('/HistoryAndMythology')}}" class="brown">History And Mythology</a></li>-->
        <!--                <li><a href="{{url('/BeyondExams')}}" class="olive">Beyond Exams</a></li>-->
        <!--                <li><a href="{{url('/GeneralEducation')}}" class="pink">General Education</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--</li>-->
        @else
        <li><a>Comics <span class="new badge"></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="{{url('explorecomics')}}" class="color4">Explore Comics</a></li>
                <li><a class="color5">Comics to Infinity <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{url('/ByteSizedLearning')}}" class="olive">Byte Sized Learning</a></li>
                        <li><a href="{{url('ScienceAndTechnology')}}" class="pink">Science And Technology</a></li>
                        <li><a href="{{url('/HistoryAndMythology')}}" class="brown">History And Mythology</a></li>
                        <li><a href="{{url('/BeyondExams')}}" class="olive">Beyond Exams</a></li>
                        <li><a href="{{url('/GeneralEducation')}}" class="pink">General Education</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        @endif

        <!--<li><a href="{{url('makeyourowncomics')}}">Make your Own Comics</a></li>-->
        <li><a href="{{url('newquiz')}}">Quiz</a></li>
        <!--<li><a>Partnerships <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="{{url('/EdPrime')}}">EdPrime</a></li>
                <li><a href="{{url('Klapz')}}">Klapz</a></li>
                <li><a href="{{url('BeyondExams')}}">Beyond Exams</a></li>
            </ul>
        </li>-->
        <!--<li><a href="{{url('volunteerwithus')}}">Volunteer with us</a></li>-->
        @if (Route::has('login'))
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

        @endif
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
        @endif
        @else
        @if(Route::currentRouteName() == 'upload')
        <li><a>Comics <span class="new badge"></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="{{url('explorecomics')}}" class="color4">Explore Comics</a></li>
                <li><a class="color5">Comics to Infinity <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{url('/ByteSizedLearning')}}" class="olive">Byte Sized Learning</a></li>
                        <li><a href="{{url('ScienceAndTechnology')}}" class="pink">Science And Technology</a></li>
                        <li><a href="{{url('/HistoryAndMythology')}}" class="brown">History And Mythology</a></li>
                        <li><a href="{{url('/BeyondExams')}}" class="olive">Beyond Exams</a></li>
                        <li><a href="{{url('/GeneralEducation')}}" class="pink">General Education</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        @else
        <li><a>Comics <span class="new badge"></span> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li><a href="{{url('explorecomics')}}" class="color4">Explore Comics</a></li>
                <li><a class="color5">Comics to Infinity <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    <ul class="sub-menu">
                        <li><a href="{{url('/ByteSizedLearning')}}" class="olive">Byte Sized Learning</a></li>
                        <li><a href="{{url('ScienceAndTechnology')}}" class="pink">Science And Technology</a></li>
                        <li><a href="{{url('/HistoryAndMythology')}}" class="brown">History And Mythology</a></li>
                        <li><a href="{{url('/BeyondExams')}}" class="olive">Beyond Exams</a></li>
                        <li><a href="{{url('/GeneralEducation')}}" class="pink">General Education</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        @endif
        @if (Auth::user()->role_as=="ADMIN")
        
        <li><a href="{{url('/admin/dashboard')}}">Dashoard</a></li>
        @endif
        <!--<li><a href="{{url('makeyourowncomics')}}">Make your Own Comics</a></li>-->
        <li class="nav-item"><a href="{{url('quiz')}}">Quiz</a></li>
        <!--<li><a>Partnerships <i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="sub-menu">
                <li>
                    <a href="{{url('/EdPrime')}}">EdPrime</a>
                </li>
                <li>
                    <a href="{{url('Klapz')}}">Klapz</a>
                </li>
                <li>
                    <a href="{{url('BeyondExams')}}">Beyond Exams</a>
                </li>
            </ul>
        </li>-->
        <!--<li><a href="{{url('volunteerwithus')}}">Volunteer with us</a></li>-->
        <li><a> {{Auth::user()->name}} </a>
            <ul class="sub-menu">
                <li>
                    <a class="mt-24" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
    </div>
    @endguest
</ul>
</div>
<style>
.olive {
    background: #EB3349 !important;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #F45C43, #EB3349) !important;
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #F45C43, #EB3349) !important;
    color: white !important;
}

.pink {
    background: #4776E6 !important;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #8E54E9, #4776E6) !important;
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #8E54E9, #4776E6) !important;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white !important;

}

.brown {
    background: #FF512F !important;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #F09819, #FF512F) !important;
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #F09819, #FF512F) !important;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white !important;
}

.color4 {
    color: white !important;
    background: #000428 !important;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #004e92, #000428) !important;
    ;
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #004e92, #000428) !important;
    ;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.color5 {
    color: white !important;
    background: #6a3093 !important;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #a044ff, #6a3093) !important;
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #a044ff, #6a3093) !important;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



}

.sub-menu {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.l-g-n {
    float: right;
    width: 60px;
    margin-top: -20px;
}

.l-g-n-h {
    float: left;
    width: 60px;
    margin-left: 24px;
    margin-top: 12px;
}

.badge {
    margin-top: 0px;
}

nav {
    display: block;
    background: #ffffff;
}

.menu {
    display: flex;
    justify-content: flex-end;
    margin-right: 22px;
}

.menu li {
    display: inline-block;
    position: relative;
    z-index: 100;
}

.menu li:first-child {
    margin-left: 0;
}

.menu li a {
    font-weight: 600;
    text-decoration: none;
    padding: 20px 15px;
    display: block;
    color: #000000;
    transition: all 0.2s ease-in-out 0s;
}

/*.menu li a:hover,.menu li:hover>a {
    color: #fff;
    background: #9ca3da;
}*/

.menu ul {
    visibility: hidden;
    opacity: 0;
    margin: 0;
    padding: 0;
    width: 170px;
    position: absolute;
    left: 0px;
    background: #fff;
    z-index: 99;
    transform: translate(0, 20px);
    transition: all 0.2s ease-out;
}

.menu ul:after {
    bottom: 100%;
    left: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-bottom-color: #fff;
    border-width: 6px;
    margin-left: -6px;
}

.menu ul li {
    display: block;
    float: none;
    background: none;
    margin: 0;
    padding: 0;
}

.menu ul li a {
    font-size: 12px;
    font-weight: normal;
    display: block;
    color: #000000;
    background: #fff;
}

.menu ul li a:hover,
.menu ul li:hover>a {
    background: var(--primary_color);
    color: #fff;
}

.menu li:hover>ul {
    visibility: visible;
    opacity: 1;
    transform: translate(0, 0);
}

.menu ul ul {
    left: 169px;
    top: 0px;
    visibility: hidden;
    opacity: 0;
    transform: translate(20px, 20px);
    transition: all 0.2s ease-out;
}

.menu ul ul:after {
    left: -6px;
    top: 10%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(255, 255, 255, 0);
    border-right-color: #fff;
    border-width: 6px;
    margin-top: -6px;
}

.menu li>ul ul:hover {
    visibility: visible;
    opacity: 1;
    transform: translate(0, 0);
}

.responsive-menu {
    display: none;
    width: 100%;
    padding: 20px 15px;
    background: var(--primary_color);
    ;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.responsive-menu:hover {
    background: var(--primary_color);
    ;
    color: #fff;
    text-decoration: none;
}



@media (min-width: 768px) and (max-width: 979px) {
    .mainWrap {
        width: 768px;
    }

    .menu ul {
        top: 37px;
    }

    .menu li a {
        font-size: 12px;
    }

    /*a.homer {
        background: #374147;
    }*/
}

@media (max-width: 767px) {
    .l-g-n-h {
        display: none;
    }

    .mainWrap {
        width: auto;
        padding: 50px 20px;
    }

    .menu {
        display: none;
    }

    .responsive-menu {
        display: block;
    }

    nav {
        margin: 0;
        background: none;
    }

    .menu li {
        display: block;
        margin: 0;
    }

    .menu li a {
        background: #fff;
        color: #797979;
    }

    .menu li a:hover,
    .menu li:hover>a {
        background: #9ca3da;
        color: #fff;
    }

    .menu ul {
        visibility: hidden;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100%;
        transform: initial;
    }

    .menu li:hover>ul {
        visibility: visible;
        opacity: 1;
        position: relative;
        transform: initial;
    }

    .menu ul ul {
        left: 0;
        transform: initial;
    }

    .menu li>ul ul:hover {
        transform: initial;
    }
}

@media (max-width: 480px) {}

@media (max-width: 320px) {}
</style>


<script type="text/javascript">
$(document).ready(function() {
    var touch = $('#resp-menu');
    var menu = $('.menu');

    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });

});
//$(document).ready(function(){
//var windowWidth = $( window ).width();
//if(windowWidth <= 1100){
// $('.drp-link').click(function(){
// $(this).toggleClass('mt-93');
//});
//}
// });
</script>
<!-- Navigation Bar End-->