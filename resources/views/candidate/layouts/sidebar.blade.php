 <div class="col-lg-3">
     <div class="d-sidebar">
         <h3 class="tw-mb-3">Candidate Dashboard</h3>

         <ul class="sidebar-menu">

             <!-- Overview -->
             <li>
                 <a class="active" href="https://jobpilot.lomeyolabs.com/candidate/dashboard">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M3 13h7V3H3v10Zm11 8h7V3h-7v18ZM3 21h7v-6H3v6Z" stroke="currentColor"
                                     stroke-width="1.5" stroke-linejoin="round" />
                             </svg>
                         </span>
                         <span class="button-text">Overview</span>
                     </span>
                 </a>
             </li>

             <!-- Applied Jobs -->
             <li>
                 <a href={{ route('candidate.appliedjobs') }}>
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M4 7h16M6 7v13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7" stroke="currentColor"
                                     stroke-width="1.5" stroke-linecap="round" />
                                 <path d="M9 7V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2" stroke="currentColor"
                                     stroke-width="1.5" />
                             </svg>
                         </span>
                         <span class="button-text">Applied Jobs</span>
                     </span>
                 </a>
             </li>

             <!-- Favorite Jobs -->
             <li>
                 <a href="{{ route('candidate.favoritejob') }}">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path
                                     d="M12 17.3l-6.18 3.25 1.18-6.9L2 8.9l6.91-1L12 1.8l3.09 6.1 6.91 1-5 4.75 1.18 6.9L12 17.3Z"
                                     stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                             </svg>
                         </span>
                         <span class="button-text">Favorite Jobs</span>
                     </span>
                 </a>
             </li>

             <!-- Job Alert -->
             <li>
                 <a href="{{ route('candidate.jobalert') }}">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M18 16v-5a6 6 0 1 0-12 0v5l-2 2h16l-2-2Z" stroke="currentColor"
                                     stroke-width="1.5" stroke-linejoin="round" />
                                 <path d="M9 18a3 3 0 0 0 6 0" stroke="currentColor" stroke-width="1.5" />
                             </svg>
                         </span>
                         <span class="button-text">Job Alert</span>
                     </span>
                 </a>
             </li>

             <!-- Messenger -->
             <li>
                 <a href="{{ route('candidate.messenger') }}">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M21 12a9 9 0 1 0-4 7.5L21 21v-9Z" stroke="currentColor" stroke-width="1.5"
                                     stroke-linejoin="round" />
                                 <path d="M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5"
                                     stroke-linecap="round" />
                             </svg>
                         </span>
                         <span class="button-text">Messenger</span>
                     </span>
                 </a>
             </li>

             <!-- Plans & Billing -->
             <li>
                 <a href="{{ route('candidate.billing') }}">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor"
                                     stroke-width="1.5" />
                                 <path d="M3 9h18" stroke="currentColor" stroke-width="1.5" />
                             </svg>
                         </span>
                         <span class="button-text">Plans & Billing</span>
                     </span>
                 </a>
             </li>

             <!-- Settings -->
             <li>
                 <a href="{{ route('candidate.settings') }}">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" stroke="currentColor"
                                     stroke-width="1.5" />
                                 <path
                                     d="M19.4 15a1.7 1.7 0 0 0 .34 1.87l-1.8 3.1a2 2 0 0 0-2.3.6H8.4a2 2 0 0 0-2.3-.6l-1.8-3.1a1.7 1.7 0 0 0 .34-1.87V11a1.7 1.7 0 0 0-.34-1.87l1.8-3.1a2 2 0 0 0 2.3-.6h6.8a2 2 0 0 0 2.3.6l1.8 3.1a1.7 1.7 0 0 0-.34 1.87v4Z"
                                     stroke="currentColor" stroke-width="1.2" />
                             </svg>
                         </span>
                         <span class="button-text">Settings</span>
                     </span>
                 </a>
             </li>

             <!-- Logout -->
             <li>
                 <a href="https://jobpilot.lomeyolabs.com/logout">
                     <span class="button-content-wrapper">
                         <span class="button-icon tw-flex tw-items-center">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                 <path d="M15 3h-8a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" stroke="currentColor"
                                     stroke-width="1.5" />
                                 <path d="M10 12h11M18 8l3 4-3 4" stroke="currentColor" stroke-width="1.5"
                                     stroke-linecap="round" />
                             </svg>
                         </span>
                         <span class="button-text">Log Out</span>
                     </span>
                 </a>
             </li>

         </ul>
     </div>
 </div>
 <!-- JavaScript -->
 <script>
     $(document).ready(function() {
         // Search box toggle
         $('#searchIcon, #mblSearchIcon').click(function() {
             const searchBox = $(this).closest('.n-header--bottom__right, .mbl-top').find(
                 '.togglesearch, .mblTogglesearch');
             searchBox.slideToggle(300, function() {
                 if ($(this).is(':visible')) {
                     $(this).find('.search-input').focus().addClass('glow');
                     setTimeout(() => {
                         $(this).find('.search-input').removeClass('glow');
                     }, 1000);
                 }
             });
         });

         // Mobile menu toggle
         $('.menu-click button').click(function() {
             $(this).find('span').toggleClass('active');
             $('.main-menu').toggleClass('active');
         });

         // Notification handling
         $('.notification-icon').click(function(e) {
             e.stopPropagation();
             $('.notification-bar').toggleClass('show');
             if ($('.notification-bar').hasClass('show')) {
                 $('.notification-bar').css({
                     'opacity': '1',
                     'visibility': 'visible',
                     'transform': 'translateY(0)'
                 });
             } else {
                 $('.notification-bar').css({
                     'opacity': '0',
                     'visibility': 'hidden',
                     'transform': 'translateY(-10px)'
                 });
             }
         });

         // Close notification when clicking outside
         $(document).click(function(e) {
             if (!$(e.target).closest('.notification-bar, .notification-icon').length) {
                 $('.notification-bar').removeClass('show').css({
                     'opacity': '0',
                     'visibility': 'hidden',
                     'transform': 'translateY(-10px)'
                 });
             }
         });

         // Mark all notifications as read
         $('.notification-header p').click(function(e) {
             e.preventDefault();
             $('.notification-list li').each(function(index) {
                 const item = $(this);
                 setTimeout(() => {
                     item.fadeOut(300, function() {
                         $(this).remove();
                         if (index === $('.notification-list li').length - 1) {
                             $('#unNotifications').fadeOut(300);
                         }
                     });
                 }, index * 100);
             });
         });

         // Profile dropdown
         $('.candidate-profile').click(function(e) {
             e.preventDefault();
             $(this).next('.dropdown-menu').toggle();
         });

         // Close dropdowns when clicking outside
         $(document).click(function(e) {
             if (!$(e.target).closest('.dropdown, .candidate-profile').length) {
                 $('.dropdown-menu').hide();
             }
         });

         // Table row hover effects
         $('.db-job-card-table tbody tr').hover(
             function() {
                 $(this).addClass('hovered');
                 $(this).find('.btn').addClass('pulse');
             },
             function() {
                 $(this).removeClass('hovered');
                 $(this).find('.btn').removeClass('pulse');
             }
         );

         // View job details with animation
         $('.db-job-btn-wrap .btn').click(function(e) {
             e.preventDefault();
             const $btn = $(this);
             const url = $btn.attr('href');

             // Add loading animation
             $btn.addClass('loading').prop('disabled', true);

             // Simulate loading and redirect
             setTimeout(() => {
                 window.location.href = url;
             }, 500);
         });

         // Sidebar toggle for mobile
         $('.sidebar-open-nav').click(function() {
             $('.d-sidebar').toggleClass('mobile-open');
             $(this).toggleClass('open');

             if ($(this).hasClass('open')) {
                 $(this).html('<i class="ph-x">✕</i>');
             } else {
                 $(this).html('<i class="ph-list">≡</i>');
             }
         });

         // Auto-hide sidebar on mobile when clicking outside
         $(document).click(function(e) {
             if ($(window).width() <= 992) {
                 if (!$(e.target).closest('.d-sidebar, .sidebar-open-nav').length &&
                     $('.d-sidebar').hasClass('mobile-open')) {
                     $('.d-sidebar').removeClass('mobile-open');
                     $('.sidebar-open-nav').removeClass('open').html('<i class="ph-list">≡</i>');
                 }
             }
         });

         // Smooth scrolling
         $('a[href^="#"]').click(function(e) {
             const href = $(this).attr('href');
             if (href !== '#' && href.startsWith('#')) {
                 e.preventDefault();
                 $('html, body').animate({
                     scrollTop: $(href).offset().top - 100
                 }, 600);
             }
         });

         // Form submission animations
         $('form').submit(function(e) {
             const $form = $(this);
             const $submitBtn = $form.find('button[type="submit"], input[type="submit"]');

             if ($submitBtn.length) {
                 $submitBtn.addClass('loading').prop('disabled', true);
                 $submitBtn.html('<span class="spinner">Loading...</span>');
             }
         });

         // Add ripple effect to buttons
         $('.btn').click(function(e) {
             const $btn = $(this);
             const x = e.pageX - $btn.offset().left;
             const y = e.pageY - $btn.offset().top;

             $btn.append('<span class="ripple"></span>');

             const $ripple = $btn.find('.ripple').last();
             $ripple.css({
                 left: x + 'px',
                 top: y + 'px'
             });

             setTimeout(() => {
                 $ripple.remove();
             }, 600);
         });

         // Counter animation
         function animateCounter(element, target) {
             const $element = $(element);
             const current = parseInt($element.text());
             const increment = target > current ? 1 : -1;

             let timer = setInterval(function() {
                 const newValue = parseInt($element.text()) + increment;
                 $element.text(newValue);

                 if (newValue === target) {
                     clearInterval(timer);
                 }
             }, 20);
         }

         // Initialize dashboard animations
         function initializeDashboard() {
             // Animate dashboard cards with delay
             $('.single-feature-box').each(function(index) {
                 $(this).css({
                     'animation-delay': (index * 0.1) + 's',
                     'opacity': '0'
                 }).animate({
                     opacity: 1
                 }, 500);
             });

             // Animate table rows
             $('.db-job-card-table tbody tr').each(function(index) {
                 $(this).css({
                     'animation-delay': (index * 0.1) + 's',
                     'opacity': '0'
                 });
             });

             // Trigger animations
             setTimeout(() => {
                 $('.single-feature-box').addClass('animated');
                 $('.db-job-card-table tbody tr').addClass('animated');
             }, 100);
         }

         // Call initialization
         initializeDashboard();

         // Global notification functions
         window.ReadNotification = function() {
             $('.notification-list li').each(function(index) {
                 const item = $(this);
                 setTimeout(() => {
                     item.fadeOut(300, function() {
                         $(this).remove();
                         if (index === $('.notification-list li').length - 1) {
                             $('#unNotifications').fadeOut(300);
                         }
                     });
                 }, index * 100);
             });
         }

         window.readSingleNotification = function(url, id) {
             const notificationItem = $('[onclick*="' + id + '"]').closest('li');

             // Animation
             notificationItem.fadeOut(300, function() {
                 $(this).remove();
                 if ($('.notification-list li').length === 0) {
                     $('#unNotifications').fadeOut(300);
                 }
             });

             // Redirect after animation
             setTimeout(() => {
                 window.location.href = url;
             }, 300);
         }
     });
 </script>
