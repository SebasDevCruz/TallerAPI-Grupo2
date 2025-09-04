<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PERSA - Aplicativo SENA</title>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background: #f4f6f8;
      margin: 0;
      padding: 0;
      color: #222;
    }
    .container-main {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }
    .title {
      text-align: center;
      font-size: 3rem;
      font-weight: 900;
      color: #22c55e;
      margin-bottom: 0.25rem;
    }
    .subtitle {
      text-align: center;
      font-size: 1.25rem;
      color: #64748b;
      margin-bottom: 2rem;
    }
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
      gap: 1.5rem;
    }
    .content-card {
      background: white;
      border-radius: 12px;
      padding: 1.5rem;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
    }
    .content-card:hover {
      box-shadow: 0 10px 30px rgba(34,197,94,0.3);
    }
    .title-card {
      display: block;
      font-weight: 700;
      font-size: 1.25rem;
      color: #16a34a;
      margin-bottom: 0.75rem;
    }
    .text-card {
      font-size: 1rem;
      color: #4b5563;
      line-height: 1.5;
    }
    @media (max-width: 768px) {
      .title {
        font-size: 2.5rem;
      }
      .subtitle {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container-main">
    <h1 class="title">PERSA</h1>
    <h3 class="subtitle">PERSA es un aplicativo SENA</h3>

    <div class="cards">
      <div class="content-card">
        <label class="title-card">USUARIOS</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">PROGRAMAS</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">SEDES</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">FICHAS</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">PERMISOS</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">ROLES</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
      <div class="content-card">
        <label class="title-card">TIPOS DE PERMISOS</label>
        <p class="text-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequatur possimus assumenda eligendi, neque ullam maxime sit incidunt reprehenderit atque est ipsa nam? Labore, nobis nihil? Consectetur non earum quidem!</p>
      </div>
    </div>
  </div>
</body>
</html>
