    <!-- Formulario de Contacto -->

    <div id="contacto"class="container-fluid">
        <div class="container">
            <div class ="row justify-content-center py-3"> 
                <div class="col-md-9">
                    <div class="card border-0 card-form-contacto">
                        <div class="card-header">
                        <h2 class="mb-0 text-center"> Formulario de Contacto</h2>
                        </div>
                        <div class="card-body">
                            <form class="mt-4" action="#" method="post">
                                
                                <div class="form-group">
                                <label for="name" class="form-label">Motivo de Consulta</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Motivo</option>
                                    <option value="1">Consulta</option>
                                    <option value="2">Reclamos</option>
                                    <option value="3">Sugerencias</option>
                                  </select>
                                </div>
                                <div class = "form-group">
                                    <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico" required>
                                    </div>
                                </div>
    
                                <div class ="form-group">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Mensaje</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </form>
                        </div>
    
                    </div>
                </div>
    
            </div>
    
        </div>
      </div>
    
          <!-- Medios de Contacto -->
  <section id ="medios_de_contacto" class="container-fluid">
    <div id ="titulo_contacto" class="container-lg text-center">
        <div id="titulo" class="text-center">
          <h2>Contacto</h2>
        </div>
    </div>
    <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-md-4">
            <div class="card mb-3 h-100 border-0" style="max-width: 540;">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="<?=base_url('public/assets/img/10.png ')?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="color:#ff5722;">Instagram</h5>
                    <p class="card-text">@SuperCarpiOk</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card mb-3 h-100 border-0" style="max-width: 540px;">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="<?=base_url('public/assets/img/9.png')?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="color:#ff5722;">Correo</h5>
                    <p class="card-text">SupermercadosSuperCarpi@gmail.com </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card mb-3 h-100 border-0" style="max-width: 540px;">
              <div class="row g-0 align-items-center">
                <div class="col-md-4">
                  <img src="<?=base_url('public/assets/img/telefono.png')?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title" style="color:#ff5722;">Telefono</h5>
                    <p class="card-text">+54 9 379 4369875 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
     </section>

     <!-- Mapa de Dirección -->
     <h2 style="color:#ff5722;">Ubicación</h2>
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.927927927927!2d-58.833333!3d-27.480556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9441b0a1a1a1a1a1%3A0x123456789abcdef!2sCorrientes%2C%20Argentina!5e0!3m2!1ses!2sus!4v1695830400000!5m2!1ses!2sus" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Mapa de ubicación">
                        </iframe>


     <!-- Razon Social y nombre del titular de la empresa -->
     <section id ="razon_titular"class = "container-fluid">
      <div id ="titulo_rt" class="container-lg text-center">
        <div id="titulo" class="text-center">
        </div>
    </div>
    <div class="container">
      <div class = "row g-4 justify-content-center">
        <div class = " col-12 col-md-6 col-lg-4" >
            <div class="card  h-100" style="width: 18rem;">
      
                <div class="card-body">
                  <h5 class="card-title" style="color:#ff5722;">Titular de la Empresa</h5>
                  <p class="card-text">Juan Gomez</p>
                </div>
              </div>
        </div>
        <div class = " col-12 col-md-6 col-lg-4" >
          <div class="card  h-100" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title" style="color:#ff5722;">Razon social</h5>
                <p class="card-text"> Corporación Iberá S.A</p>
              </div>
            </div>
      </div>
    </div>
    </div>