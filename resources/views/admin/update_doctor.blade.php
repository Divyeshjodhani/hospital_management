<!DOCTYPE html>
<html lang="en">
  <head>
        <base href="/public">
        <style>
            label
            {
                display:inline-block;
                width:100px;
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

        @if(session()->has('message'))

            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>     

        {{session()->get('message')}}
        </div>

@endif

        <div class="container" allign="center" style="padding:100px;">
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
                <div style="padding:15px;">
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" style="color:black;" id="" value="{{$data->name}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Phone no.</label>
                    <input type="number" name="phone" style="color:black;" id="" value="{{$data->phone}}">
                </div>
                <div style="padding:15px;">
                    <label for="">specialty</label>
                    <input type="text" name="specialty" style="color:black;" id="" value="{{$data->specialty}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Room no.</label>
                    <input type="text" name="room" style="color:black;" id="" value="{{$data->room}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Old Image</label>
                    <img height="100" width="100" src="doctorimage/{{$data->image}}" alt="">
                </div>
                <div style="padding:15px;">
                    <label for="">Change Image</label>
                    <input type="file" name="file" for="">
                </div>
                <div style="padding:15px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>

        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>
