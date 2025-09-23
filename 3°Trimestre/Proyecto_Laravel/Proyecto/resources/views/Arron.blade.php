@extends('layouts.app')

@section('title', 'Inicio - Casa de Eventos Aaron')

@section('content')
     <!-- Seccion de Video -->
    <section class="welcome-video">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="../img/video.mp4" type="video/mp4">
            </video>
            <div class="overlay">
             <h1>Bienvenidos a Casa de eventos Aaron</h1>
            </div>
        </div>
    </section>

    <!-- Los mejores Productos -->
    <section class="top-products">
        <div class="container">
            <h2 class="section-title">Nuestros Eventos</h2>
            <div class="product-grid">
                <!-- Producto 1 -->
                <div class="product-card">
                    <img src="../img/fiesta.jpeg" alt="Fiesta" />
                    <div class="product-info">
                        <h3>Eventos sociales</h3>
                        <p>Las mejores fiestas temáticas y noches de Gala en Bogotá con las mejores experiencias y espectáculos en vivo.</p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="product-card">
                    <img src="../img/evento.jpeg" alt="Eventos Corporativos" />
                    <div class="product-info">
                        <h3>Eventos Corporativos</h3>
                        <p>Salones dotados con pantalla gran formato, sonido e iluminación profesional, para la realización de eventos, conferencias, charlas, capacitaciones, activaciones, muestras empresariales.</p>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="product-card">
                    <img src="../img/evento2.jpeg" alt="Eventos Culturales" />
                    <div class="product-info">
                        <h3>Eventos Culturales</h3>
                        <p>Alquiler de salas para Eventos, Espectáculos en vivo  orientadas a promover el arte, la historia, las tradiciones o el pensamiento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Galería de Imágenes -->
<section class="image-gallery">
    <div class="container">
        <h2 class="section-title">Galería de Eventos</h2>
        <div class="gallery-grid">
            <!-- 18 imágenes -->
            <img src="../img/img1.jpeg" alt="Imagen 1">
            <img src="../img/img2.jpeg" alt="Imagen 2">
            <img src="../img/img3.jpeg" alt="Imagen 3">
            <img src="../img/img4.jpeg" alt="Imagen 4">
            <img src="../img/img5.jpeg" alt="Imagen 5">
            <img src="../img/img6.jpeg" alt="Imagen 6">
            <img src="../img/img7.jpeg" alt="Imagen 7">
            <img src="../img/img8.jpeg" alt="Imagen 8">
            <img src="../img/img9.jpeg" alt="Imagen 9">
            <img src="../img/img10.jpeg" alt="Imagen 10">
            <img src="../img/img11.jpeg" alt="Imagen 11">
            <img src="../img/img12.jpeg" alt="Imagen 12">
            <img src="../img/img13.jpeg" alt="Imagen 13">
            <img src="../img/img14.jpeg" alt="Imagen 14">
            <img src="../img/img15.jpeg" alt="Imagen 15">
            <img src="../img/img16.jpeg" alt="Imagen 16">
            <img src="../img/img17.jpeg" alt="Imagen 17">
            <img src="../img/img18.jpeg" alt="Imagen 18">
        </div>
    </div>
</section>
    <!-- Seccion de Paquetes -->
    <section class="top-products">
        <div class="container">
            <h2 class="section-title">Nuestros paquetes</h2>
            <div class="product-grid">
                <!-- Paquete 1 -->
                <div class="product-card">
                    <img src="../img/tematica.jfif" alt="Fiesta_tematica" />
                    <div class="product-info">
                        <h3>Fiesta Tematica</h3>
                        <p>Este paquete cuenta con </p>
                        <button class="button-container">Conoce mas</button>
                    </div>
                </div>
                <!-- Paquete 2 -->
                <div class="product-card">
                    <img src="../img/quinceaños.jfif" alt="fiesta de 15" />
                    <div class="product-info">
                        <h3>Paquete de 15</h3>
                        <p>Este paquete cuenta con </p>
                        <button class="button-container">Conoce mas</button>
                    </div>
                </div>
                <!-- Paquete 3 -->
                <div class="product-card">
                    <img src="../img/boda.jfif" alt="Boda" />
                    <div class="product-info">
                        <h3>Paquete de Boda</h3>
                        <p>Este paquete cuenta con </p>
                        <button class="button-container">Conoce mas</button>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="product-card">
                    <img src="../img/coorporativo.jfif" alt="Coorporativo" />
                    <div class="product-info">
                        <h3>Paquete Coorporativo</h3>
                        <p>Este paquete cuenta con </p>
                        <button class="button-container">Conoce mas</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection