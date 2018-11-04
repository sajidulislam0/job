
@extends('master.master')
@section('main_content')



<!-- Titlebar
================================================== -->
<div id="titlebar" class="single submit-page">
    <div class="container">

        <div class="sixteen columns">
            <h2><i class="fa fa-plus-circle"></i> Add Job</h2>
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<div class="container">

    <!-- Submit Page -->
    <div class="sixteen columns">
        <div class="submit-page">

            <!-- Notice -->
            <div class="notification notice closeable margin-bottom-40">
                <p><span>Have an account?</span> If you don’t have an account you can create one below by entering your email address. A password will be automatically emailed to you.</p>
            </div>

            {!! Form::open(array('url' => '#', 'class' => 'add-job-form','id'=> 'post_job','files' =>true)) !!}

            <!-- Email -->
            <div class="form">
                {!! Form::label('Your Email:') !!}
                {!! Form::email('email_address', old('email_address'), ['class'=>'form-control', 'placeholder'=>'mail@example.com']) !!}
            </div>

            <!-- Title -->
            <div class="form">
                {!! Form::label('Job Title:') !!}
                {!! Form::text('job_title', old('job_title'), ['class'=>'form-control', 'placeholder'=>' ']) !!}
            </div>

            <!-- Location -->
            <div class="form">
                {!! Form::label('Location :') !!}<span>(optional)</span>
                {!! Form::text('job_title', old('job_title'), ['class'=>'form-control', 'placeholder'=>'e.g. London']) !!}
                <p class="note">Leave this blank if the location is not important</p>

            </div>

            <!-- Job Type -->
            <div class="form">
                <h5>Job Type</h5>

                <select data-placeholder="Full-Time" class="chosen-select-no-single">
                    <option value="1">Full-Time</option>
                    <option value="2">Part-Time</option>
                    <option value="2">Internship</option>
                    <option value="2">Freelance</option>
                </select>
            </div>


            <!-- Choose Category -->
            <div class="form">
                <div class="select">
                    <h5>Category</h5>
                    <select data-placeholder="Choose Categories" class="chosen-select" multiple>
                        <option value="1">Web Developers</option>
                        <option value="2">Mobile Developers</option>
                        <option value="3">Designers & Creatives</option>
                        <option value="4">Writers</option>
                        <option value="5">Virtual Assistants</option>
                        <option value="6">Customer Service Agents</option>
                        <option value="7">Sales & Marketing Experts</option>
                        <option value="8">Accountants & Consultants</option>
                    </select>
                </div>
            </div>

            <!-- Tags -->
            <div class="form">
                <h5>Job Tags <span>(optional)</span></h5>
                <input class="search-field" type="text" placeholder="e.g. PHP, Social Media, Management" value=""/>
                <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
            </div>


            <!-- Description -->
            <div class="form">
                {!! Form::label('Description:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>' WYSIWYG','cols' =>'40','rows'=>'3', 'id' => 'summary','spelcheck'=>'true']) !!}
            </div>

            <!-- Application email/url -->
            <div class="form">
                <h5>Application email / URL</h5>
                <input type="text" placeholder="Enter an email address or website URL">
            </div>

            <!-- TClosing Date -->
            <div class="form">
                <h5></h5>
                {!! Form::label('Closing Date:') !!}
                {!! Form::text('closing_date', old('closing_date'), ['class'=>'form-control datepicker', 'placeholder'=>'10-02-2018']) !!}
                <p class="note">Deadline for new applicants.</p>

            </div>


            <!-- Company Details -->
            <div class="divider"><h3>Company Details</h3></div>

            <!-- Company Name -->
            <div class="form">
                <h5>Company Name</h5>
                <input type="text" placeholder="Enter the name of the company">
            </div>

            <!-- Website -->
            <div class="form">
                <h5>Website <span>(optional)</span></h5>
                <input type="text" placeholder="http://">
            </div>

            <!-- Teagline -->
            <div class="form">
                <h5>Tagline <span>(optional)</span></h5>
                <input type="text" placeholder="Briefly describe your company">
            </div>

            <!-- Video -->
            <div class="form">
                <h5>Video <span>(optional)</span></h5>
                <input type="text" placeholder="A link to a video about your company">
            </div>

            <!-- Twitter -->
            <div class="form">
                <h5>Twitter Username <span>(optional)</span></h5>
                <input type="text" placeholder="@yourcompany">
            </div>

            <!-- Logo -->
            <div class="form">
                <h5>Logo <span>(optional)</span></h5>
                <label class="upload-btn">
                    <input type="file" multiple />
                    <i class="fa fa-upload"></i> Browse
                </label>
                <span class="fake-input">No file selected</span>
            </div>


            <div class="divider margin-top-0"></div>
            {{ Form::submit('Submit',array('class' => 'button big margin-top-5'))}}
            {!! Form::close() !!}
        </div>
    </div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<div id="footer">
    <!-- Main -->
    <div class="container">

        <div class="seven columns">
            <h4>About</h4>
            <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
            <a href="#" class="button">Get Started</a>
        </div>

        <div class="three columns">
            <h4>Company</h4>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Hiring Hub</a></li>
            </ul>
        </div>

        <div class="three columns">
            <h4>Press</h4>
            <ul class="footer-links">
                <li><a href="#">In the News</a></li>
                <li><a href="#">Press Releases</a></li>
                <li><a href="#">Awards</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Timeline</a></li>
            </ul>
        </div>		

        <div class="three columns">
            <h4>Browse</h4>
            <ul class="footer-links">
                <li><a href="#">Freelancers by Category</a></li>
                <li><a href="#">Freelancers in USA</a></li>
                <li><a href="#">Freelancers in UK</a></li>
                <li><a href="#">Freelancers in Canada</a></li>
                <li><a href="#">Freelancers in Australia</a></li>
                <li><a href="#">Find Jobs</a></li>

            </ul>
        </div>

    </div>

    <!-- Bottom -->
    <div class="container">
        <div class="footer-bottom">
            <div class="sixteen columns">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
                <div class="copyrights">©  Copyright 2018 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
            </div>
        </div>
    </div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


@endsection