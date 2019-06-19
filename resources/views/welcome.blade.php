@extends('layouts.app')

@section('content')
    <div class="image-bg">
        <div class="container">
            <div class="row p-4">
                <h1 class="text-white display-3 font-weight-bold mt-5">
                    Find Everything About Agarwal Community
                </h1>
                <h2 class="text-white h1">Take advantage of this free of charge and can further strengthen the unity of Agarwal society.</h2>

            </div>
        </div>
    </div>
<div class="container my-4 text-center">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center h2 my-3 font-weight-bold">Choose Category </h2>
        </div>
        <div class="col-md m-2 colhover p-3">
            <img src="https://image.flaticon.com/icons/svg/119/119058.svg" alt="" class="w-75">
            <h5 class="font-weight-bold text-center mt-2">Category name</h5>
        </div>
        <div class="col-md m-2 colhover p-3">
            <img src="https://image.flaticon.com/icons/svg/1795/1795067.svg" alt="" class="w-75">
            <h5 class="font-weight-bold text-center mt-2">Category name</h5>
        </div>
        <div class="col-md m-2 colhover p-3">
            <img src="https://image.flaticon.com/icons/svg/843/843259.svg" alt="" class="w-75">
            <h5 class="font-weight-bold text-center mt-2">Category name</h5>
        </div>
        <div class="col-md m-2 colhover p-3">
            <img src="https://image.flaticon.com/icons/svg/770/770088.svg" alt="" class="w-75">
            <h5 class="font-weight-bold text-center mt-2">Category name</h5>
        </div>

    </div>
    <div class="row d-flex justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h1>Some Text here</h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita, quam? Ad, aliquam amet, doloribus eos eveniet excepturi, expedita harum id magni nulla placeat provident quae quaerat quasi quidem sequi?
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h1>
                    some Text here
                </h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad adipisci aliquid aspernatur assumenda autem, cum deserunt dolores excepturi fuga ipsam magnam molestias neque qui quisquam quod vel vero voluptatum.</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h1>Some text here </h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae consequuntur cupiditate ea enim, est itaque iusto, modi nihil nostrum odit perferendis repudiandae tempore vel veritatis vitae voluptatem. Fuga, perferendis.</div>
        </div>
    </div>
</div>
@endsection
