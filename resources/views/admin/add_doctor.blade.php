<!DOCTYPE html>
<html lang="en">
  <head>

        <style type="text/css">
            label
            {
                display: inline-block;
                width: 200px;
            }
        </style>
        @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
        <!-- navbar -->
        @include('admin.navbar');
        <!-- navbar -->
    
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            
        <div class="container" align="center" style="padding-top:100px;">

            @if(session()->has('message'))

                <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert">
                    x
                   </button>     
                
                {{session()->get('message')}}
                </div>

            @endif


            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px;">
                    <label for="">Doctor Name</label>
                    <input type="text" style="color:black;" name="name" id="" placeholder="Write the name" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">phone</label>
                    <input type="number" style="color:black;" name="number" id="" placeholder="Write the phone number" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">Doctor Speciality</label>
                    <select name="Speciality" id="" style="color:black;" required="">
                        <option value="">---select---</option>
                        <option value="">Skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="nose">nose</option>
                    </select>
                </div>

                <div style="padding: 15px;">
                    <label for="">Room No</label>
                    <input type="text" style="color:black;" name="room" id="" placeholder="Write the room no" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">Doctor image</label>
                    <input type="file" name="file" id="" required="">
                </div>
            

                <div style="padding: 15px;">

                    <input type="submit" name="submit" class="btn btn-success" id="">
                </div>

            </form>
        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>
