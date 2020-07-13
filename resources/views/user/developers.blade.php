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
            <h1>API Terms</h1>
            <hr>
            <p>These Frame 54 API Terms of Use (these “API Terms”) comprise a legal agreement between Unsplash Inc. (“Frame 54,” “us,” “we,” or
                “our”) and you, and describe the rules developers must follow when accessing or using the Frame 54 application programming interfaces (the “APIs”) and related documentation made available by Frame 54 through the Frame 54 developer website currently located
                at https://Frame 54.com/developers (“Developer Site”). Any application you integrate with the APIs is a “Developer App.”</p>
                <p>BY CLICKING “I AGREE” OR IMPLEMENTING OR OTHERWISE USING ANY FRAME 54 API, YOU ACKNOWLEDGE THAT YOU HAVE
                    READ, UNDERSTAND AND AGREE TO BE BOUND BY THESE API TERMS</p>
            <p><h3>1. Your Relationship with Frame 54.</h3></p>
            <p>Legal Agreement. Your use of the APIs is subject to these API Terms. These API Terms, together with any other documents or terms
                incorporated into these API Terms or provided to you by Frame 54 in connection with the APIs, are incorporated into the Frame 54
                Terms & Conditions (together with the Frame 54 Privacy Policy, and Frame 54 API Guidelines, the “Policies”). If there is any
                contradiction between these API Terms and the other Policies, then these API Terms will take precedence with respect to the
                contradicting terms, but solely regarding your use of the APIs.</p>
            <p>Changes to the Terms. Frame 54 reserves the right, at Frame 54’s discretion, to change these API Terms on a going-forward basis
                at any time by posting the amended API Terms to the Developer Site with reasonable advanced notice when possible. Please check
                these API Terms and any other Policies periodically for changes. In addition, if our modifications are material, we will make commercially reasonable efforts to notify you electronically. Your continued use of the APIs after new and/or revised API Terms are effective
                indicates that you have read, understood, and agreed to those API Terms. Your continued access to, or use of, the APIs following the
                effective date of any changes to the API Terms will signify your assent to and acceptance of such changes.</p>
            <p><h3>2. Account and Registration</h3></p>
            <p>Organization. If you use the APIs on behalf of a business, you represent to Unsplash that you have the authority to bind that business
                and your acceptance of these API Terms will be treated as acceptance by that business. In that event, “you” and “your” will refer to
                that business in these API Terms.</p>
            <p>Registration. In order to access the APIs, you need to create a developer account and you will be required to provide certain information (such as identification or contact details) as part of the registration process, or as part of your continued access to or use of the
                APIs. You agree that any registration information you give to us will always be accurate and up to date and you will promptly make
                updates as needed. You may only access your account with the Client ID, access key, or other token (“Credentials”) provided to you
                by Frame 54 and you will be fully responsible and liable for all activities that occur through the use of your Credentials. You must only
                access (or attempt to access) the APIs by the means described in these API Terms, including in accordance with the documentation
                for the specific APIs you access. You will not use the developer credentials assigned to a different individual or entity, or mask or
                misrepresent your identity when using the APIs or developer accounts. You may not share your Credentials with any third party. You
                may only link your API account with other Service accounts that you manage. Anyone who has had their access to any of the APIs
                suspended or terminated is prohibited from accessing, or attempting to access, the APIs via any means, including by creating or requesting, or using a proxy to create, new developer credentials or API credentials.</p>
            <p><h3>3. Compliance with the Terms</h3></p>
            <p>You may access and use the APIs solely to develop and operate your Developer Apps, and only in accordance with these API Terms
                (including all applicable Policies). In accordance with Section 19 (Termination), Frame 54 may suspend or terminate your (or your
                Developer App’s) access to, or use of, any aspect of the APIs without notice for non-compliance with these API Terms.</p>
            <p><h3>4. Compliance with Laws and Third Party Rights</h3></p>
            <p>Your access to, and use of, the APIs will comply with, and you will require those acting on your behalf and your users to comply with
                (and not encourage, require, or enable them to violate), all applicable laws (notably, where applicable, the EU General Data
                Protection Regulation, the “GDPR”), rules and regulations, and all third-party rights. You and your Developer App will not use, or
                encourage, require, or enable others to use, the APIs in a manner that encourages or promotes illegal activity; is deceptive, unethical,
                false or misleading; or infringes or violates third-party rights, including intellectual property rights. You must not aggregate Content
                (as defined below) received via the APIs with any third party content such that users of your Developer Apps cannot attribute the
                Content to Frame 54.</p>
            <p><h3>5. User Privacy and API Clients</h3></p>
            <p>You will comply with all applicable privacy laws and regulations, including those applying to personal data and, where applicable,
                the GDPR. You will provide and adhere to a published privacy policy for each of your Developer Apps that clearly and accurately
                describes to users of each Developer App what user information you collect, store and delete, and how you use, process, and share
                such information (including for advertising) with us and any third parties.</p>
            <p><h3>6. Data</h3></p>
            <p>In connection with any Photos that you access via the APIs, you must directly use or embed the related image URLs returned by
                the API in your Developer Apps (generally referred to as “hotlinking”) in accordance with the API Guidelines. Additionally, each time
                there is a download of a Photo or other comparable event (e.g., setting a Photo as background wallpaper) in your Developer Apps,
                you must provide us notice of the event in accordance with the API Guidelines. Failure to do any of the foregoing in this Section 6 will
                constitute a material breach of these API Terms. You agree that Frame 54 may track user views, downloads, and other interactions
                with Photos within your Developer Apps via the image URLs or other technological means agreed between you and Frame 54
                (“Photo Interaction Data”). Frame 54 owns all Photo Interaction Data collected from use of your Developer Apps. Frame 54 grants
                you a limited, non-exclusive, non-transferrable, royalty-free license to use Photo Interaction Data from each Developer App in
                connection with the operation and maintenance of that Developer App. You must not (a) transfer, sell, lease, license, sublicense, distribute, disclose, divulge, or make available the Photo Interaction Data (or any derived data or derivative product based on the Photo
                Interaction Data) to, or permit use of or access to the Photo Interaction Data (or any such derived data or derivative product) by, any
                person or entity other than your employees, (b) use the Photo Interaction Data to create, market, or distribute any product or service
                that is competitive with Frame 54’s products or services, (c) contest, challenge, or otherwise make any claim or take any action
                adverse to Frame 54’s ownership of, or interest in, the Photo Interaction Data, including the intellectual property rights therein, or (d)
                permit, procure, enable, or request any other person or entity to do any of the foregoing.</p>
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
                    <li><a href="{{ route('home.conditions') }}">Terms & conditions</a></li>
                    <li><a href="{{ route('home.developers') }}" class="active">API Terms</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>


@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>

@endsection
