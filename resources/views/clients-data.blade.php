
@extends('left')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

<div class="container"></br>
        <h3>CLIENTS</h3>
        @if ($message = Session::get('success'))
        <div class="alert alert-success" ">
            <p>{{ $message }}</p>
        </div>
      @endif
      @if ($error = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $error }}</p>
        </div>
      @endif
        <a href="{{route('client-new')}}"><button class="addclient-btn">+Create New</button></a>
        <table class="table table-bordered" id="example" style="background-color: white;border-radius:5px;">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php $i=1;?>
            @foreach($client as $res)
            <tr>
                <?php $status=""; if($res->status=1)$status="Active";else $status="Inactive" ?>
                <td>{{$i}}</td>
                <?php
                    if(($res->image)=="")
                        echo '<td><image src="/image.jpg" width="70px" height="40px"></td>';
                    else
                        echo '<td><image src='.'/'.$res->image.' width="50px" height="40px"></td>';
                ?>

                <td>{{$res->fname}}</td>
                <td>{{$res->contact}}</td>
                <td>{{$res->email}}</td>
                <?php if($status="Active"){echo '<td><button style=background-color:green;color:white;border:none;border-radius:2px;>'.$status.'</button></td>';}
                    else{ echo '<td><button style=background-color:red;color:white;border:none;border-radius:2px;>'.$status.'</button></td>';}?>
                <td>
                    <a href="{{url('dashboard/client/edit/'.$res->id)}}"><button type="submit"  class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button></a>
                    <a href="{{url('dashboard/client/delete/'.$res->id)}}" type="button" onclick="confirmation(event)" class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                    <a
                        href="javascript:void(0)"
                        id="show-user"
                        data-url="{{ route('client.show', $res->id) }}"
                        ><i class="fa-solid fa-eye view-btn"></i></a>
                </td>

                <?php $i++; ?>
            </tr>
            @endforeach


        </table>
        <div class="row">{{$client->links()}}</div>

    </div>

<!-- Modal -->
<div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:420px;height:200px">
      <div class="modal-content">
        <div class="modal-header" style="background-color: black">
          <h5 class="modal-title" id="exampleModalLabel" style="color: white">Client Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white"></button>
        </div>
        <div class="modal-body">
            <div><img src="{{asset('profile.png')}}" class="profile-img"></div>
            <table class="table">
              <tr><td>First Name:    </td> <td id="client-fname"></td></tr>
              <tr><td>Last Name:     </td> <td id="client-lname"></td></tr>
              <tr><td>Name:          </td> <td id="client-name"></td></tr>
              <tr><td>Contact:       </td> <td id="client-contact"></td></tr>
              <tr><td>Email Address: </td> <td id="client-email"></td></tr>
              <tr><td>Date of Birth: </td> <td id="client-dob"></td></tr>
              <tr><td>Address:       </td> <td id="client-address"></td></tr>
            </table>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> --}}
      </div>
    </div>
  </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">

      $(document).ready(function () {

        $('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#userShowModal').modal('show');
              $('#client-fname').text(data.fname);
              $('#client-lname').text(data.lname);
              $('#client-name').text(data.fname + ' ' + data.lname);
              $('#client-contact').text(data.contact);
              $('#client-email').text(data.email);
              $('#client-dob').text(data.dob);
              $('#client-address').text(data.street_no + ', ' + data.street_address + ', ' + data.city);
          })
       });
    });

  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var directpath = ev.currentTarget.getAttribute('href');
            console.log(directpath);

            swal({
                title: 'Are you sure want to delete this client?',
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel)=>{
                if(willCancel){
                    window.location.href = directpath;
                }
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    @endsection

