<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Schemes</title>
    <link type="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <h1>Create Scheme of work</h1>
   <div class="container-sm">
   <form class="form-group"action="{{route('schemes.store')}}" method="POST">
        @csrf 
        <label for="title">Title</label>
        <input type="text" name="title" require>

        <label for="description">Description</label>
        <textarea name="description" required>
</textarea>
<label for="start_date">Start Date:
</label>
<input type="date" name="start_date" required>
<label for="end_date">End Date:</label>
<input type="date" name="end_date" required>
<label for="subject">Subject</label>
<input type="text" name="subject" required>
<button type="submit">Create</button>
</form>
   </div>
</body>
</html>