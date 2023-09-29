<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Details</title>
</head>
<body>
  <h1>User Details</h1>
  <p>Welcome, <span id="username"></span>!</p>
  
  <script>
    // Get the username from the URL parameters
    const urlSearchParams = new URLSearchParams(window.location.search);
    const username = urlSearchParams.get('username');
    
    // Display the username in the page
    const usernameElement = document.getElementById('username');
    usernameElement.textContent = username;
  </script>
</body>
</html>
