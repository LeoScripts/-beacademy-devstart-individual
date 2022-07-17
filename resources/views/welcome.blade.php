@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')
    <main class="antialiased">


        <div class="mt-2">
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
        <h2 class="mt-5 text-center alert alert-info">Gestao Completa de Usuarios</h2>
        <div class="d-flex justify-content-center mt-4 gap-5">
            <img width="30%" class="rounded" src="https://praxent.com/wp-content/uploads/2019/06/hybridmobileappdev.jpg" alt="">
            <img width="30%" class="rounded" src="https://mir-s3-cdn-cf.behance.net/projects/404/8e1f56137097969.Y3JvcCwxMTgyLDkyNSwxMDgsMA.jpg" alt="">
            <img width="30%" class="rounded" src="https://www.nolar.com.br/wp-content/uploads/2021/03/rescisao_comum_acordo-e1614886835710.jpeg" alt="">
        </div>


</main>

@endSection
