<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=phone], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<div class="row">
    <div class="container">
<h3>Add Your Company</h3>
<div>
  <form action="{{route('add.data')}}" method="post">
      @csrf
    <label for="fname">First Name</label>
    <input type="text" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" name="email" placeholder="Email">

    <label for="lname">Password</label>
    <input type="password" name="password" placeholder="Enter your password">

    <label for="lname">Phone</label>
    <input type="phone" name="phone" placeholder="Enter your phone number">


  
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</div>

</body>
</html>


