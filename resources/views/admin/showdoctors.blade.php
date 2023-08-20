<!DOCTYPE html>
<html lang="en">
  <head>
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

            
            <div  style="padding-top: 10px;">
            <table>
            <tr style="background-color:black;">
                <th style="padding: 10px;">Doctor name</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Speciality</th>
                <th style="padding: 10px;">Room no.</th>
                <th style="padding: 10px;">Image</th>
                <th style="padding: 10px;">Delete</th>
                <th style="padding: 10px;">update</th>
            </tr>

            @foreach($data as $doctor)
            <tr allign="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->specialty}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="50" width="50" src="doctorimage/{{$doctor->image}}"></td>
                <td><a  onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('update_doctor',$doctor->id)}}">Update</a></td>
            </tr>

            @endforeach
            </table>
            
    
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>
