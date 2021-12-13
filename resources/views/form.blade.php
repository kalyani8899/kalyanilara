<!DOCTYPE html>
<html>
<body>

<h2>Product Forms</h2>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

<form action= {{route('store.form.submit')}} method="POST" enctype="multipart/form-data">
    @csrf
 
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" ><br>
  <label for="details">Details:</label><br>
  <input type="text" id="details" name="details" ><br><br>
  <label for="category_id">Category_id:</label><br>
  <input type="number" id="category_id" name="category_id" ><br><br>
  <label for="image">Image:</label><br>
  <input type="file" id="input-b2" name="image" placeholder="Insert image" ><br><br>

  <input type="submit" onclick="alert('Successfully submitted!')" value="Submit">
</form> 



</body>
</html>
