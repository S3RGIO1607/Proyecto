@extends('layouts.app')

@section('title', 'Inicio - Casa de Eventos Aaron')

@section('content')
    <section class="paquetes">
  <h2>Nuestros Paquetes</h2>
  <div class="grid-paquetes">
    
    <div class="paquete-card">
      <h3>Paquete Clásico</h3>
      <p class="precio">$500.000</p>
      <ul>
        <li>Decoración básica</li>
        <li>Sonido y luces</li>
        <li>1 animador</li>
        <li>3 horas de evento</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Premium</h3>
      <p class="precio">$1.200.000</p>
      <ul>
        <li>Decoración temática</li>
        <li>DJ + animador</li>
        <li>Catering para 50 personas</li>
        <li>4 horas de evento</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Corporativo</h3>
      <p class="precio">$2.000.000</p>
      <ul>
        <li>Decoración elegante</li>
        <li>Sonido profesional</li>
        <li>Catering para 100 personas</li>
        <li>5 horas de evento</li>
        <li>Proyector y pantalla</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Boda</h3>
      <p class="precio">$3.500.000</p>
      <ul>
        <li>Decoración personalizada</li>
        <li>DJ + animador</li>
        <li>Catering para 150 personas</li>
        <li>6 horas de evento</li>
        <li>Fotografía y video</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Fiesta Infantil</h3>
      <p class="precio">$800.000</p>
      <ul>
        <li>Decoración temática infantil</li>
        <li>Animación para niños</li>
        <li>Catering para 30 niños</li>
        <li>3 horas de evento</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Aniversario</h3>
      <p class="precio">$1.500.000</p>
      <ul>
        <li>Decoración romántica</li>
        <li>DJ + animador</li>
        <li>Catering para 40 personas</li>
        <li>4 horas de evento</li>
        <li>Brindis especial</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Graduación</h3>
      <p class="precio">$2.500.000</p>
      <ul>
        <li>Decoración festiva</li>
        <li>DJ + animador</li>
        <li>Catering para 80 personas</li>
        <li>5 horas de evento</li>
        <li>Photobooth</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
    <div class="paquete-card">
      <h3>Paquete Fiesta de Fin de Año</h3>
      <p class="precio">$3.000.000</p>
      <ul>
        <li>Decoración festiva</li>
        <li>DJ + animador</li>
        <li>Catering para 100 personas</li>
        <li>6 horas de evento</li>
        <li>Brindis de medianoche</li>
      </ul>
      <a href="https://wa.me/573058364105" target="_blank" class="btn">Reservar</a>
    </div>
    
  </div>
</section>

 <section class="salon-fiesta">
  <div class="salon-galeria">
    <img src="../img/salon1.jpg" alt="Fiesta 1">
    <img src="../img/salon2.jpg" alt="Fiesta 2">
    <img src="../img/salon3.jpg" alt="Fiesta 3">
    <img src="../img/salon4.jpg" alt="Fiesta 4">
  </div>
  <div class="salon-info">
    <h2>SALÓN FIESTA <span>AARON!</span></h2>
    <div class="icono-personas">👥</div>
    <h4>ESPACIOS DISPONIBLES</h4>
    <ul class="lista-salones">
      <li>Salón Principal <span>1700 personas</span></li>
      <li>Salón VIP <span>830 personas</span></li>
      <li>Salón Terraza <span>770 personas</span></li>
      <li>Salón Jardín <span>480 personas</span></li>
    </ul>
    <a class="btn-salon" href="https://wa.me/573058364105" target="_blank">Cotiza tu evento</a>
  </div>
</section>
<section class="servicios">
  <h2><span>Servicios</span> Disponibles</h2>
  <div class="servicios-grid">
    <div class="servicio"><i class="fas fa-wifi"></i> Wifi</div>
    <div class="servicio"><i class="fas fa-parking"></i> Parqueadero</div>
    <div class="servicio"><i class="fas fa-chair"></i> Mesas</div>
    <div class="servicio"><i class="fas fa-paint-roller"></i> Decoración</div>
    <div class="servicio"><i class="fas fa-couch"></i> Sillas</div>
    <div class="servicio"><i class="fas fa-utensils"></i> Alimentos</div>
    <div class="servicio"><i class="fas fa-snowflake"></i> Aire Controlado</div>
    <div class="servicio"><i class="fas fa-volume-up"></i> Sonido</div>
    <div class="servicio"><i class="fas fa-tv"></i> Pantalla Gigante</div>
    <div class="servicio"><i class="fas fa-lightbulb"></i> Iluminación</div>
    <div class="servicio"><i class="fas fa-drum"></i> Tarima</div>
    <div class="servicio"><i class="fas fa-glass-cheers"></i> Bebidas</div>
  </div>
</section>
@endsection