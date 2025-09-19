@extends('layouts.app')

@section('title', 'Inicio - Casa de Eventos Aaron')

@section('content')
    <!-- Seccion de Paquetes -->
    <section class="top-producto">
        <div class="container">
            <h2 class="section-title">Productos De Alquiler</h2>
            <div class="product-grid">
                <!-- Producto 1 -->
                <div class="producto-card">
                    <img src="../img/Sillas.webp" alt="Sillas_Alquiler" />
                    <div class="producto-info">
                        <h3>Sillas</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="producto-card">
                    <img src="../img/Mesas.webp" alt="Mesas_Alquiler" />
                    <div class="producto-info">
                        <h3>Mesas</h3>
                        <p>Sillas de platico Rimax</p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 3 -->
               <div class="producto-card">
                    <img src="../img/Mantel.jpg" alt="Manteles_Alquiler" />
                    <div class="producto-info">
                        <h3>Mantel</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 4 -->
                 <div class="producto-card">
                    <img src="../img/Copas.png" alt="Copas_Alquiler" />
                    <div class="producto-info">
                        <h3>Juego De Copas</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 5 -->
                 <div class="producto-card">
                    <img src="../img/Vasos.png" alt="Vasos_Alquiler" />
                    <div class="producto-info">
                        <h3>Juego de Vasos</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 6 -->
                 <div class="producto-card">
                    <img src="../img/altavoz.webp" alt="Audio_Alquiler" />
                    <div class="producto-info">
                        <h3>Altavoz</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 7 -->
                 <div class="producto-card">
                    <img src="../img/Mantel_silla.jpg" alt="Manteles_Silla_Alquiler" />
                    <div class="producto-info">
                        <h3>Mantel De Silla</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 8 -->
                 <div class="producto-card">
                    <img src="../img/luces.png" alt="Luces_Alquiler" />
                    <div class="producto-info">
                        <h3>Luces</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 9 -->
                 <div class="producto-card">
                    <img src="../img/Arreglo.jpg" alt="Arreglo" />
                    <div class="producto-info">
                        <h3>Arreglo</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 10 -->
                 <div class="producto-card">
                    <img src="../img/Globos.jpg" alt="Globos_Alquiler" />
                    <div class="producto-info">
                        <h3>Globos</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 11 -->
                 <div class="producto-card">
                    <img src="../img/Tarimas.jpg" alt="Tarima_Alquiler" />
                    <div class="producto-info">
                        <h3>Tarima</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 12 -->
                 <div class="producto-card">
                    <img src="../img/Carpa.jfif" alt="Carpa_Alquiler" />
                    <div class="producto-info">
                        <h3>Carpas</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 13 -->
                 <div class="producto-card">
                    <img src="../img/Cubiertos.webp" alt="Cubiertos_Alquiler" />
                    <div class="producto-info">
                        <h3>Juego De Cubiertos</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                <!-- Producto 14 -->
                 <div class="producto-card">
                    <img src="../img/Cortinas_techo.jpg" alt="Cortinas_Techo_Alquiler" />
                    <div class="producto-info">
                        <h3>Cortinas De Techo</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>
                 <!-- Producto 15 -->
                 <div class="producto-card">
                    <img src="../img/Candelabro.jpg" alt="Candelabro_Alquiler" />
                    <div class="producto-info">
                        <h3>Candelabro</h3>
                        <p>Sillas de platico Rimax </p>
                         <div class="quantity-selector">
                          <button class="quantity-btn decrement">-</button>
                          <input type="number" class="quantity-input" value="1" min="1" max="99">
                          <button class="quantity-btn increment">+</button>
                          <div class="loading"></div>
                        </div><br><br>
                        <button class="button-container">Alquilar</button>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection