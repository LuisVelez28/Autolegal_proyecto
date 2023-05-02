@extends('main.pdex')

@section('Titulo1')
    {{ 'Autolegal S.A.S' }}
@endsection


@section('index')
    <!--Cuerpo-->
    <main class="container">
        <h1 style="text-align: center">Bienvenido a la Empresa de Transporte</h1>
        <p style="text-align: center">Encuentra horarios y noticias de transporte interno de la ciudad</p>
        <div id="contenedor">
            <h3 style="text-align: center">Noticias mas importantes</h3>
            <br>
            <div id="slider">
                <ul>
                    <li><a href="https://www.facebook.com/search/top?q=autolegal%20s.a"><img src="https://scontent.fclo1-3.fna.fbcdn.net/v/t39.30808-6/250309291_752229382371521_4458604822691400276_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHR6X1qWNc5PPxO6O4CqPxAcYfHiChR4Htxh8eIKFHge6FXEQoska7o1HEAc96N63GaOYej3wdTxfTxrlcfb07V&_nc_ohc=MFua4guJ1zQAX_9I3Ju&_nc_ht=scontent.fclo1-3.fna&oh=00_AfCi4HBqeOagJM5BsVkQVkyIC8Iqx6o7Ksa4fs97GBY1mw&oe=64557189" alt=""></a></li>
                    <li><a href="https://caracol.com.co/emisora/2022/06/08/manizales/1654644818_279556.html"><img src="https://caracol.com.co/resizer/mYS9SCFVtQkg5Rl2UcyCjHxq-Ys=/768x576/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/HCWYCKSSBZIGHARE2XOHIE2ZL4.jpg"></a></li>
                    <li><a href=""><img src="https://i0.wp.com/imagenesbc.com/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-25-at-6_opt.jpg?resize=1140%2C641&ssl=1"></a></li>
                    <li><a href="https://www.eltiempo.com/archivo/documento/MAM-2046276"><img src="https://www.ciudadregion.com/files/2017/04/IMAGEN_1491494616.jpg"></a></li>
                </ul>
            </div>
            <div id="slider">
                <ul>
                    <li><p style="font-size: 18px">Autolegal SA hace presencia, en la #SemanaDeLaMovilidad  premiando a dos de sus mejores conductores. #SemanaDeLaMovilidad 🍃
                        ¡Visitamos las empresas de transporte público colectivo! 🚍Con música, premios y diversión, agradecimos a nuestros conductores por su compromiso con una #MovilidadMásInteligente 👍¡Gracias por trasladarnos seguros de un lugar a otro! 🚌</p></li>
                    <li><p style="font-size: 20px">Conductor de buseta convulsionó atropelló a un peatón en Manizales. <p style="font-size: 14px">El profesional del volante tenía sus signos vitales estables</p></li>
                    <li><p style="font-size: 18px">Piden mejorar el transporte público hacia la Ciudadela del Norte</p><p style="font-size: 14px">La situación del transporte público hacia la Ciudadela del Norte de Manizales se ha vuelto insostenible para sus usuarios. La gran demanda de personas que necesitan trasladarse a esa zona ha generado una larga espera en los puntos de despacho y en las paradas, ya que el número de busetas disponibles para el servicio es insuficiente.</p></li>
                    <li><p style="font-size: 20px">Cada día asaltan un bus en Manizales</p><p style="font-size: 16px">Los atracadores de busetas tienen en jaque a la capital caldense. Un total de 11 hurtos a mano armada en las últimas dos semanas pusieron contra las cuerdas a las autoridades y sembraron el miedo entre los usuarios</p></li>
                </ul>
            </div>
        </div>
        <h3>Metodos de pagos</h3>
        <div class="slider">
            <div class="slide-track">

                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/visa.svg" alt="visa">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/mastercard.svg" alt="mastercard">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/american_express.svg"
                        alt="american express">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/pse.svg" alt="PSE">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/daviplata.svg" alt="daviplata">
                </div>

                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/nequi.svg" alt="nequi">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/efecty.svg" alt="efecty">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/baloto.svg" alt="baloto">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/sured.svg" alt="sured">
                </div>
                <div class="slide"><img src="https://cdn.pinbus.com/common/img/pagos/svg/codensa.svg" alt="codensa">
                </div>
            </div>
        </div>

    </main>

    <img class="btn-whatsapp"
        src="https://static.vecteezy.com/system/resources/previews/018/819/287/non_2x/whatsapp-icon-transparent-free-png.png"
        width="50" height="50" alt="Whatsapp"
        onclick="window.location.href='https://wa.me/573001112233?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">
    <!--Fin cuerpo-->
@endsection
