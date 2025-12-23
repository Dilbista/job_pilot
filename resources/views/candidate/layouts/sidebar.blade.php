 <div class="col-lg-3">
     <div class="d-sidebar">
         <h3 class="tw-mb-3">Candidate Dashboard</h3>

         <ul class="sidebar-menu">

             <!-- Overview -->
             <li>
                 <a class="active" href={{ route('candidate.index') }}>
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

