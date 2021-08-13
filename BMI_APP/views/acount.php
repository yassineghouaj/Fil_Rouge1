<div class="container">
  <h2>my acount</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>height</th>
        <th>weight</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['first_name']; ?></td>
        <td><?php echo $_SESSION['last_name']; ?></td>
        <td><?php echo $_SESSION['height']; ?></td>
        <td><?php echo $_SESSION['weight']; ?></td> 

     
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div><br><br>