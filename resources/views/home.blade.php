@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/a69c9876e5ddc48f528468e3607e56de-1577121862700/2208804d-03b9-4931-bc40-bc16727326a4.jpg" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                </div>

               

            </div>

           
            <div class="d-flex">
                <div class="pr-5"><strong>310</strong> posts</div>
                <div class="pr-5"><strong>481</strong> followers</div>
                <div class="pr-5"><strong>120</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
       
            <div class="col-4 pb-4">
                <a href="">
                    <img src="https://scontent.flhe3-1.fna.fbcdn.net/v/t1.0-9/116413533_3013954088702118_5010015989727648856_o.jpg?_nc_cat=110&ccb=2&_nc_sid=174925&_nc_eui2=AeEJa1MOVyqRno_CK_VHljQ0x1P-qkPufPDHU_6qQ-588J4xwh1Qmq3dVbcZGGbD_u-WtBi4sDeBOlNXihJjXXda&_nc_ohc=DejU_mdjg_AAX_8oPdA&_nc_ht=scontent.flhe3-1.fna&oh=05d34f58fad6d147396c88c299192744&oe=60218B0A" class="w-100">
                </a>
            </div>

            <div class="col-4 pb-4">
                <a href="">
                    <img src="https://scontent.flhe3-1.fna.fbcdn.net/v/t1.0-9/130538891_3414314758666047_6037662388696871215_n.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeGON9J8xM0FQGvKdWosmvPTsiDABMrkrdCyIMAEyuSt0OEEPuYUC3B9cVMOmXM-ThR5LDlVNA5yBr-ouprStZ71&_nc_ohc=DCemxbMfFFoAX_1vttt&_nc_oc=AQmaVri5xZD_DGoHLiLaJONZmzBiA_Mfiq2mtuHCwtWVXjZvWXY5wLoKrONFTPu3FBc&_nc_ht=scontent.flhe3-1.fna&oh=e44b669661447f7b9b792c9b1a0f483c&oe=60226202" class="w-100">
                </a>
            </div>

            <div class="col-4 pb-4">
                <a href="">
                    <img src="https://scontent.flhe3-1.fna.fbcdn.net/v/t1.0-9/45761411_1812002365563969_5249940376478810112_o.jpg?_nc_cat=106&ccb=2&_nc_sid=174925&_nc_eui2=AeFTUEkhu97vQ0qKZdeoIicq3zPVhLEG3erfM9WEsQbd6pylkZ6P7SsVxBbgi5yC59_aJ3pmZX3IFd025NTZfM1S&_nc_ohc=vUS6QiPYUHIAX_l5k3N&_nc_ht=scontent.flhe3-1.fna&oh=cc17fc8b9a12a23e08bfccbfad011ed9&oe=60226F81" class="w-100">
                </a>
            </div>
       
    </div>
</div>



@endsection
