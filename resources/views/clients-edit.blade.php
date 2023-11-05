@extends('left')
@section('content')
<a href="/dashboard/clients"><button class="back-btn"><-BACK</button></a>
<div class="container">
    <h3>UPDATE THE CLIENT</h3>
    <form action="{{url('/dashboard/client/update/'.$client->id)}}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col">
              First Name <span style="color:red">*</span>
              <input type="text" name="fname" value="{{$client->fname}}" class="form-control" required>
            </div>
            <div class="col">
                Last Name <span style="color:red">*</span>
              <input type="text" name="lname" value="{{$client->lname}}" class="form-control" required>
            </div>
        </div></br>
        <div class="row">
            <div class="col">
              Contact <span style="color:red">*</span>
              <input type="text" name="contact" value="{{$client->contact}}" class="form-control" required>
            </div>
            <div class="col">
                Email Address <span style="color:red">*</span>
              <input type="text" name="email" value="{{$client->email}}" class="form-control" required>
            </div>
        </div></br>
        <div class="row">
            <div class="col">
              Gender <span style="color:red">*</span>
              <select  name="gender" value="{{$client->gender}}" class="form-control" required>
                <option selected>{{$client->gender}}</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <?php
                $date  = strtotime($client->dob);
                $day   = date('d',$date);
                $month = date('m',$date);
                $year  = date('Y',$date);

            ?>
            <div class="col">
                Date of Birth <span style="color:red">*</span>
                <div class="form-row">
                    <div class="form-group col-md-3">
                      <select id ="byear" name="byear" class="form-control">
                        <option value="" disabled selected>{{$year}}</option>
                        <?php $year=1950;
                        for($year;$year<2023;$year++){
                          echo '<option>'.$year.'</option>';
                        }?>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                       <select id="bmonth" class="form-control" name="bmonth" onkeyup="check()" >
                        <option selected>{{$month}}</option>
                        <?php $month=1;
                        for($month;$month<=12;$month++){
                          echo '<option>'.$month.'</option>';
                        }?>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <select  name="bday" id="bday" class="form-control">
                        <option selected>{{$day}}</option>
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
              </div></br>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
              Street No <span style="color:red">*</span>
              <input type="text" name="street_no" value="{{$client->street_no}}" class="form-control" required>
            </div>
            <div class="col">
                Street Address <span style="color:red">*</span>
              <input type="text" name="street_address" value="{{$client->street_address}}" class="form-control" required>
            </div>
        </div></br>
        <div class="row">
            <div class="col">
              City <span style="color:red">*</span>
              <input type="text" name="city" value="{{$client->city}}" class="form-control" required>
            </div>
            <div class="col">
                Status <span style="color:red">*</span>
              <div class="containers">
                    <?php if(($client->status)=="Inactive"){
                        echo '<div class="toggle"><div  class="toggle-button" onclick="status()"></div></div>';
                        }
                        else{
                            echo '<div class="toggle active"><div class="toggle-button" onclick="status()"></div></div>';
                        }
                    ?>

                </div>
                <input name="status" value="Inactive" class="text" style="display: none">
              </div>
            </div>
        </div></br>
        <div class="row">
            <div class="col">
                Image
                <input type="file" name="image" value="{{$client->image}}" class="form-control">
            </div>
        </div></br>
        <input type="submit" class="addbtn" value="UPDATE" style="margin-bottom: 20px"></br>
      </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function daysInMonth(month, year) {
      return new Date(year, month, 0).getDate();
    }

    $('#byear, #bmonth').change(function() {

      if ($('#byear').val().length > 0 && $('#bmonth').val().length > 0) {
        $('#bday').prop('disabled', false);
        $('#bday').find('option').remove();

        var daysInSelectedMonth = daysInMonth($('#bmonth').val(), $('#byear').val());

        for (var i = 1; i <= daysInSelectedMonth; i++) {
          $('#bday').append($("<option></option>").attr("value", i).text(i));
        }

      } else {
        $('#bday').prop('disabled', true);
      }

    });
    </script>

<script>

    var toggle = document.querySelector('.toggle');
    var text = document.querySelector('.text');
    function status(){
        toggle.classList.toggle("active");
        if(toggle.classList.contains("active")){
            text.innerHTML = "Active";
            text.value = "Active";
        }
        else{
            text.innerHTML = "Inactive";
        }

    }

    </script>
@endsection
