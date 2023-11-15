<?php
 session_start();
 $name=$_SESSION['variable_name_3'] ;
 $email=$_SESSION['variable_name_4'] ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../designCSS/homePage.css" />
    <link rel="stylesheet" href="../../designCSS/footer.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="../../Assists/logo/LegalAssist.png" />
    <link rel="stylesheet" href="../../designCSS/navbar.css" />
    <title>LegalAssist</title>
  </head>
  <body>
    <div class="App">
      <!-- NavBar -->
      <div class="navbar">
        <div class="right-nav">
          <a href="./lhomePage.php"><img width="50" src="../../Assists/logo/LegalAssist-Transparent.png" alt="" /></a>
          <h5>Legal Assist Lawyer</h5>
        </div>
        <div class="nav">
          <a href="./lhomePage.php">
            <p>Home</p>
          </a>
          <p></p>
          <a href="./addSlots.php">
            <p>Add Slots</p>
          </a>
          <p></p>
          <a href="./lawyerBooking.php">
            <p>My Bookings</p>
          </a>
          <p></p>
          <p>
            <i class="fa-regular fa-user" style="color: #d043b6"></i>&nbsp;&nbsp;<span id="profile"><?php echo $name; ?></span>
          </p>
          <p></p>
          <div id="signup-logout-btn">
             <a id="signup" class="signup" style="color: #fff;" href="../logout/logout.php">Sign Out</a>
          </div>
          <div id="space"></div>
        </div>
      </div>
      <div class="mybody">
        <!-- Body -->
        <div class="banner" data-aos="fade-right">
          <div class="banner-left">
            <h1>
              Discover the easiest way to schedule appointments with the #1
              online booking system
            </h1>
            <p>
              Save time spent on coordinating appointments over phone and email
              with an all-in-one appointment booking software. Accept online
              bookings 24x7, automate payments, business management, marketing,
              and more!
            </p>
            <button class="start-now">Get started Now!</button>
          </div>
          <div class="banner-right" data-aos="flip-left" data-aos-duration="1500">
            <img
              width="100%"
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Customer-scheduling-an-online-appointment.svg"
              alt=""
            />
          </div>
        </div>
        <!--  -->
        <div class="banner2" data-aos="fade-left">
          <div>
            <h2>
              Online appointment booking made simple with a 3-step <br />setup
              process
            </h2>
          </div>
          <div class="banner2-img">
            <img
              width="100%"
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/3-step-appointment-scheduling-process-1.svg"
              alt=""
            />
          </div>
        </div>
        <!--  -->
        <div class="banner3" data-aos="fade-right">
          <div>
            <h2>
              Advanced booking features to help you put your business <br />
              on autopilot
            </h2>
            <p>
              With Appointy’s online booking software say goodbye to your
              pen-paper appointment book, save time, <br />
              reduce no shows, and increase staff productivity
            </p>
          </div>
          <div class="banner3-img">
            <img
              width="100%"
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/website-mockup-laptop-mobile-tab.png"
              alt=""
            />
          </div>
        </div>
        <!-- Grid cards -->
        <div class="grid-container">
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Online-Booking-System-6.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Online Booking System</b></h4>
              <p>
                Remove friction from your booking process by minimizing the
                communication gap with your customers. Your Appointy’s online
                booking page will allow them to view real-time availability for
                services so that they can pick a time of their own convenience
                easily
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Calendar-Scheduler.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Calendar Scheduler</b></h4>
              <p>
                View appointments and staff schedules for any day/week/month at
                a glance. Easily identify gaps in your schedule to fill empty
                slots by accommodating walk-ins or promoting deals. Sync with
                your personal and professional calendars like Google Cal, iCal,
                Outlook & more
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Appointment-Alerts.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Appointment Alerts</b></h4>
              <p>
                Send automated email and text reminders to customers at preset
                times before each appointment to reduce no shows. With our
                Square, Stripe and Paypal integrations, you have the option to
                charge a full, part or a fixed amount as prepayment to avoid any
                casual bookings
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Multi-channel-Bookings.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Multi Channel Bookings</b></h4>
              <p>
                Assign staff or manager roles to your team members and let them
                manage their own schedules, leaves, etc. Keep a constant tab on
                staff productivity, sales, and schedules. Auto-allocate online
                appointments to staff members based on intelligent algorithms to
                ensure maximum productivity
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/No-show-Protection.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>No-show Protection</b></h4>
              <p>
                Receive instant notifications via sms, email, or straight in the
                app when an appointment is booked, rescheduled, or canceled.
                Your customers also receive automated appointment alerts so that
                they stay on top of their bookings without having to dial-in
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Staff-Scheduling-Management.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Staff Scheduling & Management</b></h4>
              <p>
                Accept online reservations from your business’s Google My
                Business listing using Reserve with Google. Add a 'Book Now'
                button to your website, Facebook, & Instagram to enable
                appointment bookings, & prompt visitors to book when they are
                highly engaged with your brand
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads//2021/08/Resource-Scheduling-1.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Resource Scheduling</b></h4>
              <p>
                Link resources like spaces, rooms, facilities, equipments, etc.
                to services. Auto-allocate resources when an appointment is
                booked. Save time spent on manually managing your resources,
                keep them organized, and ensure they are never double booked.
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Virtual-Appointment-Scheduling.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black">
                <b>Virtual Appointment Scheduling</b>
              </h4>
              <p>
                Offer virtual appointments and online consultations to get
                business even when customers can’t come to your store. Our Zoom
                integration automatically creates and shares virtual appointment
                details with the attendees when they book an appointment with
                you
              </p>
            </div>
          </div>
          <div class="card" data-aos="zoom-in">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Appointment-Booking-App.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container" >
              <h4 style="color: black"><b>Appointment Booking App</b></h4>
              <p>
                With Appointy’s Android & iOS mobile app you can carry your
                entire business in your pocket. Manage scheduling, payments,
                staff calendars, appointments, etc. via the app. Add
                appointments to your calendar even when you’re out for lunch. No
                laptop? No problem
              </p>
            </div>
          </div>
        </div>
        <div class="trial-button">
          <button>Start your 14-day trial now!</button>
        </div>
        <!-- BANNER 4 -->
        <div class="banner4" data-aos="zoom-out">
          <div>
            <h2>
              Flexible booking settings allow you to have complete control over
              your schedule
            </h2>
          </div>
        </div>
        <div class="grid-container-2" data-aos="zoom-out">
          <div class="card">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Business-Hour-Settings.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Business Hour Settings</b></h4>
              <p>
                You can control business hours at both the staff and service
                levels giving you the flexibility you need
              </p>
            </div>
          </div>
          <div class="card">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Booking-restrictions.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Booking Restrictions</b></h4>
              <p>
                Choose how much in advance members can book/cancel, limit the
                number of bookings by a member, and more
              </p>
            </div>
          </div>
          <div class="card">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Group-Scheduling.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Group Scheduling</b></h4>
              <p>
                Allow customers to schedule and pay for appointments for a group
                in a single transaction
              </p>
            </div>
          </div>
          <div class="card">
            <img
              src="https://www.appointy.com/online-booking-software/wp-content/uploads/2020/10/Recurring-Bookings.svg"
              alt="Avatar"
              style="width: 100px"
            />
            <div class="container">
              <h4 style="color: black"><b>Recurring Bookings</b></h4>
              <p>
                Allow customers to schedule multiple future appointments in one
                go to ensure repeat business
              </p>
            </div>
          </div>
        </div>
        <div class="banner4" >
          <div>
            <h2>Your peace of mind is our top priority!</h2>
          </div>
        </div>
        <div class="container-3">
          <div class="cont-card" data-aos="fade-right">
            <div class="card-left">
              <img
                src="https://www.appointy.com/online-booking-software/wp-content/uploads//2020/10/Super-Support.svg"
                alt=""
              />
            </div>
            <div class="card-right">
              <h4>Supper Support</h4>
              <p>
                Appointy is supported by a team of dedicated professionals who
                are always available via email, chat and phone
              </p>
            </div>
          </div>
          <div class="cont-card" data-aos="fade-left">
            <div class="card-left">
              <img
                src="https://www.appointy.com/online-booking-software/wp-content/uploads//2020/10/Multi-location-management.svg"
                alt=""
              />
            </div>
            <div class="card-right">
              <h4>Multi-Location Management</h4>
              <p>
                Appointy grows with your business! When you expand your business
                to multiple locations, Appointy allows easy management of all
                your locations & clients from a centralized admin portal
              </p>
            </div>
          </div>
          <div class="cont-card" data-aos="fade-right">
            <div class="card-left">
              <img
                src="https://www.appointy.com/online-booking-software/wp-content/uploads//2020/10/Frame-14.svg"
                alt=""
              />
            </div>
            <div class="card-right">
              <h4>Free Setup Assistance & Easy Migration</h4>
              <p>
                Easy onboarding and free personalized setup assistance from
                people who have onboarded thousands of businesses, you get
                started with Appointy in no time. Need to shift from your
                existing system? We take care of everything!
              </p>
            </div>
          </div>
          <div class="cont-card" data-aos="fade-left">
            <div class="card-left">
              <img
                src="https://www.appointy.com/online-booking-software/wp-content/uploads//2020/10/Security.svg"
                alt=""
              />
            </div>
            <div class="card-right">
              <h4>Security</h4>
              <p>
                We take customer data security very seriously. Your data is
                safe, backed-up on cloud, and you retain its complete ownership.
                Our application is hosted on Google Cloud which adheres to the
                highest standards of reliability and data security
              </p>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="footer-col">
                <h4>company</h4>
                <ul>
                  <li><a href="#">about us</a></li>
                  <li><a href="#">our services</a></li>
                  <li><a href="#">privacy policy</a></li>
                  <li><a href="#">affiliate program</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>get help</h4>
                <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">shipping</a></li>
                  <li><a href="#">returns</a></li>
                  <li><a href="#">order status</a></li>
                  <li><a href="#">payment options</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                  <li><a href="#">watch</a></li>
                  <li><a href="#">bag</a></li>
                  <li><a href="#">shoes</a></li>
                  <li><a href="#">dress</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
  <script
    src="https://kit.fontawesome.com/422003c0e3.js"
    crossorigin="anonymous"
  ></script>
  <script src="./Homepage.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>
