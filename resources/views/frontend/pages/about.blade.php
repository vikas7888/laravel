@extends('frontend.layout.main')
@section('title','About Us')
@section('content')
<style>
    .red{
        color:red;
        margin-top:15px;
        margin-bottom:15px;
    
    }
</style>
<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3 style="margin-top: 80px">About Us</h3>
            </div>
        </div>
    </div>
</div>
       
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-text">
                 <h1>A2IT - You Dream : We Build </h1>
                   <h3>Welcome To <span>A2IT ONLINE.</span></h3>
                   <p style='font-weight:900;color:black; font-size:22px;'><b>Auscan Academy of Information Technology Pvt. Ltd.</b></p>
                    
                    <h5>
                        We build SaaS based Digital Business Automation Solutions using emerging technologies for Startups and Enterprises
                        <br><br>
"A2IT - is experienced SaaS software development company with an award-winning portfolio."
<br><br>

                        We are the product of syndicated effort of a team of experts with over a decade of experience in their respective fields.
                        <br><br>
                        A2IT is a team that work with passion for developing and delivering enterprise software applications. 
                        the A2IT motto of <b>"You dream: we build"</b> and knows how to take custom software application development  
                        ideas from concept to delivery. With the experience of working with more than 20 Fortune 200 companies, 
                        we have developed applications that are now being used by millions of consumers around the world. 
                        We know how to build best bug free software products.Our prime objective is to render quality services in the three aspects that play a major role in IT industry. 
                        <br>
                        <br>We are a software development company with strong skills in:</br>
                        <br>
                       
                        <ul style="list-style:square">
                            <li>-Our offerings span across Telecom </li>
                            <li>-Network Integration</li>
                            <li>-Digital Marketing Solutions</li>
                            <li>-Software Engineering Solutions</li>
                            <li>-Web development</li>
                            <li>-Mobile development (iOS and Android)s</li>
                            <li>-Desktop applications development (Windows and macOS)s</li> 
                            <li>-UX | UI design</li>
                        </ul> 
                        <br>
                        With an indomitable spirit to succeed, A2IT Mohali made a modest start in the year 2001, from a small office with a team of six. Today, with over a hundred people family, we have come a long way and the same inspiration to achieve continues to drive us from one success to another.!</h5>
                We are a trusted development & SaaS partner for Fortune 200 companies and established brands. </br>
                </div>
                <br>Visit Our Software Business Website :<a href="https://www.a2itonline.com/"> www.a2itonline.com</a> </br>
            </div>
            
            <div class="col-lg-6 col-md-12">
                    <img src="{{asset(config('app.prefix').'assets/img/about1-img1.png')}}" style="margin-top: 30px" alt="about us">
                    <img src="{{asset(config('app.prefix').'assets/img/about1-img3.png')}}" style="margin-top: 30px" alt="about us">
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-paper-plane"></i>
                    <h3>20+ <br>Years in Business</h3>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-checked"></i>
                    <h3>250+<br>Qulified Experts</h3>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about">
                    <i class="icofont-airplane-alt"></i>
                    <h3>300+ <br>Finished Projects</h3>
                </div>
            </div>
            
        </div>
        <div class="our-projects">
            <h3>OUR CURRENT PRODUCTS</h3>
            <div class="single-about">
                <h4>Book Domain & Hosting with A2IT</h4>
                <P>Web hosting & Domain knowledge is in our bones, and we've been excelling since the early days of the interwebs. Since then, we've expanded 
                internationally due to our commitment to helping people around the world to build their website on their way.<br><br>
               <a href="https://www.a2itlive.in/"> For More information..</a></P>
            </div>
            <div class="single-about">
                <h4>SaaS Based Lead Management CRM</h4>
                <P>The BDM LIVE (www.bdmlive.com)is our Best CRM Software for Growing Businesses.This Single Platform for Leads
                Tracking, Reporting and Work Flow Automation.If you're still not Automate your business leads,
                you're likely leaving money on the table.!<br><br>
               <a href="http://www.bdmlive.com/"> For More information..</a></P>
            </div>
            <div>
                <div class="single-about">
                    <h4>Automatic Lead Genration CRM</h4>
                    <p>Our Winbigrock (www.winbigrock.com) software work for the Improve online marketing promotions, 
                    brand awareness, generate leads, increase conversions to Create professional digital scratch cards 
                    for coupons, discounts, promotional codes, experience and lead generations.<br><br>
                     <a href="https://www.a2itonline.com/"> For More information..</a>
                    </p>
                    
                </div>
                <div class="single-about">
                    <h4>Online Education solution CRM</h4>
                    <p>Our Online Education solution CRM (www.a2itonline.com), Most higher education institutions
                    are adopting and implementing CRM software systems to help attract, retain and serve their students 
                    in the best online way. to obtain a competitive advantage in the currently populated higher education
                    market, a CRM for educational institutions is vital, although most institutions are not yet using the 
                    system, mainly because of the lack of adequate knowledge about the potential of that system.<br><br>
                      <a href="https://fwxzc.courses.store/"> For More information..</a></P>
                </div>
            </div>
        </div>
        <!-- our services -->
        <section class="our-services-image">
            <div class="Our-services">
                <div class="services">
                    <h2>OUR SERVICES</h2>
                    <p>We help our partners to accelerate disruption both in their organizations and in their sectors. 
                    They come up with new ideas and gain real business value by getting the most out of our production-ready
                    custom software development services. Talk to our experts today!</p>
                    <p>We at a2it provides you great software and technical development services and 
                    Network Solutions from last 20 years in Industries and also providing corporate training in Network,
                    Cloud Computing, Network Security,Digital Marketing, Web Desiging & Development on demand SaaS based CRM 
                    Software. Recoganizations need to adopt an agile,
                    pioneering and outgoing approach to strategically address complex web application issues and simultaneously 
                    increase revenues while reducing operational costs.</p>
                   <div class="row">
                     
                    <div class="col-lg-4 col-md-6">
                        <a href="#B-managment"><img src="{{asset(config('app.prefix').'assets/img/business-process-management-icon.png')}}">
                         <div class="services-change">
                            <h3>Business <br> Management</h3>
                         </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#D-services"><img src="{{asset(config('app.prefix').'assets/img/digital-services-icon.png')}}">
                         <div class="services-change">
                            <h3>Digital <br> Services</h2>
                         </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#T-solutions"><img src="{{asset(config('app.prefix').'assets/img/technology-solutions-icon.png')}}">
                         <div  class="services-change">
                            <h3>Technology <br> Solutions</h3>
                         </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#C-training"><img src="{{asset(config('app.prefix').'assets/img/different-here-icon.png')}}">
                         <div  class="services-change">
                            <h3>Corporate <br> Training</h3>
                         </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#T-Services"><img src="{{asset(config('app.prefix').'assets/img/technology-solutions-icon.png')}}">
                         <div  class="services-change">
                            <h3>Telecom <br> Services</h3>
                         </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="#C-civil"><img src="{{asset(config('app.prefix').'assets/img/digital-services-icon.png')}}">
                         <div  class="services-change">
                            <h3>Civil <br> Infrastucture</h3>
                         </div>
                        </a>
                    </div>
                   </div>
                 </div>
            </div>
        </section>
          <!-- our-services-details-->
        
        <div class="our-projects">
              <div class="target-block" id="B-managment"></div>
             <div class="single-about">
                <h4>Business Management</h4>
                <P>
                    We offer management solutions based on our experience and organizational growth.
                    We have a reputation for providing excellent services in the field of business consulting,
                    corporate finance, project financing, feasibility study and general legal advice of the company.
                    A2it provide you BBA MBA “Industrial Internship Training in Mohali”. We our providing SaaS Based Lead Management CRM 
                    Bookkeeping,administration  etc.
                <br><br>
               <a href="#"> For More information..</a></P>
            </div>
            <div class="target-block"id="D-services"></div>
                         <div class="single-about">
                             
                <h4>Digital Services</h4>
                <P>A2it offers a full range of digital solutions that include social media marketing,
                search engine optimization, content marketing, influencer marketing,brand strategy,
                social media analysis to help you enter and build your space in the e-commerce domain.
                Our strengths are the re-use and repackaging of content through marketing channels. With our customized solutions, we can help you maximize your reach between
                digital touch points and take advantage of the digital landscape.<br><br>
               <a href="#"> For More information..</a></P>
            </div>
            <div class="target-block" id="T-solutions"></div>
                         <div class="single-about">
                <h4>Technolgy Solutions</h4>
                <P>a2it with its set of technological solutions is aimed at partnering with large and small organizations 
                to help them assess their technological capabilities and work with them to improve their technological
                infrastructure, be it ERP systems, application software, cloud migration,
                monitoring infrastructure or digital footprint in the world of social media. Our team of IT experts offers
                reliable and flexible solutions at affordable and predictable costs for companies with a digital transformation
                program.<br><br>
               <a href="#"> For More information..</a></P>
            </div>
            <div class="target-block" id="C-training"></div>
                         <div class="single-about">
                <h4>Corporate Training</h4>
                <P>A2IT PVT. LTD. is highly dedicated in providing qualitative Skill Development Service,
                Digital Marketing Training, Leadership Development Training, Corporate Training Service,Python Development Training etc. 
                Our team consists of well-qualified and trained staff that has immense experience in their 
                specific field. The team members are selected by our management team on the basis of their qualification,
                skills and experience.These training and development programs are
                imparted as per the industry set norms.

<br><br>
               <a href="#"> For More information..</a></P>
            </div>
            <div class="target-block" id="T-Services"></div>
                         <div class="single-about">
                <h4>Telecom Services</h4>
                <P>Updated and revised for 20 years, and has been fully upgraded for 2020 with broadband internet,
                IP telecommunication networks, cloud computing, web services, and data centers in the back seat. 
                More efficient, effective, and accurate in communication with telecommunications, Datacom, and networks.
                We also offer internship Training in Cyber Security, Ethical hacking, Networking, Telecom, CCNA, CCNP, 
                and Cloud Computing, etc.<br><br>
               <a href="#"> For More information..</a></P>
            </div>
            <div class="target-block" id="C-civil"></div>
                         <div class="single-about">
                <h4>Civil Infrastructure</h4>
                <P>As people's expectations for infrastructure become higher and higher, 
                engineering companies need to deliver higher-performance designs at lower life-cycle costs...
                At the same time; the ecosystem of stakeholders and the complexity and scale of projects are increasing.
                The Social Infrastructure Engineering Solution is a collaborative design and engineering platform for 
                projects from medium to MEGA... A2it offers you Training in Revit, CAD, 3D Max and civil Engeering Projects. <br><br>
               <a href="#"> For More information..</a></P>
            </div>
                         
        </div>
        <!-- about contact us -->
        <div class="contact-us-new">
           <h4> Every Idea is Unique.Find out How <Span>We can Help Yours</Span></h4>
           <a href="https://www.a2itsoft.com/contact">Contact Us</a> 
        </div>
        
                           <h3 class="red" style="text-align: center;"><strong>A2IT Pvt. Ltd.</strong></h3>
                           <p style="text-align: center;">Mohali | C-124 Industrial area, Phase &#8211; 8 Mohali - 160071</p>
                           <li style="text-align: center;list-style:none;"><a href="tel:7814141400">(+91) 7814141400</a> &#8211;  <a href="tel:7415151523,">(+91) 7415151523</a></li>
                            <li style="text-align: center;list-style:none;"><a href="mailto:info@a2itsoft.com">info@a2itsoft.com</a></li>
                           
                           <p style="text-align: center;"><a href="http://www.a2itsoft.com">www.a2itsoft.com</a></p>
                        
                     
     </div>
    </div>
</section>

<!-- End About Area -->
@endsection