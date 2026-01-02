@extends('layouts.master')
@section('content')
    <style>
        .pageheader {
            background: #f1f3f6;
            padding: 20px 40px;
            font-weight: 500;
            text-align: center;
        }

        a {
            color: rgb(103, 101, 101);
            text-decoration: none;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        li {
            font-size: 16px;
            /* font-weight: 600; */
        }

    </style>
    <div class="pageheader">
        <h3>Privacy & Policy</h3>
        <div><a href="{{ route('home') }}">Home</a> / Privacy & Policy</div>
    </div>

    <div class="container">
        <p>Welcome to Jobpilot, a product of Templatecookie. This Privacy Policy outlines how we collect, use, disclose, and
            protect your personal information. By accessing or using Jobpilot, you agree to the terms outlined in this
            policy.</p>
        <h2>Information We Collect</h2>
        <h6> Personal Information:</h6>
        <ul>
            <li>When you use Jobpilot, we may collect personal information such as your name, email address, and contact
                details.</li>
        </ul>
        <h6>User-Generated Content:</h6>
        <ul>
            <li>We may collect information you provide when using our services, such as job preferences, resume details, and
                any other content you submit.</li>
        </ul>
        <h6>Device Information:</h6>
        <ul>
            <li>We may collect information about the device you use to access Jobpilot, including device type, operating
                system, and unique device identifiers.</li>
        </ul>
        <h6>Log Data:</h6>
        <ul>
            <li>Like many websites and applications, we automatically collect log data, which may include your IP address,
                browser type, pages visited, and time spent on the platform.</li>
        </ul>
        <h2>How We Use Your Information</h2>
        <p>We use the collected information for the following purposes:</p>

        <h6>Providing and Improving Services:</h6>
        <ul>
            <li>To offer, operate, maintain, and improve Jobpilot's features and functionality.</li>
        </ul>
        <h6>Personalization:</h6>
        <ul>
            <li>To tailor our services to your preferences and provide a personalized user experience.</li>
        </ul>
        <h6>Communication:</h6>
        <ul>
            <li>To communicate with you, respond to inquiries, and send relevant notifications.</li>
        </ul>
        <h6>Analytics:</h6>
        <ul>
            <li>To analyze usage patterns, monitor trends, and gather demographic information to improve our services.</li>
        </ul>
        <h2>Information Sharing</h2>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent,
            except as detailed in this Privacy Policy.</p>

        <h6>Service Providers:</h6>
        <ul>
            <li>We may share information with third-party service providers to perform functions on our behalf, such as
                hosting, analytics, and customer support.</li>
        </ul>
        <h6>Legal Compliance:</h6>
        <ul>
            <li>We may disclose information when required by law or to protect our rights, privacy, safety, or property.
            </li>
        </ul>
        <h2>Gallery Access Permission</h2>
        <p>Jobpilot may request access to your device's gallery to provide specific functionality, such as uploading a
            profile picture or attaching images to job applications.</p>

        <h6>Types of Data Collected:</h6>
        <ul>
            <li> Photos and images stored in your device's gallery.</li>
        </ul>
        <h6>Purpose of Collection:</h6>
        To enhance your profile, attach relevant images to job applications, etc.
        <h6>Consent:</h6>
        <ul>
            <li>By using Jobpilot, you grant us permission to access your device's gallery for the specified purposes. You
                can manage or revoke this permission through your device settings.</li>
        </ul>
        <h6>Retention:</h6>
        <ul>
            <li>We will only retain images from your gallery for as long as necessary to fulfill the purpose for which they
                were collected or as required by applicable laws.</li>
        </ul>
        <h6>Security:</h6>
        <ul>
            <li>We take appropriate measures to secure and protect any images or information accessed from your gallery.
            </li>
        </ul>

        <h6>Sharing:</h6>
        <ul>
            <li>We do not share the images accessed from your gallery with third parties, except as outlined in this Privacy
                Policy.</li>
        </ul <h2> Account Deletion</h2>
        <p>Users have the option to delete their accounts through the following URLs:</p>
        <ul>
            <li>Candidate Account Deletion:<a href="http://127.0.0.1:8000/dashboard/settings">http://127.0.0.1:8000/dashboard/settings</a></li>
            <li>Company Account Deletion: <a href="http://127.0.0.1:8000/dashboard/settings">http://127.0.0.1:8000/dashboard/settings</a></li>
        </ul>

        <h2>Contact Us</h2>
        <p>If you have questions or concerns about this Privacy Policy, please contact us at
            hello+jobpilot@templatecookie.com.</p>
    </div>
@endsection