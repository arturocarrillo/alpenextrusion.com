<!-- Formulario -->
<div class="col-xl-6 col-lg-6 col-md-10 col-sm-10 col-10 mt-5 mb-5 ml-auto mr-auto">
  <form id="contactForm" method="POST" action="./send_email.php
          " onsubmit="return validateForm()">
    <div class="form-group">
      <label class="t-white t-md t-light" for="name" id="f-name">Nombre:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label class="t-white t-md t-light" for="phone" id="f-tel">Teléfono:</label>
      <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label class="t-white t-md t-light" for="email" id="f-mail">Correo:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label class="t-white t-md t-light" for="message" id="f-msn">Mensaje:</label>
      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <a class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" href="#">Aviso de Privacidad</a>
    </div>
    <div class="form-group">
      <div class="g-recaptcha" data-sitekey="6LeAPvkpAAAAAAYgzPdNUjxfHOBYPaFXMDgZWBpf"></div>
    </div>
    <button type="submit" class="btn btn-form" id="f-send">Enviar</button>
  </form>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-footer">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-header d-flex-center">
        <h5 class="t-black title t-center" id="t-aviso-1">Aviso de Privacidad Integral</h5>
      </div>
      <div class="modal-body">
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Responsable del Tratamiento de sus Datos Personales</h2>
          <p class="subtitle t-justify t-black">ALPEN EXTRUSIÓN, con domicilio en Parque Industrial, Umán-Dzibikak, Kilometro 281, CP 97390, Umán, Yucatán, es responsable del tratamiento de sus datos personales conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP).</p>
        </div>
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Datos Personales que se Recaban</h2>
          <p class="subtitle t-justify t-black">Los datos personales que recabamos a través del formulario de contacto en nuestra página web incluyen:</p>
          <ol>
            <li class="subtitle t-justify t-black">Nombre</li>
            <li class="subtitle t-justify t-black">Teléfono</li>
            <li class="subtitle t-justify t-black">Correo electrónico</li>
          </ol>
        </div>
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Finalidad del Tratamiento de los Datos Personales</h2>
          <p class="subtitle t-justify t-black">Sus datos personales serán utilizados para las siguientes finalidades:</p>
          <ol>
            <li class="subtitle t-justify t-black">Primarias: Contactarlo para responder sus consultas, solicitudes, o comentarios. Proveer la información y/o servicios que haya solicitado.</li>
            <li class="subtitle t-justify t-black">Secundarias: Enviar información relacionada con nuestros productos, servicios, promociones, y eventos. Realizar encuestas de satisfacción y estudios de mercado.</li>
          </ol>
        </div>
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Medidas de Seguridad</h2>
          <p class="subtitle t-justify t-black">ALPEN EXTRUSIÓN implementa las medidas de seguridad administrativas, técnicas y físicas necesarias para proteger sus datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento no autorizado.</p>
          <h2 class="subtitle t-justify t-bold t-black">Transferencias de Datos Personales</h2>
          <p class="subtitle t-justify t-black">No compartimos sus datos personales con terceros, salvo en los casos necesarios para cumplir con obligaciones legales o con su consentimiento previo.</p>
          <h2 class="subtitle t-justify t-bold t-black">Derechos ARCO</h2>
          <p class="subtitle t-justify t-black">Usted tiene derecho a acceder, rectificar, cancelar u oponerse (Derechos ARCO) al tratamiento de sus datos personales. Para ejercer estos derechos, puede contactar a nuestro Departamento de Administración a través del correo electrónico contacto@alpenextrusion.com o en nuestro domicilio ubicado en Parque Industrial, Umán-Dzibikak, Kilometro 281, CP 97390, Umán, Yucatán.</p>
        </div>
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Modificaciones al Aviso de Privacidad</h2>
          <p class="subtitle t-justify t-black">Nos reservamos el derecho de realizar cambios o actualizaciones a este Aviso de Privacidad en cualquier momento, para la atención de novedades legislativas o políticas internas. Estas modificaciones estarán disponibles a través de nuestra página web www.alpenextrusion.com.</p>
        </div>
        <div class="col-12">
          <h2 class="subtitle t-justify t-bold t-black">Consentimiento</h2>
          <p class="subtitle t-justify t-black">Al proporcionar sus datos personales a través del formulario de contacto, usted consiente que sus datos sean tratados conforme a lo descrito en este Aviso de Privacidad.</p>
          <p class="subtitle t-justify t-black">Para cualquier duda o comentario respecto a este Aviso de Privacidad, no dude en contactarnos.</p>
          <p class="subtitle t-justify t-black">Fecha de última actualización: 15 de junio del 2024</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
