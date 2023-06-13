<x-web-layout title="Testimoni">
    <style>
        .testimonial-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Mengatur 2 kolom dengan lebar yang sama */
  gap: 20px; /* Jarak antara testimonial */
}

.testimonial {
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
}

.testimonial img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.testimonial p {
  margin-bottom: 10px;
}

.testimonial h4 {
  font-size: 18px;
}

    </style>
   <main>
      <!-- testimonial-area-start -->
      <section class="testimonial-area tptestimonial__bg pt-80 p-relative" data-background="{{ asset('assets/img/testimonial/testimonial-bg-1.jpg') }}">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <div class="tpsection mb-35">
                      <h4 class="tpsection__sub-title">~ Happy Customer ~</h4>
                      <h4 class="tpsection__title">Apa Kata Client?</h4>
                      <p>Berikut adalah testimoni dari client Gaol Production</p>
                   </div>
                </div>
             </div>
            <div class="swiper-container tptestimonial-active2 p-relative">
               <div class="swiper-wrapper">
                <?php
                    $testimoni=\App\Models\Testimoni::join('users', 'testimoni.user_id', '=', 'users.id')->get();
                ?>
                <div class="testimonial-grid">
                    @foreach ($testimoni as $item)
                    <div class="testimonial">
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                    @endforeach
                  </div>
                </div>
            </div>
         </div>
      </section>
      <!-- testimonial-area-end -->
      <div class="tpdescription__box">
         <div class="tpdescription__box-center d-flex align-items-center justify-content-center">
            <nav>
               <div class="nav nav-tabs"  role="tablist">

                 <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
               </div>
             </nav>
         </div>
         <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
               <div class="tpreview__wrapper">
                  <div class="tpreview__form">
                     <h4 class="tpreview__form-title mb-25">Tambahkan testimoni anda </h4>
                     <form action="{{ route('review.store') }}" method="POST"
                     enctype="multipart/form-data">
                     @csrf
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tpreview__input mb-30">
                                 <textarea name="deskripsi" placeholder="Masukkan testimoni anda"></textarea>
                                 <div class="tpreview__submit mt-30">
                                    <button class="tp-btn">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
</x-web-layout>
