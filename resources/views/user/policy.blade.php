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
	<div class="container policy-section">
	    <div class="row" id="app">
            <h1>Privacy Policy</h1>
            <hr>
            <p class="hp">Frame 54 and its affiliates and subsidiaries (“Frame 54”, “we” or “us”) are committed to protecting your privacy and safeguarding
                your personal information. The purpose of this privacy policy (the “Privacy Policy”) is to inform you about our privacy practices,
                including how we collect, use and disclose your personal information.</p>
                <p class="hp">This Privacy Policy applies to our website, mobile applications and related services (collectively, the “Frame 54 Services”).
                    By visiting, accessing, or using the Frame 54 Services, you consent to the policies and practices of this Privacy Policy so please read
                    them carefully. If any policies or practices of this Privacy Policy are unacceptable to you, please do not visit, access, or use the
                    Frame 54 Services.</p>
            <p><h3>What’s in this Privacy Policy?</h3></p>
            <p><strong>A.</strong> Privacy Policy Amendments</p>
            <p><strong>B.</strong> Personal Information We Collect</p>
            <p><strong>C.</strong> How We Use Personal Information</p>
            <p><strong>D.</strong> How We Share Personal Information</p>
            <p><strong>E.</strong> Information Security</p>
            <p><strong>F.</strong> Retention of Personal Information</p>
            <p><strong>G.</strong> Rights Regarding your Personal Information</p>
            <p><strong>H.</strong> Direct Marketing</p>
            <p><strong>I.</strong> Data Transfer</p>
            <p><strong>J.</strong> Third Party Websites and Services</p>
            <p><strong>K.</strong> Children’s Privacy</p>
            <p><strong> L.</strong>  Contact Us</p>
            <p><h3>Privacy Policy Amendments</h3></p>
            <p>Your privacy matters to us so whether you are new to the Unsplash Services or a long-time user, please take the time to get to know
and familiarize yourself with our policies and practices. Feel free to print and keep a copy of this Privacy Policy, but please understand that we reserve the right to change any of our policies and practices at any time. But don’t worry, you can always find the latest
version of this Privacy Policy here on this page. Visiting, accessing, or using the Unsplash Services following any change to this
Privacy Policy is considered to be your acceptance of any such changes. You should, therefore, read this Privacy Policy from time to
time. If you do not agree to be bound by this Privacy Policy, you should not visit, access or use the Unsplash Services.</p>
<p><h3>Personal Information We Collect</h3></p>
<p>The personal information we collect about you may include the following. In each case, we identify the grounds that we rely on to
process your personal information under the General Data Protection Regulation (the “GDPR”):</p>
<p><strong>Account Profile –</strong> when you open an account, we may collect your first name, last name, email address, username and password.
You may also provide additional details on your account profile, such as your profile picture, photos, location data, personal website,
Instagram username, Twitter username and Facebook profile. Applicable legal grounds: contract performance, consent, legitimate
interests (to enable us to perform our obligations and provide our services);
Device Information – information that is automatically collected about your device, such as hardware, operating system, browser,
etc. Applicable legal grounds: legitimate interests (to allow us to provide the content and services on the website), consent, contract
performance;</p>
<p>Location Information – information that is automatically collected via analytics systems providers to determine your location, including your IP address and/or domain name and any external page that referred you to us. Applicable legal grounds: legitimate
interests (to allow us to provide the content and services on the website), consent, contract performance;</p>
<p>Server Log Information – information that is generated by your use of the Unsplash Services that is automatically collected and
stored in our server logs. This may include, but is not limited to, device-specific information, location information, system activity and
any internal and external information related to Unsplash pages that you visit. Applicable legal grounds: legitimate interests (to allow
us to provide the content and services on the website), consent, contract performance;</p>
<p>Correspondence – information that you provide to us in correspondence, such as when you submit questions or inquiries and with
respect to ongoing customer support. Applicable legal grounds: legitimate interests (to enable us to perform our obligations and provide our services), consent, contract performance.</p>

<p>Unsplash may also make use of the standard practice of placing tiny data files called cookies, flash cookies, pixel tags, or other
tracking tools (“Cookies”) on your computer or other devices used to access the Unsplash Services. Cookies are small bits of information that are automatically stored on the web browser of your device that can be retrieved by us. The type of information we
collect includes, but is not limited to, uniquely identifying visitor information and information related to your usage preferences. We
use these technologies to help us recognize you as a user, collect information about your use of the Unsplash Services to better
customize our services and content for you. By using the Unsplash Services, you acknowledge and agree that we may collect and/
or transmit any data collected to our third-party service providers, such as analytics providers, which may also make use of such
technologies described above. Please note that if you block or delete cookies you will not be able to use some or all of the Unsplash
Services.</p>
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
                    <li><a href="{{ route('home.framePolicy') }}" class="active">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                <ul class="footer-menu">
                    <li><a href="{{ route('home.conditions') }}">Terms & conditions</a></li>
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
