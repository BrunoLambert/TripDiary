@extends('layout.app')<!--We added the file to make our pages with the same patter-->
<head>
    <title>Início</title>
    <style type="text/css">
    body{
        text-align: center;
    }
    table tr{
        border-bottom: 10px solid transparent;
    }
    form input{
        min-width: 200px;
    }
    td{
        text-align: right;
        border-right: 10px solid transparent;
    }
    #container{
        background-color: gray;
    }
    .formError{
        color: red;
        font-weight: bold;
        text-align: left; 
    }

</style>
<script type="text/javascript">
    var errors = ['','','','','']; //Variable with the error messages

    function updateError(){ //Function that updates the fields of error mesasges.
        document.getElementById('errorName').innerText = errors[0];
        document.getElementById('errorPhone').innerText = errors[1];
        document.getElementById('errorDate').innerText = errors[2];
        document.getElementById('errorLocales').innerText = errors[3];
        document.getElementById('errorNumber').innerText = errors[4];
    }

    function nameCheck(){ //Name check, name must have at least 3 characters.
        var name = document.getElementById('name').value;
        if (name.length < 3){
            errors[0] = "Name must have at least 3 characters";
            updateError();
            return false; //Just for the final check before submit the form.
        }else{
            errors[0] = null;
            updateError();
            return true; //Just for the final check before submit the form.
        }
    }

    function phoneCheck(){
        // For phone number cheking, the regex is being used.
        // It accepts the formats:
        //  Cellphones:
        //      35912341234     35 912341234    (35)912341234   (35) 912341234
        //      3591234-1234    35 91234-1234   (35)91234-1234  (35) 91234-1234
        //      3591234 1234    35 91234 1234   (35)91234 1234  (35) 91234 1234
        //  Phones:
        //      3512341234    35 12341234       (35)12341234    (35) 12341234
        //      351234-1234    35 1234-1234     (35)1234-1234   (35) 1234-1234
        //      351234 1234    35 1234 1234     (35)1234 1234   (35) 1234 1234
        // OBS: May, some patterns aren't included.

        var phone = document.getElementById('phone').value;
        var regex = /^(\(?[1-9]{2,2}\)?)( )?9*[1-9][0-9]{3,3}(\-|( ))?[0-9]{4,4}$/;
        var match = regex.exec(phone);
        if (!match){
            errors[1] = "Phone number is not valid";
            updateError();
            return false; //Just for the final check before submit the form.
        }else{
            errors[1] = null;
            updateError(); 
            return true; //Just for the final check before submit the form.
        }
    }

    function dateCheck(){
        // Simple check from the dates. The final date can't be lower than the beginning date.
        //The Class Date does all the work for us.

        var dateFrom = new Date(document.getElementById('dateFrom').value);
        var dateTo = new Date(document.getElementById('dateTo').value);
        
        if( (dateTo - dateFrom) < 0 ){
            errors[2] = "Date is invalid";
            updateError();
            return false;  //Just for the final check before submit the form.
        }else{
            errors[2] = null;
            updateError();
            return true;  //Just for the final check before submit the form.
        }
    }

    function locationCheck(){
        // Simple check also. It just check if the Destination and the Origin are the same.
        // I think It doesn't make sense to travel to the same place.

        var origin = document.getElementById('origin').value;
        var destination = document.getElementById('destination').value;

        if (origin == destination){
            errors[3] = "Origin can't be equal to Destination";
            updateError();
            return false;  //Just for the final check before submit the form.
        }else{
            errors[3] = null;
            updateError();
            return true; //Just for the final check before submit the form.
        }
    }

    function numberCheck(){
        // It is also a simple check. It makes sure that the number of people at the trip is higher than 1

        var number = document.getElementById('numPeople');
        if (number < 1){
            errors[4] = "Number of people should be higher or equal than 1";
            updateError();
            return false;  //Just for the final check before submit the form.
        }else{
            errors[4] = null;
            updateError();
            return true;  //Just for the final check before submit the form.
        }
    }

    function formCheck(){
        // Instead of do a 'submit' directly, we check again the fields before send the data.
        // Then, the submit is made manually

        if ( nameCheck() && phoneCheck() && dateCheck() && locationCheck() && numberCheck() ){
            document.getElementById("submit").click();
        }
    }
</script>
</head>

@section('content')<!--This is where the content from the page you are making will be placed-->
<div class="container-fluid" id="container">
    <h1>New Trip</h1><br>
    <form id="TripForm" method="post" action=" {{ url('trip/register') }}">
        {!! csrf_field() !!}    
        <table style="margin: auto;">
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name" id="name" onchange="nameCheck()"></td>
                <td><p id='errorName' class="formError"></p></td>
            </tr>

            <tr>
                <td><label>Phone:</label></td>
                <td><input type="text" name="phone" id="phone" onchange="phoneCheck()"></td>
                <td><p id="errorPhone" class="formError"></p></td>
            </tr>

            <tr>
                <td><label>Date From:</label></td>
                <td><input type="date" name="dateFrom" id="dateFrom" onchange="dateCheck()"></td>
            </tr>

            <tr>
                <td><label>Date To:</label></td>
                <td><input type="date" name="dateTo" id="dateTo" onchange="dateCheck()"></td>
                <td><p id="errorDate" class="formError"></p>
            </tr>

            <tr>
                <td><label>Origin:</label></td>
                <td><input type="text" name="origin" id="origin" onchange="locationCheck()"></td>
            </tr>

            <tr>
                <td><label>Destination:</label></td>
                <td><input type="text" name="destination" id="destination" onchange="locationCheck()"><br></td>
                <td><p id="errorLocales" class="formError"></p></td>
            </tr>

            <tr>
                <td><label>Number of People:</label></td>
                <td><input type="number" name="numPeople" id="numPeople" onchange="numberCheck()"></td>
                <td><p id="errorNumber" class="formError"></p></td>
            </tr>
        </table>
        <br>
        <input type="button" name="submit" value="Register" onclick="formCheck()">
        <input type="submit" id="submit" value="submit" hidden>
    </form>
    <br>
</div>
@endsection