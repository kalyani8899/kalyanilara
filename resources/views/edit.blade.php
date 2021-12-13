<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action= {{route('store.form.update',$data->id)}} method="POST">
    @csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value={{$data->title}}><br>
  <label for="details">Details:</label><br>
  <input type="text" id="details" name="details" value={{$data->details}}><br><br>
  <label for="category_id">Category_id:</label><br>
  <input type="number" id="category_id" name="category_id" ><br><br>
  <label for="image">Image:</label><br>
  <input type="file" id="input-b2" name="image" placeholder="Insert image"><br><br>
  <input type="submit" onclick="alert('Successfully Edited!')" value="Submit" >
</form> 



</body>
</html>
