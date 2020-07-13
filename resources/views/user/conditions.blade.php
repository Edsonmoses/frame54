@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','FREE Afrocentric stock photos & videos shared by creators everywhere.')
@section('sub-heading','Trending: ')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
@endsection
@section('main-content')
	<!-- Main Content -->
	<div class="container license-section">
	    <div class="row" id="app">
            <h1>Terms & Conditions</h1>
            <hr>
            <h3>1. Introduction</h3>
            <p>Unsplash is a photo discovery platform for free to use, high-definition photos. We (Frame 54 Inc., a Canadian corporation) operate
                the Frame 54 website at Frame 54.com (the “Site”) and all related websites, software, mobile apps, and other services that we
                provide (together, the “Service”) with the goal of celebrating and enabling contributors and fostering creativity in our community.
                Your use of the Service, and our provision of the Service to you, constitutes an agreement by you and Frame 54 to be bound by the
                terms and conditions in these Terms of Service.</p>
                <p>PLEASE READ THESE TERMS OF SERVICE CAREFULLY. BY REGISTERING FOR OR OTHERWISE USING THE SERVICE, YOU ARE TELLING US THAT YOU HAVE READ, UNDERSTOOD, AND AGREE TO BE BOUND BY THESE TERMS OF SERVICE, INCLUDING OUR PRIVACY
                    POLICY (TOGETHER, THESE “TERMS”). If you don’t agree with anything we propose in these Terms, please don’t (and you don’t have
                    our permission to) use any part of the Service.</p>
            <p>THIS PART IS REALLY IMPORTANT: These Terms require that if we get into a dispute with you relating to the Service (or vice versa),
                unless you live in the United Kingdom or the European Union, the dispute will be resolved by BINDING ARBITRATION. This means
                that YOU AGREE TO GIVE UP YOUR RIGHT TO GO TO COURT TO SUE US (OR BE SUED BY US) UNDER THIS CONTRACT (except for
                some disputes that can be taken to small claims court). Our disputes will be determined by a NEUTRAL ARBITRATOR and NOT A
                JUDGE OR JURY and you cannot start or join a class action lawsuit. Have a very careful read through Section 18 for the actual details
                regarding our agreement to arbitrate, which we’ve tried to make fair to our users.</p>
            <p><h3>2. Eligibility</h3></p>
            <p>The Service is designed for use by people who are at least 13 years old. If you are not yet 13, then you can’t use the Service. If you are
                13 or older, you promise to us that you have never been suspended from the Service, and promise that your use of the Service won’t
                break any laws or regulations. If you are using the Service on behalf of a company, organization, or other kind of entity, you represent
                to us that you have authority to bind the organization to these Terms on its behalf.</p>
            <p><h3>3. Accounts and Registration</h3></p>
            <p>When you use the Service, you have the opportunity to register an account. We suggest you do register an account, because creating
                an account on the Service gives you access to special features around discovery, downloading, and contributing to the community.
                If you do, we ask that you give us some information about yourself as part of the registration process, some of which is required in
                order to register the account. You promise that all the information you provide is accurate and that you will keep it accurate and upto-date in the future. We also ask you to provide a password to protect the security of your account. You are responsible for keeping
                your password safe and confidential. Any activity that happens under your account will be your responsibility. If ever you think that
                your account may no longer be secure, you need to notify us immediately at support@Frame 54.com. You can also reset your password via https://unsplash.com/users/password/new.</p>
            <p><h3>4. Limited License to Use the Service (but not the Photos)</h3></p>
            <p>Conditioned on your continued compliance with these Terms, we grant you permission to access the Service only for your personal
                use.</p>
            <p><h3>5. License to Photos</h3></p>
            <p>One of the best features of the Service permits you to search, view, and download photographs that have been uploaded by Frame 54
                users (“Photos”). You may download and use Photos from the Service in accordance with, and subject to, the Frame 54 License. We
                encourage you to familiarize yourself with the Frame 54 License, as well as the accompanying FAQs. To be sure you don’t miss it,
                here’s the crux of the license:</p>
            <p>Frame 54 grants you an irrevocable, nonexclusive, worldwide copyright license to download, copy, modify, distribute, perform, and
                use photos from Frame 54 for free, including for commercial purposes, without permission from or attributing the photographer or
                Frame 54, but this license does not include the right to compile photos from Frame 54 to replicate a similar or competing service</p>
            <p>This means that Photos on the Service come with a very, very broad copyright license under the Frame 54 License. This is why we
                say that they are “Free to Use.” Note that the Frame 54 License does not include the right to use:</p>
            <p>Trademarks, logos, or brands that appear in Photos</p>
            <p>People’s images if they are recognizable in the Photos</p>
            <p>Works of art or authorship that appear in Photos</p>
            <p>If you download photos with any of these depicted in them, you may need the permission of the brand owner of the brand or work of
                authorship or individual depending on how you use the Photo. Please see our FAQs for more information and, if you still aren’t sure,
                you should probably talk to a lawyer who knows about these things</p>
<p><h3>6. User Content</h3></p>
<p>YOU OWN ALL OF YOUR USER CONTENT, INCLUDING ANY PHOTOS THAT YOU UPLOAD TO THE SITE</p>
<p>At a High Level. The Service lets you upload and post your Photos, as well as written text, images, web links, location information,
    and other content (“User Content”). Any User Content that you make available on the Service will belong to you or your licensors. We
    will not claim any ownership in your User Content–it is completely, 100%, yours.</p>
<p>Limited License to Us. You grant us a worldwide, non-exclusive, royalty-free license (with the right to sublicense) to host, store,
    transfer, display, adapt, perform, reproduce, modify, translate, and distribute your User Content (in whole or in part) in any media
    formats and through any media channels (now known or hereafter developed). You understand that we will not pay you for any use
    of your Photos and that your Photos will be made available to the public for their use without providing you attribution or
    compensation.</p>
<p>...............</p>
             </div>
             <hr class="license-hr">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-3 col-sm-4 col-lg-3">
                <ul class="footer-menu">
                    <li><a href="{{ route('home.framelicense') }}">License</a></li>
                    <li><a href="{{ route('home.framePolicy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                <ul class="footer-menu">
                    <li><a href="{{ route('home.conditions') }}" class="active">Terms & conditions</a></li>
                    <li><a href="{{ route('home.developers') }}">API Terms</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>


@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection
