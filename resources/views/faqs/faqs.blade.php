@extends('layouts.app')
 
@section('faqs')

<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta lang="es">
    <meta name="author" content="DH, Coudeu, Baier, Gaab, Ojeda">
    <meta name="description" content="Huella Pet es tu Pet Shop amigo y lo mejor es que Online, no tenes que salir de tu casa, comprá lo que necesitas cuando queres.">
    <meta name="keywords" content="Huella Pet, pet shop, online, mascota, alimentos, perro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Huella Pet</title>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

<!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/demo.css" rel="stylesheet" />

<!-- CSS del proyecto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/huellacss.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    
  <body>
 
            
            <section id="faqs" class="faqs">
                
                <h2>Preguntas Frecuentes</h2>
                <button class="accordion">¿Qué es Huella Pet?</button>
                    <div class="panel">
                        <p>Somos un delivery online especializado en productos para mascotas. <strong>Actualmente podés encontrar alimento balanceado, piedras sanitarias para gatos, antipulgas/garrapaticidas, golosinas, accesorios y muchas cosas más.</strong></p>
                    </div>

                <button class="accordion">¿Qué productos y marcas para mascotas venden en Huella Pet?</button>
                    <div class="panel">
                        <p>Podés encontrar alimento balanceado adecuado para tu mascota, piedras sanitarias para gatos, antipulgas/garrapaticidas, golosinas, accesorios y muchas cosas más.</p>
                            <ul>
                                <li>Dog Chow</li>
                                <li>Royal Canin</li>
                                <li>Eukanuba</li>                                      
                                <li>Pro Plan</li>
                                <li>Vital Can</li>
                                <li>Purina Excellent</li>
                                <li>Iams</li>
                                <li>Old Prince</li>
                                <li>Cat Chow</li>
                            </ul>
                        <p>También podés sugerirnos otros alimentos o accesorios que consideres que deben estar, escribiendo la misma en nuestra sección <a href="#">Contacto</a>.</p>
                    </div>

                    <button class="accordion">¿Cómo encuentro el alimento balanceado que necesito?</button>
                    <div class="panel">
                        <ul>
                            <li>
                                <em><strong>Si ya sabes cuál producto estas buscando:</strong></em>
                                Escribí el nombre del producto en la barra de búsqueda que se encuentra en <a href="#home" target="_blank"">Inicio</a> y te irán apareciendo automáticamente los resultados que coincidan con tu búsqueda. Seleccionas el producto y luego podrás elegir cuantos Kg comprar.
                            </li>
                            <li>
                                <strong><em>Si todavía no sabes qué comprar o no recordás el nombre:</em></strong>Haces click “<a href="#tienda" target="_blank">Aquí</a>“, y podés ir filtrando hasta que encuentres lo que necesitas.
                            </li>
                        </ul>
                    </div>

                    <button class="accordion">¿Dónde veo los distintos tamaños/kg de un mismo producto?</button>
                    <div class="panel">
                        <p>Cuando seleccionas el producto que estas buscando, ej: <em>Vitalcan Puppy Large Breed</em>, ingresas a la página del producto donde vas a ver todos los tamaños (kg) y precios.</p>
                    </div>

                    <button class="accordion">¿Cuáles son los métodos de pago disponible?</button>
                    <div class="panel">
                        <p>Podés pagar tu compra con:</p>
                        <p><strong>Tarjeta de crédito/débito (MercadoPago): Visa, Mastercard, American Express, Naranja, Nativa, Tarjeta Shopping, Tarjeta Cencosud, Cabal.</strong> Solo debes seleccionar la opción MercadoPago cuando estés completando los datos de pago.
                        También podes acceder hasta 12 cuotas sin interés. <a href="https://www.mercadopago.com.ar/promociones" target="_blank">Consultá aquí las tarjetas con promociones de cuotas sin interés</a></p>
                        <p><strong>Efectivo en tu domicilio: Pagas cuando te llega el pedido a tu domicilio.</strong> <em>Tené en cuenta que esto representa un voto de confianza total, debido a que pagaremos el envío por vos antes de tu pago.</em> Si un pedido llega a tu domicilio y no es abonado o no hay nadie en el día y horario especificado, luego deberás realizar tu próximo pedido con algún medio de pago electrónico para habilitar esta funcionalidad.</p>
                        <p><strong>Efectivo en Pagofácil/Rapipago/ProvinciaNet/CargaVirtual (MercadoPago):</strong> Podés pagar con efectivo en cualquier de estos medios seleccionando la opción MercadoPago cuando estés completando los datos de pago.</p>
                        <p><strong>PagoMisCuentas (MercadoPago):</strong> Seleccionás MercadoPago cuando estés completando los datos de pago y luego en las pasos siguientes te indicarán como realizar el pago con tu HomeBanking. Luego deberás enviarnos el comprobante correspondiente vía mail a ventas@huellapet.com</p>
                    </div>

                    <button class="accordion">¿Es seguro comprar con tarjeta de crédito en Huella Pet?</button>
                    <div class="panel">
                        <p><strong>SI.</strong> Es seguro comprar con tarjetas de crédito en Huella Pet. Trabajamos con <a href="https://www.mercadopago.com.ar/" target="_blank">MercadoPago</a> que cumple con los estándares más exigentes de seguridad del Security Standard Council. Tus datos se encuentran protegidos. Podés comprar con total tranquilidad.</p>
                    </div>

                    <button class="accordion">¿En cuanto tiempo se acredita mi pago?</button>
                    <div class="panel">
                        <ul>
                            <li><strong>Tarjeta de crédito</strong>: En el momento.</li>
                            <li><strong>PagoFácil, Rapipago, ProvinciaNet, Carga Virtual:</strong> En el momento.</li>
                            <li><strong>PagoMisCuentas:</strong> Entre 1 y 2 días hábiles.</li>
                        </ul>
                    </div>

                    <button class="accordion">¿Hacen envíos en el día?</button>
                    <div class="panel">
                        <p>Sí. Podes hacer tu pedido y programarlo para el mismo día. Chequeá la disponibilidad de horarios dentro de la página de cada producto.</p>
                    </div>

                    <button class="accordion">¿Cuál es la zona de cobertura que cubren para realizar las entregas?</button>
                    <div class="panel">
                        <p>Actualmente trabajamos en todo C.A.B.A., pero pronto expandiremos nuestra zona de cobertura hacia Zona Norte y Oeste.</p>
                    </div>

                    <button class="accordion">¿Los envíos tienen costo?</button>
                    <div class="panel">
                        <p><strong>Envío a domicilio y sin cargo en C.A.B.A. en compras mayores a $500.-</strong></p>
                        <p>Por compras menores a $500.- podés consultarnos costo de envío telefónicamente al 0810 888 1234 o vía whatsapp al 115 4835 2738.</p>
                        <p>También realizamos envíos por encomienda a todo el país con la empresa transportadora que elijas; puede tener o no costo de despacho.</p>
                    </div>

                    <button class="accordion">Más preguntas ...</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                    </div>
                </section>

          
        </div>

        

        </body> 

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<script type="text/javascript">
function desplegar(alturaencabezado){
var obj = document.getElementById('alturaencabezado'); 
obj.style.height = "380px";

}
function contraer(alturaencabezado){
var obj = document.getElementById('alturaencabezado'); 
obj.style.height = "400px";

}

</script>
</html>

@endsection




    

