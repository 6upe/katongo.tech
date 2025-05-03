@extends('layouts.app')

@section('content')
    <div class="untree_co-section pb-0" id="home-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <h1 class="heading gsap-reveal-hero mb-3"><strong>Pali<span class="text-primary"> Ine</span></strong></h1>
                    <h2 class="subheading gsap-reveal-hero mb-4">
                        I have a passion for blending creativity with technical expertise to develop innovative software
                        solutions and captivating visual designs.
                    </h2>
                    <p class="gsap-reveal-hero"><a href="tel: +260962893773" target="_blank"
                            class="btn btn-outline-black">Let's Build Something Amazing 🐱‍🏍</a></p>
                </div>
            </div>

        </div>
    </div>


    <div class="untree_co-section pb-0" id="about-section">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 mx-auto text-center author-wrap">
                <img src="{{ asset('images/bupe katongo.jpg') }}" alt="Bupe Katongo" class="img-fluid rounded-circle mb-3">
                <h3 class="text-primary h5 font-weight-bold mb-2 gsap-reveal-hero">Bupe Katongo</h3>
                <p class="gsap-reveal-hero">Software Developer, Designer & IT Business Consultant</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">

                <!-- First Paragraph Always Visible -->
                <p class="gsap-reveal-hero">
                    My passion for Computer Science and Technology began at home with my dad’s first computer. At the time, it was a source of entertainment—I’d spend hours playing games—but what truly fascinated me was how the same machine helped him store documents, process information, and search for solutions online. That curiosity quickly turned into admiration: here was a tool that could solve real-life problems, and I wanted to learn how.
                </p>

                <!-- Hidden Rest of Story -->
                <div id="more-story" style="display: none;">
                    <p class="gsap-reveal-hero">
                        While at Chililabombwe Secondary School, my interest deepened. I started exploring Android tricks, bypassing phone restrictions, and experimenting with VPNs to access the internet freely. That hands-on curiosity soon evolved into a deeper love for technology and its potential to solve problems creatively.
                    </p>

                    <p class="gsap-reveal-hero">
                        After completing my GCSEs, I joined a local Internet Café. That experience opened my eyes to the business side of Computer Science. I taught myself graphic design using tools like Adobe Photoshop and Illustrator, learned web development with HTML, CSS, and JavaScript, and even experimented with PhoneGap to build mobile apps from web applications.
                    </p>

                    <p class="gsap-reveal-hero">
                        Eventually, I knew it was time to take my passion seriously. I applied to study Computer Science at the Copperbelt University, but due to high tuition fees, I enrolled instead at Zambia University College of Technology in Ndola. Not long after, COVID-19 hit, and everything changed. Schools closed. Online learning began, and it was a tough transition. Courses like Discrete Mathematics, C++ Programming, and Electronics Fundamentals became my favorites. I began organizing study groups and tutoring my classmates—because when you’re passionate about something, you find a way to keep moving forward.
                    </p>

                    <p class="gsap-reveal-hero">
                        One lesson I've carried with me is this:
                        <em>“If you're truly passionate about something, keep dreaming about it until you forget it was once a dream—because by then, it's become your reality.”</em>
                    </p>

                    <p class="gsap-reveal-hero">
                        When schools reopened, it felt like starting from scratch, but I had grown in confidence and drive. During my time in college, I developed an interest in Business Development. That’s when I founded Piko Technology Services, through which I began working with real clients on real-world projects. It became both a source of income and a space for hands-on learning.
                    </p>

                    <p class="gsap-reveal-hero mb-5">
                        Fast forward a few years—by God’s grace, the support of my family and friends, and relentless dedication—I graduated with a Distinction in Bachelor of Information Technology from ZUCT, proudly standing as the Overall Best Graduating Student. Today, I continue to pursue my love for technology, solving problems, building systems, and empowering others through innovation.
                    </p>
                </div>

                <!-- Toggle Button -->
                <p class="text-center">
                    <a href="javascript:void(0);" id="toggle-story" class="btn btn-outline-primary">Continue Reading</a>
                </p>

                <!-- Contact Button -->
                <p class="gsap-reveal-hero text-center">
                    <a href="mailto:bupe@katongo.tech" class="btn btn-outline-black">Let's Build Something Amazing 🐱‍🏍</a>
                </p>
            </div>
        </div>
    </div>
</div>


    <div class="untree_co-section pb-0">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading gsap-reveal-hero mb-0"><strong>My Skillset</strong></h2>
                    <p class="gsap-reveal-hero">Fueled by curiosity and a passion for problem-solving, here's what I bring
                        to the table.</p>
                    <div class="wave gsap-reveal-hero">
                        <svg>
                            <path d="M10,10 L50,100 L90,50" stroke="#0389ff"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="60">
                            <div class="number"></div>
                            <p class="caption">Mobile App Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="80">
                            <div class="number"></div>
                            <p class="caption">Full Stack Web Dev</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="92">
                            <div class="number"></div>
                            <p class="caption">Graphic Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="75">
                            <div class="number"></div>
                            <p class="caption">UI/UX Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="85">
                            <div class="number"></div>
                            <p class="caption">Digital Marketing</p>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="63">
                            <div class="number"></div>
                            <p class="caption">AI / Machine Learning</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="87">
                            <div class="number"></div>
                            <p class="caption">API Integration</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="95">
                            <div class="number"></div>
                            <p class="caption">Business Consultancy</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <a href="/projects" class="btn btn-black">See Projects</a>
                </div>
            </div>
        </div>
    </div>
@endsection
