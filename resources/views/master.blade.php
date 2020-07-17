<!DOCTYPE html>
<html lang="en">

<head>

@include('partials.meta')

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
 @include('partials.styles')

</head>

<body>
 @includeIf('partials.address',[
        'karim'=>''
    ])
   
	

    <!-- Navigation -->


    @includeWhen(true,'partials.navigation',[
        'headerText'=>''
    ])
	 @include('partials.call-to-action')
	<!--
    @includeIf('partials.address',[
        'karim'=>'E-commerce'
    ])

-->


  <!-- Masthead -->
  @yield('content')



  <!-- Icons Grid -->

  <!-- Image Showcases -->


  <!-- Testimonials -->


  <!-- Call to Action -->
<!--
 @includeIf('partials.address',[
        'karim'=>'Firozshah Colony, Akbarshah, Chittagong'
    ])
-->

@include('partials.icon-grid')
<!--
 @includeIf('partials.address',[
        'karim'=>''
    ])
	-->
@include('partials.image-showcases')

@include('partials.testimonials')

  <!-- Footer -->


@include('partials.footer-col')




  <!-- Bootstrap core JavaScript -->
@include('partials.scripts')
<div align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.5277143677677!2d91.78278451426985!3d22.37145504596312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d8a3f832aed5ca3!2sFirozshah%20Colony%20City%20Corporation%20Girls%20High%20School!5e0!3m2!1sen!2sbd!4v1585912108973!5m2!1sen!2sbd" width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
@includewHEN(true,'partials.footer',[
    'footerText'=>'Allrights Reserved By Md.Abdul Karim(Assistent teacher:1995-2023)'
])
</body>

</html>
