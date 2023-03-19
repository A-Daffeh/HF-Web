@extends('app')

@section('content')
 <!-- This is Alieu Samateh's section -->
<h1>Interested in Contacting us?</h1>
<h2>For any questions regarding our home care adult family home, please complete this form</h2>

        <!-- This page will be the contact page which will include the form and then a message telling the user thanks for applying -->
        
    <form>
       <div>
        <label for="name"> Name </label>
     <input type="text" id="name" placeholder="Enter your name" >
       </div>

     <div>
     <label for="phoneNumber"> Phone Number </label>
     <input type="text" id="phoneNumber" placeholder="Enter your number">
     </div>
      
       <div>
       <label for="emailAddress"> Email Address </label>
       <input type="text" id="emailAddress" placeholder="Enter your email">
       </div>

       <div>
       <label for="commentBox"> Reason for contact </label>
       <input type="text" id="commentBox" placeholder="Write here">
       </div>
       
       <div>
        <input type="submit">
     </div>

       
        
    </form>
</div>
@endsection