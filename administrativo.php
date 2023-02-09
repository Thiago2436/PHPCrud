<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="administrativo.css">
    <meta charset="UTF-8">
    <title>Minha Coleção de Música</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#adicionar-musica">Adicionar Música</a></li>
          <li><a href="#editar-musica">Editar Música</a></li>
          <li><a href="#excluir-musica">Excluir Música</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="adicionar-musica">
        <h2>Adicionar Música</h2>
        <form action="#" method="post">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo">
          <br><br>
          <label for="artista">Artista:</label>
          <input type="text" id="artista" name="artista">
          <br><br>
          <label for="genero">Gênero:</label>
          <input type="text" id="genero" name="genero">
          <br><br>
          <input type="submit" value="Adicionar">
        </form>
      </section>
      <section id="editar-musica">
        <h2>Editar Música</h2>
        <form action="#" method="post">
          <label for="titulo-editar">Título:</label>
          <input type="text" id="titulo-editar" name="titulo-editar">
          <br><br>
          <input type="submit" value="Buscar">
        </form>
        <br><br>
        <form action="#" method="post">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" disabled>
          <br><br>
          <label for="artista">Artista:</label>
          <input type="text" id="artista" name="artista">
          <br><br>
          <label for="genero">Gênero:</label>
          <input type="text" id="genero" name="genero">
          <br><br>
          <input type="submit" value="Salvar Alterações">
        </form>
      </section>
      <section id="excluir-musica">
        <h2>Excluir Música</h2>
        <form action="#" method="post">
          <label for="titulo-excluir">Título:</label>
          <input type="text" id="titulo-excluirir" name="titulo-excluir">
<br><br>
<input type="submit" value="Excluir">
</form>
</section>
</main>
<footer>
<p>Todos os direitos reservados</p>
</footer>

  </body>
</html>
