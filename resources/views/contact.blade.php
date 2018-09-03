<!-- Start contact Area -->
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                                {{Form::text('companyName', '',["class" => "form-control", "placeholder" => "Nouveta Limited" ,'id' =>'name'])}}
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<div class="row container">
    <div class="col-lg-4 col-lg-4">
        <h1>Company Registration</h1>
        {!! Form::open(['url' => '/company/register' ,'files' => true]) !!}

        <div class="form-group">
            {{Form::label('Companyname', 'Company name')}}

            {{Form::text('companyName', '',["class" => "form-control", "placeholder" => "Nouveta Limited"])}}
        </div>
        <div class="form-group">
            {{Form::label('ManagerEmail', 'Managers Email')}}

            {{Form::text('ManagerEmail', '',["class" => "form-control", "placeholder" => "Manager Email"])}}
        </div>
        <div class="form-group">
            {{Form::label('ManagerName', 'Managers Name')}}

            {{Form::text('ManagerName', '',["class" => "form-control", "placeholder" => "Manager Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('PhysicalAdress', 'Physical Address')}}

            {{Form::text('PhysicalAdress', '',["class" => "form-control", "placeholder" => "Marsabit plaza 6th floor"])}}
        </div>
        <div class="form-group">
            {{Form::label('postalAdress', 'Postal Address')}}

            {{Form::text('postalAdress', '',["class" => "form-control", "placeholder" => "342 Nanyuki"])}}
        </div>
        <div class="form-group">
            {{Form::label('GPS', 'GPS coordinates')}}

            {{Form::text('GPS', '',["class" => "form-control", "placeholder" => "40 'E 50'S"])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'phone')}}

            {{Form::text('phone', '',["class" => "form-control", "placeholder" => "254715428709"])}}
        </div>
        <div class="form-group">
            {{Form::label('KRA', 'KRA pin')}}

            {{Form::text('KRA', '',["class" => "form-control", "placeholder" => "A12511A2D2541"])}}
        </div>
        <div class="form-group">
            {{Form::label('category', 'category')}}

            {{Form::text('category', '',["class" => "form-control", "placeholder" => "NGO"])}}
            {{ Form::file('my_pdf') }}
        </div>
        <div class="container">
            <h3>contact person</h3>
            <div class="form-group">
                {{Form::label('ContactName', 'Contact name')}}

                {{Form::text('ContactName', '',["class" => "form-control", "placeholder" => "Kelvin Chirchir"])}}
            </div>
            <div class="form-group">
                {{Form::label('ContactEmail', 'Contact email')}}

                {{Form::text('ContactEmail', '',["class" => "form-control", "placeholder" => "info@nouveta.tech"])}}
            </div>
            <div class="form-group">
                {{Form::label('ContactPhone', 'Phone number')}}

                {{Form::text('ContactPhone', '',["class" => "form-control required", "placeholder" => "254715428709"])}}
            </div>
        </div>
        <div>
            {{FORM::submit('Submit',["class" => "btn btn-primary"])}}
        </div>

        {!! Form::close() !!}
    </div>
