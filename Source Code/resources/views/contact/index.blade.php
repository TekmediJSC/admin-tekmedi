@extends('layouts.app')

@section('content')
    <!--Contact Us Form Start-->
    <section id="contactarea" class="section active-section contactbackgroud">
        <div class="wrapsection maintitle">
            <h1 class="wow flipInX whitecolor text-center mt-50" data-wow-delay="0.1s" data-wow-duration="2s">Got a
                project in mind? Let’s talk</h1>
            <h2 class="whitecolor">We guarantee to get back to you within a business day</h2>
            @include('partials.message')
            <div class="container margintop20">
                <div class="row">
                    <div class="col-md-10 backgroudwhite center-block1 mobiletop0" id="contactmaincon">

                        <form id="contact_form" name="contact_form" method="post" class="text-left">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6 wow margintopmobile fadeIn  animated " data-wow-delay="0.1s"
                                         data-wow-duration="2s">
                                        <label for="txtName">Tên<span class="required">*</span></label>
                                        <input tabindex="1" type="text" name="name" id="txtName" size="30" value="{{ Request()->name }}"
                                               class="" required>
                                    </div>
                                    <div class="col-md-6 wow fadeIn  animated" data-wow-delay="0.3s"
                                         data-wow-duration="2s">
                                        <label for="txtEmail">Email<span class="required">*</span></label>
                                        <input tabindex="1" type="email" name="email" id="txtEmail" size="30"
                                               value="{{ Request()->email }}" required>
                                    </div>
                                    <div class="col-md-6 wow fadeIn  animated" data-wow-delay="0.3s"
                                         data-wow-duration="2s">
                                        <label for="txtPhone">Số điện thoại<span class="required">*</span></label>
                                        <input tabindex="1" type="tel" name="phone" id="txtPhone" size="30" value="{{ Request()->phone }}" required>
                                    </div>
                                    <div class="col-md-6 wow fadeIn  animated" data-wow-delay="0.3s">
                                        <label for="txtKnow">Bạn tìm thấy chúng tôi bằng cách nào?
                                            <span class="required">*</span></label>
                                        <select tabindex="1" name="found" id="txtKnow">
                                            <option value="1" {{ Request()->found == '1' ? 'selected' : '' }}>Trang tìm
                                                kiếm
                                            </option>
                                            <option value="2" {{ Request()->found == '2' ? 'selected' : '' }}>Email
                                            </option>
                                            <option value="3" {{ Request()->found == '3' ? 'selected' : '' }}>Mạng xã
                                                hội
                                            </option>
                                            <option value="4" {{ Request()->found == '4' ? 'selected' : '' }}>Khác
                                            </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="wow fadeIn  animated" data-wow-delay="0.3s" data-wow-duration="1.5">
                                    <label for="txtMessage">Lời nhắn<span class="required">*</span></label>
                                    <textarea tabindex="1" name="message" id="txtMessage" required>{{ Request()->message }}</textarea>
                                    <div class="errorcontact1 display-hide" id="p_txtMessage"></div>
                                    <input type="hidden" id="mail_type" name="mail_type" value="contactus"/>
                                </div>

                                <div class="wow fadeIn  animated mt-30 text-center" data-wow-delay="0.3"
                                     data-wow-duration="1.5s">
                                    <button class="btn btn-common btn-md text-uppercase">
                                        Gửi
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Us Form End-->


    <!--Locations Start-->

    <section class="wrapsection graybg active-section pt-50 pb-60">

        <div class="container ">

            <div class="col-lg-12 maintitle">
                <h3 class="wow flipInX text-center" data-wow-delay="0.1s" data-wow-duration="2s">Liên hệ</h3>
                <div class="linemiddle mb-15"></div>
            </div>

            @foreach($cards as $card)
                <div class="row boxnewnewone pl-0 pr-0 mt-20 wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="col-lg-6 pt-20   col-xs-12 col-sm-6  contact2">
                        <div class="row pl-20">
                            <div class="col-lg-9 pl-0 col-xs-12 col-sm-9  col-9">
                                <h4>{{ $card->name }}</h4>
                                <p>{{$card->position}}</p>
                                <span>
                                <img src="{{asset('assets/img/message.png')}}" alt="message">&nbsp;<a href="mailto:{{$card->email}}">{{$card->email}}</a>
                                </span> <span>
                                    <img src="{{asset('assets/img/call.png')}}" alt="call">
                                    {{$card->phone}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--Locations End-->
@endsection