<!DOCTYPE html>
<html>
<head>
    <title>Create Transaction</title>
</head>
<body>
    <h2>Create Transaction</h2>
    <form method="POST" action="{{ route('createCharge') }}">
        @csrf
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount"><br>
        
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
