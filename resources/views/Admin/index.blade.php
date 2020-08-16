<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('adminasset/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminasset/css/main.css')}}">

    <!-- Scripts -->

    <!--===============================================================================================-->
    <style>
        td,th{
            text-align: center;
        }
        </style>
</head>

<body>

    <div class="limiter">
        <ul class="navbar-nav ml-auto" style="margin-bottom: 50px;">
            <!-- Authentication Links -->


            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110" style="overflow-x: scroll;">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th >Courses</th>
                                    <th >Code</th>
                                    <th >Discount</th>
                                    <th>Name</th>
                                    <th >Mobile</th>
                                    <th>City</th>
                                    <th >expird</th>
                                    <th >Status</th>


                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll" >
                        <table>
                            <tbody>
                                @foreach($rows as $index=>$row)
                                <tr class="row100 body">
                                    <?php
                                    $courses = $row->student->course()->get();

                                    ?>
                                    <td >@foreach($courses as $course){{$course->course_name}},@endforeach</td>
                                    <td >{{$row->coupon_code}}</td>
                                    <td >{{$row->discount_per}}</td>
                                    <td >{{$row->student->name ?? ''}}</td>
                                    <td>{{$row->student->mobile ?? ''}}</td>
                                    <td>{{$row->student->city ?? ''}}</td>
                                    <td >
                                        <?php $date = date_create($row->expired_date) ?>
                                        {{ date_format($date,'Y-m-d') }}</td>

                                        <td >{{$row->coupon_code}}</td>
                                </tr>
                                @endforeach











                            </tbody>
                        </table>
                    </div>
                </div>






            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="{{ asset('adminasset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('adminasset/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('adminasset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('adminasset/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('adminasset/js/main.js')}}"></script>


</body>

</html>