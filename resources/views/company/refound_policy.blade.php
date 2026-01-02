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
                font-size: 30px;
                font-weight: 600;
        }

        dl {
                font-size: 18px;
                font-weight: 400;
        }
</style>
<div class="pageheader">
        <h3>Refound Policy</h3>
        <div><a href="{{ route('home') }}">Home</a> / Refound Policy</div>
</div>
<div class="container">
        <ol>
                <li>Refound Policy
                    <dl>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Corporis, veritatis voluptate non autem corrupti libero, accusamus
                            suscipit tempore debitis magni quas dolor molestiae aliquam voluptates
                            officiis quam! Autem, eos maiores.
                    </dl>
                </li>
                <li>Limitations
                    <dl>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Corporis, veritatis voluptate non autem corrupti libero, accusamus
                            suscipit tempore debitis magni quas dolor molestiae aliquam voluptates
                            officiis quam! Autem, eos maiores.
                    </dl>
                </li>
                <li>Security
                    <dl>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Corporis, veritatis voluptate non autem corrupti libero, accusamus
                            suscipit tempore debitis magni quas dolor molestiae aliquam voluptates
                            officiis quam! Autem, eos maiores.
                    </dl>
                </li>
                <li>Privacy Policy
                    <dl>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Corporis, veritatis voluptate non autem corrupti libero, accusamus
                            suscipit tempore debitis magni quas dolor molestiae aliquam voluptates
                            officiis quam! Autem, eos maiores.
                    </dl>
                </li>
        </ol>
    </div>
@endsection