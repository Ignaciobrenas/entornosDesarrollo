<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ignacio Breñas</title>
</head>
<body>
  <header>
    <h1>Ignacio Breñas</h1>
    <p>Bienvenido a mi página personal</p>
    <?php
      // Fecha actual
      echo "Hoy es " . date("l, j \d\e F \d\e Y H:i:s") . "<br>";

      // Fecha ejemplo pasada
      echo "Oct 3, 1975 fue un " . date("l", mktime(0,0,0,10,3,1975)) . "<br>";

      // Formatos RFC y ATOM
      echo "Formato RFC822: " . date(DATE_RFC822) . "<br>";
      echo "Formato ATOM: " . date(DATE_ATOM, mktime(0,0,0,10,3,1975)) . "<br>";
    ?>
  </header>

  <main>
    <section id="sobre-mi">
      <h2>Sobre mí</h2>
      <p>Soy Ignacio Breñas, estudiante y entusiasta de la tecnología y desarrollo web.
         Me gusta aprender cosas nuevas y crear proyectos interesantes que ayuden a la gente 
         o simplemente sean divertidos de hacer.</p>
    </section>

    <section id="proyectos">
      <h2>Proyectos</h2>
      <p>Aquí puedes ver algunos de mis proyectos:</p>
      <ul>
        <li>Proyecto 1</li>
        <li>Proyecto 2</li>
        <li>Proyecto 3</li>
      </ul>
    </section>

    <nav>
      <a href="#sobre-mi">Sobre mí</a>
      <a href="#proyectos">Proyectos</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </main>

  <footer>
    <p>© 2025 Ignacio Breñas</p>
  </footer>
</body>
</html>
