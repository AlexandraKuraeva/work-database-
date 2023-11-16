<!DOCTYPE html>
<html>
  <head>
    <title>Форма добавления в очередь</title>
	 
  </head>
  <body>
    <h1>Форма добавления в очередь!!!!!!!!!!</h1>

    <form 
	 action="require.php"
	 method="post">
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name" required /><br />

      <label for="surname">Фамилия:</label>
      <input type="text" id="surname" name="surname" required /><br />

      <input type="submit" value="Добавить в очередь" />
    </form>
	 
    <form action="export-pdf.php" method="post">
		    <input id="generatePdfBtn" type="submit" name="exportPDF" value="Export"> 
	 </form>

  </body>
</html>
