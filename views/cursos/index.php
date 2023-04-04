
<main>
  <section class="banner">
          <div class="cursos">
              <h2>Oferecemos cursos gratuitos ⬇️ </h2>
              <?php foreach ($dataProvider->getModels() as $data) : ?>
                <div class="cursos-card">
                  <h3> <?= $data->nome ?> </h3>
                  <p>Descrição</p>
                </div>
              <?php endforeach; ?>
              <a href="#">Matricule-se já</a>
          </div>
      </section>
      <section>
            
      </section>
</main>



