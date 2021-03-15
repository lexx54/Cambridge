<fieldset>
<legend>Sign Up</legend>
<form action="" method="post" class="row row-cols-1">
<div class="row mt-2">
  <label for="firstName" class="col-4">First Name</label>
  <input type="text" name="firstName"
  placeholder="e.g Juan" class="col-8" required
  title="Add a name, only letter are accepted"
  pattern="^[a-zA-Z]+">
</div>

<div class="row mt-2">
  <label for="lastName" class="col-4">Last Name</label>
  <input type="text" name="lastName"
  placeholder="e.g Perez" class="col-8" required
  title="add a last name, only letter are accepted"
  pattern="^[a-zA-Z]+">
</div>

<div class="row mt-2">
  <label for="user" class="col-4">User</label>
  <input type="text" name="user"
  placeholder="juan88" class="col-8" required
  title="add your user name, only letter and number are accepted"
  pattern="^[a-zA-Z0-9]+">
</div>

<div class="row mt-2">
  <label for="passw" class="col-4">Password</label>
  <input type="password" name="passw"
  class="col-8" required
  title="add a password, 1-12 characters only numbers and letters are accepted"
  pattern="^[a-zA-Z0-9]+">
</div>

<div class="row mt-2">
  <label for="member" class="col-4">Member</label>
  <select name="member" id="" class="col-8">
    <option value="students">Student</option>
    <option value="teachers">Teacher</option>
  </select>
</div>
<input type="submit" value="Save" class="col-4 offset-7 btn btn-primary">
</form>
</fieldset>
