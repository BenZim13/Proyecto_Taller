<section id ="Como_comprar"class = "container-fluid">
    <div id ="titulo_como_comprar"   class="container-lg text-center">
        <div id="titulo" class = "text-center">
            <h2>¿Como realizo una compra?</h2>
        </div>
    </div>
    <div class = "container">
        <div class = "row row-cols-1 row-cols-md-3 g-4 justify-content-md-center">
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card   h-100" style="width: 20rem;">
                    <img src="<?= base_url('public/assets/img/paso1.png')?>" class="card-img-top w-70 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                    <h5 class = "card-title" style="color:#ff5722;">1. Busca el producto que necesites </h5>
                        <p class ="card-text">
                            Para comenzar tu compra busca el producto que te interesa en nuestras categorias.<br>
                            Si buscas algo mas especifico, podes escribirlo en el buscador
                        </p>
                    </div>
                </div>
            </div>
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card h-100" style="width: 20rem;">
                    <img src="<?= base_url('public/assets/img/paso2.png')?>" class="card-img-top w-70 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                        <h5 class = "card-title" style="color:#ff5722;">2. Añadi el producto que desees al carrito</h5>
                        <p class ="card-text">
                            Haz click en Añadir al carrito. Puedes seguir comprando o ingresar al carrito<br>
                            para revisar tu pedido
                        </p>
                    </div>
                </div>
            </div>
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card h-100" style="width: 20rem;">
                    <img src="<?= base_url('public/assets/img/paso3.png')?>" class="card-img-top w-70 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                        <h5 class = "card-title"style="color:#ff5722;">3.Compra tu carrito</h5>
                        <p class ="card-text">
                            Verifica que los productos que añadste sean los deseados en cantidad y precio<br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div   class = " col-12 col-md-11 d-flex justify-content-center" >
                <div id ="paso4" class="card card-paso4 " style="border-color:#ff5722; max-width: 70rem;">
                    <div class="card-body p-0">
                        <div class = "row align-items-center justify-content-around">
                        <div class ="col-12 col-md-6 text-center">
                            <h5 class = "card-title"style="color:#ff5722;">4.Pagos</h5>
                            <br>
                            Para pagar tu carrito solo tenes que seguir unos simples pasos:
                        </div>

                        <div class = "col-6 col-md-2 text-center">
                            <img src="<?= base_url('public/assets/img/paso41.png')?>" class="rounded w-50 mx-auto d-block" alt="...">
                            <p class = "p_0">
                                1.Elegir el metodo de pago
                            </p>
                        </div>

                        <div class = "col-6 col-md-2 text-center">
                            <img src="<?= base_url('public/assets/img/paso42.png')?>" class="rounded w-50 mx-auto d-block" alt="...">
                            <p class = "p_0">
                                2.Elegir la forma de envio
                            </p>
                        </div>

                        <div class = "col-6 col-md-2 text-center">
                            <img src="<?= base_url('public/assets/img/paso43.png')?>" class="rounded w-50 mx-auto d-block" alt="...">
                            <p class = "p_0">
                                3.Confirmar el pedido
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id ="Tipos_Envios" class="container-fluid">
    <div id ="titulo_envios" class="container-lg text-center">
        <div id="titulo" class="text-center">
            <h2>Tipos de Envios</h2>
        </div>
    </div>
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card mb-3 h-100" style="max-width: 540px; border-color:#ff5722;">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="<?= base_url('public/assets/img/delivery.png')?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#ff5722;">Envio a domicilio</h5>
                                <p class="card-text">La entrega se realiza dentro de la fecha y rango horario elegido por el cliente.
                                    El costo del material de empaque y del envío es de una tarifa plana de $ 1.500.
                                    Lo recibís en tu casa o en la dirección que nos proporciones. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card mb-3 h-100" style="max-width: 540px; border-color:#ff5722;">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="<?=base_url('public/assets/img/local.png')?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#ff5722;">Retiro en Sucursal</h5>
                                <p class="card-text">Podes retirar tu pedido en nuestra sucursal más cercana. Para ello presenta tu
                                    número de compra en nuestros horarios comerciales </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id ="mp"class = "container-fluid">
    <div id ="titulo_mp" class="container-lg text-center">
        <div id="titulo" class="text-center">
            <h2>Medios de Pago</h2>
        </div>
    </div>
    <div class="container">
        <div class = "row g-4 justify-content-center">
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card   h-100" style="width: 18rem;">
                    <img src="<?= base_url('public/assets/img/efectivo.png')?>" class="card-img-top w-50 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                    <h5 class = "card-title" style="color:#ff5722;">Efectivo</h5>
                    </div>
                </div>
            </div>
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card   h-100" style="width: 18rem;">
                    <img src="<?= base_url('public/assets/img/tarjeta.png')?>" class="card-img-top w-50 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                    <h5 class = "card-title" style="color:#ff5722;">Tarjetas de débito y crédito</h5>
                    </div>
                </div>
            </div>
            <div class = " col-12 col-md-4 col-lg-4 d-flex justify-content-center" >
                <div class="card   h-100" style="width: 18rem;">
                    <img src="<?= base_url('public/assets/img/mp.png')?>" class="card-img-top w-50 mx-auto d-block" alt="...">
                    <div class="card-body text-center">
                    <h5 class = "card-title" style="color:#ff5722;">Mercado Pago</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>