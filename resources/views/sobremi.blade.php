<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sobre mí — Efraín Álvarez</title>
  <style>
    :root{
      --bg: #f3f6f4;
      --card: #ffffff;
      --accent: #0b8f4a; /* verde principal */
      --muted: #6b7280;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: linear-gradient(180deg, var(--bg), #eef3ef);
      color:#111827;
      padding:2rem;
    }

    .card-wrapper{
      width:100%;
      max-width:720px;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .card{
      width:100%;
      background:var(--card);
      border-radius:14px;
      padding:2.25rem 2rem;
      text-align:center;
      box-shadow: 0 18px 40px rgba(11,143,74,0.16), 0 2px 6px rgba(3,7,18,0.06);
      transition: transform 220ms ease, box-shadow 220ms ease;
      border: 1px solid rgba(3,7,18,0.04);
    }

    /* Hover: eleva y resalta más la sombra verde */
    .card:hover{
      transform: translateY(-8px) scale(1.01);
      box-shadow: 0 22px 50px rgba(11,143,74,0.28), 0 4px 10px rgba(3,7,18,0.08);
    }

    h1{
      margin:0 0 0.5rem 0;
      font-size:1.8rem;
      letter-spacing: -0.02em;
    }

    .subtitle{
      margin:0 0 1rem 0;
      color:var(--muted);
      font-size:1rem;
    }

    .section-title{
      margin-top:1.25rem;
      font-size:1.2rem;
      font-weight:700;
      color:#111827;
    }

    .name{
      margin-top:0.5rem;
      font-size:1.05rem;
      font-weight:600;
      color:var(--accent);
    }

    /* Pequeña línea separadora decorativa */
    .divider{
      height:6px;
      width:64px;
      background: linear-gradient(90deg, rgba(11,143,74,1), rgba(11,143,74,0.6));
      border-radius:6px;
      margin:1.25rem auto 0.5rem auto;
    }

    /* Responsivo */
    @media (max-width:420px){
      .card{padding:1.5rem}
      h1{font-size:1.4rem}
    }
  </style>
</head>
<body>
  <div class="card-wrapper">
    <aside class="card" role="region" aria-labelledby="sobre-titulo">
      <h1 id="sobre-titulo">Sobre mí</h1>
      <p class="subtitle">Mi información</p>
      <div class="divider" aria-hidden="true"></div>
      <p class="section-title">Mi nombre:</p>
      <p class="name">Efraín Álvarez</p>
      <p class="section-title">Procedencia:</p>
      <p class="name">Soy de Ocaña, soy hijo unico y soy fan del cucuta</p>
    </aside>
  </div>
</body>
</html>
