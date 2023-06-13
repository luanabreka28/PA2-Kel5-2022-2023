<x-web-layout title="Galeri">
   <main>
      <!-- blog-area-start -->
      <section class="blog-area pt-80">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="tpsection mb-80 mt-10">
                     <h4 class="tpsection__title">Galeri Gaol Production</h4>
                     <p>Deretan galeri dari jasa Gaol Production</p>
                  </div>
               </div>
            </div>
            <div class="row">
                @foreach ($galeri as $item)
                <div class="col-lg-4">
                    <div class="tpblog__item tpblog__item-2 mb-20">
                       <div class="tpblog__thumb fix">
                          <a href="blog-details.html"><img src="{{ asset('images/galeri/' . $item->gambar) }}" alt=""></a>
                       </div>
                       <div class="tpblog__wrapper">
                          <div class="tpblog__entry-wap">
                             <span class="post-data"><a href="#">{{ $item->tempat }}, {{ $item->tanggal }}</a></span>
                          </div>
                          <h4 class="tpblog__title"><a href="blog-details.html">{{ $item->judul }}</a></h4>
                          <p>{{ $item->deskripsi }}</p>
                       </div>
                    </div>
                 </div>
                @endforeach
            </div>
         </div>
      </section>
      <!-- blog-area-end -->
   </main>
</x-web-layout>
