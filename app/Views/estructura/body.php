
<!-- Estructura -->
<body>
<h1>Hola desde Body</h1>

<!--  Helpers                 -->
<h3><?php  echo suma(8,4);          ?></h3>
<h3><?php  echo resta(5,2)                            ?></h3>



<!-- Tabla  -->

<div class="columns">

<div class="column is-4">

</div>


<table class="column is-6 table is-bordered">
<tr class="has-background-info is-size-5  has-text-centered">
<th>Name</th>
<th>Email</th>
</tr>

<?php  foreach($users as $campo) 
{
?>
<tr>
<td><?php echo $campo["name"] ?></td>
<td><?php echo $campo["email"] ?></td>
</tr>
<?php
}
?>




</table>
<div>

</body>
</html>