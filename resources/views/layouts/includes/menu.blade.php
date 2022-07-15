<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <ul class="list-inline">
                        <li>
                            <i class="lni-phone"></i>
                            <span>
                                +959 500 2998,
                            </span>
                            <span>
                                +959 775 002 998
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="roof-social float-right">
                        <a class="facebook" href="https://www.facebook.com/profile.php?id=100054346908467"
                            target="_blank">
                            <i class="lni-facebook-filled">
                                Company Page
                            </i>
                        </a>

                        <a class="facebook"
                            href="https://www.facebook.com/Nozomi-Japanese-Language-School-427030791157796/"
                            target="_blank">
                            <i class="lni-facebook-filled">
                                Language School Page
                                &nbsp;&nbsp;
                            </i>
                        </a>

                        <a href="{{ route('language.index') }}">
                            <img src="{{ asset('data/us.gif') }}" alt=""
                                style="width: 43px; height: auto; padding: 2px;">
                        </a>

                        <a href="{{ route('set_jp') }}">
                            <img src="{{ asset('data/jp.jpeg') }}" alt=""
                                style="width: 43px; height: auto; padding: 2px;">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="https://www.om-tdcompany.com/public/data/weblogo.png" alt=""
                        style="width: 180px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link nav-menu">
                            @if (session()->get('lang') == 'jp')
                                家
                            @elseif (session()->get('lang') == 'mm')
                                ပင်မစာမျက်နှာ
                            @else
                                Home
                            @endif
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (session()->get('lang') == 'jp')
                                約
                            @elseif (session()->get('lang') == 'mm')
                                ကုမ္ပဏီ
                            @else
                                About Us
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('about.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    当社概要
                                @elseif (session()->get('lang') == 'mm')
                                    ကုမ္ပဏီအကြောင်း
                                @else
                                    Our Company Profile
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('statement.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    私たちのビジョンと使命
                                @else
                                    Our Vision and Mission
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('organization.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    企業構造/組織図
                                @else
                                    Corporate Structure/Organization Chart
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('management_team.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    経営陣
                                @else
                                    Management Team
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ asset('data/hkk.pdf') }}">
                                @if (session()->get('lang') == 'jp')
                                    e-パンフレット
                                @else
                                    e-Brochure
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('partners.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    私たちのバリューパートナー
                                @else
                                    Our Value Partners
                                @endif
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (session()->get('lang') == 'jp')
                                サービス
                            @else
                                Services
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('jobs.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    日本で利用できる仕事
                                @else
                                    Jobs Available In Japan
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('recruitment.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    私たちの採用プロセス
                                @else
                                    Our Recruitment Process
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('training.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    リクルータートレーニングプログラム
                                @else
                                    Recruiter Training Program
                                @endif
                            </a>
                            <a class="dropdown-item" href="{{ route('milestones.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    マイルストーン
                                @else
                                    Milestones
                                @endif
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (session()->get('lang') == 'jp')
                                候補ゾーン
                            @else
                                Candidates Zone
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('cv.index') }}">
                                @if (session()->get('lang') == 'jp')
                                    履歴書を提出する
                                @else
                                    Submit CV
                                @endif
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu" href="{{ route('employer.index') }}">
                            @if (session()->get('lang') == 'jp')
                                雇用者ゾーン
                            @else
                                Employer Zone
                            @endif
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (session()->get('lang') == 'jp')
                                資力
                            @else
                                Resources
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('gallery.index') }}" class="dropdown-item">
                                @if (session()->get('lang') == 'jp')
                                    活動
                                @else
                                    Activities
                                @endif
                            </a>

                            <a href="{{ route('blog.index') }}" class="dropdown-item">
                                @if (session()->get('lang') == 'jp')
                                    ブログ
                                @else
                                    Blog
                                @endif
                            </a>

                            <a href="{{ route('faq.index') }}" class="dropdown-item">
                                @if (session()->get('lang') == 'jp')
                                    雇用主に関するFAQ
                                @else
                                    Employer FAQ's
                                @endif
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-menu" href="{{ route('contact.index') }}">
                            @if (session()->get('lang') == 'jp')
                                コンタクト
                            @else
                                Contact
                            @endif
                        </a>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i>
                            Link
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="https://fmcj.jp/" target="_blank">
                                <i class="fa fa-globe"></i>
                                FMCJ
                            </a>

                            <a class="dropdown-item" href="https://jobgtop.com/" target="_blank">
                                <i class="fa fa-globe"></i>
                                JOBGTOP
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="mobile-menu">


            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link nav-menu">
                    @if (session()->get('lang') == 'jp')
                        家
                    @elseif (session()->get('lang') == 'mm')
                        ပင်မစာမျက်နှာ
                    @else
                        Home
                    @endif
                </a>
            </li>

            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @if (session()->get('lang') == 'jp')
                        約
                    @elseif (session()->get('lang') == 'mm')
                        ကုမ္ပဏီ
                    @else
                        About Us
                    @endif
                </a>
                <ul class="dropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('about.index') }}">
                            @if (session()->get('lang') == 'jp')
                                当社概要
                            @elseif (session()->get('lang') == 'mm')
                                ကုမ္ပဏီအကြောင်း
                            @else
                                Our Company Profile
                            @endif
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('statement.index') }}">
                            @if (session()->get('lang') == 'jp')
                                私たちのビジョンと使命
                            @else
                                Our Vision and Mission
                            @endif
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('organization.index') }}">
                            @if (session()->get('lang') == 'jp')
                                企業構造/組織図
                            @else
                                Corporate Structure/Organization Chart
                            @endif
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('management_team.index') }}">
                            @if (session()->get('lang') == 'jp')
                                経営陣
                            @else
                                Management Team
                            @endif
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ asset('data/hkk.pdf') }}">
                            @if (session()->get('lang') == 'jp')
                                e-パンフレット
                            @else
                                e-Brochure
                            @endif
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('partners.index') }}">
                            @if (session()->get('lang') == 'jp')
                                私たちのバリューパートナー
                            @else
                                Our Value Partners
                            @endif
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @if (session()->get('lang') == 'jp')
                        サービス
                    @else
                        Services
                    @endif
                </a>
                <ul>
                    <li>
                        <a class="dropdown-item" href="{{ route('jobs.index') }}">
                            @if (session()->get('lang') == 'jp')
                                日本で利用できる仕事
                            @else
                                Jobs Available In Japan
                            @endif
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('recruitment.index') }}">
                            @if (session()->get('lang') == 'jp')
                                私たちの採用プロセス
                            @else
                                Our Recruitment Process
                            @endif
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('training.index') }}">
                            @if (session()->get('lang') == 'jp')
                                リクルータートレーニングプログラム
                            @else
                                Recruiter Training Program
                            @endif
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('milestones.index') }}">
                            @if (session()->get('lang') == 'jp')
                                マイルストーン
                            @else
                                Milestones
                            @endif
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @if (session()->get('lang') == 'jp')
                        候補ゾーン
                    @else
                        Candidates Zone
                    @endif
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('cv.index') }}">
                            @if (session()->get('lang') == 'jp')
                                履歴書を提出する
                            @else
                                Submit CV
                            @endif
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="nav-link nav-menu" href="{{ route('employer.index') }}">
                    @if (session()->get('lang') == 'jp')
                        雇用者ゾーン
                    @else
                        Employer Zone
                    @endif
                </a>
            </li>


            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @if (session()->get('lang') == 'jp')
                        資力
                    @else
                        Resources
                    @endif
                </a>
                <ul>
                    <li>
                        <a href="{{ route('gallery.index') }}" class="dropdown-item">
                            @if (session()->get('lang') == 'jp')
                                活動
                            @else
                                Activities
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="dropdown-item">
                            @if (session()->get('lang') == 'jp')
                                ブログ
                            @else
                                Blog
                            @endif
                        </a>
                    <li>
                        <a href="{{ route('faq.index') }}" class="dropdown-item">
                            @if (session()->get('lang') == 'jp')
                                雇用主に関するFAQ
                            @else
                                Employer FAQ's
                            @endif
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link nav-menu" href="{{ route('contact.index') }}">
                    @if (session()->get('lang') == 'jp')
                        コンタクト
                    @else
                        Contact
                    @endif
                </a>
            </li>

            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-globe"></i>
                    Link
                </a>
                <ul>
                    <li>
                        <a class="dropdown-item" href="https://fmcj.jp/" target="_blank">
                            <i class="fa fa-globe"></i>
                            FMCJ
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="https://jobgtop.com/" target="_blank">
                            <i class="fa fa-globe"></i>
                            JOBGTOP
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Language
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="{{ route('language.index') }}">
                            <img src="{{ asset('data/us.gif') }}" alt=""
                                style="width: 43px; height: auto; padding: 2px;">
                        </a>

                        <a href="{{ route('set_jp') }}">
                            <img src="{{ asset('data/jp.jpeg') }}" alt=""
                                style="width: 43px; height: auto; padding: 2px;">
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

    @if (request()->route()->getName() == 'home')
        @include('layouts.includes.slider')
    @endif

</header>
