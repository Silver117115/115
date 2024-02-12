<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css\style2.css">
    <title>Quejas y comentarios</title>
</head>
<body >
<div class="complaints-section">
    <h2>Quejas o sugerencias</h2>
    <form class="complaints-form" id="complaintsForm">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="text" name="email" placeholder="Your Email" required><br>
        <textarea name="complaint" placeholder="Your Complaint" required></textarea><br>
        <input type="submit" value="Submit Complaint">
    </form>
</div>

<script>
    document.getElementById("complaintsForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let formData = new FormData(this);
        
        // Simulate sending the data (replace this with actual backend code)
        setTimeout(function() {
            alert("Complaint submitted successfully!");
            document.getElementById("complaintsForm").reset();
        }, 1000);
    });
</script>
</body>
</html>