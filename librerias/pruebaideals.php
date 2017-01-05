<!DOCTYPE html>
<html>
<head>
<script src="librerias/idealforms/js/out/jquery.idealforms.js"></script>
<script src="librerias/idealforms/js\i18n/jquery.idealforms.i18n.es.js"></script>

	<title></title>
</head>
<body>
<form class="idealforms" novalidate autocomplete="off" action="/" method="post">

  <!-- Text -->
  <div class="field">
    <label class="main">Username:</label>
    <input name="username" type="text">
    <span class="error"></span>
  </div>

  <!-- File -->
  <div class="field">
    <label class="main">Picture:</label>
    <input id="picture" name="picture" type="file" multiple>
    <span class="error"></span>
  </div>

  <!-- Radio -->
  <div class="field">
    <label class="main">Sex:</label>
    <p class="group">
      <label><input name="sex" type="radio" value="male">Male</label>
      <label><input name="sex" type="radio" value="female">Female</label>
    </p>
    <span class="error"></span>
  </div>

  <!-- Checkbox -->
  <div class="field">
    <label class="main">Hobbies:</label>
    <p class="group">
      <label><input name="hobbies[]" type="checkbox" value="football">Football</label>
      <label><input name="hobbies[]" type="checkbox" value="basketball">Basketball</label>
      <label><input name="hobbies[]" type="checkbox" value="dancing">Dancing</label>
    </p>
    <span class="error"></span>
  </div>

  <!-- Select -->
  <div class="field">
    <label class="main">Options:</label>
    <select name="options">
      <option value="default">&ndash; Select an option &ndash;</option>
      <option value="1">One</option>
      <option value="2">Two</option>
    </select>
    <span class="error"></span>
  </div>

  <!-- Textarea -->
  <div class="field">
    <label class="main">Comments:</label>
    <textarea name="comments" cols="30" rows="10"></textarea>
    <span class="error"></span>
  </div>

  <!-- Button -->
  <button type="submit">Submit</button>

</form>
</body>
</html>