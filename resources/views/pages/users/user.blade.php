@extends('pages.layouts.master')

@include('pages.layouts.head')
@section('user')
Mohammad
@endsection



    @section('content')
<body>
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h2 class="card-title">System users</h2>
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                            Job ID
                            </th>
                            <th>
                            Name
                            </th>
                            <th>
                            User role 
                            </th>
                            <th>
                            Email
                            </th>
                            <th>
                            Phone No 
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                201910085
                            </td>
                            <td>
                                Mohammad Almobayed
                            </td>
                            <td>
                                Dorm Supervisor
                            </td>
                            <td>
                                mohammadalmobayid@gmail.com
                            </td>
                            <td>
                                0798009602
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                000000000
                            </td>
                            <td>
                                Renee Adam
                            </td>
                            <td>
                               Finance Employee
                            </td>
                            <td>
                               reneeadam@gmail.com
                            </td>
                            
                            <td>
                                0777777777
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                000000000
                            </td>
                            <td>
                                John Richards
                            </td>
                            <td>
                               Dean
                            </td>
                            <td>
                               johnrichards@gmail.com
                            </td>
                            
                            <td>
                                0777777777
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                xxxxxxxxxx
                            </td>
                            <td>
                                Peter Meggik
                            </td>
                            <td>
                               Admin
                            </td>
                            <td>
                            petermeggik@gmail.com
                            </td>
                           
                            <td>
                                077xxxxxxxx
                            </td>
                            
                        </tr>
                         
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  

@endsection