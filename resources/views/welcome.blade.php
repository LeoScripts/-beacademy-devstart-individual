@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')
    <main class="antialiased">
        <h1 align='center'>
            Seja Bem Vindo ao
            <strong style='
                background: #1995;
                padding: 1rem;
                border-radius: 0.5rem;
            '>
                Person-System
            </strong>
        </h1>

        <div class="mt-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div  class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                    <img width="800" height="250" src="https://thumbs.dreamstime.com/b/engineering-background-gears-draft-virtual-screen-business-innovation-modern-technology-concept-engineering-background-172056072.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                    <img width="800" height="250" src="https://png.pngtree.com/illustration/20190226/ourlarge/pngtree-technology-2-5d-gradient-computer-image_12003.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" s>
                    <img width="800" height="250" src="https://res.cloudinary.com/people-matters/image/upload/fl_immutable_cache,w_624,h_351,w_624,h_351,c_scale/v1393497517/2313.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


</main>

@endSection
